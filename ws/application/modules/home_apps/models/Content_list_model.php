<?php

class Content_list_model extends Base_Model {

    function __construct() {
        parent::__construct();
		$this->set_schema('public');
		$this->set_table('Content');
		$this->set_pk('idContent');
		$this->set_log(false);
    }	
		function get_list()
	{
		$this->db->select('*');
		$this->db->where($this->where);
		$this->db->like($this->like);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table);
		else
			$query = $this->db->get($this->schema.'.'.$this->table,$this->limit,$this->offset);
		
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