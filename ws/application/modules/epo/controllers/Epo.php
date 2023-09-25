<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Epo extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('epo_model');
		$this->load->model('epo_detail_model');
	}
	
	public function index()
	{
		echo "epo";
	}
	
	function download_epo()
	{
		$transnum = $this->input->post('transnum');
		$storecode = $this->input->post('storecode');
		if(!$transnum)
		{
			echo '#FAILED params 1 is empty';
			die;
		}
		if(!$storecode)
		{
			echo '#FAILED params 2 is empty';
			die;
		}
		$where = array();
		$where['TransNum'] = $transnum;
		$where['StoreCode'] = $storecode;
		$this->epo_model->set_where($where);
		$data = $this->epo_model->get_list();
		
		$dataType = gettype($data);
		
		if ($dataType == 'object') 
		{
			// object, OK
			$data_xml = 'as';
			$data_xml = $this->gen_xml($data,$this->epo_model);
			echo 'SUCCES#'.$data_xml;
		} 
		else
		{
			// no found
			echo 'GAGAL!#';
		}
	}
	
	function download_epo_detail()
	{
		$transnum = $this->input->post('transnum');
		$storecode = $this->input->post('storecode');
		if(!$transnum)
		{
			echo '#FAILED params 1 is empty';
			die;
		}
		if(!$storecode)
		{
			echo '#FAILED params 2 is empty';
			die;
		}
		$where = array();
		$where['TransNum'] = $transnum;
		$where['StoreCode'] = $storecode;
		$this->epo_detail_model->set_where($where);
		$data = $this->epo_detail_model->get_list();
		
		$dataType = gettype($data);
		
		if ($dataType == 'object') 
		{
			// object, OK
			$data_xml = 'as';
			$data_xml = $this->gen_xml($data,$this->epo_detail_model);
			echo 'SUCCES#'.$data_xml;
		} 
		else
		{
			// no found
			echo 'GAGAL!#';
		}
	}
}