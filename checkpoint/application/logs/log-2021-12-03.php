<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-03 04:30:45 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 06:52:38 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 10:48:10 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 11:46:36 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 13:13:59 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 14:19:11 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 15:28:44 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 16:22:15 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 18:29:08 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 20:47:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-03 20:47:15 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'ARMY DITA\'
					OR UPPER("IdCardNumber") LIKE '%ARMY DITA\%'
					OR tbl."Name" ~* 'ARMY DITA\'
					OR UPPER("Phone") LIKE '%ARMY DITA\%'
					OR UPPER("Handpone") LIKE '%ARMY DITA\%'
					OR UPPER("Barcode") LIKE '%ARMY DITA\%'
					OR UPPER("Email") LIKE '%ARMY DITA\%'
					OR UPPER("Address") LIKE '%ARMY DITA\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='208')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-12-03 20:53:58 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 21:36:43 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-03 23:29:42 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
