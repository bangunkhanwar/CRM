<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Stock_current_model extends Base_Model {
	
	function __construct() {
		parent::__construct();
		// $this->set_database('beon');
		$this->set_schema('omnichannel');
		$this->set_table('trStockCurrent');
		$this->set_pk('StoreCode','SKU');
		$this->set_log(false);
	}
	
	function counts($storecode,$brand,$status_trx_key)
	{
		$where_store = '';
		$where_aktif = '';
		
		if($storecode != 'ALL')
		{
			$where_store = 'AND "tbl"."StoreCode" =\''.$storecode.'\'';
		}else{
			$where_store = 'AND 1=1';
		}
		
		if($brand != 'ALL')
		{
			$where_brand = 'AND "fidBrand" =\''.$brand.'\' ';
		}else{
			$where_brand = 'AND 1=1';
		}
		
		if($status_trx_key != 'ALL')
		{
			$where_aktif = 'AND "isOmni" =\''.$status_trx_key.'\'';
		}else{
			$where_aktif = 'AND 1=1';
		}
		
		
		$currentDate = date('Ymd');		
		$qry =
<<<EOT
SELECT
	count( * ) 
FROM
	( SELECT * FROM "omnichannel"."trStockCurrent" ) tbl
	JOIN ( SELECT "SKU", max( "TransDate" ) AS "TransDate" FROM "omnichannel"."trStockCurrent" WHERE "TransDate" <= '$currentDate' GROUP BY "SKU" ) period ON tbl."SKU" = period."SKU" 
	AND tbl."TransDate" = period."TransDate"
	LEFT JOIN "msProduct" mp ON tbl."SKU" = mp."SKU"
	LEFT JOIN "msStore" mss ON tbl."StoreCode" = mss."StoreCode"
	LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU" = "mps"."SKU" 
	AND "tbl"."StoreCode" = "mps"."StoreCode" 
WHERE
	"tbl"."Quantity" > 0 $where_store $where_brand $where_aktif
EOT;

		if ($this->where)
		$this->db->where($this->where);
		// $query = $this->db->get($this->schema.'.'.$this->table.' tbl');
		$query = $this->db->query($qry);

		$row = $query->row_array();
		return $row['count'];
	}
	
	function get_list($storecode,$search,$offset,$limit,$status_trx_key,$brand)
	{		
		$where_store1 = '1=1';
		$where_store = '';
		$where_aktif = '';
		$where_brand = '1=1';
				
		if($brand != 'ALL')
		{
			$where_brand = '"fidBrand" =\''.$brand.'\' AND ';
		}else{
			$where_brand = '1=1 AND';

		}
		if($storecode != 'ALL')
		{
			$where_store1 = '"StoreCode" =\''.$storecode.'\'';
			$where_store = 'AND "StoreCode" =\''.$storecode.'\'';
		}
		if($status_trx_key != 'ALL')
		{
			$where_aktif = 'AND "isOmni" =\''.$status_trx_key.'\'';
		}
		$currentDate = date('Ymd');
		$qry =
<<<EOT
SELECT tbl."StoreCode"
			,mss."Description" "StoreName"
			,tbl."SKU"
			,mp."Description"
			,mpd."Description" as "BrandName"
			,tbl."GrossSales"
			,tbl."GrossSalesTot"
			,tbl."Quantity"
			,tbl."TransDate"
			,tbl."LastUpdate"
			,"mps"."StoreCode" "Stores"
			,"mps"."isOmni" 
			FROM (select *
			from "omnichannel"."trStockCurrent"
				where $where_store1) tbl
	join (select "SKU",max("TransDate") as "TransDate"
			from "omnichannel"."trStockCurrent"
			where "TransDate" <= '$currentDate'
				$where_store
			group by "SKU") period
		ON tbl."SKU" = period."SKU" AND tbl."TransDate" = period."TransDate"
	LEFT JOIN "msProduct" mp
		ON tbl."SKU" = mp."SKU"
	LEFT JOIN "msProductBrand" mpd
		ON mp."fidBrand" = mpd."idProductBrand"
	LEFT JOIN "msStore" mss ON tbl."StoreCode" = mss."StoreCode"
	LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU" = "mps"."SKU" and "tbl"."StoreCode" = "mps"."StoreCode"
		WHERE $where_brand
	( UPPER ( "tbl"."SKU" ) LIKE'%$search%' OR UPPER ( "tbl"."Description" ) LIKE'%$search%' ) 
	AND "tbl"."Quantity" > 0 $where_aktif 
	ORDER BY "StoreCode","SKU" ASC
	OFFSET $offset LIMIT $limit;
EOT;

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
		
		$query = $this->db->query($qry);
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
	
	function get_list_old($sku)
	{
		// echo $sku;
	
		// $this->db->select('*');
		// $this->db->select('tbl.*,mss.Description "StoreName",mss.Phone "PhoneStore" ');
		// $this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
		$qry =

<<<EOT
		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ($sku)
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
EOT;
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
		
		$query = $this->db->query($qry);
		
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
	
function get_list_detail($sku)
	{
		// echo $sku;
	
		// $this->db->select('*');
		// $this->db->select('tbl.*,mss.Description "StoreName",mss.Phone "PhoneStore" ');
		// $this->db->join('public.msStore mss','tbl.StoreCode=mss.StoreCode','left');
		$qry =

<<<EOT
		SELECT 
	"tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" ,
	"tbl"."SKU",
	"tbl"."Description",
	"tbl"."Quantity"
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ($sku)
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone","tbl"."SKU"
	ORDER BY
		"tbl"."StoreCode" ASC,"tbl"."Description" ASC
EOT;
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
		
		$query = $this->db->query($qry);
		
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
?>