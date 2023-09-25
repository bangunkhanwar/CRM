<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Upgrade extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(23);
		date_default_timezone_set('Asia/Jakarta');  
		$this->load->model('master/member_model');
		$this->load->model('master/member_category_model');
		$this->load->model('master/customer_card_model');
		$this->load->model('master/customer_card_status_model');
		$this->load->model('master/customer_card_history_model');
		$this->load->model('files/activity_log_model');
	}
	
	public function index()
	{
		$this->change();
	}
	
	function change($member_code='')
	{

		$this->bc->add('Membership', base_url());
		$this->bc->add('Upgrade', base_url('membership/card'));
		
		$this->bc->set_title('Member Card');
		
		$where['MemberCategory'] = '13'; 
		$this->member_category_model->set_where($where);
		$membercats = $this->member_category_model->get_list();

		 $data = array(
		 'content' => 'member_upgrade/main'
		 ,'member_code' => $member_code
		 ,'title' => 'Upgrade Member'
		 ,'membercats' => $membercats 
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
		
		$where_cat = array();
		$where_cat['MemberCategory'] = $memberdata['fidMemberCategory'];
		
		$this->member_category_model->set_where($where_cat);
		$membercat = $this->member_category_model->get($where_cat);
		
		
		// echo $search;
		// die;
		// print_r($memberdata);
		$response = array();
		
		if($memberdata['MemberCode']=='')
		{
			$this->error('Member Not Found');
		}
		$response['member'] = $memberdata;
		$response['membercat'] = $membercat;
		echo json_encode($response);
	}
	
	function update_member_card()
	{
		$membercode = $this->input->post('t_member_code');
		$barcode	= $this->input->post('t_barcode');
		$remark		= $this->input->post('t_remark');
		$category	= $this->input->post('t_member_category');
		$category_upgrade = $this->input->post('t_category_upgrade');
		// echo $category_upgrade;
		// die;
			
		$barcode	= str_replace('.', '', $barcode);
		
		$member_data = $this->member_model->get($membercode);
		
		$data_update['MemberCode']			=	$membercode;
		$data_update['Barcode']				=	$barcode;
		$data_update['fidMemberCategory']	=	$category_upgrade;
		
		$data_card			= array();
		$data_card['BarCode']				=	trim($barcode);
		$data_card['StoreCode']				=	$member_data['StoreCode'];
		$data_card['SKU']					=	'';
		$data_card['Description']			=	'Card Activated';
		$data_card['fidCardType']			=	$member_data['fidMemberCategory'];
		$data_card['fidCardMotherBrand']	=	1;
		$data_card['fidCardStatus']			=	3;
		$data_card['CreateBy']				=	'System';
		$data_card['CreateOn']				=	date('Ymd');
		$data_card['Note']					=	'Stock Awal';
		$data_card['Remark']				=	$remark;
		$data_card['LastUpdate']			=	date('Ymd H:i:s');
		$data_card['LastCheck']				=	date('Ymd');
		$data_card['CustCode']				=	$member_data['MemberCode'];
		$data_card['Name']					=	$member_data['Name'];
		$data_card['fidCardType']			=	$category_upgrade;
		
		$data_card_nonactive						= array();
		$data_card_nonactive['BarCode']				=	$member_data['Barcode'];
		$data_card_nonactive['StoreCode']			=	$member_data['StoreCode'];
		$data_card_nonactive['SKU']					=	'';
		$data_card_nonactive['Description']			=	'Card Non Activated';
		$data_card_nonactive['fidCardType']			=	$member_data['fidMemberCategory'];
		$data_card_nonactive['fidCardMotherBrand']	=	1;
		$data_card_nonactive['fidCardStatus']		=	5;
		$data_card_nonactive['CreateBy']			=	'System';
		$data_card_nonactive['CreateOn']			=	date('Ymd');
		$data_card_nonactive['Note']				=	'Ganti Kartu';
		$data_card_nonactive['Remark']				=	$remark;
		$data_card_nonactive['LastUpdate']			=	date('Ymd H:i:s');
		$data_card_nonactive['LastCheck']			=	date('Ymd');
		$data_card_nonactive['CustCode']			=	$member_data['MemberCode'];
		$data_card_nonactive['Name']				=	$member_data['Name'];
		$data_card_nonactive['fidCardType']			=	$category_upgrade;


		$data_card_history	= array();
		$data_card_history['BarCode']		=	$barcode;
		$data_card_history['StoreCode']		=	$member_data['StoreCode'];
		$data_card_history['MemberCode']	=	$membercode;
		$data_card_history['fidCardStatus']	=	3;
		$data_card_history['Note']			=	'';
		$data_card_history['Remark']		=	$remark;
		$data_card_history['CreateBy']		=	$this->session->userdata('LoginName');
		$data_card_history['CreateOn']		=	date('Ymd H:i:s');
		$data_card_history['LastUpdate']	=	date('Ymd H:i:s');
		$data_card_history['fidCardType']	=	$category_upgrade;

		
		// $save_card = $this->member_model->save($data_card_nonactive);
		$save_card = $this->customer_card_model->save($data_card_nonactive);
		$save_card = $this->customer_card_model->save($data_card);
		$save_card_history = $this->customer_card_history_model->saveTo($data_card_history);
		
		$save = $this->member_model->save($data_update);
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else
		{
			$data_log['MemberCode']			= $membercode;		
			$data_log['TabelName'] 			= 'member';
			$data_log['LogType'] 			= 'Change Card';
			$data_log['Value'] 	    		= $membercode;
			$data_log['fidActivityLogType']	= 6;
			$save = $this->activity_log_model->saveTo($data_log);
			$this->result['MemberCode'] 	= $membercode;
			$this->success('Card Updated');
		}
	}
}