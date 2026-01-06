<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Redeem extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(23);
		date_default_timezone_set('Asia/Jakarta');  
		$this->load->model('master/member_model');
        $this->load->model('member_points_currently_model');
        $this->load->model('point_gift_redeemption_model');
		$this->load->model('master/voucher_beon_model');
		$this->load->model('master/point_beon_model');
		$this->load->model('member_history_model');
		$this->load->model('points_model');
	}
	
	public function index()
	{
		$this->change();
	}
	
	function change($member_code='')
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Redeem', base_url('membership/redeem'));
		$this->bc->set_title('Redeem');

		$where_gift = array();
		$where_gift['isActive'] = 1;
		$this->point_gift_redeemption_model->set_where($where_gift);
		$gift = $this->point_gift_redeemption_model->get_list();
				
		 $data = array(
		 'content' => 'redeem/main'
		 ,'member_code' => $member_code
		 ,'title' => 'Redeem Points'
		 ,'gift' => $gift
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

	function redeem_point()
	{
		$membercode	= $this->input->post('member');
		$membername	= $this->input->post('name');
		$id	= $this->input->post('id');
		$qtyredeem	= $this->input->post('qty');
		$totalpoint	= $this->input->post('total');
		$tahun = date('Y');
		$bulan = date('m');

		$gift = $this->point_gift_redeemption_model->get(array("GiftId" => $id));
		$id_amount = $gift['fidAmount'];
		$id_urut_voucher = $gift['idRec'];
		

		$this->db->trans_start();
		
		// 0. generate nomor voucher online gift voucher dan insert to beon
		// $prev_voucher = '4'.date('y'). $id_amount;
		$prev_voucher = '4'.date('y'). $id_urut_voucher;
		$voucher_number= $this->voucher_beon_model->gen_voucher_number($prev_voucher);

		$data_voucher = array();
		$data_voucher['StoreCode'] = 'ZHO' ;
		$data_voucher['SKU'] = '0';
		$data_voucher['VoucherID'] = $voucher_number;
		$data_voucher['fidVoucherType'] = 4;
		$data_voucher['fidMotherBrand'] = 1;
		$data_voucher['fidVoucherStatus'] = 4;
		$data_voucher['fidAmount'] = $id_amount;
		$data_voucher['VoucherAmount'] = $gift['GiftAmount'];
		$data_voucher['Tahun'] = $tahun ;
		$data_voucher['CreateBy'] = 'SYSTEM';
		$data_voucher['Note'] = '' ;
		$data_voucher['LastUpdate'] =date('Ymd H:i:s');
		$data_voucher['Remark'] = 'PROGRAM PENUKARAN POINT';
		$data_voucher['Description'] = 'ONLINE GIFT VOUCHER';
		$data_voucher['ExpiryDate'] = date('Y-m-d', strtotime('+30 days') );
		$sv_voucher=$this->voucher_beon_model->save($data_voucher);

		// 1. insert member history
		$prev_ref = 'RF.'.date('y').date('m').date('d').'.';
		$ref_number= $this->member_history_model->gen_ref_number($prev_ref);

		$data_history = array();
		$data_history['IdRec']= $this->get_sequence_member_history();
		$data_history['MemberCode'] = $membercode ;
		$data_history['Name'] = $membername;
		$data_history['TransDate'] = date('Ymd');
		$data_history['RefNum'] = $ref_number;
		$data_history['Description'] = 'PENUKARAN POINT';
		$data_history['GiftFid'] = $gift['GiftId'];
		$data_history['GiftDescription'] = $gift['GiftDescription'];
		$data_history['GiftRefNum'] = $voucher_number;
		$data_history['LastUpdate'] =date('Ymd H:i:s');
		// $data_history['CreatedBy'] = $this->session->userdata('idMsOperator');
		$data_history['CreatedBy'] = $this->session->userdata('FullName');
		$data_history['JumlahPoint'] = $totalpoint;
		$data_history['ExpiryDate'] = date('Y-m-d', strtotime('+30 days') );
		$sv_voucher=$this->member_history_model->save($data_history);

		// -1. insert ke trpo beon
		// -1. insert ke trpodetail beon

		// 3. insert ke trpoint beon
		/* command karena koneksi berat
		$data_pointb = array();
		$data_pointb['TransNum'] =  $ref_number;
		$data_pointb['TransNumRef'] = $ref_number;
		$data_pointb['StoreCode'] = 'ZHO';
		$data_pointb['TransDate'] = date('Ymd');
		$data_pointb['CreateBy'] = $this->session->userdata('FullName');
		$data_pointb['CreateTime'] = date('Ymd H:i:s');
		$data_pointb['CustCode'] = $membercode;
		// $data_pointb['CustCatCode'] = '';
		$data_pointb['TransType'] = 3;
		$data_pointb['Description'] = 'BOOKING';
		$data_pointb['Debit'] = 0;
		$data_pointb['Credit'] = $totalpoint;
		$data_pointb['LastUpdate'] =date('Ymd H:i:s');
		$sv_voucher=$this->point_beon_model->save($data_pointb);
		*/

		// 4. insert ke points crm
		$data_pointc = array();
		$data_pointc['TransNumRef'] = $ref_number;
		$data_pointc['StoreCode'] = 'ZHO';
		$data_pointc['TransDate'] = date('Ymd');
		$data_pointc['CreateBy'] = $this->session->userdata('FullName');
		$data_pointc['CreateTime'] = date('Ymd H:i:s');
		$data_pointc['MemberCode'] = $membercode;
		// $data_pointc['CustCatCode'] = '';
		$data_pointc['TransType'] = 3;
		$data_pointc['Description'] = 'BOOKING';
		$data_pointc['Debit'] = 0;
		$data_pointc['Credit'] = $totalpoint;
		$data_pointc['IdRec']= $this->get_sequence_points();
		$data_pointc['LastUpdate'] =date('Ymd H:i:s');
		$sv_voucher=$this->points_model->save($data_pointc);

		// 5. select sp_InsertMemberPointsCurrently($membercode='',$tahun='',$bulan='')
		$this->points_model->posting($membercode,$tahun,$bulan);
		//save
			
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['member'] = $membercode;
			$this->result['refnum'] = $ref_number;
			$this->success('Success');
		}
	}

	function get_sequence_member_history()
	{
		$qry = $this->db->query('SELECT nextval(\'member."MemberHistory_IdRec_seq"\'::regclass)');
		
		$row = $qry->row();
		
		$nextval = $row->nextval;
		return $nextval;
	}

	function get_sequence_points()
	{
		$qry = $this->db->query('SELECT nextval(\'points."Points_IdRec_seq"\'::regclass)');
		
		$row = $qry->row();
		
		$nextval = $row->nextval;
		return $nextval;
	}

	function print_doc_pdf()
	{
		$id = $this->input->post('id');
		$member = $this->input->post('member');
		$status = $this->input->post('status');
		$history = $this->member_history_model->get(array('RefNum' => $id,'MemberCode' => $member));
		$pointdata = $this->member_points_currently_model->get(array('MemberCode' => $history['MemberCode']));

		$data = array(
			'content' 			=> 'redeem/print_redeem', 
			'history'			=> $history,
			'point'				=> $pointdata,
			'reprint'			=> $status
		);

		$this->load->view($data['content'],$data); 
	}

	function getHistory()
	{
		$membercode = $this->input->post('member');
		$where_history = array();
		$where_history['MemberCode'] = $membercode;
		$this->member_history_model->set_where($where_history);
		$this->member_history_model->set_order(array('LastUpdate'=>'Desc'));
		$history = $this->member_history_model->get_list();

		$data = array(
			 'content' 		=> 'redeem/history_list'
			,'history' 		=> $history
			,'member_code' 	=> $membercode
		);
		$this->load->view($data['content'],$data);
	}

}