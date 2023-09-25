<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class User extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('operator_model');
		$this->load->model('user/notification_model');
		$this->load->model('user/notification_type_model');
		$this->load->model('user/read_notification_model');
		$this->load->model('message_model');
	}
	
	public function index()
	{
		$this->bc->add('Tools', base_url());
		$this->bc->add('User Management', base_url('sms'));
		$this->bc->set_title('User Management');
		
		 $data = array(
			'content' => 'user_management/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	function profile()
	{
		$this->bc->add('User', base_url());
		$this->bc->add('Profile', base_url('user/profile'));
		$this->bc->set_title('Profile');
		
		$id_operator = $this->session->userdata('idMsOperator');
		// echo $id_operator;
		$user_data = $this->operator_model->get($id_operator);
		
		 $data = array(
			'content' => 'user/profile/main'
			,'user_data' => $user_data
		 );
		 $this->load->view('tpl',$data);
	}
	
	function inbox()
	{
		$this->bc->add('User', base_url());
		$this->bc->add('Inbox', base_url('user/inbox'));
		$this->bc->set_title('Inbox');
		
		 $data = array(
			'content' => 'user/inbox/main'
		 );
		 $this->load->view('tpl',$data);
		
	}
	
	function notifications()
	{
		$this->bc->add('User', base_url());
		$this->bc->add('Notifications', base_url('user/notifications'));
		$this->bc->set_title('Notifications');
		
		$id_operator = $this->session->userdata('idMsOperator');
		$where_notif = array();
		
		$where_notif['( string_to_array("fidMsOperatorList",\',\') && array[\''.$id_operator.'\'] OR upper("fidMsOperatorList") = \'ALL\') '] = null;
		$where_notif['isActive'] = 1;
		$this->notification_model->set_where($where_notif);
		$this->notification_model->set_order(array('TimeCreate'=>'DESC'));
		$list_notif = $this->notification_model->get_list();
		// echo $this->db->last_query();
		$where_notif['"idNotification" NOT IN ( SELECT "fidNotification" FROM admpanel."trReadNotification" WHERE "fidMsOperator" = \''.$id_operator.'\' )'] = null;
		$this->notification_model->set_where($where_notif);
		$count_notif = $this->notification_model->count();
		// echo $this->db->last_query();
		 
		 $data = array(
			'content' => 'user/notifications/main'
			,'list_notif' => $list_notif
			,'count_notif' => $count_notif
		 );
		 $this->load->view('tpl',$data);
	}
	
	function detail_notification($id_notification='')
	{
		if(!$id_notification)
		{
			$data =array();
			$data['content'] = '404';
			$this->load->view('tpl',$data);
		}else{
				
			$this->bc->add('User', base_url());
			$this->bc->add('Notifications', base_url('user/notifications'));
			$this->bc->add('Detail Notification', base_url('user/notifications'));
			$this->bc->set_title('Notifications');
			
			$id_operator = $this->session->userdata('idMsOperator');
			$id_notification = decode($id_notification);
			$notification = $this->notification_model->get($id_notification);
			
			$data_read = array();
			$data_read['fidNotification'] 	= $id_notification?:0;
			$data_read['fidMsOperator'] 	= $id_operator?:0;
			$data_read['TimeRead'] 			= date('Ymd H:i:s');
			
			$save_read = $this->read_notification_model->save($data_read);
			
			 $data = array(
				'content' => 'user/notifications/detail'
				,'id_notification' => $id_notification
				,'notification' => $notification
			 );
			 $this->load->view('tpl',$data);
		}
	}
	
	function chats($chat_id='')
	{
		$this->bc->add('User', base_url());
		$this->bc->add('Chats', base_url('user/chats'));
		$this->bc->set_title('Chats');
		
		 $data = array(
			'content' => 'user/chats/main'
			,'chat_id' => $chat_id
		 );
		 $this->load->view('tpl',$data);
	}
	
	function chats_get_list_opr()
	{
		$search = $this->input->post('t_search_key');
		$id_operator = $this->session->userdata('idMsOperator');
		
		$where = array();
		
		$where['"idMsOperator" != '.$id_operator.''] = null;
		if($search){
			$where["(tbl.\"LoginName\" ~* '$search'
					OR tbl.\"FullName\" ~* '$search'
					)"] = NULL;
		}
				
		$key = array();
		$key['LoginName']	= $search;
		$key['FullName']	= $search;
		
		$order = array();
		$order['last_chat_date_unread']	= 'ASC';
		$order['last_chat_date']	= 'ASC';
		$order['LoginName']	= 'ASC';
		
		$this->operator_model->set_order($order);
		$this->operator_model->set_where($where);
		
		$list_opr = $this->operator_model->get_list();
		
		$data = array('list_opr'=> $list_opr
			,'key' 				=> $key
			,'content' 			=> 'user/chats/opr_list'
		);
		$this->load->view($data['content'],$data);
		
	}
	
	function chat_view()
	{
		$opr_id = $this->input->post('opr_id');
		
		$operator = $this->operator_model->get($opr_id);
		
		$data = array('opr_id'=> $opr_id
			,'operator' 		=> $operator
			,'content' 			=> 'user/chats/chat'
		);
		$this->load->view($data['content'],$data);
	}
	
	function chat_list()
	{
		$id_operator_from = $this->input->post('opr_id');
		$id_operator = $this->session->userdata('idMsOperator');
		$limit = 50;
		$dataupd = array();
		
		$dataupd['ReadTime'] = date('Ymd H:i:s');
		$this->db->where(array('fidMsOperatorFrom'=> $id_operator_from,'fidMsOperatorTo'=> $id_operator));
		$this->db->update('admpanel."trMessage"', $dataupd); 
		
		$operator_from = $this->operator_model->get($id_operator_from);
		
		$where = array();
		$where['( "fidMsOperatorFrom" = '.$id_operator_from.' OR "fidMsOperatorFrom" = '.$id_operator.' )'] = null;
		$where['( "fidMsOperatorTo" = '.$id_operator_from.' OR "fidMsOperatorTo" = '.$id_operator.' )'] = null;
		$this->message_model->set_where($where);
		$this->message_model->set_order(array('idMessage'=>'ASC'));
		$this->message_model->set_limit($limit);
		$chat_list = $this->message_model->get_list();
		
		// echo $this->db->last_query();
		
		$data = array('id_operator_from'=> $id_operator_from
			,'id_operator' 		=> $id_operator
			,'operator_from' 		=> $operator_from
			,'chat_list' 		=> $chat_list
			,'content' 			=> 'user/chats/chat_list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function send_chat()
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$message = $this->input->post('message');
		$opr_id  = $this->input->post('opr_id');
		
		$data = array();
		$data['fidMsOperatorFrom']	=	$id_operator;
		$data['fidMsOperatorTo']	=	$opr_id;
		$data['Message']			=	$message;
		$data['SendTime']			=	date('Ymd H:i:s');
		
		$this->message_model->saveTo($data);
		
		$this->success('data telah disimpan');		
	}
	
	function save_profile()
	{
		$this->db->trans_start();
		
		$data['idMsOperator']	= decode($this->input->post('t_oprcode'));
		
		$password = '';
		
		if($this->input->post('t_password'))
		{
			$password = $this->input->post('t_password');
			$nChar = strlen($password)+1;
			$cPassGen = $password;
			$x = 1; 
			while($x <= $nChar) 
			{
				$cPassGen = md5($cPassGen);
				$x++;
			} 
			$data['LoginPass']	= $cPassGen;
		}
		
		$action = $this->input->post('t_action');
		
		$data['LoginName'] = $this->input->post('t_username');
		$data['Address'] = $this->input->post('t_address');
		if($this->input->post('t_birthdate'))
		{
			$data['BirthDate'] = getSQLDate($this->input->post('t_birthdate'));
		}
		$data['Email'] = $this->input->post('t_email'); 
		$data['FullName'] = $this->input->post('t_fullname');
		$data['PhoneNumber'] = $this->input->post('t_phone');    
		$data['Nik'] = $this->input->post('t_nik');    
		$save = $this->operator_model->save($data);
		
		$this->db->trans_complete();
		
		if ($this->db->trans_status() === false)
		{
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		}else{
			$this->db->trans_commit();
			$this->result['id'] = encode($data['idMsOperator']);
			$this->success('Save Data Success');
		}
	}
	
	function no_access()
	{
		$this->bc->add('HOME', base_url());
		$this->bc->add('No Access', base_url());
		$this->bc->set_title('No right to access page');
		
		 $data = array(
			'content' => 'no_access'
		 );
		 $this->load->view('tpl',$data);
	}
}