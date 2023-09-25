<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-21 03:04:06 --> 404 Page Not Found: /index
ERROR - 2020-09-21 13:02:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020325768) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 13:02:26 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020325768) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020325768', 'Helmi Isnaini', 'helmi.isnaini.hi@gmail.com', '', 'b3456837c41680a6d6becbf821aa4800', '2020-09-21', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-09-21 14:03:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;PromoCode&quot; = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:03:02 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "PromoCode" = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*
FROM "promo"."msPromoDetail20" "tbl"
WHERE "PromoCode" = TRUE
 LIMIT 1
ERROR - 2020-09-21 14:03:02 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-09-21 14:04:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;PromoCode&quot; = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:04:31 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "PromoCode" = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*
FROM "promo"."msPromoDetail20" "tbl"
WHERE "PromoCode" = TRUE
 LIMIT 1
ERROR - 2020-09-21 14:04:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-09-21 14:05:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE &quot;PromoCode&quot; = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:05:10 --> Query error: ERROR:  operator does not exist: character varying = boolean
LINE 3: WHERE "PromoCode" = TRUE
                          ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*
FROM "promo"."msPromoDetail20" "tbl"
WHERE "PromoCode" = TRUE
 LIMIT 1
ERROR - 2020-09-21 14:05:10 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-09-21 14:05:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:05:47 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:05:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:05:50 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:06:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:06:37 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:06:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:06:40 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:07:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:07:57 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:07:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:07:58 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:07:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:07:59 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-09-24', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:23 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:25 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:25 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:26 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:27 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:28 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:29 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:29 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:30 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', '', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 14:08:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;UniqueCode&quot;
DETAIL:  Key (&quot;UniqueCode&quot;)=(123X) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:08:52 --> Query error: ERROR:  duplicate key value violates unique constraint "UniqueCode"
DETAIL:  Key ("UniqueCode")=(123X) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'VOUCHER SHOPEE SUPER BRAND DAY', '42011800069', '1', '18', '4', '75000', '2020', '123X', 'casc', '2020-12-30', '123X', '2020001', '4', 'CRM Webservice', '516101697', '0', '6', '1')
ERROR - 2020-09-21 15:07:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020326040) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 15:07:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020326040) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 15:07:30 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020326040) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('082213643208', 'KAB. BOGOR', 'Fario Beauty care', 'CITEUREUP', '16750', 'Jl Raya Mayor oking jayaatmaja no 7-9 puspanegara Citeureup samping Ramayana Citeureup, KAB. BOGOR, CITEUREUP, JAWA BARAT, ID, 16750', 'N301', 'SHOPEE', '20020326040', 'Fario Beauty care', '', 'a92bbbdac94642af611991d039482721', '2020-09-21', 'bePOS', '2020-09-21 15:07:30', '2020-09-21 15:07:30', '2021-09-21', '626466', '02')
ERROR - 2020-09-21 15:07:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020326040) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 15:07:30 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020326040) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020326040', 'fujirisaa', '', '085220574823', '74337f026be548208f2b0ee15e1cb238', '2020-09-21', 'Elshop_Elzatta_Dauky', '', '596145', '02', 'ZHO')
ERROR - 2020-09-21 15:07:30 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020326040) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020326040', 'fujirisaa', '', '085220574823', '74337f026be548208f2b0ee15e1cb238', '2020-09-21', 'Elshop_Elzatta_Dauky', '', '505741', '02', 'ZHO')
