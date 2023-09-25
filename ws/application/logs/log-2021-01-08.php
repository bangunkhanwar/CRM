<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-08 03:05:12 --> 404 Page Not Found: /index
ERROR - 2021-01-08 04:10:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023190945) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-08 04:10:10 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023190945) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023190945', 'Nur Qonita Islamiyah', 'nurqonita883@gmail.com', '', '1582b906ea3328becc0168b3d0b63d37', '2021-01-08', 'Elshop_Elzatta', '', '02', 'ZHO')
