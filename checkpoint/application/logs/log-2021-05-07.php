<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-07 11:52:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20210507&quot;
LINE 4: ... LIKE '% SELECT *  FROM &quot;PROMO&quot;.&quot;MSPROMO&quot;  WHERE '20210507' ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-07 11:52:41 --> Query error: ERROR:  syntax error at or near "20210507"
LINE 4: ... LIKE '% SELECT *  FROM "PROMO"."MSPROMO"  WHERE '20210507' ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210507' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Handpone") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210507' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%'
			OR UPPER("Email") LIKE '%	SELECT * 	FROM "PROMO"."MSPROMO" 	WHERE '20210507' BETWEEN "STARTPROMO" AND "ENDPROMO" 		AND  ("STORECODELIST" LIKE '%ALL%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,Z76,%' 			) 		AND NOT (','||"STORECODELIST"||',' LIKE '%,#Z769,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z7,%' 			OR ','||"STORECODELIST"||',' LIKE '%,#Z76,%' 			)  		AND ("HOURLIST" LIKE '%ALL%' 			OR ','||"HOURLIST"||',' LIKE '%,11,%' 			) 	ORDER BY "PRIORITY","PROMOCODE"%')
 LIMIT 1
ERROR - 2021-05-07 14:43:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(920) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-07 14:43:40 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(920) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('293', '02')
ERROR - 2021-05-07 14:43:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(921) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-07 14:43:46 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(921) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('293', '03')
ERROR - 2021-05-07 14:46:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(922) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-07 14:46:00 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(922) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('293', '01')
ERROR - 2021-05-07 14:55:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:55:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:55:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:55:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:55:17 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:59:18 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-05-07 14:59:18 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/product_report/main.php 138
ERROR - 2021-05-07 14:59:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for type numeric: &quot;&quot;
LINE 5: WHERE &quot;tbl&quot;.&quot;TransStatus&quot; = ''
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-07 14:59:19 --> Query error: ERROR:  invalid input syntax for type numeric: ""
LINE 5: WHERE "tbl"."TransStatus" = ''
                                    ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."TransStatus" = ''
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
 LIMIT 10
ERROR - 2021-05-07 14:59:55 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:59:55 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:59:55 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:59:55 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 14:59:55 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2021-05-07 15:42:25 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
