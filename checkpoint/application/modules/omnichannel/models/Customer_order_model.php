<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_order_model extends Base_Model {
	
	function __construct() {
		parent::__construct();
		// $this->set_database('beon');
		$this->set_schema('omnichannel');
		$this->set_table('trCustomerOrder');
		$this->set_pk('TransNum','StoreCode');
		$this->set_log(false);
	}
	
	function count()
	{
		$data = array();
		$this->db->select('count(*) as num_rows');
		if ($this->where)
		$this->db->where($this->where);
	
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		
		$row = $query->row_array();
		return $row['num_rows'];
	}
	
	function get_list()
	{
		$this->db->select('tbl.*,mss.Description "StoreName",mss.Phone "PhoneStore", mts.Description "StatusTrx", mts.StatusColor, mts.SystemRemark ');
		$this->db->join('omnichannel.msTransStatus mts','tbl.TransStatus=mts.TransStatus','left');
		$this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');

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
	
	function count_cust_order_sales()
	{
		$this->db->select('tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"', FALSE);
		$this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
		if ($this->where)
		$this->db->where($this->where);
		$this->db->group_by('tbl.StoreCode, mss.Description');
	
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		
		$row = $query->num_rows();
		return $row;
	}
	
	function get_cust_order_sales()
	{
		$this->db->select('tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"', FALSE);
		$this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
	
		if($this->where)
		$this->db->where($this->where);
		$this->db->group_by('tbl.StoreCode, mss.Description');
		
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
?>