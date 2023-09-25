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
	
    function get_list_pos($membercode) 
	{
		$this->db->select('
			tbl."fidMemberCategory"
			,tbl."MemberCode"
			,tbl."IdCardNumber"
			,tbl."Name"
			,tbl."Password"
			,tbl."RegistrationDate"
			,tbl."CityOfBirth"
			,tbl."DateOfBirth"
			,tbl."Address"
			,tbl."RT"
			,tbl."RW"
			,tbl."Village"
			,tbl."District"
			,tbl."City"
			,tbl."Provinces"
			,tbl."PosCode"
			,tbl."Phone"
			,tbl."Handpone"
			,tbl."Email"
			,tbl."Sex"
			,tbl."Married"
			,tbl."CreatedBy"
			,tbl."CreatedDate"
			,tbl."ModifiedBy"
			,tbl."ModifiedDate"
			,tbl."LastUpdate"
			,tbl."isActive"
			,tbl."StoreCode"
			,tbl."ValidUntil"
			,tbl."Barcode"
			,tbl."fIdFileUpload"
			,tbl."OTP"
			,tbl."FullName"
			,tbl."isMerchantPartner"
			,tbl."MerchantPartnerCode"
			,tbl."MemberCodeMerchantPartner"
			,fu."FileServerName"
			,fu."FileType"
			,fu."FilePath"
			,fu."FileExt"
			,fu."FileSize"
			,fu."IsImage"
			,fu."ImageWidth"
			,fu."ImageHeight"
			,fu."ImageType"
			,fu."ImageSizeStr"
			,fu."FileName"
			,fu."UploadBy"
			,fu."UseFor"
			,fu."idFileUpload"
			,pt."TotalPoints"',false);
		if($this->where)
		$this->db->where($this->where);
		$this->db->join('( SELECT * FROM "public"."fileUpload" WHERE "UseFor" = 1  and "UploadBy" = \''.$membercode.'\' ORDER BY "idFileUpload" DESC LIMIT 1 ) fu','tbl.MemberCode = fu.UploadBy','left');
		$this->db->join('member.MemberPointsCurrently pt','tbl.MemberCode = pt.MemberCode','left');
		
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
	
	function get_last($idInc)
	{
		$this->db->select('RIGHT(tbl."MemberCode",4) "MemberCode"',false);
		$this->db->order_by('tbl.MemberCode', 'DESC');
		$this->db->limit(1);
		$this->db->group_by('tbl.MemberCode');
		$this->db->where("LEFT(tbl.\"MemberCode\",6) = '$idInc'");
		// $query = $this->db->get($this->table.' tbl');
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');

		// echo $this->db->last_query();
		// exit;
		
		$data = $query->row_array();
		$query->free_result();
		return $data;
	}
	
	
	function get_available_notif_old()
	{
		$qry = 'SELECT
	mbr.*
FROM
	member."Member" mbr
	LEFT JOIN member."Messages" mg ON mbr."MemberCode" = mg."MemberCode" 
	AND mg."MessageType" IN ( 3, 5 )
WHERE
	mg."idMessage" IS NULL
	AND ("Handpone" is not NULL or "Email" is not null)';

		$query = $this->db->query($qry);
		// echo $this->db->last_query();
		// die;
        if($query->num_rows()>0)
		{
			return $query;
        
		}else
		{
			$query->free_result();
            return $query;
        }
	}
	
	function get_available_notif()
	{
		$qry = 'SELECT
	mbr.*
FROM
	member."Member" mbr
	LEFT JOIN ws."Messages" mg ON mbr."MemberCode" = mg."MemberCode" 
	AND mg."SMSType" = 2
WHERE
	mg."idMessage" IS NULL
	AND ("Handpone" is not NULL or "Email" is not null)
	AND "Handpone" not in (SELECT "Msisdn" FROM ws."Messages")';

		$query = $this->db->query($qry);
		// echo $this->db->last_query();
		// die;
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
	
	function get_new_custcode($prefix)
	{
		$this->db->select('RIGHT(tbl."MemberCode",7) "MemberCode"',false);
		$this->db->order_by('tbl.MemberCode','DESC');
		$this->db->group_by('tbl.MemberCode');
		
		
		$this->db->where("LEFT(tbl.\"MemberCode\",4) = '$prefix' AND CHAR_LENGTH(tbl.\"MemberCode\") = 11");
		
		$query = $this->db->get($this->schema.'.'.$this->table.' tbl','1','0');
		// echo $this->db->last_query();
		// exit;
		
		$no_last =  $query->row_array();
		$no_next = 1;
		if ($no_last)
		{
			$no_next = $no_last['MemberCode']+1;
		}

		$no = $prefix.sprintf('%07s', $no_next);
	
		$query->free_result();
		
		return $no;
	}
}