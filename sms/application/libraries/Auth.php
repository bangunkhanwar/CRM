<?php if (!defined('BASEPATH')) exit('No direct script access allowed'); 

class Auth {

	var $CI = null;

	function __constructor()
	{
		$this->CI =& get_instance();
		$this->CI->load->database();
	}
	
	function do_login($login = NULL)
	{
		// A few safety checks
		// Our array has to be set

		if(!isset($login))
			return FALSE;
	
		//Our array has to have 2 values
		//No more, no less!
		if(count($login) != 2)
		return FALSE;
		
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
		$this->CI->db->from('msOperator');
		$this->CI->db->where('LoginName', $username);		
		$this->CI->db->where('LoginPass',$cPassGen);
		$date = date("Y").date("m").date("d");
		$this->CI->db->where('ExpiryDate >=', $date);
		$query = $this->CI->db->get();
		foreach ($query->result() as $row)
		{
			$id = $row->idMsOperator;
			$LoginName = $row->LoginName;
			$FullName = $row->FullName;
			$StoreCode = $row->StoreCode;
			$StoreCodeDefault = $row->StoreCodeDefault;
			if (!$StoreCodeDefault)
				$StoreCodeDefault = $StoreCode;
		}
		if ($query->num_rows() == 1)
		{
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
			$newdata['StoreCodeDefault']= $StoreCodeDefault;
			$newdata['LoggedIn']	= true;
			$newdata['Level']		= 1;
			
			// Our user exists, set session.
			$this->CI->session->set_userdata($newdata);	  
			
			//print_r($this->CI->session->all_userdata());
			//exit;
			
			return TRUE;
		}
		else 
		{
			// No existing user.
			return FALSE;
		}
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
