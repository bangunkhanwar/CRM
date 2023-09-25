<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('voucher_list_model');
		$this->load->model('master/voucher_amount_model');
		$this->load->model('master/voucher_beon_model');
		$this->load->model('master/voucher_model');

	}
	
	public function index()
	{
		echo 'My Voucher List';

	}
	public function myvoucherlist($membercode)
	{
		$user = $membercode;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$data = $_POST;
		// not null
		$where = array ();
		$where ['MemberCode'] = $user ;
		$where ['fidVoucherStatus'] = 4 ;
		$where[' "fidVoucherType" <> 8']= null;
		// $where['(
			// "MemberCode" = \''.$user.'\'
			// AND "fidVoucherType" <> 8)']= null;
		$this->voucher_list_model->set_where($where);
		$voucher_list = $this->voucher_list_model->get_list();
		// echo $this->db->last_query();
		// exit;
		if($voucher_list->num_rows()==0)
		{
			
			$result['count']	= $voucher_list->num_rows();
			$result['message']	= 'no voucher available..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['count']	= $voucher_list->num_rows();

			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
	}
	
	public function voucher_ongkir()
	{
		$brand  = $this->input->post('brand');
		$date_now		= date('Ymd');
		$dateTimestamp = $date_now; 
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		// not null
		$where = array ();
		$where ['fidVoucherType']= 10;
		$where ['"ExpiryDate" >= \''.$dateTimestamp.'\'']= null;
		$where ['fidMotherBrand']= $brand;
	
		$this->voucher_list_model->set_where($where);
		$voucher_list = $this->voucher_list_model->get_list();
		// echo $this->db->last_query();
		
		// exit;
		if($voucher_list->num_rows()==0)
		{
			
			$result['count']	= $voucher_list->num_rows();
			$result['message']	= 'no voucher available..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['count']	= $voucher_list->num_rows();

			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
	}
	
	public function get_voucher_detail()
	{
		$voucherId  = $this->input->post('voucher_id');
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		// not null
		$where = array ();
		$where ['VoucherId']= $voucherId;
	
		$this->voucher_list_model->set_where($where);
		$voucher_list = $this->voucher_list_model->get_list();
		// echo $this->db->last_query();
		
		// exit;
		if($voucher_list->num_rows()==0)
		{
			
			$result['count']	= $voucher_list->num_rows();
			$result['message']	= 'no voucher available..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['count']	= $voucher_list->num_rows();

			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
	}
	
	public function merchantvoucherlist($membercode)
	{
		$user = $membercode;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		$data = $_POST;
		// not null
		$where = array ();
		// $where ['MemberCode'] = $user ;
		$where['(
			"MemberCode" = \''.$user.'\'
			AND "fidVoucherType" = 8)']= null;
		$this->voucher_list_model->set_where($where);
		$voucher_list = $this->voucher_list_model->get_list();
		
		if($voucher_list->num_rows()==0)
		{
			$result['count']	= $voucher_list->num_rows();
			$result['message']	= 'no voucher available..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['count']	= $voucher_list->num_rows();
			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	public function create_voucher()
	{
		$membercode = $this->input->post('t_membercode');
		$membercode = str_replace(".","",$membercode);
		$storecode  = $this->input->post('t_storecode');
		$promocode  = $this->input->post('t_promocode');
		$amount     = $this->input->post('t_amount');
		$longExp    = $this->input->post('t_long_exp');	
		$motherbrand= $this->input->post('t_motherbrand');	
		$remark     = $this->input->post('t_remark');			
		$note       = $this->input->post('t_note');			
		$description= $this->input->post('t_description')?:'';			
		
		if(!$storecode){
			echo 'FAILED#Store Code required';
			die;
		}
		if(!$amount){
			echo 'FAILED#Amount required';
			die;
		}
		if(!$longExp){
			$longExp = date("Y-m-d");
		}
		if(!$motherbrand){
			echo 'FAILED#Mother brand required';
			die;
		}
		
		//SELECT AMOUNT VOUCHER AMOUNT		
		$whereamount = array();
		$whereamount ['VoucherAmount']= $amount;
		$this->voucher_amount_model->set_where($whereamount);
		$voucher_amount_code = $this->voucher_amount_model->get($whereamount);
		
		$vouchertype = '4';
		$fidAmount = $voucher_amount_code['idAmount']; 
		$voucherId = $this->generateVoucherID('',$motherbrand,$fidAmount,$vouchertype);

		$currentDate = date("Y-m-d");
		$expDate = date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
		
		$currentYears = date("Y");
		$voucherGenerate = $this->generateVoucher();  //VOUCHER UNIQUE CODE

		// INSERT VOUCHER CRM
		$data['StoreCode']	      = $storecode;		
		$data['StoreCodeRedeem']  = '';	
		$data['SKU']	          = '';		
		$data['Description']	  = $description;	
		$data['VoucherId']        = $voucherId;
		$data['fidVoucherType']   = $vouchertype; 
		$data['fidAmount']        = $fidAmount; 
		$data['fidMotherBrand']   = $motherbrand; 
		$data['VoucherAmount']    = $amount;
		$data['Year']             = $currentYears; 
		$data['Note'] 	          = $note;
		$data['Remark'] 	      = $remark;
		$data['ExpiryDate'] 	  = $longExp;
		$data['UniqueCode'] 	  = $voucherGenerate;
		$data['PromoCode'] 	      = $promocode;
		$data['fidVoucherStatus'] = 4;		//AKTIF
		$data['CreatedBy']        = 'CRM Webservice';//user login
		$data['MemberCode']	      = $membercode;	
		$data['fidFileUpload']	  = 0;
		$data['fidVoucherCategory']  = 0;	
		$data['fidVoucherSubCategory']  = 0;	
			
		//INSERT VOUCHER BEON
		$data_beon['StoreCode']		  = $data['StoreCode'];
		$data_beon['StoreCodeRedeem'] = $data['StoreCodeRedeem'];
		$data_beon['SKU']             = $data['SKU'];
		$data_beon['VoucherID']       = $data['VoucherId'];
		$data_beon['fidVoucherType']  = $data['fidVoucherType'];
		$data_beon['fidMotherBrand']  = $data['fidMotherBrand'] ;
		$data_beon['fidVoucherStatus']= $data['fidVoucherStatus'];
		$data_beon['fidAmount']       = $data['fidAmount'];
		$data_beon['VoucherAmount']   = $data['VoucherAmount'];
		$data_beon['Tahun']           = $data['Year'];
		$data_beon['CreateBy']        = $data['CreatedBy'];
		$data_beon['Note']            = $data['Note'];
		$data_beon['Remark']          = $data['Remark'];
		$data_beon['Description']     = $data['Description'];
		$data_beon['ExpiryDate']      = $data['ExpiryDate'];
		$data_beon['UniqueCode']      = $data['UniqueCode'];
		$data_beon['PromoCode']       = $data['PromoCode'];
		
		$save = $this->voucher_model->save($data);
		$save = $this->voucher_beon_model->save($data_beon);
		//UPDATE PROMOCEODE BEON
		$this->voucher_beon_model->update_promocode($data_beon['VoucherID'],$data['PromoCode']);		
		$save = $this->voucher_model->save($data);
			
		$where = array();
		$where['VoucherId']= $voucherId;
		$this->voucher_model->set_where($where);

		// $this->voucher_model->get($where);
		$voucher_list = $this->voucher_model->get_list();
		// echo $this->db->last_query();

		// die;
		if ($save)
		{	
			$data_xml = '';
			$data_xml = $this->gen_xml($voucher_list,$this->voucher_model,'voucher');
			echo 'SUCCES#'.$data_xml;			
		}else{
			echo 'FAILED#';
		}
	}
	
	public function create_voucher_discount()
	{
		$membercode = $this->input->post('t_membercode');
		$membercode = str_replace(".","",$membercode);
		$storecode  = $this->input->post('t_storecode');
		$promocode  = $this->input->post('t_promocode');
		$amount     = $this->input->post('t_amount');
		$longExp    = $this->input->post('t_long_exp');	
		$motherbrand= $this->input->post('t_motherbrand');	
		$remark     = $this->input->post('t_remark');			
		$note       = $this->input->post('t_note');			
		
		if(!$storecode){
			echo 'FAILED#Store Code required';
			die;
		}
		// if(!$amount){
			// echo 'FAILED#Amount required';
			// die;
		// }
		if(!$longExp){
			$longExp = date("Y-m-d");
		}
		if(!$motherbrand){
			echo 'FAILED#Mother brand required';
			die;
		}
		
		//SELECT AMOUNT VOUCHER AMOUNT		
		// $whereamount = array();
		// $whereamount ['VoucherAmount']= $amount;
		// $this->voucher_amount_model->set_where($whereamount);
		// $voucher_amount_code = $this->voucher_amount_model->get($whereamount);
		
		$vouchertype = '8';
		$fidAmount = 14; //inject dicsount voucher
		$voucherId = $this->generateVoucherID('',$motherbrand,$fidAmount,$vouchertype);

		$currentDate = date("Y-m-d");
		$expDate = date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
		
		$currentYears = date("Y");
		$voucherGenerate = $this->generateVoucher();  //VOUCHER UNIQUE CODE

		// INSERT VOUCHER CRM
		$data['StoreCode']	      = $storecode;		
		$data['StoreCodeRedeem']  = '';	
		$data['SKU']	          = '';		
		$data['Description']	  = '';	
		$data['VoucherId']        = $voucherId;
		$data['fidVoucherType']   = $vouchertype; 
		$data['fidAmount']        = $fidAmount; 
		$data['fidMotherBrand']   = $motherbrand; 
		$data['VoucherAmount']    = $amount;
		$data['Year']             = $currentYears; 
		$data['Note'] 	          = $note;
		$data['Remark'] 	      = $remark;
		$data['ExpiryDate'] 	  = $longExp;
		$data['UniqueCode'] 	  = $voucherGenerate;
		$data['PromoCode'] 	      = $promocode;
		$data['fidVoucherStatus'] = 4;		//AKTIF
		$data['CreatedBy']        = 'CRM Webservice';//user login
		$data['MemberCode']	      = $membercode;	
		$data['fidFileUpload']	  = 0;
		$data['fidVoucherCategory']  = 0;	
		$data['fidVoucherSubCategory']  = 0;	
			
		//INSERT VOUCHER BEON
		$data_beon['StoreCode']		  = $data['StoreCode'];
		$data_beon['StoreCodeRedeem'] = $data['StoreCodeRedeem'];
		$data_beon['SKU']             = $data['SKU'];
		$data_beon['VoucherID']       = $data['VoucherId'];
		$data_beon['fidVoucherType']  = $data['fidVoucherType'];
		$data_beon['fidMotherBrand']  = $data['fidMotherBrand'] ;
		$data_beon['fidVoucherStatus']= $data['fidVoucherStatus'];
		$data_beon['fidAmount']       = $data['fidAmount'];
		$data_beon['VoucherAmount']   = $data['VoucherAmount'];
		$data_beon['Tahun']           = $data['Year'];
		$data_beon['CreateBy']        = $data['CreatedBy'];
		$data_beon['Note']            = $data['Note'];
		$data_beon['Remark']          = $data['Remark'];
		$data_beon['Description']     = $data['Description'];
		$data_beon['ExpiryDate']      = $data['ExpiryDate'];
		$data_beon['UniqueCode']      = $data['UniqueCode'];
		$data_beon['PromoCode']       = $data['PromoCode'];
		
		$save = $this->voucher_model->save($data);
		$save = $this->voucher_beon_model->save($data_beon);
		//UPDATE PROMOCEODE BEON
		// $this->voucher_beon_model->update_promocode($data_beon['VoucherID'],$data['PromoCode']);		
		$save = $this->voucher_model->save($data);
			
		$where = array();
		$where['VoucherId']= $voucherId;
		$this->voucher_model->set_where($where);

		// $this->voucher_model->get($where);
		$voucher_list = $this->voucher_model->get_list();
		// echo $this->db->last_query();

		// die;
		if ($save)
		{	
			$data_xml = '';
			$data_xml = $this->gen_xml($voucher_list,$this->voucher_model,'voucher');
			echo 'SUCCES#'.$data_xml;			
		}else{
			echo 'FAILED#';
		}
	}
	
	function generateVoucherID($txt='',$motherbrand,$fidAmount = '',$voucherType)
	{
		$tgl = strlen(date("d"))==1?'0'.date("d"):date("d");
		$bln = strlen(date("m"))==1?'0'.date("m"):date("m");
		$thn = date("y");		
		$digitamount = strlen($fidAmount);
		// 1171412058 - > motherbrand 1 digit,tahun 2 digit,vouchertype 1 digit,fidamount 2 digit,running number 5digit
			$nourut = $txt.$motherbrand.$thn.$voucherType.$fidAmount;
			$gdt_no = '';
			$no_last = $this->voucher_model->get_last($nourut,$digitamount);
			$no_next = 1;
			if ($no_last)
			{
				$no_next = $no_last['VoucherId']+1;
			}
			$gdt_no = $nourut.sprintf('%05s', $no_next);
		return $gdt_no;	
	}
	

	function generateVoucher($length = 6) {
		$characters = '0123456789ABCDEFGHIJKLMNOPQRSTUVWXYZ';
		$charactersLength = strlen($characters);
		$randomString = '';
		for ($i = 0; $i < $length; $i++) {
			$randomString .= $characters[rand(0, $charactersLength - 1)];
		}
		return $randomString;
	}
	
}
