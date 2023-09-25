<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Monitoring extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('customer_order_model');
		$this->load->model('customer_order_header_model');
		$this->load->model('customer_order_detail_model');
		$this->load->model('customer_order_payment_status_model');
		$this->load->model('stock_current_model');
		$this->load->model('bank_transaction_model');
		$this->load->model('payment_type_model');
		$this->load->model('master/trans_status_omni_model');
		$this->load->model('master/store_beon_model');
		$this->load->model('master/member_model');
		/*
		
			Provinsi = Provinces  	=> provinces
			Kabupaten = District	=> district
			Kecamatan = Village		=> village
			Kelurahan = City		=> city
		
		*/
	}
	
	public function index()
	{
		// echo "addaaa";
		// die;
		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Monitoring', base_url('omnichannel/monitoring'));
		$this->bc->set_title('Monitoring Payment');
		$this->trans_status_omni_model->set_order(array('TransStatus'=>'ASC'));
		$trx_status = $this->trans_status_omni_model->get_list();
		// echo $this->db->last_query();
			$data = array(
			'content' => 'monitoring/main'
			,'trx_status' => $trx_status
			);
		$this->load->view('tpl',$data);
	}
	
	function listPage()
	{
		$draw = $this->input->post('draw') ?: 0;
		$start = $this->input->post('start');
		$rowperpage  = $this->input->post('length') ?: 0;
		$columnIndex   = $_POST['order'][0]['column'];
		$columnName    = $_POST['columns'][$columnIndex]['data'];
		$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
		$searchValue = $_POST['search']['value']; // Search value
		// $form_filter = $this->input->post('form_filter');
		$filter_date_start 	= $this->input->post('filter_date_start');
		$filter_date_end 	= $this->input->post('filter_date_end');
		$filter_status 		= $this->input->post('status_trx_key');
		$filter_account 		= $this->input->post('filter_account');
		$filter_business_partner = $this->input->post('filter_business_partner');
		$filter_transnum 		= $this->input->post('filter_transnum');
		// print_r($filter_status);
		$where = array();
		$where_status_header = array();
		$where_status_header['tbl.TransStatus <> 0'] = null;
		if ($filter_date_start) {
			$where['tbl.TransDate >= ' . quotedStr(getSQLDate($filter_date_start)) . ''] = null;
			$where_status_header['tbl.TransDate >= ' . quotedStr(getSQLDate($filter_date_start)) . ''] = null;
		}
		if ($filter_date_end) {
			$where['tbl.TransDate <= ' . quotedStr(getSQLDate($filter_date_end)) . ''] = null;
			$where_status_header['tbl.TransDate <= ' . quotedStr(getSQLDate($filter_date_end)) . ''] = null;
		}
		if ($filter_status) {
			$sts_list = '';
			foreach ($filter_status as $key => $sts) {
				if ($key != 0)
					$sts_list .= ',';
				$sts_list .= $sts;
			}
			$where['tbl.TransStatus in (' . $sts_list . ')'] = null;
		}
		$where["(
			tbl.\"TransNum\" ~* '$searchValue'
			OR tbl.\"RecipientName\" ~* '$searchValue'
			OR tbl.\"Phone\" ~* '$searchValue'
			OR tbl.\"Address\" ~* '$searchValue'
			OR str_list.\"StoreCodeList\" ~* '$searchValue'
			OR member.\"Name\" ~* '$searchValue'
		)"] = NULL;


		$this->customer_order_header_model->set_where($where_status_header);
		$count_status = $this->customer_order_header_model->count_status();
		$this->customer_order_header_model->set_where($where);
		$list_count = $this->customer_order_header_model->count();
		$this->customer_order_header_model->set_limit($rowperpage);
		$this->customer_order_header_model->set_offset($start);
		$this->customer_order_header_model->set_order(array($columnName => $columnSortOrder));
		$list_data  = $this->customer_order_header_model->get_list();
			// echo $this->db->last_query();
			
		$response = array(
			"post" => $this->input->post(),
			"draw" => intval($draw),
			"iTotalRecords" => $list_count,
			"iTotalDisplayRecords" => $list_count,
			"aaData" => $list_data->result_array(),
			"count_status" => $count_status->result_array()
		);

		header('Content-type: application/json');
		echo json_encode($response);
	}
	
	function getComboStatusFilter()
	{
		$result_option = '';
		$this->trans_status_omni_model->set_order(array('TransStatus'=>'ASC'));
		$list_combo = $this->trans_status_omni_model->get_list();
		foreach($list_combo->result_array() as $row)
		{
			$result_option .= '<option value="'.$row['TransStatus'].'">'.$row['Description'].'</option>';
		}
		
		echo $result_option;
	}
	
	function showModalVerify()
	{
		$transnum = $this->input->post('t_transnum');
		$order_header = $this->customer_order_header_model->get($transnum);
		$customer	  = $this->member_model->get($order_header['CustCode']);
		$order_payment_status = $this->customer_order_payment_status_model->get($transnum);
		$payment_type = $this->payment_type_model->get($order_payment_status['fidPaymentType']);
		$data = array(
			'content' => 'monitoring/detail_verify'
			,'transnum' => $transnum
			,'customer' => $customer
			,'order_header' => $order_header
			,'order_payment_status' => $order_payment_status
			,'payment_type' => $payment_type
		);
		
		$this->load->view($data['content'],$data);
	}
	
	function verifyTransaction()
	{
			$url_check = 'http://elshop.elcorps.com/api_url/hook/manualConfirmPayment/';
			$username = 'admin';
			$password = '21232f297a57a5a743894a0e4a801fc3';
		
			$curl = curl_init();
			
			$request = array('transnum'=>$this->input->post('t_transnum'),'transstatus'=>$this->input->post('t_transstatus'));
			
			$url_string = get_params_from_array($request);
			
			curl_setopt_array($curl, array(
			  CURLOPT_URL => $url_check.$url_string,
			  CURLOPT_POST => true,
			  CURLOPT_USERPWD => $username . ":" . $password,
			  CURLOPT_POSTFIELDS => $request,
			  CURLOPT_RETURNTRANSFER => true,
			  CURLOPT_ENCODING => "",
			  CURLOPT_MAXREDIRS => 10,
			  CURLOPT_TIMEOUT => 30,
			  CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
			  CURLOPT_CUSTOMREQUEST => "POST",
			  CURLOPT_HTTPHEADER => array(),
			));

			$result = curl_exec($curl);
			$response = json_decode($result,true);
			$err = curl_error($curl);
			
			curl_close($curl);
			if($response)
			{
				echo json_encode($response);
			}else{
				echo $result;
			}
	}
	
	function showModalDetail()
	{
		$transnum = $this->input->post('t_transnum');
		$order_header = $this->customer_order_header_model->get($transnum);
		$this->customer_order_model->set_where(array('TransNum'=>$transnum,'tbl.TransStatus>=1'=>null));
		$order_list = $this->customer_order_model->get_list();
		$customer	  = $this->member_model->get($order_header['CustCode']);
		$order_payment_status = $this->customer_order_payment_status_model->get($transnum);
		$payment_type = $this->payment_type_model->get($order_payment_status['fidPaymentType']);
		$bank_transaction = $this->bank_transaction_model->get(array('AssignTransNum'=>$transnum));
		$data = array(
			'content' => 'monitoring/detail'
			,'transnum' => $transnum
			,'customer' => $customer
			,'order_list' => $order_list
			,'order_header' => $order_header
			,'order_payment_status' => $order_payment_status
			,'payment_type' => $payment_type
			,'bank_transaction' => $bank_transaction
		);
		
		$this->load->view($data['content'],$data);
	}
	
	function detailPage()
	{
		$draw = $this->input->post('draw') ?: 0;
		$start = $this->input->post('start');
		$rowperpage  = $this->input->post('length') ?: 0;
		$columnIndex   = $_POST['order'][0]['column'];
		$columnName    = $_POST['columns'][$columnIndex]['data'];
		$columnSortOrder = $_POST['order'][0]['dir']; // asc or desc
		$searchValue = $_POST['search']['value']; // Search value
		$transnum 	= $this->input->post('transnum');
		
		$where = array();
		if ($transnum) {
			$where['tbl.TransNum'] = $transnum;
		}
		if($searchValue)
		{
			$where["(
				tbl.\"StoreCode\" ~* '$searchValue'
				OR mss.\"Description\" ~* '$searchValue'
				OR tbl.\"SKU\" ~* '$searchValue'
				OR msp.\"Description\" ~* '$searchValue'
			)"] = NULL;
		}
		
		$this->customer_order_detail_model->set_where($where);
		$list_count = $this->customer_order_detail_model->count();
		$this->customer_order_detail_model->set_limit($rowperpage);
		$this->customer_order_detail_model->set_offset($start);
		$this->customer_order_detail_model->set_order(array($columnName => $columnSortOrder));
		$list_data  = $this->customer_order_detail_model->get_list();
			// echo $this->db->last_query();
			
		$response = array(
			"post" => $this->input->post(),
			"draw" => intval($draw),
			"iTotalRecords" => $list_count,
			"iTotalDisplayRecords" => $list_count,
			"aaData" => $list_data->result_array()
		);

		header('Content-type: application/json');
		echo json_encode($response);
	}
	
	function page($pg)
	{
		// echo "addaaa";
		// die;
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		// $status_trx_key = $this->input->post('t_status_trx_key');
		$current_time = '';
		
		// binding data
		$this->customer_order_model->set_limit($limit);
		$this->customer_order_model->set_offset($limit * ($pg - 1));
		$this->customer_order_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		$where['tbl."TransStatus" = 1 '] = null;

		// if($status_trx_key == 'ALL'){
		//// all status
		// }else{
			// $where['tbl."TransStatus" = \''.$status_trx_key.'\''] = null;
		// }
		
		$where["(UPPER(\"TransNum\") LIKE '%$search%'
					OR UPPER(\"tbl\".\"StoreCode\") LIKE '%$search%'
				)"] = NULL;
		
		$this->customer_order_model->set_where($where);
		$key = array();
		$key['StoreCode']	= $search;
		$key['TransNum']	= $search;
		$list = $this->customer_order_model->get_list();
		// echo $this->db->last_query();
		// die;
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->customer_order_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrders';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/monitoring/list'
			,'title' 			=> 'Monitoring Payment '
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	/*
	function detailPage($pg,$transnum,$storecode)
	{
		
		$current_time = '';
		$where = array();
		$where['tbl."TransStatus" = 3'] = null;
		$where['tbl."TransNum" ']  = $transnum;
		$where['tbl."StoreCode" '] = $storecode;
		$this->customer_order_detail_model->set_where($where);
				$this->customer_order_detail_model->set_order(array('tbl."LastUpdate"' => 'DESC'));

		$list = $this->customer_order_detail_model->get_list();
		
		// echo $this->db->last_query();
		// die;
				
		$wheres = array();
		$wheres['tbl."StoreCode" '] = $storecode;
		// $this->store_beon_model->set_where($where);
		$store = $this->store_beon_model->get($wheres);
		
		$page = array();
		$page['limit'] 		= 1000;
		$page['count_row'] 	= $this->customer_order_detail_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadListOrdersDetail';
		$page['list'] 		= $this->gen_paging($page);
		
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/monitoring/detail'
			,'title' 			=> 'Payment List '
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
			,'store' 	        => $store
		);
		
		$this->load->view($data['content'],$data);
	}
	*/
	// function stockListPage($pg,$transnum,$storecode)
	// {

	// 	// print_r($this->input->post());
	// 	// die;
	// 	$current_time = '';
	// 	// $sku_list= $this->input->post('data');	
	// 	$wheres = array();
	// 	$wheres['tbl."TransStatus" = 3'] = null;
	// 	$wheres['tbl."TransNum" ']  = $transnum;
	// 	$wheres['tbl."StoreCode" '] = $storecode;
	// 	$this->customer_order_detail_model->set_where($wheres);
	// 	$list_order = $this->customer_order_detail_model->get_list();
		
	// 	// echo $this->db->last_query();
		
		
	// 	$where = array();
	// 	$sku = '';
	// 	$storecode = '';
		
	// 	foreach($list_order->result_array() as $key=>$value)
	// 	{
	// 		if($key!=0)
	// 		$sku .= ',';
	// 		// $sku .= 'and "tbl"."SKU" =';
	// 		$sku .= quotedStr($value['SKU']);
	// 	}
	// 	$where['tbl."SKU" in ('.$sku.')']  = null;
	// 	// $where['tbl."SKU"']  = $sku;
	// 	// $this->stock_current_model->group_by('nom_dept'); 
	// 	$this->stock_current_model->set_order(array('tbl."StoreCode"' => 'ASC'));
	// 	// $this->stock_current_model->set_where($where);
	// 	$list = $this->stock_current_model->get_list($sku);
		
		
	// 	// $this->stock_current_model->set_where($where);
	// 	$listsku = $this->stock_current_model->get_list_detail($sku);
		
	// 	// echo $this->db->last_query();
	// 	// die;
		
	// 	$page = array();
	// 	$page['limit'] 		= 100;
	// 	$page['count_row'] 	= $this->stock_current_model->count();
	// 	$page['current'] 	= $pg;
	// 	$page['load_func_name'] = 'loadListOrdersDetail';
	// 	$page['list'] 		= $this->gen_paging($page);
		
	// 	$data = array(
	// 		'list' 	=> $list
	// 		,'listsku' 	=> $listsku
	// 		,'name' 			=> $this->session->userdata('FullName')
	// 		,'content' 			=> 'omnichannel/traffic/list_another_stock'
	// 		,'title' 			=> 'Another stock list'
	// 		,'paging' 			=> $page
	// 		,'content_type' 	=> 'list'
	// 	);
	// 	$this->load->view($data['content'],$data);
	// }

	// function update_order($transnum,$storecode,$storecodeTo)
	// {
	// 	$data['TransNum'] = $transnum;
	// 	$data['StoreCode'] = $storecode;
	// 	$data['StoreCodeTo'] = $storecodeTo;
	// 	$data['TransStatus'] = 3;
		
	// 	$save = $this->customer_order_model->save($data);
	// 	$save = $this->customer_order_header_model->save($data);
	// 	$save = $this->customer_order_detail_model->save($data);
		
	// 	if($save){
	// 		$this->success('Save Data Success');			
	// 	}else{
	// 		$this->error($result_msg);
	// 	}
	// }
}