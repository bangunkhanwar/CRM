<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-04 13:41:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AINI&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ARI QUR'AINI'
                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-04 13:41:44 --> Query error: ERROR:  syntax error at or near "AINI"
LINE 11: WHERE (tbl."MemberCode" ~* 'ARI QUR'AINI'
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
WHERE (tbl."MemberCode" ~* 'ARI QUR'AINI'
					OR UPPER("IdCardNumber") LIKE '%ARI QUR'AINI%'
					OR tbl."Name" ~* 'ARI QUR'AINI'
					OR UPPER("Phone") LIKE '%ARI QUR'AINI%'
					OR UPPER("Handpone") LIKE '%ARI QUR'AINI%'
					OR UPPER("Barcode") LIKE '%ARI QUR'AINI%'
					OR UPPER("Email") LIKE '%ARI QUR'AINI%'
					OR UPPER("Address") LIKE '%ARI QUR'AINI%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='43')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-06-04 13:42:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AINI&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ARIE QUR'AINI'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-04 13:42:01 --> Query error: ERROR:  syntax error at or near "AINI"
LINE 11: WHERE (tbl."MemberCode" ~* 'ARIE QUR'AINI'
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
WHERE (tbl."MemberCode" ~* 'ARIE QUR'AINI'
					OR UPPER("IdCardNumber") LIKE '%ARIE QUR'AINI%'
					OR tbl."Name" ~* 'ARIE QUR'AINI'
					OR UPPER("Phone") LIKE '%ARIE QUR'AINI%'
					OR UPPER("Handpone") LIKE '%ARIE QUR'AINI%'
					OR UPPER("Barcode") LIKE '%ARIE QUR'AINI%'
					OR UPPER("Email") LIKE '%ARIE QUR'AINI%'
					OR UPPER("Address") LIKE '%ARIE QUR'AINI%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='43')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
