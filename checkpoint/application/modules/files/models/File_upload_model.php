<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class File_upload_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('public');
		$this->set_table('fileUpload');
		$this->set_pk('idFileUpload');
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
	
	function setProfile($guid,$memberCode)
	{
		$query =
<<<EOT
	UPDATE "public"."fileUpload" SET "UseFor" = 1 
		where "UploadBy" = '$memberCode' AND "FileServerName" = '$guid';
	UPDATE "public"."fileUpload" SET "UseFor" = 0 
		where "UploadBy" = '$memberCode'
			AND "FileServerName" <> '$guid' 
			AND "UseFor" = 1 ;

EOT;
		$this->db->query($query);
		// echo $query;
		// exit;
	}
}