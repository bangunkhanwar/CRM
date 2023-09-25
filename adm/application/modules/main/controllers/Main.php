<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Main extends MY_Controller {

	var	$modulname = 'main';
	var	$classname = 'Main';
	
	function __construct()
	{
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('tools/app_menus_model');
		$this->load->model('user/notification_model');
		$this->load->model('user/operator_model');
		$this->load->model('user/notification_type_model');
	}
	
	public function index()
	{
		 // echo "v".phpinfo();
		 $default_menu_url	= 'welcome';
		 $data = array(
		 'content' => $default_menu_url
		 );
		 $this->load->view('tpl',$data);
	}
	
	public function get_message_list()
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$where_msg = array();
		
		$where_msg['"idMsOperator" != '.$id_operator.''] = null;
		$where_msg['unread."Count" > 0'] = null;
		$this->operator_model->set_where($where_msg);
		
		$order = array();
		$order['last_chat_date_unread']	= 'ASC';
		$order['last_chat_date']	= 'ASC';
		$order['LoginName']	= 'ASC';
		
		
		$this->operator_model->set_order($order);
		$this->operator_model->set_limit(5);
		$list_msg = $this->operator_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
			'content' => 'main/message'
			,'list_msg' => $list_msg
		 );
		 $this->load->view($data['content'],$data);
	}
	
	public function get_message_count()
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$where_msg = array();
		
		$where_msg['"idMsOperator" != '.$id_operator.''] = null;
		$where_msg['unread."Count" > 0'] = null;
		$this->operator_model->set_where($where_msg);
		$msg_count = $this->operator_model->count();
		$data = array();
		$data['msg_count'] = $msg_count;
		header('Content-type: application/json');
		echo json_encode($data);
	}
	
	public function get_notification_list()
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$where_notif = array();
		
		$where_notif['(string_to_array("fidMsOperatorList",\',\') && array[\''.$id_operator.'\'] OR upper("fidMsOperatorList") = \'ALL\') '] = null;
		$where_notif['isActive'] = 1;
		$where_notif['"idNotification" NOT IN ( SELECT "fidNotification" FROM admpanel."trReadNotification" WHERE "fidMsOperator" = \''.$id_operator.'\' )'] = null;
		$this->notification_model->set_where($where_notif);
		$this->notification_model->set_order(array('TimeCreate'=>'DESC'));
		$this->notification_model->set_limit(3);
		$list_notif = $this->notification_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
			'content' => 'main/notification'
			,'list_notif' => $list_notif
		 );
		 $this->load->view($data['content'],$data);
	}
	
	public function get_notification_count()
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$where_notif = array();
		
		$where_notif['(string_to_array("fidMsOperatorList",\',\') && array[\''.$id_operator.'\'] OR upper("fidMsOperatorList") = \'ALL\') '] = null;
		$where_notif['isActive'] = 1;
		$where_notif['"idNotification" NOT IN ( SELECT "fidNotification" FROM admpanel."trReadNotification" WHERE "fidMsOperator" = \''.$id_operator.'\' )'] = null;
		$this->notification_model->set_where($where_notif);
		$count_notif = $this->notification_model->count();
		$data = array();
		$data['notif_count'] = $count_notif;
		header('Content-type: application/json');
		echo json_encode($data);
	}
	
	public function not_found()
	{
		$content = '404';
		$data = array(
				'content' 			=> 	$content
			);

		// $this->load('tpl', $data['content'], $data);
		$this->load->view($data['content'], $data);
	}
	
	public function write($input='')
	{
		$controller= $this->uri->segment(1); // controller
		$action = $this->uri->segment(2); // action
		$actiontr = $this->uri->segment(3); // action
		$actiontr = $this->uri->segment(4); // action
		$url = $controller . '/' . $action . '/' . $actiontr; 
		// echo $controller;
		// echo $action;
	}
	
	public function store_download($storecode = '')
	{
		$this->load->model('store_model');
		$where=array();
		$storecode = strtoupper($storecode);
		if ($storecode!='')
		{
			$where["StoreCode"] = $storecode;
		}
		$this->store_model->set_where($where);
		$data_list = $this->store_model->get_list();
		// echo($transnum);
		// echo $this->db->last_query();
		// exit;
		$data_xml = $this->gen_xml($data_list,$this->store_model);
		echo 'SUCCES#'.$data_xml;
		
	}
	
	public function store_upload()
	{
		$this->load->model('store_model');
		$data = $_POST;
		$data = $this->remove_empty_array($data);
		// not empty
		
		if (isset($_POST['StoreCode']))
		{
			$save = $this->store_model->save($data);
			if ($save)
			{	
				echo 'SUCCES#Upload data msStore. [StoreCode = '. $data['StoreCode'] . ']';
			}
			else
			{
				echo 'FAILED#'.$this->store_model->message;
			}
		} 
		else
		{
			// null
			echo 'FAILED#StoreCode is Null';
		}
	}
	
	function get_menu_description()
	{
		$uri_string = $this->input->post('uri_string');
		$menu = $this->db->query("Select * from admpanel.\"AppMenus\" where replace(\"Url\", '/', '_') = ".quotedstr($uri_string)." Limit 1 ");
		$menudata = $menu->row_array();
		header('Content-type: application/json');
		echo json_encode($menudata);
	}
}