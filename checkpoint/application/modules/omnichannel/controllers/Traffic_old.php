<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traffic extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('customer_order_model');
		$this->load->model('customer_order_detail_model');
		$this->load->model('master/trans_status_omni_model');
		$this->load->model('master/store_beon_model');
		/*
		
			Provinsi = Provinces  	=> provinces
			Kabupaten = District	=> district
			Kecamatan = Village		=> village
			Kelurahan = City		=> city
		
		*/
	}
	
	public function index()
	{
		// echo "addaaa";
		// die;
		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Traffic', base_url('omnichannel/traffic'));
		$this->bc->set_title('Order Traffic');
		$this->trans_status_omni_model->set_order(array('TransStatus'=>'ASC'));
		$trx_status = $this->trans_status_omni_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'traffic/main'
		 ,'trx_status' => $trx_status
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		// $status_trx_key = $this->input->post('t_status_trx_key');
		$current_time = '';
		
		// binding data
		$this->customer_order_model->set_limit($limit);
		$this->customer_order_model->set_offset($limit * ($pg - 1));
		$this->customer_order_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where['tbl."TransStatus" = 3 '] = null;

		// if($status_trx_key == 'ALL'){
		//// all status
		// }else{
			// $where['tbl."TransStatus" = \''.$status_trx_key.'\''] = null;
		// }
		
		$where["(UPPER(\"TransNum\") LIKE '%$search%'
					OR UPPER(\"tbl\".\"StoreCode\") LIKE '%$search%'
				)"] = NULL;
		
		$this->customer_order_model->set_where($where);
		$key = array();
		$key['StoreCode']	= $search;
		$key['TransNum']	= $search;
		$list = $this->customer_order_model->get_list();
		// echo $this->db->last_query();
		// die;
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_order_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrders';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/traffic/list'
			,'title' 			=> 'Outstanding Order List '
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function detailPage($pg,$transnum,$storecode)
	{
		$current_time = '';
		$this->customer_order_detail_model->set_order(array('tbl."LastUpdate"' => 'DESC'));
		$where = array();
		$where['tbl."TransStatus" = 3'] = null;
		$where['tbl."TransNum" ']  = $transnum;
		$where['tbl."StoreCode" '] = $storecode;
		$this->customer_order_detail_model->set_where($where);
		$list = $this->customer_order_detail_model->get_list();
		// echo $this->db->last_query();
		// die;
				
		$wheres = array();
		$wheres['tbl."StoreCode" '] = $storecode;
		// $this->store_beon_model->set_where($where);
		$store = $this->store_beon_model->get($wheres);
		
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_order_detail_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrdersDetail';
		$page['list'] 		= $this->gen_paging($page);
		
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/traffic/detail'
			,'title' 			=> 'Outstanding Order Detail List '
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
			,'store' 	        => $store
		);
		$this->load->view($data['content'],$data);
	}
	
	function stockListPage($pg,$id_parent)
	{
		$current_time = '';
		$this->customer_order_detail_model->set_order(array('tbl."LastUpdate"' => 'DESC'));
		$where = array();
		$where['tbl."TransStatus" = 3'] = null;
		$where['tbl."TransNum" ']  = $transnum;
		$where['tbl."StoreCode" '] = $storecode;
		$this->customer_order_detail_model->set_where($where);
		$list = $this->customer_order_detail_model->get_list();
		// echo $this->db->last_query();
		// die;
		$wheres = array();
		$wheres['tbl."StoreCode" '] = $storecode;
		// $this->store_beon_model->set_where($where);
		$store = $this->store_beon_model->get($wheres);
		
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_order_detail_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrdersDetail';
		$page['list'] 		= $this->gen_paging($page);
		
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/traffic/list_another_stock'
			,'title' 			=> 'Another stock list'
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
			,'store' 	        => $store
		);
		$this->load->view($data['content'],$data);
	}
}