<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-14 14:12:08 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 14:12:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;x&quot;
LINE 5: WHERE &quot;fidMotherBrand&quot; = 'x'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 14:12:21 --> Query error: ERROR:  invalid input syntax for integer: "x"
LINE 5: WHERE "fidMotherBrand" = 'x'
                                 ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "fidMotherBrand" = 'x'
AND "fidVoucherStatus" = 4
AND "MemberCode" = '516101697' OR "fidVoucherType" = 10
ERROR - 2020-04-14 14:12:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-14 14:12:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;x&quot;
LINE 5: WHERE &quot;fidMotherBrand&quot; = 'x'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 14:12:27 --> Query error: ERROR:  invalid input syntax for integer: "x"
LINE 5: WHERE "fidMotherBrand" = 'x'
                                 ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "fidMotherBrand" = 'x'
AND "fidVoucherStatus" = 4
AND "MemberCode" = '516101697' OR "fidVoucherType" = 10
ERROR - 2020-04-14 14:12:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-14 14:15:31 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 14:16:18 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 14:18:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;$brand&quot; does not exist
LINE 5: WHERE &quot;fidMotherBrand&quot; = &quot;$brand&quot;
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 14:18:45 --> Query error: ERROR:  column "$brand" does not exist
LINE 5: WHERE "fidMotherBrand" = "$brand"
                                 ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "VSC"."idSubCategory", "VSC"."ProductCode", "VSC"."Description" as "DescSubCategory", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "voucher"."Voucher" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "voucher"."VoucherSubCategory" "VSC" ON "tbl"."fidVoucherSubCategory" = "VSC"."idSubCategory"
WHERE "fidMotherBrand" = "$brand"
AND "fidVoucherStatus" = 4
AND "MemberCode" = '516101697' OR "fidVoucherType" = 10
ERROR - 2020-04-14 14:18:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/voucher/models/Voucher_list_model.php 42
ERROR - 2020-04-14 14:19:01 --> Severity: error --> Exception: syntax error, unexpected '$brand' (T_VARIABLE), expecting ']' /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 32
ERROR - 2020-04-14 14:19:02 --> Severity: error --> Exception: syntax error, unexpected '$brand' (T_VARIABLE), expecting ']' /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 32
ERROR - 2020-04-14 14:19:13 --> Severity: error --> Exception: syntax error, unexpected '$brand' (T_VARIABLE), expecting ']' /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 32
ERROR - 2020-04-14 14:26:35 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 14:27:24 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 14:29:19 --> Severity: Warning --> Missing argument 2 for Voucher::myvoucherlist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/voucher/controllers/Voucher.php 19
ERROR - 2020-04-14 15:42:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE &quot;PromoTypeCode&quot; = 40
                              ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 15:42:50 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE "PromoTypeCode" = 40
                              ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "pd"."GetVoucher", "pd"."Deadlines", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "promo"."msPromo" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "promo"."msPromoDetail20" "pd" ON "tbl"."PromoCode" = "pd"."PromoCode"
WHERE "PromoTypeCode" = 40
ERROR - 2020-04-14 15:42:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/promo/models/Promo_model.php 57
ERROR - 2020-04-14 15:42:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE &quot;PromoTypeCode&quot; = 40
                              ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 15:42:52 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 5: WHERE "PromoTypeCode" = 40
                              ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "pd"."GetVoucher", "pd"."Deadlines", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "promo"."msPromo" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "promo"."msPromoDetail20" "pd" ON "tbl"."PromoCode" = "pd"."PromoCode"
WHERE "PromoTypeCode" = 40
ERROR - 2020-04-14 15:42:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/promo/models/Promo_model.php 57
ERROR - 2020-04-14 15:49:35 --> Severity: error --> Exception: syntax error, unexpected '']= '' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 364
ERROR - 2020-04-14 15:50:35 --> Severity: error --> Exception: syntax error, unexpected '']= '' (T_CONSTANT_ENCAPSED_STRING), expecting ']' /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 364
ERROR - 2020-04-14 15:52:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'40'&quot;
LINE 6: AND &quot;BrandList&quot; LIKE '%1%' '40'
                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-14 15:52:05 --> Query error: ERROR:  syntax error at or near "'40'"
LINE 6: AND "BrandList" LIKE '%1%' '40'
                                   ^ - Invalid query: SELECT "tbl".*, "fu"."idFileUpload", "pd"."GetVoucher", "pd"."Deadlines", 'http://crm.elcorps.com' || TRIM(LEADING FROM "fu"."FilePath", '.')||"fu"."FileServerName"||'.'||"fu"."FileExt" as "Image"
FROM "promo"."msPromo" "tbl"
LEFT JOIN "fileUpload" "fu" ON "tbl"."fidFileUpload" = "fu"."idFileUpload"
LEFT JOIN "promo"."msPromoDetail20" "pd" ON "tbl"."PromoCode" = "pd"."PromoCode"
WHERE "PromoTypeCode" = '40'
AND "BrandList" LIKE '%1%' '40'
ERROR - 2020-04-14 15:52:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/modules/promo/models/Promo_model.php 57
ERROR - 2020-04-14 15:54:24 --> Severity: error --> Exception: Call to undefined function int() /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 385
ERROR - 2020-04-14 16:59:53 --> 404 Page Not Found: ../modules/profile/controllers/Profile/get_user'
