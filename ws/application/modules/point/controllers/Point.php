<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Point extends MY_Controller {
	
	function __construct()
	{
		$this->secure = FALSE;
		parent::__construct();
		date_default_timezone_set('Asia/Jakarta'); 
		$this->load->model('master/points_model');
		$this->load->model('master/member_model');
		$this->load->model('transaction/sales_model');
		$this->load->model('promo/promo_model');
		$this->load->model('promo/promo_type_model');
		$this->load->model('promo/promo_detail_21_model');
		$this->load->model('log/log_sales_point_model');
		$this->load->model('master/member_points_currently_model');	
	}
	
	public function index()
	{
	}
	
	
	public function info($client='',$id='')
	{
		echo $client;
		echo $id;
		
	}
	
	public function get_user_point()
	{
		$this->db->trans_start();
		$result = array();
		$result['statusCode']	= 0;
		$result['message']	= 'failed';
		$membercode = $this->input->post('t_membercode');
		
		// header('Content-type: application/json');
		// echo json_encode($_POST);
		// die;
		if(!$membercode)
		{
			$result['message']	= 'membercode is empty';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		
		$where = array();
		$where['(
			"MemberCode" = \''.$membercode.'\'
			OR "Handpone" = \''.$membercode.'\' 
			OR "Email" = \''.$membercode.'\'
		)']= null;
		
		$member = $this->member_model->get($where);
		// echo $this->db->last_query();die;
		
		$tahun = date('Y');
		$bulan = date('n');
		$this->points_model->posting($member['MemberCode'],$tahun,$bulan);
			
		if ($this->db->trans_status() === false) {
			$this->db->trans_rollback();
			$error = $this->db->error();
			$this->error($error);
		} else {
			$this->db->trans_commit();
		}
		$point_current = $this->member_points_currently_model->get($member['MemberCode']);
		// $point_current['TotalPoints'] = ($point_current['TotalPoints']>=0)?$point_current['TotalPoints']:0;
		$result['current_point']	= $point_current;
		if($member['MemberCode']=='')
		{
			// $result['statusCode']	= '0';
			$result['message']	= 'member not found..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
		$this->points_model->set_where(array('MemberCode'=>$member['MemberCode']));
		$this->points_model->set_order(array('TransDate'=>'DESC','CreateTime'=>'DESC'));
		$point_list	= $this->points_model->get_list();
		if($point_list->num_rows()==0)
		{
			// $result['statusCode']	= '0';
			$result['message']	= 'no point available..!';
			header('Content-type: application/json');
			echo die(json_encode($result));
		}else{
			$result['statusCode']	= '1';
			$result['message']	= 'success';
			$result['point_list']	= $point_list->result_array();
			header('Content-type: application/json');
			echo die(json_encode($result));
		}
	}
	
	public function check_in_range($start_date, $end_date, $date_from_user)
	{
	  // Convert to timestamp
	  $start_ts = strtotime($start_date);
	  $end_ts = strtotime($end_date);
	  $user_ts = strtotime($date_from_user);

	  // Check that user date is between start & end
	  return (($user_ts >= $start_ts) && ($user_ts <= $end_ts));
	}
	
	public function gen_by_sales($client='',$transnum='')
	{
		$debug = $this->input->post('debug')?:0;
		if($debug==0)
		{
			// echo "MAINTENANCE ON PROGRESS";
			// die;
		}
		$result_message = '';
		$data_log_sales = array();
		$data_log_sales['StatusCode'] 		= 0;
		// $client : d = desktop ,  m = mobile apps
		if(!$transnum)
		{
			echo '#FAILED Transnum is EMPTY';
			die;
		}
		// cek dulu data point ke tabel point, jika ada maka notif ke customer, jika belum ada maka generate by sales dari beON
		
		$sales = $this->sales_model->get(array('TransNum'=>$transnum));
		
		// if($sales['CustCode']!='10X22190006')
		// {
			// echo '#FAILED custcode not allowed';
			// die;
		// }
		
		// validasi jika custcode kosong --!
		// $list = $this->points_model->get_list();
		// echo $this->db->last_query();
		
		if(!$sales['TransNum'])
		{
			$result_message = '#FAILED sales not found';
			echo $result_message;
			die;
		}
		if(($sales['TransStatus']!=9) && ($sales['TransStatus']!=8))
		{
			$result_message = '#FAILED Transaction Not Valid';
			// $data_log_sales['TransNum'] 		= $sales['TransNum'];
			// $data_log_sales['TransDate'] 		= $sales['TransDate'];
			// $data_log_sales['JumlahPoint'] 		= 0;
			// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
			// $data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
			// $data_log_sales['CustCode'] 		= $sales['CustCode'];
			// $data_log_sales['ResultMessage'] 	= $result_message;
			
			// $save_log_sales = $this->log_sales_point_model->save($data_log_sales);
			echo $result_message;
			die;
		}
		
		if($sales['CustCode']=='')
		{
			$result_message = '#FAILED CustCode is EMPTY';
			$data_log_sales['TransNum'] 		= $sales['TransNum'];
			$data_log_sales['TransDate'] 		= $sales['TransDate'];
			$data_log_sales['JumlahPoint'] 		= 0;
			$data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
			$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
			$data_log_sales['CustCode'] 		= $sales['CustCode'];
			$data_log_sales['StatusCode'] 		= 0;
			$data_log_sales['ResultMessage'] 	= $result_message;
			
			$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
			echo $result_message;
			die;
		}
		
		// cek ke tabel promo
		
		$storeCode = $sales['StoreCode'];
		$date = date('Ymd');
		
		// cek tanggal promo
		$where = array();
		$where['StartPromo <='] = $date;
		$where['EndPromo >='] = $date;
		$where['PromoTypeCode'] = '21';
		$where['CustTypeList'] = $sales['CustCatCode'];
		$whereStore = '(';
		$whereStore .= '"StoreCodeList" = \'all\'';
		$whereStore .= 'OR "StoreCodeList" ~* \''.$storeCode.'\'';
		// $whereStore .= 'OR "StoreCodeList" ~* \''.substr($storeCode,0,1).'\'';
		$whereStore .= 'OR "StoreCodeList" ~* \''.substr($storeCode,0,2).'\'';
		$whereStore .= 'OR "StoreCodeList" ~* \''.substr($storeCode,0,3).'\'';
		$whereStore .= ')';
		$where[$whereStore] = null;
		$this->promo_model->set_where($where);
		$orderBy = array();
		$orderBy['Priority'] = 'asc';
		$this->promo_model->set_order($orderBy);
		$promolist = $this->promo_model->get_list();
		// echo $this->db->last_query();die;
		if ($promolist->num_rows() == 0)
		{
			$result_message = '#FAILED promo tidak ditemukan';
			$data_log_sales['TransNum'] 		= $sales['TransNum'];
			$data_log_sales['TransDate'] 		= $sales['TransDate'];
			$data_log_sales['JumlahPoint'] 		= 0;
			// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
			$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
			$data_log_sales['CustCode'] 		= $sales['CustCode'];
			$data_log_sales['StatusCode'] 		= 0;
			$data_log_sales['ResultMessage'] 	= $result_message;
			
			$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
			
			echo $result_message;
			die;
		}
		// hitung point
		$jumlahPointdebit= 0;
		$jumlahPointcredit= 0;
		$deskripsi_point= '';
		$promocodelist = '';
		foreach ($promolist->result_array() as $row)
		{
			/* JIKA TRANSDATE TIDAK TERMASUK KEDALAM PERIODE PROMO*/
		
			if(!$this->check_in_range($row['StartPromo'],$row['EndPromo'],$sales['TransDate'])){
				
				$result_message = '#FAILED TransDate diluar periode promo ';
				$data_log_sales['TransNum'] 		= $sales['TransNum'];
				$data_log_sales['TransDate'] 		= $sales['TransDate'];
				$data_log_sales['JumlahPoint'] 		= 0;
				$data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
				$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
				$data_log_sales['CustCode'] 		= $sales['CustCode'];
				$data_log_sales['StatusCode'] 		= 0;
				$data_log_sales['ResultMessage'] 	= $result_message;
				
				$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
				echo $result_message;
				die;
			}
			$point = $this->points_model->get(array('TransNumRef'=>$transnum,'PromoCode'=>$row['PromoCode']));
			if($point['IdRec'])
			{
			/* BEGIN CEK EKSIS POINT */
				// $result_message = '#FAILED points already exist';
				$result_message = '#SUKSES point yg didapat '.($point['Debit']-$point['Credit']);
				$data_log_sales['TransNum'] 		= $sales['TransNum'];
				$data_log_sales['TransDate'] 		= $sales['TransDate'];
				$data_log_sales['JumlahPoint'] 		= $point['Debit']-$point['Credit'];
				// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
				$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
				$data_log_sales['CustCode'] 		= $sales['CustCode'];
				$data_log_sales['StatusCode'] 		= 1;
				$data_log_sales['ResultMessage'] 	= $result_message;
				
				$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
				echo $result_message;
				// die;
			/* END CEK EKSIS POINT */
			}else{
				$jumlahPointdebit= 0;
				$jumlahPointcredit= 0;
				$wherePoint = array();
				$wherePoint['PromoCode'] = $row['PromoCode'];
				$promoPoint = $this->promo_detail_21_model->get($wherePoint);
				if ($promoPoint['PromoCode'])
				{
					if ($sales['RetailSalesTot'] >= $promoPoint['MinRetailSalesTot'])
					{
						if ($promoPoint['BerlakuKelipatan'] == 1)
						{
							$jumlahPointdebit = $promoPoint['PointGet'] * floor($sales['RetailSalesTot'] / $promoPoint['MinRetailSalesTot']);
						}else{
							$jumlahPointdebit = $promoPoint['PointGet'];
						}
						$deskripsi_point = 'Transaksi Sales';
					}else if($sales['RetailSalesTot']<0)
					{
						 if($sales['RetailSalesTot'] <= ($promoPoint['MinRetailSalesTot']*-1))
						{
							if ($promoPoint['BerlakuKelipatan'] == 1)
							{
								$jumlahPointcredit = $promoPoint['PointGet'] * floor(($sales['RetailSalesTot']*-1) / $promoPoint['MinRetailSalesTot']);
							}else{
								$jumlahPointcredit = $promoPoint['PointGet'];
							}
							$deskripsi_point = 'Transaksi Sales Retur';
						}
					}else{
						$result_message = '#FAILED tidak memenuhi syarat promo';
						$data_log_sales['TransNum'] 		= $sales['TransNum'];
						$data_log_sales['TransDate'] 		= $sales['TransDate'];
						$data_log_sales['JumlahPoint'] 		= 0;
						// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
						$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
						$data_log_sales['CustCode'] 		= $sales['CustCode'];
						$data_log_sales['StatusCode'] 		= 0;
						$data_log_sales['ResultMessage'] 	= $result_message;
						
						$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
						echo $result_message;
						die;
					}
					$promocodelist .= $promoPoint['PromoCode'].' ';
					
					$result_message = '#FAILED points empty';
					if(($jumlahPointdebit+$jumlahPointcredit)!=0)
					{
						$datapoints = array();
						
						$datapoints['TransNumRef']			=	$sales['TransNum'];
						$datapoints['StoreCode']			=	$sales['StoreCode'];
						$datapoints['TransDate']			=	$sales['TransDate'];
						$datapoints['CreateBy']				=	'WS';
						$datapoints['CreateTime']			=	date('Ymd H:i:s');
						$datapoints['MemberCode']			=	$sales['CustCode'];
						$datapoints['fidMemberCategory']	=	$sales['CustCatCode'];
						$datapoints['TransType']			=	1;
						$datapoints['Description']			=	$deskripsi_point;
						$datapoints['Debit']				=	$jumlahPointdebit;
						$datapoints['Credit']				=	$jumlahPointcredit;
						$datapoints['LastUpdate']			=	date('Ymd H:i:s');
						$datapoints['PromoCode']			=	$promoPoint['PromoCode'];
						
						$savepoints = $this->points_model->saveTo($datapoints);
						
						$tahun = date('Y');
						$bulan = date('n');
						$this->points_model->posting($sales['CustCode'],$tahun,$bulan);
						
						$result_message = '#SUKSES point yg didapat '.($jumlahPointdebit+$jumlahPointcredit);
						$data_log_sales['TransNum'] 		= $sales['TransNum'];
						$data_log_sales['TransDate'] 		= $sales['TransDate'];
						$data_log_sales['JumlahPoint'] 		= ($jumlahPointdebit+$jumlahPointcredit);
						// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
						$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
						$data_log_sales['CustCode'] 		= $sales['CustCode'];
						$data_log_sales['StatusCode'] 		= 1;
						$data_log_sales['ResultMessage'] 	= $result_message;
						
						$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
					}
					
					echo $result_message;
					
				}else
				{
					$result_message = '#FAILED setup promo tidak ditemukan '.$row['PromoCode'];
					$data_log_sales['TransNum'] 		= $sales['TransNum'];
					$data_log_sales['TransDate'] 		= $sales['TransDate'];
					$data_log_sales['JumlahPoint'] 		= 0;
					// $data_log_sales['CreateTime'] 		= date('Ymd H:i:s');
					$data_log_sales['LastUpdate'] 		= date('Ymd H:i:s');
					$data_log_sales['CustCode'] 		= $sales['CustCode'];
					$data_log_sales['StatusCode'] 		= 0;
					$data_log_sales['ResultMessage'] 	= $result_message;
					
					$save_log_sales = $this->log_sales_point_model->save($data_log_sales);
					echo $result_message;
				}
			}
		}
		// promo_model
		// promo_type_model
		// promo_detail_21_model
		
		// print_r($sales);
		// print_r($promolist->result_array());
		
	}
}