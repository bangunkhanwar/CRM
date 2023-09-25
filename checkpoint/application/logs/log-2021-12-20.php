<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-20 04:11:54 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 05:31:31 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 06:08:35 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 12:28:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20211220&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20211220' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-20 12:28:41 --> Query error: ERROR:  syntax error at or near "20211220"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20211220' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20211220' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,12,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20211220' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,12,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20211220' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,D12,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#D127,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D1,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#D12,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,12,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2021-12-20 16:55:01 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 20:29:26 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 21:28:12 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-12-20 23:23:51 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
