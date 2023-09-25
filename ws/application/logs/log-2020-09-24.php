<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-24 00:07:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020327257) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-24 00:07:53 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020327257) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020327257', 'Poppy', 'poppyratnasari.prs@gmail.com', '', '46040fa4126ead9637cbc86682865007', '2020-09-24', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-09-24 03:04:05 --> 404 Page Not Found: /index
ERROR - 2020-09-24 12:32:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020327294) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-24 12:32:58 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020327294) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020327294', 'fia', '', '081901686769', 'd945b7f2e0399aeeb46c5822f78684f8', '2020-09-24', 'Elshop_Elzatta', '', '769695', '02', 'ZHO')
