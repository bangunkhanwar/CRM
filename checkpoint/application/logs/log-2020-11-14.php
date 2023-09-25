<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-14 13:05:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:42 --> Unable to connect to the database
ERROR - 2020-11-14 13:05:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:44 --> Unable to connect to the database
ERROR - 2020-11-14 13:05:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:46 --> Unable to connect to the database
ERROR - 2020-11-14 13:05:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:48 --> Unable to connect to the database
ERROR - 2020-11-14 13:05:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:49 --> Unable to connect to the database
ERROR - 2020-11-14 13:05:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-14 13:05:56 --> Unable to connect to the database
ERROR - 2020-11-14 19:42:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-14 19:42:00 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+62 822-3219-9693'
					OR UPPER("IdCardNumber") LIKE '%+62 822-3219-9693%'
					OR tbl."Name" ~* '+62 822-3219-9693'
					OR UPPER("Phone") LIKE '%+62 822-3219-9693%'
					OR UPPER("Handpone") LIKE '%+62 822-3219-9693%'
					OR UPPER("Barcode") LIKE '%+62 822-3219-9693%'
					OR UPPER("Email") LIKE '%+62 822-3219-9693%'
					OR UPPER("Address") LIKE '%+62 822-3219-9693%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='267')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
