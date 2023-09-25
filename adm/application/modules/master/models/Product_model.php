<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Product_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('public');
		$this->set_table('msProduct');
		$this->set_pk('SKU');
		$this->set_log(false);
    }

    function count() 
	{
		$data = array();
		$this->db->select('count(*) as num_rows');
		
		// $this->db->join('msProductDept dpt',' CAST(tbl.FDEPT as INTEGER) = dpt.idDept','LEFT',false);
		if ($this->where)
		{
			if (count($this->like)>0)
			{
				$like = '( 1=0 ';
				foreach ($this->like as $key => $value)
				{
					$like .= ' OR '.$key." LIKE '".$value."%'";
				}
				$like .= ')';
				$this->where[$like] = null;
			}
			$this->db->where($this->where);
		}else
		{
			$this->db->or_like($this->like);
		}
		//$query = $this->db->get('msCostBuy cb');

		$query = $this->db->get($this->table.' tbl');

		// echo $this->db->last_query();
		// exit;

		$row = $query->row_array();
		return $row['num_rows'];
	}

	function get_list()
	{
		$this->db->select('tbl.*');
		// $this->db->select('dpt.DeptName');
		// $this->db->join('msProductDept dpt','CAST(tbl.FDEPT as INTEGER) = dpt.idDept','LEFT',false);
		if ($this->where)
		{
			if (count($this->like)>0)
			{
				$like = '( 1=0 ';
				foreach ($this->like as $key => $value)
				{
					$like .= ' OR '.$key." LIKE '%".$value."%'";
				}
				$like .= ')';
				//$this->where[$like] = null;
			}
			$this->db->where($this->where);
		}else
		{
			$this->db->or_like($this->like);
		}
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		// if (!$this->limit AND !$this->offset)
			// $query = $this->db->get($this->table);
		// else
			// $query = $this->db->get($this->table.'tbl',$this->limit,$this->offset);
		
		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		else
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
		
		//echo $this->db->last_query();
		//exit;

		//$this->db->order_by('mc.id_company', 'ASC');

        if($query->num_rows()>0)
		{
			return $query;
        
		}else
		{
			$query->free_result();
            return $query;
        }
	}

	function get_list_per_supplier()
	{
		$this->db->select('prd.*');
		$this->db->join('msCostBuy cb', 'prd.SKU = cb.SKU', 'left');
		$this->db->where($this->where);
			
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->table.' prd');
		else
			$query = $this->db->get($this->table.' prd',$this->limit,$this->offset);
		
		// echo $this->db->last_query();
		// exit;

		//$this->db->order_by('mc.id_company', 'ASC');

        if($query->num_rows()>0)
		{
			return $query;
        
		}else
		{
			$query->free_result();
            return $query;
        }
	}

	function getAll($sku, $sup_code, $store_code_def){
		$this->db->select('prd.Description, cb.Hbeli, cb.UOM, cb.PPN, cb.ppnBm, cb.Nett, cs.GrossSales, cs.FDEPT');
		$this->db->join('msCostBuy cb', 'prd.SKU = cb.SKU', 'LEFT');
		$this->db->join('msCostSales cs', 'prd.SKU = cs.SKU', 'LEFT');

		$this->db->where('prd.SKU', $sku);
		$this->db->where('cb.SuppCode', $sup_code);
		$this->db->where('cs.StoreCode', $store_code_def);

		$this->db->limit(1);
		$query = $this->db->get($this->table.' prd');

		// echo $this->db->last_query();
		// exit;

		if($query->num_rows()>0)
		{
			return $query->row_array();
        
		}else
		{
			$query->free_result();
            return $query;
        }

	}
	
	function get_dept()
	{		
		$this->db->select('"DeptCode", "DeptName"');
        $this->db->from('msProductDept');
        $this->db->order_by('DeptCode','ASC');
        $query = $this->db->get();

        return $query->result();
		
	}
	
	function get_class()
	{	
		$this->db->select('"Class", "Description"');
        $this->db->from('msProductClass');
        $this->db->order_by('Class','ASC');
        $query = $this->db->get();

        return $query->result();
	}
	
	function get_class_by_dept($id) {
        $this->db->order_by("Class", "ASC");
        $this->db->where("Department", $id);
        $query = $this->db->get("msProductClass");
        if ($query->num_rows() > 0) return $query->result();              
    }
	
	

}

/* End of file product_model.php */
/* Location: ./application/modules/buys/models/product_model.php */