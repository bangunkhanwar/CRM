<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	var	$modulname = 'main';
	var	$classname = 'Main';
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		 echo "#SUCCESS ws"; 
		 echo " ";
		 echo "CI v".CI_VERSION;
		 // echo "v".phpinfo();
	}
	
	public function write($input='')
	{
		$controller= $this->uri->segment(1); // controller
		$action = $this->uri->segment(2); // action
		$actiontr = $this->uri->segment(3); // action
		$actiontr = $this->uri->segment(4); // action
		$url = $controller . '/' . $action . '/' . $actiontr; 
		// echo $controller;
		// echo $action;
	}
	
	public function store_download($storecode = '')
	{
		$this->load->model('store_model');
		$where=array();
		$storecode = strtoupper($storecode);
		if ($storecode!='')
		{
			$where["StoreCode"] = $storecode;
		}
		$this->store_model->set_where($where);
		$data_list = $this->store_model->get_list();
		// echo($transnum);
		// echo $this->db->last_query();
		// exit;
		$data_xml = $this->gen_xml($data_list,$this->store_model);
		echo 'SUCCES#'.$data_xml;
		
	}
	
	public function store_upload()
	{
		$this->load->model('store_model');
		$data = $_POST;
		$data = $this->remove_empty_array($data);
		// not empty
		
		if (isset($_POST['StoreCode']))
		{
			$save = $this->store_model->save($data);
			if ($save)
			{	
				echo 'SUCCES#Upload data msStore. [StoreCode = '. $data['StoreCode'] . ']';
			}
			else
			{
				echo 'FAILED#'.$this->store_model->message;
			}
		} 
		else
		{
			// null
			echo 'FAILED#StoreCode is Null';
		}
	}
}