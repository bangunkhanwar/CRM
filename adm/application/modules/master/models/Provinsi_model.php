<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Provinsi_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('indonesia');
		$this->set_table('Provinsi');
		$this->set_pk('idPropinsi');
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

/* End of file order_model.php */
/* Location: ./application/modules/main/main/order_model.php */