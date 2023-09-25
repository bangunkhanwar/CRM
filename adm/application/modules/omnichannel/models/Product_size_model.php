<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_size_model extends Base_Model {

	function __construct() {
        parent::__construct();
		$this->set_schema('public');
		$this->set_table('msProductSize');
		$this->set_pk('idProductSize');
		$this->set_log(false);
    }

    function get_parent_size()
    {
		$this->db->select('"fidSize"',false);
		$this->db->select('ms."Description" "SizeName"',false);
		$this->db->select('count(*)');

		$this->db->join('msProductSize ms','tbl.fidSize = ms.idProductSize','left');


		if($this->where)
		$this->db->where($this->where);

		$this->db->group_by('fidSize');
		$this->db->group_by('ms.Description');
		
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