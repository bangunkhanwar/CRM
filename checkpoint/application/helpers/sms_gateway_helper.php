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
			$result = array();
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
		$url = get_myconf('ws_api')."cron/api_sms_request";
		$ch = curl_init();
		$headers = array();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);
		$output = json_decode($server_output,true);
		curl_close ($ch);
		return $output;
	}
	
	function api_sms_check()
	{
		$url = get_myconf('ws_api')."cron/api_sms_check";
		$ch = curl_init();
		$headers = array();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);
		$output = json_decode($server_output,true);
		curl_close ($ch);
		return $output;
	}
	
	function check_request_sms_old($phone,$requestby,$campaign,$seconds_limit)
	{
		$where_request = array();
		$where_request['Msisdn'] 	= $phone;
		// di komen dulu, jadi tiap cust dengan no sama tidak bisa request otp kembali sebelum jeda
		// $where_request['RequestBy'] = $requestby;
		// $where_request['Campaign'] = $campaign;
		$where_request['"DateCreate" + INTERVAL \' '.$seconds_limit.' seconds\'  >= NOW() '] = null;
		$this->CI->messages_api_model->set_order(array('idMessage'=>'DESC'));
		$this->CI->messages_api_model->set_limit(1);
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
				$result['message']	= 'Sms sedang dalam antrian';
				header('Content-type: application/json');
				$this->result['error']=$result['message'];
				$this->result['header']='info';
				$this->result['success']='';
				echo json_encode($this->result);
				exit;
			}
			if($check_request['ApiReqStatusCode']=='')
			{
				$result['message']	= 'Message not found';
				header('Content-type: application/json');
				$this->result['error']=$result['message'];
				$this->result['header']='error';
				$this->result['success']='';
				echo json_encode($this->result);
				exit;
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
						$result['message']	= 'Sms sedang dalam proses, mohon menunggu';
						header('Content-type: application/json');
						$this->result['error']=$result['message'];
						$this->result['header']='info';
						$this->result['success']='';
						echo json_encode($this->result);
						exit;
					}
					$time_otp_allowed = date('Y-m-d H:i:s',$time_otp_allowed);
				
					$seconds_passed = strtotime($time_otp_allowed)-strtotime($date_now);
					// die(print_r($check_request));
					if($time_otp_allowed>$date_now)
					{
						$result['message']	= 'OTP Sudah dikirim, silahkan konfirmasi kepada customer, jika customer belum menerima SMS pastikan kembali inputan no hp sudah benar. atau tunggu ('.$seconds_passed.') detik sebelum Request OTP kembali';
						header('Content-type: application/json');
						$this->result['error']=$result['message'];
						$this->result['header']='info';
						$this->result['success']='';
						echo json_encode($this->result);
						exit;
					}
				}
			}
		}
		return $check_request;
	}
} 