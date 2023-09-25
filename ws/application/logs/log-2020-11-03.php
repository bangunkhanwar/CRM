<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-03 03:05:05 --> 404 Page Not Found: /index
ERROR - 2020-11-03 08:07:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020334628) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-03 08:07:57 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020334628) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020334628', 'Esther', 'elukyanthi@gmail.com', '', 'ab93e405fadae16df3ea75b6c791de9b', '2020-11-03', 'Elshop_Elzatta', '', '02', 'ZHO')
