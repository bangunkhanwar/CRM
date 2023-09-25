<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-09 16:14:14 --> Severity: error --> Exception: Unable to locate the model you have specified: Cctegory_model /home/elcorps/crm/adm/system/core/Loader.php 348
ERROR - 2020-04-09 16:14:53 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Category.php 31
ERROR - 2020-04-09 16:14:53 --> Severity: Notice --> Undefined variable: province /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/main.php 120
ERROR - 2020-04-09 16:14:53 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/main.php 120
ERROR - 2020-04-09 16:14:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 8: AND &quot;msc&quot;.&quot;CityId&quot; = ''
                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:14:54 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 8: AND "msc"."CityId" = ''
                             ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "tbl"."StoreCode" = ''
AND "msc"."CityId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:23:54 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Category.php 31
ERROR - 2020-04-09 16:23:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:23:56 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:24:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:24:14 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:24:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 5: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:24:20 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 5: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE "tbl"."fidBrand" = '1'
AND (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:24:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 5: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:24:22 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 5: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE "tbl"."fidBrand" = '2'
AND (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:24:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;tbl&quot;.&quot;fidBrand&quot; = ''
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:24:30 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "tbl"."fidBrand" = ''
                                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE "tbl"."fidBrand" = ''
AND (UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-09 16:25:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;tbl&quot;.&quot;fidBrand&quot; = ''
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:25:14 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "tbl"."fidBrand" = ''
                                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE "tbl"."fidBrand" = ''
AND (UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-09 16:25:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:25:27 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:25:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;tbl&quot;.&quot;fidBrand&quot; = ''
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:25:35 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "tbl"."fidBrand" = ''
                                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE "tbl"."fidBrand" = ''
AND (UPPER("Description") LIKE '%%')
 LIMIT 10
ERROR - 2020-04-09 16:27:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:27:09 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:32:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:32:21 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:33:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:33:32 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:35:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:35:02 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:36:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 5: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:36:47 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 5: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE 1 = 1
AND (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:37:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:37:34 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:41:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:41:45 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:41:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;StoreCode&quot; does not exist
LINE 4: ORDER BY &quot;StoreCode&quot; ASC
                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 16:41:49 --> Query error: ERROR:  column "StoreCode" does not exist
LINE 4: ORDER BY "StoreCode" ASC
                 ^ - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:45:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: fidBrand /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 34
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:46:57 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: ImagePrefix /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 36
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:29 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:47:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:16 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:48:55 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:53 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:49:53 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:50:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 37
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:38 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:47 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:52:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:55:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 44
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:57:38 --> Severity: Notice --> Undefined variable: humanize_mdate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 42
ERROR - 2020-04-09 16:57:38 --> Severity: error --> Exception: Function name must be a string /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 42
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 16:58:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 47
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined variable: data_voucher /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 33
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 50
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:02:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:02 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:03:31 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 48
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:04:51 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 49
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:06:07 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:07:10 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 55
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 60
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:08:35 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:30 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:10:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 56
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:12 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:11:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:16:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Decription&quot; does not exist
LINE 4: ORDER BY &quot;Decription&quot; ASC
                 ^
HINT:  Perhaps you meant to reference the column &quot;tbl.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 17:16:59 --> Query error: ERROR:  column "Decription" does not exist
LINE 4: ORDER BY "Decription" ASC
                 ^
HINT:  Perhaps you meant to reference the column "tbl.Description". - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "Decription" ASC
 LIMIT 10
ERROR - 2020-04-09 17:17:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Decription&quot; does not exist
LINE 4: ORDER BY &quot;Decription&quot; ASC
                 ^
HINT:  Perhaps you meant to reference the column &quot;tbl.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 17:17:16 --> Query error: ERROR:  column "Decription" does not exist
LINE 4: ORDER BY "Decription" ASC
                 ^
HINT:  Perhaps you meant to reference the column "tbl.Description". - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "Decription" ASC
 LIMIT 10
ERROR - 2020-04-09 17:17:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Decription&quot; does not exist
LINE 4: ORDER BY &quot;Decription&quot; ASC
                 ^
HINT:  Perhaps you meant to reference the column &quot;tbl.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 17:17:32 --> Query error: ERROR:  column "Decription" does not exist
LINE 4: ORDER BY "Decription" ASC
                 ^
HINT:  Perhaps you meant to reference the column "tbl.Description". - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "Decription" ASC
 LIMIT 10
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Decription&quot; does not exist
LINE 4: ORDER BY &quot;Decription&quot; ASC
                 ^
HINT:  Perhaps you meant to reference the column &quot;tbl.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 17:17:39 --> Query error: ERROR:  column "Decription" does not exist
LINE 4: ORDER BY "Decription" ASC
                 ^
HINT:  Perhaps you meant to reference the column "tbl.Description". - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "Decription" ASC
 LIMIT 10
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:17:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;Decription&quot; does not exist
LINE 4: ORDER BY &quot;Decription&quot; ASC
                 ^
HINT:  Perhaps you meant to reference the column &quot;tbl.Description&quot;. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 17:17:45 --> Query error: ERROR:  column "Decription" does not exist
LINE 4: ORDER BY "Decription" ASC
                 ^
HINT:  Perhaps you meant to reference the column "tbl.Description". - Invalid query: SELECT *
FROM "public"."msFeaturedCategory" "tbl"
WHERE (UPPER("Description") LIKE '%%')
ORDER BY "Decription" ASC
 LIMIT 10
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:27 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:41 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:43 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:18:45 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:08 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:19:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:20:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:43 --> Severity: error --> Exception: syntax error, unexpected ',', expecting ')' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Category.php 134
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:56 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 23
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 37
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 52
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Undefined variable: storecode /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 64
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 141
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 141
ERROR - 2020-04-09 17:30:59 --> Severity: Notice --> Trying to get property of non-object /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 179
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:33:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:34:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:04 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 99
ERROR - 2020-04-09 17:40:04 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 100
ERROR - 2020-04-09 17:40:04 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 101
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:34 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:40:35 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 99
ERROR - 2020-04-09 17:40:35 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 100
ERROR - 2020-04-09 17:40:35 --> Severity: Notice --> Undefined variable: row /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 101
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:44 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:41:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:20 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:42:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:43:37 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:03 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:44:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:09 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:25 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:45:40 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:46:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:47:22 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:48:58 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:51:33 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:13 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:52:36 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:54:46 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:17 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:55:49 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:26 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:56:42 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:57:18 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:24 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:25 --> Severity: Notice --> Undefined index: StartDate /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/update.php 111
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 17:58:48 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:00 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-09 18:00:15 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
