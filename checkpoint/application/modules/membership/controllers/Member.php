<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/merchant_partner_model');
		$this->load->model('master/merchant_privilege_model');
		$this->load->model('master/member_model');
		$this->load->model('master/kabupaten_model');
		$this->load->model('master/kelurahan_model');
		$this->load->model('master/provinsi_model');
		$this->load->model('master/kecamatan_model');
		$this->load->model('master/store_access_model');
		$this->load->model('master/customer_category_access_model');
		$this->load->model('master/customer_beon_model');
		$this->load->model('files/file_upload_model');
		$this->load->model('files/activity_log_model');
		$this->load->model('member_points_currently_model');
		$this->load->model('points_model');
		/*
		
			Provinsi = Provinces  	=> provinces
			Kabupaten = District	=> district
			Kecamatan = Village		=> village
			Kelurahan = City		=> city
		
		*/
	}
	
	public function index()
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Member', base_url('membership/member'));
		// $this->bc->set_title('Data Member');
		
		 $data = array(
		 'content' => 'member/main'
		 ,'title' => 'judulnya'
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$user_store_code 	= $this->session->userdata('StoreCode');
		// echo $user_store_code;
		// print_r($_POST);
		$id_operator = $this->session->userdata('idMsOperator');
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$active_sts	 = $this->input->post('t_sts_active');
		$year_reg	 = $this->input->post('t_year_reg');
		$reg_date	 = $this->input->post('t_regdate');
		// binding data
		$this->member_model->set_limit($limit);
		$this->member_model->set_offset($limit * ($pg - 1));
		$this->member_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where["(tbl.\"MemberCode\" ~* '$search'
					OR UPPER(\"IdCardNumber\") LIKE '%$search%'
					OR tbl.\"Name\" ~* '$search'
					OR UPPER(\"Phone\") LIKE '%$search%'
					OR UPPER(\"Handpone\") LIKE '%$search%'
					OR UPPER(\"Barcode\") LIKE '%$search%'
					OR UPPER(\"Email\") LIKE '%$search%'
					OR UPPER(\"Address\") LIKE '%$search%'
				)"] = NULL;
		if($active_sts==1)
		{
			$where['isActive'] = 1;
		}else if($active_sts==2){
			$where['isActive'] = 0;
		}
		if(!$is_super_user)
		{
			// $where['StoreCode'] = $user_store_code;
			$where['tbl.StoreCode in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')'] = null;
		}
		
		if($year_reg!=0)
		{
			$where['date_part(\'year\',"RegistrationDate")'] = $year_reg;
		}
		
		if($reg_date)
		{
			$where['"RegistrationDate"']	= getSQLDate($reg_date);
		}
		$this->member_model->set_where($where);
		$key = array();
		$key['MemberCode']	= $search;
		$key['IdCardNumber']	= $search;
		$key['Barcode']	= $search;
		$key['Name']		= $search;
		$key['Phone']	= $search;
		$key['Email']		= $search;
		$key['Address']		= $search;
		$list = $this->member_model->get_list();
		// echo $this->db->last_query();
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->member_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'membership/member/list'
			,'title' 			=> 'List Member'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function lookup_member_beon()
	{
		$operator_id	= $this->session->userdata('idMsOperator');
		$strlist = $this->download_store_beon($operator_id);
		$data = array('content' 			=> 'membership/member/lookup_member_beon' 
			,'content_type' 	=> 'list'
			,'strlist' 	=> $strlist
		);
		$this->load->view($data['content'],$data);
	}
	
	function page_lookup_member_beon($pg)
	{
		
		// print_r($_POST);die;
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$birth_date	= $this->input->post('t_birthdate');
		$storecode	= $this->input->post('t_store_search_beon');
		
		// binding data
		$this->customer_beon_model->set_limit($limit);
		$this->customer_beon_model->set_offset($limit * ($pg - 1)); 
		// filtering data
		$where = array();
		if($search){
			$where["( \"Name\" ~* '$search'
					)"] = NULL;
		}else{
			// $where['Name'] = '';
		}
		$where['StoreCode'] = $storecode;
		if($birth_date){
			$where['DateOfBirth'] = getSQLDate($birth_date);			
		}
		else{
			$where['DateOfBirth'] = '19000101';
		}
		$this->customer_beon_model->set_where($where);
		$key = array();
		$key['Name']	= $search;
		$key['DateOfBirth']= $search;
		$list = $this->customer_beon_model->get_list();
		// echo $this->customer_beon_model->db->last_query();
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_beon_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'pageLoadMemberBeonLookup';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'membership/member/lookup_member_beon_list' 
			,'title' 			=> 'List Member'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function select_lookup_member_beon($membercode)
	{
		$check_user_local = $this->member_model->get($membercode);
		
		if($check_user_local['MemberCode']!='')
		{
			$this->error('Member Already registered by name : '.$check_user_local['Name']);
		}
		
		
		$user_row_beon = $this->customer_beon_model->get($membercode);
	
		$data_user_crm = array();
		
		$data_user_crm['fidMemberCategory']	= $user_row_beon['CustCatCode'];
		$data_user_crm['MemberCode']		= $user_row_beon['CustCode'];
		$data_user_crm['Name']				= $user_row_beon['Name'];
		$data_user_crm['Password']			= $user_row_beon['Password'];
		$data_user_crm['RegistrationDate']	= $user_row_beon['RegDate'];
		$data_user_crm['CityOfBirth']		= $user_row_beon['CityOfBirth'];
		$data_user_crm['DateOfBirth']		= $user_row_beon['DateOfBirth'];
		$data_user_crm['IdCardNumber']		= $user_row_beon['IDCardNum'];
		$data_user_crm['Address']			= $user_row_beon['Address'];
		$data_user_crm['RT']				= $user_row_beon['RT'];
		$data_user_crm['RW']				= $user_row_beon['RW'];
		$data_user_crm['PosCode']			= $user_row_beon['PosCode'];
		$data_user_crm['City']				= $user_row_beon['City'];
		$data_user_crm['Phone']				= $user_row_beon['Phone'];
		$data_user_crm['Handpone']			= $user_row_beon['HP'];
		$data_user_crm['Email']				= $user_row_beon['Email'];
		$data_user_crm['StoreCode']			= $user_row_beon['StoreCode'];
		$data_user_crm['ValidUntil']		= $user_row_beon['ValidUntil'];
		$data_user_crm['CreatedDate']		= $user_row_beon['CreateDate'];
		$data_user_crm['CreatedBy']			= $user_row_beon['CreateBy']?:$this->session->userdata('LoginName');
		$data_user_crm['ModifiedDate']		= $user_row_beon['ModifDate'];
		$data_user_crm['ModifiedBy']		= $user_row_beon['ModifBy'];
		$data_user_crm['Sex']				= $user_row_beon['Sex'];
		$data_user_crm['Married']			= $user_row_beon['Married'];
		$data_user_crm['Barcode']			= $user_row_beon['BarCode'];
		$data_user_crm['LastUpdate']		= $user_row_beon['LastUpdate'];
		$data_user_crm['isActive']			= $user_row_beon['isActive'];

		$this->db->trans_start();
			
		$save_user_crm = $this->member_model->save(array_filter($data_user_crm));
			
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['id'] = encode($user_row_beon['CustCode']);
			$this->success('Member Download Success');
		}
	}
	
	function info($id='')
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Member', base_url('membership/member'));
		$this->bc->add('Member Data', base_url());
		$this->bc->set_title('Member Management');
		
		$operator_id	= $this->session->userdata('idMsOperator');
		
		$userid = decode($id);
		// echo $userid;
		$datatrx = $this->member_model->get($userid);
		// print_r($datatrx);
		// die;
		if($datatrx['MemberCode'])
		{
			$action = array('code'=>1,'description'=>'Modify Data');
			$tahun = date('Y');
			$bulan = date('n');
			$this->points_model->posting($datatrx['MemberCode'],$tahun,$bulan);
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}
		
			
		$points = $this->member_points_currently_model->get($userid);
		
		
		$custcat = $this->download_cust_cat_beon($operator_id);
		$strlist = $this->download_store_beon($operator_id);
		
		$data = array(
			'content' 			=> 'membership/member/info'
			,'membercode'		=> $userid
			,'datatrx'			=> $datatrx
			,'action'			=> $action
			,'custcat'			=> $custcat
			,'strlist'			=> $strlist
			,'points'			=> $points
		);
		 $this->load->view('tpl',$data);
	}
	
	function load_user_activity()
	{
		$member_code = $this->input->post('t_member_code');
		
		$this->activity_log_model->set_where(array('MemberCode'=>$member_code));
		$this->activity_log_model->set_order(array('ActionTime'=>'DESC'));
		$activity = $this->activity_log_model->get_list();
		// echo $this->db->last_query();
		$data = array(
			'content' 			=> 'membership/member/activity_list'
			,'membercode'		=> $member_code
			,'activity'			=> $activity
		);
		
		 $this->load->view($data['content'],$data);
	}
	
	function load_user_transaction($pg=1)
	{
		// print_r($_POST);die;
		$this->load->model('sales/sales_model');
		$member_code = $this->input->post('t_member_code');
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$date_start	 = ($this->input->post('t_date_start_filter'));
		$date_end	 = ($this->input->post('t_date_end_filter'));
		if($member_code=='')
		{
			echo "No DATA";
			die;
		}
		$this->sales_model->set_limit($limit);
		$this->sales_model->set_offset($limit * ($pg - 1));
		$order = array();
		$order['TransDate'] = 'DESC';
		$order['TransNum'] = 'DESC';
		$where = array();
		// $where['"CustCode" = ANY (\'{'.$member_code.'}\')'] = null;
		$where['"TransNum" = any(SELECT "TransNum" FROM terminal."LogSalesPoint" WHERE "CustCode" = \''.$member_code.'\')'] = null;
		$where['TransStatus >=8'] 	= null;
		$where["(UPPER(tbl.\"TransNum\") LIKE '%$search%'
					OR UPPER(tbl.\"StoreCode\") LIKE '%$search%'
					OR UPPER(str.\"Description\") LIKE '%$search%'
				)"] = NULL;
		if($date_start)
		{
			$where['"TransDate" >= \''.getSQLDate($date_start).'\''] 	= null;
		}
		if($date_end)
		{
			$where['"TransDate" <= \''.getSQLDate($date_end).'\''] 	= null;
		}
		
		$this->sales_model->set_order($order);
		$this->sales_model->set_where($where);
		$key = array();
		$key['TransNum']			= $search;
		$key['StoreCode']			= $search;
		$key['StoreDescription']	= $search;
		$sales_list  = $this->sales_model->get_list();
		// echo $this->sales_model->db->last_query();
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->sales_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'load_user_transaction';
		$page['list'] 		= $this->gen_paging($page);
		// echo $this->db->last_query();
		$data = array(
			'content' 			=> 'membership/member/transaction_list'
			,'membercode'		=> $member_code
			,'sales_list'		=> $sales_list
			,'key' 				=> $key
			,'paging' 			=> $page
		);
		
		 $this->load->view($data['content'],$data);
	}
	
	function load_user_point_history($pg=1)
	{
		$member_code = $this->input->post('t_member_code');
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$date_start	 = ($this->input->post('t_date_start_filter'));
		$date_end	 = ($this->input->post('t_date_end_filter'));
		
		if($member_code=='')
		{
			echo "No DATA";
			die;
		}
		
		$order = array();
		$order['TransDate'] = 'DESC';
		$order['TransNumRef'] = 'DESC';
		$order['tbl.PromoCode'] = 'DESC';
		$order['tbl.CreateTime'] = 'DESC';
		$where = array();
		$where['MemberCode'] 			= $member_code;
		
		if($date_start)
		{
			$where['"TransDate" >= \''.getSQLDate($date_start).'\''] 	= null;
		}
		if($date_end)
		{
			$where['"TransDate" <= \''.getSQLDate($date_end).'\''] 	= null;
		}
		if($search)
		{
			$where["(UPPER(tbl.\"TransNumRef\") LIKE '%$search%'
						OR UPPER(tbl.\"StoreCode\") LIKE '%$search%'
						OR UPPER(tbl.\"Description\") LIKE '%$search%'
					)"] = NULL;
		}
		
		$this->points_model->set_where($where);
		$this->points_model->set_order($order);
		$key = array();
		$key['TransNumRef']			= $search;
		$key['StoreCode']			= $search;
		$key['Description']	= $search;
		$points_all  = $this->points_model->get_list();
		$tot_points = 0;
		foreach($points_all->result_array() as $keydata=>$row){
			$tot_points = $tot_points+$row['Debit']-$row['Credit'];
		}
		$this->points_model->set_limit($limit);
		$this->points_model->set_offset($limit * ($pg - 1));
		$points_list  = $this->points_model->get_list();
		
		// echo $this->db->last_query();
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->points_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'load_user_point_history';
		$page['list'] 		= $this->gen_paging($page);
		
		$data = array(
			'content' 			=> 'membership/member/points_list'
			,'membercode'		=> $member_code
			,'points_list'		=> $points_list
			,'paging' 			=> $page
			,'key' 				=> $key
			,'tot_points' 		=> $tot_points
		);
		
		$this->load->view($data['content'],$data);
	}
	
	function input($id='')
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Member', base_url('membership/member'));
		$this->bc->add('Member Data', base_url());
		$this->bc->set_title('Member Management');
		
		$operator_id	= $this->session->userdata('idMsOperator');
		$where_mrt = array();
		$where_mrt['"MerchantPartnerCode" in (SELECT "MerchantPartnerCode" FROM admpanel."msMerchantPrivilege" WHERE "fidMsOperator" = '.($operator_id).')'] = null;
		$this->merchant_partner_model->set_where($where_mrt);
		$list_merchant = $this->merchant_partner_model->get_list();
		$userid = decode($id);
		// echo $userid;
		$datatrx = $this->member_model->get($userid);
		// print_r($datatrx);
		// die;
		if($datatrx['MemberCode'])
		{
			$action = array('code'=>1,'description'=>'Modify Data');
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}
		
		$custcat = $this->download_cust_cat_beon($operator_id);
		$strlist = $this->download_store_beon($operator_id);
		
		$data = array(
			'content' 			=> 'membership/member/input'
			,'datatrx'			=> $datatrx
			,'action'			=> $action
			,'custcat'			=> $custcat
			,'strlist'			=> $strlist
			,'list_merchant'	=> $list_merchant
		);
		 $this->load->view('tpl',$data);
	}
	
	function download_cust_cat_beon($userid)
	{
		$arr_cust = array();
		$this->customer_category_access_model->set_where(array('fidMsOperator'=>$userid));
		$mbr_category = $this->customer_category_access_model->get_list();
		$curl = curl_init();
		$url = get_myconf('beon_api').'customer/crm_get_cust_category';
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url
		));
		$resp = curl_exec($curl);
		curl_close($curl);
		$custcat = json_decode($resp,true); 
		$filtered		= array();
		$cust_allowed 	= ($mbr_category->result_array());
		$cust_all		= $custcat;
		foreach($cust_all as $row)
		{
			foreach($cust_allowed as $row_all)
			{
				if($row['CatCode']==$row_all['CatCode'])
				{
					array_push($filtered,array('CatCode'=>$row_all['CatCode'],'Description'=>$row['Description']));
				}
			}
		}
		return $filtered;
	}
	
	function validasi_hp()
	{
		$resultdata = array();
		$resultdata['result_error'] = '';
		$hp = $this->input->post('t_handphone');
		$membercode = $this->input->post('t_membercode');
		$get_member	= $this->member_model->get(decode($membercode));
		// echo $this->db->last_query();
		// print_r($get_member);
		// cek jika modif no hp dari yg sebelumnya
		if($get_member['Handpone']!=$hp)
		{
			$wer = array();
			$wer['Handpone']	=	$hp;
			$wer['"MemberCode"!= \''.$membercode.'\'']	= null;
			$get_local_member = $this->member_model->get($wer);
			// echo $this->db->last_query();
			if($get_local_member['MemberCode']!='')
			{
				$resultdata['result_error'] = 'NO HP Sudah dipakai oleh user lain : '.$get_local_member['Name'];
			}
			
			$curl = curl_init();
			$url = get_myconf('beon_api').'customer/crm_get_cust_by_phone/'.$hp;
			curl_setopt_array($curl, array(
				CURLOPT_RETURNTRANSFER => 1,
				CURLOPT_URL => $url
			));
			$resp = curl_exec($curl);
			curl_close($curl);
			$resultdata['Member'] = json_decode($resp);
		}
		// print_r($resultdata);
		// print_r($resultdata);
		header('Content-Type: application/json');
		echo json_encode($resultdata);
	}
	
	function download_store_beon($userid)
	{
		$this->store_access_model->set_where(array('fidMsOperator'=>$userid));
		$str_access = $this->store_access_model->get_list();
		$curl = curl_init();
		$url = get_myconf('beon_api').'master/store/crm_get_store';
		curl_setopt_array($curl, array(
			CURLOPT_RETURNTRANSFER => 1,
			CURLOPT_URL => $url
		));
		$resp = curl_exec($curl); 
		curl_close($curl);
		$custcat = json_decode($resp,true);
		$filtered		= array();
		$str_allowed 	= ($str_access->result_array());
		$str_all		= $custcat;
		foreach($str_all as $row)
		{
			foreach($str_allowed as $row_all)
			{
				if($row['StoreCode']==$row_all['StoreCode'])
				{
					array_push($filtered,array('StoreCode'=>$row_all['StoreCode'],'Description'=>$row['Description']));
				}
			}
		}
		return $filtered;
	}
	
	function gen_member_code()
	{
		$storecode = $this->input->post('t_storecode');
		$custcode = $this->input->post('t_member_category');
		
		$next_member_code = $this->member_model->get_last_custcode($storecode,$custcode);
		// print_r($next_member_code);
		header('Content-Type: application/json');
		$result = array();
		$result['MemberCode'] = $next_member_code;
		echo json_encode($result);
	}
	
	function add_leading_zero($str)
	{
		$res = $str;
		
		$len = strlen($str);
		
		if($len==1)
		{
			$res = '0'.$res;
		}
		return $res;
	}
	
	function save_member_old()
	{
		$transnum = decode($this->input->post('t_transnum'));
		$membercode = ($this->input->post('t_membercode'));
		$action = $this->input->post('t_action');
		
		$dob_d = $this->add_leading_zero($this->input->post('t_dateofbirth_d'));
		$dob_m = $this->add_leading_zero($this->input->post('t_dateofbirth_m'));
		$dob_y = $this->input->post('t_dateofbirth_y');
		
		$val_d = $this->add_leading_zero($this->input->post('t_validuntil_d'));
		$val_m = $this->add_leading_zero($this->input->post('t_validuntil_m'));
		$val_y = $this->input->post('t_validuntil_y');
		
		if(!checkdate($dob_m, $dob_d, $dob_y))
		{
				$this->error('Birth Date not valid ...!');
		}
		
		if(!checkdate($val_m, $val_d, $val_y))
		{
				$this->error('Expiration Date not valid ...!'.' '.$val_y.$val_m.$val_d);
		}
			$data['MemberCode'] = $this->input->post('t_membercode');
			$data['IdCardNumber'] = $this->input->post('t_idcardnumber');
			$data['Name'] = $this->input->post('t_name');
			// $data['Password'] = $this->input->post('t_password');
			// $data['RegistrationDate'] = getSQLDate($this->input->post('t_registrationdate'));
			$data['CityOfBirth'] = $this->input->post('t_cityofbirth');
			// $data['DateOfBirth'] = getSQLDate($this->input->post('t_dateofbirth'));
			$data['DateOfBirth'] = $dob_y.$dob_m.$dob_d;
			$data['Address'] = $this->input->post('t_address');
			$data['RT'] = $this->input->post('t_rt');
			$data['RW'] = $this->input->post('t_rw');
			$data['Village'] = $this->input->post('t_village');
			$data['District'] = $this->input->post('t_district');
			$data['City'] = $this->input->post('t_city');
			$data['Provinces'] = $this->input->post('t_provinces');
			$data['PosCode'] = $this->input->post('t_poscode');
			$data['Phone'] = $this->input->post('t_phone');
			$data['Handpone'] = $this->input->post('t_handphone');
			$data['Email'] = $this->input->post('email');
			$data['Sex'] = $this->input->post('t_gender')?:0;
			$data['Married'] = $this->input->post('t_married')?:0;
			$data['ModifiedBy'] = $this->session->userdata('LoginName');
			$data['ModifiedDate'] = date('Ymd H:i:s');
			$data['LastUpdate'] = date('Ymd H:i:s');
			// $data['isActive'] = $this->input->post('isActive');
			// $data['ValidUntil'] = getSQLDate($this->input->post('t_validuntil'));
			$data['ValidUntil'] = $val_y.$val_m.$val_d;
			$data['Barcode'] = $this->input->post('t_barcode');
			$data['FullName'] = $this->input->post('t_name');
			$data['isMerchantPartner'] = $this->input->post('t_is_merchant_partner')?:0;
			$data['MerchantPartnerCode'] = '';
			$data['MemberCodeMerchantPartner'] = '';
			if($data['isMerchantPartner']){
				$data['MerchantPartnerCode'] = $this->input->post('t_merchant_id');
				$data['MemberCodeMerchantPartner'] = $this->input->post('t_merchant_code');
				if($data['MerchantPartnerCode']=='')
				{
					$this->error('Pilih Merchant terlebih dahulu..!');
				}
				if($data['MemberCodeMerchantPartner']=='')
				{
					$this->error('Merchant Code masih kosong..!');
				}
			}
			// $this->error(json_encode($data));
		
		$this->db->trans_start();
		
		// echo $this->db->last_query();
		// print_r($get_member);

		$data['MemberCode'] = $membercode;
		$check_user = $this->member_model->get(array('MemberCode'=>$data['MemberCode']));
		if($action==0)
		{
			$data['fidMemberCategory'] = $this->input->post('t_member_category');
			$data['StoreCode'] = $this->input->post('t_storecode');
			if($data['StoreCode']=='')
			{
				$this->error('Store Code belum dipilih..!');
			}
			if(!$data['fidMemberCategory'])
			{
				$this->error('Member Category belum dipilih..!');
			}
			
			if($check_user['MemberCode'])
			{
				$this->error('Member Code Already Used');
			}else
			{
				$data['MemberCode'] = $this->member_model->get_last_custcode($data['StoreCode'],$data['fidMemberCategory']);
			}
			$data['CreatedBy'] = $this->session->userdata('LoginName');
			$data['CreatedDate'] = date('Ymd H:i:s');
			$data['RegistrationDate'] = date('Ymd H:i:s');
			// $this->validasi_custcode_beon($data['MemberCode'],$data['StoreCode'],$data['fidMemberCategory']);
			// validasi user beon
			
			$cust_beon = $this->customer_beon_model->get($data['MemberCode']);
			
			if($cust_beon['CustCode']!='')
			{
				$data_user_crm = array();
				
				$data_user_crm['fidMemberCategory']	= $cust_beon['CustCatCode'];
				$data_user_crm['MemberCode']		= $cust_beon['CustCode'];
				$data_user_crm['Name']				= $cust_beon['Name'];
				$data_user_crm['Password']			= $cust_beon['Password'];
				$data_user_crm['RegistrationDate']	= $cust_beon['RegDate'];
				$data_user_crm['CityOfBirth']		= $cust_beon['CityOfBirth'];
				$data_user_crm['DateOfBirth']		= $cust_beon['DateOfBirth'];
				$data_user_crm['IdCardNumber']		= $cust_beon['IDCardNum'];
				$data_user_crm['Address']			= $cust_beon['Address'];
				$data_user_crm['RT']				= $cust_beon['RT'];
				$data_user_crm['RW']				= $cust_beon['RW'];
				$data_user_crm['PosCode']			= $cust_beon['PosCode'];
				$data_user_crm['City']				= $cust_beon['City'];
				$data_user_crm['Phone']				= $cust_beon['Phone'];
				$data_user_crm['Handpone']			= $cust_beon['HP'];
				$data_user_crm['Email']				= $cust_beon['Email'];
				$data_user_crm['StoreCode']			= $cust_beon['StoreCode'];
				$data_user_crm['ValidUntil']		= $cust_beon['ValidUntil'];
				$data_user_crm['CreatedDate']		= $cust_beon['CreateDate'];
				$data_user_crm['CreatedBy']			= $cust_beon['CreateBy']?:$this->session->userdata('LoginName');
				$data_user_crm['ModifiedDate']		= $cust_beon['ModifDate'];
				$data_user_crm['ModifiedBy']		= $cust_beon['ModifBy'];
				$data_user_crm['Sex']				= $cust_beon['Sex'];
				$data_user_crm['Married']			= $cust_beon['Married'];
				$data_user_crm['Barcode']			= $cust_beon['BarCode'];
				$data_user_crm['LastUpdate']		= $cust_beon['LastUpdate'];
				$data_user_crm['isActive']			= $cust_beon['isActive'];

				$save_user_crm = $this->member_model->save(array_filter($data_user_crm));
				
				$data['MemberCode'] = $this->member_model->get_last_custcode($data['StoreCode'],$data['fidMemberCategory']);
			}
		}
		// cek jika modif no hp dari yg sebelumnya
		if($check_user['Handpone']!=$data['Handpone'])
		{
			$wer = array();
			$wer['Handpone']	=	$data['Handpone'];
			$wer['"MemberCode"!= \''.$membercode.'\'']	= null;
			$get_local_member = $this->member_model->get($wer);
			// echo $this->db->last_query();
			if($get_local_member['MemberCode']!='')
			{
				$this->error('No HP Sudah dipakai member lain : '.$get_local_member['Name']);
			}
		}
		// $this->error(json_encode($data));
		// die;
		$save = $this->member_model->save($data);
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			// save log 
			if($action==0)
			{
				$data_log['MemberCode']	= $data['MemberCode'];
				$data_log['TabelName'] 	= 'Member';
				$data_log['LogType'] 	= 'registrasi account (website)';
				$data_log['Value'] 	    = '';
				// $data_log['Value'] 	    = array_to_string($data);
				$data_log['fidActivityLogType'] = 1;
				
				$save_log = $this->activity_log_model->saveTo($data_log);
			}
			
			$this->db->trans_commit();
			$this->result['id'] = encode($data['MemberCode']);
			$this->success('Save Data Success');
		}
	}
	
	function save_member()
	{
		$action = $this->input->post('t_action');
		
		$dob_d = $this->add_leading_zero($this->input->post('t_dateofbirth_d'));
		$dob_m = $this->add_leading_zero($this->input->post('t_dateofbirth_m'));
		$dob_y = $this->input->post('t_dateofbirth_y');
		
		$val_d = $this->add_leading_zero($this->input->post('t_validuntil_d'));
		$val_m = $this->add_leading_zero($this->input->post('t_validuntil_m'));
		$val_y = $this->input->post('t_validuntil_y');
		
		if(!checkdate($dob_m, $dob_d, $dob_y))
		{
			$this->error('Birth Date not valid ...!');
		}
		
		if(!checkdate($val_m, $val_d, $val_y))
		{
			/* $this->error('Expiration Date not valid ...!'.' '.$val_y.$val_m.$val_d); */
		}

		$data['MemberCode'] = $this->input->post('t_membercode');
		$data['IdCardNumber'] = $this->input->post('t_idcardnumber');
		$data['Name'] = $this->input->post('t_name');
		$data['CityOfBirth'] = $this->input->post('t_cityofbirth');
		$data['DateOfBirth'] = $dob_y.$dob_m.$dob_d;
		$data['Address'] = $this->input->post('t_address');
		$data['RT'] = $this->input->post('t_rt');
		$data['RW'] = $this->input->post('t_rw');
		$data['Village'] = $this->input->post('t_village');
		$data['District'] = $this->input->post('t_district');
		$data['City'] = $this->input->post('t_city');
		$data['Provinces'] = $this->input->post('t_provinces');
		$data['PosCode'] = $this->input->post('t_poscode');
		$data['Phone'] = $this->input->post('t_phone');
		$data['Handpone'] = $this->input->post('t_handphone');
		$data['Email'] = $this->input->post('email');
		$data['Sex'] = $this->input->post('t_gender')?:0;
		$data['Married'] = $this->input->post('t_married')?:0;
		$data['ModifiedBy'] = $this->session->userdata('LoginName');
		$data['ModifiedDate'] = date('Ymd H:i:s');
		$data['LastUpdate'] = date('Ymd H:i:s');
		$data['ValidUntil'] = $val_y.$val_m.$val_d;
		$data['Barcode'] = $this->input->post('t_barcode');
		$data['FullName'] = $this->input->post('t_name');
		$data['isMerchantPartner'] = $this->input->post('t_is_merchant_partner')?:0;
		$data['MerchantPartnerCode'] = '';
		$data['MemberCodeMerchantPartner'] = '';
		$memcat = $this->input->post('t_member_category');
		// print_r(memcat);
		
		if($memcat == '13') {
			$data['MerchantPartnerCode'] = $this->input->post('t_merchant_id');
			$data['MemberCodeMerchantPartner'] = $this->input->post('t_merchant_code');
			$data['isMerchantPartner'] = 1;

			if($data['MerchantPartnerCode']=='')
			{
				$this->error('Pilih Merchant terlebih dahulu..!');
			}
			if($data['MemberCodeMerchantPartner']=='')
			{
				$this->error('Merchant Code masih kosong..!');
			}
			$data['MemberCodeMerchantPartner'] = $this->input->post('t_merchant_id').$this->input->post('t_merchant_code');
		}else{
			$data['MerchantPartnerCode'] = '';
			$data['MemberCodeMerchantPartner'] ='';
			$data['isMerchantPartner'] = 0;
		}
		// echo $this->input->post('t_member_category');
		// if($data['isMerchantPartner']){
			// $data['MerchantPartnerCode'] = $this->input->post('t_merchant_id');
			// $data['MemberCodeMerchantPartner'] = $this->input->post('t_merchant_code');
			// if($data['MerchantPartnerCode']=='')
			// {
				// $this->error('Pilih Merchant terlebih dahulu..!');
			// }
			// if($data['MemberCodeMerchantPartner']=='')
			// {
				// $this->error('Merchant Code masih kosong..!');
			// }
		// }
		
		// $this->db->trans_start();
		
		$check_user = $this->member_model->get(array('MemberCode'=>$data['MemberCode']));
		$datapost = array();
		if($action==0)
		{
			$data['fidMemberCategory'] = $this->input->post('t_member_category');
			$data['StoreCode'] = $this->input->post('t_storecode');
			if($data['StoreCode']=='')
			{
				$this->error('Store Code belum dipilih..!');
			}
			if(!$data['fidMemberCategory'])
			{
				$this->error('Member Category belum dipilih..!');
			}
			
			if($check_user['MemberCode'])
			{
				$this->error('Member Code Already Used');
			}

			$data['CreatedBy'] = $this->session->userdata('LoginName');
			$data['CreatedDate'] = date('Ymd H:i:s');
			$data['RegistrationDate'] = date('Ymd H:i:s');
			$datapost['t_store_code'] = $data['StoreCode'];
			$datapost['t_member_category'] = $data['fidMemberCategory'];
			$datapost['t_created_by'] = $data['CreatedBy'];
			$datapost['t_action_insert'] = 1;
		}

		$datapost['t_identifier'] = 'Web CRM';
		$datapost['t_membercode'] = $data['MemberCode'];
		$datapost['t_idcardnumber'] = $data['IdCardNumber'];
		$datapost['t_name'] = $data['Name'];
		$datapost['t_full_name'] = $data['Name'];
		$datapost['t_cityofbirth'] = $data['CityOfBirth'];
		$datapost['t_birth_date'] = $data['DateOfBirth'];
		$datapost['t_address'] = $data['Address'];
		$datapost['t_rt'] = $data['RT'];
		$datapost['t_rw'] = $data['RW'];
		$datapost['t_village'] = $data['Village'];
		$datapost['t_district'] = $data['District'];
		$datapost['t_city'] = $data['City'];
		$datapost['t_provinces'] = $data['Provinces'];
		$datapost['t_poscode'] = $data['PosCode'];
		$datapost['t_phone'] = $data['Phone'];
		$datapost['t_handphone'] = $data['Handpone'];
		$datapost['t_email'] = $data['Email'];
		$datapost['t_gender'] = $data['Sex'];
		$datapost['t_married'] = $data['Married'];
		$datapost['t_modifby'] = $data['ModifiedBy'];
		$datapost['t_validuntil'] = $data['ValidUntil'];
		$datapost['t_barcode'] = $data['Barcode'];
		$datapost['t_is_merchant_partner'] = $data['isMerchantPartner'];
		$datapost['t_merchant_id'] = $data['MerchantPartnerCode'];
		$datapost['t_merchant_code'] = $data['MemberCodeMerchantPartner'];
		
		// $api_url = 'http://crm.elcorps.com:9081/register/create_member_crm';
		$api_url = 'http://localhost:9081/register/create_member_crm';
		$username	= 'm-app_v.001';
		$password	= '16f87a18bcfc613a2ce52bc78b8b7929';
		// print_r($datapost);die;		
		$data_string = ($datapost); 
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL, $api_url);
		curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");  
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_POSTFIELDS, $data_string);
		curl_setopt($ch, CURLOPT_USERPWD, $username.':'.$password);
		$response = curl_exec($ch);

		$result = array();
		$result = json_decode($response, true);
		$result_code	 = $result['statusCode'];
		$result_msg	 = $result['message'];
		if($result_code == 0)
		{
			$this->error($result_msg);
		}else{
			$this->result['id'] = encode($result['data_save']['MemberCode']);
			$this->success('Save Data Success');
		}
	}
	
	function upload_image($membercode)
	{
		// print_r($_POST);
		// print_r($_FILES);
		// echo $member_code;
		// print_r($_FILES);
		// die;
		// print_r($_FILES);
		$member_code	= decode($membercode);
		$files			= $_FILES;
		$id_user = $member_code; 
		$files = $_FILES; 
		$file_extension = '';
		$path = '';
		$resize_img = '';
		$inputimg = $files['t_img_file'];
		$filesize = $files['t_img_file']['size'];
		$name = $inputimg['name'];
		$data = array();
		$event_data = array();	
		if($name)
		{
			$name = strtolower($name);
			$tmp = explode(".", $name);
			$file_ext = end($tmp);
		// die('this line is swowing');
			$guid = getGUID();
			$uploadConfig = array();
			// $config['upload_path'] = './../file_storage/image/';
			// $config['upload_path'] = './files/';

			$uploadConfig['upload_path'] = '../file_storage/image/';
			
			// $config['upload_path'] = './files/';
			$target_folder = $uploadConfig['upload_path'];
			$uploadConfig['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size']     = '100';
			// $config['max_width'] 	= '1024';
			// $config['max_height'] 	= '768';
			$uploadConfig['overwrite'] = TRUE;
			// $config['file_name'] 	= $this->input->post('testnama').'.'.$file_ext;
			$uploadConfig['file_name'] 	= $guid;
			
			$this->load->library('upload', $uploadConfig);
			$this->upload->initialize($uploadConfig);
			$sizes = array('100','200','500');
			if(!$this->upload->do_upload('t_img_file')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die;
			} else {
				$data = array('upload_data' => $this->upload->data());
				$this->load->library('image_lib');
				// print_r($data);
				foreach($sizes as $size)
				{
					$config = array();
					$config['image_library'] = 'gd2';
					$path = $data['upload_data']['full_path'];
					$config['source_image'] =  $path;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = $size;
					$config['height']       = $size;
					// $config['new_image']= './files/'.$this->input->post('testnama').'_new.'.$file_ext;
					// $config['new_image']= $target_folder.'thumbnail_100x100/'.$guid;
					$config['new_image']= $uploadConfig['upload_path'].'thumbnail_'.$size.'x'.$size.'';
					$resize_img = $config['new_image'];
					$this->image_lib->clear();
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
						
					$usefor = 3;
					if($size=='100')
					{
						$usefor	= 1;						
					}else if($size=='200')
					{
						$usefor	= 2;	
					}
					$file['UseFor']			= $usefor;
					$file['UsedFor']		= $usefor;
					$file['IdFileUpload'] 	= 0;
					$file['FileServerName'] = $guid;
					$file['FileType'] 		= $file_ext;
					$file['FilePath']		= $target_folder;
					$file['FileExt'] 		= $file_ext;
					$file['FileSize'] 		= $filesize;
					$file['IsImage'] 		= 1;
					$file['ImageWidth'] 	= $size;
					$file['ImageHeight'] 	= $size;
					$file['ImageType'] 		= '';
					$file['ImageSizeStr'] 	= '';
					$file['FileName'] 	    = $name;
					$file['UploadBy'] 	    = $id_user;
					// print_r($file);
					$save_file_upload = $this->file_upload_model->saveTo($file);
					// $save_file_upload		= $this->db->insert('public."fileUpload"',$file);
					// echo $this->db->last_query();
				}
					// echo "die no error";die;
				// delete_files($path);
				// unlink($path); 
			}
			$data['fidFileUpload'] = $id_user.'_new_thumb.'.$file_ext;
			$upload_image = $target_folder.$name.'.'.$file_ext;
			
			$this->file_upload_model->setProfile($guid,$id_user);	
			// INSERT OTP KE TABEL ACTIVITY LOG
			$data_log['MemberCode']	= $id_user;		
			$data_log['TabelName'] 	= 'fileUpload';
			$data_log['LogType'] 	= 'update photo profile';
			$data_log['Value'] 	    = $file['FileName'];
			
			$save = $this->activity_log_model->saveTo($data_log);			
			// $this->member_model->save($data);
			// $this->member_model->update($data);
			// $save = $this->member_model->saveTo($data);
			// redirect('/profile');
			echo "Profile picture updated";
		}
		
	}
	
	public function get_provinsi()
	{
		$default = decode($this->input->post('t_default'));
		$list = $this->provinsi_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Propinsi-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['idPropinsi']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['idPropinsi'].'">'.$row['NamaPropinsi'].'</option>';
		}
		echo $option;
	}
	
	public function get_districts($province_id)
	{
		$default = decode($this->input->post('t_default'));
		$where['fidPropinsi'] = $province_id;
		$this->kabupaten_model->set_where($where);
		$list = $this->kabupaten_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Kabupaten-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['idKabupaten']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['idKabupaten'].'">'.$row['NamaKabupaten'].'</option>';
		}
		echo $option;
	}
	
	public function get_regencies($district_id)
	{
		$default = decode($this->input->post('t_default'));
		$where['fidKabupaten'] = $district_id;
		$this->kecamatan_model->set_where($where);
		$list = $this->kecamatan_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Kecamatan-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['idKecamatan']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['idKecamatan'].'">'.$row['NamaKecamatan'].'</option>';
		}
		echo $option;
	}
	
	public function get_villages($regencies_id)
	{
		$default = decode($this->input->post('t_default'));
		$where['fidKecamatan'] = $regencies_id;
		$this->kelurahan_model->set_where($where);
		$list = $this->kelurahan_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Kelurahan-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['idKelurahan']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['idKelurahan'].'">'.$row['NamaKelurahan'].'</option>';
		}
		echo $option;
	}
}