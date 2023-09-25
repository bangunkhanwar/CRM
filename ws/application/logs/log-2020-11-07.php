<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-07 03:05:12 --> 404 Page Not Found: /index
ERROR - 2020-11-07 05:03:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020335383) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-07 05:03:04 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020335383) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020335383', 'dika reska', '', '081248643225', 'd3a7fdca688381aad3b7f167db440ff0', '2020-11-07', 'Elshop_Elzatta', '', '329695', '02', 'ZHO')
