<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-20 11:28:17 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-06-20 11:56:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MATUL&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ' ALFI NI'MATUL KHUSNA'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-20 11:56:35 --> Query error: ERROR:  syntax error at or near "MATUL"
LINE 11: WHERE (tbl."MemberCode" ~* ' ALFI NI'MATUL KHUSNA'
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
WHERE (tbl."MemberCode" ~* ' ALFI NI'MATUL KHUSNA'
					OR UPPER("IdCardNumber") LIKE '% ALFI NI'MATUL KHUSNA%'
					OR tbl."Name" ~* ' ALFI NI'MATUL KHUSNA'
					OR UPPER("Phone") LIKE '% ALFI NI'MATUL KHUSNA%'
					OR UPPER("Handpone") LIKE '% ALFI NI'MATUL KHUSNA%'
					OR UPPER("Barcode") LIKE '% ALFI NI'MATUL KHUSNA%'
					OR UPPER("Email") LIKE '% ALFI NI'MATUL KHUSNA%'
					OR UPPER("Address") LIKE '% ALFI NI'MATUL KHUSNA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='282')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-06-20 11:58:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MATUL&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ALFI NI'MATUL KHUSNA            ...
                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-20 11:58:41 --> Query error: ERROR:  syntax error at or near "MATUL"
LINE 11: WHERE (tbl."MemberCode" ~* 'ALFI NI'MATUL KHUSNA            ...
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
WHERE (tbl."MemberCode" ~* 'ALFI NI'MATUL KHUSNA                   '
					OR UPPER("IdCardNumber") LIKE '%ALFI NI'MATUL KHUSNA                   %'
					OR tbl."Name" ~* 'ALFI NI'MATUL KHUSNA                   '
					OR UPPER("Phone") LIKE '%ALFI NI'MATUL KHUSNA                   %'
					OR UPPER("Handpone") LIKE '%ALFI NI'MATUL KHUSNA                   %'
					OR UPPER("Barcode") LIKE '%ALFI NI'MATUL KHUSNA                   %'
					OR UPPER("Email") LIKE '%ALFI NI'MATUL KHUSNA                   %'
					OR UPPER("Address") LIKE '%ALFI NI'MATUL KHUSNA                   %')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='282')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
