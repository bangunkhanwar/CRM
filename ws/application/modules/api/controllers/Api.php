<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Api extends MY_Controller {

	function __construct()
	{
		$this->secure = TRUE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		echo "you successfully authorized";
	}
	
	public function send_sms_api()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		$phone = $this->input->post('Msisdn');
		$sms_text = $this->input->post('Message');
		$campaign = $this->input->post('Campaign');
		$requestby = $this->input->post('RequestBy');
		$otp_random = $this->input->post('OTP');
		
		if(!$phone)
		{
			$result['message']	= 'Msisdn is empty..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if(!$sms_text)
		{
			$result['message']	= 'Message is empty..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if(!$campaign)
		{
			$result['message']	= 'Campaign is empty..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if(!$requestby)
		{
			$result['message']	= 'RequestBy is empty..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$data_msg = array();
		$data_msg['Msisdn']		= $phone;
		$data_msg['Message']	= $sms_text;
		$data_msg['OTP'] 		= $otp_random;
		$data_msg['Campaign'] 	= $campaign;
		$data_msg['RequestBy'] 	= $requestby;
		$this->sms->set_messages($data_msg);
		$this->sms->send_messages();
		
		$result['statusCode']	= '1';
		$result['message']		= 'update success';
		$result['data_update']	= $data_msg;
		header('Content-type: application/json');
		echo die(json_encode($result));
	}
	
	public function get_shop()
	{
		$unixtimestamp 	= strtotime(date('Ymd H:i:s'));
		$api_url 		= 'https://partner.shopeemobile.com/api/v1/shop/get';
		$secret_key 	= '024415a66bcaf67aa0bf42fa431b5d75e1d6386417a466c56c97358bcf6fb181';
		$partner_id 	= 842729;
		$shop_id 		= 12073181;
		
		$headers = array();
		$headers['partner_id'] 	= $partner_id;
		$headers['shopid'] 		= $shop_id;
		$headers['timestamp'] 	= $unixtimestamp;
		
		$http_body 				= json_encode($headers);
		$signature_base 		= $api_url . '|' . $http_body;
		$auth_key 				= hash_hmac('sha256',$signature_base ,$secret_key);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: ' . $auth_key,                                                                        
			'Content-Type: application/json; charset=utf-8',                                                                                
			'Content-Length: ' . strlen($http_body))                                                                       
		);                                   

		// die($auth_key);
		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	
	public function get_order_detail()
	{
		$ordersn_list	= $this->input->post('order_id');
		$unixtimestamp 	= strtotime(date('Ymd H:i:s'));
		$api_url 		= 'https://partner.shopeemobile.com/api/v1/orders/detail';
		$secret_key 	= '024415a66bcaf67aa0bf42fa431b5d75e1d6386417a466c56c97358bcf6fb181';
		$partner_id 	= 842729;
		$shop_id 		= 12073181;
		
		$exploded_ord	= explode(',',$ordersn_list);
		
		$array_order	= array();
		
		foreach($exploded_ord as $key_exp=>$list_exp)
		{
			array_push($array_order,$list_exp);
		}
		// print_r($array_order);
		// die;
		
		$headers = array();
		$headers['partner_id'] 	= $partner_id;
		$headers['shopid'] 		= $shop_id;
		$headers['timestamp'] 	= $unixtimestamp;
		$headers['ordersn_list'] =$array_order;
		
		$http_body 				= json_encode($headers);
		$signature_base 		= $api_url . '|' . $http_body;
		$auth_key 				= hash_hmac('sha256',$signature_base ,$secret_key);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: ' . $auth_key,                                                                        
			'Content-Type: application/json; charset=utf-8',                                                                                
			'Content-Length: ' . strlen($http_body))                                                                       
		);                                   

		// die($auth_key);
		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	public function get_orders_list()
	{
		$unixtimestamp 	= strtotime(date('Ymd H:i:s'));
		$api_url 		= 'https://partner.shopeemobile.com/api/v1/orders/basics';
		$secret_key 	= '024415a66bcaf67aa0bf42fa431b5d75e1d6386417a466c56c97358bcf6fb181';
		$partner_id 	= 842729;
		$shop_id 		= 12073181;
		
		$headers = array();
		$headers['partner_id'] 	= $partner_id;
		$headers['shopid'] 		= $shop_id;
		$headers['timestamp'] 	= $unixtimestamp;
		$headers['create_time_from'] = strtotime('20190530');
		$headers['create_time_to'] = strtotime('20190531');
		$headers['pagination_entries_per_page'] = 100;
		$headers['pagination_offset'] = 0;
		
		$http_body 				= json_encode($headers);
		$signature_base 		= $api_url . '|' . $http_body;
		$auth_key 				= hash_hmac('sha256',$signature_base ,$secret_key);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: ' . $auth_key,                                                                        
			'Content-Type: application/json; charset=utf-8',                                                                                
			'Content-Length: ' . strlen($http_body))                                                                       
		);                                   

		// die($auth_key);
		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	public function get_orders_by_status()
	{
		$order_status	= $this->input->post('order_status');
		$unixtimestamp 	= strtotime(date('Ymd H:i:s'));
		$api_url 		= 'https://partner.shopeemobile.com/api/v1/orders/get';
		$secret_key 	= '024415a66bcaf67aa0bf42fa431b5d75e1d6386417a466c56c97358bcf6fb181';
		$partner_id 	= 842729;
		$shop_id 		= 12073181;
		
		$headers = array();
		$headers['partner_id'] 	= $partner_id;
		$headers['shopid'] 		= $shop_id;
		$headers['timestamp'] 	= $unixtimestamp;
		$headers['order_status'] = $order_status;
		$headers['create_time_from'] = strtotime('20190529');
		$headers['create_time_to'] = strtotime('20190531');
		$headers['pagination_entries_per_page'] = 100;
		$headers['pagination_offset'] = 0;
		
		$http_body 				= json_encode($headers);
		$signature_base 		= $api_url . '|' . $http_body;
		$auth_key 				= hash_hmac('sha256',$signature_base ,$secret_key);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: ' . $auth_key,                                                                        
			'Content-Type: application/json; charset=utf-8',                                                                                
			'Content-Length: ' . strlen($http_body))                                                                       
		);                                   

		// die($auth_key);
		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
	public function my_income()
	{
		$ordersn_list	= $this->input->post('order_id');
		$unixtimestamp 	= strtotime(date('Ymd H:i:s'));
		$api_url 		= 'https://partner.shopeemobile.com/api/v1/orders/my_income';
		$secret_key 	= '024415a66bcaf67aa0bf42fa431b5d75e1d6386417a466c56c97358bcf6fb181';
		$partner_id 	= 842729;
		$shop_id 		= 12073181;
		
		$exploded_ord	= explode(',',$ordersn_list);
		
		
		$headers = array();
		$headers['partner_id'] 	= $partner_id;
		$headers['shopid'] 		= $shop_id;
		$headers['timestamp'] 	= $unixtimestamp;
		$headers['ordersn'] =$ordersn_list;
		
		$http_body 				= json_encode($headers);
		$signature_base 		= $api_url . '|' . $http_body;
		$auth_key 				= hash_hmac('sha256',$signature_base ,$secret_key);
		
		$ch = curl_init();
		
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $http_body);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);   	
		curl_setopt($ch, CURLOPT_HTTPHEADER, array(  
			'Authorization: ' . $auth_key,                                                                        
			'Content-Type: application/json; charset=utf-8',                                                                                
			'Content-Length: ' . strlen($http_body))                                                                       
		);                                   

		// die($auth_key);
		$server_output = curl_exec ($ch);

		curl_close ($ch);
		
		# Print response.
		header('Content-type: application/json');
		echo "$server_output";
	}
}