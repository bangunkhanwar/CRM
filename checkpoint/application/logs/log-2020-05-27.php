<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-27 11:03:44 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-05-27 11:06:05 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:06:05 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 11:06:06 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 11:13:18 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:13:18 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:13:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 11:13:19 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 11:34:22 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:34:22 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:34:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 11:34:23 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 11:49:31 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:49:31 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 11:49:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 11:49:32 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 13:59:17 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 13:59:17 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 13:59:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 13:59:18 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 13:59:56 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-27 13:59:56 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-27 14:33:42 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-27 14:33:42 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-27 14:33:51 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 14:33:51 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 14:33:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 14:33:52 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:18:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:32 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:19:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 15:20:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-05-27 16:13:25 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 16:13:25 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-27 16:13:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 16:13:28 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
