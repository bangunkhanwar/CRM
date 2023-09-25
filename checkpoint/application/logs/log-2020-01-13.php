<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-13 10:06:50 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:06:56 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:07:49 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:08:39 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:09:59 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:10:09 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:10:40 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:11:50 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:12:12 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:13:50 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 10
ERROR - 2020-01-13 10:19:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  relation &quot;public.msStoreCode&quot; does not exist
LINE 3: LEFT JOIN &quot;public&quot;.&quot;msStoreCode&quot; &quot;mss&quot; ON &quot;tbl&quot;.&quot;StoreCode&quot;=...
                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:19:08 --> Query error: ERROR:  relation "public.msStoreCode" does not exist
LINE 3: LEFT JOIN "public"."msStoreCode" "mss" ON "tbl"."StoreCode"=...
                  ^ - Invalid query: SELECT "tbl"."StoreCode", "mss"."Description", SUM(GrossSalesTot) "GrossSalesTot", SUM(DiscountTot) "DiscountTot", SUM(RetailSalesTot) "RetailSalesTot", "FALSE"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStoreCode" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransDate" >= '2020-01-01'
AND "tbl"."TransDate" <= '2020-01-20'
AND (UPPER("StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 10:21:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6: AND (UPPER(&quot;StoreCode&quot;) LIKE '%%'
                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:21:20 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6: AND (UPPER("StoreCode") LIKE '%%'
                   ^ - Invalid query: SELECT tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransDate" >= '2020-01-01'
AND "tbl"."TransDate" <= '2020-01-20'
AND (UPPER("StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 10:25:26 --> Severity: error --> Exception: syntax error, unexpected ',', expecting ']' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 50
ERROR - 2020-01-13 10:25:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;2020-01-01&quot; does not exist
LINE 6: AND &quot;tbl&quot;.&quot;TransDate&quot; &gt;= &quot;2020-01-01&quot;
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:25:49 --> Query error: ERROR:  column "2020-01-01" does not exist
LINE 6: AND "tbl"."TransDate" >= "2020-01-01"
                                 ^ - Invalid query: SELECT tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER(tbl."StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
AND "tbl"."TransDate" >= "2020-01-01"
AND "tbl"."TransDate" <= "2020-01-20"
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 10:27:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;2020-01-01&quot; does not exist
LINE 6: AND (&quot;tbl&quot;.&quot;TransDate&quot; &gt;= &quot;2020-01-01&quot; AND &quot;tbl&quot;.&quot;TransDate&quot;...
                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:27:00 --> Query error: ERROR:  column "2020-01-01" does not exist
LINE 6: AND ("tbl"."TransDate" >= "2020-01-01" AND "tbl"."TransDate"...
                                  ^ - Invalid query: SELECT tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER(tbl."StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
AND ("tbl"."TransDate" >= "2020-01-01" AND "tbl"."TransDate" <= "2020-01-20")
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 10:28:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;2020-01-01&quot; does not exist
LINE 6: AND (&quot;tbl&quot;.&quot;TransDate&quot; &gt;= &quot;2020-01-01&quot; AND &quot;tbl&quot;.&quot;TransDate&quot;...
                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:28:58 --> Query error: ERROR:  column "2020-01-01" does not exist
LINE 6: AND ("tbl"."TransDate" >= "2020-01-01" AND "tbl"."TransDate"...
                                  ^ - Invalid query: SELECT tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER(tbl."StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
AND ("tbl"."TransDate" >= "2020-01-01" AND "tbl"."TransDate" <= "2020-01-20")
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 10:28:58 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 78
ERROR - 2020-01-13 10:33:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Description&quot; does not exist
LINE 4:      OR UPPER(&quot;Description&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 10:33:21 --> Query error: ERROR:  column "Description" does not exist
LINE 4:      OR UPPER("Description") LIKE '%%')
                      ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trCustomerOrder" "tbl"
WHERE (UPPER(tbl."StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
AND ("tbl"."TransDate" >= '2020-01-01' AND "tbl"."TransDate" <= '2020-01-20')
ERROR - 2020-01-13 10:33:21 --> Severity: error --> Exception: Call to a member function row_array() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 23
ERROR - 2020-01-13 10:52:53 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 67
ERROR - 2020-01-13 11:24:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type date: &quot;&quot;
LINE 6: ...bl&quot;.&quot;TransDate&quot; &gt;= '2020-01-01' AND &quot;tbl&quot;.&quot;TransDate&quot; &lt;= '')
                                                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 11:24:21 --> Query error: ERROR:  invalid input syntax for type date: ""
LINE 6: ...bl"."TransDate" >= '2020-01-01' AND "tbl"."TransDate" <= '')
                                                                    ^ - Invalid query: SELECT tbl."StoreCode", mss."Description", SUM("GrossSalesTot") "GrossSalesTot", SUM("DiscountTot") "DiscountTot", SUM("RetailSalesTot") "RetailSalesTot"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER(tbl."StoreCode") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
AND ("tbl"."TransDate" >= '2020-01-01' AND "tbl"."TransDate" <= '')
GROUP BY "tbl"."StoreCode", "mss"."Description"
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-01-13 11:24:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 93
ERROR - 2020-01-13 11:45:17 --> Severity: error --> Exception: syntax error, unexpected '->' (T_OBJECT_OPERATOR), expecting ',' or ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Finance.php 59
ERROR - 2020-01-13 15:09:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;081211245849&quot;
LINE 4:    UPPER(&quot;MemberCode&quot;) LIKE '%'081211245849%'
                                       ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-13 15:09:13 --> Query error: ERROR:  syntax error at or near "081211245849"
LINE 4:    UPPER("MemberCode") LIKE '%'081211245849%'
                                       ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%'081211245849%'
			OR UPPER("Handpone") LIKE '%'081211245849%'
			OR UPPER("Email") LIKE '%'081211245849%')
 LIMIT 1
ERROR - 2020-01-13 15:09:13 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/models/Base_model.php 84
