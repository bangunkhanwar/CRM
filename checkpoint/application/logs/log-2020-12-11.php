<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-11 17:57:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADA'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:57:40 --> Query error: ERROR:  syntax error at or near "ADA"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADA'
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
WHERE (tbl."MemberCode" ~* 'SA'ADA'
					OR UPPER("IdCardNumber") LIKE '%SA'ADA%'
					OR tbl."Name" ~* 'SA'ADA'
					OR UPPER("Phone") LIKE '%SA'ADA%'
					OR UPPER("Handpone") LIKE '%SA'ADA%'
					OR UPPER("Barcode") LIKE '%SA'ADA%'
					OR UPPER("Email") LIKE '%SA'ADA%'
					OR UPPER("Address") LIKE '%SA'ADA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:58:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:58:13 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:36 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:38 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:40 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:40 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:41 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AD&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'AD'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:52 --> Query error: ERROR:  syntax error at or near "AD"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'AD'
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
WHERE (tbl."MemberCode" ~* 'SA'AD'
					OR UPPER("IdCardNumber") LIKE '%SA'AD%'
					OR tbl."Name" ~* 'SA'AD'
					OR UPPER("Phone") LIKE '%SA'AD%'
					OR UPPER("Handpone") LIKE '%SA'AD%'
					OR UPPER("Barcode") LIKE '%SA'AD%'
					OR UPPER("Email") LIKE '%SA'AD%'
					OR UPPER("Address") LIKE '%SA'AD%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AD&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'AD'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:53 --> Query error: ERROR:  syntax error at or near "AD"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'AD'
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
WHERE (tbl."MemberCode" ~* 'SA'AD'
					OR UPPER("IdCardNumber") LIKE '%SA'AD%'
					OR tbl."Name" ~* 'SA'AD'
					OR UPPER("Phone") LIKE '%SA'AD%'
					OR UPPER("Handpone") LIKE '%SA'AD%'
					OR UPPER("Barcode") LIKE '%SA'AD%'
					OR UPPER("Email") LIKE '%SA'AD%'
					OR UPPER("Address") LIKE '%SA'AD%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 17:59:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AD&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'AD'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 17:59:53 --> Query error: ERROR:  syntax error at or near "AD"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'AD'
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
WHERE (tbl."MemberCode" ~* 'SA'AD'
					OR UPPER("IdCardNumber") LIKE '%SA'AD%'
					OR tbl."Name" ~* 'SA'AD'
					OR UPPER("Phone") LIKE '%SA'AD%'
					OR UPPER("Handpone") LIKE '%SA'AD%'
					OR UPPER("Barcode") LIKE '%SA'AD%'
					OR UPPER("Email") LIKE '%SA'AD%'
					OR UPPER("Address") LIKE '%SA'AD%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 18:00:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADAT&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADAT'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 18:00:11 --> Query error: ERROR:  syntax error at or near "ADAT"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADAT'
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
WHERE (tbl."MemberCode" ~* 'SA'ADAT'
					OR UPPER("IdCardNumber") LIKE '%SA'ADAT%'
					OR tbl."Name" ~* 'SA'ADAT'
					OR UPPER("Phone") LIKE '%SA'ADAT%'
					OR UPPER("Handpone") LIKE '%SA'ADAT%'
					OR UPPER("Barcode") LIKE '%SA'ADAT%'
					OR UPPER("Email") LIKE '%SA'ADAT%'
					OR UPPER("Address") LIKE '%SA'ADAT%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 18:01:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADATU&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SA'ADATU'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 18:01:09 --> Query error: ERROR:  syntax error at or near "ADATU"
LINE 11: WHERE (tbl."MemberCode" ~* 'SA'ADATU'
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
WHERE (tbl."MemberCode" ~* 'SA'ADATU'
					OR UPPER("IdCardNumber") LIKE '%SA'ADATU%'
					OR tbl."Name" ~* 'SA'ADATU'
					OR UPPER("Phone") LIKE '%SA'ADATU%'
					OR UPPER("Handpone") LIKE '%SA'ADATU%'
					OR UPPER("Barcode") LIKE '%SA'ADATU%'
					OR UPPER("Email") LIKE '%SA'ADATU%'
					OR UPPER("Address") LIKE '%SA'ADATU%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-12-11 18:56:50 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-12-11 18:58:47 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
