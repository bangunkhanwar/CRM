<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sms_api
{
    function __constructor()
    {
        $this->CI =& get_instance();
    }
	
	function send_sms($user_phone,$text)
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= 'MD Media';
		$headers['message'] 	= $text;
		$headers['msisdn'] 		= $user_phone;
		$headers['requestby'] 	= 'CRM Mobile Apps'; // departement or username
		$headers['campaign'] 	= 'SMS Registrasi';
		
		$url = get_myconf('url_api')."api/sms/send_sms";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);
		$result = json_decode($server_output,true);
		curl_close ($ch);
		return ($result['status']=='SUCCESS');	
	}
	
	function generate_otp()
	{
		$otp_registrasi = mt_rand(100000, 999999);
		return $otp_registrasi;
	}
}