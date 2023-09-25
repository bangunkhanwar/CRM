<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-16 11:05:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-16 11:05:46 --> Unable to connect to the database
ERROR - 2020-11-16 11:16:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;20200431&quot;
LINE 9: AND &quot;tbl&quot;.&quot;TransDate&quot; &lt;= '20200431'
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-16 11:16:23 --> Query error: ERROR:  date/time field value out of range: "20200431"
LINE 9: AND "tbl"."TransDate" <= '20200431'
                                 ^ - Invalid query: SELECT tbl."TransStatus", COUNT ( * ) "count"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
WHERE "tbl"."TransStatus" <>0
AND "tbl"."TransDate" >= '20200401'
AND "tbl"."TransDate" <= '20200431'
GROUP BY "tbl"."TransStatus"
