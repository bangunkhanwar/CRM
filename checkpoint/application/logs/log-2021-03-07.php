<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-07 11:23:29 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-03-07 13:46:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'undefined'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 13:46:10 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "fidPropinsi" = 'undefined'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'undefined'
ERROR - 2021-03-07 13:46:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'undefined'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 13:46:42 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "fidPropinsi" = 'undefined'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'undefined'
ERROR - 2021-03-07 16:08:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210307&quot;
LINE 11: ...de&quot; ~* ' SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210307' ...
                                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 16:08:30 --> Query error: ERROR:  syntax error at or near "20210307"
LINE 11: ...de" ~* ' SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210307' ...
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
WHERE (tbl."MemberCode" ~* '	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL'
					OR UPPER("IdCardNumber") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
					OR tbl."Name" ~* '	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL'
					OR UPPER("Phone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
					OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
					OR UPPER("Barcode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
					OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
					OR UPPER("Address") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210307' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODEL%'
				)
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='44')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-03-07 16:12:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;BANA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ANNI SYA'BANA'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 16:12:36 --> Query error: ERROR:  syntax error at or near "BANA"
LINE 11: WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
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
WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
					OR UPPER("IdCardNumber") LIKE '%ANNI SYA'BANA%'
					OR tbl."Name" ~* 'ANNI SYA'BANA'
					OR UPPER("Phone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Handpone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Barcode") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Email") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Address") LIKE '%ANNI SYA'BANA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='210')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-03-07 16:13:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;BANA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ANNI SYA'BANA'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 16:13:03 --> Query error: ERROR:  syntax error at or near "BANA"
LINE 11: WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
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
WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
					OR UPPER("IdCardNumber") LIKE '%ANNI SYA'BANA%'
					OR tbl."Name" ~* 'ANNI SYA'BANA'
					OR UPPER("Phone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Handpone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Barcode") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Email") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Address") LIKE '%ANNI SYA'BANA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='210')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2021-03-07 16:13:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;BANA&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'ANNI SYA'BANA'
                                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-07 16:13:28 --> Query error: ERROR:  syntax error at or near "BANA"
LINE 11: WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
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
WHERE (tbl."MemberCode" ~* 'ANNI SYA'BANA'
					OR UPPER("IdCardNumber") LIKE '%ANNI SYA'BANA%'
					OR tbl."Name" ~* 'ANNI SYA'BANA'
					OR UPPER("Phone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Handpone") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Barcode") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Email") LIKE '%ANNI SYA'BANA%'
					OR UPPER("Address") LIKE '%ANNI SYA'BANA%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='210')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
