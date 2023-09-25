<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-19 02:11:43 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-12-19 06:28:55 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-12-19 12:41:46 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-12-19 17:19:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20201219&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20201219' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-19 17:19:02 --> Query error: ERROR:  syntax error at or near "20201219"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20201219' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201219' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201219' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201219' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z014,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2020-12-19 22:45:05 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
