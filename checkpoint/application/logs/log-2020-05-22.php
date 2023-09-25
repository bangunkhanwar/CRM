<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-22 12:55:31 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-22 12:55:31 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-22 12:55:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-22 12:55:32 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-22 13:02:19 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-22 13:02:19 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 142
ERROR - 2020-05-22 13:02:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-22 13:02:24 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-05-22 16:03:01 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-22 16:03:01 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-05-22 19:19:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-22 19:19:03 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
