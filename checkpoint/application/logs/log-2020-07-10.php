<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-10 14:33:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ADAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'JAZILATUS SA'ADAH'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-10 14:33:23 --> Query error: ERROR:  syntax error at or near "ADAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'JAZILATUS SA'ADAH'
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
WHERE (tbl."MemberCode" ~* 'JAZILATUS SA'ADAH'
					OR UPPER("IdCardNumber") LIKE '%JAZILATUS SA'ADAH%'
					OR tbl."Name" ~* 'JAZILATUS SA'ADAH'
					OR UPPER("Phone") LIKE '%JAZILATUS SA'ADAH%'
					OR UPPER("Handpone") LIKE '%JAZILATUS SA'ADAH%'
					OR UPPER("Barcode") LIKE '%JAZILATUS SA'ADAH%'
					OR UPPER("Email") LIKE '%JAZILATUS SA'ADAH%'
					OR UPPER("Address") LIKE '%JAZILATUS SA'ADAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='228')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
