<?php

class Cust_sales_model extends Base_Model {

    function __construct() {
        parent::__construct();
		$this->set_schema('reporting');
		$this->set_table('cust_sales');
		$this->set_pk('CustCode','TransDate');
		$this->set_log(false);
    }	
		function get_list()
	{
		// $this->db->select('*');
		$this->db->select('tbl.*');
		
		
		$this->db->where($this->where);
		$this->db->like($this->like);
		
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