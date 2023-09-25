<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-17 11:57:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;20200631&quot;
LINE 9: AND &quot;tbl&quot;.&quot;TransDate&quot; &lt;= '20200631'
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-17 11:57:25 --> Query error: ERROR:  date/time field value out of range: "20200631"
LINE 9: AND "tbl"."TransDate" <= '20200631'
                                 ^ - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '20200601'
AND "tbl"."TransDate" <= '20200631'
GROUP BY "tbl"."TransStatus"
ERROR - 2020-11-17 16:16:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;20200931&quot;
LINE 9: AND &quot;tbl&quot;.&quot;TransDate&quot; &lt;= '20200931'
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-17 16:16:47 --> Query error: ERROR:  date/time field value out of range: "20200931"
LINE 9: AND "tbl"."TransDate" <= '20200931'
                                 ^ - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '20200901'
AND "tbl"."TransDate" <= '20200931'
GROUP BY "tbl"."TransStatus"
