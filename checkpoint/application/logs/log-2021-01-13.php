<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-13 10:28:06 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-01-13 10:30:04 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-01-13 13:08:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-13 13:08:09 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '190200811955\'
					OR UPPER("IdCardNumber") LIKE '%190200811955\%'
					OR tbl."Name" ~* '190200811955\'
					OR UPPER("Phone") LIKE '%190200811955\%'
					OR UPPER("Handpone") LIKE '%190200811955\%'
					OR UPPER("Barcode") LIKE '%190200811955\%'
					OR UPPER("Email") LIKE '%190200811955\%'
					OR UPPER("Address") LIKE '%190200811955\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='255')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-13 15:28:23 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-01-13 15:43:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-13 15:43:25 --> Unable to connect to the database
ERROR - 2021-01-13 15:43:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-13 15:43:26 --> Unable to connect to the database
ERROR - 2021-01-13 21:17:09 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
