<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-04 09:19:27 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 12:47:52 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 14:14:06 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 14:49:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1082020&quot;
LINE 8: AND &quot;tbl&quot;.&quot;TransDate&quot; &gt;= '1082020'
                                 ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-04 14:49:04 --> Query error: ERROR:  date/time field value out of range: "1082020"
LINE 8: AND "tbl"."TransDate" >= '1082020'
                                 ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '1082020'
AND "tbl"."TransDate" <= '20200830'
GROUP BY "tbl"."TransStatus"
ERROR - 2020-09-04 14:49:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1082020&quot;
LINE 8: AND &quot;tbl&quot;.&quot;TransDate&quot; &gt;= '1082020'
                                 ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-04 14:49:09 --> Query error: ERROR:  date/time field value out of range: "1082020"
LINE 8: AND "tbl"."TransDate" >= '1082020'
                                 ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '1082020'
AND "tbl"."TransDate" <= '20200830'
GROUP BY "tbl"."TransStatus"
ERROR - 2020-09-04 14:49:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1082020&quot;
LINE 8: AND &quot;tbl&quot;.&quot;TransDate&quot; &gt;= '1082020'
                                 ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-04 14:49:18 --> Query error: ERROR:  date/time field value out of range: "1082020"
LINE 8: AND "tbl"."TransDate" >= '1082020'
                                 ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '1082020'
AND "tbl"."TransDate" <= '20200830'
GROUP BY "tbl"."TransStatus"
ERROR - 2020-09-04 15:39:51 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 17:08:01 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 18:36:53 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 20:06:11 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 21:37:16 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-04 23:00:59 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
