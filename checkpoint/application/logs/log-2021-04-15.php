<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-15 12:57:24 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-04-15 13:51:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210415&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210415' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-15 13:51:43 --> Query error: ERROR:  syntax error at or near "20210415"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210415' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210415' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODEL%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210415' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODEL%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210415' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z832,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODEL%'
		)
 LIMIT 1
