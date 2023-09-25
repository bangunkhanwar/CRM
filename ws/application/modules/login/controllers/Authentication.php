<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Authentication extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('master/member_model','customer_model');
		$this->load->model('master/member_device_model');
		$this->load->model('master/activity_log_model');	
		$this->load->model('master/store_model');
		$this->load->model('master/customer_category_model');
		$this->load->model('master/member_address_model');
		$this->load->model('master/points_model');
	}
	
	public function index()
	{
		 $this->success("CI v".CI_VERSION);
	}
	
	public function getUser()
	{
		$this->db->trans_start();
		$result = array();
		$request = $_REQUEST;
		$username		= isset($request['username'])?$request['username']:'';
		$password	= isset($request['password'])?$request['password']:'';
		$devicetoken	= isset($request['devicetoken'])?$request['devicetoken']:'';
		$brand	= isset($request['brand'])?$request['brand']:'';
		$member_code	= '';
		$username = validate_input(
					$username
					,array(
						'name'=>'username',
						'required'=>true
					)
				);
				
		$devicetoken = validate_input(
					$devicetoken
					,array(
						'name'=>'devicetoken',
						'required'=>false
					)
				);
				
		$password = validate_input(
					$password
					,array(
						'name'=>'password',
						'required'=>true
					)
				);
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		}
		
		// $nik = str_replace(".", "", $username);
		
		// $where_karyawan = array();
		// $where_karyawan['("MemberCode" = \''.$nik.'\' AND "fidMemberCategory" = \'05\')'] = null;
		// $where_karyawan['Password']		= $cPassGen;
	
		// $get_karyawan = $this->customer_model->get($where_karyawan);
		// echo $this->db->last_query();
		// if($get_karyawan['MemberCode'])
		// {
			// point_first_login($get_karyawan['MemberCode'],$get_karyawan['fidMemberCategory']);
		
			// $store_opr = $this->store_model->get($get_karyawan['StoreCode']);
			// $member_cat	= $this->customer_category_model->get($get_karyawan['fidMemberCategory']);
			
			// $where_m_address = array();
			// $where_m_address['MemberCode']	= $get_karyawan['MemberCode'];
			// $memberAddres = $this->member_address_model->get($where_m_address);
			
			// $res['custcode'] 				= $get_karyawan['MemberCode'];
			// $member_code					= $get_karyawan['MemberCode'];
			// $res['receivename'] 			= $memberAddres['RecipientName'];
			// $res['phone_address'] 			= $memberAddres['Phone'];
			// $res['idmemberaddress'] 		= $memberAddres['idMemberAddress'];
			// $res['receive_address'] 		= $memberAddres['Address'];
			
			// $res['name'] 					= $get_karyawan['Name'];
			// $res['idcard'] 					= $get_karyawan['IdCardNumber'];
			// $res['store']['storecode']		= $get_karyawan['StoreCode'];
			// $res['store']['name']			= $store_opr['Description'];
			// $res['category']['code']		= $get_karyawan['fidMemberCategory'];
			// $res['category']['name']		= $member_cat['Description'];
			// $res['sex']['id']				= $get_karyawan['Sex'];
			// $res['sex']['name']				= ($get_karyawan['Sex']==1)?'pria':'wanita';
			// $res['regdate']					= $get_karyawan['RegistrationDate'];
			// $res['cityofbirth']				= $get_karyawan['CityOfBirth'];
			// $res['dateofbirth']				= $get_karyawan['DateOfBirth'];
			// $res['address']					= $get_karyawan['Address'];
			// $res['phone']					= $get_karyawan['Handpone'];
			// $res['email']					= $get_karyawan['Email'];
			// $res['barcode']					= $get_karyawan['Barcode'];
			// $res['profile_pic']				= getProfileImageMobile($get_karyawan['MemberCode'],1);
			// $this->result['member']			= $res;
			
			// if($get_karyawan['FirstLoginApps']=='')
			// {
				// $data_opr = array();
				// $data_opr['MemberCode']		= $get_karyawan['MemberCode'];
				// $data_opr['FirstLoginApps']	= date('Ymd H:i:s');
				
				// $save_opr = $this->customer_model->save($data_opr);
			// }
		// }
		// else{
			 // 0811 239 345
			$username = str_replace(" ","",$username);
			 //(0274) 778787
			$username = str_replace("(","",$username);
			 // 0274) 778787
			$username = str_replace(")","",$username);
			 // 0811.239.345
			$username = str_replace(".","",$username);
			
			$username = str_replace("+62","0",$username);
			
			$date = date("Y").date("m").date("d");
			$where = array();
			$where['(replace("Email", \'.\', \'\') = \''.$username.'\'
			 OR replace("MemberCode", \'.\', \'\') = \''.$username.'\'
			 OR replace("Handpone", \'.\', \'\') = \''.$username.'\')
			 ']= null;
			$where['Password']		= $cPassGen;
			$opr = $this->customer_model->get($where);
			// echo $this->db->last_query();die;
			// print_r($opr);
			$res = array();
			if($opr['MemberCode'])
			{
				$store_opr = $this->store_model->get($opr['StoreCode']);
				$member_cat	= $this->customer_category_model->get($opr['fidMemberCategory']);
				point_first_login($opr['MemberCode'],$opr['fidMemberCategory']);
				
				$where_m_address = array();
				$where_m_address['MemberCode']	= $opr['MemberCode'];
				$memberAddres = $this->member_address_model->get($where_m_address);
				
				$res['custcode'] 				= $opr['MemberCode'];
				$member_code					= $opr['MemberCode'];
				$res['receivename'] 			= $memberAddres['RecipientName'];
				$res['phone_address'] 			= $memberAddres['Phone'];
				$res['idmemberaddress'] 		= $memberAddres['idMemberAddress'];
				$res['receive_address'] 		= $memberAddres['Address'];
				
				$res['name'] 					= $opr['Name'];
				$res['idcard'] 					= $opr['IdCardNumber'];
				$res['store']['storecode']		= $opr['StoreCode'];
				$res['store']['name']			= $store_opr['Description'];
				$res['category']['code']		= $opr['fidMemberCategory'];
				$res['category']['name']		= $member_cat['Description'];
				$res['sex']['id']				= $opr['Sex'];
				$res['sex']['name']				= ($opr['Sex']==1)?'pria':'wanita';
				$res['regdate']					= $opr['RegistrationDate'];
				$res['cityofbirth']				= $opr['CityOfBirth'];
				$res['dateofbirth']				= $opr['DateOfBirth'];
				$res['address']					= $opr['Address'];
				$res['phone']					= $opr['Handpone'];
				$res['email']					= $opr['Email'];
				$res['barcode']					= $opr['Barcode'];
				$res['profile_pic']				= getProfileImageMobile($opr['MemberCode'],1);
				$this->result['member']			= $res;
				
				if($opr['FirstLoginApps']=='')
				{
					$data_opr = array();
					$data_opr['MemberCode']		= $opr['MemberCode'];
					$data_opr['FirstLoginApps']	= date('Ymd H:i:s');
					
					$save_opr = $this->customer_model->save($data_opr);
				}
			}else
			{
				$this->error('Username or Password Invalid !');
			}
		// }
		$data_token = array();
		$data_token['MemberCode']	= $member_code;
		$data_token['DeviceToken']	= $devicetoken;
		$data_token['isLogin']	= 1;
		$save_device_token = $this->customer_model->save($data_token);
		
		// untuk multiple device
		if($brand)
		{
			$data_member_device = array();
			$data_member_device['DeviceToken'] 	= $devicetoken;
			$data_member_device['MemberCode'] 	= $member_code;
			$data_member_device['brand'] 		= $brand;
			$data_member_device['isLogin'] 		= 1;
			$data_member_device['lastUpdate']	= date('Ymd H:i:s');
			
			$save_member_device = $this->member_device_model->save($data_member_device);
		}
		
		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		} else {
			$this->db->trans_commit();
			$this->success('Login Success');
		}
	}
	
	public function logoutUser()
	{
		$result  = array();
		$request = $_REQUEST;
		$membercode		= isset($request['membercode'])?$request['membercode']:'';
		$devicetoken	= isset($request['devicetoken'])?$request['devicetoken']:'';
		$brand			= isset($request['brand'])?$request['brand']:'';
		
		$membercode = validate_input(
					$membercode
					,array(
						'name'=>'membercode',
						'required'=>true
					)
				);
		$data_token = array();
		$data_token['MemberCode']	= $membercode;
		$data_token['isLogin']	= 0;
		$save_device_token = $this->customer_model->save($data_token);
		
		// untuk multiple device
		if($brand)
		{
			$data_member_device = array();
			$data_member_device['DeviceToken'] 	= $devicetoken;
			$data_member_device['MemberCode'] 	= $membercode;
			$data_member_device['brand'] 		= $brand;
			$data_member_device['isLogin'] 		= 0;
			$data_member_device['lastUpdate']	= date('Ymd H:i:s');
			
			$save_member_device = $this->member_device_model->save($data_member_device);
		}
		// echo $this->customer_model->db->last_query();
		$this->success('Logout Success');
	}
	
	public function getProfileDetail()
	{
		$this->db->trans_start();
		$result  = array();
		$request = $_REQUEST;
		$membercode		= isset($request['membercode'])?$request['membercode']:'';
		
		$membercode = validate_input(
					$membercode
					,array(
						'name'=>'membercode',
						'required'=>true
					)
				);
		$where_karyawan = array();
		$where_karyawan['MemberCode']= $membercode;	
		$get_karyawan = $this->customer_model->get($where_karyawan);
		$store_opr = $this->store_model->get($get_karyawan['StoreCode']);
		$member_cat	= $this->customer_category_model->get($get_karyawan['fidMemberCategory']);

			
			$res['custcode'] 				= $get_karyawan['MemberCode'];
			$res['name'] 					= $get_karyawan['Name'];
			$res['idcard'] 					= $get_karyawan['IdCardNumber'];
			$res['store']['storecode']		= $get_karyawan['StoreCode'];
			$res['store']['name']			= $store_opr['Description'];
			$res['category']['code']		= $get_karyawan['fidMemberCategory'];
			$res['category']['name']		= $member_cat['Description'];
			$res['sex']['id']				= $get_karyawan['Sex'];
			$res['sex']['name']				= ($get_karyawan['Sex']==1)?'pria':'wanita';
			$res['regdate']					= $get_karyawan['RegistrationDate'];
			$res['cityofbirth']				= $get_karyawan['CityOfBirth'];
			$res['dateofbirth']				= $get_karyawan['DateOfBirth'];
			$res['address']					= $get_karyawan['Address'];
			$res['phone']					= $get_karyawan['Handpone'];
			$res['email']					= $get_karyawan['Email'];
			$res['barcode']					= $get_karyawan['Barcode'];
			$res['profile_pic']				= getProfileImageMobile($get_karyawan['MemberCode'],1);
			$this->result['member']			= $res;
				
				

		$tahun = date('Y');
		$bulan = date('n');
		$this->points_model->posting($sales['CustCode'],$tahun,$bulan);
		$result['member']	= $get_karyawan;
		// $this->result['row']	= $result;

		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		} else {
			$this->db->trans_commit();
			$this->success('Load Success');
		}
	}
	
	public function updatePassword()
	{
		$result = array();
		
		$request = $_REQUEST;
		$username		= isset($request['username'])?$request['username']:'';
		$password	= isset($request['password'])?$request['password']:'';
		
		
		$username = validate_input(
					$username
					,array(
						'name'=>'username',
						'required'=>true
					)
				);
				
		$password = validate_input(
					$password
					,array(
						'name'=>'password',
						'required'=>true
					)
				);
				
		$where = array();
		$where['("Email" = \''.$username.'\'
		 OR "MemberCode" = \''.$username.'\'
		 OR "Handpone" = \''.$username.'\')']= null;
		
		$opr = $this->customer_model->get($where);
		
		if($opr['MemberCode']=='')
		{
			$this->error('Member Not Found..!');
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
		$save = $this->customer_model->save($data);
		
		$this->result['operator'] = $opr;
		if($save)
		{
			$this->success('Update Password Success..!');
		}else{
			$this->error('Update password failed..!');
		}
	}
	
	public function change_password()
	{
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		
		$request = $_REQUEST;
		$username		= isset($request['username'])?$request['username']:'';
		$password_old	= isset($request['old_password'])?$request['old_password']:'';
		$password_new	= isset($request['new_password'])?$request['new_password']:'';
		
		
		$username = validate_input(
					$username
					,array(
						'name'=>'username',
						'required'=>true
					)
				);
				
		$password_new = validate_input(
					$password_new
					,array(
						'name'=>'new password',
						'required'=>true
					)
				);
				
		$password_old = validate_input(
					$password_old
					,array(
						'name'=>'old password',
						'required'=>true
					)
				);				
		
		$where = array();
		$where['("Email" = \''.$username.'\'
		 OR "MemberCode" = \''.$username.'\'
		 OR "Handpone" = \''.$username.'\')']= null;
		
		$opr = $this->customer_model->get($where);
		
		if($opr['MemberCode']=='')
		{
			$this->error('Member Not Found..!');
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
			$this->error('Incorrect old password..!');
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
		$save = $this->customer_model->save($data);
		
		if($save)
		{
			$this->success('Change Password Success..!');
		}else{
			$this->error('Change password failed..!');
		}
	}
}