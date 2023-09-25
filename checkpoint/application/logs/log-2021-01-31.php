<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-31 14:41:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-31 14:41:38 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+6285871193116'
					OR UPPER("IdCardNumber") LIKE '%+6285871193116%'
					OR tbl."Name" ~* '+6285871193116'
					OR UPPER("Phone") LIKE '%+6285871193116%'
					OR UPPER("Handpone") LIKE '%+6285871193116%'
					OR UPPER("Barcode") LIKE '%+6285871193116%'
					OR UPPER("Email") LIKE '%+6285871193116%'
					OR UPPER("Address") LIKE '%+6285871193116%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='80')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-31 19:35:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-31 19:35:05 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+6282318018804'
					OR UPPER("IdCardNumber") LIKE '%+6282318018804%'
					OR tbl."Name" ~* '+6282318018804'
					OR UPPER("Phone") LIKE '%+6282318018804%'
					OR UPPER("Handpone") LIKE '%+6282318018804%'
					OR UPPER("Barcode") LIKE '%+6282318018804%'
					OR UPPER("Email") LIKE '%+6282318018804%'
					OR UPPER("Address") LIKE '%+6282318018804%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='80')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-31 22:31:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-31 22:31:11 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+6287720203513'
					OR UPPER("IdCardNumber") LIKE '%+6287720203513%'
					OR tbl."Name" ~* '+6287720203513'
					OR UPPER("Phone") LIKE '%+6287720203513%'
					OR UPPER("Handpone") LIKE '%+6287720203513%'
					OR UPPER("Barcode") LIKE '%+6287720203513%'
					OR UPPER("Email") LIKE '%+6287720203513%'
					OR UPPER("Address") LIKE '%+6287720203513%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='80')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
