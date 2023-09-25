<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-18 12:48:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AN&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'RIF'AN'
                                         ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-18 12:48:53 --> Query error: ERROR:  syntax error at or near "AN"
LINE 11: WHERE (tbl."MemberCode" ~* 'RIF'AN'
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
WHERE (tbl."MemberCode" ~* 'RIF'AN'
					OR UPPER("IdCardNumber") LIKE '%RIF'AN%'
					OR tbl."Name" ~* 'RIF'AN'
					OR UPPER("Phone") LIKE '%RIF'AN%'
					OR UPPER("Handpone") LIKE '%RIF'AN%'
					OR UPPER("Barcode") LIKE '%RIF'AN%'
					OR UPPER("Email") LIKE '%RIF'AN%'
					OR UPPER("Address") LIKE '%RIF'AN%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='228')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-04-18 14:24:59 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
