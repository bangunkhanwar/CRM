<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-03 11:01:14 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:24 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:26 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:27 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:27 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:28 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:38 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:39 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:40 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:01:40 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:02:01 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:02:11 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:03:53 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:04:22 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:04:33 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php 83
ERROR - 2020-04-03 11:11:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(3) /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 11:11:19 --> Query error: ERROR:  value too long for type character varying(3) - Invalid query: INSERT INTO "omnichannel"."fileUpload" ("fileServerName", "fileType", "filePath", "fileExt", "fileSize", "isImage", "imageWidth", "imageHeight", "imageType", "imageSizeStr", "fidData", "tableName", "realName", "SKU", "ColorCode", "fidProductSize", "fidProductParent", "fidUploadType", "Order", "ForeignID") VALUES ('1_20200403111119883863.jpg', 'jpg', 'files/89/', 'jpg', '1687769', '1', '1344', '2016', 'jpg', '', '5', 'msProductParent', '150-ATARIN 150 E.jpg', '100002010002', 'undefined', '', '89', '2', '1', '100002010002')
ERROR - 2020-04-03 11:11:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;idFileUpload&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 11:11:20 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "idFileUpload" = ''
                               ^ - Invalid query: SELECT "idFileUpload"
FROM "omnichannel"."fileUpload"
WHERE "idFileUpload" = ''
ERROR - 2020-04-03 11:11:20 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/models/Base_model.php 226
ERROR - 2020-04-03 13:57:53 --> Severity: Compile Error --> Cannot redeclare Master::page() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 629
ERROR - 2020-04-03 13:58:16 --> Severity: Compile Error --> Cannot redeclare Master::page() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 629
ERROR - 2020-04-03 13:58:35 --> Severity: Compile Error --> Cannot redeclare Master::page() /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 629
ERROR - 2020-04-03 14:28:10 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/main.php 109
ERROR - 2020-04-03 14:31:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE &quot;tbl&quot;.&quot;isOmni&quot; = '0'
              ^
HINT:  Perhaps you meant to reference the column &quot;mps.isOmni&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:31:57 --> Query error: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE "tbl"."isOmni" = '0'
              ^
HINT:  Perhaps you meant to reference the column "mps.isOmni". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 14:31:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 66
ERROR - 2020-04-03 14:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE &quot;tbl&quot;.&quot;isOmni&quot; = ''
              ^
HINT:  Perhaps you meant to reference the column &quot;mps.isOmni&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:05 --> Query error: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE "tbl"."isOmni" = ''
              ^
HINT:  Perhaps you meant to reference the column "mps.isOmni". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:32:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 66
ERROR - 2020-04-03 14:32:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE &quot;tbl&quot;.&quot;isOmni&quot; = '0'
              ^
HINT:  Perhaps you meant to reference the column &quot;mps.isOmni&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:27 --> Query error: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE "tbl"."isOmni" = '0'
              ^
HINT:  Perhaps you meant to reference the column "mps.isOmni". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 14:32:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE &quot;tbl&quot;.&quot;isOmni&quot; = ''
              ^
HINT:  Perhaps you meant to reference the column &quot;mps.isOmni&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:29 --> Query error: ERROR:  column tbl.isOmni does not exist
LINE 5: WHERE "tbl"."isOmni" = ''
              ^
HINT:  Perhaps you meant to reference the column "mps.isOmni". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "tbl"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:32:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:50 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:32:52 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:32:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '0'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:54 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '0'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:32:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:32:57 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:33:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:34:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:16 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:34:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '0'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:19 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '0'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:34:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:22 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:34:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:45 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:34:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '0'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:48 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '0'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:34:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:34:49 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:38:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:38:23 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:41:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:41:03 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:41:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:41:04 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:41:06 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:41:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '1'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:41:21 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '1'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '1'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:41:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:41:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '0'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:41:24 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '0'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '0'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:41:38 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:41:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:41:38 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 14:42:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;isOmni&quot; = '1'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:42:06 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."isOmni" = '1'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."isOmni" = '1'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:43:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:43:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:43:27 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:43:34 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:43:38 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:43:53 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:44:47 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:44:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:46:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT count(*) as num_rows, &quot;tbl&quot;.*, &quot;mss&quot;.&quot;Description&quot; &quot;S...
                                     ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:46:41 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT count(*) as num_rows, "tbl".*, "mss"."Description" "S...
                                     ^ - Invalid query: SELECT count(*) as num_rows, "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:47:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT &quot;tbl&quot;.*, count(*) as num_rows, &quot;mss&quot;.&quot;Description&quot; &quot;S...
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:47:52 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "S...
               ^ - Invalid query: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:48:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 14:51:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;SELECT&quot;
