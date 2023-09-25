<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-03 03:05:05 --> 404 Page Not Found: /index
ERROR - 2021-01-03 08:37:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023190277) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-03 08:37:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023190277) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023190277', 'nanda kusuma wati', 'kusumawatinanda@gmail.com', '', '2461eff1c23fbe2c5bc7966db5e97d06', '2021-01-03', 'Elshop_Elzatta', '', '02', 'ZHO')
