<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-05 03:53:11 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-10-05 10:11:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI HANI'AH'
                                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-05 10:11:39 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
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
WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
					OR UPPER("IdCardNumber") LIKE '%SITI HANI'AH%'
					OR tbl."Name" ~* 'SITI HANI'AH'
					OR UPPER("Phone") LIKE '%SITI HANI'AH%'
					OR UPPER("Handpone") LIKE '%SITI HANI'AH%'
					OR UPPER("Barcode") LIKE '%SITI HANI'AH%'
					OR UPPER("Email") LIKE '%SITI HANI'AH%'
					OR UPPER("Address") LIKE '%SITI HANI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-10-05 10:12:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI HANI'AH'
                                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-05 10:12:14 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
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
WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
					OR UPPER("IdCardNumber") LIKE '%SITI HANI'AH%'
					OR tbl."Name" ~* 'SITI HANI'AH'
					OR UPPER("Phone") LIKE '%SITI HANI'AH%'
					OR UPPER("Handpone") LIKE '%SITI HANI'AH%'
					OR UPPER("Barcode") LIKE '%SITI HANI'AH%'
					OR UPPER("Email") LIKE '%SITI HANI'AH%'
					OR UPPER("Address") LIKE '%SITI HANI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-10-05 10:12:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* 'SITI HANI'AH,SE'
                                     ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-05 10:12:48 --> Query error: ERROR:  syntax error at or near "AH"
LINE 3: WHERE ( "Name" ~* 'SITI HANI'AH,SE'
                                     ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* 'SITI HANI'AH,SE'
					)
AND "StoreCode" = 'Z788'
AND "DateOfBirth" = '19730629'
 LIMIT 100
ERROR - 2021-10-05 10:13:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI HANI'AH'
                                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-05 10:13:15 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
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
WHERE (tbl."MemberCode" ~* 'SITI HANI'AH'
					OR UPPER("IdCardNumber") LIKE '%SITI HANI'AH%'
					OR tbl."Name" ~* 'SITI HANI'AH'
					OR UPPER("Phone") LIKE '%SITI HANI'AH%'
					OR UPPER("Handpone") LIKE '%SITI HANI'AH%'
					OR UPPER("Barcode") LIKE '%SITI HANI'AH%'
					OR UPPER("Email") LIKE '%SITI HANI'AH%'
					OR UPPER("Address") LIKE '%SITI HANI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
