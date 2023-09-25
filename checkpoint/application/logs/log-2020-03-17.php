<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-17 11:48:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;YULIANINGSIH&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%IKA YULIANINGSIH'%'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-17 11:48:59 --> Query error: ERROR:  syntax error at or near "YULIANINGSIH"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%IKA YULIANINGSIH'%'
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
WHERE (tbl."MemberCode" ~* 'IKA YULIANINGSIH''
					OR UPPER("IdCardNumber") LIKE '%IKA YULIANINGSIH'%'
					OR tbl."Name" ~* 'IKA YULIANINGSIH''
					OR UPPER("Phone") LIKE '%IKA YULIANINGSIH'%'
					OR UPPER("Handpone") LIKE '%IKA YULIANINGSIH'%'
					OR UPPER("Barcode") LIKE '%IKA YULIANINGSIH'%'
					OR UPPER("Email") LIKE '%IKA YULIANINGSIH'%'
					OR UPPER("Address") LIKE '%IKA YULIANINGSIH'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='188')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-03-17 11:48:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
ERROR - 2020-03-17 19:10:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-17 19:10:57 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '18042170521\'
					OR UPPER("IdCardNumber") LIKE '%18042170521\%'
					OR tbl."Name" ~* '18042170521\'
					OR UPPER("Phone") LIKE '%18042170521\%'
					OR UPPER("Handpone") LIKE '%18042170521\%'
					OR UPPER("Barcode") LIKE '%18042170521\%'
					OR UPPER("Email") LIKE '%18042170521\%'
					OR UPPER("Address") LIKE '%18042170521\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='239')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-03-17 19:10:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
