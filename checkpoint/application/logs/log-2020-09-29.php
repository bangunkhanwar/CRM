<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-29 09:31:03 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-29 17:26:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-29 17:26:17 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'RITA \'
					OR UPPER("IdCardNumber") LIKE '%RITA \%'
					OR tbl."Name" ~* 'RITA \'
					OR UPPER("Phone") LIKE '%RITA \%'
					OR UPPER("Handpone") LIKE '%RITA \%'
					OR UPPER("Barcode") LIKE '%RITA \%'
					OR UPPER("Email") LIKE '%RITA \%'
					OR UPPER("Address") LIKE '%RITA \%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
