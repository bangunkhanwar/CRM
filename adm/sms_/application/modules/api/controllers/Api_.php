<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {
var $bot_token = '756662695:AAGuVjmabltAv4Vs0G9V-y_PGwuXCbQL_aE';
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		 $this->load->view('sendsingle');
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
		$headers['requestby']	= $this->input->post('requestby');
		$headers['campaign']	= $this->input->post('campaign');
		
		// echo ($url);
		// print_r($headers);
		// die;
		// echo json_encode($result);
		// [{"code":1,"status":"SUCCESS","message":"RECIPIENT PROCESSED","msgid":"9007590336","msisdn":"628111046964"},
		// {"code":0,"status":"FAILED","msgid":null,"message":"INVALID MSISDN","msisdn":"62812"}]
		// $records = array(
		 // array('id'=>1, 'title'=>'Google', 'url'=>'https://www.google.com')
		// );
		// $records[] = array('id'=>2, 'title'=>'PHP', 'url'=>'http://php.net');
		// array_push($records,array('id'=>2, 'title'=>'PHP', 'url'=>'http://php.net'));
		// echo json_encode($records);
		// foreach($records as $key=>$row)
		// {
			// echo $key." : ".$row['id']."_".$row['url']." ";
		// }
		
		$records = array();
		
		$msg_exploded = explode(",",$headers['msisdn']);
		if(count($msg_exploded)>1)
		{
			$url = "https://smsblast.id/api/sendmultiple.json";
			array_push($records,array('code'=>'1','status'=>'SUCCESS','message'=>'RECIPIENT PROCESSED','msgid'=>'9007590336','msisdn'=>'087722301557'));
			array_push($records,array('code'=>'0','status'=>'FAILED','message'=>'INSUFFICIENT TOKEN','msgid'=>NULL,'msisdn'=>'087722301557'));
			
		}else
		{
			$url = "https://smsblast.id/api/sendsingle.json";
			$records = array('code'=>'1','status'=>'SUCCESS','message'=>'RECIPIENT PROCESSED','msgid'=>'9007590336','msisdn'=>'087722301557');
		}
		
		echo json_encode($records);
		header('Content-type: application/json');
	}
	
	function send_telegram()
	{
		$headers = array();
		
		$headers['chat_id'] 	= $this->input->post('chat_id');
		$headers['text'] 		= $this->input->post('text');
		$headers['parse_mode']	= 'HTML';
		
		$method = 'sendMessage'; 
		$url = 'https://api.telegram.org/bot'.$this->bot_token.'/'.$method;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
		         http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$responses = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$responses";
		
	}
	
	function backup()
	{
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
		         http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$responses = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		
		# Print response.
		echo "$responses";
		
		$result['code'] 	= 1;
		$result['status'] 	= 'SUCCESS';
		$result['message'] 	= 'PROCESSED';
		$result['msgid'] 	= '1023921';
	}
	
}