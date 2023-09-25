<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-11 10:30:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%20020238639'%'
                                                         ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-11 10:30:46 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%20020238639'%'
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
WHERE (tbl."MemberCode" ~* '20020238639''
					OR UPPER("IdCardNumber") LIKE '%20020238639'%'
					OR tbl."Name" ~* '20020238639''
					OR UPPER("Phone") LIKE '%20020238639'%'
					OR UPPER("Handpone") LIKE '%20020238639'%'
					OR UPPER("Barcode") LIKE '%20020238639'%'
					OR UPPER("Email") LIKE '%20020238639'%'
					OR UPPER("Address") LIKE '%20020238639'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='158')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-07-11 10:51:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-11 10:51:45 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '21023249397\'
					OR UPPER("IdCardNumber") LIKE '%21023249397\%'
					OR tbl."Name" ~* '21023249397\'
					OR UPPER("Phone") LIKE '%21023249397\%'
					OR UPPER("Handpone") LIKE '%21023249397\%'
					OR UPPER("Barcode") LIKE '%21023249397\%'
					OR UPPER("Email") LIKE '%21023249397\%'
					OR UPPER("Address") LIKE '%21023249397\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='158')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-07-11 13:52:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid byte sequence for encoding &quot;UTF8&quot;: 0x8c /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-11 13:52:15 --> Query error: ERROR:  invalid byte sequence for encoding "UTF8": 0x8c - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE "MemberCode" = '21023+LŒ'
 LIMIT 1
ERROR - 2021-07-11 20:22:28 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-07-11 20:24:26 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
