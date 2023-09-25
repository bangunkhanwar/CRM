<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-07 03:04:03 --> 404 Page Not Found: /index
ERROR - 2020-09-07 11:00:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020313019) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-07 11:00:13 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020313019) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('08122682642', 'KAB. KEBUMEN', 'Husna Ainun Fauziah', 'GOMBONG', '54416', 'Duku Krajan RT 001/ RW 002 (PONPES DARUSSALAM), KAB. KEBUMEN, GOMBONG, JAWA TENGAH, ID, 54416', 'Z301', 'SHOPEE', '20020313019', 'Husna Ainun Fauziah', '', '51d45d9141a89f61cda75d891b70c765', '2020-09-07', 'bePOS', '2020-09-07 11:00:13', '2020-09-07 11:00:13', '2021-09-07', '455639', '02')
