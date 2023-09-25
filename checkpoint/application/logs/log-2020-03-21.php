<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-21 11:31:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-21 11:31:27 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+62 813-7296-1872'
					OR UPPER("IdCardNumber") LIKE '%+62 813-7296-1872%'
					OR tbl."Name" ~* '+62 813-7296-1872'
					OR UPPER("Phone") LIKE '%+62 813-7296-1872%'
					OR UPPER("Handpone") LIKE '%+62 813-7296-1872%'
					OR UPPER("Barcode") LIKE '%+62 813-7296-1872%'
					OR UPPER("Email") LIKE '%+62 813-7296-1872%'
					OR UPPER("Address") LIKE '%+62 813-7296-1872%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='239')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
