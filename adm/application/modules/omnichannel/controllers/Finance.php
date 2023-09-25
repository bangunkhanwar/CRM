<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Finance extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('customer_order_model');
		/*
		
			Provinsi = Provinces  	=> provinces
			Kabupaten = District	=> district
			Kecamatan = Village		=> village
			Kelurahan = City		=> city
		
		*/
	}
	
	public function index()
	{
		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Finance', base_url('omnichannel/finance'));
		$this->bc->set_title('Sales Store');
		
		 $data = array(
		 'content' => 'finance/main'
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$date_start = $this->input->post('t_date_start_filter');
		$date_end = $this->input->post('t_date_end_filter');
		
		// binding data
		$this->customer_order_model->set_limit($limit);
		$this->customer_order_model->set_offset($limit * ($pg - 1));
		$this->customer_order_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where["(UPPER(tbl.\"StoreCode\") LIKE '%$search%'
					OR UPPER(\"Description\") LIKE '%$search%'
				)"] = NULL;
		$where['(tbl.TransDate >='.quotedStr($date_start).' AND tbl.TransDate <='.quotedStr($date_end).')']= NULL;
		// $where['tbl.TransStatus >= 6']= NULL; command dlu
		
		$this->customer_order_model->set_where($where);
		$key = array();
		$key['StoreCode']	= $search;
		$key['Description']	= $search;
		$list = $this->customer_order_model->get_cust_order_sales();
		// echo $this->db->last_query();
		// die;
		
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_order_model->count_cust_order_sales();
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadListSalesStore';
		$page['list'] 		= $this->gen_paging($page);
		// echo $this->db->last_query();
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/finance/list'
			,'title' 			=> 'List Sales Store'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	} 

}