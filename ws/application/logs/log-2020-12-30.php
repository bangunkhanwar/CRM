<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-30 03:06:11 --> 404 Page Not Found: /index
ERROR - 2020-12-30 07:15:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020348131) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-30 07:15:08 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020348131) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020348131', 'humairoh', '', '081806566128', '9761ea1a402274e23e5a2c500478efa1', '2020-12-30', 'Elshop_Elzatta', '', '913669', '02', 'ZHO')
ERROR - 2020-12-30 11:56:28 --> 404 Page Not Found: /index
