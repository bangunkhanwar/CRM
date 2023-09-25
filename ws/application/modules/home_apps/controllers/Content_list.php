<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Content_list extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('content_list_model');
	}
	
	public function index()
	{
		echo 'Content List';
	}
	public function download()
	{
		$type_content = $this->input->post('fidContentType');
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		$data = $_POST;
		// not null
		$where = array ();
		if($type_content)
		{
			$where ['fidContentType'] = $type_content ;
		}
		$where ['isActive'] 		= 1;
		$this->content_list_model->set_where($where);
		$order = array ();
		$order['Order']	= 'ASC';
		
		$this->content_list_model->set_order($order);
		$content_list = $this->content_list_model->get_list();
		
		$result['statusCode']	= 1;
		$result['message']	=  'Success..!';
		$result['content_list'] = $content_list->result_array();
		
		header('Content-type: application/json');
		echo die(json_encode($result));
		
	}
}
