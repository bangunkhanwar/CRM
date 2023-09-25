<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Trial extends MY_Controller {

	function __construct()
	{
		$this->secure = FALSE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/messages_api_model');
	}
	
	public function index()
	{
		echo "trial";
		// password ictdevelopment2019
	}
	
	public function check_sms($msisdn='')
	{
		$campaign 	= 'Aktivasi Handphone';
		$requestby 	= 'Admin CRM';
		$seconds_limit = 600;
		$date_now 	= date('Y-m-d H:i:s');
		// $where_request['"DateCreate" + INTERVAL \' '.$seconds_limit.' seconds\'  >= NOW() '] = null;
		$where_request = array();
		$where_request['Msisdn'] = $msisdn;
		$this->messages_api_model->set_order(array('idMessage'=>'DESC'));
		$this->messages_api_model->set_limit(1);
		$check_request = $this->messages_api_model->get($where_request);
		// echo $this->db->last_query();
		
		if($check_request['idMessage']){
			if($check_request['ApiReqDate']=='')
			{
				echo "Pesan sedang dalam antrian";
				die;
			}
			if($check_request['ApiReqStatusCode']=='')
			{
				echo "Pesan sedang dalam antrian (2)";
				die;
			}
			if($check_request['ApiReqStatusCode']==1)
			{
				$time_delivered = $check_request['MessageDateDeliver'];
				// echo date("Y-m-d H:i:s", ());
				$time_otp_allowed = strtotime(date($time_delivered)) + $seconds_limit;;
				if($time_delivered=='')
				{
					echo "Pesan sedang dalam proses pengiriman";
					die;
				}
				$time_otp_allowed = date('Y-m-d H:i:s',$time_otp_allowed);
			
				$seconds_passed = strtotime($time_otp_allowed)-strtotime($date_now);
				if($time_otp_allowed>$date_now)
				{
					echo "Tunggu waktunya belum boleh request OTP ".$seconds_passed;
					die;
				}
				echo '<hr>';
				echo $seconds_passed;
			}
		}
		// echo $this->CI->messages_api_model->db->last_query();die;
		// echo json_encode($check_request);
	}
	
	
	function send_notification()
	{
		$token =  $this->input->post('token');
		$title =  $this->input->post('title');
		$body =  $this->input->post('body');
		$api_access_key ='AAAAHc_HVb0:APA91bHlwGGcBqY9zQ-LcIVNnDgWhEWP8OxYrre4vBs-SaJ4DorWBCQVl8bZZ3t_GlQVCSbdI6t6mBPkNwZVLjhDvaTyduyHjcyg8xDj2FqzBBFZsTh0qXY0wE7sFxQWlCC6j_teFdj5';
		
		if(!$token)
		{
			die('token is empty');
		}
		
		if(!$title)
		{
			die('title is empty');
		}
		
		if(!$body)
		{
			die('body is empty');
		}
		
		 $msg = array
			  (
			'body' 	=> $body,
			'title'	=> $title,
					
			  );
		$fields = array
				(
					'to'		=> $token,
					'notification'	=> $msg
				);
		
		
		$headers = array
				(
					'Authorization: key=' . $api_access_key,
					'Content-Type: application/json'
				);
	#Send Reponse To FireBase Server	
		$ch = curl_init();
		curl_setopt( $ch,CURLOPT_URL, 'https://fcm.googleapis.com/fcm/send' );
		curl_setopt( $ch,CURLOPT_POST, true );
		curl_setopt( $ch,CURLOPT_HTTPHEADER, $headers );
		curl_setopt( $ch,CURLOPT_RETURNTRANSFER, true );
		curl_setopt( $ch,CURLOPT_SSL_VERIFYPEER, false );
		curl_setopt( $ch,CURLOPT_POSTFIELDS, json_encode( $fields ) );
		$result = curl_exec($ch );
		echo $result;
		curl_close( $ch );
		// echo "success:<br>";
	}
		
	
}