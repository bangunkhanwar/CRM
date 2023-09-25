<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-19 03:05:58 --> 404 Page Not Found: /index
ERROR - 2020-12-19 10:50:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020346257) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-19 10:50:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020346257) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-19 10:50:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020346257) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020346257', 'Suci Alviana', 'alvianasuci14@gmail.com', '', '5342792090485c8e5b7d6ee4141e0f67', '2020-12-19', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-12-19 10:50:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020346257) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020346257', 'Suci Alviana', 'alvianasuci14@gmail.com', '', '5342792090485c8e5b7d6ee4141e0f67', '2020-12-19', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-12-19 12:00:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020346269) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-19 12:00:08 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020346269) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020346269', 'indah gosal', 'indahgosal@gmail.com', '', '22bbc7927da73ec64541fba034a86f12', '2020-12-19', 'Elshop_Elzatta', '', '02', 'ZHO')
