<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Traffic extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('customer_order_model');
		$this->load->model('customer_order_header_model');
		$this->load->model('customer_order_detail_model');
		$this->load->model('stock_current_model');
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
		 //get customer order summary
		// $wherefrom['tbl.fidAssignFrom '] = $employee['idEmployee'];
		// $this->customer_order_header_model->set_where($wherefrom);
		// $listsumfrom = $this->customer_order_header_model->get_summary();
		// $listsumfrom = $listsumfrom->row();
		
		$itung = $this->customer_order_model->count();

		$this->customer_order_model->set_where(array('tbl.TransStatus >= 0 AND tbl.TransStatus <=2' => null));
		$itung_order = $this->customer_order_model->count();

		$this->customer_order_model->set_where(array('tbl.TransStatus >= 3 AND tbl.TransStatus <=6' => null));
		$itung_paid = $this->customer_order_model->count();

		$this->customer_order_model->set_where(array('tbl.TransStatus >= 7' => null));
		$itung_deliver = $this->customer_order_model->count();

		$this->customer_order_model->set_where(array('tbl.TransStatus <= -1' => null));
		$itung_cancel = $this->customer_order_model->count();
		
		
		

		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Traffic', base_url('omnichannel/traffic'));
		$this->bc->set_title('Order Traffic');
		$this->trans_status_omni_model->set_order(array('tbl.TransStatus'=>'ASC'));
		$trx_status = $this->trans_status_omni_model->get_list();
		// echo $this->db->last_query();
		$data = array(
		'content' => 'traffic/main'
		,'trx_status' => $trx_status
		,'itung' => $itung
		,'itung_order' => $itung_order
		,'itung_paid' => $itung_paid
		,'itung_deliver' => $itung_deliver
		,'itung_cancel' => $itung_cancel
		);
		$this->load->view('tpl',$data);
	}	
	
	function page($pg, $status)
	{
		// echo $status;
		// die;
		// die;
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
		$where['tbl."TransStatus" >= 0 AND tbl.TransStatus <=2 '] = null;

		// if($status_trx_key == 'ALL'){
		//// all status
		// }else{
			if($status ==2 ){
			$where['tbl."TransStatus" = 0 AND tbl.TransStatus <= 2 '] = null;
			}
					// }
		// if ($status){
			// $where['TransStatus']=$status;
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
		$where = array();
		$where['tbl."TransStatus" = 3'] = null;
		$where['tbl."TransNum" ']  = $transnum;
		$where['tbl."StoreCode" '] = $storecode;
		$this->customer_order_detail_model->set_where($where);
				$this->customer_order_detail_model->set_order(array('tbl."LastUpdate"' => 'DESC'));

		$list = $this->customer_order_detail_model->get_list();
		
		// echo $this->db->last_query();
		// die;
				
		$wheres = array();
		$wheres['tbl."StoreCode" '] = $storecode;
		// $this->store_beon_model->set_where($where);
		$store = $this->store_beon_model->get($wheres);
		
		$page = array();
		$page['limit'] 		= 1000;
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
	
	function stockListPage($pg,$transnum,$storecode)
	{

		// print_r($this->input->post());
		// die;
		$current_time = '';
		// $sku_list= $this->input->post('data');	
		$wheres = array();
		$wheres['tbl."TransStatus" = 3'] = null;
		$wheres['tbl."TransNum" ']  = $transnum;
		$wheres['tbl."StoreCode" '] = $storecode;
		$this->customer_order_detail_model->set_where($wheres);
		$list_order = $this->customer_order_detail_model->get_list();
		
		// echo $this->db->last_query();
		
		
		$where = array();
		$sku = '';
		$storecode = '';
		
		foreach($list_order->result_array() as $key=>$value)
		{
			if($key!=0)
			$sku .= ',';
			// $sku .= 'and "tbl"."SKU" =';
			$sku .= quotedStr($value['SKU']);
		}
		$where['tbl."SKU" in ('.$sku.')']  = null;
		// $where['tbl."SKU"']  = $sku;
		// $this->stock_current_model->group_by('nom_dept'); 
		$this->stock_current_model->set_order(array('tbl."StoreCode"' => 'ASC'));
		// $this->stock_current_model->set_where($where);
		$list = $this->stock_current_model->get_list($sku);
		
		
		// $this->stock_current_model->set_where($where);
		$listsku = $this->stock_current_model->get_list_detail($sku);
		
		// echo $this->db->last_query();
		// die;
		
		$page = array();
		$page['limit'] 		= 100;
		$page['count_row'] 	= $this->stock_current_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrdersDetail';
		$page['list'] 		= $this->gen_paging($page);
		
		$data = array(
			'list' 	=> $list
			,'listsku' 	=> $listsku
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/traffic/list_another_stock'
			,'title' 			=> 'Another stock list'
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}

	function update_order($transnum,$storecode,$storecodeTo)
	{
		$data['TransNum'] = $transnum;
		$data['StoreCode'] = $storecode;
		$data['StoreCodeTo'] = $storecodeTo;
		$data['TransStatus'] = 3;
		
		$save = $this->customer_order_model->save($data);
		$save = $this->customer_order_header_model->save($data);
		$save = $this->customer_order_detail_model->save($data);
		
		if($save){
			$this->success('Save Data Success');			
		}else{
			$this->error($result_msg);
		}
	}
}