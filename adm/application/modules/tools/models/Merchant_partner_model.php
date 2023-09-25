<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Merchant_partner_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('member');
		$this->set_table('msMerchantPartner');
		$this->set_pk('MerchantPartnerCode');
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
	
	function get_last_transnum($sequence)
	{
		$length_autonumber  = 4;
		$year = date('y');
		$month = date('m');
		$nourut = strtoupper($sequence).$year.$month;
		// return $prefix;
		$no = '';
		$length_nourut = strlen($nourut);
		
		$this->db->select('RIGHT(tbl."MerchantPartnerCode",'.$length_autonumber.') "MerchantPartnerCode"',false);
		$this->db->order_by('tbl.MerchantPartnerCode','DESC');
		$this->db->group_by('tbl.MerchantPartnerCode');
		
		
		$this->db->where("LEFT(tbl.\"MerchantPartnerCode\",".$length_nourut.") = '$nourut'");
		
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl','1','0');
		// echo $this->db->last_query();
		// exit;
		
		$no_last =  $query->row_array();
		$no_next = 1;
		if ($no_last)
		{
			$no_next = $no_last['MerchantPartnerCode']+1;
		}

		$no = $nourut.sprintf('%0'.$length_autonumber.'s', $no_next);
	
		$query->free_result();
		
		return $no;
	}
}