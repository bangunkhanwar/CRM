<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-10 05:58:31 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-05-10 06:00:30 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-05-10 11:47:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;HISBIAN&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%NING HISBIAN'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-10 11:47:03 --> Query error: ERROR:  syntax error at or near "HISBIAN"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%NING HISBIAN'%'
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
WHERE (tbl."MemberCode" ~* 'NING HISBIAN''
					OR UPPER("IdCardNumber") LIKE '%NING HISBIAN'%'
					OR tbl."Name" ~* 'NING HISBIAN''
					OR UPPER("Phone") LIKE '%NING HISBIAN'%'
					OR UPPER("Handpone") LIKE '%NING HISBIAN'%'
					OR UPPER("Barcode") LIKE '%NING HISBIAN'%'
					OR UPPER("Email") LIKE '%NING HISBIAN'%'
					OR UPPER("Address") LIKE '%NING HISBIAN'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='243')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-05-10 15:09:04 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
