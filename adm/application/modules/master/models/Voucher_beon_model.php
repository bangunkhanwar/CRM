<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_beon_model extends Base_Model {

	function __construct() {
        parent::__construct();
		$this->set_database('beon');
		$this->set_schema('public');
		$this->set_table('msVoucher');
		$this->set_pk('VoucherID');
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

    function gen_voucher_number($prefix = '')
	{
		$transnumber_length	= 10;

		$this->db->select('RIGHT(tbl."VoucherID",6) "VoucherID"', false);
		$this->db->order_by('tbl.VoucherID', 'DESC');
		$this->db->group_by('tbl.VoucherID');

		$prefix_length		= strlen($prefix);
		$autonumber_length	= $transnumber_length - $prefix_length;

		$this->db->where("LEFT(tbl.\"VoucherID\",4) = '$prefix' AND CHAR_LENGTH(tbl.\"VoucherID\") = $transnumber_length");

		$query = $this->db->get($this->schema . '.' . $this->table . ' tbl', '1', '0');
		// echo $this->db->last_query();
		// exit;

		$no_last =  $query->row_array();
		$no_next = 1;
		if ($no_last) {
			$no_next = $no_last['VoucherID'] + 1;
		}

		$no = $prefix . sprintf('%0' . $autonumber_length . 's', $no_next);

		$query->free_result();

		return $no;
	}
	
}