LINE 1: SELECT SELECT COUNT ( * ) AS num_rows, &quot;mps&quot;.&quot;isOmni&quot;
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:51:20 --> Query error: ERROR:  syntax error at or near "SELECT"
LINE 1: SELECT SELECT COUNT ( * ) AS num_rows, "mps"."isOmni"
               ^ - Invalid query: SELECT SELECT COUNT ( * ) AS num_rows, "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:52:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;select&quot;
LINE 1: SELECT select count (*) as num_rows, &quot;mps&quot;.&quot;isOmni&quot;
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:52:50 --> Query error: ERROR:  syntax error at or near "select"
LINE 1: SELECT select count (*) as num_rows, "mps"."isOmni"
               ^ - Invalid query: SELECT select count (*) as num_rows, "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:53:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;mps.isOmni&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT count (*) as num_rows, &quot;mps&quot;.&quot;isOmni&quot;
                                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:53:21 --> Query error: ERROR:  column "mps.isOmni" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT count (*) as num_rows, "mps"."isOmni"
                                      ^ - Invalid query: SELECT count (*) as num_rows, "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:55:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT &quot;tbl&quot;.*, count(*) as num_rows, &quot;mss&quot;.&quot;Description&quot; &quot;S...
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:55:54 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "S...
               ^ - Invalid query: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:58:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT &quot;tbl&quot;.*, count(*) as num_rows, &quot;mss&quot;.&quot;Description&quot; &quot;S...
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:58:20 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "S...
               ^ - Invalid query: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 14:58:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 5: WHERE &quot;mps&quot;.&quot;isOmni&quot; = ''
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 14:58:21 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 5: WHERE "mps"."isOmni" = ''
                               ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."isOmni" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 15:00:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT &quot;tbl&quot;.*, count(*) as num_rows, &quot;mss&quot;.&quot;Description&quot; &quot;S...
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 15:00:06 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "S...
               ^ - Invalid query: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 15:06:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;tbl.StoreCode&quot; must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT &quot;tbl&quot;.*, count(*) as num_rows, &quot;mss&quot;.&quot;Description&quot; &quot;S...
               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 15:06:40 --> Query error: ERROR:  column "tbl.StoreCode" must appear in the GROUP BY clause or be used in an aggregate function
LINE 1: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "S...
               ^ - Invalid query: SELECT "tbl".*, count(*) as num_rows, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 15:10:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;StoreCode&quot; = 'Z441'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 15:10:43 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."StoreCode" = 'Z441'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."StoreCode" = 'Z441'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 15:13:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;StoreCode&quot; = 'B004'
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 15:13:41 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."StoreCode" = 'B004'
              ^ - Invalid query: SELECT count(*) as num_rows
