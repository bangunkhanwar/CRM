<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-01 10:44:10 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-02-01 11:48:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-01 11:48:42 --> Unable to connect to the database
ERROR - 2021-02-01 11:48:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-01 11:48:48 --> Unable to connect to the database
ERROR - 2021-02-01 11:50:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-01 11:50:01 --> Unable to connect to the database
ERROR - 2021-02-01 11:55:54 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-01 11:55:54 --> Unable to connect to the database
ERROR - 2021-02-01 11:56:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-01 11:56:38 --> Unable to connect to the database
ERROR - 2021-02-01 16:35:01 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:35:01 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:17 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:17 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:23 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:23 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:39 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:39 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:50 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:36:50 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:37:17 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:37:17 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:37:28 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:37:28 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2021-02-01 16:37:54 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-02-01 16:37:54 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-02-01 16:37:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-01 16:37:56 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2021-02-01 16:38:28 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-02-01 16:38:28 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-02-01 16:38:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-01 16:38:30 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2021-02-01 20:00:00 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
