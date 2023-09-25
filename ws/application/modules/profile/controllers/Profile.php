<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Profile extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('master/member_model');
		$this->load->model('master/activity_log_model');	
		$this->load->model('master/member_points_currently_model');	
		$this->load->model('master/voucher_model');	
		$this->load->model('master/points_model');	
		$this->load->model('master/file_upload_model');
	}
	
	public function index()
	{
		echo "pro";
		// password ictdevelopment2019
	}
	
	public function get_user()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$membercode = $this->input->post('t_membercode');
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$membercode)
		{
			$result['message']	= 'membercode is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$membercode.'\'
			OR "Handpone" = \''.$membercode.'\' 
			OR "Email" = \''.$membercode.'\'
		)']= null;
		
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		if($member['MemberCode']=='')
		{
			$result['message']	= 'Member not found..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$file_info = $this->file_upload_model->get(array('UploadBy'=>$member['MemberCode'],'UsedFor'=>1));
			$tahun = date('Y');
			$bulan = date('n');
			$this->points_model->posting($member['MemberCode'],$tahun,$bulan);
			
			$picture = getProfileImageMobile($member['MemberCode'],0);
			$profilepic_100 = getProfileImageMobile($member['MemberCode'],1);
			$profilepic_200 = getProfileImageMobile($member['MemberCode'],2);
			$profilepic_300 = getProfileImageMobile($member['MemberCode'],3);
			$point_current = $this->member_points_currently_model->get($member['MemberCode']);
			$this->voucher_model->set_where(array('MemberCode'=>$member['MemberCode'],'ExpiryDate >= \''.date('Ymd').'\''=>null));
			$voucher_list	= $this->voucher_model->get_list();
			$result['statusCode']		= '1';
			$result['message']			= 'success';
			$result['member']			= $member;
			$result['picture']			= $picture;
			$result['profilepic_100']	= $profilepic_100;
			$result['profilepic_200']	= $profilepic_200;
			$result['profilepic_300']	= $profilepic_300;
			$result['file_info']		= $file_info;
			$result['voucher_list']		= $voucher_list->result_array();
			$result['current_point']	= $point_current;
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
	}
	
	function update_profile($membercode)
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$membercode)
		{
			$result['message']	= 'membercode is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$membercode.'\'
		)']= null;
		
			// OR "Handpone" = \''.$membercode.'\' 
			// OR "Email" = \''.$membercode.'\'
			
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		if($member['MemberCode']=='')
		{
			$result['message']	= 'Member not found..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$data = $_POST;
			if($data['Handpone']!='')
			{	
				$phone_list = $this->member_model->get(array('Handpone'=>$data['Handpone'],'"MemberCode"<>'.quotedstr($member['MemberCode']).' '=>null));
				
				// validasi no hp
				if($phone_list['MemberCode']!='')
				{
					if(!$phone_list['MemberCode']!=$member['MemberCode'])
					{
						$result['message']	= 'Phone number already used';
						header('Content-type: application/json');
						echo die(json_encode($result));
					}
				}
				
				if ($data['Handpone'] != $member['Handpone'])
				{
					$data['isVerifiedHandPhone'] = 0;
					$data['MemberCode'] = $member['MemberCode'];
					$save = $this->member_model->save($data);
				}
				
			}
			
			if($data['Email']!='')
			{
				$hp_list = $this->member_model->get(array('Email'=>$data['Email'],'"MemberCode"<>'.quotedstr($member['MemberCode']).' '=>null));
				
				// validasi email
				if($hp_list['MemberCode']!='')
				{
					if(!$hp_list['MemberCode']!=$member['MemberCode'])
					{
						$result['message']	= 'Email address already used';
						header('Content-type: application/json');
						echo die(json_encode($result));
					}
				}
					
				if ($data['Email'] != $member['Email'])
				{
					$data['isVerifiedEmail'] = 0;
					$data['MemberCode'] = $member['MemberCode'];
					$save = $this->member_model->save($data);
				}
				
			}
			
			$data['MemberCode'] = $member['MemberCode'];
			$save = $this->member_model->save($data);
			if ($save)
			{	
				$result['statusCode']	= '1';
				$result['message']	= 'update success';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			else
			{						
				$result['message']	= $this->member_model->message;
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
		}
	}
	
	
	public function send_otp_email($user_mail)
	{
		$email='';
		$sendto = $user_mail;
		if($sendto)
		{
			$email = $sendto;
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$user_mail.'\'
			OR "Handpone" = \''.$user_mail.'\' 
			OR "Email" = \''.$user_mail.'\'
		)']= null;
		
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		if($member['MemberCode']=='')
		{
			$result['message']	= 'member not found';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		
		
		$data = array();
		$data['subject'] = 'Elcorps Lifestyle - Email Verification';
		$data['sendto'] = $email;
		$name = $member['Name'];
		$mail =  $member['Email'];
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
		
		
		
		$post_email_address = $mail;
		
		
		
		// echo $name;
		// echo $mail;
		
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
		$this->email->bcc('muhammadzamalludin@gmail.com'); 
		$data['email_user'] = $post_email_address;
		$data['name'] = $name;
		$url=site_url();
		
		$membercode = $member['MemberCode'];	
		
		$otp_random = mt_rand(100000, 999999);
		// UPDATE OTP KE TABEL MEMBER
		$data['MemberCode']	= $member['MemberCode'];		
		$data['OTP']	    = $otp_random;		
		
		// INSERT OTP KE TABEL ACTIVITY LOG
		$data_log['MemberCode']	= $member['MemberCode'];		
		$data_log['TabelName'] 	= 'member';
		$data_log['LogType'] 	= 'send SMS';
		$data_log['Value'] 	    = 'send OTP verification';
		$save = $this->member_model->save($data);
		
		
		
		$message = $this->load->view('profile/profile/email_verify',$data,TRUE);
		$this->email->subject($data['subject']);
        $this->email->message($message);
		// $this->email->send();
		if(!$this->email->send()){
			// echo $this->email->print_debugger();
			// $this->error('Send email Failed..!!!!') ;
			// echo $post_email_address;
			$this->error('Send email failed'.$post_email_address);
	    }else{
			// echo "emaildikirim";
			// UPDATE OTP KE TABEL MEMBER
			// $data_OTP['MemberCode']	= $membercode;		
			// $data_OTP['OTP'] 	    = $data['otp_user'];
			
			// INSERT verification mAIL KE TABEL ACTIVITY LOG
			$data_log['MemberCode']	= $member['MemberCode'];		
			$data_log['TabelName'] 	= 'member';
			$data_log['LogType'] 	= 'send email verification';
			$data_log['Value'] 	    = 'send email verification';
			
			$save = $this->activity_log_model->saveTo($data_log);			
			// $save = $this->member_model->save($data_OTP);
			if ($save)
			{
				$result['statusCode']	= 1;
				$result['message']		= 'email dikirim ke '.$sendto;
				$result['timer']		= 60;

				header('Content-type: application/json');
				echo die(json_encode($result));
			}else
			{
				$result['message']		=  'Failed send email';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
				
		}
	}
	
	
	function send_otp_email_($membercode)
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$membercode)
		{
			$result['message']	= 'membercode is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$membercode.'\'
			OR "Handpone" = \''.$membercode.'\' 
			OR "Email" = \''.$membercode.'\'
		)']= null;
		
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		if($member['MemberCode']=='')
		{
			$result['message']	= 'member not found';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		// mulai kirim email
		$email = '';
		
		$name = $member['Name'];
		$mail =  $member['Email'];
		
		$sendto = $mail;	
		// die;
		if($sendto)
		{
			$email = $sendto;
		}
		$data = array();
		$data['subject'] = 'Elcorps Lifestyle - Email Verification';
		$data['sendto'] = $email;
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
		// $config = Array(
			 // 'protocol' => 'smtp',
			 // 'smtp_host' => 'mail.elcorps.com',
			 // 'smtp_port' => 25,
			 // 'smtp_user' => 'no-reply@elcorps.com',//$store_retur.'@elzatta.com', // change it to yours
			 // 'smtp_pass' => 'elcorps#2019',//'elzatta@'.$retur['StoreCode'], // change it to yours
			 // 'mailtype' => 'html',
			 // 'charset' => 'iso-8859-1',
			 // 'wordwrap' => TRUE
		  // ); 
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
        $this->email->from('no-reply@elcorps.com','elcorps');
        $this->email->to($post_email_address);
		// $this->email->bcc('zamalludin@elcorps.com'); 
		$data['email_user'] = $post_email_address;
		$data['name'] = $name;
		// $otp_random = mt_rand(100000, 999999);
		// $data['otp_user'] = $otp_random;
		$url=site_url();
		$membercode = $member['MemberCode'];	
		
		$otp_random = mt_rand(100000, 999999);
		// UPDATE OTP KE TABEL MEMBER
		$data['MemberCode']	= $member['MemberCode'];		
		$data['OTP']	    = $otp_random;		
		
		// INSERT OTP KE TABEL ACTIVITY LOG
		$data_log['MemberCode']	= $member['MemberCode'];		
		$data_log['TabelName'] 	= 'member';
		$data_log['LogType'] 	= 'send SMS';
		$data_log['Value'] 	    = 'send OTP verification';
		$save = $this->member_model->save($data);	
		
		$message = $this->load->view('profile/profile/email_verify',$data,TRUE);
		$this->email->subject($data['subject']);
        $this->email->message($message);
		// $this->email->send();
		if(!$this->email->send()){
			// echo $this->email->print_debugger();
			// $this->error('Send email Failed..!!!!') ;
			// echo $post_email_address;
			$this->error('Send email failed');
	    }else{
			// echo "emaildikirim";
			// UPDATE OTP KE TABEL MEMBER
			// $data_OTP['MemberCode']	= $membercode;		
			// $data_OTP['OTP'] 	    = $data['otp_user'];
			
			// INSERT verification mAIL KE TABEL ACTIVITY LOG
			$data_log['MemberCode']	= $member['MemberCode'];		
			$data_log['TabelName'] 	= 'member';
			$data_log['LogType'] 	= 'send email verification';
			$data_log['Value'] 	    = 'send email verification';
			
			$save = $this->activity_log_model->saveTo($data_log);			
			// $save = $this->member_model->save($data_OTP);
			if ($save)
			{
				$result['statusCode']	= 1;
				$result['message']		= 'email dikirim ke '.$sendto;
				$result['timer']		= 60;

				header('Content-type: application/json');
				echo die(json_encode($result));
			}else
			{
				$result['message']		=  'Failed send email';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
				
		}
	}
	
	function send_otp_sms($membercode)
	{
		
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$membercode)
		{
			$result['message']	= 'membercode is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$membercode.'\'
			OR "Handpone" = \''.$membercode.'\' 
			OR "Email" = \''.$membercode.'\'
		)']= null;
		
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		if($member['MemberCode']=='')
		{
			$result['message']	= 'member not found';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		// mulai kirim sms
		
		$phone_number = $member['Handpone'];
		$otp_random = mt_rand(100000, 999999);
		// $sms_text = 'Anda akan melakukan verifikasi untuk pendaftaran member Elcorps Lifestyle. Kode OTP Anda '.$otp_random;
		$sms_text = 'Your Verification ID: '.$otp_random;
		
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= 'MD Media';
		$headers['message'] 	= $sms_text;
		$headers['msisdn'] 		= $phone_number;
		$headers['requestby'] 	= 'CRM Mobile Apps'; // departement or username
		$headers['campaign'] 	= 'SMS Registrasi';
		
		// print_r($headers);
		// die;
		// print_r($_POST);
		// die;
		// $url = get_myconf('url_api')."api/sms/send_sms";
		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		// curl_setopt($ch, CURLOPT_URL,$url);
		// curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// $server_output = curl_exec ($ch);
		// $outputsms = json_decode($server_output,true);
		// curl_close ($ch);
		// if ($outputsms['status']=='SUCCESS')
		// {
		
			
		$campaign 	= 'Aktivasi Handphone';
		$requestby 	= get_myconf('app_name_mobile');
		$seconds_limit = 300;
		
		$check_last_sms = $this->sms->check_request_sms($phone_number,$requestby,$campaign,$seconds_limit);
		
		// UPDATE OTP KE TABEL MEMBER
		$check_member = $this->member_model->get(array('MemberCode'=>$membercode));
		
		$data = array();
		$data['MemberCode']	= $check_member['MemberCode'];	
		$data['OTP']	    = $otp_random;
		$save = $this->member_model->save($data);	
		
		$data_msg = array();
		$data_msg['Msisdn']		= $phone_number;
		$data_msg['Message']	= $sms_text;
		$data_msg['OTP'] 		= $otp_random;
		$data_msg['MemberCode'] = $check_member['MemberCode'];
		$data_msg['Campaign'] 	= $campaign;
		$data_msg['RequestBy'] 	= $requestby;
		$this->sms->set_messages($data_msg);
		$this->sms->send_messages();	
		
		// UPDATE OTP KE TABEL MEMBER
		$data['MemberCode']	= $member['MemberCode'];		
		$data['OTP']	    = $otp_random;		
		
		// INSERT OTP KE TABEL ACTIVITY LOG
		$data_log['MemberCode']	= $member['MemberCode'];		
		$data_log['TabelName'] 	= 'member';
		$data_log['LogType'] 	= 'send SMS';
		$data_log['Value'] 	    = 'send OTP verification';
		
		$save = $this->member_model->save($data);	
		$save = $this->activity_log_model->saveTo($data_log);			
		// }
		// return ($result['message']=='SUCCESS');	
		$result['statusCode']	= '1';
		$result['message']		= 'OTP REQUESTED';
		$result['timer']		= $seconds_limit;
		// $result['member']	=  $check_member;
		header('Content-type: application/json');
		echo die(json_encode($result));
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
		$otp_type = '';
		if(is_numeric($username))
		{
			$otp_type = 'Handphone';
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
			$otp_type = 'Email';
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
		if($check_member['OTP']!=$otp)
		{
			// $otp_type = 'Handphone';
			$result['message']	= 'Failed, Wrong OTP..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
			// validasi apakah sudah pernah dapet point
		$where_validasi_point = array();
		
		$where_validasi_point['MemberCode'] = $check_member['MemberCode'];
		$where_validasi_point['TransType'] = 5;
		// $where_validasi_point['isVerifiedHandPhone'] = 0;
		
		
		$validasi_point = $this->points_model->get($where_validasi_point);
		// print_r($validasi_point);die;
		if($validasi_point['MemberCode']=='')
		{
			if($check_member['fidMemberCategory']!='05')
			{
				$point_aktivasi	= 50;
				$data_point = array();
				// add point to member
				$data_point['TransDate']	= date('Y-m-d');
				$data_point['CreateBy']		= 'CRM Webservice';
				$data_point['CreateTime']	= date('Y-m-d H:i:s');
				$data_point['MemberCode']	= $check_member['MemberCode'];
				$data_point['StoreCode']	= $check_member['StoreCode'];
				$data_point['fidMemberCategory']= $check_member['fidMemberCategory'];
				$data_point['TransType']	= 5;
				$data_point['Description']	= 'Account Verify';
				$data_point['Debit']		= $point_aktivasi;
				$data_point['Credit']		= 0;
				$data_point['LastUpdate']	= date('Y-m-d H:i:s');
				
				$savedata = $this->db->insert('points.Points', $data_point);
				$tahun = date('Y');
				$bulan = date('m');
				$query = $this->db->query('SELECT "member"."sp_InsertMemberPoints"(\''.$check_member['MemberCode'].'\',\''.$tahun.'\',\''.$bulan.'\')');
				
			}
		}
		
		$data_verifikasi = array();
		
		$data_verifikasi['MemberCode'] = $check_member['MemberCode'];
		
		if($regtype==1)
		{
			$data_verifikasi['isVerifiedHandPhone'] = 1;
		}
		if($regtype==2)
		{
			$data_verifikasi['isVerifiedEmail'] = 1;
		}
			$data_verifikasi['isActive'] = 1;
		
		$save_verifikasi = $this->member_model->save($data_verifikasi);
		
		$result['statusCode']	= 1;
		$result['type']	= $regtype;
		$result['message']	=  'Success..!';
		// $result['member']	=  $check_member;
		header('Content-type: application/json');
		echo die(json_encode($result));
	
	}
	
	function upload_photo_profile($member_code)
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		if(!$member_code)
		{
			$result['message']	= 'Failed, Member Code is empty`..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$files			= $_FILES;
		if(!$files)
		{
			$result['message']	= 'Failed, File Upload is empty`..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$id_user = $member_code; 
		$files = $_FILES; 
		$file_extension = '';
		$path = '';
		$resize_img = '';
		$inputimg = $files['t_img_file'];
		$filesize = $files['t_img_file']['size'];
		$name = $inputimg['name'];
		$data = array();
		$event_data = array();	
		if($name)
		{
			$name = strtolower($name);
			$tmp = explode(".", $name);
			$file_ext = end($tmp);
		// die('this line is swowing');
			$guid = getGUID();
			$uploadConfig = array();
			// $config['upload_path'] = './../file_storage/image/';
			// $config['upload_path'] = './files/';

			$uploadConfig['upload_path'] = '../file_storage/image/';
			
			// $config['upload_path'] = './files/';
			$target_folder = $uploadConfig['upload_path'];
			$uploadConfig['allowed_types'] = 'gif|jpg|png|jpeg';
			// $config['max_size']     = '100';
			// $config['max_width'] 	= '1024';
			// $config['max_height'] 	= '768';
			$uploadConfig['overwrite'] = TRUE;
			// $config['file_name'] 	= $this->input->post('testnama').'.'.$file_ext;
			$uploadConfig['file_name'] 	= $guid;
			
			$this->load->library('upload', $uploadConfig);
			$this->upload->initialize($uploadConfig);
			$sizes = array('100','200','500');
			if(!$this->upload->do_upload('t_img_file')) {
				$error = array('error' => $this->upload->display_errors());
				print_r($error);
				die;
			} else {
				$data = array('upload_data' => $this->upload->data());
				$this->load->library('image_lib');
				// print_r($data);
				foreach($sizes as $size)
				{
					$config = array();
					$config['image_library'] = 'gd2';
					$path = $data['upload_data']['full_path'];
					$config['source_image'] =  $path;
					$config['create_thumb'] = TRUE;
					$config['maintain_ratio'] = TRUE;
					$config['width']         = $size;
					$config['height']       = $size;
					// $config['new_image']= './files/'.$this->input->post('testnama').'_new.'.$file_ext;
					// $config['new_image']= $target_folder.'thumbnail_100x100/'.$guid;
					$config['new_image']= $uploadConfig['upload_path'].'thumbnail_'.$size.'x'.$size.'';
					$resize_img = $config['new_image'];
					$this->image_lib->clear();
					$this->image_lib->initialize($config);
					$this->image_lib->resize();
						
					$usefor = 3;
					if($size=='100')
					{
						$usefor	= 1;						
					}else if($size=='200')
					{
						$usefor	= 2;	
					}
					$file['UseFor']			= $usefor;
					$file['UsedFor']		= $usefor;
					$file['IdFileUpload'] 	= 0;
					$file['FileServerName'] = $guid;
					$file['FileType'] 		= $file_ext;
					$file['FilePath']		= $target_folder;
					$file['FileExt'] 		= $file_ext;
					$file['FileSize'] 		= $filesize;
					$file['IsImage'] 		= 1;
					$file['ImageWidth'] 	= $size;
					$file['ImageHeight'] 	= $size;
					$file['ImageType'] 		= '';
					$file['ImageSizeStr'] 	= '';
					$file['FileName'] 	    = $name;
					$file['UploadBy'] 	    = $id_user;
					// print_r($file);
					$save_file_upload = $this->file_upload_model->saveTo($file);
					// $save_file_upload		= $this->db->insert('public."fileUpload"',$file);
					// echo $this->db->last_query();
				}
					// echo "die no error";die;
				// delete_files($path);
				// unlink($path); 
			}
			$data['fidFileUpload'] = $id_user.'_new_thumb.'.$file_ext;
			$upload_image = $target_folder.$name.'.'.$file_ext;
			
			$this->file_upload_model->setProfile($guid,$id_user);	
			// INSERT OTP KE TABEL ACTIVITY LOG
			$data_log['MemberCode']	= $id_user;		
			$data_log['TabelName'] 	= 'fileUpload';
			$data_log['LogType'] 	= 'update photo profile';
			$data_log['Value'] 	    = $file['FileName'];
			
			$save = $this->activity_log_model->saveTo($data_log);		
			
			$result['statusCode']	= 1;
			$result['message']	= 'photo profile updated';
			$result['file']		= $file;
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
	}
	
}