<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Outbox extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(14);
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		$this->bc->add('SMS GATEWAY', base_url());
		$this->bc->add('Outbox', base_url('sms/outbox'));
		$this->bc->set_title('Outbox List');
		
		 $data = array( 
		 'content' => 'outbox/main'
		 );
		 $this->load->view('tpl',$data);
	}	
}