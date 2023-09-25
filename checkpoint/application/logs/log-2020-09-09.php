<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-09 13:55:39 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 15:23:09 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 17:01:02 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 18:10:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: quantifier operand invalid /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-09 18:10:43 --> Query error: ERROR:  invalid regular expression: quantifier operand invalid - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '+62 821-3115-1150'
					OR UPPER("IdCardNumber") LIKE '%+62 821-3115-1150%'
					OR tbl."Name" ~* '+62 821-3115-1150'
					OR UPPER("Phone") LIKE '%+62 821-3115-1150%'
					OR UPPER("Handpone") LIKE '%+62 821-3115-1150%'
					OR UPPER("Barcode") LIKE '%+62 821-3115-1150%'
					OR UPPER("Email") LIKE '%+62 821-3115-1150%'
					OR UPPER("Address") LIKE '%+62 821-3115-1150%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-09-09 18:23:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AM&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'IN'AM'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-09 18:23:44 --> Query error: ERROR:  syntax error at or near "AM"
LINE 11: WHERE (tbl."MemberCode" ~* 'IN'AM'
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
WHERE (tbl."MemberCode" ~* 'IN'AM'
					OR UPPER("IdCardNumber") LIKE '%IN'AM%'
					OR tbl."Name" ~* 'IN'AM'
					OR UPPER("Phone") LIKE '%IN'AM%'
					OR UPPER("Handpone") LIKE '%IN'AM%'
					OR UPPER("Barcode") LIKE '%IN'AM%'
					OR UPPER("Email") LIKE '%IN'AM%'
					OR UPPER("Address") LIKE '%IN'AM%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-09-09 18:35:17 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 20:04:20 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 21:07:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 21:33:01 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-09 23:01:07 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
