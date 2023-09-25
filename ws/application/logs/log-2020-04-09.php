<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-09 12:06:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1586365200&quot;
LINE 8: AND  &quot;ExpiryDate&quot; &lt; '1586365200' 
                            ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 12:06:59 --> Query error: ERROR:  date/time field value out of range: "1586365200"
LINE 8: AND  "ExpiryDate" < '1586365200' 
                            ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = '516101697'
AND "fidVoucherStatus" = 4
AND  "fidVoucherType" <> 8
AND  "ExpiryDate" < '1586365200' 
ERROR - 2020-04-09 12:06:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 12:07:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1586365200&quot;
LINE 8: AND  &quot;ExpiryDate&quot; &lt; '1586365200' 
                            ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 12:07:01 --> Query error: ERROR:  date/time field value out of range: "1586365200"
LINE 8: AND  "ExpiryDate" < '1586365200' 
                            ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = '516101697'
AND "fidVoucherStatus" = 4
AND  "fidVoucherType" <> 8
AND  "ExpiryDate" < '1586365200' 
ERROR - 2020-04-09 12:07:01 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 12:07:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  date/time field value out of range: &quot;1586365200&quot;
LINE 8: AND  &quot;ExpiryDate&quot; &lt; '1586365200' 
                            ^
HINT:  Perhaps you need a different &quot;datestyle&quot; setting. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 12:07:03 --> Query error: ERROR:  date/time field value out of range: "1586365200"
LINE 8: AND  "ExpiryDate" < '1586365200' 
                            ^
HINT:  Perhaps you need a different "datestyle" setting. - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = '516101697'
AND "fidVoucherStatus" = 4
AND  "fidVoucherType" <> 8
AND  "ExpiryDate" < '1586365200' 
ERROR - 2020-04-09 12:07:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 12:11:14 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-09 12:13:03 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-09 12:20:32 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-09 12:20:35 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-09 12:21:09 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-09 14:03:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:04 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:08 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:08 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type=10&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type=10'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:16 --> Query error: ERROR:  invalid input syntax for integer: "type=10"
LINE 7: AND "fidVoucherType" = 'type=10'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type=10'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:25 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:32 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:32 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:03:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:03:54 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:03:54 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 14:11:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;type&quot;
LINE 7: AND &quot;fidVoucherType&quot; = 'type'
                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-09 14:11:10 --> Query error: ERROR:  invalid input syntax for integer: "type"
LINE 7: AND "fidVoucherType" = 'type'
                               ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "MemberCode" = 'membercode'
AND "fidVoucherStatus" = 4
AND "fidVoucherType" = 'type'
AND  "ExpiryDate" >= '20200409' 
ERROR - 2020-04-09 14:11:10 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-09 15:00:12 --> Severity: Warning --> Missing argument 1 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
