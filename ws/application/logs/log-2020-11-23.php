<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-23 03:04:51 --> 404 Page Not Found: /index
ERROR - 2020-11-23 14:26:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020339606) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-23 14:26:14 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020339606) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085776558862', 'KOTA JAKARTA BARAT', 'Salsabila Nazmie', 'KALIDERES', '11840', 'Kp. Bulak teko rt 004/011 no.86, KOTA JAKARTA BARAT, KALIDERES, DKI JAKARTA, ID, 11840', 'N301', 'SHOPEE', '20020339606', 'Salsabila Nazmie', '', 'aef02ea7c004e803d426e4e32246266d', '2020-11-23', 'bePOS', '2020-11-23 14:26:13', '2020-11-23 14:26:13', '2021-11-23', '641675', '02')
