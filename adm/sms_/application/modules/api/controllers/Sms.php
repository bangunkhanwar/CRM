<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('sms_delivery_model');
	}
	
	public function index()
	{
	}
	
	function trial()
	{
		$records = array();
		
		// $records = array('code'=>'1','status'=>'SUCCESS','message'=>'RECIPIENT PROCESSED','msgid'=>'8545864');
			array_push($records,array('code'=>'1','status'=>'SUCCESS','message'=>'RECIPIENT PROCESSED','msgid'=>'9007590336','msisdn'=>'087722301557'));
			array_push($records,array('code'=>'0','status'=>'FAILED','message'=>'INSUFFICIENT TOKEN','msgid'=>'20212112','msisdn'=>'087722301557'));
		header('Content-type: application/json');
		echo json_encode($records);
	}
	
	function send_sms()
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api_smsblast');
		$headers['password'] 	= get_myconf('p_api_smsblast');
		$headers['sender'] 		= get_myconf('sender_smsblast');
		
		$headers['msisdn']		= $this->input->post('msisdn');
		$headers['message']		= $this->input->post('message');
		$headers['schedule']	= $this->input->post('schedule');
		$headers['requestby']	= $this->input->post('requestby'); // departement 
		$headers['campaign']	= $this->input->post('campaign');
		$headers['parse_mode']	= $this->input->post('parse_mode')?:'HTML';
		
		if((!$headers['msisdn']) || (!$headers['message']))
		{
			echo json_encode(array('code'=>'0','status'=>'FAILED','message'=>'INCOMPLETE PARAMETERS','msgid'=>null,'msisdn'=>null));
			die;
		}
		
		$report_delivery = array();
		
		$msg_exploded = explode(",",$headers['msisdn']);
		if(count($msg_exploded)>1)
		{
			$url = "https://smsblast.id/api/sendmultiple.json";
			
		}else
		{
			$url = "https://smsblast.id/api/sendsingle.json";
		}
		
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		
		# Print response.
		
		$output_count = json_decode($server_output, true);
		// print_r($output_count);
		$data = array();
		if(isset($output_count['code']))
		{
			$data['message_id'] 	 = $output_count['msgid'];
			$data['status_id'] 		 = $output_count['code'];
			// $data['msisdn'] 		 = $output_count['status'];
			$data['message'] = $headers['message'];
			// $data['delivery_status'] = $output_count['msisdn'];
			$data['delivery_status']  = $output_count['message'];
			if($data['message_id'])
			{
				$this->sms_delivery_model->save($data);
			}
		}else
		{
			foreach($output_count as $key=>$row)
			{
				$data['message_id'] 	 = $output_count[$key]['msgid'];
				$data['status_id'] 		 = $output_count[$key]['code'];
				// $data['msisdn'] 		 = $output_count[$key]['status'];
				// $data['delivery_status'] = $output_count[$key]['message'];
				// $data['delivery_status'] = $output_count[$key]['msisdn'];
				$data['message'] 			= $headers['message'];
				$data['delivery_status'] 	= $output_count[$key]['message'];
				if($data['message_id'])
				{
					$this->sms_delivery_model->save($data);
				}
			}
		}
		
		header('Content-type: application/json');
		echo "$server_output";
	}
	
	function check_token()
	{
		$data = array();
		$headers['username'] 	= get_myconf('u_api_smsblast');
		$headers['password'] 	= get_myconf('p_api_smsblast');
				
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL,"https://smsblast.id/api/token.json");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	
	
	function check_sms($msgid)
	{
		$data = array();
		$headers['username'] 	= get_myconf('u_api_smsblast');
		$headers['password'] 	= get_myconf('p_api_smsblast');
		$headers['msgid'] 		= $msgid;
				
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL,"https://smsblast.id/api/check.json");
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	
}