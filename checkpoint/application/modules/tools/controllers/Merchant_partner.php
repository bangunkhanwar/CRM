<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchant_partner extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(25);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('merchant_partner_model');
		$this->load->model('master/member_model');
	}
	
	public function index()
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('Merchant Partner', base_url('merchant_partner'));
		$this->bc->set_title('Merchant Partner');
		
		 $data = array(
			'content' => 'merchant_partner/main'
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
		$this->merchant_partner_model->set_limit($limit);
		$this->merchant_partner_model->set_offset($limit * ($pg - 1));
		$this->merchant_partner_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where["(UPPER(\"MerchantPartnerCode\") LIKE '%$search%'
					OR UPPER(\"Name\") LIKE '%$search%'
					OR UPPER(\"Description\") LIKE '%$search%'
					OR UPPER(\"Address\") LIKE '%$search%'
				)"] = NULL;
		if($active_sts==0)
		{
			$where['isActive'] = 0;
		}else if($active_sts==1){
			$where['isActive'] = 1;
		}
		$this->merchant_partner_model->set_where($where);
		$key = array();
		$key['MerchantPartnerCode']	= $search;
		$key['Name']	= $search;
		$key['Description']	= $search;
		$key['Address']	= $search;
		$list = $this->merchant_partner_model->get_list();
		/*
		*/
		// echo $this->db->last_query();
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->merchant_partner_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'tools/merchant_partner/list'
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
		$this->bc->add('merchant partner', base_url('tools/merchant_partner'));
		$this->bc->add('merchant', base_url());
		$this->bc->set_title('merchant partner');
		
		$userid = decode($id);
		$str_access = array();
		$mbr_category = array();
		$mrt_partner = array();
		$where_partner = array();
		// print_r($str_access);
		$trx = $this->merchant_partner_model->get($userid);
		$this->merchant_partner_model->set_order(array('MerchantPartnerCode'=>'ASC'));
		$mrt_partner = $this->merchant_partner_model->get_list();
		if($trx['MerchantPartnerCode'])
		{
			$action = array('code'=>1,'description'=>'Modify Data');
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}
		$data = array(
			'content' 			=> 'merchant_partner/input'
			,'trx'				=> $trx
			,'action'			=> $action
			,'str_access'		=> $str_access
			,'mbr_category'		=> $mbr_category
			,'mrt_partner'		=> $mrt_partner
		);
		 $this->load->view('tpl',$data);
	}
	
	function get_php_func()
	{
		$script = $this->input->post('t_script');
        echo $script;
	}
	
	function save_data()
	{
		// $this->error( json_encode(($_POST)));
		$this->db->trans_start();
		
		$transnum						= decode($this->input->post('t_transnum'));
		$data['MerchantPartnerCode']	= $this->input->post('t_MerchantPartnerCode')?:$this->merchant_partner_model->get_last_transnum('MP');
		
		$action = $this->input->post('t_action');
		
		$data['Description'] 	= $this->input->post('t_description');
		$data['Name'] 			= $this->input->post('t_name');
		$data['Address'] 		= $this->input->post('t_address');
		$data['ExternalCode'] 	= $this->input->post('t_externalcode');
		$data['ModifiedBy'] 	= $this->session->userdata('LoginName');
		$data['ModifiedDate'] 	= date('Ymd H:i:s');
		$data['LastUpdate'] 	= date('Ymd H:i:s');
		$data['isActive']		= $this->input->post('isActive');
		
		// $check_data = $this->merchant_partner_model->get(array('MerchantPartnerCode'=>$data['MerchantPartnerCode']));
		if($action==0)
		{
			$check_exist = $this->merchant_partner_model->get(array('MerchantPartnerCode'=>$data['MerchantPartnerCode']));
			if($check_exist['MerchantPartnerCode'])
			{
				$this->result['action'] = "<script>$('#MerchantPartnerCode').focus();";
				$this->result['action'] .= "$('#MerchantPartnerCode').select();</script>";
				$this->error('CODE Already Used');
			}
			$data['TimeCreate'] 	= date('Ymd');
			$data['CreatedDate'] 	= date('Ymd H:i:s');
			$data['CreatedBy'] 		= $this->session->userdata('LoginName');
		}
		// $this->error( json_encode(($data)));
		$save = $this->merchant_partner_model->save($data);
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['id'] = encode($data['MerchantPartnerCode']);
			$this->success('Save Data Success');
		}
	}
	
	function delete($code=0){
		$code = decode($code);
		$this->db->trans_start();
		
		$this->member_model->set_where(array('MerchantPartnerCode'=>$code));
		$get_used_code = $this->member_model->get_list();
		
		if($get_used_code->num_rows>0)
		{
			$this->error('Failed, Kode Merchant sudah dipakai ('.$get_used_code->num_rows.') Member');
		}
		
		$this->merchant_partner_model->delete(array('MerchantPartnerCode'=>$code));
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
	
}