<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-08 11:43:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210508&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210508' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-08 11:43:55 --> Query error: ERROR:  syntax error at or near "20210508"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210508' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210508' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z83,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210508' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z83,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210508' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z83,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z833,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z8,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z83,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
