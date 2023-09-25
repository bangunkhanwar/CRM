<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Points_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('points');
		$this->set_table('Points');
		$this->set_pk('IdRec');
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
		$this->db->select('prm.PromoCode');
		$this->db->select('prm.Name "PromoName"');
		$this->db->select('prm.Description "PromoDescription"');
		$this->db->select('prm.CustTypeList');
		$this->db->select('prm.StartPromo');
		$this->db->select('prm.EndPromo');
		if($this->where)
		$this->db->where($this->where);
		$this->db->join('promo."msPromo" prm','tbl."PromoCode" = prm."PromoCode"','left');
		
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
	
	function posting($membercode='',$tahun='',$bulan='')
	{ 
		$query = $this->db->query('SELECT "member"."sp_InsertMemberPoints"(\''.$membercode.'\',\''.$tahun.'\',\''.$bulan.'\')');

		// $query = $this->db->query($qry);
		return $query;
		// echo $this->db->last_query();
		// exit; 

	}
	
	function top_member_point($date_start,$date_end)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$id_operator = $this->session->userdata('idMsOperator');
		$where_str = '';
		if(!$is_super_user)
		{
			$where_str = 'AND "StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')';
		}
		$qry = 'SELECT t_point."MemberCode",t_point."Pts",COALESCE(mbr."Name",\'-\')"Name",mbr."StoreCode" FROM (SELECT
	"MemberCode",
	SUM( "Debit" - "Credit" ) "Pts"
FROM
	points."Points" 
WHERE
	"TransDate" BETWEEN \''.$date_start.'\' AND \''.$date_end.'\' '.$where_str.'
GROUP BY
	"MemberCode"
ORDER BY "Pts" DESC limit 10) t_point 
INNER JOIN member."Member" mbr ON t_point."MemberCode" = mbr."MemberCode"  ';

		$query = $this->db->query($qry);
		// echo $this->db->last_query();
		
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