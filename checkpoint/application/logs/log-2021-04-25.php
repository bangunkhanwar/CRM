<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-25 15:27:56 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-04-25 16:38:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210425&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210425' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-25 16:38:59 --> Query error: ERROR:  syntax error at or near "20210425"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210425' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210425' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z07,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z07,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210425' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z07,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z07,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210425' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z07,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z076,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z0,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z07,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,16,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
