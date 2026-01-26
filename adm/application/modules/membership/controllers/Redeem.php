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
		$this->load->library('email');
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

	// method untuk send OTP dengan pilihan metode
	public function send_otp() {
		$this->output->set_content_type('application/json');
		
		try {
			$member_code = $this->input->post('t_member_code');
			$method = $this->input->post('t_method');
			
			if (empty($member_code)) {
				echo json_encode(['error' => 'Member code diperlukan']);
				return;
			}
			
			if (empty($method) || !in_array($method, ['whatsapp', 'email'])) {
				echo json_encode(['error' => 'Metode pengiriman tidak valid']);
				return;
			}
			
			// Cari member
			$where = array('MemberCode' => $member_code);
			$memberdata = $this->member_model->get($where);
			
			if (empty($memberdata) || $memberdata['MemberCode'] == '') {
				echo json_encode(['error' => 'Member tidak ditemukan']);
				return;
			}
			
			// Generate OTP
			$otp = sprintf('%06d', mt_rand(0, 999999));
			
			// Simpan ke database
			$data_update = [
				'OTP' => $otp, 
				'LastUpdate' => date('Y-m-d H:i:s')
			];
			
			$this->db->where('MemberCode', $member_code);
			$this->db->update('member.Member', $data_update);
			
			if (!$this->db->affected_rows()) {
				echo json_encode(['error' => 'Gagal menyimpan OTP ke database']);
				return;
			}
			
			// Kirim OTP berdasarkan metode
			$contact = '';
			
			if ($method == 'email') {
				$email = $memberdata['Email'];
				$name = $memberdata['Name'];
				
				// Validasi email
				if (empty($email) || trim($email) == '' || $email == "''") {
					echo json_encode(['error' => 'Email member tidak ditemukan']);
					return;
				}
				
				$email = str_replace(["'", '"'], '', $email);
				$email = trim($email);
				
				if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
					echo json_encode(['error' => 'Format email tidak valid: ' . $email]);
					return;
				}
				
				$contact = $email;
				
				// Coba kirim email dengan SMTP Gmail
				$email_sent = $this->_send_email_otp($email, $name, $otp, $member_code);
				
				if (!$email_sent) {
					// Simpan ke log file
					$log_msg = "[" . date('Y-m-d H:i:s') . "] OTP untuk {$member_code}: {$otp}\n";
					file_put_contents(APPPATH . 'logs/otp_backup.log', $log_msg, FILE_APPEND);
				}
				
			} else if ($method == 'whatsapp') {

				$phone = $memberdata['Handpone'];
				if (empty($phone)) {
					echo json_encode(['error' => 'Nomor handphone member tidak ditemukan']);
					return;
				}

				// Normalisasi nomor
				$phone = preg_replace('/[^0-9]/', '', $phone);
				$phone = preg_replace('/^0/', '62', $phone);
				$contact = $phone;

				// Kirim OTP via WhatsApp
				$whatsapp_sent = $this->_send_whatsapp_otp(
					$phone,
					$otp,
					$memberdata['Name'],
					$member_code
				);

				if ($whatsapp_sent === false) {
					echo json_encode(['error' => 'Gagal mengirim OTP via WhatsApp']);
					return;
				}

				echo json_encode([
					'success' => 'OTP berhasil dikirim via WhatsApp',
					'method'  => 'whatsapp',
					'contact' => $contact,
					'member_code' => $member_code
				]);
				return;
			}

			
			// return success OTP
			echo json_encode([
				'success' => 'OTP berhasil dikirim via ' . ($method == 'whatsapp' ? 'WhatsApp' : 'Email'),
				'method' => $method,
				'contact' => $contact,
				'member_code' => $member_code
			]);
			
		} catch (Exception $e) {
			echo json_encode(['error' => 'Server error: ' . $e->getMessage()]);
		}
	}

	// Fungsi kirim email OTP
    private function _send_email_otp($to_email, $to_name, $otp_code, $member_code) {
		try {
			// KONFIGURASI SMTP untuk LOCAL XAMPP
			$config = Array(
				'protocol' => 'smtp',
				'smtp_host' => 'smtp.gmail.com',  
				'smtp_port' => 587,               
				'smtp_user' => 'elcorpsdev@gmail.com',
				'smtp_pass' => 'rgjw nuiv imnc moqm',
				'smtp_timeout' => 30,
				'mailtype' => 'html',
				'charset' => 'utf-8',
				'newline' => "\r\n",
				'smtp_crypto' => 'tls',           
				'smtp_debug' => 0,
				'smtp_auth' => true               
			);
			
			$this->email->initialize($config);
			
			$this->email->from('elcorpsdev@gmail.com', 'CRM System');
			$this->email->to($to_email);
			$this->email->subject('[CRM] Kode OTP untuk Redeem Point - ' . $member_code);
			
			$message = '<!DOCTYPE html>
			<html>
			<head>
				<meta charset="utf-8">
				<title>Kode OTP CRM</title>
				<style>
					body { font-family: Arial, sans-serif; line-height: 1.6; color: #333; }
					.container { max-width: 600px; margin: 0 auto; padding: 20px; border: 1px solid #ddd; border-radius: 5px; }
					.header { background-color: #007bff; color: white; padding: 10px; text-align: center; border-radius: 5px 5px 0 0; }
					.content { padding: 20px; }
					.otp-box { 
						font-size: 32px; 
						font-weight: bold; 
						color: #007bff; 
						text-align: center; 
						margin: 20px 0; 
						padding: 15px; 
						background-color: #f8f9fa; 
						border: 2px dashed #007bff;
						border-radius: 5px;
						letter-spacing: 5px;
					}
					.footer { margin-top: 20px; padding-top: 10px; border-top: 1px solid #eee; color: #666; font-size: 12px; }
				</style>
			</head>
			<body>
				<div class="container">
					<div class="header">
						<h2>Kode OTP CRM System</h2>
					</div>
					<div class="content">
						<p>Halo <strong>' . htmlspecialchars($to_name) . '</strong>,</p>
						<p>Anda telah meminta kode OTP untuk proses penukaran point di sistem CRM.</p>
						
						<div class="otp-box">' . $otp_code . '</div>
						
						<p><strong>Kode ini berlaku selama 10 menit.</strong></p>
						<p>Jika Anda tidak meminta kode ini, silakan abaikan email ini.</p>
						
						<p>Terima kasih,<br>
						<strong>CRM System</strong></p>
					</div>
					<div class="footer">
						<p>Email ini dikirim secara otomatis. Mohon tidak membalas email ini.</p>
						<p>Member Code: ' . $member_code . '</p>
						<p>Timestamp: ' . date('d/m/Y H:i:s') . '</p>
					</div>
				</div>
			</body>
			</html>';
			
			$this->email->message($message);
			
			if ($this->email->send()) {
				// Log sukses
				$log_msg = "[" . date('Y-m-d H:i:s') . "] EMAIL OTP BERHASIL dikirim ke: " . $to_email . " - OTP: " . $otp_code . "\n";
				file_put_contents(APPPATH . 'logs/email_success.log', $log_msg, FILE_APPEND);
				return true;
			} else {
				$error = $this->email->print_debugger();
				
				$test_msg = "========================================\n";
				$test_msg .= "Waktu: " . date('Y-m-d H:i:s') . "\n";
				$test_msg .= "Email tujuan: " . $to_email . "\n";
				$test_msg .= "Nama: " . $to_name . "\n";
				$test_msg .= "Member Code: " . $member_code . "\n";
				$test_msg .= "OTP: " . $otp_code . "\n";
				$test_msg .= "Error SMTP: " . $error . "\n";
				$test_msg .= "========================================\n";
				
				file_put_contents(APPPATH . 'logs/otp_local_test.log', $test_msg, FILE_APPEND);
				
				return false;
			}
			
		} catch (Exception $e) {
			$error_msg = "[" . date('Y-m-d H:i:s') . "] EXCEPTION: " . $e->getMessage() . "\n";
			file_put_contents(APPPATH . 'logs/email_error.log', $error_msg, FILE_APPEND);
			return false;
		}
	}
    
    // Fungsi  kirim WhatsApp OTP
	private function _send_whatsapp_otp($phone, $otp, $name, $member_code)
	{
		// Normalisasi nomor
		$phone = preg_replace('/[^0-9]/', '', $phone);
		if (substr($phone, 0, 1) === '0') {
			$phone = '62' . substr($phone, 1);
		}

		$url = 'https://api.bitbybit.studio/whatsapp/api/v3.1/message/template';

		$payload = [
			'to' => $phone,
			'template_name' => 'new_otp_template_indo',
			'template_source' => 'AUTH',
			'sources' => 'WHATSAPP_META',
			'params' => [
				$otp
			],
			'ignoreActiveTicket' => false,
			'countryCode' => 'ID'
		];

		$ch = curl_init($url);
		curl_setopt_array($ch, [
			CURLOPT_POST => true,
			CURLOPT_RETURNTRANSFER => true,
			CURLOPT_HTTPHEADER => [
				'Content-Type: application/json',
				'x-bitbybit-key: 13795fda8212aa6c0ce39d7f8d2b4cfe'
			],
			CURLOPT_POSTFIELDS => json_encode($payload)
		]);

		$response = curl_exec($ch);
		$httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
		curl_close($ch);

		if (!$response) {
			return false;
		}

		$res = json_decode($response, true);

		return isset($res['status']) && $res['status'] === true;
	}



	// Update method verify_otp_redeem 
	 public function verify_otp_redeem() {
        $this->output->set_content_type('application/json');
        
        $member_code = $this->input->post('t_member_code');
        $otp_input = $this->input->post('t_otp');
        
        if (empty($member_code) || empty($otp_input)) {
            echo json_encode(['error' => 'Data tidak lengkap']);
            return;
        }
        
        // Query untuk mengambil OTP dan LastUpdate
        $this->db->select('"OTP", "LastUpdate", "Name", "Email", "Handpone"');
        $this->db->from('member."Member"');
        $this->db->where('"MemberCode"', $member_code);
        $query = $this->db->get();
        
        if ($query->num_rows() == 0) {
            echo json_encode(['error' => 'Member tidak ditemukan']);
            return;
        }
        
        $row = $query->row_array();
        $otp_db = $row['OTP'];
        $last_update = $row['LastUpdate'];
        $name = $row['Name'];
        
        if ($otp_db != $otp_input) {
            echo json_encode(['error' => 'Kode OTP tidak valid']);
            return;
        }
        
        // LastUpdate sebagai timestamp pembuatan OTP
        if (!empty($last_update)) {
            $otp_time = strtotime($last_update);
            $current_time = time();
            if (($current_time - $otp_time) > (10 * 60)) {
                // Hapus OTP yang expired
                $this->db->where('"MemberCode"', $member_code);
                $this->db->update('member."Member"', ['OTP' => NULL]);
                
                echo json_encode(['error' => 'Kode OTP sudah kadaluwarsa. Silakan minta OTP baru.']);
                return;
            }
        }
        
        // Hapus OTP setelah digunakan
        $this->db->where('"MemberCode"', $member_code);
        $this->db->update('member."Member"', ['OTP' => NULL]);
        
        // Ambil data untuk redeem dari POST
        $id = $this->input->post('id');
        $qty = $this->input->post('qty') ?: 1;
        $total = $this->input->post('total');
        
        // Set data POST untuk redeem_point
        $_POST['member'] = $member_code;
        $_POST['name'] = $name;
        $_POST['id'] = $id;
        $_POST['qty'] = $qty;
        $_POST['total'] = $total;
        
        // Panggil redeem_point
        $this->redeem_point();
    }


}