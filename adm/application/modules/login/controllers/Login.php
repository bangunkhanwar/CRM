<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Login extends CI_Controller {

	var	$modulname = 'login';
	var	$classname = 'Login';
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
	   	if (is_logged_in())
		{
			redirect(base_url());
		}else
		{
			$this->load->view('main_login');
		}
		 // $this->input();
	}
	
	function signin()
	{
		// print_r($_POST);
		//$ip = $this->input->post('ip_client');
		//$comp = $this->computer_model->ip_check($ip);
		$comp['allow_access'] = true;
		if (!$comp['allow_access'])
		{
			$result['error'] = 'Check Jaringan Anda';
			echo json_encode($result);			
		}else
		{
			$error = '';
			$data['username'] = $this->input->post('t_username');
			$data['password'] = $this->input->post('t_password');
			
			if (!$data['username'])
				$error .= 'Username tidak boleh kosong, ';
			if (!$data['password'])
				$error .= 'Password belum diisi, ';
			if (!$error)
			{
				$this->load->library('auth');
				$return = $this->auth->do_login($data);
				// echo $this->db->last_query(); 
				// die;
				if($return['status'])
				{
					$error = '';
				}else
				{
					$error = $return['error'];
				}
			}
			$result['url'] = $this->session->userdata('default_url');
			$result['error'] = $error;
			echo json_encode($result);
		}
	}
	
	function signout()
	{
		$this->auth->logout();
		redirect(site_url());
	}
	
	function register()
	{
	   	if (is_logged_in())
		{
			redirect(base_url());
		}else
		{
			$this->load->view('main_register');
		}
	}
	
	function recover()
	{
	   	if (is_logged_in())
		{
			redirect(base_url());
		}else
		{
			$this->load->view('main_recover');
		}
	}
	
	function autorize($ip)
	{	
		//echo $ip;
		$comp = $this->computer_model->ip_check($ip);
		//echo $comp['id_computer'];
		//183.91.79.130 : elzatta
		if ($comp['allow_absent'])
		{
			$data = array();
			$this->load->view('login_absensi_button',$data);
		}
	}
}

