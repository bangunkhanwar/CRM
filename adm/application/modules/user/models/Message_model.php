<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Message_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('admpanel');
		$this->set_table('trMessage');
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
		$this->db->select('tbl.idMessage');
		$this->db->select('tbl.fidMsOperatorFrom');
		$this->db->select('tbl.fidMsOperatorTo');
		$this->db->select('tbl.Message');
		$this->db->select('tbl.SendTime');
		$this->db->select('tbl.ReadTime');
		$this->db->select('tbl.isStarred');
		$this->db->select('tbl.fidMessageReply');
		$this->db->select('oprfrom.LoginName "FromOprLoginName"');
		$this->db->select('oprto.LoginName "ToOprLoginName"');
		$this->db->select('oprfrom.FullName "FromOprFullName"');
		$this->db->select('oprto.FullName "ToOprFullName"');
		$this->db->join('admpanel.msOperator oprfrom','tbl.fidMsOperatorFrom = oprfrom.idMsOperator','left');
		$this->db->join('admpanel.msOperator oprto','tbl.fidMsOperatorTo = oprto.idMsOperator','left');
		
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
	
    function addSelect($data_menu){
        $this->db->insert_batch($this->schema.'.'.$this->table, $data_menu);
		// echo $this->db->last_query();
		// exit;
    }

}