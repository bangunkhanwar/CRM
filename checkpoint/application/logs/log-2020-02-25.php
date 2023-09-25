<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-25 13:13:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;RESTUWATI&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%TRI RESTUWATI'%'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-25 13:13:08 --> Query error: ERROR:  syntax error at or near "RESTUWATI"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%TRI RESTUWATI'%'
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
WHERE (tbl."MemberCode" ~* 'TRI RESTUWATI''
					OR UPPER("IdCardNumber") LIKE '%TRI RESTUWATI'%'
					OR tbl."Name" ~* 'TRI RESTUWATI''
					OR UPPER("Phone") LIKE '%TRI RESTUWATI'%'
					OR UPPER("Handpone") LIKE '%TRI RESTUWATI'%'
					OR UPPER("Barcode") LIKE '%TRI RESTUWATI'%'
					OR UPPER("Email") LIKE '%TRI RESTUWATI'%'
					OR UPPER("Address") LIKE '%TRI RESTUWATI'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='194')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
