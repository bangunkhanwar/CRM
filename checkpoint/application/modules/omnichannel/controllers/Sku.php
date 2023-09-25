<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sku extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('category_model');

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
		$this->bc->add('Master Sku', base_url('omnichannel/sku'));
		$this->bc->set_title('Data SKU');
		// $this->trans_status_omni_model->set_order(array('TransStatus'=>'ASC'));
		// $trx_status = $this->trans_status_omni_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'omnichannel/master/sku/main'
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$brand = $this->input->post('t_brand');
		// binding data
		$this->category_model->set_limit($limit);
		$this->category_model->set_offset($limit * ($pg - 1));
		$this->category_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();		
		if($brand == 'ALL'){
		}else{
			$where['fidBrand'] = $brand;
		}
		
		$where["(UPPER(\"Description\") LIKE '%$search%')"] = NULL;
		
		$this->category_model->set_where($where);
		$key = array();
		$key['Description']	= $search;
		$list = $this->category_model->get_list();
		// echo $this->db->last_query();
		// die;
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->category_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/master/sku/list'
			,'title' 			=> 'List SKU'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function add_category()
	{
	}

	function edit_category()
	{
		$storecode  	= $this->input->post('t_storecode');
		$province		= $this->input->post('t_province');
		$city			= $this->input->post('t_city');
		$subdistrict	= $this->input->post('t_subdistrict');
		$address 		= $this->input->post('t_address');			
// echo $province;
// die;
		$data					= array();
		$data['StoreCode']		= $storecode;
		$data['ProvinceId']		= $province;
		$data['CityId']			= $city;
		$data['SubDistrictId']	= $subdistrict;
		$data['SubDistrictId']	= $subdistrict;
		
		$data_store = array();
		$data_store['StoreCode']	= $storecode;
		$data_store['Address']	    = $address;

		if($province == 0){
			$this->error("Province is required");
			return;
		}
		if($city == 0){
			$this->error("District / City is required");
			return;
		}
		if($subdistrict == 0){
			$this->error("Sub district is required");
			return;
		}
		$save = $this->store_address_model->save($data);
		$save = $this->store_model->save($data_store);
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else
		{
			$this->success('Store Updated');
		}
	}
	
	function loadUpdate($id)
	{
		$where['idFeaturedCategory'] = $id;
		$list = $this->category_model->get($where);
		$data = array(
			'list' 		=> $list
			,'name' 		=> $this->session->userdata('FullName')
			,'content' 		=> 'omnichannel/master/category/update'
			,'title' 		=> 'Store'
		);
		$this->load->view($data['content'],$data);
		
	}

	
}