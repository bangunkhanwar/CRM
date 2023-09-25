<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Promo_model extends Base_model {

	function __construct() {

        parent::__construct();
		$this->set_schema('promo');
		$this->set_table('msPromo');
		$this->set_pk('PromoCode');
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
		// $this->db->select('*');
		$this->db->select('tbl.*');
		$this->db->select('fu.idFileUpload');
		$this->db->select('pd.GetVoucher');
		$this->db->select('pd.Deadlines');
		$this->db->select('\''.'http://crm.elcorps.com'.'\' || TRIM(LEADING FROM "fu"."FilePath",\''.'.'.'\')||"fu"."FileServerName"||\''.'.'.'\'||"fu"."FileExt" as "Image"',false);
		$this->db->join('fileUpload fu','tbl.fidFileUpload = fu.idFileUpload','LEFT');
		$this->db->join('promo.msPromoDetail20 pd','tbl.PromoCode = pd.PromoCode','LEFT');

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