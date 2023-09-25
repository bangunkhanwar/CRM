<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Download extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('mobile_version_model');
	}
	
	public function index()
	{
		echo "gege";
	}
	public function getVersion()
	{
		$where['isActive'] = '1';
		// $this->mobile_version_model->set_where($where);
		
		$list = $this->mobile_version_model->get($where);
	
		$list = $list->result_array();
		$this->result['Version'] 	= $list;
		$this->success('OK');
	}

}