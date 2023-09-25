<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller {

	function __construct()
	{
		$this->secure = TRUE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
	}
	
	public function index()
	{
		echo "Member. you successfully authorized"; 
	}
	
	public function get()
	{
		$membercode = $this->input->post('membercode');
		
		$where = array();
		$where['MemberCode'] = $membercode;
		$get_member = $this->member_model->get($where);
		$date_request = date('Ymd H:i:s');
		$result = array();
		$status_get = '';
		if($get_member['MemberCode']!='')
		{
			$status_get = 'SUCCESS';
		}else
		{
			$status_get = 'INVALID USER';
		}
		unset($get_member['Password']);
		unset($get_member['fIdFileUpload']);
		unset($get_member['OTP']);
		unset($get_member['Umur']);
		$result['status'] 		= $status_get;
		$result['date-request']	= $date_request;
		$result['data']			= $get_member;
		header('Content-type: application/json');
		echo die(json_encode($result));
	}
}