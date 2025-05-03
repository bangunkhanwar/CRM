<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_booked extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(23);
		date_default_timezone_set('Asia/Jakarta');  
		$this->load->model('master/member_model');
		$this->load->model('master/voucher_beon_model');
		$this->load->model('voucher_booked_model');
		$this->load->model('master/store_beon_model');
		$this->load->model('promo/promo_gift_voucher_model');
	}
	
	public function index()
	{
		$this->change();
	}
	
	function change()
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Voucher Booked', base_url('membership/voucher_booked'));
		$this->bc->set_title('Voucher Booked');

		 $data = array(
		 'content' => 'voucher_booked/main'
		 ,'title' => 'Voucher Booked'
		 );
		 $this->load->view('tpl',$data);
	}

	function getVoucherBooked()
	{
		$trxnum = $this->input->post('trxnum');

		$where = array();
		$where['TransNum'] = $trxnum;
		$this->voucher_booked_model->set_where($where);
		$vbooked = $this->voucher_booked_model->get_list();

		$data = array(
			'content' 	  => 'voucher_booked/list'
		   ,'listvbooked' => $vbooked
	   	);
	   	$this->load->view($data['content'],$data);

	}

	function print_doc_pdf()
	{
		$id = $this->input->post('id');
		$store = substr($id,0,4);

		$where = array();
		$where['TransNum'] = $id;
		$this->voucher_booked_model->set_where($where);
		$vbooked = $this->voucher_booked_model->get_list();
		$storedata = $this->store_beon_model->get(array('StoreCode' => $store)); 

		$data = array(
			'content' 			=> 'voucher_booked/print_vbooked', 
			'vbooked'			=> $vbooked,
			'storedata'			=> $storedata
		);

		$this->load->view($data['content'],$data); 
	}

	function checkVoucherBooked()
	{
		$id	= $this->input->post('id');
		$store = substr($id,0,4);
		$idlenght = strlen((string)$id);
		$idcusttype = $this->input->post('idcusttype');
		$promocode = $this->input->post('promocode');

		$storedata = $this->store_beon_model->get(array('StoreCode' => $store));    

		if ( ($storedata['StoreCode'] != $store) || ($idlenght != 14) )
		{
			$this->error('Nomor yang Anda masukkan tidak ditemukan');
			die;
		}

		$vbooked = $this->voucher_booked_model->get(array('TransNum' => $id));
		
		if ($vbooked['TransNum'] == $id){
        	//  ada 
			// print('ada');
		} else {
			// print('taada');
			$this->db->trans_start();

			if ($idcusttype == '03') 
			{
				// $wherevoucher = array();
				// $wherevoucher['fidVoucherStatus'] = 4;
				// $wherevoucher['Remark'] = 'GENVCRAGEN';
				// $wherevoucher['Note is null '] = null;
				// $this->voucher_beon_model->set_where($wherevoucher);
				// $this->voucher_beon_model->set_limit(10);
				// $vdata = $this->voucher_beon_model->get_list();
				// // echo $this->db->last_query(); exit;
				// foreach ($vdata->result_array() as $row) {

				// 	$data = array();
				// 	$data['TransNum']  = $id;
				// 	$data['VoucherId'] = $row['VoucherID'];
				// 	$data['VoucherAmount'] = $row['VoucherAmount'];
				// 	$data['CreatedBy'] = $this->session->userdata('FullName');
				// 	$data['CreatedDate'] = date('Ymd H:i:s');
				// 	$data['UniqueCode'] = $row['UniqueCode'];

				// 	$this->voucher_booked_model->save($data);
				// 	$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
				// }

				$vpromo = $this->promo_gift_voucher_model->get(array("PromoCode" => $promocode));
				$v100k = $vpromo['Voucher100K']?:0;
				$v50k = $vpromo['Voucher50K']?:0;
				$v25k = $vpromo['Voucher25K']?:0;
				$v200k = $vpromo['Voucher200K']?:0;
				$v500k = $vpromo['Voucher500K']?:0;

				if($v100k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 5;
					$wherevoucher['Remark'] = 'GENVCRAGEN';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v100k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v50k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 4;
					$wherevoucher['Remark'] = 'GENVCRAGEN';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v50k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v25k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 3;
					$wherevoucher['Remark'] = 'GENVCRAGEN';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v25k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v200k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 10;
					$wherevoucher['Remark'] = 'GENVCRAGEN';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v200k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v500k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 8;
					$wherevoucher['Remark'] = 'GENVCRAGEN';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v500k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

			} elseif ($idcusttype == '02')
			{
				$vpromo = $this->promo_gift_voucher_model->get(array("PromoCode" => $promocode));
				$v100k = $vpromo['Voucher100K']?:0;
				$v50k = $vpromo['Voucher50K']?:0;
				$v25k = $vpromo['Voucher25K']?:0;

				if($v100k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 5;
					$wherevoucher['Remark'] = 'GENVCRMEMBER';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v100k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v50k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 4;
					$wherevoucher['Remark'] = 'GENVCRMEMBER';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v50k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}

				if($v25k > 0){
					$wherevoucher = array();
					$wherevoucher['fidVoucherStatus'] = 4;
					$wherevoucher['fidAmount'] = 3;
					$wherevoucher['Remark'] = 'GENVCRMEMBER';
					$wherevoucher['Note is null '] = null;
					$this->voucher_beon_model->set_where($wherevoucher);
					$this->voucher_beon_model->set_limit($v25k);
					$vdata = $this->voucher_beon_model->get_list();
					
					foreach ($vdata->result_array() as $row) {
						$data = array();
						$data['TransNum']  = $id;
						$data['VoucherId'] = $row['VoucherID'];
						$data['VoucherAmount'] = $row['VoucherAmount'];
						$data['CreatedBy'] = $this->session->userdata('FullName');
						$data['CreatedDate'] = date('Ymd H:i:s');
						$data['UniqueCode'] = $row['UniqueCode'];

						$this->voucher_booked_model->save($data);
						$this->voucher_beon_model->save(array('VoucherID'=> $data['VoucherId'], 'Note' => $id, 'StoreCodeRedeem' => $store));
					}
				}
				
			}
			
		}
			
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			// $this->result['member'] = $membercode;
			// $this->result['refnum'] = $ref_number;
			$this->success('Success');
		}
	}


}