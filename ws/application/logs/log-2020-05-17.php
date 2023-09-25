<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-17 23:54:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020281805) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-17 23:54:45 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020281805) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020281805', 'ayu kurnia putri', 'ayukurniaputri_95@gmail.com', '', '14d9ea89bf7c4fa74e9d2b71f4732d83', '2020-05-17', 'Elshop_Elzatta', '', '02', 'ZHO')
