<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-03 09:56:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-02-03 09:56:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-02-03 09:56:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-02-03 09:56:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-02-03 09:56:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-02-03 16:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210203&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210203' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-03 16:55:41 --> Query error: ERROR:  syntax error at or near "20210203"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210203' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210203' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HO%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210203' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HO%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210203' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HO%'
		)
 LIMIT 1
