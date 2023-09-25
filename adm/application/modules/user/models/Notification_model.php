<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Notification_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('admpanel');
		$this->set_table('trNotification');
		$this->set_pk('idNotification');
		 // $this->set_pk('ItemCode');
		$this->set_log(false);
    }	
		
	function count() 
	{
		$data = array();
		$this->db->select('count(*) as num_rows');
		$this->db->join('admpanel.msNotificationType mnt','tbl.fidMsNotificationType=mnt.idMsNotificationType','left');
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
		$this->db->select('*');
		
		$this->db->join('admpanel.msNotificationType mnt','tbl.fidMsNotificationType=mnt.idMsNotificationType','left');
		$this->db->join('(SELECT "fidNotification" FROM admpanel."trReadNotification" WHERE "fidMsOperator" = \''.$id_operator.'\') ntr','tbl."idNotification"=ntr."fidNotification"','left');

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