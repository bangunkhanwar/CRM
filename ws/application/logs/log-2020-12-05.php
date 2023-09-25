<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-05 03:06:02 --> 404 Page Not Found: /index
ERROR - 2020-12-05 13:36:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020341873) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-05 13:36:16 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020341873) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020341873', 'afidhotul khasanah', 'afidhotul26@gmail.com', '', 'a9f5ea11689905109d7a98475c74be1b', '2020-12-05', 'Elshop_Elzatta', '', '02', 'ZHO')
