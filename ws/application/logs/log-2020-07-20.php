<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-20 03:04:36 --> 404 Page Not Found: /index
ERROR - 2020-07-20 11:52:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020301845) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-20 11:52:56 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020301845) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085860933329', 'KAB. CIANJUR', 'HOUQIKA', 'KARANGTENGAH', '43281', 'Gunteng Regency Blok J No II Ds Bojong Kec. Karangtengah, KAB. CIANJUR, KARANGTENGAH, JAWA BARAT, ID, 43281', 'Z301', 'SHOPEE', '20020301845', 'HOUQIKA', '', '837feb63e0e98c5bbb1ced089fb4a591', '2020-07-20', 'bePOS', '2020-07-20 11:52:56', '2020-07-20 11:52:56', '2021-07-20', '872767', '02')
