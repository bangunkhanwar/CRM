<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Order_detail_model extends Base_Model {

	function __construct() {
        parent::__construct();
		$this->set_schema('omnichannel');
		$this->set_table('trCustomerOrderDetail');
		$this->set_pk('TransNum','SKU');
		$this->set_log(false);
    }

    function get_data_order()
    {
		$custcode =$this->session->userdata('CustCode');
		$this->db->select('mp.*,
			tr1."QtyEPO",
			tr1."TransNum"',false);

		$this->db->join('(SELECT * FROM epo."trEPODetail" WHERE ("TransStatus" = 0 AND "CustCode" = \''.$custcode.'\' and "CustCode" <> \'\') ) tr1 ','mp.SKU = tr1.SKU','left');

		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		if (!$this->limit AND !$this->offset)
			$query = $this->db->get('msProduct mp');
		else
			$query = $this->db->get('msProduct mp',$this->limit,$this->offset);
		
		// echo $this->db->last_query();
		// exit;
        
		$data = $query->row_array();
		$query->free_result();
		return $data;

    }

    function get_sum_epo_by_idparent()
    {
		$this->db->select('"TransNum",
			"TransStatus",
			"fidMsProductParent",
			"count" ( "SKU" ) "JumlahSKU",
			"sum" ( "QtyEPO" ) "QtySKU",
			"sum" ( "QtyEPO" * "GrossSales" ) "GrossSalesTotal",
			"sum" ( ("Disc" * ( "GrossSales" / 100 )) * "QtyEPO" ) "DiscountTotal",
			"sum" ( "RetailSales" ) "RetailSalesTotal"',false);

		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		foreach ($this->group_by as $key => $value)
		{
			$this->db->group_by($value);
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

    function get_sum_epo()
    {
		$this->db->select('
			"count" ( "SKU" ) "JumlahSKU",
			"sum" ( "QtyEPO" ) "QtySKU",
			"sum" ( "QtyEPO" * "GrossSales" ) "GrossSalesTotal",
			"sum" ( ("Disc" * ( "GrossSales" / 100 )) * "QtyEPO" ) "DiscountTotal",
			"sum" ( "RetailSales" ) "RetailSalesTotal"',false);

		if($this->where)
		$this->db->where($this->where);
		
		foreach ($this->order_by as $key => $value)
		{
			$this->db->order_by($key, $value);
		}

		foreach ($this->group_by as $key => $value)
		{
			$this->db->group_by($value);
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