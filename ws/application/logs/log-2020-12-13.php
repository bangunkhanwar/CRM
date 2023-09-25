<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-13 03:05:47 --> 404 Page Not Found: /index
ERROR - 2020-12-13 07:10:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020344427) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-13 07:10:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020344427) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-13 07:10:04 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020344427) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020344427', 'kokom komariah', '', '08985637904', '25ba1d31a141ca9dc29e525764d5bbda', '2020-12-13', 'Elshop_Elzatta', '', '675462', '02', 'ZHO')
ERROR - 2020-12-13 07:10:04 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020344427) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020344427', 'kokom komariah', '', '08985637904', '25ba1d31a141ca9dc29e525764d5bbda', '2020-12-13', 'Elshop_Elzatta', '', '778677', '02', 'ZHO')
ERROR - 2020-12-13 13:59:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020344942) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-13 13:59:38 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020344942) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081335123595', 'KOTA SURABAYA', 'Azuansyah', 'SAMBIKEREP', '60216', 'Ruko Sentra Taman Gapura Blok G No.20 G-Walk Citraland Surabaya, KOTA SURABAYA, SAMBIKEREP, JAWA TIMUR, ID, 60216', 'Z301', 'SHOPEE', '20020344942', 'Azuansyah', '', 'e741c87685eb11c398fa67c28aeadbe3', '2020-12-13', 'bePOS', '2020-12-13 13:59:38', '2020-12-13 13:59:38', '2021-12-13', '722520', '02')
