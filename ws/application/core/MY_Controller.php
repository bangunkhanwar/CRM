<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class MY_Controller extends CI_Controller 
{
	var $template_data = array();
	var $result = array();
	var $title = '';
	var $secure = TRUE;
	var $http_origin = false;
	
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
		
		if ($this->input->get('httpOrigin')) {
			header('Access-Control-Allow-Origin: ' . $this->input->get('httpOrigin'));
			header("Access-Control-Allow-Credentials: true");
			header('Access-Control-Allow-Headers: Authorization');
			header('Content-Type: application/json');
			$this->http_origin = true;
		}
		
		if($this->secure)
		{
			$user = $this->get_auth();
		}
		$sms = $this->load->library('sms_gateway',null,'sms'); 
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
	
	function success($msg='',$success_code='200',$success_header='OK')
	{
		$request = $_REQUEST;
		$this->result['request']['method'] 	= $this->input->method();
		$this->result['request']['data'] 	= $request;
		$this->result['statusCode']			= 1;
		$this->result['message']			= $msg;
		header('Content-Type: application/json');
		header("HTTP/1.1 ".$success_code." ".$success_header);
		echo json_encode($this->result);
	}
	
	function error($err,$error_code='400',$error_header='error')
	{
		$request = $_REQUEST;
		$this->result['request']['method'] 	= $this->input->method();
		$this->result['request']['data'] 	= $request;
		$this->result['statusCode']			= 0;
		$this->result['message']			= $err;
		header('Content-Type: application/json');
		header("HTTP/1.1 ".$error_code." ".$error_header);
		echo json_encode($this->result);
		exit;
	}
	
	function success_redirect($msg='',$uri='')
	{
		redirect(get_language().'/'.$uri);
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
	function key_validation($storeCode,$key,$modulName = 'bePOS')
	{
		$this->load->model('master/store_info_model');
		$this->load->model('master/store_log_access');
		$storeCode 	 = strtoupper($storeCode);
		$key		 = strtoupper($key);
		if(!$storeCode)
		{
			echo 'FAILED#Store Empty';
			return false;
			exit;
		}
		// validasi key untuk toko tersebut
		$storeInfo = $this->store_info_model->get($storeCode);
		$serverKey = strtoupper($storeInfo['BezSyncKey']);
		// validasi master toko
		if (!$storeInfo['StoreCode'])
		{
			echo 'FAILED#Store not Available';
			return false;
			exit;
		}
		// validasi key
		
		if ($serverKey != $key)
		{
			echo 'FAILED#Wrong Key';
			return false;
			exit;
		}	
		// create log access
		$schemaName = 'terminal';
		$tableLogName = 'trUpdate'.date('Ym');
		
		$this->store_log_access->set_table($tableLogName);
		
		$dataLog = array();
		
		$dataLog['StoreCode'] = $storeCode;
		$dataLog['ModulName'] = $modulName;
		$dataLog['LastUpdate'] = date('Y-m-d H:i:s');
		
		// di komen dulu insert log nya
		/*
		$new = $this->db->insert($schemaName.'.'.$tableLogName, $dataLog);	
		if (!$new)
		{
			echo 'FAILED#Failed create log';
			return false;
		}*/
		// done
		return true;
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
		$user = '';
		$pass = '';
		$enable_auth_log = false;
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
		$this->CI->db->from('ws.msAuth');
		$this->CI->db->where('LoginName', $user);		
		$this->CI->db->where('LoginPass',$pass);
		$this->CI->db->where('enable',1);
		$user_auth = $this->CI->db->get();
		
		if($user_auth->num_rows()==0)
		{
			header('WWW-Authenticate: Basic realm="WEBSERVICES APP"');
			header('HTTP/1.0 401 Unauthorized');
			$result_data = array();
			$result_data['statusCode']	= 0;
			$result_data['message']	= 'FAILED NOT AUTHORIZED';
			header('Content-type: application/json');
			if($this->http_origin)
			header('HTTP/1.1 200 OK');
			die(json_encode($result_data));
		}
		
		$datenow = date('Y-m-d H:i:s');
		
		if( $datenow > $user_auth->row_array()['ValidUntil'] )
		{
			$result_data = array();
			$result_data['statusCode']	= 0;
			$result_data['message']	= 'Application must be updated';
			header('Content-type: application/json');
			if($this->http_origin)
			header('HTTP/1.1 200 OK');
			echo die(json_encode($result_data));
		}
		
		if($enable_auth_log)
		{
			$uri_segments = $this->uri->uri_string();			
			$class 	= $this->router->class;
			$method = $this->router->method;
			$data_log['value_before'] ='';
			$data_log['log_type'] = 'ws '.$uri_segments;
			$data_log['ip_comp'] = $this->CI->input->ip_address();
			$data_log['user_id'] = $user;
			$data_log['table_name'] = '';
			$data_log['fid_data'] = 0;
			$log = $this->CI->db->insert('ws.AuthLog', $data_log);
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
