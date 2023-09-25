<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_amount_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('voucher');
		$this->set_table('VoucherAmount');
		$this->set_pk('idAmount');
		$this->set_log(false);
    }	
	
	
    function get_list() 
	{
		$this->db->select('*');
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