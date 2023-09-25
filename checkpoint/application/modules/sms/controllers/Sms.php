<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms extends MY_Controller {

	var	$modulname = 'sms';
	var	$classname = 'Sms';
	
	function __construct()
	{
		parent::__construct();
		$this->validate_role(11);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('files/activity_log_model');
		$sms = $this->load->library('sms_gateway',null,'sms'); 
	}
	
	public function index()
	{
		 // echo "v".phpinfo();
		 
		$bc = $this->load->library('mybreadcrumb',null,'bc');
		$this->bc->add('SMS', base_url());
		$this->bc->add('Send SMS', base_url('cities/listing'));
		$this->bc->add('Single', base_url('cities/listing'));
		
		$data = array(
		 'breadcrumb' => $this->bc->render()
		 ,'title' => 'Send single SMS'
		 ,'content' => 'sms/send_sms/main'
		 );
		$this->load->view('tpl',$data);
	}
	
	function send_sms()
	{
		 // echo "v".phpinfo();
		 // show_error('Howdy, this is my debug message', 404);
		$this->bc->add('SMS GATEWAY', base_url());
		$this->bc->add('Send SMS', base_url('sms'));
		$this->bc->set_title('Send SMS');
		
		$data = array(
		 'title' => 'Send SMSes'
		 ,'content' => 'sms/send_sms/send'
		 );
		$this->load->view('tpl',$data);
	}
	
	function submit_sms_single()
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= $this->input->post('t_sender');
		$headers['message'] 	= $this->input->post('t_message');
		$headers['msisdn'] 		= $this->input->post('t_msisdn');
		$headers['requestby'] 	= $this->input->post('requestby')?:'ICT'; // departement or username
		$headers['campaign'] 	= $this->input->post('campaign')?:'Custom SMS';
		
		$requestby 	= get_myconf('app_name');
		
		$data_msg = array();
		$data_msg['Msisdn']		= $headers['msisdn'];
		$data_msg['Message']	= $headers['message'];
		// $data_msg['OTP'] 		= $otp_num;
		// $data_msg['MemberCode'] = $member_code;
		$data_msg['Campaign'] 	= $headers['campaign'];
		$data_msg['RequestBy'] 	= $requestby; 
		$data_msg['fidMsOperator'] 	= $this->session->userdata('idMsOperator'); 
		$this->sms->set_messages($data_msg);
		$send_sms = $this->sms->send_messages();
		// $this->sms->api_sms_request();
		
		echo json_encode($send_sms);
	
	}
	
	function check_token()
	{
		$headers = array();
		
		$url = get_myconf('url_api')."api/sms/check_token";
		
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
		echo "$server_output";
	}
	
	function return_post()
	{
		echo "gg";
		print_r($_POST);
	}
}