<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-06 14:12:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;10632190024&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ''10632190024'
                                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-06 14:12:22 --> Query error: ERROR:  syntax error at or near "10632190024"
LINE 11: WHERE (tbl."MemberCode" ~* ''10632190024'
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
WHERE (tbl."MemberCode" ~* ''10632190024'
					OR UPPER("IdCardNumber") LIKE '%'10632190024%'
					OR tbl."Name" ~* ''10632190024'
					OR UPPER("Phone") LIKE '%'10632190024%'
					OR UPPER("Handpone") LIKE '%'10632190024%'
					OR UPPER("Barcode") LIKE '%'10632190024%'
					OR UPPER("Email") LIKE '%'10632190024%'
					OR UPPER("Address") LIKE '%'10632190024%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='190')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
