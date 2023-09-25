<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_color_model extends Base_Model {

	function __construct() {
        parent::__construct();
		$this->set_schema('public');
		$this->set_table('msProductColor');
		$this->set_pk('idProductColor');
		$this->set_log(false);
    }

    function get_color_list()
    {
		// $this->db->select('DISTINCT mc."ColorCode"',false);
		$this->db->select('DISTINCT mc."idProductColor"',false);
		$this->db->select('mc."ColorName"',false);
		// $this->db->select('mc."ColorStyle"',false);
		// $this->db->select('tbl."MinOrder"',false);
		// $this->db->select('tbl."UnitPack"',false);
		$this->db->join('msProductColor mc','tbl.fidProductColor = mc.idProductColor','left');

		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get('public.msProduct tbl');
		else
			$query = $this->db->get('public.msProduct tbl',$this->limit,$this->offset);
		
		// echo $this->db->last_query();
		// exit;
		// print_r($query);die;
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