<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-16 16:42:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210116&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210116' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-16 16:42:17 --> Query error: ERROR:  syntax error at or near "20210116"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210116' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210116' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210116' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210116' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z01,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z013,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z01,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2021-01-16 17:37:59 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-16 17:37:59 --> Unable to connect to the database
