<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Customer_order_header_model extends Base_Model {
	
	function __construct() {
		parent::__construct();
		// $this->set_database('beon');
		$this->set_schema('omnichannel');
		$this->set_table('trCustomerOrderHeader');
		$this->set_pk('TransNum');
		$this->set_log(false);
	}
	
    function count() 
	{
		$data = array();
	
		$this->db->join('(SELECT "TransNum", string_agg("StoreCode", \',\' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list','tbl."TransNum" = str_list."TransNum"','left',false);
		$this->db->join('omnichannel.msTransStatus sts','tbl.TransStatus=sts.TransStatus','left');
		$this->db->join('omnichannel.trCustomerOrderPaymentStatus orderPaymentStatus','tbl.TransNum=orderPaymentStatus.TransNum','left');
		$this->db->join('omnichannel.msPaymentType paymentType','orderPaymentStatus.fidPaymentType=paymentType.idPaymentType','left');
		$this->db->join('member.Member member','tbl.CustCode=member.MemberCode','left');
		$this->db->where($this->where);
		$this->db->or_like($this->like);

		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
	
		return $query->num_rows();
	}
	
	function count_status()
	{
		$this->db->select('tbl."TransStatus", COUNT ( * ) "count"',false);
		
		$this->db->join('(SELECT "TransNum", string_agg("StoreCode", \',\' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list','tbl."TransNum" = str_list."TransNum"','left',false);
		$this->db->join('omnichannel.msTransStatus sts','tbl.TransStatus=sts.TransStatus','left');
		$this->db->join('omnichannel.trCustomerOrderPaymentStatus orderPaymentStatus','tbl.TransNum=orderPaymentStatus.TransNum','left');
		$this->db->join('omnichannel.msPaymentType paymentType','orderPaymentStatus.fidPaymentType=paymentType.idPaymentType','left');
		
		$this->db->group_by('tbl.TransStatus');
		
		$this->db->where($this->where);
		$this->db->or_like($this->like);

		$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
	
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
		$this->db->select('sts."Description" "StatusDescription"');
		$this->db->select('sts."Note" "StatusNote"');
		$this->db->select('sts."StatusColor"');
		$this->db->select('sts."IconPath" "StatusIcon"');
		$this->db->select('sts.Description');
		$this->db->select('paymentType.PaymentTypeCode');
		$this->db->select('str_list."StoreCodeList"',false);
		$this->db->select('adr_list."AddressList"',false);
		$this->db->select('member."Name" "MemberName"');
		
		$this->db->join('(SELECT "TransNum", string_agg("StoreCode", \',\' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list','tbl."TransNum" = str_list."TransNum"','left',false);
		$this->db->join('(SELECT "TransNum", string_agg ( \'Store: \'||"StoreCode"||\',\'||"RecipientName"||\' (\'||"Address"||\'), Phone:\'||"Phone", \'<br>\' ORDER BY "StoreCode" ) AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP BY 1 ) adr_list ','tbl."TransNum" = adr_list."TransNum"','left',false);
		$this->db->join('omnichannel.msTransStatus sts','tbl.TransStatus=sts.TransStatus','left');
		$this->db->join('omnichannel.trCustomerOrderPaymentStatus orderPaymentStatus','tbl.TransNum=orderPaymentStatus.TransNum','left');
		$this->db->join('omnichannel.msPaymentType paymentType','orderPaymentStatus.fidPaymentType=paymentType.idPaymentType','left');
		$this->db->join('member.Member member','tbl.CustCode=member.MemberCode','left');
		if($this->where)
		$this->db->where($this->where);
		if($this->like)
		$this->db->or_like($this->like);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		else
			$query = $this->db->get($this->schema.'.'.$this->table.' tbl',$this->limit,$this->offset);
		
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
?>