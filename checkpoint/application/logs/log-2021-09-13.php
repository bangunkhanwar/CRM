<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-13 12:48:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ATUL&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI NUR QIRA'ATUL'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-13 12:48:24 --> Query error: ERROR:  syntax error at or near "ATUL"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI NUR QIRA'ATUL'
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
WHERE (tbl."MemberCode" ~* 'SITI NUR QIRA'ATUL'
					OR UPPER("IdCardNumber") LIKE '%SITI NUR QIRA'ATUL%'
					OR tbl."Name" ~* 'SITI NUR QIRA'ATUL'
					OR UPPER("Phone") LIKE '%SITI NUR QIRA'ATUL%'
					OR UPPER("Handpone") LIKE '%SITI NUR QIRA'ATUL%'
					OR UPPER("Barcode") LIKE '%SITI NUR QIRA'ATUL%'
					OR UPPER("Email") LIKE '%SITI NUR QIRA'ATUL%'
					OR UPPER("Address") LIKE '%SITI NUR QIRA'ATUL%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='44')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-09-13 15:08:47 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-09-13 17:26:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MARIANA&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%RENI MARIANA'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-13 17:26:07 --> Query error: ERROR:  syntax error at or near "MARIANA"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%RENI MARIANA'%'
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
WHERE (tbl."MemberCode" ~* 'RENI MARIANA''
					OR UPPER("IdCardNumber") LIKE '%RENI MARIANA'%'
					OR tbl."Name" ~* 'RENI MARIANA''
					OR UPPER("Phone") LIKE '%RENI MARIANA'%'
					OR UPPER("Handpone") LIKE '%RENI MARIANA'%'
					OR UPPER("Barcode") LIKE '%RENI MARIANA'%'
					OR UPPER("Email") LIKE '%RENI MARIANA'%'
					OR UPPER("Address") LIKE '%RENI MARIANA'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='43')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
