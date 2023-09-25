<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-24 19:12:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;DIYAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'HALIMMATUS SA'DIYAH'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-24 19:12:39 --> Query error: ERROR:  syntax error at or near "DIYAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'HALIMMATUS SA'DIYAH'
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
WHERE (tbl."MemberCode" ~* 'HALIMMATUS SA'DIYAH'
					OR UPPER("IdCardNumber") LIKE '%HALIMMATUS SA'DIYAH%'
					OR tbl."Name" ~* 'HALIMMATUS SA'DIYAH'
					OR UPPER("Phone") LIKE '%HALIMMATUS SA'DIYAH%'
					OR UPPER("Handpone") LIKE '%HALIMMATUS SA'DIYAH%'
					OR UPPER("Barcode") LIKE '%HALIMMATUS SA'DIYAH%'
					OR UPPER("Email") LIKE '%HALIMMATUS SA'DIYAH%'
					OR UPPER("Address") LIKE '%HALIMMATUS SA'DIYAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='232')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
