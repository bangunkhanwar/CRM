<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-30 10:41:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 10:41:10 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-30 11:02:30 --> Severity: Warning --> number_format() expects parameter 1 to be float, string given /home/elcorps/crm/adm/application/modules/omnichannel/views/monitoring/detail_verify.php 1
ERROR - 2020-04-30 12:01:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 12:01:21 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-30 12:02:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 12:02:27 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-30 12:03:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 12:03:23 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-30 12:17:08 --> Severity: error --> Exception: syntax error, unexpected '>', expecting end of file /home/elcorps/crm/adm/application/modules/omnichannel/views/traffic/main.php 114
ERROR - 2020-04-30 14:38:51 --> Severity: error --> Exception: Call to undefined function get_params_from_array() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 148
ERROR - 2020-04-30 14:40:30 --> Severity: error --> Exception: Call to undefined function get_params_from_array() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 148
ERROR - 2020-04-30 15:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column orderPaymentStatus.TransNum does not exist
LINE 5: ...entType&quot; &quot;orderPaymentStatus&quot; ON &quot;tbl&quot;.&quot;TransNum&quot;=&quot;orderPaym...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 15:22:43 --> Query error: ERROR:  column orderPaymentStatus.TransNum does not exist
LINE 5: ...entType" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaym...
                                                             ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."msPaymentType" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransDate" >= '20200401'
AND "tbl"."TransDate" <= '20200530'
AND "tbl"."TransStatus" in (-1)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
		)
ORDER BY "TransStatus" DESC
 LIMIT 10
ERROR - 2020-04-30 16:10:41 --> Severity: error --> Exception: syntax error, unexpected '}', expecting ',' or ')' /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_header_model.php 32
ERROR - 2020-04-30 16:11:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;SELECT&quot;
LINE 1: SELECT SELECT &quot;TransStatus&quot;, COUNT ( * ) &quot;count&quot;
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 16:11:06 --> Query error: ERROR:  syntax error at or near "SELECT"
LINE 1: SELECT SELECT "TransStatus", COUNT ( * ) "count"
               ^ - Invalid query: SELECT SELECT "TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransDate" >= '20200401'
AND "tbl"."TransDate" <= '20200430'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
		)
GROUP BY "TransStatus"
ERROR - 2020-04-30 16:11:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 1: SELECT &quot;TransStatus&quot;, COUNT ( * ) &quot;count&quot;
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 16:11:37 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 1: SELECT "TransStatus", COUNT ( * ) "count"
               ^ - Invalid query: SELECT "TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransDate" >= '20200401'
AND "tbl"."TransDate" <= '20200430'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
		)
GROUP BY "TransStatus"
ERROR - 2020-04-30 17:02:45 --> Severity: Compile Error --> Cannot redeclare Monitoring::detailPage() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 256
ERROR - 2020-04-30 17:02:57 --> Severity: Compile Error --> Cannot redeclare Monitoring::detailPage() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 256
ERROR - 2020-04-30 17:31:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreName&quot; does not exist
LINE 6:     OR &quot;StoreName&quot; ~* 'alya afri'
               ^
HINT:  Perhaps you meant to reference the column &quot;tbl.StoreCode&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 17:31:02 --> Query error: ERROR:  column "StoreName" does not exist
LINE 6:     OR "StoreName" ~* 'alya afri'
               ^
HINT:  Perhaps you meant to reference the column "tbl.StoreCode". - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderDetail" "tbl"
WHERE "tbl"."TransNum" = 'BJDS.00000000015'
AND (
				tbl."StoreCode" ~* 'alya afri'
				OR "StoreName" ~* 'alya afri'
				OR tbl."SKU" ~* 'alya afri'
				OR tbl."Description" ~* 'alya afri'
			)
ERROR - 2020-04-30 17:31:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mss&quot;
LINE 6:     OR mss.&quot;Description&quot; ~* 'alya afri'
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 17:31:25 --> Query error: ERROR:  missing FROM-clause entry for table "mss"
LINE 6:     OR mss."Description" ~* 'alya afri'
               ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderDetail" "tbl"
WHERE "tbl"."TransNum" = 'BJDS.00000000015'
AND (
				tbl."StoreCode" ~* 'alya afri'
				OR mss."Description" ~* 'alya afri'
				OR tbl."SKU" ~* 'alya afri'
				OR tbl."Description" ~* 'alya afri'
			)
ERROR - 2020-04-30 17:31:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.Description does not exist
LINE 11:     OR tbl.&quot;Description&quot; ~* 'alya afri'
                ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-30 17:31:52 --> Query error: ERROR:  column tbl.Description does not exist
LINE 11:     OR tbl."Description" ~* 'alya afri'
                ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderDetail" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "public"."msProduct" "msp" ON "tbl"."SKU"= "msp"."SKU"
WHERE "tbl"."TransNum" = 'BJDS.00000000015'
AND (
				tbl."StoreCode" ~* 'alya afri'
				OR mss."Description" ~* 'alya afri'
				OR tbl."SKU" ~* 'alya afri'
				OR tbl."Description" ~* 'alya afri'
			)
ERROR - 2020-04-30 21:01:14 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
