<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promo extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('promo_model');
		$this->load->model('promo_detail_20_model');
		$this->load->model('promo_detail_22_model');
		$this->load->model('promo_detail_40_model');
		$this->load->model('master/member_points_currently_model');
		$this->load->model('master/voucher_model');
		$this->load->model('master/voucher_amount_model');
		$this->load->model('master/voucher_beon_model');
		$this->load->model('master/member_model');
		$this->load->model('master/file_upload_model');
		
	}
	
	public function index()
	{
		echo 'Promo List';

	}
	
	public function claimValidate() {
		//CEK ke msPROMO (CRM) WHERE PROMO CODE
		$promocode        = $this->input->post('t_promocode');
		$uniquecode       = $this->input->post('t_uniquecode');
		$scantype         = $this->input->post('t_scan');
		
		$where = array ();
		$where ['PromoCode']= $promocode;
		$this->promo_model->set_where($where);
		$promo_list = $this->promo_model->get($where);
		$promo_count = $this->promo_model->count();
		
		
		if($promo_count == 0)
		{
			$result['statusCode']	= "-1";
			$result['message']	=  'Promo not available';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		
		// echo $this->db->last_query();
		// exit;
		
		//CEK DI MSVOUCHER(CRM) WHERE PROMOCODE AND UNIQUECODE YANG ADA DI FIELD NOTE
		$where_voucher = array ();
		$where_voucher ['tbl.PromoCode']= $promocode;
		$where_voucher ['tbl.Note']= $uniquecode;
		// $where_voucher ['tbl.fidVoucherStatus']= 4;
		$this->voucher_model->set_where($where_voucher);
		$voucher_list = $this->voucher_model->get_voucher_category();
		$voucher_count = $this->voucher_model->count();
		
		// echo $this->db->last_query();
		// exit;
		
		$where_pomo_image = array ();
		$where_pomo_image ['idFileUpload']= $promo_list['fidFileUpload'];
		$promo_image = $this->file_upload_model->get($where_pomo_image);
		
		$wheres = array ();
		$wheres ['PromoCode']= $promocode;
		$this->promo_detail_20_model->set_where($wheres);
		$promo_det = $this->promo_detail_20_model->get($wheres);
		
		

		if($voucher_count > 0)
		{		
			$result['statusCode']	= "0";
			$result['message']	=  'Voucher has been klaim';
			$result['promoCode']	= $promo_list['PromoCode'];
			$result['promoName']	= $promo_list['Name'];
			$result['scanType'] 	= $promo_list['ScanType'];

			$result['idImage'] 	    = $promo_image['idFileUpload'];
			$result['promoImage'] = 'http://crm.elcorps.com'.trim($promo_image['FilePath'],'.').$promo_image['FileServerName'].'.'.$promo_image['FileExt'];
			$result['promoDescHeader'] = $promo_det['PrintHeader'];
			$result['promoDescFooter'] = $promo_det['PrintFooter'];
			$result['content_list'] = $voucher_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['statusCode']	= "1";
			$result['message']	    = 'Success';
			$result['promoCode']	= $promo_list['PromoCode'];
			$result['promoName']	= $promo_list['Name'];
			$result['scanType'] 	= $promo_list['ScanType'];
			
			
			$result['idImage'] 	= $promo_image['idFileUpload'];
			$result['promoImage'] = 'http://crm.elcorps.com'.trim($promo_image['FilePath'],'.').$promo_image['FileServerName'].'.'.$promo_image['FileExt'];
			
			
			$result['promoDescHeader'] = $promo_det['PrintHeader'];
			$result['promoDescFooter'] = $promo_det['PrintFooter'];
			$result['content_list']['VoucherAmount'] = $promo_det['GetVoucher'];

			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function voucherClaim ()
	{
		$promocode        = $this->input->post('t_promocode');
		$uniquecode       = $this->input->post('t_uniquecode');
		$membercode      = $this->input->post('t_membercode');
		$remark          = $this->input->post('t_remark');
	
		$where = array ();
		$where ['PromoCode']= $promocode;
		$this->promo_model->set_where($where);
		$promo_list = $this->promo_model->get($where);
		

		 if(!$uniquecode){
			$result['statusCode']	= "0";
			$result['message']	=  'Kode unik tidak tersedia !';
			header('Content-type: application/json');
			echo die(json_encode($result));
		 }
		 
		 if(!$membercode){
			$result['statusCode']	= "0";
			$result['message']	=  'Member code tidak tersedia !';
			header('Content-type: application/json');
			echo die(json_encode($result));
		 }
		$member = $this->member_model->get($membercode);
		 if(!$member['MemberCode']){
			$result['statusCode']	= "0";
			$result['message']	=  'Member belum terdaftar di database !';
			header('Content-type: application/json');
			echo die(json_encode($result));
		 
		 }
		 
		//CEK VOUCHER APAKAH SUDAH DIBOOKING ?
		$where_voucher = array ();
		// $where_voucher ['PromoCode']= $promocode;
		if($promocode=='2020005'||$promocode=='2020004'){ //promo redeem voucher berulang
			$where_voucher ['PromoCode']= $promocode;
		}else{
			$where_voucher ['PromoCode']= $promocode;
			$where_voucher ['Note']= $uniquecode;
		}
		$this->voucher_model->set_where($where_voucher);
		$voucher_count = $this->voucher_model->count();
		$voucher_list = $this->voucher_model->get_voucher_category();

		if($promo_list['SaldoKuota'] == 0 ) 
		{
			$result['statusCode']	= "0";
			$result['message']	=  'Kuota promo telah habis !';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
				
				
		if($voucher_count > 0)
		{
			$result['statusCode']	= "0";
			$result['message']	=  'Voucher has been klaim';
			$result['content_list'] = $voucher_list->result_array();

			header('Content-type: application/json');
			echo die(json_encode($result));
		}		
			$vouchertype 	= 9;		//VOUCHER APPS 
			if($promocode == '2020001'||$promocode == '2020002'){
				$vouchertype 	= 1;	
			}
			$wheres = array ();
			$wheres ['PromoCode']= $promocode;
			$this->promo_detail_20_model->set_where($wheres);
			$promo_det = $this->promo_detail_20_model->get($wheres);
			$voucherAmount 	= $promo_det['GetVoucher']; 		
			
			$wherec = array();
			$wherec ['VoucherAmount']= $voucherAmount;
			
			$this->voucher_amount_model->set_where($wherec);
			$voucher_amount_code = $this->voucher_amount_model->get($wherec);
			
			$fidAmount 		= $voucher_amount_code['idAmount']; 				
			$voucherId 		= $this->generateVoucherID('',$fidAmount,$vouchertype);

			$voucherGenerate= $this->generateVoucher();  //VOUCHER UNIQUE CODE
			$currentYears	= date("Y");
			$currentDate    = date("Y-m-d");
			$longExp		= $promo_det['Deadlines']; // waktu rentang exp 'x' hari
			$expDate		= date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
			
			$data['StoreCode']	      = 'ZHO';		
			$data['StoreCodeRedeem']  = '';	
			$data['SKU']	          = '';		
			$data['Description']	  = $promo_list['Name'];	
			$data['VoucherId']        = $voucherId;
			$data['fidVoucherType']   = $vouchertype; 	//6 = Apps gift, 7 = Apps discount
			$data['fidAmount']        = $fidAmount; 
			$data['fidMotherBrand']   = '4'; 	//CRM Store
			$data['VoucherAmount']    = (int)$voucherAmount;
			$data['Year']             = $currentYears; 
			$data['Note'] 	          = $uniquecode;			
			$data['Remark'] 	      = $remark ;
			$data['ExpiryDate'] 	  = $expDate;
			$data['UniqueCode'] 	  = $uniquecode;
			$data['PromoCode'] 	      = $promo_list['PromoCode'];
			$data['fidVoucherStatus'] = 4;		//AKTIF
			$data['CreatedBy']        = 'CRM Webservice';//user login
			$data['MemberCode']	      = $membercode;	
			$data['fidFileUpload']	  = $promo_list['fidFileVoucher'];
			// $data['fidVoucherCategory']  = 1 ;	//PULSA REGULER
			// $data['fidVoucherSubCategory']  = 1;	
			$data['ModifiedDate']  = date('Y-m-d H:i:s');	
			
	
			if($promo_list['ScanType'] == 3){
				$data['fidVoucherCategory']  = 6 ;	
			}
			
			$dataPromo['PromoCode']   = $promo_list['PromoCode'];		
			$dataPromo['SaldoKuota']  = $promo_list['SaldoKuota']-1;	
			
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
			// $data_beon['CreateOn']        = ;
			$data_beon['Note']            = $data['Note'];
			$data_beon['Remark']          = $data['Remark'];
			$data_beon['Description']     = $data['Description'];
			$data_beon['ExpiryDate']      = $data['ExpiryDate'];
			$data_beon['UniqueCode']      = $data['UniqueCode'];
			$data_beon['PromoCode']       = $promo_det['PromoCodebeON'];
			
			$save = $this->voucher_model->save($data);				

			if($promo_list['ScanType'] == 3){
				$save = $this->voucher_beon_model->save($data_beon);
				$save = $this->promo_model->save($dataPromo);				
			}
			
			$where_voucher_success = array ();
			$where_voucher_success ['PromoCode']= $promocode;
			$where_voucher_success ['Note']= $uniquecode;
			$this->voucher_model->set_where($where_voucher_success);
			$voucher_list = $this->voucher_model->get_voucher_category();
			
			if($save)
			{				
				$result['statusCode']	= "1";
				$result['message']		=  'Claim success';
				$result['content_list'] = $voucher_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
	}
	public function promoVoucherBelanja($membercode)
	{
		// $user = $membercode;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$data = $_POST;
		//PERIODE PROMO
		$where = array ();
		$where ['PromoType']= 3;
		$currentDate = date("Y-m-d");
		$where['(
			"StartPromo" <= \''.$currentDate.'\' 
			and "EndPromo" >= \''.$currentDate.'\' )']= null;
		$this->promo_model->set_where($where);
		
		
		//PROMO MAKSIMUM YANG TELA DITRANSAKSIKAN
		// $where ['MemberCode'] = $user ;
		// $where['(
			// "MemberCode" = \''.$user.'\'
			// AND "fidVoucherType" <> 8)']= null;
		// $this->voucher_list_model->set_where($where);


		// $result['isEnableButton'] = true;
		$promo_list = $this->promo_model->get_list();
		
		// $pointpromo = $promo_list['PointRedeem'];
		
		
		// $picture = $promo['FilePath'].$promo['FileServerName'].'.'.$promo['FileExt'];
		$point_current = $this->member_points_currently_model->get($membercode);
		$result['current_point']	= $point_current;
		// $result['currentPoint']	= $point_current['TotalPoints'];
		// if ($point_current['TotalPoints'] < $pointpromo)
		// {
			// $result['isEnableButton'] = false;
			
		// }
		if($promo_list->num_rows()==0)
		{
			$result['message']	= 'no promo available..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['statusCode']	= "1";
			$result['message']	=  'Success..!';
			
			// $wheres = array ();
			// $wheres ['PromoCode']= $promocode;
			// $this->promo_detail_20_model->set_where($wheres);
			// $promo_det = $this->promo_detail_20_model->get($wheres);
			
			// $result['promoDescHeader'] = $promo_det['PrintHeader'];
			// $result['promoDescFooter'] = $promo_det['PrintFooter'];
			$result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	public function promolist($membercode)
	{
		// $user = $membercode;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$data = $_POST;
		//PERIODE PROMO
		$where = array ();
		$where ['PromoType']= 1;
		$currentDate = date("Y-m-d");
		$where['(
			"StartPromo" <= \''.$currentDate.'\' 
			and "EndPromo" >= \''.$currentDate.'\' 
			and "SaldoKuota" <> 0 )']= null;
		$this->promo_model->set_where($where);
		
		//PROMO MAKSIMUM YANG TELA DITRANSAKSIKAN
		// $where ['MemberCode'] = $user ;
		// $where['(
			// "MemberCode" = \''.$user.'\'
			// AND "fidVoucherType" <> 8)']= null;
		// $this->voucher_list_model->set_where($where);


		// $result['isEnableButton'] = true;
		$promo_list = $this->promo_model->get_list();
		
		// $pointpromo = $promo_list['PointRedeem'];
		
		
		// $picture = $promo['FilePath'].$promo['FileServerName'].'.'.$promo['FileExt'];
		$point_current = $this->member_points_currently_model->get($membercode);
		$result['current_point']	= $point_current;
		// $result['currentPoint']	= $point_current['TotalPoints'];
		// if ($point_current['TotalPoints'] < $pointpromo)
		// {
			// $result['isEnableButton'] = false;
			
		// }
		if($promo_list->num_rows()==0)
		{
			$result['message']	= 'no promo available..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['statusCode']	= "1";
			$result['message']	=  'Success..!';
			$result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function promo_elshop()
	{
		$brand  = $this->input->post('brand');
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$where = array ();
		$where ['PromoTypeCode']= '40';
		// if ($brand)
		// {
			// $where ['"BrandList" LIKE \'%'.$brand.'%\' %'']= '40';
		// }
		// $currentDate = date("Y-m-d");
		// $where['(
			// "StartPromo" <= \''.$currentDate.'\' 
			// and "EndPromo" >= \''.$currentDate.'\')']= null;
		$this->promo_model->set_where($where);
		$promo_count = $this->promo_model->count();

		$promo_list = $this->promo_model->get_list();		
	
		if($promo_list->num_rows()==0)
		{
			$result['message']	= 'no promo available..!';
			header('Content-type: application/json');
			$result['count'] = (int)$promo_count;

			echo die(json_encode($result));
		}else{
			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';			
			$result['count'] = (int)$promo_count;
			$result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	
	public function merchantpromolist($membercode)
	{
		// $user = $membercode;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$data = $_POST;
		//PERIODE PROMO
		$where = array ();
		$where ['PromoType']= 2;
		$currentDate = date("Y-m-d");			
		$where['(
			"StartPromo" <= \''.$currentDate.'\' 
			and "EndPromo" >= \''.$currentDate.'\')']= null;
		$this->promo_model->set_where($where);		
		$order_by['Name']= 'ASC';
		$this->promo_model->set_order($order_by);
		$promo_list = $this->promo_model->get_list();
		// echo $this->db->last_query();
		// exit;
		$point_current = $this->member_points_currently_model->get($membercode);
		$result['current_point']	= $point_current;
		if($promo_list->num_rows()==0)
		{
			$result['message']	= 'no promo available..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['statusCode']	= "1";
			$result['message']	=  'Success..!';
			$result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function validateMerchant()
	{
		$membercode        = $this->input->post('t_membercode');
		$idpromo           = $this->input->post('t_idpromo');
		$merchantCodeIn    = str_replace(" ","",$this->input->post('t_merchantcode'));	
		$promo             = $this->promo_model->get($idpromo);	
		// $merchantCode 	   = substr($promo['MerchantPartnerCode'],0,3);
		$merchantCode 	   = $promo['MerchantPartnerCode'];
		$member = $this->member_model->get($membercode);	
		//VALIDASI KODE INPUT 3 DIGIT
		if ($merchantCodeIn == ''){
			$result['statusCode']	= 0;
			$result['message']		=  'Merchant code is required';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else if (strlen($merchantCodeIn)!= 3 ){
			$result['statusCode']	= 0;
			$result['message']		=  'Merchant code input is invalid';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}		
		// VALIDASI KODE INPUT DENGAN DATABASE
		if (strpos($merchantCode, $merchantCodeIn) !== false )
		{
			// BUILD VOUCHER
			$currentDate	= date("Y-m-d");
			$longExp		= 100;		// waktu rentang exp 'x' hari
			$expDate		= date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
			$currentYears	= date("Y");
			$vouchertype 	= 8;		//MERCHANT VOUCHER
			$fidAmount 		= 0; 		//DUMMY
			$voucherAmount 	= 1; 		//DUMMY
			$voucherId 		= $this->generateVoucherID('',$fidAmount,$vouchertype);
			$voucherGenerate= $this->generateVoucher();  //VOUCHER UNIQUE CODE
			// INSERT VOUCHER
			$data['StoreCode']	      = 'ZHO';
			$data['StoreCodeRedeem']  = $merchantCodeIn;	
			$data['SKU']	          = '';		
			$data['Description']	  = $promo['Name'];	
			$data['VoucherId']        = $voucherId;
			$data['fidVoucherType']   = $vouchertype; //6 = Apps gift, 7 = Apps discount
			$data['fidAmount']        = $fidAmount; 
			$data['fidMotherBrand']   = '4'; //CRM Store
			$data['VoucherAmount']    = $voucherAmount;
			$data['Year']             = $currentYears; 
			$data['Note'] 	          = '';
			$data['Remark'] 	      = '';
			$data['ExpiryDate'] 	  = $expDate;
			$data['UniqueCode'] 	  = $voucherGenerate;
			$data['PromoCode'] 	      = $promo['PromoCode'];
			$data['fidVoucherStatus'] = 6;		// FULL REDEEM
			$data['CreatedBy']        = 'CRM Webservice';//user login
			$data['MemberCode']	      = $membercode;	
			$data['fidFileUpload']	  = $promo['fidFileVoucher'];	
			
			$save = $this->voucher_model->save($data);
			if($save)
			{		
				$result['statusCode']	= 1;
				$result['message']		=  'Redeem Success';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}else{	
			$result['statusCode']	= 0;
			$result['message']		=  'Merchant code input is invalid';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function promoredeem()
	{
		$membercode = $this->input->post('t_membercode');
		$idpromo    = $this->input->post('t_idpromo');
		$promo      = $this->promo_model->get($idpromo);	
		$pointpromo = $promo['PointRedeem'];				
		$promoStoreList = str_replace(" ","",$promo['StoreCodeList']);		
		
		// SELECT PROMODETAIL 22
		$promodetail22      = $this->promo_detail_22_model->get($idpromo);	
		$getamount			= $promodetail22['GetVoucher'];
		$deadline			= $promodetail22['Deadlines'];
		$vouchertype		= $promodetail22['GetVoucherType'];
		$promoCodeBeon		= $promodetail22['PromoCodebeON'];
		if (!$getamount){
			$result['statusCode']	= 0;
			$result['message']	=  'Promo not Available In Detail';
			// $result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		//SELECT AMOUNT VOUCHER AMOUNT		
		$whereamount = array();
		$whereamount ['VoucherAmount']= $getamount;
		$this->voucher_amount_model->set_where($whereamount);
		$voucher_amount_code = $this->voucher_amount_model->get($whereamount);
		

		//JUMLAH POIN YANG DIMILIKI (CUTRRENT POINT)
		$point_current = $this->member_points_currently_model->get($membercode);
		$member = $this->member_model->get($membercode);
		$memberStore = substr($member['StoreCode'],0,2);// init 2 digit
		$result['memberstore']	= $memberStore;
		if ($memberStore == ''){
			$result['statusCode']	= 0;
			$result['message']	=  'You do not qualify for this promo exchange!';
			// $result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		// VALIDASI MEMBER STORE	
		if (strpos($promoStoreList, $memberStore) !== false || strpos($promoStoreList, 'all') !== false)
		{
			// VALIDASI MEMBER TYPE
			if (!((in_array(trim(strtolower($member['fidMemberCategory'])),explode(',',trim(strtolower($promo['CustTypeList']))))) || (in_array('all',explode(',',trim(strtolower($promo['CustTypeList'])))))))
			{
				$result['statusCode']	= 0;
				$result['message']	=  'Your member type does not qualify for this promo exchange!';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			if ($point_current['TotalPoints'] < $pointpromo)
			{
				$result['statusCode']	= 0;
				$result['message']	=  'No enough point for redeem..!';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}else{
			// BUILD VOUCHER
				$currentDate = date("Y-m-d");
				$longExp = $deadline;// waktu rentang exp 'x' hari
				$expDate = date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
				$currentYears = date("Y");
				$fidAmount = $voucher_amount_code['idAmount']; 
				$voucherAmount = $getamount; //DUMMY
				$fidCategory = 0;
				$fidSubCategory = 0;
				
				if($promo['PromoType'] == 3) //VOUCHER PULSA REGULER
				{
					$vouchertype = 6; 
					$fidAmount = $voucher_amount_code['idAmount']; 
					$voucherAmount = $getamount; //DUMMY
					$fidCategory = 1;
					$fidSubCategory = 44;
				}
				
				$voucherId = $this->generateVoucherID('',$fidAmount,$vouchertype);
				$voucherGenerate = $this->generateVoucher();  //VOUCHER UNIQUE CODE
				// GET PROMO DETAIL
				$promo_current = $this->promo_model->get($idpromo);	
				// $storelist = explode(", ", $promoStoreList['StoreCodeList']);
				$result['storelist']	= $promoStoreList;
			}	
			
			// INSERT VOUCHER CRM
			$data['StoreCode']	      = 'ZHO';		
			$data['StoreCodeRedeem']  = '';	
			$data['SKU']	          = '';		
			$data['Description']	  = $promo['Name'];	
			$data['VoucherId']        = $voucherId;
			$data['fidVoucherType']   = $vouchertype; 	
			$data['fidAmount']        = $fidAmount; 
			$data['fidMotherBrand']   = '4'; 	//CRM Store
			$data['VoucherAmount']    = $voucherAmount;
			$data['Year']             = $currentYears; 
			$data['Note'] 	          = '';
			$data['Remark'] 	      = '';
			$data['ExpiryDate'] 	  = $expDate;
			$data['UniqueCode'] 	  = $voucherGenerate;
			$data['PromoCode'] 	      = $promo['PromoCode'];
			$data['fidVoucherStatus'] = 4;		//AKTIF
			$data['CreatedBy']        = 'CRM Webservice';//user login
			$data['MemberCode']	      = $membercode;	
			$data['fidFileUpload']	  = $promo['fidFileVoucher'];
			$data['fidVoucherCategory']  = $fidCategory;	
			$data['fidVoucherSubCategory']  = $fidSubCategory;	
			$dataPromo['PromoCode']   = $idpromo;		
			$dataPromo['SaldoKuota']  = $promo['SaldoKuota']-1;	
			
			
			// echo $promoCodeBeon;
			// die;
			
		
			if(!$promoCodeBeon){
				$promoCodeBeon  = '';
			}
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
			// $data_beon['CreateOn']        = ;
			$data_beon['Note']            = $data['Note'];
			$data_beon['Remark']          = $data['Remark'];
			$data_beon['Description']     = $data['Description'];
			$data_beon['ExpiryDate']      = $data['ExpiryDate'];
			$data_beon['UniqueCode']      = $data['UniqueCode'];
			$data_beon['PromoCode']       = $promoCodeBeon;
			
			
			//VALIDASI STOCK PROMO
			if($promo['SaldoKuota'] == 0 ) 
			{
				$result['statusCode']	= 0;
				$result['message']	=  'Sorry, this product has exceeded the exchange limit !';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}else{
				$save = $this->voucher_model->save($data);
				$save = $this->voucher_beon_model->save($data_beon);
				//UPDATE PROMOCEODE BEON
				$this->voucher_beon_model->update_promocode($data_beon['VoucherID'],$promoCodeBeon);
				$save = $this->promo_model->save($dataPromo);
			}
			//RETURN SUKSES
			if($save)
			{		
				$data_point = array();
				// INSERT  POINT TO MEMBER
				$data_point['TransDate']	= date('Y-m-d');
				$data_point['CreateBy']		= 'CRM Webservice';
				$data_point['CreateTime']	= date('Y-m-d H:i:s');
				$data_point['MemberCode']	= $membercode;
				$data_point['TransType']	= 7;		// INTERNAL PROMO 
				$data_point['Description']	= $promo['Name'];
				$data_point['Debit']		= 0;
				$data_point['Credit']		= $pointpromo;
				$data_point['LastUpdate']	= date('Y-m-d H:i:s');
				$data_point['PromoCode']	= $idpromo;
				$data_point['StoreCode']	= 'ZHO';
				$data_point['fidMemberCategory']	= $member['fidMemberCategory'];
				
				$savedata = $this->db->insert('points.Points', $data_point);
				$tahun = date('Y');
				$bulan = date('m');
				
				$query = $this->db->query('SELECT "member"."sp_InsertMemberPoints"(\''.$membercode.'\',\''.$tahun.'\',\''.$bulan.'\')');
				// echo $this->db->last_query();die;
				$result['statusCode']	= 1;
				$result['message']	=  'You get 1 voucher';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}else{
			$result['statusCode']	= 0;
			$result['message']		='You do not qualify for this promo exchanges!';
			// $result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function promoRedeemElshop()
	{
		$membercode = $this->input->post('membercode');
		$idpromo    = $this->input->post('id_promo');
		$promo = $this->promo_model->get($idpromo);	
		$promodetail40      = $this->promo_detail_40_model->get($idpromo);	
		$minRetail			= $promodetail40['MinRetailSales'];
		$brand = $this->input->post('brand');	


		if (!$promodetail40['PromoCode']){
			$result['statusCode']	= 0;
			$result['message']	=  'Promo not Available In Detail';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		
		// VALIDASI BRAND	
		if (strpos($brand, $promo['BrandList']) !== false || strpos($brand, 'all') !== false)
		{
	
			if ($point_current['TotalPoints'] < $pointpromo)
			{
				$result['statusCode']	= 0;
				$result['message']	=  'No enough point for redeem..!';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}else{
			// BUILD VOUCHER
				$currentDate = date("Y-m-d");
				$longExp = $deadline;// waktu rentang exp 'x' hari
				$expDate = date('Y-m-d', strtotime('+'.$longExp.' days', strtotime($currentDate))); //operasi penjumlahan tanggal variabel hari
				$currentYears = date("Y");
				$fidAmount = $voucher_amount_code['idAmount']; 
				$voucherAmount = $getamount; //DUMMY
				$fidCategory = 0;
				$fidSubCategory = 0;
				
				if($promo['PromoType'] == 3) //VOUCHER PULSA REGULER
				{
					$vouchertype = 6; 
					$fidAmount = $voucher_amount_code['idAmount']; 
					$voucherAmount = $getamount; //DUMMY
					$fidCategory = 1;
					$fidSubCategory = 44;
				}
				
				$voucherId = $this->generateVoucherID('',$fidAmount,$vouchertype);
				$voucherGenerate = $this->generateVoucher();  //VOUCHER UNIQUE CODE
				// GET PROMO DETAIL
				$promo_current = $this->promo_model->get($idpromo);	
				// $storelist = explode(", ", $promoStoreList['StoreCodeList']);
				$result['storelist']	= $promoStoreList;
			}	
			
			// INSERT VOUCHER CRM
			$data['StoreCode']	      = 'ZHO';		
			$data['StoreCodeRedeem']  = '';	
			$data['SKU']	          = '';		
			$data['Description']	  = $promo['Name'];	
			$data['VoucherId']        = $voucherId;
			$data['fidVoucherType']   = $vouchertype; 	
			$data['fidAmount']        = $fidAmount; 
			$data['fidMotherBrand']   = '4'; 	//CRM Store
			$data['VoucherAmount']    = $voucherAmount;
			$data['Year']             = $currentYears; 
			$data['Note'] 	          = '';
			$data['Remark'] 	      = '';
			$data['ExpiryDate'] 	  = $expDate;
			$data['UniqueCode'] 	  = $voucherGenerate;
			$data['PromoCode'] 	      = $promo['PromoCode'];
			$data['fidVoucherStatus'] = 4;		//AKTIF
			$data['CreatedBy']        = 'CRM Webservice';//user login
			$data['MemberCode']	      = $membercode;	
			$data['fidFileUpload']	  = $promo['fidFileVoucher'];
			$data['fidVoucherCategory']  = $fidCategory;	
			$data['fidVoucherSubCategory']  = $fidSubCategory;	
			$dataPromo['PromoCode']   = $idpromo;		
			$dataPromo['SaldoKuota']  = $promo['SaldoKuota']-1;	
			
			
			// echo $promoCodeBeon;
			// die;
			
		
			if(!$promoCodeBeon){
				$promoCodeBeon  = '';
			}
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
			// $data_beon['CreateOn']        = ;
			$data_beon['Note']            = $data['Note'];
			$data_beon['Remark']          = $data['Remark'];
			$data_beon['Description']     = $data['Description'];
			$data_beon['ExpiryDate']      = $data['ExpiryDate'];
			$data_beon['UniqueCode']      = $data['UniqueCode'];
			$data_beon['PromoCode']       = $promoCodeBeon;
			
			
			//VALIDASI STOCK PROMO
			if($promo['SaldoKuota'] == 0 ) 
			{
				$result['statusCode']	= 0;
				$result['message']	=  'Sorry, this product has exceeded the exchange limit !';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}else{
				$save = $this->voucher_model->save($data);
				$save = $this->voucher_beon_model->save($data_beon);
				//UPDATE PROMOCEODE BEON
				$this->voucher_beon_model->update_promocode($data_beon['VoucherID'],$promoCodeBeon);
				$save = $this->promo_model->save($dataPromo);
			}
			//RETURN SUKSES
			if($save)
			{		
				$data_point = array();
				// INSERT  POINT TO MEMBER
				$data_point['TransDate']	= date('Y-m-d');
				$data_point['CreateBy']		= 'CRM Webservice';
				$data_point['CreateTime']	= date('Y-m-d H:i:s');
				$data_point['MemberCode']	= $membercode;
				$data_point['TransType']	= 7;		// INTERNAL PROMO 
				$data_point['Description']	= $promo['Name'];
				$data_point['Debit']		= 0;
				$data_point['Credit']		= $pointpromo;
				$data_point['LastUpdate']	= date('Y-m-d H:i:s');
				$data_point['PromoCode']	= $idpromo;
				$data_point['StoreCode']	= 'ZHO';
				$data_point['fidMemberCategory']	= $member['fidMemberCategory'];
				
				$savedata = $this->db->insert('points.Points', $data_point);
				$tahun = date('Y');
				$bulan = date('m');
				
				$query = $this->db->query('SELECT "member"."sp_InsertMemberPoints"(\''.$membercode.'\',\''.$tahun.'\',\''.$bulan.'\')');
				// echo $this->db->last_query();die;
				$result['statusCode']	= 1;
				$result['message']	=  'You get 1 voucher';
				// $result['content_list'] = $promo_list->result_array();
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}else{
			$result['statusCode']	= 0;
			$result['message']		='You do not qualify for this promo exchanges!';
			// $result['content_list'] = $promo_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	
	function generateVoucherID($txt='',$fidAmount = '',$voucherType)
	{
		$tgl = strlen(date("d"))==1?'0'.date("d"):date("d");
		$bln = strlen(date("m"))==1?'0'.date("m"):date("m");
		$thn = date("y");		
		$digitamount = strlen($fidAmount);
		// 1171412058 - > motherbrand 1 digit,tahun 2 digit,vouchertype 1 digit,fidamount 2 digit,running number 5digit
			$nourut = $txt.'4'.$thn.$voucherType.$fidAmount;
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
