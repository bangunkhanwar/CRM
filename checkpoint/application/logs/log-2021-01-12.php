<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-12 04:48:07 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-01-12 11:01:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'DEDE SA'ADAH'
                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-12 11:01:03 --> Query error: ERROR:  syntax error at or near "ADAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'DEDE SA'ADAH'
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
WHERE (tbl."MemberCode" ~* 'DEDE SA'ADAH'
					OR UPPER("IdCardNumber") LIKE '%DEDE SA'ADAH%'
					OR tbl."Name" ~* 'DEDE SA'ADAH'
					OR UPPER("Phone") LIKE '%DEDE SA'ADAH%'
					OR UPPER("Handpone") LIKE '%DEDE SA'ADAH%'
					OR UPPER("Barcode") LIKE '%DEDE SA'ADAH%'
					OR UPPER("Email") LIKE '%DEDE SA'ADAH%'
					OR UPPER("Address") LIKE '%DEDE SA'ADAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='80')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-12 15:28:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 5:    OR UPPER(&quot;Handpone&quot;) LIKE '%085701575111'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-12 15:28:41 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 5:    OR UPPER("Handpone") LIKE '%085701575111'%'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%085701575111'%'
			OR UPPER("Handpone") LIKE '%085701575111'%'
			OR UPPER("Email") LIKE '%085701575111'%')
 LIMIT 1
