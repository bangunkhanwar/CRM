<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

class Registration extends MY_Controller
{
    var $secure = false;
    function __construct()
    {
        parent::__construct();
        $this->load->model('master/merchant_partner_model');
        $this->load->model('master/member_model');
    }

    public function index()
    {
        $data = array(
            'content' => 'registration/main', 
            'title' => 'judulnya'
        );
        $this->load->view($data['content'], $data);
    }

    public function loadDetail($id='')
    {
        $operator_id	= 1;
		$where_mrt = array();
		$where_mrt['"MerchantPartnerCode" in (SELECT "MerchantPartnerCode" FROM admpanel."msMerchantPrivilege" WHERE "fidMsOperator" = '.($operator_id).')'] = null;
		$this->merchant_partner_model->set_where($where_mrt);
		$list_merchant = $this->merchant_partner_model->get_list();
		$userid = decode($id);
		// echo $userid;
		$datatrx = $this->member_model->get($userid);
		// print_r($datatrx);
		// die;
		if($datatrx['MemberCode'])
		{
			$action = array('code'=>1,'description'=>'Modify Data');
		}else
		{
			$action = array('code'=>0,'description'=>'New Data');
		}

        $custcat = '02';
		$strlist = 'ZHO';
				
		$data = array(
			'content' 			=> 'registration/input'
			,'datatrx'			=> $datatrx
			,'action'			=> $action
            ,'custcat'			=> $custcat
			,'strlist'			=> $strlist
			,'list_merchant'	=> $list_merchant
		);
		//  $this->load->view('tpl',$data);
         $this->load->view($data['content'], $data);
    }
}
