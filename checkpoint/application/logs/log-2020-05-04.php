<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-04 11:55:07 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 255
ERROR - 2020-05-04 11:55:07 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 256
ERROR - 2020-05-04 14:11:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;NULL&quot;
LINE 5: WHERE  IS NULL
                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 14:11:02 --> Query error: ERROR:  syntax error at or near "NULL"
LINE 5: WHERE  IS NULL
                  ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE  IS NULL
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 14:13:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;pilih&quot;
LINE 3: WHERE &quot;idMsProductParent&quot; = 'pilih'
                                    ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 14:13:20 --> Query error: ERROR:  invalid input syntax for integer: "pilih"
LINE 3: WHERE "idMsProductParent" = 'pilih'
                                    ^ - Invalid query: SELECT "tbl".*
FROM "public"."msProductParent" "tbl"
WHERE "idMsProductParent" = 'pilih'
 LIMIT 1
ERROR - 2020-05-04 15:15:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = 'undefined'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:15:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = 'undefined'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = 'undefined'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:26 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = 'undefined'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:30 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = 'undefined'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = 'undefined'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:36 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = 'undefined'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:38 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = 'undefined'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = 'undefined'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:42 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:16:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = 'undefined'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:16:43 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = 'undefined'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = 'undefined'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:17:42 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:17:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:17:48 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:17:57 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:19:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '30'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:19:25 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '30'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '30'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:19:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:19:27 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:19:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '30'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:19:29 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '30'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '30'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:19:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:19:40 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:20:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:20:16 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:20:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:20:49 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:20:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:20:58 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:03 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:06 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:07 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '7'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:10 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '7'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '7'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '7'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:13 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '7'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '7'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '8'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:21:16 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '8'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '8'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:22:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:22:00 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:22:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:22:02 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:23:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:23:01 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:23:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:23:48 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:01 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:02 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:03 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:03 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:04 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:04 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:04 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:05 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:24:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = 'undefined'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:24:27 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = 'undefined'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = 'undefined'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:25:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:25:24 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:25:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '7'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:25:27 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '7'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '7'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:25:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '7'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:25:30 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '7'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '7'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:25:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '7'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:25:31 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '7'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '7'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:26:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:26:36 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:27:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:27:17 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:28:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:28:35 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:29:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '2'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:29:25 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '2'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '2'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:29:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;TransStatus&quot; is ambiguous
LINE 5: WHERE &quot;TransStatus&quot; = '3'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-04 15:29:26 --> Query error: ERROR:  column reference "TransStatus" is ambiguous
LINE 5: WHERE "TransStatus" = '3'
              ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Phone" "PhoneStore", "mts"."Description" "StatusTrx", "mts"."StatusColor", "mts"."SystemRemark"
FROM "omnichannel"."trCustomerOrder" "tbl"
LEFT JOIN "omnichannel"."msTransStatus" "mts" ON "tbl"."TransStatus"="mts"."TransStatus"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE "TransStatus" = '3'
AND (UPPER("TransNum") LIKE '%%'
					OR UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-05-04 15:53:28 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 401
ERROR - 2020-05-04 15:53:28 --> Severity: Notice --> Undefined index: Filedata /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 402
