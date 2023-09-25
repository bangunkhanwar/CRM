<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Operator_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('admpanel');
		$this->set_table('msOperator');
		$this->set_pk('idMsOperator');
		 // $this->set_pk('ItemCode');
		$this->set_log(false);
    }	
		
	function count() 
	{
		$id_operator = $this->session->userdata('idMsOperator');
		$data = array();
		$this->db->select('count(*) as num_rows');
		$this->db->join('(SELECT "count"(*) "Count","fidMsOperatorFrom","fidMsOperatorTo",MAX("SendTime") FROM admpanel."trMessage" WHERE "fidMsOperatorTo" = '.$id_operator.' AND "ReadTime" IS NULL GROUP BY "fidMsOperatorFrom","fidMsOperatorTo") unread','tbl.idMsOperator = unread.fidMsOperatorFrom','left');
		$this->db->join('(SELECT "count"(*) "Count","fidMsOperatorFrom","fidMsOperatorTo",MAX("SendTime") FROM admpanel."trMessage" WHERE "fidMsOperatorTo" = '.$id_operator.' GROUP BY "fidMsOperatorFrom","fidMsOperatorTo") msg','tbl.idMsOperator = msg.fidMsOperatorFrom','left');
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
		$id_operator = $this->session->userdata('idMsOperator');
		$this->db->select('tbl.*');
		$this->db->select('unread.Count count_unread');
		$this->db->select('unread.max last_chat_date_unread');
		$this->db->select('msg.Count count');
		$this->db->select('msg.max last_chat_date');
		$this->db->select('msg.last_msg');
		$this->db->select('unread.last_msg_unread');
		$this->db->join('(SELECT "count"(*) "Count","fidMsOperatorFrom","fidMsOperatorTo",MAX("SendTime"),MAX("Message") "last_msg_unread" FROM admpanel."trMessage" WHERE "fidMsOperatorTo" = '.$id_operator.' AND "ReadTime" IS NULL GROUP BY "fidMsOperatorFrom","fidMsOperatorTo") unread','tbl.idMsOperator = unread.fidMsOperatorFrom','left');
		$this->db->join('(SELECT "count"(*) "Count","fidMsOperatorFrom","fidMsOperatorTo",MAX("SendTime"),MAX("Message") "last_msg" FROM admpanel."trMessage" WHERE "fidMsOperatorTo" = '.$id_operator.' GROUP BY "fidMsOperatorFrom","fidMsOperatorTo") msg','tbl.idMsOperator = msg.fidMsOperatorFrom','left');
		
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