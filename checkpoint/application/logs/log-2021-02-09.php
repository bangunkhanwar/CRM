<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-09 10:23:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 10:23:34 --> Unable to connect to the database
ERROR - 2021-02-09 10:23:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 10:23:36 --> Unable to connect to the database
ERROR - 2021-02-09 10:23:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 10:23:39 --> Unable to connect to the database
ERROR - 2021-02-09 10:23:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 10:23:44 --> Unable to connect to the database
ERROR - 2021-02-09 11:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-09 11:17:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-09 11:30:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-09 11:30:20 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '\FFF999'
					OR UPPER("IdCardNumber") LIKE '%\FFF999%'
					OR tbl."Name" ~* '\FFF999'
					OR UPPER("Phone") LIKE '%\FFF999%'
					OR UPPER("Handpone") LIKE '%\FFF999%'
					OR UPPER("Barcode") LIKE '%\FFF999%'
					OR UPPER("Email") LIKE '%\FFF999%'
					OR UPPER("Address") LIKE '%\FFF999%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='194')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-02-09 13:43:37 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-02-09 15:14:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 15:14:44 --> Unable to connect to the database
ERROR - 2021-02-09 15:14:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-09 15:14:44 --> Unable to connect to the database
