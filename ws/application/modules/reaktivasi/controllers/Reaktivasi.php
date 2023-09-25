<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Reaktivasi extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
		$this->load->model('master/activity_log_model');
		$this->load->model('master/customer_model');
	}
	
	public function index()
	{
		echo "reactivation";
		// password ictdevelopment2019
	}
	
	public function check_user_available()
	{
		$result = array();
		$result['statusCode']	= 0;
		
		// print_r($_POST);
		$user_input				=	$this->input->post('t_user_input');
		$birth_date				=	$this->input->post('t_birth_date');
		$password				=	$this->input->post('t_password');
		$phone					=	'';
		$email					=	'';
		$regtype				= 0; // jika 1 maka phone, 2 maka email , 3 membercode
		$get_phone_init			= '';
		
		$membercode				= '';
		
		if($password=='')
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
		
		if(is_numeric($user_input))
		{
			$regtype = 3;
			
			$get_phone_init		= substr($user_input,0,2);
			if(($get_phone_init == '08') || ($get_phone_init == '62'))
			{
				$regtype = 1;
			}
			$init_username = 'Fams';
		}
		
		if(filter_var($user_input, FILTER_VALIDATE_EMAIL)) // validasi format email
		{
			$regtype = 2;
			$email  = $user_input;
			$init_username = substr($email,0,strpos($email,'@'));
		}
		
		if($regtype==0)
		{
			$result['message']	= 'Email / Handphone format dosnt Match';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		// cek cek no email / hp
		
		$where_user = array();
		
		$where_user['( "MemberCode" = \''.$user_input.'\' OR "Handpone" = \''.$user_input.'\' OR "Email" = \''.$user_input.'\' )']	= null;
		$this->member_model->set_where($where_user);
		
		$user_list = $this->member_model->get_list();
		// print_r($user_list->row_array());
		$user_row = $user_list->row_array();
		$membercode	= $user_row['MemberCode'];
		if($user_list->num_rows() == 0)
		{
			// cek ke beon
			$where_user_beon = array();
			
			$where_user_beon['( "CustCode" = \''.$user_input.'\' OR "HP" = \''.$user_input.'\' OR "Email" = \''.$user_input.'\' )']	= null;
			
			$this->customer_model->set_where($where_user_beon);
			
			$user_list_beon = $this->customer_model->get_list();
			
			if($user_list_beon->num_rows() == 0)
			{
				$result['message']	= 'Member Not Found...!';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			
			$user_row_beon = $user_list_beon->row_array();
			
			$data_user_crm['fidMemberCategory']	= $user_row_beon['CustCatCode'];
			$data_user_crm['MemberCode']		= $user_row_beon['CustCode'];
			$data_user_crm['Name']				= $user_row_beon['Name'];
			$data_user_crm['Password']			= $user_row_beon['Password'];
			$data_user_crm['RegistrationDate']	= $user_row_beon['RegDate'];
			$data_user_crm['CityOfBirth']		= $user_row_beon['CityOfBirth'];
			$data_user_crm['DateOfBirth']		= $user_row_beon['DateOfBirth'];
			$data_user_crm['IdCardNumber']		= $user_row_beon['IDCardNum'];
			$data_user_crm['Address']			= $user_row_beon['Address'];
			$data_user_crm['RT']				= $user_row_beon['RT'];
			$data_user_crm['RW']				= $user_row_beon['RW'];
			$data_user_crm['PosCode']			= $user_row_beon['PosCode'];
			$data_user_crm['City']				= $user_row_beon['City'];
			$data_user_crm['Phone']				= $user_row_beon['Phone'];
			$data_user_crm['Handpone']			= $user_row_beon['HP'];
			$data_user_crm['Email']				= $user_row_beon['Email'];
			$data_user_crm['StoreCode']			= $user_row_beon['StoreCode'];
			$data_user_crm['ValidUntil']		= $user_row_beon['ValidUntil'];
			$data_user_crm['CreatedDate']		= $user_row_beon['CreateDate'];
			$data_user_crm['CreatedBy']			= $user_row_beon['CreateBy'];
			$data_user_crm['ModifiedDate']		= $user_row_beon['ModifDate'];
			$data_user_crm['ModifiedBy']		= $user_row_beon['ModifBy'];
			$data_user_crm['Sex']				= $user_row_beon['Sex'];
			$data_user_crm['Married']			= $user_row_beon['Married'];
			$data_user_crm['Barcode']			= $user_row_beon['BarCode'];
			$data_user_crm['LastUpdate']		= $user_row_beon['LastUpdate'];
			$data_user_crm['isActive']			= $user_row_beon['isActive'];

			$membercode	=  $user_row_beon['CustCode'];
			
			$save_user_crm = $this->member_model->save(array_filter($data_user_crm));
		}else{
			
				// cek ke beon
				$where_user_dob = array();
				
				$where_user_dob['( "CustCode" = \''.$membercode.'\')']	= null;
				
				$this->customer_model->set_where($where_user_dob);
				
				$user_list_dob = $this->customer_model->get_list();
				// echo ($this->customer_model->db->last_query());
				// (print_r($user_list_dob));
				// die;
				if($user_list_dob->num_rows() > 0)
				{
					// $result['message']	= 'Member Not Found...!';
					// header('Content-type: application/json');
					// echo die(json_encode($result));
					$user_get_dob = $user_list_dob->row_array();
				
					if($user_row['DateOfBirth'] != $user_get_dob['DateOfBirth'])
					{
						$data_update_dob['MemberCode']	= $user_get_dob['CustCode'];
						$data_update_dob['DateOfBirth'] = $user_get_dob['DateOfBirth'];				
						$save_user_dob = $this->member_model->save(array_filter($data_update_dob));
					}
				}
				
		}
		$update_member_pass = array();
		$update_member_pass['MemberCode']	=	$membercode;
		$update_member_pass['Password']		=	$cPassGen;
		
		$this->member_model->save($update_member_pass);
		
		$data_member = $this->member_model->get($membercode);
		
		$phone=$data_member['Handpone'];
		$email=$data_member['Email'];
		$name=$data_member['Name'];
		// print_r($data_member);die;
		
		// send otp & email 
		$sendVia = '';
		if($birth_date != getSQLDate($data_member['DateOfBirth']))
		{
			$result['message']	=  'Birth Date incorrect..!';
			// $result['message']	=  'verifikasi tanggal lahir salah!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		if($regtype==1)
		{
			$greet_status = $this->send_sms_greet($phone,$name);
			$sendVia = 'SMS';
		}
		
		if($regtype==2)
		{
			$greet_status = $this->send_email_greet($email,$name);
			$sendVia = 'Email';
		}
		
		if($regtype==3)
		{
			if($data_member['Handpone']!='')
			{
				$greet_status = $this->send_sms_greet($phone,$name);
			}
			
			if($data_member['Email']!='')
			{
				$greet_status = $this->send_email_greet($email,$name);
			}
			$sendVia = 'MemberCode';
		}
		
		
		// save log
		if($data_member)
		{
			$data_log['MemberCode']	= $membercode;		
			$data_log['TabelName'] 	= 'member';
			$data_log['LogType'] 	= 'reaktivasi';
			$data_log['Value'] 	    = '';
			$save_log = $this->activity_log_model->saveTo($data_log);
			point_first_login($membercode,$data_member['fidMemberCategory']); // 02 IS fidMemberCategory
			$result['statusCode']	= 1;
			$result['message']	=  'User Available..!';
			$result['member']	= $data_member;
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['message']	=  $sendVia.' send failed..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		// echo $init_username;
		// $result['message']	= 'user is phone number';
		// header('Content-type: application/json');
		// echo die(json_encode($result));
	}
	
	
	private function gen_membercode($txt='')
	{
		$tgl = strlen(date("d"))==1?'0'.date("d"):date("d");
		$bln = strlen(date("m"))==1?'0'.date("m"):date("m");
		$thn = date("y");
		$nourut = $txt.$thn.$bln.$tgl;
		$gdt_no = '';
		$no_last = $this->member_model->get_last($nourut);
		$no_next = 1;
		if ($no_last)
		{
			$no_next = $no_last['MemberCode']+1;
		}
		$gdt_no = $nourut.sprintf('%04s', $no_next);
		return $gdt_no;	
	}
	
	
	public function send_email_greet($user_mail,$name)
	{
		$sendto = $user_mail;
		if($sendto)
		{
			$email = $sendto;
		}
		$data = array();
		$data['subject'] = 'Welcome to elcorps lifestyle';
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
		$message = $this->load->view('reaktivasi/reaktivasi/email_greet',$data,TRUE);
		$this->email->subject($data['subject']);
        $this->email->message($message);
		// $this->email->send();
		if(!$this->email->send()){
			$this->result['field']='';
			$this->result['error']= 'Failed sent email !';
			$this->result['header']='error';
			$this->result['success']='';
			echo json_encode($this->result);
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
	
	function send_sms_greet($user_phone)
	{
		// $headers = array();
		// $headers['username'] 	= get_myconf('u_api');
		// $headers['password'] 	= get_myconf('p_api');
		// $headers['sender'] 		= 'MD Media';
		// $headers['message'] 	= 'Assalamualaikum Wr Wb, Terima kasih karena telah bergabung bersama ELCORPS Lifestyle. Dapatkan bonus elPoint dengan melengkapi data diri anda pada menu profile';
		// $headers['msisdn'] 		= $user_phone;
		// $headers['requestby'] 	= 'CRM Mobile Apps'; // departement or username
		// $headers['campaign'] 	= 'SMS Registrasi';
		
		// $url = get_myconf('url_api')."api/sms/send_sms";
		// $ch = curl_init();
		// curl_setopt($ch, CURLOPT_USERPWD, get_myconf('u_api').":".get_myconf('p_api')); //Your credentials goes here
		// curl_setopt($ch, CURLOPT_URL,$url);
		// curl_setopt($ch, CURLOPT_POST, 1);
		// curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($headers));

		// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

		// $server_output = curl_exec ($ch);
		// $result = json_decode($server_output,true);
		// curl_close ($ch);
		// return ($result['status']=='SUCCESS');
	}
	
	
}