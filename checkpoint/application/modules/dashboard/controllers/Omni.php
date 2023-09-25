<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Omni extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(5);
		$this->load->model('omni_model');
	}
	public function index()
	{
		$this->bc->add('Dashboard', base_url());
		$this->bc->add('Default', base_url('dashboard/member'));
		$this->bc->set_title('Dashboard Omni Channel');
		 // echo "v".phpinfo();
		 $top_last_registered = array();
		 
		 $data = array(
		 'content' => 'omni/main'
		 );
		 $this->load->view('tpl',$data);
	}

	function sales_curr_week(){
		$data = array(
			'content' => 'omni/sales_curr_week'
			);
			$this->load->view($data['content'],$data);
	}
}