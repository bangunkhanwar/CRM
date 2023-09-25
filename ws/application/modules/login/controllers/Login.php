<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('operator_model');
		$this->load->model('master/member_model');
		$this->load->model('master/activity_log_model');	
	}
	
	public function index()
	{
		echo "opr";
		// password ictdevelopment2019
	}
	
	public function check_user()
	{
		$this->error('silahkan update aplikasi anda');
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$username = $this->input->post('t_username');
		$password = $this->input->post('t_password');
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$username)
		{
			$result['message']	= 'password is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if(!$password)
		{
			$result['message']	= 'password is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		} 
		
		// $CustCode = '';
		// 516101697
		// if (strlen($username) <=9   )
		
		$nik = str_replace(".", "", $username);
		
		$where_karyawan = array();
		$where_karyawan['("MemberCode" = \''.$nik.'\' AND "fidMemberCategory" = \'05\')'] = null;
		$where_karyawan['Password']		= $cPassGen;
	
		$get_karyawan = $this->member_model->get($where_karyawan);
		if($get_karyawan['MemberCode'])
		{
			
			$result['statusCode']	= '1';
			$result['message']	= 'login success';
			point_first_login($get_karyawan['MemberCode'],$get_karyawan['fidMemberCategory']);
			$result['member']	= $get_karyawan;
			
			if($get_karyawan['FirstLoginApps']=='')
			{
				$data_opr = array();
				$data_opr['MemberCode']		= $get_karyawan['MemberCode'];
				$data_opr['FirstLoginApps']	= date('Ymd H:i:s');
				
				$save_opr = $this->member_model->save($data_opr);
			}
		}else
		{
			$date = date("Y").date("m").date("d");
			$where = array();
			$where['("Email" = \''.$username.'\'
			 OR "MemberCode" = \''.$username.'\'
			 OR "Handpone" = \''.$username.'\')
			 AND ("fidMemberCategory" <> \'05\')
			 ']= null;
			$where['Password']		= $cPassGen;
			
			// $where['"ExpiryDate" >= '.$date.'']	=  null;
			// $this->member_model->set_where($where);
			$opr = $this->member_model->get($where);
			// echo $this->db->last_query();die;
			
			if($opr['MemberCode'])
			{
				
				$result['statusCode']	= '1';
				$result['message']	= 'login success';
				point_first_login($opr['MemberCode'],$opr['fidMemberCategory']);
				$result['member']	= $opr;
				
				if($opr['FirstLoginApps']=='')
				{
					$data_opr = array();
					$data_opr['MemberCode']		= $opr['MemberCode'];
					$data_opr['FirstLoginApps']	= date('Ymd H:i:s');
					
					$save_opr = $this->member_model->save($data_opr);
				}
			}else
			{
				$result['message']	= 'Username or Password Invalid !';
			}
		}
		header('Content-type: application/json');
		echo die(json_encode($result));
	}
	
	function get_duplicate_message($msisdn,$seconds=360)
	{
		/* ADDED 2015-05-24 09:25 */
		/* Blocking duplikasi pesan dari pengirim yang sama dalam kurun waktu 5 menit */
		$qry = 'SELECT * FROM ws."Messages" WHERE "DateCreate" + interval \''.$seconds.' seconds\' > now() AND "Msisdn" = \''.$msisdn.'\'';
		
		$query = $this->CI->db->query($qry);
		
		$row_data = $query->row_array();
		
        if($query->num_rows()>0)
		{
			$result['code']		= 0;
			$result['msgid']  	= $msisdn;
			$result['status']   = $row_data['ApiCheckStatusDescription'];
			$result['message']	=  'Message Already Requested';
			$result['success']	=  'Message Processed';
			$result['data']		= $query->result_array();
			
			header('Content-type: application/json');
			die(json_encode($result));
		}
	}
	
	public function get_user_otp()
	{
		$campaign 	= 'Aktivasi Handphone';
		$requestby 	= get_myconf('app_name_mobile');
		$seconds_limit = 300;
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$username = $this->input->post('t_username');
		// echo "uasername".$username;
		$regtype=0;
		$email='';
		if($username=='')
		{
			$result['message']	= 'Failed, Username EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if(is_numeric($username))
		{
			$regtype = 1;
			$init_username = 'Fams';
		}
		
		if(filter_var($username, FILTER_VALIDATE_EMAIL)) // validasi format email
		{
			$regtype = 2;
			$email  = $username;
			$init_username = substr($email,0,strpos($email,'@'));
		}
		$send_to = 'unknown';
		$otp_random = mt_rand(100000, 999999);
		$otp_type = '';
		$sms_text = '';
		if($regtype==0)
		{
			$otp_type = 'unknown';
			$result['message']	= 'Email / Handphone format dosnt Match';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$check_member	= array();
		if($regtype==1)
		{
			$otp_type = 'Phone';
			$check_member = $this->member_model->get(array('Handpone'=>$username));
			if($check_member['MemberCode']=='')
			{
				$result['message']	= 'Member Not Found';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			$phone  = $username;
			$sms_text =  'Your ID: '.$otp_random; //DINU MESSAGE BISA JADI KABLOK (TULISAN VERIFICATION NA DIHAPUS->CASE CLOSED)
			
			// $this->send_sms_otp($phone,$sms_text,$otp_random); 
			
			$check_last_sms = $this->sms->check_request_sms($phone,$requestby,$campaign,$seconds_limit);
			// print_r($check_last_sms);
			// UPDATE OTP KE TABEL MEMBER
			$data = array();
			$data['MemberCode']	= $check_member['MemberCode'];	
			$data['OTP']	    = $otp_random;
			$save = $this->member_model->save($data);

			$data_msg = array();
			$data_msg['Msisdn']		= $phone;
			$data_msg['Message']	= $sms_text;
			$data_msg['OTP'] 		= $otp_random;
			$data_msg['MemberCode'] = $check_member['MemberCode'];
			$data_msg['Campaign'] 	= $campaign;
			$data_msg['RequestBy'] 	= $requestby;
			
			// $this->sms->set_messages($data_msg);
			// $this->sms->send_messages();
			
			$this->get_duplicate_message($phone);

					
					
			$headers = array();
			$headers['username'] 	= get_myconf('u_api');
			$headers['password'] 	= get_myconf('p_api');			
			$headers['sender'] 		= 'MD Media';
			$headers['message'] 	= $sms_text;
			$headers['msisdn'] 		= $phone;
			$headers['requestby'] 	= $requestby; // departement or username
			$headers['campaign'] 	= 'Request OTP';
			$headers['noaccent'] 	= '';

			
			$url = get_myconf('url_api')."api/sms/send_sms";
			$ch = curl_init();
			curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
			curl_setopt($ch, CURLOPT_URL,$url);
			curl_setopt($ch, CURLOPT_POST, 1);
			curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

			curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

			$server_output = curl_exec ($ch);
			$outputsms = json_decode($server_output,true);
			curl_close ($ch);			
		}
		if($regtype==2)
		{
			$otp_type = 'Email';
			$check_member = $this->member_model->get(array('Email'=>$username));
			if($check_member['Email']=='')
			{
				$result['message']	= 'Member Not Found';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			$email  = $username;
			$this->send_email_otp($email,$otp_random);
		}
		
		// UPDATE OTP KE TABEL MEMBER
		$data['MemberCode']	= $check_member['MemberCode'];		
		$data['OTP']	    = $otp_random;		
		$save = $this->member_model->save($data);	
		// print_r($data);die;
		
		// INSERT OTP KE TABEL ACTIVITY LOG
		$data_log['MemberCode']	= $check_member['MemberCode'];		
		$data_log['TabelName'] 	= 'member';
		$data_log['LogType'] 	= 'send '.$otp_type;
		$data_log['Value'] 	    = $otp_random;
		
		$save = $this->activity_log_model->saveTo($data_log);		
		
		$check_member = $this->member_model->get($check_member['MemberCode']);
		
		// return status
		if($check_member)
		{ 
			$result['statusCode']	= 1;
			$result['message']	=  'Success..!';
			$result['member']	=  $check_member;
			$result['type']		=  $regtype;
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	function send_sms_otp($phone_number='',$text='',$otp_verifikasi='')
	{
		// echo "ada".$phone_number;
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= 'MD Media';
		$headers['message'] 	= $text;
		$headers['msisdn'] 		= $phone_number;
		$headers['requestby'] 	= 'CRM Mobile Apps'; // departement or username
		$headers['campaign'] 	= 'SMS Registrasi';
		$user					= '';
				
		$url = get_myconf('url_api')."api/sms/send_sms";
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_POST, 1);
		curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		$server_output = curl_exec ($ch);
		$result = json_decode($server_output,true);
		curl_close ($ch);
		
		if ($result['status']=='SUCCESS')
		{	
		}
		return ($result['status']=='SUCCESS');	
	}
	
	
	function send_email_otp($user_mail,$otp_verifikasi)
	{
		$email = '';
		$where = array ();
		$where['tbl.Email']= $user_mail;	
		$limit = 1;
		$this->member_model->set_limit($limit);	
		$this->member_model->set_where($where);
		$profile = $this->member_model->get_list();	
		$profile = $profile->row();
		$name = $profile->Name;
		 // echo $this->db->last_query();
		// exit;
		
		$sendto = $user_mail;
		if($sendto)
		{
			$email = $sendto;
		}
		$data = array();
		$data['subject'] = 'Kode OTP';
		$data['sendto'] = $email;
		$data['otp'] 	= $otp_verifikasi;
		if(!isset($data['sendto']))
		{
			echo 'destination is empty';
			die;
		}
		if(!isset($data['subject']))
		{
			echo 'subject is empty';
			die;
		}
		// $event = $this->event_model->get(get_myconf('event_code'));
		// $event_list = $this->event_list_model->get(array('email'=>$email));
		// $data['event_list'] = $event_list;
		$post_email_address = $data['sendto'];
		// echo ($post_email_address);
		// die;
		$config = Array(
			 'protocol' => 'smtp',
			 'smtp_host' => 'mail.elzatta.com',
			 'smtp_port' => 25,
			 'smtp_user' => 'no-replay@elhijab.id',//$store_retur.'@elzatta.com', // change it to yours
			 'smtp_pass' => 'elzatta@admin',//'elzatta@'.$retur['StoreCode'], // change it to yours
			 'mailtype' => 'html',
			 'charset' => 'iso-8859-1',
			 'wordwrap' => TRUE
		  ); 
        $this->email->initialize($config);
        $this->email->from('no-replay@elhijab.id','elcorps');
        $this->email->to($post_email_address);
		// $this->email->bcc('muhammadzamalludin@gmail.com'); 
		$data['email_user'] = $post_email_address;
		$data['name'] = $name;
		$url=site_url();
		$message = $this->load->view('email_otp',$data,TRUE);
		$this->email->subject($data['subject']);
        $this->email->message($message);
		// $this->email->send();
		if(!$this->email->send()){
			$this->result['field']='';
			$this->result['error']= 'Failed sent email !';
			$this->result['header']='error';
			$this->result['success']='';
			// echo json_encode($this->result);
			// return;
			return false;
	    }else{
			$this->result['field']='';
			$this->result['error']='';
			$this->result['header']='success';
			$this->result['success']='Email has been sent !';
			return true;

		}
	}
	
	public function validasi_otp()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$username = $this->input->post('t_username');
		$otp	  = $this->input->post('t_otp');
		
		if($username=='')
		{
			$result['message']	= 'Failed, t_username EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		if($otp=='')
		{
			$result['message']	= 'Failed, t_otp EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		if(is_numeric($username))
		{
			$regtype = 1;
			$init_username = 'Fams';
			$check_member = $this->member_model->get(array('Handpone'=>$username));
			if($check_member['MemberCode']=='')
			{
				$result['message']	= 'Failed, Phone Number Not Found..!';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}
		
		if(filter_var($username, FILTER_VALIDATE_EMAIL)) // validasi format email
		{
			$regtype = 2;
			$email  = $username;
			$init_username = substr($email,0,strpos($email,'@'));
			$check_member = $this->member_model->get(array('Email'=>$username));
			if($check_member['MemberCode']=='')
			{
				$result['message']	= 'Failed, Email Not Found..!';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}
		$send_to = 'unknown';
		$otp_verifikasi = '';
		$otp_random = mt_rand(100000, 999999);
		$otp_verifikasi = $otp_random;
		$otp_type = '';
		if($check_member['OTP']!=$otp)
		{
			$otp_type = 'Handphone';
			$result['message']	= 'Failed, Wrong OTP..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$result['statusCode']	= 1;
		$result['message']	=  'Success..!';
		// $result['member']	=  $check_member;
		header('Content-type: application/json');
		echo die(json_encode($result));
	
		// if($regtype==1)
		// {
			// $otp_type = 'Email';
			// $check_member = $this->member_model->get(array('Handpone'=>$username));
			// if($check_member['MemberCode']=='')
			// {
				// $result['message']	= 'Member Not Found';
				// header('Content-type: application/json');
				// echo die(json_encode($result));
			// }
			// $phone  = $username;
			// $sms_text =  'Masukan kode berikut '.$otp_verifikasi.' untuk mendapatkan poin';;
			// $this->send_sms_otp($phone,$sms_text);
		// }
		// if($regtype==2)
		// {
			// $check_member = $this->member_model->get(array('Email'=>$username));
			// if($check_member['Email']=='')
			// {
				// $result['message']	= 'Member Not Found';
				// header('Content-type: application/json');
				// echo die(json_encode($result));
			// }
			// $email  = $username;
			// $this->send_email_otp($email,$otp_verifikasi);
		// }
		
	} 
	
	public function update_forgot_password()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$username = $this->input->post('t_username');
		$password = $this->input->post('t_password');
		
		if($username=='')
		{
			$result['message']	= 'Failed, username EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if($password=='')
		{
			$result['message']	= 'Failed, password EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['("Email" = \''.$username.'\'
		 OR "MemberCode" = \''.$username.'\'
		 OR "Handpone" = \''.$username.'\')']= null;
		
		$opr = $this->member_model->get($where);
		
		if($opr['MemberCode']=='')
		{
			$result['message']	= 'Failed, Member Not Found..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$data = array();
		
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		}
		
		$data['MemberCode']	= 	$opr['MemberCode'];
		$data['Password']	= 	$cPassGen;
	
		// print_r($data);die;
		$save = $this->member_model->save($data);
		
		if($save)
		{
			$result['statusCode']	= 1;
			$result['message']	=  'Update Password Success..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['message']	=  'Failed Update Password..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function change_password()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$username = $this->input->post('t_username');
		$password_old = $this->input->post('t_old_password');
		$password_new = $this->input->post('t_new_password');
		
		if($username=='')
		{
			$result['message']	= 'Failed, username EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if($password_old=='')
		{
			$result['message']	= 'Failed, old password EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		if($password_new=='')
		{
			$result['message']	= 'Failed, new password EMPTY..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['("Email" = \''.$username.'\'
		 OR "MemberCode" = \''.$username.'\'
		 OR "Handpone" = \''.$username.'\')']= null;
		
		$opr = $this->member_model->get($where);
		
		if($opr['MemberCode']=='')
		{
			$result['message']	= 'Failed, Member Not Found..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$data = array();
		
		$nCharOld = strlen($password_old)+1;
		$cPassGenOld = $password_old;
		$x = 1; 
		while($x <= $nCharOld) 
		{
			$cPassGenOld = md5($cPassGenOld);
			$x++;
		}
		
		if($cPassGenOld!=$opr['Password'])
		{
			$result['message']	= 'Failed, Incorrect old password..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		
		$nCharNew = strlen($password_new)+1;
		$cPassGenNew = $password_new;
		$x = 1; 
		while($x <= $nCharNew) 
		{
			$cPassGenNew = md5($cPassGenNew);
			$x++;
		}
		
		$data['MemberCode']	= 	$opr['MemberCode'];
		$data['Password']	= 	$cPassGenNew;
	
		// print_r($data);die;
		$save = $this->member_model->save($data);
		
		if($save)
		{
			$result['statusCode']	= 1;
			$result['message']	=  'Change Password Success..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['message']	=  'Failed Change Password..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	
}