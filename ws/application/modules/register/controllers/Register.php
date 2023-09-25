<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Register extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
		$this->load->model('master/activity_log_model');
		$this->load->model('master/points_model');
	}
	
	public function index()
	{
		echo "reg";
		// password ictdevelopment2019
	}
	
	public function create_member_crm()
	{
		$data = array();
		$this->load->model('master/store_beon_model');
		$this->load->model('master/customer_category_beon_model');
		
		$membercode = validate_input(
						$this->input->post('t_membercode')
						,array(
							'name'=>'member code',
							'required'=>false,
							'maxlength'=>11
						)
					);
		
		$action_insert = validate_input(
						$this->input->post('t_action_insert')
						,array(
							'name'=>'action',
							'required'=>false,
							'maxlength'=>11
						)
					);
		
		$action 		= $membercode?1:0;
		
		$action_txt		= $membercode?'update':'insert';
		
		$identifier	= validate_input(
							$this->input->post('t_identifier')
							,array(
								'name'=>'identifier',
								'required'=>true,
								'maxlength'=>20
							)
						);
						
		$member_category	= validate_input(
							$this->input->post('t_member_category')
							,array(
								'name'=>'member category',
								'required'=>$action?false:true,
								'maxlength'=>2
							)
						);
						
		$storecode = validate_input(
						$this->input->post('t_store_code')
						,array(
							'name'=>'Store code',
							'required'=>$action?false:true,
							'maxlength'=>4
						)
					);
					
		$idcardnumber = validate_input(
						$this->input->post('t_idcardnumber')
						,array(
							'name'=>'id card num',
							'required'=>false,
							'maxlength'=>20
						)
					);
					
		$name	= validate_input(
							$this->input->post('t_name')
							,array(
								'name'=>'Nama panggilan customer',
								'required'=>$action?false:true,
								'maxlength'=>99
							)
						);

		$fullname	= validate_input(
							$this->input->post('t_full_name')
							,array(
								'name'=>'Nama lengkap customer',
								'required'=>$action?false:true,
								'maxlength'=>150
							)
						);

		$password	= validate_input(
							$this->input->post('t_password')
							,array(
								'name'=>'Password',
								'required'=>false,
								'maxlength'=>30
							)
						);

		$created_by	= validate_input(
							$this->input->post('t_created_by')
							,array(
								'name'=>'Created By',
								'required'=>false,
								'maxlength'=>50
							)
						);
						
		$city_of_birth	= validate_input(
							$this->input->post('t_cityofbirth')
							,array(
								'name'=>'City of birth',
								'required'=>false,
								'maxlength'=>20
							)
						);

		$date_of_birth	= validate_input(
							$this->input->post('t_birth_date')
							,array(
								'name'=>'birth date',
								'required'=>$action?false:true,
								'type'=>'date'
							)
						);

		$rt	= validate_input(
							$this->input->post('t_rt')
							,array(
								'name'=>'RT',
								'required'=>false,
								'maxlength'=>4
							)
						);

		$rw	= validate_input(
							$this->input->post('t_rw')
							,array(
								'name'=>'RW',
								'required'=>false,
								'maxlength'=>4
							)
						);
						
		$village	= validate_input(
							$this->input->post('t_village')
							,array(
								'name'=>'Village',
								'required'=>false,
								'maxlength'=>100
							)
						);
						
		$district	= validate_input(
							$this->input->post('t_district')
							,array(
								'name'=>'District',
								'required'=>false,
								'maxlength'=>100
							)
						);
						
		$city	= validate_input(
							$this->input->post('t_city')
							,array(
								'name'=>'City',
								'required'=>false,
								'maxlength'=>100
							)
						);
						
		$provinces	= validate_input(
							$this->input->post('t_provinces')
							,array(
								'name'=>'Provinces',
								'required'=>false,
								'maxlength'=>100
							)
						);
						
		$address	= validate_input(
							$this->input->post('t_address')
							,array(
								'name'=>'Address',
								'required'=>false,
								'maxlength'=>200
							)
						);
						
		$poscode	= validate_input(
							$this->input->post('t_poscode')
							,array(
								'name'=>'PosCode',
								'required'=>false,
								'maxlength'=>6
							)
						);
						
		$phone	= validate_input(
							$this->input->post('t_phone')
							,array(
								'name'=>'Phone',
								'required'=>false,
								'maxlength'=>30
							)
						);

		$handpone	= validate_input(
							$this->input->post('t_handphone')
							,array(
								'name'=>'Handpone',
								'required'=>$action?false:true,
								'maxlength'=>30
							)
						);

		$email	= validate_input(
							$this->input->post('t_email')
							,array(
								'name'=>'Email',
								'required'=>false,
								'maxlength'=>40
							)
						);

		$sex	= validate_input(
							$this->input->post('t_gender')
							,array(
								'name'=>'Sex',
								'required'=>false,
								'default'=>0,
								'type'=>'int'
							)
						);

		$married	= validate_input(
							$this->input->post('t_married')
							,array(
								'name'=>'Married',
								'required'=>false,
								'default'=>0,
								'type'=>'int'
							)
						);

		$modifby	= validate_input(
							$this->input->post('t_modifby')
							,array(
								'name'=>'Modif By',
								'required'=>false,
								'maxlength'=>50
							)
						);

		$barcode	= validate_input(
							$this->input->post('t_barcode')
							,array(
								'name'=>'Barcode',
								'required'=>false,
								'maxlength'=>20
							)
						);

		$ismerchantpartner	= validate_input(
							$this->input->post('t_is_merchant_partner')
							,array(
								'name'=>'is merchant partner',
								'required'=>false,
								'default'=>0,
								'type'=>'int'
							)
						);

		$merchantpartnercode	= validate_input(
							$this->input->post('t_merchant_id')
							,array(
								'name'=>'Merchant Partner Code',
								'required'=>false,
								'maxlength'=>30
							)
						);

		$merchant_code	= validate_input(
							$this->input->post('t_merchant_code')
							,array(
								'name'=>'Member Code Merchant Partner',
								'required'=>false,
								'maxlength'=>30
							)
						);
		
		$date_valid_until	= validate_input(
							$this->input->post('t_validuntil')
							,array(
								'name'=>'valid until date',
								'required'=>false,
								'type'=>'date'
							)
						);
						
		$instagram	= validate_input(
							$this->input->post('t_instagram')
							,array(
								'name'=>'instagram',
								'required'=>false,
								'maxlength'=>100
							)
						);
		$facebook	= validate_input(
							$this->input->post('t_facebook')
							,array(
								'name'=>'facebook',
								'required'=>false,
								'maxlength'=>100
							)
						);
		$member_from	= validate_input(
							$this->input->post('t_member_from')
							,array(
								'name'=>'Member from',
								'required'=>false,
								'maxlength'=>100
							)
						);
		
		if($password)
		{
			$nChar = strlen($password)+1;
			$cPassGen = $password;
			$x = 1; 
			while($x <= $nChar) 
			{
				$cPassGen = md5($cPassGen);
				$x++;
			}
			$data['Password'] = $cPassGen;
		}
		
		
		if($action == 0)
		{
			$prefix 					= date('y').$member_category;
			$membercode					= $this->member_model->get_new_custcode($prefix);
			$data['RegistrationDate'] 	= date('Y-m-d H:i:s');
			$data['ValidUntil'] 		= date('Y-m-d', strtotime('+1 years'));
			$data['CreatedBy']	   		= $created_by;               
			$data['CreatedDate']	    = date("Y-m-d H:i:s");    
		}
		
		if($member_category)
		$data['fidMemberCategory'] 	= $member_category;
		if($storecode)
		$data['StoreCode'] 			= $storecode;
		$data						= remove_empty_array($data);
		$data['MemberCode'] 		= $membercode;
		$data['IdCardNumber'] 		= $idcardnumber;
		$data['Name'] 				= $name;
		$data['CityOfBirth'] 		= $city_of_birth;
		$data['DateOfBirth'] 		= ($date_of_birth);
		$data['Address'] 			= $address;
		$data['RT'] 				= $rt;
		$data['RW'] 				= $rw;
		$data['Village'] 			= $village;
		$data['District'] 			= $district;
		$data['City'] 				= $city;
		$data['Provinces'] 			= $provinces;
		$data['PosCode'] 			= $poscode;
		$data['Phone'] 				= $phone;
		$data['Handpone']			= $handpone;
		$data['Email'] 				= $email;
		$data['Sex'] 				= $sex;
		$data['Married'] 			= $married;
		$data['ModifiedBy'] 		= $modifby;
		$data['ModifiedDate'] 		= date('Y-m-d H:i:s');
		$data['LastUpdate'] 		= date('Y-m-d H:i:s');
		$data['Barcode'] 			= $barcode;
		$data['FullName'] 			= $fullname;
		$data['isMerchantPartner'] 	= $ismerchantpartner;
		$data['instagram'] 			= $instagram;
		$data['facebook'] 			= $facebook;
		$data['memberFrom'] 		= $member_from;
		$data['MerchantPartnerCode'] = '';
		$data['MemberCodeMerchantPartner'] = '';
		if($data['isMerchantPartner']){
			$data['MerchantPartnerCode'] 		= $merchantpartnercode;
			$data['MemberCodeMerchantPartner'] 	= $merchant_code;
			if($data['MerchantPartnerCode']=='')
			{
				$this->error('Choose Merchant first ..!');
			}
			if($data['MemberCodeMerchantPartner']=='')
			{
				$this->error('Merchant Code is empty..!');
			}
		}
		
		if(isset($data['StoreCode']))
		{
			$store 			= $this->store_beon_model->get($data['StoreCode']);
			if($store['StoreCode']=='')
			{
				$this->error('Store code '.$data['StoreCode'].' not found');
			}
		}
		if(isset($data['fidMemberCategory']))
		{
			$cust_category 	= $this->customer_category_beon_model->get($data['fidMemberCategory']);
			if($cust_category['CatCode']=='')
			{
				$this->error('customer category '.$data['fidMemberCategory'].' not found');
			}
		}
		if($data['Handpone'])
		{
			if($action == 0)
			{
				$check_member = $this->member_model->get(array('Handpone'=>$data['Handpone']));
				if($check_member['MemberCode']!='')
				{
					$this->error('Phone Number Already Used by : '.$check_member['MemberCode'].' '.$check_member['Name']);
				}
				$data['OTP'] 	= mt_rand(100000, 999999);
			}else{
				$check_member = $this->member_model->get($data['MemberCode']);
				if($check_member['MemberCode'] == '')
				{
					$this->error('Member with code '.$data['MemberCode'].' not found');
				}
				
				$wer = array();
				$wer['Handpone']	=	$data['Handpone'];
				$wer['"MemberCode"!= \''.$data['MemberCode'].'\'']	= null;
				$get_local_member = $this->member_model->get($wer);
				if($get_local_member['MemberCode']!='')
				{
					$this->error('Phone Number Already Used by : '.$get_local_member['MemberCode'].' '.$get_local_member['Name']);
				}
			}
		}
		
		// $action = 0 : insert , 1 : update
		// $action_insert = 1 : insert
		// prevent replace existing member 
		if( $action_insert )
		{
			$check_user = $this->member_model->get(array('MemberCode'=>$data['MemberCode']));
			
			if($check_user['MemberCode'])
			$this->error('Kode member '.$data['MemberCode'].' sudah terpakai ');
		
		}
		
		$this->db->trans_start();
		
		$save = $this->member_model->save($data);
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			// save log 
			if($action==0)
			{
				$logvalue = '';
				foreach ($data as $key => $value)
				{
					$logvalue .= $key.'=>'.$value.';';
				}
				$data_log['MemberCode']	= $data['MemberCode'];
				$data_log['TabelName'] 	= 'Member';
				$data_log['LogType'] 	= 'registrasi account ('.$identifier.')';
				$data_log['Value'] 	    = $logvalue;
				// $data_log['Value'] 	    = array_to_string($data);
				$data_log['fidActivityLogType'] = 1;
				
				$save_log = $this->activity_log_model->saveTo($data_log);
			}
			
			$this->db->trans_commit();
			$this->result['action']			= $action_txt;
			$this->result['action_code']	= $action;
			$this->result['data_save']		= $data;
			$this->success('Save Data Success');
		}
	}
	
	public function register_user()
	{
		$result = array();
		$result['statusCode']	= 0;
		
		// print_r($_POST);
		$user_email_handphone	=	$this->input->post('t_email_handphone');
		$password				=	$this->input->post('t_password');
		$nama					=	$this->input->post('t_name');
		// $device_token			=	$this->input->post('t_device_token');
		$phone					=	'';
		$email					=	'';
		$regtype				= 0; // jika 1 maka phone, 2 maka email
		
		$date_of_birth	= validate_input(
			$this->input->post('t_birth_date')
			,array(
				'name'=>'birth date',
				'required'=>false,
				'type'=>'date'
			)
		);
						
		$identifier	= validate_input(
			$this->input->post('t_identifier')?:'ElcorpsLifestyle'
			,array(
				'name'=>'identifier',
				'required'=>false,
				'maxlength'=>20
			)
		);	
		$device_token	= validate_input(
			$this->input->post('t_device_token')
			,array(
				'name'=>'identifier',
				'required'=>false,
				'maxlength'=>1000
			)
		);
						
		if(is_numeric($user_email_handphone))
		{
			$regtype = 1;
			$init_username = 'Fams';
		}
		
		if(filter_var($user_email_handphone, FILTER_VALIDATE_EMAIL)) // validasi format email
		{
			$regtype = 2;
			$email  = $user_email_handphone;
			$init_username = substr($email,0,strpos($email,'@'));
		}
		
		if($regtype==0)
		{
			$result['message']	= 'Email / Handphone format dosnt Match';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		// cek cek no email / hp
		
		if($regtype==1)
		{
			$check_member = $this->member_model->get(array('Handpone'=>$user_email_handphone));
			if($check_member['MemberCode']!='')
			{
				$result['message']	= 'Phone Number Already Used';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			$phone  = $user_email_handphone;
		}
		if($regtype==2)
		{
			$check_member = $this->member_model->get(array('Email'=>$user_email_handphone));
			if($check_member['Email']!='')
			{
				$result['message']	= 'Email Already Used';
				header('Content-type: application/json');
				echo die(json_encode($result));
			}
			$email  = $user_email_handphone;
		}
				
		$prefix 					= date('y').'02';
		$membercode					= $this->member_model->get_new_custcode($prefix);
		// $membercode = $this->gen_membercode('');
		
		$registdate = date('Y-m-d');
		$barcode = $membercode;
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		}
		$otp_registrasi = mt_rand(100000, 999999);
		// save data member
		$datamember = array();
		if($date_of_birth)
		$datamember['DateOfBirth'] 		= getSQLDate($date_of_birth);
		$datamember['MemberCode']		= $membercode;
		$datamember['Name']				= $nama;
		$datamember['Email']			= $email;
		$datamember['Handpone']			= $phone;
		$datamember['Password']			= $cPassGen;
		$datamember['RegistrationDate']	= $registdate;
		$datamember['CreatedBy']	    = $identifier;
		$datamember['DeviceToken']	    = $device_token;
		if($regtype==1)                   
			$datamember['OTP']				= $otp_registrasi;
			$datamember['fidMemberCategory']= '02';
			$datamember['StoreCode']		= 'ZHO';
			
			$save_member	=	$this->member_model->save($datamember);
		
		
		// send otp & email 
		$sendVia = '';
		if($save_member)
		{
			if($regtype==1)
			{
				$greet_status = $this->send_sms_greet($phone,$otp_registrasi);
				$sendVia = 'SMS';
			}
			
			if($regtype==2)
			{
				$greet_status = $this->send_email_greet($email);
				$sendVia = 'Email';
			}
		}
		
		// save log
		if($save_member)
		{
			$logvalue = '';
			foreach ($datamember as $key => $value)
			{
				$logvalue .= $key.'=>'.$value.';';
			}
			$data_log['MemberCode']	= $membercode;		
			$data_log['TabelName'] 	= 'member';
			$data_log['LogType'] 	= 'registrasi account ('.$identifier.')';
			$data_log['Value'] 	    = $logvalue;
			$save_log = $this->activity_log_model->saveTo($data_log);
			point_first_login($membercode,$datamember['fidMemberCategory']); // 02 IS fidMemberCategory
			
			$where = array();
			$where['("Email" = \''.$user_email_handphone.'\'
			 OR "MemberCode" = \''.$user_email_handphone.'\'
			 OR "Handpone" = \''.$user_email_handphone.'\')
			 ']= null;
			// $where['Password']		= $cPassGen;
			
			// $where['"ExpiryDate" >= '.$date.'']	=  null;
			// $this->member_model->set_where($where);
			$opr = $this->member_model->get($where);
			
			
			$result['statusCode']	= 1;
			$result['message']	=  'Registration Success..!';
			$result['member']	=  $opr ;
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['message']	=  $sendVia.' send failed..!';
			header('Content-type: application/json');
			
			//GET POINT FIRST LOGIN
			echo die(json_encode($result));
		}
		
		// echo $init_username;
		// $result['message']	= 'user is phone number';
		// header('Content-type: application/json');
		// echo die(json_encode($result));
	}
	
	public function tester()
	{
		echo getSQLDate($this->input->post('date'));
	}
	
	public function register_user_bepos()
	{
		$datamember = array();
		$result 	= array();
		$result['statusCode']	= 0;
		
		// print_r($_POST);
		
		$phone					=	$this->input->post('Handpone');
		$email					=	$this->input->post('Email');
		$name					=	$this->input->post('Name');
		$storecode				=	$this->input->post('StoreCode');
		$password				=	$phone;
		$address				=	$this->input->post('Address');
		$regtype				= 	1; // jika 1 maka phone, 2 maka email
		$memberFrom				= 	$this->input->post('memberFrom');
		$PosCode				= 	$this->input->post('PosCode');
		$City					= 	$this->input->post('City');
		$member_category		=	'02';
		
		if(!$phone)
		{
			echo die('FAILED#Handpone is empty');
		}
		
		if(!$storecode)
		{
			echo die('FAILED#StoreCode is empty');
		}
		
		if(!$name)
		{
			echo die('FAILED#Name is empty');
		}
		
		if(!$address)
		{
			echo die('FAILED#Address is empty');
		}
		
		if(!$memberFrom)
		{
			echo die('FAILED#memberFrom is empty');
		}
		
		if(!$PosCode)
		{
			echo die('FAILED#PosCode is empty');
		}
		
		if(!$City)
		{
			echo die('FAILED#City is empty');
		}
		
		if(!is_numeric($phone))
		{
			echo die('FAILED#Invalid Phone format');
		}
		
		if(!is_numeric($PosCode))
		{
			echo die('FAILED#Invalid PosCode format');
		}
		
		$check_member = $this->member_model->get(array('Handpone'=>$phone));
		if($check_member['MemberCode']!='')
		{
			echo die('FAILED#Phone Number Already Used by member ['.$check_member['MemberCode'].':'.$check_member['Name'].']');
		}
		
		$prefix 					= date('y').$member_category;
		$membercode					= $this->member_model->get_new_custcode($prefix);
		// $membercode = $this->member_model->get_last_custcode($storecode,$member_category);
		
		$registdate = date('Y-m-d');
		$barcode = $membercode;
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		}
		$otp_registrasi = mt_rand(100000, 999999);
		// save data member
		$datamember	= $this->input->post();
		$datamember['MemberCode']		= $membercode;
		$datamember['Name']				= $name;
		$datamember['FullName']			= $this->input->post('FullName')?:$name;
		$datamember['Email']			= $email;
		$datamember['Handpone']			= $phone;
		$datamember['Password']			= $cPassGen;
		$datamember['RegistrationDate']	= $registdate;
		$datamember['CreatedBy']	    = 'bePOS';               
		$datamember['CreatedDate']	    = date("Y-m-d H:i:s");               
		$datamember['LastUpdate']	    = date("Y-m-d H:i:s");               
		$datamember['ValidUntil']	    = date('Y-m-d', strtotime('+1 years'));;               
		$datamember['OTP']				= $otp_registrasi;
		$datamember['fidMemberCategory']= $member_category;
		$datamember['StoreCode']		= $storecode;
		
		$save_member	=	$this->member_model->save($datamember);
		
		// save log
		if($save_member)
		{
			$logvalue = '';
			foreach ($datamember as $key => $value)
			{
				$logvalue .= $key.'=>'.$value.';';
			}
			$data_log['MemberCode']			= $membercode;		
			$data_log['TabelName'] 			= 'member';
			$data_log['LogType'] 			= 'registrasi account (bepos)';
			$data_log['fidActivityLogType'] = 1;
			$data_log['Value'] 	    		= $logvalue;
			$save_log = $this->activity_log_model->saveTo($data_log);
			point_first_login($membercode,$member_category); // 02 IS fidMemberCategory
			echo 'SUCCES#['.$membercode.':'.$name.'], Registration Success..!';
		}else{
			echo die('FAILED#Create member failed..!');
		}
	}
	
	private function old_gen_membercode($txt='')
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
		
	private function gen_membercode($txt='')
	{	
		$init_num = 00; // DIGIT 1,2   -> Init Number (2 digit)
		$thn = date("y"); // DIGIT 3,4 -> Tahun (2 digit)
		$custcatcode = '2'; // DIGIT 5 -> Member (1 Digit)
		$random_digit = mt_rand(100000, 999999); // DIGIT 6 - 11 DIGIT RANDOM
		$gen_no = $init_num.$thn.$custcatcode.$random_digit;
		return $gen_no;	
	}

	
	public function send_email_greet($user_mail)
	{
		// $email = '';
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
		$data['subject'] = 'Member Registration';
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
		$message = $this->load->view('register/register/email_greet',$data,TRUE);
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
	
	function send_sms_greet($user_phone,$otp)
	{
		$headers = array();
		$headers['username'] 	= get_myconf('u_api');
		$headers['password'] 	= get_myconf('p_api');
		$headers['sender'] 		= 'MD Media';
		$headers['message'] 	= 'Assalamualaikum Wr Wb,Terima kasih karena telah bergabung bersama ELCORPS Lifestyle. Dapatkan bonus elPoint dengan melengkapi data diri anda pada menu profile';
		$headers['msisdn'] 		= $user_phone;
		$headers['requestby'] 	= 'CRM Mobile Apps'; // departement or username
		$headers['campaign'] 	= 'SMS Registrasi';
		
		// print_r($headers);
		// die;
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
		$result = json_decode($server_output,true);
		// die(print_r($result));
		curl_close ($ch);
		return ($result['status']=='SUCCESS');
	}
	
	
	
	
}