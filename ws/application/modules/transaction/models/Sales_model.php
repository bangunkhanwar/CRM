<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Sales_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_database('beon');
		$this->set_schema('public');
		$this->set_table('trSales');
		$this->set_pk('TransNum');
		 // $this->set_pk('ItemCode');
		$this->set_log(false);
    }	
		
	function count() 
	{
		$data = array();
		$this->db->select('count(*) as num_rows');
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
		$this->db->select('tbl.*');
		$this->db->select('lsp.TransNum "TransNumLogSales"');
		
		$this->db->join('terminal.LogSalesPoint lsp','tbl.TransNum = lsp.TransNum','left');
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
	
	function get_sales_cust()
	{
		
		$this->db->select('tbl."CustCode",
			tbl."TransDate",
			COALESCE(SUM ("QtyItem"),0) "QtyItem",
			COALESCE(SUM ("GrossSalesTot"),0) "GrossSalesTot",
			COALESCE(SUM ("DiscountTot"),0) "DiscountTot",
			COALESCE(SUM ("RetailSalesTot"),0) "RetailSalesTot",
			COALESCE(SUM ("PaymentCash"),0) "PaymentCash",
			COALESCE(SUM ("Return"),0) "Return",
			COALESCE(SUM ("CashBack"),0) "CashBack",
			COALESCE(SUM ("Round"),0) "Round"',false);
		// join 
		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->group_by as $key => $value)
		{
			$this->db->group_by($key, $value);
		}
		
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