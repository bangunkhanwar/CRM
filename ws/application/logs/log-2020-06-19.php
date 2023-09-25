<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-19 03:08:49 --> 404 Page Not Found: /index
ERROR - 2020-06-19 14:10:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020293642) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-19 14:10:37 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020293642) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('082324478779', 'KAB. KUDUS', 'Falichatul Ibriza', 'KALIWUNGU', '59361', 'Sidorekso rt 02 rw 03 kaliwungu kudus (rumah bapak sunarin bengkel), KAB. KUDUS, KALIWUNGU, JAWA TENGAH, ID, 59361', 'Z301', 'SHOPEE', '20020293642', 'Falichatul Ibriza', '', '4deba64dfb135872dc60bc9fcc63ca21', '2020-06-19', 'bePOS', '2020-06-19 14:10:37', '2020-06-19 14:10:37', '2021-06-19', '641415', '02')
