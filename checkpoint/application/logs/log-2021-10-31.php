<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-31 05:34:20 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-10-31 10:03:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;fhany&quot; does not exist
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%FHANY'%'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 10:03:48 --> Query error: ERROR:  type "fhany" does not exist
LINE 12:      OR UPPER("IdCardNumber") LIKE '%FHANY'%'
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
WHERE (tbl."MemberCode" ~* 'FHANY''
					OR UPPER("IdCardNumber") LIKE '%FHANY'%'
					OR tbl."Name" ~* 'FHANY''
					OR UPPER("Phone") LIKE '%FHANY'%'
					OR UPPER("Handpone") LIKE '%FHANY'%'
					OR UPPER("Barcode") LIKE '%FHANY'%'
					OR UPPER("Email") LIKE '%FHANY'%'
					OR UPPER("Address") LIKE '%FHANY'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='187')
AND date_part('year',"RegistrationDate") = '2021'
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-10-31 10:03:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  type &quot;fhany&quot; does not exist
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%FHANY'%'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 10:03:49 --> Query error: ERROR:  type "fhany" does not exist
LINE 12:      OR UPPER("IdCardNumber") LIKE '%FHANY'%'
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
WHERE (tbl."MemberCode" ~* 'FHANY''
					OR UPPER("IdCardNumber") LIKE '%FHANY'%'
					OR tbl."Name" ~* 'FHANY''
					OR UPPER("Phone") LIKE '%FHANY'%'
					OR UPPER("Handpone") LIKE '%FHANY'%'
					OR UPPER("Barcode") LIKE '%FHANY'%'
					OR UPPER("Email") LIKE '%FHANY'%'
					OR UPPER("Address") LIKE '%FHANY'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='187')
AND date_part('year',"RegistrationDate") = '2021'
ORDER BY "RegistrationDate" DESC
 LIMIT 10
