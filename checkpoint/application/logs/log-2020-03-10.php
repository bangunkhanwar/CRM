<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-10 11:02:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-10 11:02:01 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-03-10 11:02:01 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Kecamatan_model.php 50
ERROR - 2020-03-10 13:02:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;TAMAROH&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'MU'TAMAROH'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-10 13:02:52 --> Query error: ERROR:  syntax error at or near "TAMAROH"
LINE 11: WHERE (tbl."MemberCode" ~* 'MU'TAMAROH'
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
WHERE (tbl."MemberCode" ~* 'MU'TAMAROH'
					OR UPPER("IdCardNumber") LIKE '%MU'TAMAROH%'
					OR tbl."Name" ~* 'MU'TAMAROH'
					OR UPPER("Phone") LIKE '%MU'TAMAROH%'
					OR UPPER("Handpone") LIKE '%MU'TAMAROH%'
					OR UPPER("Barcode") LIKE '%MU'TAMAROH%'
					OR UPPER("Email") LIKE '%MU'TAMAROH%'
					OR UPPER("Address") LIKE '%MU'TAMAROH%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='200')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-03-10 13:02:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Member_model.php 58
