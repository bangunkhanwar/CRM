<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-17 07:28:18 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-05-17 17:05:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AD&quot;
LINE 4:    UPPER(&quot;MemberCode&quot;) LIKE '%AS'AD SYAMSUL ARIPIN%'
                                         ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-17 17:05:47 --> Query error: ERROR:  syntax error at or near "AD"
LINE 4:    UPPER("MemberCode") LIKE '%AS'AD SYAMSUL ARIPIN%'
                                         ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%AS'AD SYAMSUL ARIPIN%'
			OR UPPER("Handpone") LIKE '%AS'AD SYAMSUL ARIPIN%'
			OR UPPER("Email") LIKE '%AS'AD SYAMSUL ARIPIN%')
 LIMIT 1
ERROR - 2020-05-17 21:07:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ATUS&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'IMRO'ATUS'
                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-17 21:07:22 --> Query error: ERROR:  syntax error at or near "ATUS"
LINE 11: WHERE (tbl."MemberCode" ~* 'IMRO'ATUS'
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
WHERE (tbl."MemberCode" ~* 'IMRO'ATUS'
					OR UPPER("IdCardNumber") LIKE '%IMRO'ATUS%'
					OR tbl."Name" ~* 'IMRO'ATUS'
					OR UPPER("Phone") LIKE '%IMRO'ATUS%'
					OR UPPER("Handpone") LIKE '%IMRO'ATUS%'
					OR UPPER("Barcode") LIKE '%IMRO'ATUS%'
					OR UPPER("Email") LIKE '%IMRO'ATUS%'
					OR UPPER("Address") LIKE '%IMRO'ATUS%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='242')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
