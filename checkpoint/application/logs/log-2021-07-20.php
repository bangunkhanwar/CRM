<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-20 14:08:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-20 14:08:43 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+62 815-6609-959'
					OR UPPER("IdCardNumber") LIKE '%+62 815-6609-959%'
					OR tbl."Name" ~* '+62 815-6609-959'
					OR UPPER("Phone") LIKE '%+62 815-6609-959%'
					OR UPPER("Handpone") LIKE '%+62 815-6609-959%'
					OR UPPER("Barcode") LIKE '%+62 815-6609-959%'
					OR UPPER("Email") LIKE '%+62 815-6609-959%'
					OR UPPER("Address") LIKE '%+62 815-6609-959%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='212')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-07-20 14:09:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-20 14:09:17 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+628156609959'
					OR UPPER("IdCardNumber") LIKE '%+628156609959%'
					OR tbl."Name" ~* '+628156609959'
					OR UPPER("Phone") LIKE '%+628156609959%'
					OR UPPER("Handpone") LIKE '%+628156609959%'
					OR UPPER("Barcode") LIKE '%+628156609959%'
					OR UPPER("Email") LIKE '%+628156609959%'
					OR UPPER("Address") LIKE '%+628156609959%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='212')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-07-20 20:12:12 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
