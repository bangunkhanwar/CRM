<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-03 01:43:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-04-03 01:45:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-04-03 12:23:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;BANA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ANNI SYA'BANA'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-03 12:23:52 --> Query error: ERROR:  syntax error at or near "BANA"
LINE 11: WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
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
WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
					OR UPPER("IdCardNumber") LIKE '%ANNI SYA'BANA%'
					OR tbl."Name" ~* 'ANNI SYA'BANA'
					OR UPPER("Phone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Handpone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Barcode") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Email") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Address") LIKE '%ANNI SYA'BANA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='210')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-04-03 12:38:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'KHOIRATUS SA'ADAH'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-03 12:38:19 --> Query error: ERROR:  syntax error at or near "ADAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'KHOIRATUS SA'ADAH'
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
WHERE (tbl."MemberCode" ~* 'KHOIRATUS SA'ADAH'
					OR UPPER("IdCardNumber") LIKE '%KHOIRATUS SA'ADAH%'
					OR tbl."Name" ~* 'KHOIRATUS SA'ADAH'
					OR UPPER("Phone") LIKE '%KHOIRATUS SA'ADAH%'
					OR UPPER("Handpone") LIKE '%KHOIRATUS SA'ADAH%'
					OR UPPER("Barcode") LIKE '%KHOIRATUS SA'ADAH%'
					OR UPPER("Email") LIKE '%KHOIRATUS SA'ADAH%'
					OR UPPER("Address") LIKE '%KHOIRATUS SA'ADAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='210')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-04-03 16:04:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:06 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:07 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:10 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:10 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:11 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:14 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:15 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:22 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:22 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:28 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:28 --> Unable to connect to the database
ERROR - 2021-04-03 16:04:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:04:33 --> Unable to connect to the database
ERROR - 2021-04-03 16:05:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:05:03 --> Unable to connect to the database
ERROR - 2021-04-03 16:05:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:05:03 --> Unable to connect to the database
ERROR - 2021-04-03 16:35:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:35:17 --> Unable to connect to the database
ERROR - 2021-04-03 16:35:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:35:22 --> Unable to connect to the database
ERROR - 2021-04-03 16:35:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:35:38 --> Unable to connect to the database
ERROR - 2021-04-03 16:36:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 16:36:04 --> Unable to connect to the database
ERROR - 2021-04-03 17:02:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 17:02:05 --> Unable to connect to the database
ERROR - 2021-04-03 17:02:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 17:02:12 --> Unable to connect to the database
ERROR - 2021-04-03 17:02:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 17:02:26 --> Unable to connect to the database
ERROR - 2021-04-03 17:02:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 17:02:27 --> Unable to connect to the database
ERROR - 2021-04-03 17:03:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 17:03:12 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:27 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:29 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:31 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:35 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:36 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:36 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:44 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:46 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:48 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:55 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:55 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:56 --> Unable to connect to the database
ERROR - 2021-04-03 18:00:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:00:57 --> Unable to connect to the database
ERROR - 2021-04-03 18:01:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:01:03 --> Unable to connect to the database
ERROR - 2021-04-03 18:01:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:01:06 --> Unable to connect to the database
ERROR - 2021-04-03 18:01:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:01:15 --> Unable to connect to the database
ERROR - 2021-04-03 18:01:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-04-03 18:01:16 --> Unable to connect to the database
