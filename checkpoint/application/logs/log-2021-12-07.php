<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-07 00:04:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-07 02:06:27 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-07 04:09:26 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-07 11:56:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;kistiyah&quot; does not exist
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%KISTIYAH'%'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-07 11:56:37 --> Query error: ERROR:  type "kistiyah" does not exist
LINE 12:      OR UPPER("IdCardNumber") LIKE '%KISTIYAH'%'
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
WHERE (tbl."MemberCode" ~* 'KISTIYAH''
					OR UPPER("IdCardNumber") LIKE '%KISTIYAH'%'
					OR tbl."Name" ~* 'KISTIYAH''
					OR UPPER("Phone") LIKE '%KISTIYAH'%'
					OR UPPER("Handpone") LIKE '%KISTIYAH'%'
					OR UPPER("Barcode") LIKE '%KISTIYAH'%'
					OR UPPER("Email") LIKE '%KISTIYAH'%'
					OR UPPER("Address") LIKE '%KISTIYAH'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-12-07 12:34:22 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-07 16:21:04 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
