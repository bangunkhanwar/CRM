<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-09 14:31:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 14:31:14 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-07-09 14:52:32 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-07-09 18:42:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I                 ...
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:42:56 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                 ...
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I                         %'
					OR tbl."Name" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I                         %')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-07-09 18:43:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I                 ...
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:43:16 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                 ...
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I                         %'
					OR tbl."Name" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I                         %')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-07-09 18:44:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:44:14 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I%'
					OR tbl."Name" ~* ' H. WAJH KIFA'I'
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-07-09 18:45:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:45:29 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I%'
					OR tbl."Name" ~* ' H. WAJH KIFA'I'
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I%')
AND "isActive" = 1
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-07-09 18:45:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:45:30 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I'
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I%'
					OR tbl."Name" ~* ' H. WAJH KIFA'I'
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I%'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-07-09 18:46:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* ' H. WAJH KIFA'I '
                                         ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:46:23 --> Query error: ERROR:  syntax error at or near "I"
LINE 3: WHERE ( "Name" ~* ' H. WAJH KIFA'I '
                                         ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* ' H. WAJH KIFA'I '
					)
AND "StoreCode" = 'Z726'
AND "DateOfBirth" = '19201209'
 LIMIT 100
ERROR - 2020-07-09 18:56:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;I&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' H. WAJH KIFA'I                 ...
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-09 18:56:47 --> Query error: ERROR:  syntax error at or near "I"
LINE 11: WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                 ...
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
WHERE (tbl."MemberCode" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("IdCardNumber") LIKE '% H. WAJH KIFA'I                         %'
					OR tbl."Name" ~* ' H. WAJH KIFA'I                         '
					OR UPPER("Phone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Handpone") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Barcode") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Email") LIKE '% H. WAJH KIFA'I                         %'
					OR UPPER("Address") LIKE '% H. WAJH KIFA'I                         %')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
AND "RegistrationDate" = '19901110'
ORDER BY "RegistrationDate" DESC
 LIMIT 100
