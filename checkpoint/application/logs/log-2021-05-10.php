<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-10 14:58:47 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-05-10 17:37:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210510&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210510' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-10 17:37:52 --> Query error: ERROR:  syntax error at or near "20210510"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210510' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210510' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210510' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210510' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,17,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
