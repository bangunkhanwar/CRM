<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Cron extends MY_Controller {

	function __construct()
	{
		$this->secure = FALSE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
		// $this->load->model('messages_model');
		$this->load->model('cron_log_model');
		$this->load->model('transaction/sales_model');
		$this->load->model('master/api_cron_log_model');
		$this->load->model('reporting/cust_sales_model');
	}
	
	public function index()
	{
		echo "cron";
		// password ictdevelopment2019
	}
	
	public function test()
	{
		$this->sms->remove_idle_job();
	}
	
	public function api_gen_sales_cust()
	{
		$date_start 	= $this->input->post('date_from')?:date('Ymd');
		$date_end 		= $this->input->post('date_to')?:date('Ymd');
		
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$client = 'WS_REPORT_SALES_CUST';
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		
		$get_api_cron = $this->api_cron_log_model->get($where_log);
		
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
		
		$start_cron = $this->api_cron_log_model->saveTo($data_api_log);
		
		$job_count = 0;
		$regtype = 0;
		$current_job_number = 0;
		
		$where_sales = array();
		$where_sales['( "TransStatus" = 8 OR "TransStatus" = 9 )']	= null;
		$where_sales['( "TransDate" BETWEEN \''.$date_start.'\' AND \''.$date_end.'\' )']	= null;
		$where_sales['( "CustCode" <> \'\' )']	= null;
		
		$this->sales_model->set_where($where_sales);
		$group = array();
		$group['tbl."CustCode"'] = null;
		$group['tbl."TransDate"'] = null;
		$this->sales_model->set_group($group);
		
		$list_sales  = $this->sales_model->get_sales_cust();
		
		// echo $this->db->last_query();
		// die;
		$job_count = $list_sales->num_rows();
		// start the job
		$data_cust_sales = array();
		foreach($list_sales->result_array() as $key=>$row)
		{
			$current_job_number++;
			$data_cust_sales['CustCode'] 		= $row['CustCode'];
			$data_cust_sales['TransDate'] 		= $row['TransDate'];
			$data_cust_sales['GrossSalesTot'] 	= $row['GrossSalesTot'];
			$data_cust_sales['DiscountTot'] 	= $row['DiscountTot'];
			$data_cust_sales['RetailSalesTot'] 	= $row['RetailSalesTot'];
			$data_cust_sales['PaymentCash'] 	= $row['PaymentCash'];
			$data_cust_sales['Return'] 			= $row['Return'];
			$data_cust_sales['QtyItem'] 		= $row['QtyItem'];
			$data_cust_sales['CashBack'] 		= $row['CashBack'];
			$data_cust_sales['Round'] 			= $row['Round'];
			
			$this->cust_sales_model->save($data_cust_sales);
			
			$data_cron_running = array();
			$data_cron_running['id_api_request']	= $start_cron;
			$data_cron_running['Remark']	= '('.$current_job_number.'/'.$job_count.') finished job';
			// $data_cron_running['Remark']	= $url;
			$data_cron_running['CurrentProcess']	= date('Ymd H:i:s'); 
			$data_cron_running['JobCount']	=  $job_count;
			
			$update_cron = $this->api_cron_log_model->save($data_cron_running);
		}
		// end the job
		
		$data_cron_finish = array();
		$data_cron_finish['id_api_request']		= $start_cron;
		$data_cron_finish['EndProcess']	= date('Ymd H:i:s'); 
		$data_cron_finish['Remark']		= 'Finished';
		$data_cron_finish['JobCount']	=  $job_count;
		
		// $finish_cron = $this->api_cron_log_model->save($data_cron_finish);
		$delete_cron = $this->db->delete('ws.ApiCronLog',array('id_api_request'=>$start_cron));

		$result['statusCode']	= 1;
		$result['message']	=  'Job Processed..!';
		$result['data']		=  $data_cron_finish;
		header('Content-type: application/json');
		die(json_encode($result));
	}
	
	
	function remove_idle_job($client = 'WS_SALES_GEN_POINT')
	{
		// untuk hapus job log yang idle (stuck)
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		$date_expiry = strtotime("-1 day");
		$get_api_cron = $this->api_cron_log_model->get($where_log);
		// echo $this->db->last_query();
		$timestamp_current_job = strtotime(date('Ymd H:i:s',strtotime($get_api_cron['CurrentProcess'])));
		$timestamp_start_job = strtotime(date('Ymd H:i:s',strtotime($get_api_cron['StartProcess'])));
		if(($get_api_cron['CurrentProcess']!='') && (($date_expiry) >= ($timestamp_current_job)))
		{
			if($get_api_cron['id_api_request']!='')
			{
				// remove job yg stuck selama 1 jam
				$delete_cron = $this->db->delete('ws.ApiCronLog',array('id_api_request'=>$get_api_cron['id_api_request']));
			}
		}
		if($get_api_cron['CurrentProcess']=='')
		{
			if($get_api_cron['id_api_request']!='')
			{
				// kill process jika tidak jalan selama 12 jam lebih
				$date_expiry_notrun = strtotime("-12 hour");
				if(($date_expiry_notrun) >= ($timestamp_start_job))
				{
					$delete_cron = $this->db->delete('ws.ApiCronLog',array('id_api_request'=>$get_api_cron['id_api_request']));
				}
			}
		}
	}
	
	
	public function api_gen_sales_point()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$client = 'WS_SALES_GEN_POINT';
		$where_log = array();
		$where_log['EndProcess'] = null;
		$where_log['RequestClient'] = $client;
		$this->remove_idle_job($client);
		
		$get_api_cron = $this->api_cron_log_model->get($where_log);
		
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
		
		$start_cron = $this->api_cron_log_model->saveTo($data_api_log);
		
		$where_job = array();
		// $where_job['"TransNum" NOT IN ( SELECT "TransNum" FROM terminal."LogSalesPoint" ) '] = null;
		$where_job['(tbl."TransStatus" = 9 OR tbl."TransStatus" = 8)'] = null;
		$where_job['tbl."TransDate" >= \'20190401\''] = null;
		$where_job['tbl."CustCode" <> \'\''] = null;
		$where_job['lsp."TransNum" IS NULL'] = null;
		
		$this->sales_model->set_where($where_job);
		$this->sales_model->set_limit(20000);
		$job_list = $this->sales_model->get_list();
		// echo $this->db->last_query();
		// die;
		$regtype = 0;
		$current_job_number = 0;
		
		foreach($job_list->result_array() as $key=>$row)
		{
			$current_job_number++;
			$headers = array();
			$headers['username'] 	= get_myconf('u_api_self');
			$headers['password'] 	= get_myconf('p_api_self');
			
			$url = get_myconf('ws_api')."d/point_sales/".$row['TransNum'];
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);
			$outputsms = json_decode($server_output,true);
			curl_close ($ch);
			
			$data_cron_running = array();
			$data_cron_running['id_api_request']	= $start_cron;
			$data_cron_running['Remark']	= '('.$current_job_number.'/'.$job_list->num_rows().') finished job';
			// $data_cron_running['Remark']	= $url;
			$data_cron_running['JobCount']	=  $job_list->num_rows();
			$data_cron_running['CurrentProcess']	=  date('Ymd H:i:s');
			
			$update_cron = $this->api_cron_log_model->save($data_cron_running);
		}
		
		$data_cron_finish = array();
		$data_cron_finish['id_api_request']		= $start_cron;
		$data_cron_finish['EndProcess']	= date('Ymd H:i:s'); 
		$data_cron_finish['Remark']		= 'Finished';
		$data_cron_finish['JobCount']	=  $job_list->num_rows();
		
		// $finish_cron = $this->api_cron_log_model->save($data_cron_finish);
		
		$delete_cron = $this->db->delete('ws.ApiCronLog',array('id_api_request'=>$start_cron));
		

		$result['statusCode']	= 1;
		$result['message']	=  'Job Processed..!';
		$result['data']		=  $data_cron_finish;
		header('Content-type: application/json');
		die(json_encode($result));
	}
	
	public function vr()
	{
		//0. pastikan tidak sendang dalam proses
		//1. ambil list member yang belum verifikasi dan belum dikirimkan notif otp
		//2. looping data
		//3. generate OTP
		//4. send to SMS / Email to customer
		//5. Done
		die('Greeting di non aktifkan sementara');
		$where_log = array();
		$where_log['ProcessEnd'] = null;
		
		$get_cron = $this->cron_log_model->get($where_log);
		
		if($get_cron['idCron'])
		{
			die('job on duty');
		}
		
		$save_cron = $this->cron_log_model->saveTo(array('ProcessStart'=>date('Ymd H:i:s'),'Remark'=>'Start'));
		
		$notif_list = $this->member_model->get_available_notif();
		
		$regtype = 0;
		
		foreach($notif_list->result_array() as $key=>$row)
		{
			if($row['Email']!='')
			{
				if(filter_var($row['Email'], FILTER_VALIDATE_EMAIL)) // validasi format email
				{
					$regtype = 5;
				}
			}
			if($row['Handpone']!='')
			{
				if(is_numeric($row['Handpone']))
				{
					$regtype = 3;
				}
			}
			
			$otp_key =  mt_rand(100000, 999999); // prevent duplicate
			
			// $data['idMessage'] = null; // serial
			$data['MemberCode'] = $row['MemberCode']; // id member
			$data['Message'] = 'Assalamualaikum Wr Wb. Terima kasih telah bergabung bersama ELCORPS Lifestyle. Verifikasi no. handpone anda kpd kasir dgn menyebutkan kode OTP Berikut : '.$otp_key; // message to client
			$data['SentTime'] = date('Ymd H:i:s'); // 2019-02-20 09:11:56 waktu prose pengiriman
			$data['Sender'] = 'Crontab CRM'; // pengirim notif
			$data['MessageType'] = $regtype; // 3. Sent VIA SMS, 5. Send VIA Email
			$data['ResponseCode'] = $otp_key; // Kode OTP, sesuai yg dikirim di message
			//$data['ResponseRemark'] = null; // response message (sukses/failed) 
			//$data['ResponseTime'] = null; // waktu respon dari apps
			
			$data_mbr['MemberCode']	= $row['MemberCode'];		
			$data_mbr['OTP']	    = $otp_key;		
			$save = $this->member_model->save($data_mbr);	
			
			// send message
			if($row['Handpone']!='')
			{
				// $this->send_sms_otp($row['Handpone'],$data['Message']);
				$data_msg = array();
				$data_msg['Msisdn']		= $row['Handpone'];
				$data_msg['Message']	= $data['Message'];
				$data_msg['OTP'] 		= $otp_key;
				$data_msg['MemberCode'] = $row['MemberCode'];
				$data_msg['Campaign'] 	= 'SMS Greeting';
				$data_msg['RequestBy'] 	= get_myconf('app_name');
				$this->sms->set_messages($data_msg);
				// print_r($this->sms->get_messages());
				$this->sms->send_messages();
			}
			if($row['Email']!='')
			{
				// $this->send_email_otp($row['Email'],$otp_key);
			}
			
			
			// $save_message = $this->messages_model->saveTo($data);
			
			// print_r($notif_list);
		}
		
		$total_job = $notif_list->num_rows();
		
		$update_cron = $this->cron_log_model->save(array('idCron'=>$save_cron,'ProcessEnd'=>date('Ymd H:i:s'),'Remark'=>'Sukses','MessageCount'=>$total_job));

		echo "verify register";
	}
	
	public function send_sms_otp($telp,$msg)
	{
		$headers = array();
		$headers['username'] 	= 'ict';
		$headers['password'] 	= 'ict@api2018';
		$headers['sender'] 		= 'elcorps';
		$headers['message'] 	= $msg;
		$headers['msisdn'] 		= $telp;
		$headers['requestby'] 	= 'ICT'; // departement or username
		$headers['campaign'] 	= 'SMS OTP';
		// print_r($headers);
		// print_r($_POST);
		// die;
		$url = "http://crm.elcorps.com:89/api/sms/send_sms";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, $headers['username'].":".$headers['password']); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		
		# Print response.
		echo "$server_output";
	}
	
	public function send_email_otp($email,$otp_key)
	{
		$data = array();
		$data['subject'] = 'CRM, Welcome';
		$data['sendto'] = $email;
		$data['otp']	=	$otp_key;
		
		if(!isset($data['sendto']))
		{
			echo 'destination is empty';
			die;
		}
		
		if(!isset($data['subject']))
		{
			echo 'subject is empty';
			die;
		} 
		$post_email_address = $data['sendto'];
		

		$config = Array(
			 'protocol' => 'smtp',
			 'smtp_host' => 'mail.elzatta.com',
			 'smtp_port' => 25,
			 'smtp_user' => 'no-replay@elhijab.id',//$store_retur.'@elzatta.com', // change it to yours
			 'smtp_pass' => 'elzatta@admin',//'elzatta@'.$retur['StoreCode'], // change it to yours
			 'mailtype' => 'html',
			 'charset' => 'iso-8859-1',
			 'wordwrap' => TRUE
		  ); 
        $this->email->initialize($config);
        $this->email->from('no-replay@elhijab.id','elhijab');
        $this->email->to($post_email_address);
		$this->email->cc('agussuwerdo@elzatta.com');

		$url=site_url();
		$message = $this->load->view('email_welcome',$data,TRUE);
		$this->email->subject($data['subject']);
        $this->email->message($message);
		// $this->email->send();
        	// echo $message;
		if(!$this->email->send()){
			echo $this->email->print_debugger();
		   // $this->error('Send email Failed..!!!!') ;
	    }
	}
	
	function view_email()
	{
		$data = array();
		$data['otp']	=	123456;
		// echo "ggg";
		  $this->load->view('email_welcome',$data);
	}
	
	function api_sms_request_v1()
	{
		$this->sms->api_sms_request();
		
	}
	
	function api_sms_check_v1()
	{
		$this->sms->api_sms_check();
	}
}