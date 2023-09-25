<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-09 11:06:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210509&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210509' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-09 11:06:12 --> Query error: ERROR:  syntax error at or near "20210509"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210509' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210509' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z08,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z08,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,10,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210509' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z08,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z08,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,10,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210509' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z08,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z080,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z08,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,10,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2021-05-09 12:42:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LUUN&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* 'LU'LUUN NAFISAH'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-09 12:42:33 --> Query error: ERROR:  syntax error at or near "LUUN"
LINE 3: WHERE ( "Name" ~* 'LU'LUUN NAFISAH'
                              ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* 'LU'LUUN NAFISAH'
					)
AND "StoreCode" = 'Z726'
AND "DateOfBirth" = '19840812'
 LIMIT 100
ERROR - 2021-05-09 12:52:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 5:    OR UPPER(&quot;Handpone&quot;) LIKE '%085721423342'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-09 12:52:01 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 5:    OR UPPER("Handpone") LIKE '%085721423342'%'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%085721423342'%'
			OR UPPER("Handpone") LIKE '%085721423342'%'
			OR UPPER("Email") LIKE '%085721423342'%')
 LIMIT 1
ERROR - 2021-05-09 19:22:42 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 52
ERROR - 2021-05-09 19:22:42 --> Severity: Notice --> Undefined index: columns /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 53
ERROR - 2021-05-09 19:22:42 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 54
ERROR - 2021-05-09 19:22:42 --> Severity: Notice --> Undefined index: search /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 55
ERROR - 2021-05-09 19:27:35 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 52
ERROR - 2021-05-09 19:27:35 --> Severity: Notice --> Undefined index: columns /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 53
ERROR - 2021-05-09 19:27:35 --> Severity: Notice --> Undefined index: order /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 54
ERROR - 2021-05-09 19:27:35 --> Severity: Notice --> Undefined index: search /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Monitoring.php 55
