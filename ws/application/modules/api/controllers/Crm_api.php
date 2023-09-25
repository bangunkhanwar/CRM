<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Crm_api extends MY_Controller {

	function __construct()
	{
		$this->secure = TRUE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/voucher_model');	
	}
	
	public function index()
	{
		echo "you successfully authorized";
	}
	public function redeemPrepaidPayment()
	{
		$memberCode = $this->input->post('memberCode');
		$voucherId = $this->input->post('voucherId');
		
		// UPDATE VOUCHERID STATUS			
		$data['VoucherId']	      = $voucherId;
		$data['fidVoucherStatus'] = 6 ; // FULL REDEEM	
		$data['MemberCode']	      = $memberCode;	
		$data['ModifiedDate']	  = date('Ymd H:i:s');
		$data['LastUpdate']	      = date('Ymd H:i:s');

		$save = $this->voucher_model->save($data);
		if($save)
		{		
			$result['statusCode']	= 1;
			$result['message']		=  'Redeem Success';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
		public function validasiVoucher()
	{
		$memberCode = $this->input->post('memberCode');
		$voucherId = $this->input->post('voucherId');
		//VALIDASI VOUCHER STATUS
		$data_voucher = $this->voucher_model->get($voucherId);
		
		$voucherstatus = $data_voucher['fidVoucherStatus'];
		$date_now		= date('Ymd');
		$expirydate = $data_voucher['ExpiryDate'];
		
		$dateTimestamp1 = strtotime(getSQLDate($expirydate)); 
		$dateTimestamp2 = strtotime($date_now); 
		if(!$data_voucher['VoucherId'])
		{
			$result['statusCode']	= 0;
			$result['message']		=  'Voucher not available';
			header('Content-type: application/json');
			echo die(json_encode($result));
			die;
		}
		  // Compare the timestamp date  
		if ($dateTimestamp1 < $dateTimestamp2) 
		{
			$result['statusCode']	= 0;
			$result['message']		=  'Voucher has been expired';
			header('Content-type: application/json');
			echo die(json_encode($result));
			die;
		}
		// echo $voucherstatus;
		if($voucherstatus != 4)
		{
			$result['statusCode']	= 0;
			$result['message']		=  'Voucher has been redeem';
			$result['content']		=  $data_voucher ;
			header('Content-type: application/json');
			echo die(json_encode($result));
			die;
		}
			$result['statusCode']	= 1;
			$result['message']		=  'Voucher redeem success';
			$result['content']		=  $data_voucher ;
			header('Content-type: application/json');
			echo die(json_encode($result));
	}
}