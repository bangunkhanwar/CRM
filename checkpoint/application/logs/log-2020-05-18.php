<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-18 12:32:23 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 255
ERROR - 2020-05-18 12:32:23 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 256
ERROR - 2020-05-18 14:10:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-18 14:10:51 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-05-18 20:34:21 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-18 20:34:21 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-18 20:34:21 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-18 20:34:21 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-18 20:34:21 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-18 21:18:51 --> Severity: Warning --> Missing argument 2 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 205 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-05-18 21:18:51 --> Severity: Warning --> Missing argument 3 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 205 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-05-18 21:18:51 --> Severity: Warning --> Missing argument 4 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 205 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-05-18 21:18:51 --> Severity: Warning --> Missing argument 5 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Traffic.php on line 205 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 42
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: status_trx_key /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 52
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: status_trx_key /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 54
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: search /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 84
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: search /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 84
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: offset /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 87
ERROR - 2020-05-18 21:18:51 --> Severity: Notice --> Undefined variable: limit /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 87
ERROR - 2020-05-18 21:18:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 29:  OFFSET  LIMIT ;
                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-18 21:18:52 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 29:  OFFSET  LIMIT ;
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
				where "StoreCode" ='') tbl
	join (select "SKU",max("TransDate") as "TransDate"
			from "omnichannel"."trStockCurrent"
			where "TransDate" <= '20200518'
				AND "StoreCode" =''
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
ERROR - 2020-05-18 21:18:52 --> Severity: Warning --> Cannot modify header information - headers already sent by (output started at /home/elcorps/crm/adm/system/core/Exceptions.php:271) /home/elcorps/crm/adm/system/core/Common.php 570
