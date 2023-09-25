<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Inventory extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('stock_current_model');
		$this->load->model('product_store_model');
		$this->load->model('store_model');
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
		$this->bc->add('Inventory', base_url('omnichannel/inventory'));
		$this->bc->set_title('Inventory Stock');
		$this->store_model->set_order(array('StoreCode'=>'ASC'));
		$storelist = $this->store_model->get_list();

		 $data = array(
		 'content' => 'inventory/main'
		 ,'store_list' => $storelist

		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$status_trx_key = $this->input->post('t_aktif');
		$storecode = $this->input->post('t_storecode');
		$brand = $this->input->post('t_brand');

		// echo $status_trx_key;
		// die;
		// binding data
		$this->stock_current_model->set_limit($limit);
		$this->stock_current_model->set_offset($limit * ($pg - 1));
		$this->stock_current_model->set_order(array($order_by_field=>$order_by_key));
		$offset = $limit * ($pg - 1);
		// filtering data
		$where = array();

		// if($storecode == 'ALL'){
			// all status
		// }else{
			// $where['tbl."StoreCode" = \''.$storecode.'\''] = null;
		// }
		
		// if($status_trx_key == 'ALL'){
			//all status
		// }else{
			// $where['mps."isOmni" = \''.$status_trx_key.'\''] = null;
		// }
		
		
		// $where["( UPPER(\"tbl\".\"SKU\") LIKE '%$search%'
					// OR UPPER(\"tbl\".\"Description\") LIKE '%$search%'
				// )"] = NULL;
		// $where['tbl."Quantity" > 0'] = null;
		// $where['"tbl"."TransDate" = (SELECT MAX("TransDate") from "omnichannel"."trStockCurrent")'] = null;


		// $this->stock_current_model->set_where($where);
		$key = array();
		$key['StoreCode']	= $search;
		$key['SKU']			= $search;
		$key['Description']	= $search;
		$list = $this->stock_current_model->get_list($storecode,$search,$offset,$limit,$status_trx_key,$brand);
		/*
		*/
		// echo $this->db->last_query();
		
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->stock_current_model->counts($storecode,$brand,$status_trx_key);
		$page['current'] 	= $pg;
		$page['load_func_name'] 	= 'loadListStock';
		$page['list'] 		= $this->gen_paging($page);
		//
		
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/inventory/list'
			,'title' 			=> 'List Stock Current'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function update_status_product()
	{
		$storeCode = $this->input->post('storecode');
		$sku = $this->input->post('sku');
		$isActive = $this->input->post('value');
		
		if(!$storeCode)
		{
			$this->error("Storecode not available on msProductStore");
			return;
		}
		$data = array();
		$data['StoreCode'] = $storeCode;
		$data['SKU'] = $sku;
		$data['isOmni'] = $isActive;
		$save = $this->product_store_model->save($data);
		if($save){
			$this->success('Product updated');
		}else{
			// $this->error('Product update failed');
			$error = $this->db->error();
			$this->error($error);
			
		}	
		
	}
}