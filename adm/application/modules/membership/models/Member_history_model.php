<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_history_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('member');
		$this->set_table('MemberHistory');
		$this->set_pk('IdRec');
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

	function gen_ref_number($prefix = '')
	{
		$transnumber_length	= 14;

		$this->db->select('RIGHT(tbl."RefNum",4) "RefNum"', false);
		$this->db->order_by('tbl.RefNum', 'DESC');
		$this->db->group_by('tbl.RefNum');

		$prefix_length		= strlen($prefix);
		$autonumber_length	= $transnumber_length - $prefix_length;

		$this->db->where("LEFT(tbl.\"RefNum\",10) = '$prefix' AND CHAR_LENGTH(tbl.\"RefNum\") = $transnumber_length");

		$query = $this->db->get($this->schema . '.' . $this->table . ' tbl', '1', '0');
		// echo $this->db->last_query();
		// exit;

		$no_last =  $query->row_array();
		$no_next = 1;
		if ($no_last) {
			$no_next = $no_last['RefNum'] + 1;
		}

		$no = $prefix . sprintf('%0' . $autonumber_length . 's', $no_next);

		$query->free_result();

		return $no;
	}

}