<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-11 03:04:40 --> 404 Page Not Found: /index
ERROR - 2020-10-11 08:05:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020330216) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-11 08:05:40 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020330216) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020330216', 'anis lusiani', 'allusiani@gmail.com', '', 'ad612e942ad6d1a1148244fff5ef04a0', '2020-10-11', 'Elshop_Elzatta', '', '02', 'ZHO')
