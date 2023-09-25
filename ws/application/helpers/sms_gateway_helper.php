<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
class Sms_gateway {
	private $messages = array();
	
	function __construct()
	{
		$this->messages['DateCreate'] = date('Ymd H:i:s');
		$this->messages['MessageType'] = 'SMS';
		$this->messages['SenderID'] = 'elcorps';
		$this->messages['RequestBy'] = get_myconf('app_name');
		$this->messages['Campaign'] = 'Unknown';
		$this->messages['Noaccent'] = 'False';
		// $this->messages['Provider'] = '';
		$this->messages['SMSType'] = 2;
		$this->CI =& get_instance();
		$this->CI->load->model('master/messages_api_model');
		$this->CI->load->model('master/api_cron_log_model');
	}
	
	function remove_idle_job($client = 'WS_TEST')
	{
		// untuk hapus job log yang idle (stuck)
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		$date_expiry = strtotime("-1 hour");
		$get_api_cron = $this->CI->api_cron_log_model->get($where_log);
		// echo $this->CI->db->last_query();
		$timestamp_current_job = strtotime(date('Ymd H:i:s',strtotime($get_api_cron['CurrentProcess'])));
		if(($get_api_cron['CurrentProcess']!='') && (($date_expiry) >= ($timestamp_current_job)))
		{
			if($get_api_cron['id_api_request']!='')
			{
				// remove job yg stuck selama 1 jam
				$delete_cron = $this->CI->db->delete('ws.ApiCronLog',array('id_api_request'=>$get_api_cron['id_api_request']));
			}
		}
		if($get_api_cron['CurrentProcess']=='')
		{
			if($get_api_cron['id_api_request']!='')
			{
				// kill process jika tidak jalan selama 2 jam lebih
				$date_expiry_notrun = strtotime("-2 hour");
				if(($date_expiry_notrun) >= ($timestamp_current_job))
				{
					$delete_cron = $this->CI->db->delete('ws.ApiCronLog',array('id_api_request'=>$get_api_cron['id_api_request']));
				}
			}
		}
	}
	
	function set_messages($arraydata)
	{
		foreach($arraydata as $key=>$data)
		{
			$this->messages[$key] = $data;
		}
	}
	
	function get_messages()
	{
		return $this->messages;
	}
	
	function get_duplicate_message($msisdn,$seconds=360)
	{
		/* ADDED 2015-05-24 09:25 */
		/* Blocking duplikasi pesan dari pengirim yang sama dalam kurun waktu 5 menit */
		$qry = 'SELECT * FROM ws."Messages" WHERE "DateCreate" + interval \''.$seconds.' seconds\' > now() AND "Msisdn" = \''.$msisdn.'\'';
		
		$query = $this->CI->db->query($qry);
		
		$row_data = $query->row_array();
		
        if($query->num_rows()>0)
		{
			$result['code']		= 0;
			$result['msgid']  	= $msisdn;
			$result['status']   = $row_data['ApiCheckStatusDescription'];
			$result['message']	=  'Message Already Requested';
			$result['success']	=  'Message Processed';
			$result['data']		= $query->result_array();
			
			header('Content-type: application/json');
			die(json_encode($result));
		}
	}
	
	function send_messages()
	{
		$sms_max_char = 160;
		$result = array();
		$result['code']	  = 0;
		$result['msgid']  = 0;
		$result['status']  = 'Failed';
		if($this->messages['Message']=='')
		{
			$result['message']	= 'Message is empty..!';
			header('Content-type: application/json');
			// json_encode(die(json_encode($result)));
			return $result;
		}
		if($this->messages['Msisdn']=='')
		{
			$result['message']	= 'Msisdn is empty..!';
			header('Content-type: application/json');
			return $result;
		}

		
		$this->messages['SmsCount'] = ceil(strlen($this->messages['Message'])/$sms_max_char);
		$this->messages['SmsCharCount'] = strlen($this->messages['Message']);
		$this->get_duplicate_message($this->messages['Msisdn']);
		$save_sms = $this->CI->messages_api_model->saveTo($this->messages);
		if($save_sms)
		{
			// $this->api_sms_request(); // ditambahkan karena cron dimatikan. (sms request manual)
			$result['code']		= 1;
			$result['msgid']  	= $save_sms;
			$result['status']  = 'Success';
			$result['message']	=  'Message Requested';
			$result['data']		= $this->messages;
			return $result;
		}
		// $this->messages['OTP'] = 'oke';
	}
	
