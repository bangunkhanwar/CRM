<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Banner extends MY_Controller {
	function __construct()
	{
		parent::__construct();
		$this->load->model('banner_model');
	}
	
	public function index()
	{
		echo 'Banner';
	}
	public function download()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		$data = $_POST;
		$brand = isset($data['brand'])?$data['brand']:'';
		$fidContentType = isset($data['content_type'])?$data['content_type']:'';
		// not null
		$where = array ();
		$where ['isActiveBanner'] = 1 ;
		
		if($brand)
		{
			$where ['("fidBrand" = 99 OR "fidBrand" = '.$brand.')'] = null;
		}
		
		if($fidContentType)
		{
			$where['fidContentType'] = $fidContentType;
		}else{
			$where['fidContentType <> 3'] = null;
		}
		$order=array();
		$order['Order']='ASC';
		$this->banner_model->set_order($order);		
		
		$this->banner_model->set_where($where);
		$banner = $this->banner_model->get_list();
		// echo $this->db->last_query();
		
		$result['statusCode']	= 1;
		$result['message']	    =  'Success..!';
		$result['banner']       = $banner->result_array();
		  
		header('Content-type: application/json');
		echo die(json_encode($result));
		
	}
}
