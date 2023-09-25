<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Member_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('member');
		$this->set_table('Member');
		$this->set_pk('MemberCode');
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
		$this->db->select('coalesce(mpc."TotalPoints",0) "TotalPoints"',false);
		$this->db->select('datepoint.LastTransaction');
		if($this->where)
		$this->db->where($this->where);
		$this->db->join('member.MemberPointsCurrently mpc','tbl.MemberCode = mpc.MemberCode','left');
		$this->db->join('(SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint','tbl.MemberCode = datepoint.MemberCode','left');
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
		
		
		$this->db->where("LEFT(tbl.\"MemberCode\",7) = '$nourut' AND CHAR_LENGTH(tbl.\"MemberCode\") = 11");
		
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
	
	function get_member_by_age($date_start,$date_end)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$id_operator = $this->session->userdata('idMsOperator');
		$where_str = '';
		if(!$is_super_user)
		{
			$where_str = 'AND "StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')';
		}
		$qry = 'SELECT tbl."AGE",COALESCE(tbl_age."CT",0) "CT", "ColorCode" FROM (
		SELECT \'<20\' AS "AGE", 0 AS "CT", \'#00A5A8\' AS "ColorCode" UNION ALL
		SELECT \'20-24\' AS "AGE", 0 AS "CT", \'#626E82\' AS "ColorCode" UNION ALL
		SELECT \'25-29\' AS "AGE", 0 AS "CT", \'#FF7D4D\' AS "ColorCode" UNION ALL
		SELECT \'30-34\' AS "AGE", 0 AS "CT", \'#FF4558\' AS "ColorCode" UNION ALL
		SELECT \'>=35\' AS "AGE", 0 AS "CT", \'#28D094\' AS "ColorCode") tbl LEFT JOIN 
		(SELECT CASE 
				WHEN t_age."Age"<20 THEN \'<20\'
				WHEN t_age."Age" BETWEEN 20 AND 24 THEN \'20-24\'
				WHEN t_age."Age" BETWEEN 25 AND 29 THEN \'25-29\'
				WHEN t_age."Age" BETWEEN 30 AND 34 THEN \'30-34\'
				WHEN t_age."Age">=35 THEN \'>=35\'
			ELSE
			\'-\'
		END AS "AGE", SUM("AgeCount") "CT"
		 FROM (SELECT
			(date_part(\'year\',age( "DateOfBirth" ))) "Age",
			"count" ( * ) "AgeCount" 
		FROM
			member."Member" 
		WHERE
			"DateOfBirth" IS NOT NULL AND (date_part(\'year\',age( "DateOfBirth" ))) BETWEEN 1 AND 200
			AND "RegistrationDate" BETWEEN \''.$date_start.'\' AND \''.$date_end.'\' '.$where_str.'
		GROUP BY
			date_part(
			\'year\',
			age( "DateOfBirth" )) 
		ORDER BY
		date_part(\'year\',age( "DateOfBirth" ))) t_age GROUP BY "AGE") tbl_age ON tbl."AGE" = tbl_age."AGE"';
	
	$query = $this->db->query($qry);
	
		if($query->num_rows()>0)
		{
			return $query;
		
		}else
		{
			$query->free_result();
			return $query;
		}
	
	}
	
	function get_cust_type_reg($date_start,$date_end)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$id_operator = $this->session->userdata('idMsOperator');
		$where_str = '';
		if(!$is_super_user)
		{
			$where_str = 'AND "StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')';
		}
		$qry = 'SELECT COUNT
	( * ) "Count",
CASE
	
	WHEN "FirstLoginApps" IS NOT NULL THEN
	\'Have Apps\' ELSE\'Don\'\'t Have Apps\' 
	END AS "LoginType" 
FROM
	MEMBER."Member" 
	WHERE "RegistrationDate" BETWEEN \''.$date_start.'\' AND \''.$date_end.'\' '.$where_str.'
	AND "DateOfBirth" IS NOT NULL 
	AND (date_part(\'year\',age( "DateOfBirth" ))) BETWEEN 1 AND 200 
GROUP BY "LoginType"';
	
	$query = $this->db->query($qry);
	
		if($query->num_rows()>0)
		{
			return $query;
		
		}else
		{
			$query->free_result();
			return $query;
		}
	
	}
		
	function get_cust_registration_type($date_start,$date_end)
	{
		$is_super_user 	= $this->session->userdata('isSuperUser');
		$id_operator = $this->session->userdata('idMsOperator');
		$where_str = '';
		if(!$is_super_user)
		{
			$where_str = 'AND "StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"=\''.$id_operator.'\')';
		}
		$qry = 
'SELECT
	COUNT (*) "Count",
	CASE WHEN ("FirstLoginApps" IS NOT NULL) AND ("isVerifiedHandPhone" = 1) THEN \'Have Apps and Verified\' ELSE
	CASE WHEN ("FirstLoginApps" IS NOT NULL) AND ("isVerifiedHandPhone" = 0) THEN \'Have Apps and Not Verified\' ELSE
	CASE WHEN ("FirstLoginApps" IS NULL) AND ("isVerifiedHandPhone" = 1) THEN \'Don\'\'t Have Apps and Verified\' ELSE
	CASE WHEN ("FirstLoginApps" IS NULL) AND ("isVerifiedHandPhone" = 0) THEN \'Don\'\'t Have Apps and Not Verified\' 
END END END END AS "LoginType"
FROM
	MEMBER ."Member"
WHERE
	"RegistrationDate" BETWEEN \''.$date_start.'\' AND \''.$date_end.'\' '.$where_str.'
AND "DateOfBirth" IS NOT NULL
AND (
	date_part(\'year\', age("DateOfBirth"))) BETWEEN 1 AND 200
GROUP BY "LoginType" 
ORDER BY "LoginType" DESC';	
	
		$query = $this->db->query($qry);
		
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