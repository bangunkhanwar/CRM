<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(5);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('master/member_model');
		$this->load->model('membership/points_model');
		// $this->load->model('membership/member_points_currently_model');
	}
	
	public function index()
	{
		$this->bc->add('Dashboard', base_url());
		$this->bc->add('Default', base_url('dashboard/member'));
		$this->bc->set_title('Dashboard Default');
		 // echo "v".phpinfo();
		 $top_last_registered = array();
		 
		 $data = array(
		 'content' => 'member/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	public function monthly_by_age()
	{
		$date_start	 = getSQLDate($this->input->post('t_date_start_filter'))?:date('Ymd');
		$date_end	 = getSQLDate($this->input->post('t_date_end_filter'))?:date('Ymd');
		
		$by_age = $this->member_model->get_member_by_age(($date_start),($date_end));
		// echo $this->db->last_query();
		$total_ct 	= 0;
		$chart_labels = '';
		$chart_data = '';
		$chart_bgcolor = '';
		$list_data = array();
		
		foreach($by_age->result_array() as $key=>$row)
		{
			if($key!=0)
			{
				$chart_labels .= ',';
				$chart_data .= ',';
				$chart_bgcolor .= ',';
			}
			$chart_labels .= '"'.$row['AGE'].'"';
			$chart_data .= $row['CT'];
			$chart_bgcolor .= '"'.$row['ColorCode'].'"';
			$total_ct = $total_ct+$row['CT'];
		}
		
		$age_chart 		= array();
		$age_chart['title'] 	= 'Member registered by age Chart';
		$age_chart['labels'] 	= $chart_labels;
		$age_chart['data'] 		= $chart_data;
		$age_chart['bgcolor'] 	= $chart_bgcolor;
		 
		 $data = array(
		 'content' => 'member/monthly_by_age'
		 ,'age_chart' => $age_chart
		 ,'list_data' => $by_age
		 ,'total_ct' => $total_ct
		 ,'date_start' => $date_start
		 ,'date_end' => $date_end
		 );
		 $this->load->view($data['content'],$data);
	}
	
	public function load_last_registered($limit=10)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$id_operator = $this->session->userdata('idMsOperator');
		$date_start	 = getSQLDate($this->input->post('t_date_start_filter'))?:date('Ymd');
		$date_end	 = getSQLDate($this->input->post('t_date_end_filter'))?:date('Ymd');
		
		$list_data = array();
		// print_r($_POST);
		
		$where = array();
		$where['"CreatedDate" IS NOT NULL '] = null;
		if(!$is_super_user)
		{
			// $where['StoreCode'] = $user_store_code;
			$where['tbl.StoreCode in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')'] = null;
		}
		
		$this->member_model->set_limit($limit);
		$this->member_model->set_order(array('CreatedDate'=>'DESC'));
		$this->member_model->set_where($where);
		$list_data = $this->member_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'member/registered_cust'
		 ,'list_data' => $list_data
		 ,'date_start' => $date_start
		 ,'date_end' => $date_end
		 );
		 $this->load->view($data['content'],$data);
	}
	
	public function load_top_point($limit=10)
	{
		$date_start	 = getSQLDate($this->input->post('t_date_start_filter'))?:date('Ymd');
		$date_end	 = getSQLDate($this->input->post('t_date_end_filter'))?:date('Ymd');
		
		$list_data = array();
		// print_r($_POST);
		$list_data = $this->points_model->top_member_point(($date_start),($date_end));
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'member/top_point'
		 ,'list_data' => $list_data
		 ,'date_start' => $date_start
		 ,'date_end' => $date_end
		 );
		 $this->load->view($data['content'],$data);
	}
	
	function user_with_apps()
	{
		$date_start	 = getSQLDate($this->input->post('t_date_start_filter'))?:date('Ymd');
		$date_end	 = getSQLDate($this->input->post('t_date_end_filter'))?:date('Ymd');
		
		$list_data = $this->member_model->get_cust_type_reg(($date_start),($date_end));
		// echo $this->db->last_query();
		// die( );
		$total_ct 	= 0;
		$chart_labels = '';
		$chart_data = '';
		$chart_bgcolor = '';
		
		foreach($list_data->result_array() as $key=>$row)
		{
			$randomcolor = random_color();
			if($key!=0)
			{
				$chart_labels .= ',';
				$chart_data .= ',';
				$chart_bgcolor .= ',';
			}
			$chart_labels .= '"'.$row['LoginType'].'"';
			$chart_data .= $row['Count'];
			$chart_bgcolor .= '"#'.$randomcolor.'"';
			$total_ct = $total_ct+$row['Count'];
		}
		
		$main_chart 		= array();
		$main_chart['title'] 	= 'User With Apps';
		$main_chart['labels'] 	= $chart_labels;
		$main_chart['data'] 	= $chart_data;
		$main_chart['bgcolor'] 	= $chart_bgcolor;
		 
		 // print_r($main_chart);
		 $data = array(
		 'content' => 'member/user_with_apps'
		 ,'main_chart' => $main_chart
		 ,'list_data' => $list_data
		 ,'total_ct' => $total_ct
		 ,'date_start' => $date_start
		 ,'date_end' => $date_end
		 );
		 $this->load->view($data['content'],$data);
	}
	
	function user_apps_donut_chart()
	{		 
		$date_start	 = getSQLDate($this->input->post('t_date_start_filter'))?:date('Ymd');
		$date_end	 = getSQLDate($this->input->post('t_date_end_filter'))?:date('Ymd');
		
		$list_data = $this->member_model->get_cust_registration_type(($date_start),($date_end));
		// echo $this->db->last_query();
		// die( );
		$chart_labels = '';
		$chart_data = '';
		$total_ct 	= 0;
		foreach($list_data->result_array() as $key=>$row)
		{
			if($key!=0)
			{
				$chart_labels .= ',';
				$chart_data .= ',';
			}
			$chart_labels .= '"'.$row['LoginType'].'"';
			$chart_data .= $row['Count'];
			$total_ct = $total_ct+$row['Count'];
		}
		
			$main_chart 		= array();
			$main_chart['title'] 	= 'Member';
			$main_chart['labels'] 	= $chart_labels;
			$main_chart['data'] 	= $chart_data;
			
			 // print_r($main_chart);
			 $data = array(
			 'content' => 'member/user_with_apps_donut.php'
			 ,'main_chart' => $main_chart
			 ,'list_chart' => $list_data
			 ,'total_ct' => $total_ct
			 );
			 $this->load->view($data['content'],$data);
	}
}