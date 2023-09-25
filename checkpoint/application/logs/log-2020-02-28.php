<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-28 14:45:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-28 14:45:40 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'NASIHA\'
					OR UPPER("IdCardNumber") LIKE '%NASIHA\%'
					OR tbl."Name" ~* 'NASIHA\'
					OR UPPER("Phone") LIKE '%NASIHA\%'
					OR UPPER("Handpone") LIKE '%NASIHA\%'
					OR UPPER("Barcode") LIKE '%NASIHA\%'
					OR UPPER("Email") LIKE '%NASIHA\%'
					OR UPPER("Address") LIKE '%NASIHA\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='243')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-02-28 14:46:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-28 14:46:25 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'NASIHA\'
					OR UPPER("IdCardNumber") LIKE '%NASIHA\%'
					OR tbl."Name" ~* 'NASIHA\'
					OR UPPER("Phone") LIKE '%NASIHA\%'
					OR UPPER("Handpone") LIKE '%NASIHA\%'
					OR UPPER("Barcode") LIKE '%NASIHA\%'
					OR UPPER("Email") LIKE '%NASIHA\%'
					OR UPPER("Address") LIKE '%NASIHA\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='243')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
