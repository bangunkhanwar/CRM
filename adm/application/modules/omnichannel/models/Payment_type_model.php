<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Payment_type_model extends Base_Model {
	
	function __construct() {
		parent::__construct();
		// $this->set_database('beon');
		$this->set_schema('omnichannel');
		$this->set_table('msPaymentType');
		$this->set_pk('idPaymentType');
		$this->set_log(false);
	}
	
    function count() 
	{
		$data = array();
	
		$this->db->where($this->where);
		$this->db->or_like($this->like);

		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
	
		return $query->num_rows();
	}

	function get_list() 
	{
		$this->db->select('tbl.*');
		
		if($this->where)
		$this->db->where($this->where);
		if($this->like)
		$this->db->or_like($this->like);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		else
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
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