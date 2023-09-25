<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Karyawan_hrm_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_database('hrm');
		$this->set_schema('public');
		$this->set_table('karyawan');
		$this->set_pk('id_karyawan');
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