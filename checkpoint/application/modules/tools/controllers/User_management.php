<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User_management extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(17);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
		$this->load->model('master/merchant_privilege_model');
		$this->load->model('master/merchant_partner_model');
		$this->load->model('master/member_model');
		$this->load->model('user_priv_model');
		$this->load->model('app_menus_model');
		$this->load->model('master/store_access_model');
		$this->load->model('master/customer_category_access_model');
	}
	
	public function index()
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('User Management', base_url('user_management'));
		$this->bc->set_title('User Management');
		
		 $data = array(
			'content' => 'user_management/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$active_sts	 = $this->input->post('t_sts_active');
		// binding data
		$this->user_model->set_limit($limit);
		$this->user_model->set_offset($limit * ($pg - 1));
		$this->user_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where["(UPPER(\"LoginName\") LIKE '%$search%'
					OR UPPER(\"FullName\") LIKE '%$search%'
					OR UPPER(\"Email\") LIKE '%$search%'
					OR UPPER(\"PhoneNumber\") LIKE '%$search%'
					OR UPPER(\"Address\") LIKE '%$search%'
				)"] = NULL;
		if($active_sts==0)
		{
			$where['isActive'] = 0;
		}else if($active_sts==1){
			$where['isActive'] = 1;
		}
		$this->user_model->set_where($where);
		$key = array();
		$key['LoginName']	= $search;
		$key['FullName']	= $search;
		$key['Email']		= $search;
		$key['PhoneNumber']	= $search;
		$key['Address']		= $search;
		$list = $this->user_model->get_list();
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->user_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'tools/user_management/list'
			,'title' 			=> 'List Operator'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function input($id='')
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('User Management', base_url('tools/user_management'));
		$this->bc->add('User', base_url());
		$this->bc->set_title('User Management');
		
		$userid = decode($id);
		$str_access = array();
		$mbr_category = array();
		$mrt_partner = array();
		$where_partner = array();
		// print_r($str_access);
		$user_data = $this->user_model->get($userid);
		$this->merchant_partner_model->set_order(array('MerchantPartnerCode'=>'ASC'));
		$this->merchant_partner_model->set_where(array('isActive'=>1));
		$mrt_partner = $this->merchant_partner_model->get_list();
		if($user_data['idMsOperator'])
		{
			$action = array('code'=>1,'description'=>'Modify Data');
			$this->store_access_model->set_where(array('fidMsOperator'=>$userid));
			$str_access = $this->store_access_model->get_list();
			$this->customer_category_access_model->set_where(array('fidMsOperator'=>$userid));
			$mbr_category = $this->customer_category_access_model->get_list();
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}
		
		$custcat = $this->download_cust_cat_beon($this->session->userdata('idMsOperator'));
		// echo $this->db->last_query();
		$strlist = $this->download_store_beon($this->session->userdata('idMsOperator'));
		
		$data = array(
			'content' 			=> 'user_management/input'
			,'user_data'		=> $user_data
			,'action'			=> $action
			,'str_access'		=> $str_access
			,'custcat'			=> $custcat
			,'strlist'			=> $strlist
			,'mbr_category'		=> $mbr_category
			,'mrt_partner'		=> $mrt_partner
		);
		 $this->load->view('tpl',$data);
	}
	
	function download_cust_cat_beon($userid)
	{
		$arr_cust = array();
		$this->customer_category_access_model->set_where(array('fidMsOperator'=>$userid));
		$isSuperUser = $this->session->userdata('isSuperUser');
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
		if($isSuperUser)
		{
			return $cust_all;
		}else{
			return $filtered;
		}
	}
	 
	function download_store_beon($userid)
	{
		$this->store_access_model->set_where(array('fidMsOperator'=>$userid));
		$isSuperUser = $this->session->userdata('isSuperUser');
		// $this->store_access_model->set_order(array('StoreCode'=>'ASC'));
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
		if($isSuperUser)
		{
			return $str_all;
		}else{
			return $filtered;
		}
	}
	
	
	function get_sequence_operator()
	{
		$qry = $this->db->query('SELECT nextval(\'admpanel."msOperator_idMsOperator_seq"\'::regclass)');
		
		$row = $qry->row();
		
		$nextval = $row->nextval;
		return $nextval;
	}
	
	function save_user()
	{
		// $this->error( json_encode(($_POST)));
		$this->db->trans_start();
		
		$data['idMsOperator']	= decode($this->input->post('t_oprcode'))?:$this->get_sequence_operator();
		$password = '';
		
		if($this->input->post('t_password'))
		{
			$password = $this->input->post('t_password');
			$nChar = strlen($password)+1;
			$cPassGen = $password;
			$x = 1; 
			while($x <= $nChar) 
			{
				$cPassGen = md5($cPassGen);
				$x++;
			} 
			$data['LoginPass']	= $cPassGen;
		}
		
		$action = $this->input->post('t_action');
		
		$data['LoginName'] = $this->input->post('t_username');
		$data['Address'] = $this->input->post('t_address');
		if($this->input->post('t_birthdate'))
		{
			$data['BirthDate'] = getSQLDate($this->input->post('t_birthdate'));
		}
		$data['Email'] = $this->input->post('t_email');
		$data['ExpiryDate'] = getSQLDate($this->input->post('t_expiredate'));
		$data['FullName'] = $this->input->post('t_fullname');
		$data['PhoneNumber'] = $this->input->post('t_phone');
		$data['fidDashboard']	= $this->input->post('t_priv_default')?:1;
		$data['isActive']	= $this->input->post('isActive');
		$data['isSuperUser']	= $this->input->post('isSuperUser');
		$data['Nik']	= $this->input->post('t_nik');
		$select_menu 	= $this->input->post('t_priv_menu');
		
		if($action==0)
		{
			if(!$this->input->post('t_password'))
			{
				$this->error('Password is empty');
			}
			$check_user = $this->user_model->get(array('LoginName'=>$data['LoginName']));
			if($check_user['idMsOperator'])
			{
				$this->error('Username Already Used');
			}
		}
		$save = $this->user_model->save($data);
		
		if($save)
		{
			if($data['idMsOperator']){
				$this->user_priv_model->delete(array('fidMsOperator'=>$data['idMsOperator']));
			}
			if ($select_menu != "") 
			{
				$select_menu = array_unique($select_menu);
				foreach ($select_menu as $key => $value)
				{
					$data_menu[] = array('fidMsOperator' 	=> $data['idMsOperator']
										,'fidAppMenu' 		=> $select_menu[$key]
									);
				}
				$this->user_priv_model->addSelect($data_menu);
			}
		}
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['id'] = encode($data['idMsOperator']);
			$this->success('Save Data Success');
		}
	}
	
	function get_str_access()
	{
		$id_operator = $this->input->post('t_id_opr');
		$where['fidMsOperator']	=	decode($id_operator);
		$this->store_access_model->set_where($where);
		
		$store_accces_list = $this->store_access_model->get_list();
		// print_r($store_accces_list);
		$data = array(
				'content' 		=> 	'user_management/list_str_access'
				,'store_accces_list' => $store_accces_list
				,'title' 		=> 	'Store Access'
		);
		$this->load->view($data['content'],$data);
	}
	
	function get_cat_access()
	{
		$id_operator = $this->input->post('t_id_opr');
		$where['fidMsOperator']	=	decode($id_operator);
		$this->customer_category_access_model->set_where($where);
		$cat_access_list = $this->customer_category_access_model->get_list();
		// print_r($cat_access_list);
		$data = array(
				'content' 		=> 	'user_management/list_cat_access'
				,'cat_access_list' => $cat_access_list
				,'title' 		=> 	'Category Access'
		);
		$this->load->view($data['content'],$data);
		
	}
	
	function get_mrt_partner()
	{
		$id_operator = $this->input->post('t_id_opr');
		$where = array();
		$where['fidMsOperator']	=	decode($id_operator);
		// $where['isActive']	=	1;
		$this->merchant_privilege_model->set_where($where);
		$mrt_partner = $this->merchant_privilege_model->get_list();
		// print_r($cat_access_list);
		// echo $this->db->last_query();
		
		$data = array(
				'content' 		=> 'user_management/list_mrt_access'
				,'mrt_partner' => $mrt_partner
				,'title' 		=> 'Merchant Access List'
		);
		$this->load->view($data['content'],$data);
		
	}
	
	function delete($code=0){
		$code = decode($code);
		$this->db->trans_start();
		$this->user_model->delete(array('idMsOperator'=>$code));
		$this->user_priv_model->delete(array('fidMsOperator'=>$code));
		$this->db->trans_complete();
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$this->error('Failed');
		}else{
			$this->db->trans_commit();
			$this->success('Data has been Deleted');
		}
	}
	
	function add_store_access()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['StoreCode']		=	$this->input->post('t_storecode');
		
		$this->store_access_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'StoreCode'=>$data['StoreCode'])); 
		$save  = $this->store_access_model->save($data);
		
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->success('data has been saved');
		}
		
	}
	
	function add_category_access()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['CatCode']		=	$this->input->post('t_catcode');
		
		$this->customer_category_access_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'CatCode'=>$data['CatCode'])); 
		$save = $this->customer_category_access_model->save($data);
		
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->success('data has been saved');
		}
		
	}
	
	function add_merchant_partner()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['MerchantPartnerCode']		=	$this->input->post('t_mrt_partner_code');
		
		$this->merchant_privilege_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'MerchantPartnerCode'=>$data['MerchantPartnerCode'])); 
		$save = $this->merchant_privilege_model->save($data);
		
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->success('data has been saved');
		}
		
	}
	
	function remove_store_access()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['StoreCode']		=	$this->input->post('t_storecode');
		
		$this->db->trans_start();
		$this->store_access_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'StoreCode'=>$data['StoreCode'])); 
		
		$this->db->trans_complete();
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$this->error('Failed');
		}else{
			$this->db->trans_commit();
			$this->success('Data has been Deleted');
		}
		
	}
	
	function remove_mrt_partner_priv()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['MerchantPartnerCode']		=	$this->input->post('t_mrt_partner_code');
		
		$this->db->trans_start();
		$this->merchant_privilege_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'MerchantPartnerCode'=>$data['MerchantPartnerCode'])); 
		$this->db->trans_complete();
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$this->error('Failed');
		}else{
			$this->db->trans_commit();
			$this->success('Data has been Deleted');
		}
		
		
	}
	
	function remove_category_access()
	{
		$data['fidMsOperator']	=	decode($this->input->post('t_operator'));
		$data['CatCode']		=	$this->input->post('t_catcode');
		
		$this->db->trans_start();
		$this->customer_category_access_model->delete(array('fidMsOperator'=>$data['fidMsOperator'],'CatCode'=>$data['CatCode'])); 
		$this->db->trans_complete();
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$this->error('Failed');
		}else{
			$this->db->trans_commit();
			$this->success('Data has been Deleted');
		}
		
		
	}
	
	function download_from_hrm()
	{
		$this->load->model('master/karyawan_hrm_model');
		
		$nik = $this->input->post('t_search_hrm');
		
		if(!$nik)
		{
			$this->error('Input is empty..!');
		}
		
		$where = array();
		$where['kode'] = $nik;
		
		$karyawan = $this->karyawan_hrm_model->get($where);
		
		if(!$karyawan['id_karyawan'])
		{
			$this->error('Employee not found..!');
		}
		
		echo (json_encode($karyawan));
			// $this->error('Feature is incomplete..');
	}
	
}