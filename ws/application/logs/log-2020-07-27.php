<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-27 03:04:38 --> 404 Page Not Found: /index
ERROR - 2020-07-27 14:26:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020303512) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-27 14:26:52 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020303512) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('082384873332', 'KOTA PADANG', 'Rida arasy', 'LUBUK KILANGAN', '25232', 'Jl.komplek pondok ranah minang blok DD 03. RT 03 RW 06., KOTA PADANG, LUBUK KILANGAN, SUMATERA BARAT, ID, 25232', 'Z301', 'SHOPEE', '20020303512', 'Rida arasy', '', 'f546d0b9c7295aba0b07bd1329d5da30', '2020-07-27', 'bePOS', '2020-07-27 14:26:52', '2020-07-27 14:26:52', '2021-07-27', '819359', '02')
