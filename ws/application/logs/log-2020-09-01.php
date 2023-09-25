<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-01 03:04:18 --> 404 Page Not Found: /index
ERROR - 2020-09-01 22:01:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020311910) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-01 22:01:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020311910) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020311910', 'Ajipamungkas', 'bellabalqis634@gmail.com', '', '16fa12d3afe6666812420b7f2e3aa6b5', '2020-09-01', 'Elshop_Elzatta', '', '02', 'ZHO')
