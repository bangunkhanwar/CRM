<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-24 05:15:09 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-24 09:40:09 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-09-24 09:40:09 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-09-24 09:40:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-24 09:40:10 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-09-24 09:40:21 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-09-24 09:40:21 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-09-24 09:40:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-24 09:40:22 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-09-24 12:34:41 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
