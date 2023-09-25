<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Activation extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(18);
		date_default_timezone_set('Asia/Jakarta');  
		$this->load->model('master/member_model');
		$this->load->model('master/store_beon_model');
		$this->load->model('files/activity_log_model');
		$this->load->model('membership/points_model');
	}
	
	public function index()
	{
		$this->bc->add('Membership', base_url());
		$this->bc->add('Activation', base_url('membership/activation'));
		$this->bc->set_title('Member Activation');
		
		 $data = array(
		 'content' => 'activation/main'
		 ,'title' => 'Member Manual Activation'
		 );
		 $this->load->view('tpl',$data);
	}
	
	function check_token()
	{
		$headers = array();
		
		$url = get_myconf('url_api')."api/sms/check_token";
		
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		
		# Print response.
		echo "$server_output";
	}
	
	function select_member($hp='')
	{
		$where = array();
		
		$hp = strtoupper($hp);
		
		$where['UPPER("Handpone")'] = $hp;
		
		$memberdata = $this->member_model->get($where);
		$storedata = $this->store_beon_model->get($memberdata['StoreCode']);
		$memberdata['StoreDescription']	= $storedata['Description'];
		echo json_encode($memberdata);
	}
	
	function gen_random_number($digits = 0)
	{
		return str_pad(rand(0, pow(10, $digits)-1), $digits, '0', STR_PAD_LEFT);
	}	
	
	function send_sms_otp()
	{
		$phone_number 	= $this->input->post('t_phone_number');
		$member_code	= $this->input->post('t_member_code');
		$otp_num		= $this->gen_random_number(6);
		
		// $this->sms->api_sms_check();
		// $sms_otp = $this->send_sms($phone_number,'Anda akan melakukan verifikasi nomer untuk pendaftaran member Elcorps Lifestyle. Kode OTP anda : '.$otp_num);			
		
		$sms_text = 'Anda akan melakukan verifikasi nomor untuk pendaftaran member Elcorps Lifestyle. Kode OTP anda : '.$otp_num;
		$sms_text = 'elcorps lifestyle, VERIFICATION KEY : '.$otp_num;
		$sms_text = 'Assalamualaikum Wr Wb.Terima kasih telah bergabung bersama ELCORPS Lifestyle.Verifikasi no. handpone anda kpd kasir dgn menyebutkan kode OTP : '.$otp_num;
		$sms_text = 'Assalamualaikum Wr Wb.Terima kasih telah bergabung bersama ELCORPS Lifestyle. Kode aktivasi anda '.$otp_num;
		
		$campaign 	= 'Aktivasi Handphone';
		$requestby 	= get_myconf('app_name');
		$seconds_limit = 600;
		
		$check_last_sms = $this->sms->check_request_sms($phone_number,$requestby,$campaign,$seconds_limit);
		/*
		if($check_last_sms['idMessage'])
		{
			$remaining_seconds = 0;
			$date_now = date('Y-m-d H:i:s');
			$seconds_passed = strtotime($date_now) - strtotime($check_last_sms['DateCreate']);
			$remaining_seconds =$seconds_limit-$seconds_passed;
			$time_comparation = strtotime('+'.$seconds_limit.' seconds',strtotime($check_last_sms['DateCreate']));
			// $result['message']	= 
			// $this->sms->api_sms_request();
			if($date_now>$time_comparation)
			{
				$res = '1XDN';
			}else{
				$res = $time_comparation-$date_now;
			}
			
			if($check_last_sms['DateCreate'])
			{
				$this->error('OTP Sudah dikirim, Tunggu ('.($remaining_seconds ).') Detik sebelum request OTP kembali. #error code('.$res.')');
			}
		}
		*/
		$data_updt		= array();
		$data_updt['MemberCode']	=	$member_code;
		$data_updt['OTP']			=	$otp_num;
		$savedata	=	$this->member_model->save($data_updt);
		
		if(!$savedata)
		{
			$error = $this->db->error();
			$this->error($error);
		}else{
			$data_log['MemberCode']			= $member_code;		
			$data_log['TabelName'] 			= 'member';
			$data_log['LogType'] 			= 'send OTP';
			$data_log['Value'] 	    		= $otp_num;
			$data_log['fidActivityLogType']	= 3;
			$save = $this->activity_log_model->saveTo($data_log);
		}
		
		$data_msg = array();
		$data_msg['Msisdn']		= $phone_number;
		$data_msg['Message']	= $sms_text;
		$data_msg['OTP'] 		= $otp_num;
		$data_msg['MemberCode'] = $member_code;
		$data_msg['Campaign'] 	= $campaign;
		$data_msg['RequestBy'] 	= $requestby;
		$this->sms->set_messages($data_msg);
		$this->sms->send_messages();
		// $this->sms->api_sms_request();
		// $this->sms->api_sms_check();
		$this->result['otp'] = $otp_num;;
		$this->success('OTP (One Time Password) Sent to : '.$phone_number.' status: sms requested');
	}
	
	function send_sms($destinasi='',$msg='')
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= $this->input->post('t_sender');
		$headers['message'] 	= $msg;
		$headers['msisdn'] 		= $destinasi;
		// $headers['msisdn'] 		= 'x0x0x0';
		$headers['requestby'] 	= $this->input->post('requestby')?:'ICT'; // departement or username
		$headers['campaign'] 	= $this->input->post('campaign')?:'Aktivasi Handphone';
		// print_r($headers);
		// print_r($_POST);
		// die;
		$url = get_myconf('url_api')."api/sms/send_sms";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);

		// var_dump($headers);
		// var_dump(curl_getinfo($ch));
		curl_close ($ch);
		$output = json_decode($server_output, True);
		// print_r($output);
		// die;
		# Print response.
		return $output['status'];

	}
	
	function activate_member()
	{
		$point_aktivasi	= 50;
		$phone_number	= $this->input->post('t_phone_number');
		$member_code	= $this->input->post('t_member_code');
		$otp_num		= $this->input->post('t_otp');
		
		$get_member		= $this->member_model->get($member_code);
		$data_member	= array();
		$data_point		= array();
		
		if($otp_num=='')
		{
			$this->error('please input OTP');
		}
		
		if($get_member['OTP']==$otp_num){
			
			// validasi apakah sudah pernah dapet point
			
			$where_validasi_point = array();
			$where_validasi_point['MemberCode'] = $member_code;
			$where_validasi_point['isVerifiedEmail'] = 0;
			$where_validasi_point['isVerifiedHandPhone'] = 0;
			
			$validasi_point = $this->member_model->get($where_validasi_point);
			
			if($validasi_point['MemberCode']!='')
			{
				if($get_member['fidMemberCategory']!='05')
				{
					$point_aktivasi	= 50;
					$data_point = array();
					// add point to member
					$data_point['TransDate']	= date('Y-m-d');
					$data_point['CreateBy']		= $this->session->userdata('FullName');
					$data_point['CreateTime']	= date('Y-m-d H:i:s');
					$data_point['MemberCode']	= $member_code;
					$data_point['StoreCode']	= $get_member['StoreCode'];
					$data_point['fidMemberCategory']= $get_member['fidMemberCategory'];
					$data_point['TransType']	= 5;
					$data_point['Description']	= 'Aktivasi Handphone';
					$data_point['Debit']		= $point_aktivasi;
					$data_point['Credit']		= 0;
					$data_point['LastUpdate']	= date('Y-m-d H:i:s');
					$cek_exist_point = $this->points_model->get(array('MemberCode'=>$member_code,'TransType'=>5));
					if(!$cek_exist_point['IdRec'])
					{
						$savepoints = $this->db->insert('points.Points', $data_point);
					}
					$tahun = date('Y');
					$bulan = date('m');
					$query = $this->db->query('SELECT "member"."sp_InsertMemberPoints"(\''.$member_code.'\',\''.$tahun.'\',\''.$bulan.'\')');
				}
			}
			
			// update verify status member
			$data_member['MemberCode']			= $member_code;
			$data_member['isVerifiedHandPhone']	= 1;
			$data_member['isActive']			= 1;
			$savedata = $this->member_model->save($data_member);
			
			$data_log['MemberCode']			= $member_code;		
			$data_log['TabelName'] 			= 'member';
			$data_log['LogType'] 			= 'member Activation';
			$data_log['Value'] 	    		= 'CRM Admin Panel';
			$data_log['fidActivityLogType']	= 7;
			$save = $this->activity_log_model->saveTo($data_log);
			
			if($get_member['fidMemberCategory']=='05')
			{
				$this->result['phone_number'] 	= $phone_number;
				$this->success('Member Activation Success');
				die;
			}
			
			if(!$savedata)
			{
				$error = $this->db->error();
				$this->error($error);
			}else
			{
				$this->result['phone_number'] 	= $phone_number;
				$this->success('Member Activation Success');
			}
		}else
		{
			$this->error('Wrong OTP... please check your input...!');
		}
	}
}