<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-18 03:58:18 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-01-18 10:03:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI MUNI'MAH'
                                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-18 10:03:39 --> Query error: ERROR:  syntax error at or near "MAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI MUNI'MAH'
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
WHERE (tbl."MemberCode" ~* 'SITI MUNI'MAH'
					OR UPPER("IdCardNumber") LIKE '%SITI MUNI'MAH%'
					OR tbl."Name" ~* 'SITI MUNI'MAH'
					OR UPPER("Phone") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Handpone") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Barcode") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Email") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Address") LIKE '%SITI MUNI'MAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='190')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-18 10:50:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI MUNI'MAH'
                                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-18 10:50:44 --> Query error: ERROR:  syntax error at or near "MAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI MUNI'MAH'
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
WHERE (tbl."MemberCode" ~* 'SITI MUNI'MAH'
					OR UPPER("IdCardNumber") LIKE '%SITI MUNI'MAH%'
					OR tbl."Name" ~* 'SITI MUNI'MAH'
					OR UPPER("Phone") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Handpone") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Barcode") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Email") LIKE '%SITI MUNI'MAH%'
					OR UPPER("Address") LIKE '%SITI MUNI'MAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='190')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-18 14:25:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:18 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:22 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:24 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:26 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:28 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:43 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:43 --> Unable to connect to the database
ERROR - 2021-01-18 14:25:55 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:25:55 --> Unable to connect to the database
ERROR - 2021-01-18 14:26:20 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-01-18 14:26:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:26:21 --> Unable to connect to the database
ERROR - 2021-01-18 14:26:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:26:21 --> Unable to connect to the database
ERROR - 2021-01-18 14:26:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-18 14:26:25 --> Unable to connect to the database