	function api_sms_request()
	{
		$limit_request = 10000;
		
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$client = 'WS_SMS_APP_REQUEST';
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		$this->remove_idle_job($client);
		$get_api_cron = $this->CI->api_cron_log_model->get($where_log);
		
		if($get_api_cron['id_api_request'])
		{
			$result['message']	= 'job on process';
			$result['data'] 	= $get_api_cron;
			header('Content-type: application/json');
			die(json_encode($result));
		}
		
		$data_api_log = array();
		$data_api_log['RequestClient'] 	= $client;
		$data_api_log['Remark'] 		= 'Started';
		$data_api_log['StartProcess'] 	= date('Ymd H:i:s');
		
		$start_cron = $this->CI->api_cron_log_model->saveTo($data_api_log);
		
		$where_job = array();
		$where_job['ApiReqDate'] 						= null;
		// $where_job['"Msisdn" <> \'087722301557\'']	= null;
		// $where_job['"Campaign" <> \'SMS Greeting\'']	= null;
		// $where_job['"ApiReqDate" is NULL OR "ApiReqMessageResponse" = \'NOT ENOUGH TOKEN\'']	= null;
		
		$this->CI->messages_api_model->set_where($where_job);
		if($limit_request)
		{
			$this->CI->messages_api_model->set_limit($limit_request);
		}
		$job_list = $this->CI->messages_api_model->get_list();
		// echo $this->CI->db->last_query();
		// die;
		$regtype = 0;
		$current_job_number = 0;
		
		foreach($job_list->result_array() as $key=>$row)
		{
			$current_job_number++;
			$headers = array();
			$headers['username'] 	= get_myconf('u_api');
			$headers['password'] 	= get_myconf('p_api');
			$headers['sender'] 		= $row['SenderID'];
			$headers['message'] 	= $row['Message'];
			$headers['msisdn'] 		= $row['Msisdn'];
			$headers['requestby'] 	= $row['RequestBy'];
			$headers['campaign'] 	= $row['Campaign'];
			$headers['noaccent'] 	= $row['Noaccent'];
			if($row['Schedule'])
			{
				$headers['schedule'] = $row['Schedule'];
			}
			
			$url = get_myconf('url_api')."api/sms/send_sms";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);
			$outputsms = json_decode($server_output,true);
			curl_close ($ch);
			
			$data_update_messages = array();
			$data_update_messages['idMessage'] 				= $row['idMessage'];
			$data_update_messages['ApiReqDate'] 			= date('Ymd H:i:s');
			$data_update_messages['ApiReqMsgID'] 			= $outputsms['msgid']?:0;
			$data_update_messages['ApiReqStatusCode']		= $outputsms['code']?:0;
			$data_update_messages['ApiReqStatusDescription'] = $outputsms['status'];
			$data_update_messages['ApiReqMessageResponse'] 	= $outputsms['message'];
			
			$save_update = $this->CI->messages_api_model->save($data_update_messages);
			
			$data_cron_running = array();
			$data_cron_running['id_api_request']	= $start_cron;
			$data_cron_running['Remark']	= '('.$current_job_number.'/'.$job_list->num_rows().') finished job';
			$data_cron_running['JobCount']	=  $job_list->num_rows();
			
			$update_cron = $this->CI->api_cron_log_model->save($data_cron_running);
		}
		
		$data_cron_finish = array();
		$data_cron_finish['id_api_request']	= $start_cron;
		$data_cron_finish['EndProcess']		= date('Ymd H:i:s');
		$data_cron_finish['Remark']			= 'Finished';
		$data_cron_finish['JobCount']		=  $job_list->num_rows();
		
		// $finish_cron = $this->CI->api_cron_log_model->save($data_cron_finish);

		$data = array(
					   'EndProcess' =>  date('Ymd H:i:s'),
					   'Remark' => 'Finished',
					   'JobCount' => $job_list->num_rows()
					);
		// $where_log['EndProcess'] = null;

		// $this->CI->db->where(array('EndProcess'=> null,'RequestClient'=>$client));
		// $this->CI->db->update('ws."ApiCronLog"', $data);

