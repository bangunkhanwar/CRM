<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-22 11:45:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%082149663999'%'
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-22 11:45:30 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%082149663999'%'
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
WHERE (tbl."MemberCode" ~* '082149663999''
					OR UPPER("IdCardNumber") LIKE '%082149663999'%'
					OR tbl."Name" ~* '082149663999''
					OR UPPER("Phone") LIKE '%082149663999'%'
					OR UPPER("Handpone") LIKE '%082149663999'%'
					OR UPPER("Barcode") LIKE '%082149663999'%'
					OR UPPER("Email") LIKE '%082149663999'%'
					OR UPPER("Address") LIKE '%082149663999'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='160')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
