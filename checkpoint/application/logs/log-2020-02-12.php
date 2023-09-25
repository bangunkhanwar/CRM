<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-12 11:18:47 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/views/orders/list.php 32
ERROR - 2020-02-12 11:28:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:28:14 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:28:14 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:29:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:29:19 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:29:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:29:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:29:25 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:29:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:29:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:29:35 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:29:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:29:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:29:48 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:29:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:29:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:29:56 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:29:56 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:30:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:30:41 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreDesc", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:30:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:30:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:30:59 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreDesc", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:30:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:31:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:31:12 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreDesc", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:31:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:32:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:32:01 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreDesc", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:32:01 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:34:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:34:12 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:34:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Customer_order_model.php 48
ERROR - 2020-02-12 11:35:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 6:      OR UPPER(&quot;StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:35:37 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 6:      OR UPPER("StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:35:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:35:45 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:37:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:37:00 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl.StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:37:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; does not exist
LINE 6:      OR UPPER(&quot;tbl.StoreCode&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:37:07 --> Query error: ERROR:  column "tbl.StoreCode" does not exist
LINE 6:      OR UPPER("tbl.StoreCode") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl.StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:37:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:37:12 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl.StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:44:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 4: WHERE (UPPER(&quot;StoreCode&quot;) LIKE '%%'
                     ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:44:25 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 4: WHERE (UPPER("StoreCode") LIKE '%%'
                     ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:44:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;StoreCode&quot; is ambiguous
LINE 4: WHERE (UPPER(&quot;StoreCode&quot;) LIKE '%%'
                     ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:44:32 --> Query error: ERROR:  column reference "StoreCode" is ambiguous
LINE 4: WHERE (UPPER("StoreCode") LIKE '%%'
                     ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:45:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;Description&quot; is ambiguous
LINE 6:      OR UPPER(&quot;Description&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:45:22 --> Query error: ERROR:  column reference "Description" is ambiguous
LINE 6:      OR UPPER("Description") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 11:45:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;Description&quot; is ambiguous
LINE 6:      OR UPPER(&quot;Description&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:45:25 --> Query error: ERROR:  column reference "Description" is ambiguous
LINE 6:      OR UPPER("Description") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;Description&quot; is ambiguous
LINE 6:      OR UPPER(&quot;Description&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:45:36 --> Query error: ERROR:  column reference "Description" is ambiguous
LINE 6:      OR UPPER("Description") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-02-12 11:45:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;Description&quot; is ambiguous
LINE 6:      OR UPPER(&quot;Description&quot;) LIKE '%%')
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 11:45:42 --> Query error: ERROR:  column reference "Description" is ambiguous
LINE 6:      OR UPPER("Description") LIKE '%%')
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-02-12 12:04:37 --> Severity: Notice --> Undefined variable: order_by_key /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:04:37 --> Severity: Notice --> Undefined variable: order_by_field /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:05:04 --> Severity: Notice --> Undefined variable: order_by_key /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:05:04 --> Severity: Notice --> Undefined variable: order_by_field /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:05:10 --> Severity: Notice --> Undefined variable: order_by_key /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:05:10 --> Severity: Notice --> Undefined variable: order_by_field /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:06:36 --> Severity: Notice --> Undefined variable: order_by_key /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:06:36 --> Severity: Notice --> Undefined variable: order_by_field /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 79
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 12:13:31 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/list.php 39
ERROR - 2020-02-12 15:48:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'JUNI'AH'
                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 15:48:52 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'JUNI'AH'
                                          ^ - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'JUNI'AH'
					OR UPPER("IdCardNumber") LIKE '%JUNI'AH%'
					OR tbl."Name" ~* 'JUNI'AH'
					OR UPPER("Phone") LIKE '%JUNI'AH%'
					OR UPPER("Handpone") LIKE '%JUNI'AH%'
					OR UPPER("Barcode") LIKE '%JUNI'AH%'
					OR UPPER("Email") LIKE '%JUNI'AH%'
					OR UPPER("Address") LIKE '%JUNI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='99')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-02-12 15:48:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
ERROR - 2020-02-12 15:50:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'JUNI'AH'
                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-12 15:50:28 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'JUNI'AH'
                                          ^ - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'JUNI'AH'
					OR UPPER("IdCardNumber") LIKE '%JUNI'AH%'
					OR tbl."Name" ~* 'JUNI'AH'
					OR UPPER("Phone") LIKE '%JUNI'AH%'
					OR UPPER("Handpone") LIKE '%JUNI'AH%'
					OR UPPER("Barcode") LIKE '%JUNI'AH%'
					OR UPPER("Email") LIKE '%JUNI'AH%'
					OR UPPER("Address") LIKE '%JUNI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='99')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-02-12 15:50:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
