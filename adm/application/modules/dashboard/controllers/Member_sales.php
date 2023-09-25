<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_sales extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(19);
		date_default_timezone_set('Asia/Jakarta');
	}
	
	public function index()
	{
		$this->bc->add('Dashboard', base_url());
		$this->bc->add('Member', base_url('dashboard/member'));
		$this->bc->set_title('Dashboard Member');
		 // echo "v".phpinfo();
		 $data = array(
		 'content' => 'member_sales/main'
		 );
		 $this->load->view('tpl',$data);
	}
	
	public function dashboard_new_member()
	{
		echo "gg";
		/*
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
		 */
	}
}