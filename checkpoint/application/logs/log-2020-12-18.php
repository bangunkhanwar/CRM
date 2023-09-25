<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-18 14:11:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20201218&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20201218' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-18 14:11:19 --> Query error: ERROR:  syntax error at or near "20201218"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20201218' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201218' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z80,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z80,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201218' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z80,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z80,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20201218' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z80,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z804,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z80,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,14,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2020-12-18 20:48:05 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
