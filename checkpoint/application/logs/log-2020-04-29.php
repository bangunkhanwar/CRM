<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-29 14:29:58 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 48
ERROR - 2020-04-29 14:29:58 --> Severity: Notice --> Undefined index:  /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 49
ERROR - 2020-04-29 14:29:58 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 50
ERROR - 2020-04-29 14:29:58 --> Severity: Notice --> Undefined property: Monitoring::$sub_ledger_model /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:29:58 --> Severity: error --> Exception: Call to a member function set_where() on null /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:30:27 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 48
ERROR - 2020-04-29 14:30:27 --> Severity: Notice --> Undefined index:  /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 49
ERROR - 2020-04-29 14:30:27 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 50
ERROR - 2020-04-29 14:30:27 --> Severity: Notice --> Undefined property: Monitoring::$sub_ledger_model /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:30:27 --> Severity: error --> Exception: Call to a member function set_where() on null /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:35:14 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 48
ERROR - 2020-04-29 14:35:14 --> Severity: Notice --> Undefined index:  /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 49
ERROR - 2020-04-29 14:35:14 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 50
ERROR - 2020-04-29 14:35:14 --> Severity: Notice --> Undefined property: Monitoring::$sub_ledger_model /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:35:14 --> Severity: error --> Exception: Call to a member function set_where() on null /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:35:28 --> Severity: Notice --> Undefined property: Monitoring::$sub_ledger_model /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:35:28 --> Severity: error --> Exception: Call to a member function set_where() on null /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 98
ERROR - 2020-04-29 14:37:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ALL&quot;
LINE 5: AND &quot;tranStatus&quot; in (ALL)
                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 14:37:22 --> Query error: ERROR:  syntax error at or near "ALL"
LINE 5: AND "tranStatus" in (ALL)
                             ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
WHERE "startDate" >= '20200401'
AND "endDate" <= '20200429'
AND "tranStatus" in (ALL)
AND "tbl"."businessUnitCode" IS NULL
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ERROR - 2020-04-29 14:37:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;startDate&quot; does not exist
LINE 3: WHERE &quot;startDate&quot; &gt;= '20200401'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 14:37:55 --> Query error: ERROR:  column "startDate" does not exist
LINE 3: WHERE "startDate" >= '20200401'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
WHERE "startDate" >= '20200401'
AND "endDate" <= '20200429'
AND "tbl"."businessUnitCode" IS NULL
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ERROR - 2020-04-29 14:38:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.businessUnitCode does not exist
LINE 5: AND &quot;tbl&quot;.&quot;businessUnitCode&quot; IS NULL
            ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 14:38:23 --> Query error: ERROR:  column tbl.businessUnitCode does not exist
LINE 5: AND "tbl"."businessUnitCode" IS NULL
            ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "tbl"."businessUnitCode" IS NULL
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ERROR - 2020-04-29 14:38:35 --> Severity: error --> Exception: Call to undefined method Customer_order_header_model::get_list() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 104
ERROR - 2020-04-29 14:44:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tranStatus&quot; does not exist
LINE 5: AND &quot;tranStatus&quot; in (-3)
            ^
HINT:  Perhaps you meant to reference the column &quot;tbl.TransStatus&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 14:44:48 --> Query error: ERROR:  column "tranStatus" does not exist
LINE 5: AND "tranStatus" in (-3)
            ^
HINT:  Perhaps you meant to reference the column "tbl.TransStatus". - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "tranStatus" in (-3)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ERROR - 2020-04-29 15:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ON&quot;
LINE 3: JOIN (SELECT &quot;TransNum&quot;, string_agg(&quot;StoreCode&quot;,  ON &quot;ORDER&quot;...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:06:06 --> Query error: ERROR:  syntax error at or near "ON"
LINE 3: JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER"...
                                                          ^ - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER" BY "StoreCode") AS "StoreCodeList"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:08:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ON&quot;
LINE 3: JOIN (SELECT &quot;TransNum&quot;, string_agg(&quot;StoreCode&quot;,  ON &quot;ORDER&quot;...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:08:16 --> Query error: ERROR:  syntax error at or near "ON"
LINE 3: JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER"...
                                                          ^ - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER" BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:09:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ON&quot;
LINE 3: JOIN (SELECT &quot;TransNum&quot;, string_agg(&quot;StoreCode&quot;,  ON &quot;ORDER&quot;...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:09:12 --> Query error: ERROR:  syntax error at or near "ON"
LINE 3: JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER"...
                                                          ^ - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER" BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:09:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ON&quot;
LINE 3: JOIN (SELECT &quot;TransNum&quot;, string_agg(&quot;StoreCode&quot;,  ON &quot;ORDER&quot;...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:09:20 --> Query error: ERROR:  syntax error at or near "ON"
LINE 3: JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER"...
                                                          ^ - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
JOIN (SELECT "TransNum", string_agg("StoreCode",  ON "ORDER" BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "Phone" ASC
 LIMIT 10
ERROR - 2020-04-29 15:09:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.transnum does not exist
LINE 3: ...hannel.&quot;trCustomerOrder&quot; GROUP  BY 1) str_list ON tbl.TransN...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;tbl.TransNum&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:09:59 --> Query error: ERROR:  column tbl.transnum does not exist
LINE 3: ...hannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl.TransN...
                                                             ^
HINT:  Perhaps you meant to reference the column "tbl.TransNum". - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ', ' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl.TransNum = str.TransNum
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:10:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;str&quot;
LINE 3: ...rOrder&quot; GROUP  BY 1) str_list ON tbl.&quot;TransNum&quot; = str.&quot;Trans...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:10:38 --> Query error: ERROR:  missing FROM-clause entry for table "str"
LINE 3: ...rOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str."Trans...
                                                             ^ - Invalid query: SELECT "tbl".*, str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ', ' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str."TransNum"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;str_list&quot;
LINE 11:    OR str_list.&quot;StoreCodeList&quot; ~* ''
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:12:11 --> Query error: ERROR:  missing FROM-clause entry for table "str_list"
LINE 11:    OR str_list."StoreCodeList" ~* ''
               ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
		)
ERROR - 2020-04-29 15:21:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 7: AND &quot;TransStatus&quot; in (1,2,3,4)
            ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 15:21:31 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 7: AND "TransStatus" in (1,2,3,4)
            ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", str_list."StoreCodeList"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransDate" >= '20200401'
AND "TransDate" <= '20200429'
AND "TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-04-29 15:22:52 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-04-29 15:22:59 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-04-29 17:04:35 --> Severity: Notice --> Undefined index: NoRekening /home/elcorps/crm/adm/application/modules/omnichannel/views/monitoring/detail_verify.php 55
ERROR - 2020-04-29 17:04:35 --> Severity: Notice --> Undefined index: NamaBank /home/elcorps/crm/adm/application/modules/omnichannel/views/monitoring/detail_verify.php 59
ERROR - 2020-04-29 17:47:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 17:47:04 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-29 17:47:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 17:47:45 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
ERROR - 2020-04-29 19:08:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; &gt;=0 AND &quot;TransStatus&quot; &lt;= 2
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-29 19:08:28 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" >=0 AND "TransStatus" <= 2
              ^ - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
WHERE "TransStatus" >=0 AND "TransStatus" <= 2
