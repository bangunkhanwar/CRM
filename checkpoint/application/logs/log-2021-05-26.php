<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-26 11:59:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-26 11:59:05 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '21023214346\'
					OR UPPER("IdCardNumber") LIKE '%21023214346\%'
					OR tbl."Name" ~* '21023214346\'
					OR UPPER("Phone") LIKE '%21023214346\%'
					OR UPPER("Handpone") LIKE '%21023214346\%'
					OR UPPER("Barcode") LIKE '%21023214346\%'
					OR UPPER("Email") LIKE '%21023214346\%'
					OR UPPER("Address") LIKE '%21023214346\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='97')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
