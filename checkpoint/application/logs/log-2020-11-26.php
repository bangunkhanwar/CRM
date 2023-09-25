<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-26 10:46:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'null'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:44 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidPropinsi" = 'null'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'null'
ERROR - 2020-11-26 10:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:45 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-11-26 10:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:45 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-11-26 10:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:45 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-11-26 10:46:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:45 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-11-26 10:46:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'null'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 10:46:47 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidPropinsi" = 'null'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'null'
ERROR - 2020-11-26 14:35:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-26 14:35:24 --> Unable to connect to the database
ERROR - 2020-11-26 17:52:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AN&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'AN'AN'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-26 17:52:50 --> Query error: ERROR:  syntax error at or near "AN"
LINE 11: WHERE (tbl."MemberCode" ~* 'AN'AN'
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
WHERE (tbl."MemberCode" ~* 'AN'AN'
					OR UPPER("IdCardNumber") LIKE '%AN'AN%'
					OR tbl."Name" ~* 'AN'AN'
					OR UPPER("Phone") LIKE '%AN'AN%'
					OR UPPER("Handpone") LIKE '%AN'AN%'
					OR UPPER("Barcode") LIKE '%AN'AN%'
					OR UPPER("Email") LIKE '%AN'AN%'
					OR UPPER("Address") LIKE '%AN'AN%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
