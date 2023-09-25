<?php

class Product_parent_model extends Base_Model {

    function __construct() {

        parent::__construct();
		$this->set_schema('public');
    	$this->set_table('msProductParent');
		$this->set_pk('idMsProductParent','SKUParent');
		//$this->set_code('kode');
		$this->set_log(false);
	}	
		
	// function count_old() 
	// {
		// $data = array();
		// $this->db->select('count(*) as num_rows');
		// if ($this->where)
		// {
			// if (count($this->like)>0)
			// {
				// $like = '( 1=0 ';
				// foreach ($this->like as $key => $value)
				// {
					// $like .= ' OR '.$key." LIKE '%".$value."%'";
				// }
				// $like .= ')';
				// $this->where[$like] = null;
			// }
			// $this->db->where($this->where);
		// }else
		// {
			// $this->db->or_like($this->like);
		// }
				
		// $query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		// $row = $query->row_array();
	
		// return $row['num_rows'];
	// }
	
	function count() 
	{
			$qry = 		
<<<EOT
		SELECT  m_parent.*
		, t_upload."fidProductParent" 
		, t_upload."filePath"
		, t_upload."fileServerName"
		, t_upload."Order" 
		FROM
		(SELECT
			*
		FROM
			"public"."msProductParent"
		ORDER BY "idMsProductParent") m_parent
		FULL OUTER JOIN 
		(SELECT  
			"fidProductParent" ,"filePath","fileServerName","Order" 
			FROM "omnichannel"."fileUpload" 
			WHERE "Order" = 1 and "fidUploadType" = 1) t_upload
		on m_parent."idMsProductParent"  = t_upload."fidProductParent"
		ORDER BY m_parent."idMsProductParent"
EOT
;
		$query = $this->db->query($qry);

		// echo $this->db->last_query();
		// die;
		$this->db->where($this->where);
		$this->db->like($this->like);
		
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		// if (!$this->limit AND !$this->offset)
			// $query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		// else
			// $query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
		// exit;
        // if($query->num_rows()>0)
		// {
			// return $query;
        
		// }else
		// {
			// $query = $row['num_rows'];
			// return $query;
        // }
		return $query->num_rows();

		
	}
	
    function get_list() 
	{
		$this->db->select('*');
		// $this->db->select('pb.Description BrandName');
		// $this->db->select('fu.filePath path');
		// $this->db->select('fu.fileServerName fileName');
		// $this->db->select('fu.idFileUpload');
		// $this->db->join('fileUpload fu','tbl.fidFileUpload = fu.idFileUpload');
		// $this->db->join('msProductBrand pb','tbl.fidProductBrand = pb.idProductBrand');

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
	
	 function get_list_old($brand,$img_avl) 
	{
		$where_brand = '';
		$where_img_avl = '';
		
		if($brand != 'ALL')
		{
			$where_brand = ' "fidProductBrand" =\''.$brand.'\' ';
		}else{
			$where_brand = '1=1';
		}
		
		if($img_avl == 'ALL')
		{
			$where_img_avl = ' "Order" = 1 and "fidUploadType" = 1 ';
		}else if($img_avl==2){
			$where_img_avl = ' "Order" = 1 and "fidUploadType" = 1 AND ("filePath" IS NULL OR "fileServerName" IS NULL) '; // no image
		}
		// else if($img_avl==1){
			// $where_img_avl = ' "Order" = 1 and "fidUploadType" = 1 AND "fileServerName" IS not null '; // no image
		// }
		
		
	
		$limit = $this->limit;
		$offset = $this->offset;
		
		$limit_value  = '';
		$offset_value  = '';
		
		if($limit)
		{
			$limit_value = 'limit '.$limit.'';
		}
		if($offset)
		{
			$offset_value  = ' offset '.$offset.'';
		}
		$qry = 		
<<<EOT
		SELECT  m_parent.*
		, t_upload."fidProductParent" 
		, t_upload."filePath"
		, t_upload."fileServerName"
		, t_upload."Order" 
		FROM
		(SELECT
			*
		FROM
			"public"."msProductParent" where $where_brand
		ORDER BY "idMsProductParent") m_parent
		FULL OUTER JOIN 
		(SELECT  
			"fidProductParent" ,"filePath","fileServerName","Order" 
			FROM "omnichannel"."fileUpload" 
			WHERE $where_img_avl) t_upload
		on m_parent."idMsProductParent"  = t_upload."fidProductParent"
		ORDER BY m_parent."idMsProductParent"
		$limit_value $offset_value
EOT
;
		$query = $this->db->query($qry);

		$this->db->where($this->where);
		$this->db->like($this->like);
		
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		// if (!$this->limit AND !$this->offset)
			// $query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		// else
			// $query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
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
	
	
		function get_product()
	{
		$this->db->order_by('SKUParent');
		$query = $this->db->get('public."msProductParent"');
		
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
		function get_product_name($sku)
	{
		$query = $this->db->query('SELECT * FROM public."msProductParent" WHERE "SKUParent" = \''.$sku.'\'');
		
		// echo $this->db->last_query();
		// exit;
		
		$hasil=array();
		if($query->num_rows()>0)
		{		
			$row = $query->row_array();

			$hasil = $row['SKUParentName'];
			return $hasil;
        
		}else
		{
			$query->free_result();
            return $query;
        }
	}
}