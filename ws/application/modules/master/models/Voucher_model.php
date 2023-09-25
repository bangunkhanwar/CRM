<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Voucher_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('voucher');
		$this->set_table('Voucher');
		$this->set_pk('VoucherId');
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
	function get_voucher_category() 
	{
		$this->db->select('tbl.*');
		$this->db->select('fu.idFileUpload');
		$this->db->select('VSC.idSubCategory');
		$this->db->select('VSC.ProductCode');
		$this->db->select('VSC.Description as DescSubCategory');
		$this->db->select('mm.Name');
		// $this->db->select('VC.idCategory');
		// $this->db->select('VC.fidVoucherType as TypeVoucherApps');
		$this->db->select('\''.'http://crm.elcorps.com'.'\' || TRIM(LEADING FROM "fu"."FilePath",\''.'.'.'\')||"fu"."FileServerName"||\''.'.'.'\'||"fu"."FileExt" as "Image"',false);
		$this->db->join('fileUpload fu','tbl.fidFileUpload = fu.idFileUpload','LEFT');
		$this->db->join('voucher.VoucherSubCategory VSC','tbl.fidVoucherSubCategory = VSC.idSubCategory','LEFT');
		$this->db->join('member.Member mm','tbl.MemberCode = mm.MemberCode','LEFT');
		// $this->db->join('voucher.VoucherCategory VC','tbl.fidVoucherCategory = VC.idCategory','LEFT');
		
		$this->db->where($this->where);
		$this->db->like($this->like);
		
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
	function get_last($idInc,$digitamount)
	{
		$this->db->select('RIGHT(tbl."VoucherId",5) "VoucherId"',false);
		$this->db->order_by('tbl.VoucherId', 'DESC');
		$this->db->limit(1);
		$this->db->group_by('tbl.VoucherId');
		if($digitamount==1){
			$this->db->where("LEFT(tbl.\"VoucherId\",5) = '$idInc'");
		}else if($digitamount==2){
			$this->db->where("LEFT(tbl.\"VoucherId\",6) = '$idInc'");
		}
		// $query = $this->db->get($this->table.' tbl');
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');

		// echo $this->db->last_query();
		// exit;
		
		$data = $query->row_array();
		$query->free_result();
		return $data;
	}	
}