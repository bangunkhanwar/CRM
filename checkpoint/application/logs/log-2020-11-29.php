<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-29 04:26:41 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-11-29 04:26:41 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-11-29 19:28:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;MAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'LUTFIATUN NI'MAH'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-29 19:28:07 --> Query error: ERROR:  syntax error at or near "MAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'LUTFIATUN NI'MAH'
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
WHERE (tbl."MemberCode" ~* 'LUTFIATUN NI'MAH'
					OR UPPER("IdCardNumber") LIKE '%LUTFIATUN NI'MAH%'
					OR tbl."Name" ~* 'LUTFIATUN NI'MAH'
					OR UPPER("Phone") LIKE '%LUTFIATUN NI'MAH%'
					OR UPPER("Handpone") LIKE '%LUTFIATUN NI'MAH%'
					OR UPPER("Barcode") LIKE '%LUTFIATUN NI'MAH%'
					OR UPPER("Email") LIKE '%LUTFIATUN NI'MAH%'
					OR UPPER("Address") LIKE '%LUTFIATUN NI'MAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='188')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
