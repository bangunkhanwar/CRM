<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-22 08:18:44 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-02-22 12:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-22 12:31:37 --> Unable to connect to the database
ERROR - 2021-02-22 12:31:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-22 12:31:44 --> Unable to connect to the database
ERROR - 2021-02-22 12:32:55 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-22 12:32:55 --> Unable to connect to the database
ERROR - 2021-02-22 12:32:55 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-22 12:32:55 --> Unable to connect to the database
ERROR - 2021-02-22 14:39:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210222&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210222' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-22 14:39:27 --> Query error: ERROR:  syntax error at or near "20210222"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210222' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210222' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210222' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210222' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2021-02-22 18:52:01 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 18:52:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 18:58:52 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 18:59:33 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:00:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:00:54 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:04:13 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:04:53 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:15:51 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:16:37 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:17:18 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:18:19 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:40:49 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:41:30 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:43:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:44:22 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:44:42 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:45:14 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:45:55 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:46:26 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:46:36 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 571
ERROR - 2021-02-22 19:47:16 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:47:23 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
ERROR - 2021-02-22 19:48:04 --> Severity: Warning --> Invalid argument supplied for foreach() /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 504
