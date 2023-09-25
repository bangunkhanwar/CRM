<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Checkpoint extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(23);
		date_default_timezone_set('Asia/Jakarta');  
		$this->load->model('master/member_model');
        $this->load->model('member_points_currently_model');
	}
	
	public function index()
	{
		$this->change();
	}
	
	function change($member_code='')
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Checkpoint', base_url('membership/checkpoint'));
		$this->bc->set_title('Check Point');
		
		 $data = array(
		 'content' => 'checkpoint/main'
		 ,'member_code' => $member_code
		 ,'title' => 'Check Points'
		 );
		 $this->load->view('tpl',$data);
	}

    function lookup_member()
	{
		$search = $this->input->post('t_search_key');
		$where = array();
		$search	= strtoupper($search);
		$where["(
			UPPER(\"MemberCode\") LIKE '%$search%'
			OR UPPER(\"Handpone\") LIKE '%$search%'
			OR UPPER(\"Email\") LIKE '%$search%'
		)"] = null;
		
		$this->member_model->set_where($where);
		$memberdata = $this->member_model->get($where);
        $membercode = $memberdata['MemberCode'];
        $pointdata = $this->member_points_currently_model->get(array('MemberCode' => $membercode));
		// echo $search;
		// die;
		// print_r($memberdata);
		$response = array();
		
		if($memberdata['MemberCode']=='')
		{
			$this->error('Member Not Found');
		}
		$response['member'] = $memberdata;
        $response['points'] = $pointdata;
		echo json_encode($response);
	}
}