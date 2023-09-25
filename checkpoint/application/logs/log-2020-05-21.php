<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-21 09:08:15 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-05-21 10:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AZIFA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'MU'AZIFA'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-21 10:57:10 --> Query error: ERROR:  syntax error at or near "AZIFA"
LINE 11: WHERE (tbl."MemberCode" ~* 'MU'AZIFA'
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
WHERE (tbl."MemberCode" ~* 'MU'AZIFA'
					OR UPPER("IdCardNumber") LIKE '%MU'AZIFA%'
					OR tbl."Name" ~* 'MU'AZIFA'
					OR UPPER("Phone") LIKE '%MU'AZIFA%'
					OR UPPER("Handpone") LIKE '%MU'AZIFA%'
					OR UPPER("Barcode") LIKE '%MU'AZIFA%'
					OR UPPER("Email") LIKE '%MU'AZIFA%'
					OR UPPER("Address") LIKE '%MU'AZIFA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='188')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-05-21 15:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-21 15:18:27 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'MASPUPAH\'
					OR UPPER("IdCardNumber") LIKE '%MASPUPAH\%'
					OR tbl."Name" ~* 'MASPUPAH\'
					OR UPPER("Phone") LIKE '%MASPUPAH\%'
					OR UPPER("Handpone") LIKE '%MASPUPAH\%'
					OR UPPER("Barcode") LIKE '%MASPUPAH\%'
					OR UPPER("Email") LIKE '%MASPUPAH\%'
					OR UPPER("Address") LIKE '%MASPUPAH\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
