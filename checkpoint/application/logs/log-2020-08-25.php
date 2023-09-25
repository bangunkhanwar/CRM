<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-25 01:43:32 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-25 10:05:47 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-08-25 10:05:47 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2020-08-25 10:05:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-25 10:05:47 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2020-08-25 10:06:00 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-08-25 10:06:00 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-08-25 10:06:06 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-08-25 10:06:06 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-08-25 12:38:13 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-25 15:20:43 --> Severity: Notice --> Undefined variable: imgOriginal /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/picture.php 13
ERROR - 2020-08-25 15:21:06 --> Severity: Notice --> Undefined variable: imgOriginal /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/picture.php 13
ERROR - 2020-08-25 15:21:14 --> Severity: Notice --> Undefined variable: imgOriginal /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/picture.php 13
ERROR - 2020-08-25 15:21:29 --> Severity: Notice --> Undefined variable: imgOriginal /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/picture.php 13
ERROR - 2020-08-25 15:22:05 --> Severity: Notice --> Undefined variable: imgOriginal /home/elcorps/crm/adm/application/modules/omnichannel/views/master/product_image/picture.php 13
ERROR - 2020-08-25 15:22:15 --> Severity: Warning --> unlink(../files/15620/parent/thumb_900/1_20200822223219631131.jfif): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 506
ERROR - 2020-08-25 15:22:15 --> Severity: Warning --> unlink(../files/15620/parent/thumb_600/1_20200822223219631131.jfif): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 507
ERROR - 2020-08-25 15:22:15 --> Severity: Warning --> unlink(../files/15620/parent/thumb_80/1_20200822223219631131.jfif): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 508
