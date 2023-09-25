<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_report extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('customer_order_model');
		$this->load->model('master/trans_status_omni_model');
		
		$this->load->model('stock_current_model');



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
		$this->bc->add('Product Report', base_url('omnichannel/product_report'));
		$this->bc->set_title('Product Report');
		// $this->trans_status_omni_model->set_order(array('TransStatus'=>'ASC'));
		// $trx_status = $this->trans_status_omni_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'product_report/main'
		 );
		 $this->load->view('tpl',$data);
	}	
}