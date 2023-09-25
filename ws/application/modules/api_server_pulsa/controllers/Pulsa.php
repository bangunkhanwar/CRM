<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pulsa extends MY_Controller {

	function __construct()
	{
		$this->secure = TRUE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		// $this->load->model('master/member_model');
		$this->load->model('pulsa_delivery_model');
	}
	
	public function index()
	{
		echo "Pulsa. you successfully authorized"; 
	}
	
	function prepaid_payment()
	{
		//GET MEMBER
		
		$destNumber = $this->input->post('destinationNo');
		$prodCode   = $this->input->post('productCode');
		$refId      = $this->input->post('refId');
		
        $credentials = get_myconf('u_api_pulsa').":".get_myconf('p_api_pulsa');
		$url = get_myconf('url_api_pulsa')."prepaid/payment";
		$ch = curl_init();
		$headers  = [
			'Content-Type: application/json',					
			"Authorization: Basic " . base64_encode($credentials)
		];
		$postData = [
			// 'destinationNo' => '085320293653',
			// 'refId' => 'ORDER-052',
			// 'productCode' => 'TLKM5',	
			'destinationNo' => $destNumber,
			'refId' => $refId,
			'productCode' => $prodCode,
			'callbackUrl' => get_myconf('callback_api_pulsa')
		];
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($postData));           
		curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
		$server_output = curl_exec ($ch);
		$result = json_decode($server_output,true);
		$statusCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close ($ch);
		
		$date_created 			= date('Ymd H:i:s');
		$date_deliver 			= date('Ymd H:i:s');
		print_r($result);
		die;
		if($statusCode == 200)
		{
			$data = array();
			$data['message_id'] 	 	= $result['orderId'];
			$data['date_created']		= $date_created;
			$data['date_deliver']		= $date_deliver;
			$data['username']		 	= get_myconf('u_api_pulsa');
			$data['client_name']		= get_myconf('u_api_pulsa');
			$data['amount']		 		= $result['price'];
			$data['destinationNo']		= $result['destinationNo'];
			$data['productCode']		= $result['productCode'];
			$data['refId']		 		= $result['refId'];
			$data['delivery_status']	= $result['status'];
			
				// $data['departement_name']		 = '';
			// $data['request_by']		 = '';
			// $data['msisdn']		 = '';
			// $data['operator']		 = '';
			// $data['sender_id']		 = '';
			// $data['message']		 = '';
			// $data['status_id']		 = '';
			// $data['status_description']		 = '';
			// $data['campaign_id']		 = '';
			// $data['campaign_name']		 = '';
			// $data['delivery_status_id']		 = '';
			
			if($data['message_id'])
			{
				$this->pulsa_delivery_model->save($data);
			}
		}
		
		
		// print_r($output_count);
		
		// if($headers['schedule']){
			// $data['schedule']			= $headers['schedule'];
		// }
		
		// $data['date_deliver']		= $date_deliver;
		// $data['delivery_time']		= date('Ymd H:i:s');
		// $data['username']			= get_myconf('u_api_pulsa');
		// $data['client_name']		= get_myconf('u_api_pulsa');
		// $data['campaign_name']		= $headers['campaign'];
		// $data['departement_name']	= $headers['requestby'];
		
		// if(isset($output_count['code']))
		// {
			// $data['message_id'] 	 = $output_count['msgid'];
			// $data['status_id'] 		 = $output_count['code'];
			// $data['status_description']= $output_count['status'];
			// $data['msisdn'] 		 = $headers['msisdn'];
			// $data['message'] 		 = $headers['message'];
			// $data['delivery_status'] = $output_count['msisdn'];
			// $data['delivery_status']  = $output_count['message'];
			// $data['amount']  = $output_count['message'];
			// if($data['message_id'])
			// {
				// $this->pulsa_delivery_model->save($data);
			// }
		// }else
		// {
			// foreach($output_count as $key=>$row)
			// {
				// $data['message_id'] 	 = $output_count[$key]['msgid'];
				// $data['status_id'] 		 = $output_count[$key]['code'];
				// $data['status_description']= $output_count[$key]['status'];
				// $data['msisdn'] 		 = $output_count[$key]['msisdn'];
				// $data['delivery_status'] = $output_count[$key]['message'];
				// $data['delivery_status'] = $output_count[$key]['msisdn'];
				// $data['message'] 			= $headers['message'];
				// $data['delivery_status'] 	= $output_count[$key]['message'];
				// if($data['message_id'])
				// {
					// $this->sms_delivery_model->save($data);
				// }
			// }
		// }
		
		header('Content-type: application/json');
		echo "$server_output";
		
		
		// return ($result['status']=='SUCCESS');
		
	}
}