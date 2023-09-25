<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-26 03:04:23 --> 404 Page Not Found: /index
ERROR - 2021-01-26 08:34:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023193200) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-26 08:34:19 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023193200) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023193200', 'Anis Sumrotul Faadah', 'miaawaliyah02@gmail.com', '', 'ecc99e6d9044b7cdb00af31f458870bd', '2021-01-26', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-01-26 16:41:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Voucher_pkey&quot;
DETAIL:  Key (&quot;VoucherId&quot;)=(4214407121) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-26 16:41:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Voucher_pkey"
DETAIL:  Key ("VoucherId")=(4214407121) already exists. - Invalid query: INSERT INTO "voucher"."Voucher" ("StoreCode", "StoreCodeRedeem", "SKU", "Description", "VoucherId", "fidVoucherType", "fidAmount", "fidMotherBrand", "VoucherAmount", "Year", "Note", "Remark", "ExpiryDate", "UniqueCode", "PromoCode", "fidVoucherStatus", "CreatedBy", "MemberCode", "fidFileUpload", "fidVoucherCategory", "fidVoucherSubCategory") VALUES ('ZHO', '', '', 'E-VOUCHER BELANJA RP 50.000', '4214407121', '4', '4', '4', '50000', '2021', '', '', '2021-02-05', '9KSEFN', '1922001', '4', 'CRM Webservice', '10033160268', '820', '0', '0')
ERROR - 2021-01-26 16:41:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;trVoucher_pkey&quot;
DETAIL:  Key (&quot;VoucherID&quot;)=(4214407121) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-26 16:41:13 --> Query error: ERROR:  duplicate key value violates unique constraint "trVoucher_pkey"
DETAIL:  Key ("VoucherID")=(4214407121) already exists. - Invalid query: INSERT INTO "public"."msVoucher" ("StoreCode", "StoreCodeRedeem", "SKU", "VoucherID", "fidVoucherType", "fidMotherBrand", "fidVoucherStatus", "fidAmount", "VoucherAmount", "Tahun", "CreateBy", "Note", "Remark", "Description", "ExpiryDate", "UniqueCode", "PromoCode") VALUES ('ZHO', '', '', '4214407121', '4', '4', '4', '4', '50000', '2021', 'CRM Webservice', '', '', 'E-VOUCHER BELANJA RP 50.000', '2021-02-05', '9KSEFN', '')
