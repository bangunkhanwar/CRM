<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	var $template_data = array();
	var $result = array();
	var $title = '';
	var $secure = TRUE;
	
	 public function __construct()
	{
		parent::__construct();
		// if($this->secure == false){
		// }else{
		// 	if (!$this->is_logged_in())
		// 	{
		// 		redirect('/login');
		// 		die;
		// 	}
		// }
		$user = $this->get_auth();
	}
		
	function set($name, $value)
	{
		$this->template_data[$name] = $value;
	}

	function load($template = '', $view = '' , $view_data = array(), $return = FALSE)
	{               
		if (!isset($view_data['title']))
			$view_data['title'] = $this->title;
			
		$this->CI =& get_instance();
		$this->set('contents', $this->CI->load->view($view, $view_data, TRUE));			
		return $this->CI->load->view($template, $this->template_data, $return);
	}
		
	public function is_logged_in()
	{
		return is_logged_in();
	}
	
	function success($msg='',$uri='success')
	{
		$this->result['field']='';
		$this->result['error']='';
		$this->result['header']=$uri;
		$this->result['success']=$msg;
		echo json_encode($this->result);
	}
	
	function error($err,$uri='failed',$error_field='')
	{
		$this->result['field']=$error_field;
		$this->result['error']=$err;
		$this->result['header']=$uri;
		$this->result['success']='';
		echo json_encode($this->result);
		exit;
	}
	
	function success_redirect($msg='',$uri='')
	{
		redirect($uri);
	}	
	
	
	function gen_paging($page_data=array())
	{
		$func_name = "pageLoad";
		if (isset($page_data['load_func_name']))
		{
			if ($page_data['load_func_name'])
				$func_name = $page_data['load_func_name'];
		}
		
		$limit = $page_data['limit'];
		$limit = $limit?$limit:1;
		$count = ceil($page_data['count_row'] / $limit) ;
		$last_row = $limit*$page_data['current'];
		if ($last_row > $page_data['count_row'])
			$last_row = $page_data['count_row'];
		$page_result = '<div class="row-fluid" style="margin-top: -12px;">
						<div class="span6">
							<div class="dataTables_info" id="sample_1_info">
								Showing '.(($limit*($page_data['current']-1))+1)
								.' to '.$last_row.' of '.$page_data['count_row'].' rows</div>
						</div><div class="span6" style="text-align: right;">
						';
		$page_result .= '<div class="dataTables_paginate  pagination span12">';
		$page_result .= '<ul><li class="prev '.($page_data['current']==1?'active':'').'"><a href="javascript:void(0)" '.($page_data['current']==1?'':'onclick="'.$func_name.'(1)"').'>&lt; First</a></li>';
		
		$paging_show = 2;
		$page_start = $page_data['current'] - $paging_show;
		$page_start = $page_start<1?1:$page_start;
		//$page_end	= $count;
		$page_end = $page_data['current'] + $paging_show;
		$page_end = $count > $page_end ? $page_end : $count;
		$page_end = $count > 1 ? $page_end : 1;
		
		//
		if ($page_start > 1)
		{
			$page_result .= '<li class="active")><a href="javascript:void(0)" >...</a></li>';
		}
		// before current
		for($i=$page_start; $i<=$page_end; $i++)
		{ 
			$page_result .= '<li '.($page_data['current']==$i?'class="active"':'').'>'
							.'<a href="javascript:void(0)" '.($page_data['current']==$i?'':'onclick="'.$func_name.'('.$i.')"').'>'.$i.'</a>'
							.'</li>';
		}
		// after current
		if ($page_end < $count)
		{
			$page_result .= '<li class="active")><a href="javascript:void(0)" >...</a></li>';
		}
		
		$page_result .= '<li class="next '.($page_data['current']==$page_end?'active':'').'"><a href="javascript:void(0)" onclick="'.$func_name.'('.$count.')">Last &gt; </a></li></ul></div>';
		$page_result .= '</div>';
		$page_result .= '</div>';
		return $page_result;
	}
	
	function reject()
	{
		$this->load->view('rejected');
	}
	
	/*
	 * untuk mencari no transaksi yang baru	
	 */
	function _get_tr_no($pref=null,$model=null,$date=true)
	{
		if (!$pref)
			$pref = '';
		else
			$pref .= '.';			
		
		if ($date)
			$pref .= date('ym').'.';
			
		$pref_ln = strlen($pref);
		
		$tr_no = '';
		$no_last = $model->get_last_no($pref);
		$no_next = 1;
		if ($no_last)
		{
			$no_next = substr($no_last,$pref_ln,5)+1;
		}

		$tr_no = $pref.sprintf('%05s', $no_next);
		return $tr_no;
	}
	
	function gen_xml($data,$model,$schema='')
	{
		$data_start="<![CDATA["; 
		$data_end="]]>";
		$cr=chr(13).chr(10);
		$xmldump="";
		$xmldump.='<?xml version = "1.0" encoding="Windows-1252" standalone="yes"?>';
		$xmldump.=$cr."<VFPData>";
		$xmldump.=$model->gen_xml_structure($schema);
		
		foreach($data->result_array() as $row)
		{
			$xmldump = $xmldump."<crsoheader>";
			foreach($row as $field=>$value)
			{
				$xmldump = $xmldump."<".$field.">".str_replace('&','_amp',$value)."</".$field.">".chr(13);
			}
			$xmldump = $xmldump.$cr."</crsoheader>".chr(13);
				
		}
		
		$xmldump = $xmldump.$cr."</VFPData>";
		
		return $xmldump;
	}

	function gen_qrcode($code ='')
	{
		$this->load->library('ciqrcode');
		header("Content-Type: image/png");
		$params['data'] = $code;
		$this->ciqrcode->generate($params);
	}
	
	function get_auth()
	{
		$result = array();
		
		$result['code'] 	= 0;
		$result['status'] 	= 'FAILED';
		$result['message'] 	= 'NOT AUTHORIZED';
		$result['msgid'] 	= '';
		
		$res = array();
		$res['ok'] = false;
		$res['result'] = $result;
		$user = '';
		$pass = '';
		$enable_auth_log = true;
		if(isset($_SERVER['PHP_AUTH_USER']))
		{
			$user = $_SERVER['PHP_AUTH_USER'];
		}
		if(isset($_SERVER['PHP_AUTH_PW']))
		{
			$pass = $_SERVER['PHP_AUTH_PW'];
		}
		$this->CI =& get_instance();
		$this->CI->load->database();
		$this->CI->db->from('sms.msAuth');
		$this->CI->db->where('LoginName', $user);		
		$this->CI->db->where('LoginPass',$pass);
		$this->CI->db->where('enable',1);
		$user_auth = $this->CI->db->get();
		if($user_auth->num_rows()==0)
		{
			header('WWW-Authenticate: Basic realm="SMS APP"');
			header('HTTP/1.0 401 Unauthorized');
			// die ("#FAILED NOT AUTHORIZED");
			header('Content-type: application/json');
			echo json_encode($result);
			die;
		}
		if($enable_auth_log)
		{
			$uri_segments = $this->uri->uri_string();			
			$class 	= $this->router->class;
			$method = $this->router->method;
			$data_log['value_before'] ='';
			$data_log['log_type'] = 'sms '.$uri_segments;
			$data_log['ip_comp'] = $this->CI->input->ip_address();
			$data_log['user_id'] = $user;
			$data_log['table_name'] = '';
			$data_log['fid_data'] = 0;
			$log = $this->CI->db->insert('sms.AuthLog', $data_log);
		}

		return $user;
	}
	
	
	function remove_empty_array($array)
	{
		
		foreach ($array as $key =>$value)
		{
			if($value=='')
			{
				unset($array[$key]);
			}
		}
		
		return $array;
	}
	
} 
