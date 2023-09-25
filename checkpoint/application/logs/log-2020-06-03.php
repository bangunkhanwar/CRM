<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-03 16:35:39 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-06-03 16:35:39 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-06-03 16:56:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 6: AND &quot;TransStatus&quot; &gt;= 1
            ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 16:56:50 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 6: AND "TransStatus" >= 1
            ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransNum" = 'BJEA.00000000026'
AND "TransStatus" >= 1
ERROR - 2020-06-03 16:56:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;DIYAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ROBIATUS SA'DIYAH          '
                                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 16:56:57 --> Query error: ERROR:  syntax error at or near "DIYAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'ROBIATUS SA'DIYAH          '
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
WHERE (tbl."MemberCode" ~* 'ROBIATUS SA'DIYAH          '
					OR UPPER("IdCardNumber") LIKE '%ROBIATUS SA'DIYAH          %'
					OR tbl."Name" ~* 'ROBIATUS SA'DIYAH          '
					OR UPPER("Phone") LIKE '%ROBIATUS SA'DIYAH          %'
					OR UPPER("Handpone") LIKE '%ROBIATUS SA'DIYAH          %'
					OR UPPER("Barcode") LIKE '%ROBIATUS SA'DIYAH          %'
					OR UPPER("Email") LIKE '%ROBIATUS SA'DIYAH          %'
					OR UPPER("Address") LIKE '%ROBIATUS SA'DIYAH          %')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='200')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-06-03 16:56:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 6: AND &quot;TransStatus&quot; &gt;= 1
            ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 16:56:59 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 6: AND "TransStatus" >= 1
            ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransNum" = 'BJDK.00000000003'
AND "TransStatus" >= 1
ERROR - 2020-06-03 16:57:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 6: AND &quot;TransStatus&quot; &gt;= 1
            ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 16:57:06 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 6: AND "TransStatus" >= 1
            ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransNum" = 'BJDK.00000000003'
AND "TransStatus" >= 1
ERROR - 2020-06-03 16:58:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;DIYAH&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* 'ROBIATUS SA'DIYAH            '
                                       ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 16:58:08 --> Query error: ERROR:  syntax error at or near "DIYAH"
LINE 3: WHERE ( "Name" ~* 'ROBIATUS SA'DIYAH            '
                                       ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* 'ROBIATUS SA'DIYAH            '
					)
AND "StoreCode" = 'Z734'
AND "DateOfBirth" = '19950822'
 LIMIT 10
