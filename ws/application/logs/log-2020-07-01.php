<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-01 03:08:09 --> 404 Page Not Found: /index
ERROR - 2020-07-01 07:58:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020296770) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-01 07:58:18 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020296770) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020296770', 'Tessa', '', '081310986449', '178d6d09e15751b6ad72905633219fb2', '2020-07-01', 'Elshop_Elzatta_Noore', '', '491204', '02', 'ZHO')
