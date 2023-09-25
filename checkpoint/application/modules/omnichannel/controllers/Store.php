<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store extends MY_Controller {

	function __construct()
	{
		parent::__construct();
		$this->validate_role(16);
		date_default_timezone_set('Asia/Jakarta');
		$this->load->model('store_model');
		$this->load->model('master/store_address_model');
		$this->load->model('master/province_model');
		$this->load->model('master/city_model');
		$this->load->model('master/sub_district_model');
		$this->load->model('master/courier_model');
	}
	
	public function index()
	{
		$this->bc->add('Omnichannel', base_url());
		$this->bc->add('Store', base_url('omnichannel/store'));
		$this->bc->set_title('Data Store');
		$this->store_model->set_order(array('StoreCode'=>'ASC'));
		$storelist = $this->store_model->get_list();
		$this->province_model->set_order(array('ProvinceName'=>'ASC'));
		$province = $this->province_model->get_list();
		$this->city_model->set_order(array('CityName'=>'ASC'));
		$city = $this->city_model->get_list();
		// echo $this->db->last_query();
		 $data = array(
		 'content' => 'master/store/main'
		 ,'store_list' => $storelist
		 ,'province'   => $province
		 ,'city'       => $city
		 );
		 $this->load->view('tpl',$data);
	}	
	
	function page($pg)
	{
		$limit = $this->input->post('t_row_per_page')?:10;
		$search = strtoupper($this->input->post('t_search_key'));
		$order_by_field = $this->input->post('t_order_by_field');
		$order_by_key = $this->input->post('t_order_by_key');
		$storecode = $this->input->post('t_storecode');
		$province = $this->input->post('t_province');
		$city = $this->input->post('t_city');
		
		// binding data
		$this->store_address_model->set_limit($limit);
		$this->store_address_model->set_offset($limit * ($pg - 1));
		$this->store_address_model->set_order(array($order_by_field=>$order_by_key));
		// filtering data
		$where = array();
		
		if($storecode == 'ALL'){
			//all status
		}else{
			$where['tbl."StoreCode" = \''.$storecode.'\''] = null;
		}	
		if($province == 'ALL'){
			//all status
		}else{
			$where['msp."ProvinceId" = \''.$province.'\''] = null;
		}
		if($city == 'ALL'){
			//all status
		}else{
			$where['msc."CityId" = \''.$city.'\''] = null;
		}
		
		// $where["( UPPER(\"tbl\".\"StoreCode\") LIKE '%$search%'
					// OR UPPER(\"tbl\".\"Description\") LIKE '%$search%'
					// OR UPPER(\"tbl\".\"Address\") LIKE '%$search%'
				// )"] = NULL;
		$where["( UPPER(\"tbl\".\"StoreCode\") LIKE '%$search%'
		OR UPPER(\"mss\".\"Address\") LIKE '%$search%'
		OR UPPER(\"mss\".\"Description\") LIKE '%$search%'
		)"] = NULL;
		
		$this->store_address_model->set_where($where);
		$key = array();
		$key['StoreCode']	= $search;
		$key['Description']	= $search;
		$key['Address']	= $search;
		$list = $this->store_address_model->get_list();
		// echo $this->db->last_query();
		// die;
		/*
		*/
		$page = array();
		$page['limit'] 		= $limit;
		$page['count_row'] 	= $this->store_address_model->count();
		$page['current'] 	= $pg;
		$page['load_func_name'] = 'loadList';
		$page['list'] 		= $this->gen_paging($page);
		//
		$data = array('list' 	=> $list
			,'name' 			=> $this->session->userdata('FullName')
			,'content' 			=> 'omnichannel/master/store/list'
			,'title' 			=> 'Store List'
			,'key' 				=> $key
			,'paging' 			=> $page
			,'content_type' 	=> 'list'
		);
		$this->load->view($data['content'],$data);
	}
	
	function loadStore($storecode)
	{
		$where['tbl."StoreCode" = \''.$storecode.'\''] = null;
		$this->store_address_model->set_where($where);
		$datatrx = $this->store_address_model->get_list($where);
		// $datatrx = $this->store_address_model->get($storecode);

		$list = $datatrx->row();
	
		// $this->province_model->set_order(array('ProvinceName'=>'ASC'));
		// $province = $this->province_model->get_list();
		
		// $this->city_model->set_order(array('CityName'=>'ASC'));
		// $city = $this->city_model->get_list();
		
		// $this->sub_district_model->set_order(array('SubDistrictName'=>'ASC'));
		// $subdstrict = $this->sub_district_model->get_list();
		

		$this->courier_model->set_order(array('CourierCode'=>'ASC','CourierService'=>'ASC',));
		$this->courier_model->set_where(array('isActive'=>1,'showInExpeditionList'=>1));
		$get_default_courier = $this->courier_model->get_list();
	
		$selected_courier = isset($list->ExpeditionList)?$list->ExpeditionList:null;

		$decoded_selected_courier = json_decode($selected_courier,true);

		$active_courier_list = array();
		if(is_array($decoded_selected_courier) && (count($decoded_selected_courier)>0))
		{
			foreach($decoded_selected_courier as $key=>$row)
			{
				foreach($row as $child)
				{
					$active_courier_list[] = $key.$child;
				}
			}
		}
		// print_r($active_courier_list);
		$new_list_courier = array();
		$temp_data = array();
		foreach($get_default_courier->result_array() as $row)
		{
			if($row['CourierCode'] != 'pickupservice'){
				
			$new_list_courier[] = $row;
			} else{
				$temp_data = $row;
			}
		}
		$new_list_courier[] = $temp_data;
		$datacourier = array();
		$current_parent = '';
		$is_selected = '';
		foreach($new_list_courier as $key=>$row)
		{
			$is_selected = '';
			$children_id			= $row['CourierCode'].$row['CourierService'];
			
			if(in_array($children_id,$active_courier_list))
			$is_selected = 'true';
			$children['id'] 		= $children_id;
			$children['text'] 		= $row['CourierName'].' '.$row['CourierService'].' ('.$row['CourierServiceDescription'].')';
			$children['data']		= $row['CourierService'];
			$children['state']		= array('selected'=>$is_selected);
			if($current_parent != $row['CourierCode'])
			{
				$datacourier[]		= array('id'=>$row['CourierCode'],'text'=>$row['CourierCode'],'parent'=>'#','state'=>array('opened'=>'true'));
				$current_parent 		= $row['CourierCode'];
			}
			$children['parent'] 	= $current_parent;
			$datacourier[]			= $children;
		}

// print_r($datacourier);
		$data = array(
			'storecode' 	=> $list->StoreCode
			,'list' 		=> $list
			// ,'province' 	=> $province
			// ,'city' 		=> $city
			// ,'subdstrict' 	=> $subdstrict
			,'datacourier' 	=> $datacourier
			,'name' 		=> $this->session->userdata('FullName')
			,'content' 		=> 'omnichannel/master/store/update'
			,'title' 		=> 'Store'
		);
		$this->load->view($data['content'],$data);
		
	}
	
	function update()
	{
		$storecode  	= $this->input->post('t_storecode');
		$province		= $this->input->post('t_province');
		$city			= $this->input->post('t_city');
		$subdistrict	= $this->input->post('t_subdistrict');
		$address 		= $this->input->post('t_address');
		$selectedCourier= $this->input->post('t_selectedCourier');
		$selectedElms= $this->input->post('selectedElms');
// echo $province;
// die;
// die;

		$data_courier = array();
		$current_courier_key = '';
		$i = 0;

		if(is_array($selectedCourier) && (count($selectedCourier)>0)){		
			foreach($selectedCourier as $key=>$row)
			{
				foreach($row as $a=>$b){
					if($a!=$current_courier_key)
					{
						$i = 0;
					}
					$data_courier[$a][] = $b;
					$current_courier_key = $a;
				}
				$i++;
			}	
		}
	
		$data					= array();
		$data['StoreCode']		= $storecode;
		$data['ProvinceId']		= $province;
		$data['CityId']			= $city;
		$data['SubDistrictId']	= $subdistrict;
		$data['SubDistrictId']	= $subdistrict;
		
		$data_store = array();
		$data_store['StoreCode']	= $storecode;
		$data_store['Address']	    = $address;

		if($province == 0){
			$this->error("Province is required");
			return;
		}
		if($city == 0){
			$this->error("District / City is required");
			return;
		}
		if($subdistrict == 0){
			$this->error("Sub district is required");
			return;
		}
		$save = $this->store_address_model->save($data);
		$save = $this->store_model->save($data_store);
		if(!$save)
		{
			$error = $this->db->error();
			$this->error($error);
		}else
		{
			$upd_courier = 'UPDATE public."msStore" set "ExpeditionList" = '.quotedStr(json_encode($data_courier,JSON_PRETTY_PRINT)).' where "StoreCode" = '.quotedStr($storecode);
			$qry = $this->db->query($upd_courier);
			$this->success('Store Updated');
		}
	}
	
	
	public function get_provinsi()
	{
		$default = decode($this->input->post('t_default'));
		$list = $this->province_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Propinsi-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['ProvinceId']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['ProvinceId'].'">'.$row['ProvinceName'].'</option>';
		}
		echo $option;
	}
	
	public function get_districts($province_id)
	{
		$default = decode($this->input->post('t_default'));
		$where['ProvinceId'] = $province_id;
		$this->city_model->set_where($where);
		$list = $this->city_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Kabupaten-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['CityId']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['CityId'].'">'.$row['CityName'].' ( '.$row['Type'].' - '.$row['PostalCode'].' )'.'</option>';
		}
		echo $option;
	}
	
	public function get_subdistrict($district_id)
	{
	// echo $district_id;
		$default = decode($this->input->post('t_default'));
		$where['CityId'] = $district_id;
		$this->sub_district_model->set_where($where);
		$list = $this->sub_district_model->get_list();
		$option = '';
		$option = '<option value="0">-Pilih Kecamatan-</option>';
		foreach ($list->result_array() as $key=>$row)
		{
			$selected = '';
			if($row['SubDistrictId']==$default)
			{
				$selected = "selected ='selected'";
			}
			$option .= '<option '.$selected.' value="'.$row['SubDistrictId'].'">'.$row['SubDistrictName'].'</option>';
		}
		echo $option;
	}
}