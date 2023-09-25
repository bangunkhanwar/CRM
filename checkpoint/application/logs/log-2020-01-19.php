<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-19 12:44:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;DAH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'SITI JUBAI'DAH'
                                                ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-19 12:44:57 --> Query error: ERROR:  syntax error at or near "DAH"
LINE 11: WHERE (tbl."MemberCode" ~* 'SITI JUBAI'DAH'
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
WHERE (tbl."MemberCode" ~* 'SITI JUBAI'DAH'
					OR UPPER("IdCardNumber") LIKE '%SITI JUBAI'DAH%'
					OR tbl."Name" ~* 'SITI JUBAI'DAH'
					OR UPPER("Phone") LIKE '%SITI JUBAI'DAH%'
					OR UPPER("Handpone") LIKE '%SITI JUBAI'DAH%'
					OR UPPER("Barcode") LIKE '%SITI JUBAI'DAH%'
					OR UPPER("Email") LIKE '%SITI JUBAI'DAH%'
					OR UPPER("Address") LIKE '%SITI JUBAI'DAH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='195')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-01-19 12:44:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
