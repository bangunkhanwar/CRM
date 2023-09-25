<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-08 03:05:21 --> 404 Page Not Found: /index
ERROR - 2020-11-08 08:14:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020335527) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-08 08:14:57 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020335527) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020335527', 'Yeyen Safitri', 'yeyensafitri227@gmail.com', '', '16d65c3a135e12bd2c133b9ebd59c2a8', '2020-11-08', 'Elshop_Elzatta', '', '02', 'ZHO')
