<?php

class Activity_log_model extends Base_Model {

    function __construct() {

        parent::__construct();
		$this->set_schema('public');
		$this->set_table('ActivityLog');
		$this->set_pk('idActivityLog');
		$this->set_log(true);
    }
	
	function get_list()
	{       
		$this->db->select('tbl.*');
		// $this->db->order_by('tbl.idFileUpload', 'ASC');
		if($this->where)
		$this->db->where($this->where);
	
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->table.' tbl');
		else
			$query = $this->db->get($this->table.' tbl',$this->limit,$this->offset);
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