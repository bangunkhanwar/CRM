<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pulsa extends MY_Controller {
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('pulsa_delivery_model');
	}
	
	public function index()
	{
	}
	
	function send_pulsa()
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api_smsblast');
		$headers['password'] 	= get_myconf('p_api_smsblast');
		$headers['sender'] 		= get_myconf('sender_smsblast');
		
		$headers['msisdn']		= $this->input->post('msisdn');
		$headers['message']		= $this->input->post('message'); // isi pesan
		$headers['schedule']	= $this->input->post('schedule'); // schedule diisi jika timed message
		$headers['requestby']	= $this->input->post('requestby'); // departement 
		$headers['campaign']	= $this->input->post('campaign');
		$headers['parse_mode']	= $this->input->post('parse_mode')?:'HTML';
		
		$date_created 			= date('Ymd H:i:s');
		$date_deliver 			= date('Ymd H:i:s');
		
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
		$data['date_created']		= $date_created;
		if($headers['schedule']){
			$data['schedule']			= $headers['schedule'];
		}
		$data['date_deliver']		= $date_deliver;
		$data['delivery_time']		= date('Ymd H:i:s');
		$data['username']			= get_myconf('u_api');
		$data['client_name']		= get_myconf('u_api');
		$data['campaign_name']		= $headers['campaign'];
		$data['departement_name']	= $headers['requestby'];
		if(isset($output_count['code']))
		{
			$data['message_id'] 	 = $output_count['msgid'];
			$data['status_id'] 		 = $output_count['code'];
			$data['status_description']= $output_count['status'];
			$data['msisdn'] 		 = $headers['msisdn'];
			$data['message'] 		 = $headers['message'];
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
				$data['status_description']= $output_count[$key]['status'];
				$data['msisdn'] 		 = $output_count[$key]['msisdn'];
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
	
	
	function check_sms($msgid='')
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