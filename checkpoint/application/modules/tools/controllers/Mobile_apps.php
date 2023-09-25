<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_apps extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(22);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('banner_model');
	}
	
	public function index()
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('User Management', base_url('sms'));
		$this->bc->set_title('User Management');
		
		 $data = array(
			'content' => 'user_management/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	public function banner()
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('Mobile Apps', base_url('tools/mobile_apps'));
		$this->bc->set_title('Banner And Promo');
		
		 $data = array(
			'content' => 'tools/mobile_apps/banner/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	function banner_list($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		// $order_by_field = $this->input->post('t_order_by_field');
		// $order_by_key = $this->input->post('t_order_by_key');
		$active_sts	 = $this->input->post('t_sts_active');
		// binding data
		$this->banner_model->set_limit($limit);
		$this->banner_model->set_offset($limit * ($pg - 1));
		// $this->user_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where["(UPPER(\"Title\") LIKE '%$search%'
					OR UPPER(\"ImagePath\") LIKE '%$search%'
					OR UPPER(\"Link\") LIKE '%$search%'
					OR UPPER(\"FileName\") LIKE '%$search%'
					OR UPPER(\"FileType\") LIKE '%$search%'
				)"] = NULL;
		if($active_sts==0)
		{
			$where['isActive'] = 0;
		}else if($active_sts==1){
			$where['isActive'] = 1;
		}
		$this->banner_model->set_where($where);
		$key = array();
		$key['Title']	= $search;
		$key['ImagePath']	= $search;
		$key['Link']		= $search;
		$key['FileName']	= $search;
		$key['FileType']		= $search;
		$list = $this->banner_model->get_list();
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->banner_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'tools/mobile_apps/banner/list'
			,'title' 			=> 'List Banner'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function banner_input($id='')
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('List Banner And Promo ', base_url('tools/mobile_apps/banner'));
		$this->bc->add('Banner', base_url());
		$this->bc->set_title('Banner And Promo ');
		
		$userid = decode($id); 
		$data = $this->banner_model->get($userid);
		if($data['idBanner'])
		{
			$action = array('code'=>1,'description'=>'Modify Data'); 
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}
		 
		$data = array(
			'content' 	=> 'tools/mobile_apps/banner/input'
			,'data'		=> $data
			,'action'	=> $action
		);
		 $this->load->view('tpl',$data);
	}
	
	function save_data()
	{
		// $this->error(json_encode($_POST));
		
		$this->db->trans_start();
		$action = $this->input->post('t_action');
		$data  = array();
		$id_banner = decode($this->input->post('t_bannercode'));
		if($id_banner)
		{
			$data['idBanner'] 	= $id_banner;
		}
		$data['Title']		= $this->input->post('t_title');
		$data['ImagePath']	= $this->input->post('t_image_path');
		$data['Link']		= $this->input->post('t_link');
		$data['LastUpdate']	= date('Ymd');
		$data['FileName']	= $this->input->post('t_file_name');
		$data['FileType']	= '';
		$data['isActive']	= $this->input->post('isActive');
		
		// $this->error(json_encode($data));
		
		if($action==0)
		{
			$id_banner = $this->banner_model->saveTo($data);
		}else{
			$this->banner_model->save($data);
		}
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['id'] = encode($id_banner);
			$this->success('Save Data Success');
		}
	}
}