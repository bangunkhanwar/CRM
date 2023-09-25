<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Telegram extends MY_Controller {	
	var $bot_token = '756662695:AAGuVjmabltAv4Vs0G9V-y_PGwuXCbQL_aE';
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		echo "telegram";
	}
	
	function send_message()
	{
		$headers = array();
		// print_r($this->input->post());
		// die;
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

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$responses";
	}
	
	function get_updates()
	{
		$headers = array();
		
		$method = 'getUpdates';
		$url = 'https://api.telegram.org/bot'.$this->bot_token.'/'.$method;
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, 
		         http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$responses = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$responses";
	}
}