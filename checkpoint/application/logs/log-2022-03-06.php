<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-03-06 11:42:13 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2022-03-06 19:16:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'HJ SITI MAR'AH'
                                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-03-06 19:16:05 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
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
WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
					OR UPPER("IdCardNumber") LIKE '%HJ SITI MAR'AH%'
					OR tbl."Name" ~* 'HJ SITI MAR'AH'
					OR UPPER("Phone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Handpone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Barcode") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Email") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Address") LIKE '%HJ SITI MAR'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='88')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2022-03-06 19:26:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'HJ SITI MAR'AH'
                                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-03-06 19:26:30 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
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
WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
					OR UPPER("IdCardNumber") LIKE '%HJ SITI MAR'AH%'
					OR tbl."Name" ~* 'HJ SITI MAR'AH'
					OR UPPER("Phone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Handpone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Barcode") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Email") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Address") LIKE '%HJ SITI MAR'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='88')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2022-03-06 19:56:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'HJ SITI MAR'AH'
                                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-03-06 19:56:53 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
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
WHERE (tbl."MemberCode" ~* 'HJ SITI MAR'AH'
					OR UPPER("IdCardNumber") LIKE '%HJ SITI MAR'AH%'
					OR tbl."Name" ~* 'HJ SITI MAR'AH'
					OR UPPER("Phone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Handpone") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Barcode") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Email") LIKE '%HJ SITI MAR'AH%'
					OR UPPER("Address") LIKE '%HJ SITI MAR'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='88')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
