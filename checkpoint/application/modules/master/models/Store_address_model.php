<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Store_address_model extends Base_Model {

	function __construct() {
        parent::__construct();
		$this->set_schema('ongkir');
		$this->set_table('msStoreAddress');
		$this->set_pk('StoreCode');
		 // $this->set_pk('ItemCode');
		$this->set_log(false);
    }	
		
	function count() 
	{
		$data = array();
		$this->db->select('count(*) as num_rows');
		$this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
		$this->db->join('ongkir.msProvince msp','tbl.ProvinceId=msp.ProvinceId','left');
		$this->db->join('ongkir.msCity msc','tbl.CityId=msc.CityId','left');
		$this->db->join('ongkir.msSubDistrict msd','tbl.SubDistrictId=msd.SubDistrictId','left');

		if($this->where)
		$this->db->where($this->where);
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		// echo $this->db->last_query();
		// exit;
		$row = $query->row_array();
		return $row['num_rows'];
	}
	
    function get_list() 
	{
		$this->db->select('tbl.*,mss.Description "StoreName",mss.Address,msp.ProvinceName,msc.CityName,msd.SubDistrictName,mss.ExpeditionList');
		$this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
		$this->db->join('ongkir.msProvince msp','tbl.ProvinceId=msp.ProvinceId','left');
		$this->db->join('ongkir.msCity msc','tbl.CityId=msc.CityId','left');
		$this->db->join('ongkir.msSubDistrict msd','tbl.SubDistrictId=msd.SubDistrictId','left');
		
		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		else
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
		// echo $this->db->last_query();
		// exit;
        if($query->num_rows()>0)
		{
			return $query;
        
		}else
		{
			$query->free_result();
            return $query;
        }
	}
	
}