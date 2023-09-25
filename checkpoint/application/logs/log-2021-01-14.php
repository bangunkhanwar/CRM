<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-14 12:14:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'MARI'AH'
                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-14 12:14:58 --> Query error: ERROR:  syntax error at or near "AH"
LINE 11: WHERE (tbl."MemberCode" ~* 'MARI'AH'
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
WHERE (tbl."MemberCode" ~* 'MARI'AH'
					OR UPPER("IdCardNumber") LIKE '%MARI'AH%'
					OR tbl."Name" ~* 'MARI'AH'
					OR UPPER("Phone") LIKE '%MARI'AH%'
					OR UPPER("Handpone") LIKE '%MARI'AH%'
					OR UPPER("Barcode") LIKE '%MARI'AH%'
					OR UPPER("Email") LIKE '%MARI'AH%'
					OR UPPER("Address") LIKE '%MARI'AH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='188')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-01-14 12:50:04 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
