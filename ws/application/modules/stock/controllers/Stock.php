<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('stock_current_model');

	}
	
	public function index()
	{
		echo 'Stock';

	}
	
	public function get_list_stock()
	{
		$storecode  = $this->input->post('t_storecode');	
		$transdate  = $this->input->post('t_transdate');	
		
		if(!$storecode){
			echo 'FAILED#Store Code required';
			die;
		}
		
		$where = array();
		
		if($transdate)
			$where['TransDate'] = getSQLDate($transdate);
			
		$where['StoreCode']= $storecode;
		$this->stock_current_model->set_where($where);

		// $this->voucher_model->get($where);
		$stock_list = $this->stock_current_model->get_list();
		// echo $this->db->last_query();

		// die;
		
		$data_xml = '';
		$data_xml = $this->gen_xml($stock_list,$this->stock_current_model,'stock_current');
		echo 'SUCCES#'.$data_xml;
		
	}
	
}
