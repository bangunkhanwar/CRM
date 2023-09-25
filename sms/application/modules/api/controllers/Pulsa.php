<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Pulsa extends MY_Controller {

	function __construct()
	{
		$this->secure = TRUE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('pulsa_delivery_model');
		$this->load->model('amount_model');
		$this->load->model('provider_model');
		$this->load->model('pulsa_model');
	}
	
	public function index()
	{
		echo "Pulsa. you successfully authorized"; 
	}
	
	function prepaid_payment_billfazz($memberCode,$voucherID,$destNumber,$prodCode,$refId)
	{		        
		$credentials = get_myconf('u_api_pulsa').":".get_myconf('p_api_pulsa');
		$url = get_myconf('url_api_pulsa')."prepaid/payment";
		$ch = curl_init();
		$headers  = [
			'Content-Type: application/json',					
			"Authorization: Basic " . base64_encode($credentials)
		];
		$postData = [	
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
		// echo $result;
		// print_r($result);
		// die;
		// echo $statusCode;
		// die;
		if($statusCode == 200)
		{
			if ($result['status'] != 'success')
			{
				//UPDATE STATUS VOUCHER DI ERVER CRM
				$this->update_voucher($memberCode,$voucherID);
				//INSERT LOG PULSA
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
				$this->pulsa_delivery_model->save($data);
			}else{
				echo "$server_output";
				die;
			}
		}else{
		// $result['statusCode']	= 0;
			// $result['message']		=  'Server not found';
			// header('Content-type: application/json');
			// echo die(json_encode($result));
			// die;
			// $result['statusCode']	= 0;
			// header('Content-type: application/json');
			// echo die(json_encode($result));
			echo "$server_output";	
		}
	}
	function prepaid_payment($memberCode,$voucherID,$destNumber,$prodCode,$refId,$amount)
	{		
		//VALIDASI VOUCHER REDEEM
		
		$prefNumber = substr($destNumber ,0,4);
	    
		// SELECT IDPROVIDER FROM PROVIDER WHERE PREFIX 
		$whereprov = array ();
		
			// $where['(
			// "StartPromo" <= \''.$currentDate.'\' 
			// and "EndPromo" >= \''.$currentDate.'\' )']= null;
			
			
		$whereprov ['("PrefixNumber" LIKE \'%'.$prefNumber.'%\')']= null;
		$this->provider_model->set_where($whereprov);		
		$provider_list = $this->provider_model->get($whereprov);
		
		$providerid = $provider_list['idProvider'];
		$providername = $provider_list['ProviderName'];
		
		//SELECT IDAMOUNT,AMOUNTCODE FROM  AMOUNT WHERE AMOUNT
		
		$whereamount = array ();
		$whereamount ['Amount']= $amount;
		$this->amount_model->set_where($whereamount);		
		$amount_list = $this->amount_model->get($whereamount);	
		
		$amountcode = $amount_list['AmountCode'];
		if(!$amountcode)
		{
			$result['statusCode']	= 0;
			$result['message']		=  'Claim failed';
			// $result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$amountId = $amount_list['IdAmount'];
		
		//SELECT * FROM PULSA WHERE ID PROVIDER AND IDAMOUNT 
		$wherepulsa = array ();
		$wherepulsa ['idProvider']= $providerid;
		$wherepulsa ['idAmount']= $amountId;
		$wherepulsa ['idVendor']= 1;
		$this->pulsa_model->set_where($wherepulsa);		
		$pulsa_list = $this->pulsa_model->get($wherepulsa);		
		$productCode = $pulsa_list['TransCode'];
		// echo "amountcode".$amountcode;
		// echo "amountid".$amountId;
		// echo "providerid".$providerid;
		// echo "providername".$providername;
		// echo "productcode".$productCode;
		// die;
		$url = 'https://tripay.co.id/api/v2/transaksi/pembelian';

		$header = array(
		   'Accept: application/json',
		   'Authorization: Bearer c5396acd8a53c78814bd99cbf81338abf32aa7b18f5f4b081b1853a4cbac', // Ganti [apikey] dengan API KEY Anda
		);

		$data = array(
		'inquiry' => 'I', // konstan I OR PLN
		'code' => $productCode, // kode produk
		'phone' => $destNumber, // nohp pembeli
		'no_meter_pln' => '', // khusus untuk pembelian token PLN prabayar
		'pin' => '1111', // pin member
		);

		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $url);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
		curl_setopt($ch, CURLOPT_HTTPHEADER, $header);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
		$result = curl_exec($ch);
		$result = json_decode($result,true);
		if(curl_errno($ch)){
		   return 'Request Error:' . curl_error($ch);
		}
		// $date_created 			= date('Ymd H:i:s');
		// $date_deliver 			= date('Ymd H:i:s');
		
		// print_r ($result);
		// die;
		// echo $statusCode;
		// die;
		// die;
		
		if ($result['success'] == 'true')
		{
			//UPDATE STATUS VOUCHER DI ERVER CRM
			$this->update_voucher($memberCode,$voucherID);
			//INSERT LOG PULSA
			$data = array();
			$data['message_id'] 	 	= $result['trxid'];
			// $data['date_created']		= $date_created;
			// $data['date_deliver']		= $date_deliver;
			$data['username']		 	= get_myconf('u_api_paytri');
			$data['client_name']		= get_myconf('client_name_tripay');
			$data['amount']		 		= $amount;
			$data['destinationNo']		= $destNumber;
			$data['productCode']		= $productCode;
			$data['refId']		 		= $voucherID;
			$data['delivery_status']	= $result['message'];
			$data['status_id']	        = $result['success'];
			$data['message']	        = $result['message'];
			$this->pulsa_delivery_model->save($data);
			// $result['statusCode']	= 1;
			// $result['message']	=  'Success..!';
			// header('Content-type: application/json');
			// echo die(json_encode($result));
		}else{
			$result['message']	=  $result['message'];
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	public function update_voucher($membercode,$voucherid)
	{
		$headers = array();
		$headers['memberCode'] 	= $membercode;
		$headers['voucherId'] 	= $voucherid;
		
		$url = get_myconf('url_api_crm')."api/crm_api/redeemPrepaidPayment";
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_crm').":".get_myconf('p_crm')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		curl_close ($ch);
		header('Content-type: application/json');
		echo "$server_output";
	}
	public function redeem()
	{	
		$memberCode = $this->input->post('memberCode');
		$voucherID  = $this->input->post('voucherID');
		$destNumbers = $this->input->post('destinationNo');
		 // 0811 239 345
		$destNumbers = str_replace(" ","",$destNumbers);
		 //(0274) 778787
		$destNumbers = str_replace("(","",$destNumbers);
		 // 0274) 778787
		$destNumbers = str_replace(")","",$destNumbers);
		 // 0811.239.345
		$destNumbers = str_replace(".","",$destNumbers);
		
		$destNumber = str_replace("+62","0",$destNumbers);
		
		
		$prodCode   = $this->input->post('productCode');
		$refId      = $voucherID; 
		$headers = array();
		$headers['memberCode'] 	= $memberCode;
		$headers['voucherId'] 	= $voucherID;
		
		$url = get_myconf('url_api_crm')."api/crm_api/validasiVoucher";
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_crm').":".get_myconf('p_crm')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);
		$result = json_decode($server_output,true);
		// print_r ($result);
		
		
		curl_close ($ch);
		header('Content-type: application/json');

			
		if ($result['statusCode'] == 1)
		{			
			$this->prepaid_payment($memberCode,$voucherID,$destNumber,$prodCode,$refId, $result['content']['VoucherAmount']);
		} else{
			echo "$server_output";
			die;
		}			
	}	                           
                                     
}                                       