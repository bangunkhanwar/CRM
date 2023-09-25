<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {

	var $CI = null;

	function __construct()
	{
		$this->CI =& get_instance();
		$this->CI->load->database();
	}
	
	function do_login($login = NULL)
	{
		// A few safety checks
		// Our array has to be set
		$result = array();
		
		$result['status'] 	= 0;
		$result['error'] 	= 'Username atau password anda salah';

		if(!isset($login))
		{
			$result['error'] 	= '';
			return $result;
		}
	
		//Our array has to have 2 values
		//No more, no less!
		if(count($login) != 2)
		{
			$result['error'] 	= 'ditemukan 2 akun';
			return $result;
		}
		
		$username = $login['username'];
		$password = $login['password'];
		$nChar = strlen($password)+1;
		$cPassGen = $password;
		$x = 1; 
		while($x <= $nChar) 
		{
			$cPassGen = md5($cPassGen);
			$x++;
		} 
		$this->CI->db->from('admpanel.msOperator');
		$this->CI->db->where('LoginName', $username);		
		$this->CI->db->where('LoginPass',$cPassGen);
		$date = date("Y").date("m").date("d");
		// $this->CI->db->where('ExpiryDate >=', $date);
		$query = $this->CI->db->get();
		foreach ($query->result() as $row)
		{
			$id = $row->idMsOperator;
			$LoginName = $row->LoginName;
			$FullName = $row->FullName;
			$StoreCode = $row->StoreCode;
			$Address = $row->Address;
			$isActive = $row->isActive;
			$fidDashboard = $row->fidDashboard;
			$isSuperUser = $row->isSuperUser;
			$ExpiryDate = $row->ExpiryDate;
		}
		if ($query->num_rows() == 1)
		{
			
			$date_expiry = new DateTime($ExpiryDate);
			$date_now = new DateTime(date('Y-m-d H:i:s'));
			
			if($date_expiry < $date_now)
			{
				$result['error'] 	= 'Akun telah Expired';
				return $result;
			}
			// create log
			$data_log['value_before'] ='';
			$data_log['log_type'] = $username.' login';
			$data_log['ip_comp'] = $this->CI->input->ip_address();
			$data_log['fid_operator'] = $id;
			$data_log['table_name'] = '';
			$data_log['fid_data'] = 0;
			// $log = $this->CI->db->insert('tr_log', $data_log);
			// start session
			$newdata['idMsOperator']	= $id;
			$newdata['LoginName']	= $LoginName;
			$newdata['FullName']	= $FullName;
			$newdata['StoreCode']	= $StoreCode;
			$newdata['Address']		= $Address;
			$newdata['LoggedIn']	= true;
			$newdata['Level']		= 1;
			$newdata['fidDashboard']= $fidDashboard;
			$newdata['isSuperUser']= $isSuperUser;
			
			$this->CI->db->from('admpanel.AppMenus');
			$this->CI->db->where('idAppMenu', $fidDashboard);
			$get_menu_app = $this->CI->db->get();
			$default_url  = 'dashboard/member';
			foreach ($get_menu_app->result() as $mapp)
			{
				$default_url = $mapp->Url;
			}
			$newdata['default_url']	= $default_url;
			// print_r($default_menu);die;
			// Our user exists, set session.
			$this->CI->session->set_userdata($newdata);	  
			
			//print_r($this->CI->session->all_userdata());
			//exit;
			
			$result['status'] = 1;
		}
		return $result;
	}
 
	 /**
         *
         * This function restricts users from certain pages.
         * use restrict(TRUE) if a user can't access a page when logged in
         *
         * @access	public
         * @param	boolean	wether the page is viewable when logged in
         * @return	void
         */	
    	function restrict($logged_out = FALSE)
    	{
		// If the user is logged in and he's trying to access a page
		// he's not allowed to see when logged in,
		// redirect him to the index!
		if ($logged_out && is_logged_in())
		{
		      redirect('');
			  exit;
			  //echo $this->CI->fungsi->warning('Maaf, sepertinya Anda sudah login...',site_url());
		      //die();
		}
		
		// If the user isn' logged in and he's trying to access a page
		// he's not allowed to see when logged out,
		// redirect him to the login page!
		if ( ! $logged_out && !is_logged_in()) 
		{
		      echo $this->CI->fungsi->warning('Anda diharuskan untuk Login bila ingin mengakses halaman ini.',site_url());
		      die();
		}
	}
	
	function logout() 
	{
		$this->CI->session->sess_destroy();	
		return TRUE;
	}
	
	function cek($id,$ret=false)
	{
		$menu = array(
			'data_master'=>'+admin+',
			'manajemen_user'=>'+admin+'
		);
		$allowed = explode('+',$menu[$id]);
		if(!in_array(from_session('level'),$allowed))
		{
			if($ret) return false;
			echo $this->CI->fungsi->warning('Anda tidak diijinkan mengakses halaman ini.',site_url());
			die();
		}
		else
		{
			if($ret) return true;
		}
	}	
}
// End of library class
// Location: system/application/libraries/Auth.php
