<?php

class File_upload_omni_model extends Base_Model {

    function __construct() {

        parent::__construct();
		$this->set_schema('omnichannel');
		$this->set_table('fileUpload');
		$this->set_pk('idFileUpload');
		$this->set_log(false);
    }
	
	function get_list_()
	{       
		$this->db->select('tbl.*');
		$this->db->order_by('tbl.idFileUpload', 'ASC');

		$this->db->where($this->where);

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->table.' tbl');
		else
			$query = $this->db->get($this->table.' tbl',$this->limit,$this->offset);
		
		
			echo $this->db->last_query();
			exit;
			
		if($query->num_rows()>0)
		{
			return $query;
		}else
		{
			$query->free_result();
            return $query;
        }
        
    }
	
	function get_list() 
	{
		$this->db->select('tbl.*');
		
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
	
	
	function get_images($table_name='',$id=0,$limit=0)
	{
		$this->db->select('tbl.*');
		$this->db->order_by('tbl.idFileUpload', 'ASC');
		$where['tbl.SKU']=$id;
		$where['tbl.tableName']=$table_name;
		$this->db->where($where);
		//if ($limit>0)
		//{
			$query = $this->db->get($this->table.' tbl');
		//}else
		//{
		//	$query = $this->db->get($this->table.' tbl',$limit);
		//}
		
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
	
	function get_max()
	{       
		$this->db->select('max("Order") "max"');
		$this->db->where($this->where);

		// if (!$this->limit AND !$this->offset)
			// $query = $this->db->get($this->table.' tbl');
		// else
			// $query = $this->db->get($this->table.' tbl',$this->limit,$this->offset);
			
			
		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		else
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		// echo $this->db->last_query();
			// exit;
		$row = $query->row_array();
	
		return $row['max'];
        
    }
}