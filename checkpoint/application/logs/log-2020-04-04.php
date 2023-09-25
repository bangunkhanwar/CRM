<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-04 00:15:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:15:00 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:15:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:15:30 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:19:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:19:36 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:20:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:20:40 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:21:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:21:40 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:22:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:22:21 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:22:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:22:45 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:22:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:22:56 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:23:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:23:17 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:23:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:23:52 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:24:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:24:12 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:24:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:24:47 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:25:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:25:18 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:25:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:25:43 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:26:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:26:00 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:27:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 7: WHERE &quot;msp&quot;.&quot;ProvinceId&quot; = ''
                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:27:33 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 7: WHERE "msp"."ProvinceId" = ''
                                   ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mss"."Address", "msp"."ProvinceName", "msc"."CityName", "msd"."SubDistrictName"
FROM "ongkir"."msStoreAddress" "tbl"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
LEFT JOIN "ongkir"."msProvince" "msp" ON "tbl"."ProvinceId"="msp"."ProvinceId"
LEFT JOIN "ongkir"."msCity" "msc" ON "tbl"."CityId"="msc"."CityId"
LEFT JOIN "ongkir"."msSubDistrict" "msd" ON "tbl"."SubDistrictId"="msd"."SubDistrictId"
WHERE "msp"."ProvinceId" = ''
AND (UPPER("tbl"."StoreCode") LIKE '%%'
		OR UPPER("mss"."Address") LIKE '%%'
		OR UPPER("mss"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-04-04 00:45:22 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 185
ERROR - 2020-04-04 00:45:46 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 199
ERROR - 2020-04-04 00:45:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;ProvinceId&quot; = ''
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:45:46 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."ProvinceId" = ''
              ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCity" "tbl"
WHERE "mps"."ProvinceId" = ''
AND UPPER("CityName") like '%%'
ORDER BY "CityName" ASC
ERROR - 2020-04-04 00:45:48 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 199
ERROR - 2020-04-04 00:45:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;ProvinceId&quot; = ''
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:45:48 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."ProvinceId" = ''
              ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCity" "tbl"
WHERE "mps"."ProvinceId" = ''
AND UPPER("CityName") like '%%'
ORDER BY "CityName" ASC
ERROR - 2020-04-04 00:45:50 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 185
ERROR - 2020-04-04 00:46:48 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 200
ERROR - 2020-04-04 00:46:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  missing FROM-clause entry for table &quot;mps&quot;
LINE 3: WHERE &quot;mps&quot;.&quot;ProvinceId&quot; = ''
              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:46:48 --> Query error: ERROR:  missing FROM-clause entry for table "mps"
LINE 3: WHERE "mps"."ProvinceId" = ''
              ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCity" "tbl"
WHERE "mps"."ProvinceId" = ''
AND UPPER("CityName") like '%%'
ORDER BY "CityName" ASC
ERROR - 2020-04-04 00:46:49 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 185
ERROR - 2020-04-04 00:46:49 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 192
ERROR - 2020-04-04 00:47:36 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 185
ERROR - 2020-04-04 00:47:36 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 192
ERROR - 2020-04-04 00:47:37 --> Severity: Notice --> Undefined index: term /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 200
ERROR - 2020-04-04 00:47:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;ProvinceId&quot; = ''
                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:47:37 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "ProvinceId" = ''
                             ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCity" "tbl"
WHERE "ProvinceId" = ''
AND UPPER("CityName") like '%%'
ORDER BY "CityName" ASC
ERROR - 2020-04-04 00:48:19 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 192
ERROR - 2020-04-04 00:48:23 --> Severity: error --> Exception: Cannot use object of type CI_DB_postgre_result as array /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 192
ERROR - 2020-04-04 00:48:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;&quot;
LINE 3: WHERE &quot;ProvinceId&quot; = ''
                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-04 00:48:25 --> Query error: ERROR:  invalid input syntax for integer: ""
LINE 3: WHERE "ProvinceId" = ''
                             ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCity" "tbl"
WHERE "ProvinceId" = ''
ORDER BY "CityName" ASC
ERROR - 2020-04-04 11:41:48 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:05 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:14 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:26 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:40 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:47 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:42:56 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:02 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:12 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:20 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:34 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:46 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:43:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:44:10 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:44:23 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:44:36 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:44:45 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:44:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:45:05 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:48:29 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:48:44 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:07 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:30 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:39 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:50:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:05 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:12 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:19 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:29 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:38 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:46 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:51:57 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:05 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:15 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:35 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:42 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:52:51 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:04 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:11 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:34 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:49 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:57:55 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:58:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:58:18 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:58:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-04-04 11:58:33 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
