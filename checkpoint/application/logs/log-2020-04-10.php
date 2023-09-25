<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-10 12:12:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;081281187481&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* ''081281187481'
                                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-10 12:12:23 --> Query error: ERROR:  syntax error at or near "081281187481"
LINE 11: WHERE (tbl."MemberCode" ~* ''081281187481'
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
WHERE (tbl."MemberCode" ~* ''081281187481'
					OR UPPER("IdCardNumber") LIKE '%'081281187481%'
					OR tbl."Name" ~* ''081281187481'
					OR UPPER("Phone") LIKE '%'081281187481%'
					OR UPPER("Handpone") LIKE '%'081281187481%'
					OR UPPER("Barcode") LIKE '%'081281187481%'
					OR UPPER("Email") LIKE '%'081281187481%'
					OR UPPER("Address") LIKE '%'081281187481%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='50')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-04-10 12:31:58 --> Severity: Warning --> unlink(../files/6296/color/original/1_20200410123153889957.jpg): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 560
ERROR - 2020-04-10 12:31:58 --> Severity: Warning --> unlink(../files/6296/color/thumb_900/1_20200410123153889957.jpg): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 561
ERROR - 2020-04-10 12:31:58 --> Severity: Warning --> unlink(../files/6296/color/thumb_600/1_20200410123153889957.jpg): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 562
ERROR - 2020-04-10 12:31:58 --> Severity: Warning --> unlink(../files/6296/color/thumb_80/1_20200410123153889957.jpg): No such file or directory /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 563
