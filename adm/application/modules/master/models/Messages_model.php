<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Messages_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('ws');
		$this->set_table('Messages');
		$this->set_pk('idMessage');
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
		$this->db->select('tbl.*');
		$this->db->select('mpc.TotalPoints');
		if($this->where)
		$this->db->where($this->where);
		$this->db->join('member.MemberPointsCurrently mpc','tbl.MemberCode = mpc.MemberCode','left');
		
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
	
	function get_last_custcode($storecode,$custcatcode)
	{
		$brand = 1;
		
		if(substr($storecode,0,1)=='D')
		{
			$brand = 2;
		}
		$year = date('y');
		$nourut = $brand.substr($storecode,1,3).substr($custcatcode,1,1).$year;
		// return $prefix;
		$no = '';
		
		$this->db->select('RIGHT(tbl."MemberCode",4) "MemberCode"',false);
		$this->db->order_by('tbl.MemberCode','DESC');
		$this->db->group_by('tbl.MemberCode');
		
		
		$this->db->where("LEFT(tbl.\"MemberCode\",7) = '$nourut'");
		
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl','1','0');
		// echo $this->db->last_query();
		// exit;
		
		$no_last =  $query->row_array();
		$no_next = 1;
		if ($no_last)
		{
			$no_next = $no_last['MemberCode']+1;
		}

		$no = $nourut.sprintf('%04s', $no_next);
	
		$query->free_result();
		
		return $no;
	}
}