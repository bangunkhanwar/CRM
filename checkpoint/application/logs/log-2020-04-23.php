<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-23 14:45:35 --> Severity: Warning --> Missing argument 2 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 191 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-04-23 14:45:35 --> Severity: Warning --> Missing argument 3 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 191 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-04-23 14:45:35 --> Severity: Warning --> Missing argument 4 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 191 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-04-23 14:45:35 --> Severity: Warning --> Missing argument 5 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 191 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: status_trx_key /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 52
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: status_trx_key /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 54
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: search /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 84
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: search /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 84
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: offset /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 87
ERROR - 2020-04-23 14:45:35 --> Severity: Notice --> Undefined variable: limit /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 87
ERROR - 2020-04-23 14:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;1519302111200000&quot;
LINE 14:     where &quot;StoreCode&quot; =''1519302111200000','100001111101148'...
                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-23 14:45:36 --> Query error: ERROR:  syntax error at or near "1519302111200000"
LINE 14:     where "StoreCode" =''1519302111200000','100001111101148'...
                                  ^ - Invalid query: SELECT tbl."StoreCode"
			,mss."Description" "StoreName"
			,tbl."SKU"
			,mp."Description"
			,tbl."GrossSales"
			,tbl."GrossSalesTot"
			,tbl."Quantity"
			,tbl."TransDate"
			,tbl."LastUpdate"
			,"mps"."StoreCode" "Stores"
			,"mps"."isOmni" 
			FROM (select *
			from "omnichannel"."trStockCurrent"
				where "StoreCode" =''1519302111200000','100001111101148'') tbl
	join (select "SKU",max("TransDate") as "TransDate"
			from "omnichannel"."trStockCurrent"
			where "TransDate" <= '20200423'
				AND "StoreCode" =''1519302111200000','100001111101148''
			group by "SKU") period
		ON tbl."SKU" = period."SKU" AND tbl."TransDate" = period."TransDate"
	LEFT JOIN "msProduct" mp
		ON tbl."SKU" = mp."SKU"
	LEFT JOIN "msStore" mss ON tbl."StoreCode" = mss."StoreCode"
	LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU" = "mps"."SKU" and "tbl"."StoreCode" = "mps"."StoreCode"
		WHERE
	( UPPER ( "tbl"."SKU" ) LIKE'%%' OR UPPER ( "tbl"."Description" ) LIKE'%%' ) 
	AND "tbl"."Quantity" > 0 AND "isOmni" =''
	ORDER BY "StoreCode","SKU" ASC
	OFFSET  LIMIT ;
ERROR - 2020-04-23 14:45:36 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/elcorps/crm/adm/system/core/Exceptions.php:271) /home/elcorps/crm/adm/system/core/Common.php 570
