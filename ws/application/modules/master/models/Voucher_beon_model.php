<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_beon_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_database('beon');
		$this->set_schema('public');
		$this->set_table('msVoucher');
		$this->set_pk('VoucherID');
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
	function get_last($idInc)
	{
		$this->db->select('RIGHT(tbl."VoucherId",5) "VoucherId"',false);
		$this->db->order_by('tbl.VoucherId', 'DESC');
		$this->db->limit(1);
		$this->db->group_by('tbl.VoucherId');
		$this->db->where("LEFT(tbl.\"VoucherId\",5) = '$idInc'");
		// $query = $this->db->get($this->table.' tbl');
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');

		// echo $this->db->last_query();
		// exit;
		
		$data = $query->row_array();
		$query->free_result();
		return $data;
	}
	function update_promocode($voucherId,$promoCode){
		$a = null;
		if($promoCode==''){
		$qry = '
		UPDATE "public"."msVoucher" SET "PromoCode" = \''.$a.'\' where "VoucherID" = '.quotedStr($voucherId).'';
		}else{
		$qry = '
		UPDATE "public"."msVoucher" SET "PromoCode" = '.quotedStr(quotedStr(quotedStr($promoCode))).' where "VoucherID" = '.quotedStr($voucherId).'';
		}
		
		$query = $this->db->query($qry);
		return $query;
	}
}