FROM "omnichannel"."trStockCurrent" "tbl"
WHERE "mps"."StoreCode" = 'B004'
AND (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:17:31 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 76
ERROR - 2020-04-03 15:25:52 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 108
ERROR - 2020-04-03 15:25:52 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 108
ERROR - 2020-04-03 15:30:16 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 108
ERROR - 2020-04-03 15:30:16 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 108
ERROR - 2020-04-03 15:31:05 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:05 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 6: AND &quot;mps&quot;.&quot;isOmni&quot; = ''
                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 15:31:28 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 6: AND "mps"."isOmni" = ''
                             ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "mps"."StoreCode"="mss"."StoreCode"
WHERE "mps"."StoreCode" = ''
AND "mps"."isOmni" = ''
AND (UPPER("tbl"."SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-03 15:31:30 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:30 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:52 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:52 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:31:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:04 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:32:04 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:06 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:16 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:32:16 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 31
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 32
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: TransNum /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: QuantityTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 34
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: GrossSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: DiscountTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 36
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: RetailSalesTot /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 37
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:32:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 38
ERROR - 2020-04-03 15:34:49 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:34:49 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:34:50 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:18 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:35:18 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:35:20 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:36:00 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:36:00 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/main.php 126
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:33 --> Severity: Warning --> Missing argument 2 for match_key(), called in /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php on line 25 and defined /home/elcorps/crm/adm/application/helpers/general_helper.php 25
ERROR - 2020-04-03 15:42:33 --> Severity: Notice --> Undefined variable: key /home/elcorps/crm/adm/application/helpers/general_helper.php 28
ERROR - 2020-04-03 15:42:48 --> Severity: error --> Exception: syntax error, unexpected ';', expecting ',' or ')' /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 25
ERROR - 2020-04-03 15:49:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:49:30 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:49:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:49:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:50:11 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:50:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:50:36 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:50:56 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:51:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:51:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:51:40 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:51:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:53:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:53:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:53:40 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:53:52 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:54:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:54:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:54:38 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:54:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:55:06 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:55:21 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:55:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:55:46 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:56:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:56:17 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:56:31 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:56:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:56:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:57:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:57:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:57:36 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:57:50 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 15:58:00 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:03:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 1: SELECT &quot;tbl&quot;.*, &quot;mss&quot;.&quot;Description&quot; &quot;StoreName&quot;, &quot;mps&quot;.&quot;Stor...
                                                         ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 16:03:35 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 1: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."Stor...
                                                         ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."StoreCode" "Stores", "mps"."isOmni"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
ORDER BY "StoreCode" ASC
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:04:14 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:05:04 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:05:17 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:05:30 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:05:48 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:06:01 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:06:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:06:31 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:06:41 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:00 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:13 --> Severity: error --> Exception: Unable to locate the model you have specified: Store_address_model /home/elcorps/crm/adm/system/core/Loader.php 348
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 29
ERROR - 2020-04-03 16:07:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:47 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:07:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:08:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.Description does not exist
LINE 5:      OR UPPER(&quot;tbl&quot;.&quot;Description&quot;) LIKE '%%'
                      ^
HINT:  Perhaps you meant to reference the column &quot;mss.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 16:08:10 --> Query error: ERROR:  column tbl.Description does not exist
LINE 5:      OR UPPER("tbl"."Description") LIKE '%%'
                      ^
HINT:  Perhaps you meant to reference the column "mss.Description". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%'
					OR UPPER("tbl"."Address") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 16:08:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:08:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:08:39 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:08:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.Description does not exist
LINE 5:      OR UPPER(&quot;tbl&quot;.&quot;Description&quot;) LIKE '%%'
                      ^
HINT:  Perhaps you meant to reference the column &quot;mss.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 16:08:58 --> Query error: ERROR:  column tbl.Description does not exist
LINE 5:      OR UPPER("tbl"."Description") LIKE '%%'
                      ^
HINT:  Perhaps you meant to reference the column "mss.Description". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%'
					OR UPPER("tbl"."Address") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 16:11:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:11:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:11:46 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:11:56 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:12:12 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:12:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:12:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:12:49 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:00 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:02 --> Severity: Notice --> Undefined index: Address /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 30
ERROR - 2020-04-03 16:13:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:47 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:13:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:14:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:16:27 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:16:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:16:46 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:16:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:17:16 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:17:29 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:32 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:17:42 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:17:52 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:18:05 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:09 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:18:14 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:18:27 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:18:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:18:56 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:19:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:19:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:19:44 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:19:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:20:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:20:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:20:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:42 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:20:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:21:01 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:21:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:21:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:21:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:56 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:21:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:22:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:22:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:22:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:22:44 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:14 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:36 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:48 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:23:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:18 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:30 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:39 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:24:58 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:25:01 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:25:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:25:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:03 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:26:44 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:00 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:27:24 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:09 --> Severity: Notice --> Undefined index: msp.ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:28:31 --> Severity: Notice --> Undefined index: ProvinceName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 33
ERROR - 2020-04-03 16:32:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column msp.CityName does not exist
LINE 1: ...toreName&quot;, &quot;mss&quot;.&quot;Address&quot;, &quot;msp&quot;.&quot;ProvinceName&quot;, &quot;msp&quot;.&quot;Cit...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;msc.CityName&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 16:32:17 --> Query error: ERROR:  column msp.CityName does not exist
LINE 1: ...toreName", "mss"."Address", "msp"."ProvinceName", "msp"."Cit...
                                                             ^
HINT:  Perhaps you meant to reference the column "msc.CityName". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msp"."CityName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 16:32:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column msp.CityName does not exist
LINE 1: ...toreName&quot;, &quot;mss&quot;.&quot;Address&quot;, &quot;msp&quot;.&quot;ProvinceName&quot;, &quot;msp&quot;.&quot;Cit...
                                                             ^
HINT:  Perhaps you meant to reference the column &quot;msc.CityName&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 16:32:54 --> Query error: ERROR:  column msp.CityName does not exist
LINE 1: ...toreName", "mss"."Address", "msp"."ProvinceName", "msp"."Cit...
                                                             ^
HINT:  Perhaps you meant to reference the column "msc.CityName". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msp"."CityName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-03 16:33:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:33:53 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:34:04 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:34:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:34:27 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:34:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:34:52 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:04 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:12 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:48 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:35:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:36:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:36:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:36:36 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:36:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:36:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:37:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:37:20 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:42:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:42:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:50 --> Severity: Notice --> Undefined index: idMsProductParent /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/list.php 35
ERROR - 2020-04-03 16:43:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:44:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:48:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:48:56 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:49:06 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:49:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:52:17 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:52:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:52:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:54:44 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:54:53 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:55:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:55:21 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:55:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:55:42 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:55:54 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:56:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:56:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:56:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:56:34 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:56:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:57:01 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:57:11 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:57:32 --> Severity: error --> Exception: syntax error, unexpected ',', expecting ')' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 92
ERROR - 2020-04-03 16:57:50 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:58:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 16:59:31 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 8
ERROR - 2020-04-03 16:59:31 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 130
ERROR - 2020-04-03 16:59:31 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 154
ERROR - 2020-04-03 16:59:31 --> Severity: Notice --> Undefined variable: membercats /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 201
ERROR - 2020-04-03 16:59:31 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 201
ERROR - 2020-04-03 16:59:35 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 8
ERROR - 2020-04-03 16:59:35 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 130
ERROR - 2020-04-03 16:59:35 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 154
ERROR - 2020-04-03 16:59:35 --> Severity: Notice --> Undefined variable: membercats /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 201
ERROR - 2020-04-03 16:59:35 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 201
ERROR - 2020-04-03 17:00:44 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:01:07 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:01:37 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:01:59 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:02:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:02:21 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:02:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:02:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:03:04 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:03:18 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:03:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:03:38 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:03:50 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:04:06 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:05:41 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 66
ERROR - 2020-04-03 17:05:41 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 90
ERROR - 2020-04-03 17:05:41 --> Severity: Notice --> Undefined variable: membercats /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 137
ERROR - 2020-04-03 17:05:41 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 137
ERROR - 2020-04-03 17:09:13 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 66
ERROR - 2020-04-03 17:09:13 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 90
ERROR - 2020-04-03 17:09:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:09:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:09:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:09:42 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:09:44 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 66
ERROR - 2020-04-03 17:09:44 --> Severity: Notice --> Undefined variable: member_code /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 90
ERROR - 2020-04-03 17:09:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:09:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:11:46 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 68
ERROR - 2020-04-03 17:11:47 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 68
ERROR - 2020-04-03 17:15:16 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:15:29 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:15:39 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:15:49 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:16 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:22 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:32 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:40 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:16:52 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:17:01 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:17:12 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:17:29 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:17:40 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:17:50 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:18:00 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:18:08 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:18:17 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:19:10 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:20:47 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:21:00 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:21:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:21:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:21:45 --> Severity: Notice --> Undefined index: mss.StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:21:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:22:03 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:22:13 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:22:15 --> Severity: Notice --> Undefined index: Description /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:22:27 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:22:43 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:22:49 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:22:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-03 17:23:04 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 94
ERROR - 2020-04-03 17:24:32 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:24:50 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:26:03 --> Severity: error --> Exception: syntax error, unexpected '.', expecting end of file /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 17:26:04 --> Severity: error --> Exception: syntax error, unexpected '.', expecting end of file /home/elcorps/crm/adm/application/modules/omnichannel/views/master/store/update.php 65
ERROR - 2020-04-03 22:42:24 --> Severity: error --> Exception: syntax error, unexpected ''list'' (T_CONSTANT_ENCAPSED_STRING), expecting ')' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 107
ERROR - 2020-04-03 22:43:12 --> Severity: error --> Exception: Cannot use object of type stdClass as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 106
ERROR - 2020-04-03 23:21:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column tbl.Address does not exist
LINE 8:   OR UPPER(&quot;tbl&quot;.&quot;Address&quot;) LIKE '%%')
                   ^
HINT:  Perhaps you meant to reference the column &quot;mss.Address&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-03 23:21:35 --> Query error: ERROR:  column tbl.Address does not exist
LINE 8:   OR UPPER("tbl"."Address") LIKE '%%')
                   ^
HINT:  Perhaps you meant to reference the column "mss.Address". - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("tbl"."Address") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
