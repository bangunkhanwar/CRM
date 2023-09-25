<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-24 12:29:42 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 13:25:00 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 14:43:44 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 15:09:17 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 15:27:58 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 15:53:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 16:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;indah&quot; does not exist
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%INDAH'%'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-11-24 16:01:34 --> Query error: ERROR:  type "indah" does not exist
LINE 12:      OR UPPER("IdCardNumber") LIKE '%INDAH'%'
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
WHERE (tbl."MemberCode" ~* 'INDAH''
					OR UPPER("IdCardNumber") LIKE '%INDAH'%'
					OR tbl."Name" ~* 'INDAH''
					OR UPPER("Phone") LIKE '%INDAH'%'
					OR UPPER("Handpone") LIKE '%INDAH'%'
					OR UPPER("Barcode") LIKE '%INDAH'%'
					OR UPPER("Email") LIKE '%INDAH'%'
					OR UPPER("Address") LIKE '%INDAH'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='235')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-11-24 16:16:48 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 16:32:16 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 18:44:05 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 19:36:05 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 20:43:55 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-11-24 21:51:43 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