		$delete_cron = $this->CI->db->delete('ws.ApiCronLog',array('id_api_request'=>$start_cron));
		
		
		$result['statusCode']	= 1;
		$result['message']		=  'Job Processed..!';
		$result['data']			=  $data_cron_finish;
		header('Content-type: application/json');
		die(json_encode($result));
	}
	
	function api_sms_check()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$client = 'WS_SMS_APP_CHECK';
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		$this->remove_idle_job($client);
		
		$get_api_cron = $this->CI->api_cron_log_model->get($where_log);
		
		if($get_api_cron['id_api_request'])
		{
			$result['message']	= 'job on process';
			$result['data'] 	= $get_api_cron;
			header('Content-type: application/json');
			die(json_encode($result));
		}
		
		$data_api_log = array();
		$data_api_log['RequestClient'] 	= $client;
		$data_api_log['Remark'] 		= 'Started';
		$data_api_log['StartProcess'] 	= date('Ymd H:i:s');
		
		$start_cron = $this->CI->api_cron_log_model->saveTo($data_api_log);
		
		$where_job = array();
		$where_job['"ApiReqDate" is not null'] = null;
		// $where_job['ApiCheckDate'] = null;
		$where_job['("ApiCheckStatusCode" IS NULL OR "ApiCheckStatusCode" <= 2)'] = null;
		
		$this->CI->messages_api_model->set_where($where_job);
		$job_list = $this->CI->messages_api_model->get_list();
		// echo $this->CI->db->last_query();
		// die;
		$regtype = 0;
		$current_job_number = 0;
		
		foreach($job_list->result_array() as $key=>$row)
		{
			$current_job_number++;
			$headers = array();
			$headers['username'] 	= get_myconf('u_api');
			$headers['password'] 	= get_myconf('p_api');
			if($row['Schedule'])
			{
				$headers['schedule'] = $row['Schedule'];
			}
			
			$url = get_myconf('url_api')."api/sms/check_sms/".$row['ApiReqMsgID'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);
			$outputsms = json_decode($server_output,true);
			curl_close ($ch);
			
			$data_update_messages = array();
			$data_update_messages['idMessage'] 				= $row['idMessage'];
			$data_update_messages['ApiCheckDate'] = date('Ymd H:i:s');
			if($outputsms['code'])
			$data_update_messages['ApiCheckStatusCode'] = $outputsms['code']?:0;
			if($outputsms['date-deliver'])
			$data_update_messages['MessageDateDeliver'] = $outputsms['date-deliver'];
			$data_update_messages['ApiCheckStatusDescription'] = $outputsms['status'];
		
			$save_update = $this->CI->messages_api_model->save($data_update_messages);
			
			$data_cron_running = array();
			$data_cron_running['id_api_request']	= $start_cron;
			$data_cron_running['Remark']	= '('.$current_job_number.'/'.$job_list->num_rows().') finished job';
			$data_cron_running['JobCount']	=  $job_list->num_rows();
			
			$update_cron = $this->CI->api_cron_log_model->save($data_cron_running);
		}
		
		$data_cron_finish = array();
		$data_cron_finish['id_api_request']		= $start_cron;
		$data_cron_finish['EndProcess']	= date('Ymd H:i:s'); 
		$data_cron_finish['Remark']		= 'Finished';
		$data_cron_finish['JobCount']	=  $job_list->num_rows();
		
		// $finish_cron = $this->CI->api_cron_log_model->save($data_cron_finish);

		$data = array(
					   'EndProcess' =>  date('Ymd H:i:s'),
					   'Remark' => 'Finished',
					   'JobCount' => $job_list->num_rows()
					);
		// $where_log['EndProcess'] = null;

		// $this->CI->db->where(array('EndProcess'=> null,'RequestClient'=>$client));
		// $this->CI->db->update('ws."ApiCronLog"', $data);

		$delete_cron = $this->CI->db->delete('ws.ApiCronLog',array('id_api_request'=>$start_cron));

		$result['statusCode']	= 1;
		$result['message']	=  'Job Processed..!';
		$result['data']		=  $data_cron_finish;
		header('Content-type: application/json');
		die(json_encode($result));
	}
	
	function check_request_sms_old($phone,$requestby,$campaign,$seconds_limit)
	{
		$where_request = array();
		$where_request['Msisdn'] 	= $phone;
		$where_request['RequestBy'] = $requestby;
		$where_request['Campaign'] = $campaign;
		$where_request['"DateCreate" + INTERVAL \' '.$seconds_limit.' seconds\'  >= NOW() '] = null;
		$this->CI->messages_api_model->set_order(array('idMessage'=>'DESC'));
		$check_request = $this->CI->messages_api_model->get($where_request);
		// echo $this->CI->messages_api_model->db->last_query();die;
		return $check_request;
	}
	
	function check_request_sms($phone,$requestby,$campaign,$seconds_limit)
	{
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$date_now 	= date('Y-m-d H:i:s');
		$where_request = array();
		$where_request['Msisdn'] 	= $phone;
		// $where_request['RequestBy'] = $requestby;
		// $where_request['Campaign'] = $campaign;
		$this->CI->messages_api_model->set_order(array('idMessage'=>'DESC'));
		$this->CI->messages_api_model->set_limit(1);
		$check_request = $this->CI->messages_api_model->get($where_request);
		
		if($check_request['idMessage']){
			if($check_request['ApiReqDate']=='')
			{
				$result['message']	= 'Message on queue';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			if($check_request['ApiReqStatusCode']=='')
			{
				$result['message']	= 'Message not found';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			if($check_request['ApiReqStatusCode']==1)
			{
				if($check_request['ApiCheckStatusCode']==4)
				{
					$time_delivered = $check_request['MessageDateDeliver'];
					// echo date("Y-m-d H:i:s", ());
					$time_otp_allowed = strtotime(date($time_delivered)) + $seconds_limit;;
					if($time_delivered=='')
					{
						$result['message']	= 'Message in delivery';
						header('Content-type: application/json');
						echo die(json_encode($result));
					}
					$time_otp_allowed = date('Y-m-d H:i:s',$time_otp_allowed);
					// $seconds_passed = '';
					$seconds_passed = strtotime($time_otp_allowed)-strtotime($date_now);
					// die(print_r($check_request));
					if($time_otp_allowed>$date_now)
					{
						$result['message']	= 'Please wait ('.$seconds_passed.') sec before request another OTP';
						$result['timer']		= $seconds_passed;
						header('Content-type: application/json');
						echo die(json_encode($result));
					}
				}
			}
		}
		// $check_request['seconds_passed'] =$seconds_passed;
		return $check_request;
	}
} 