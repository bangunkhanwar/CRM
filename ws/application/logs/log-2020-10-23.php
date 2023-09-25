<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-23 03:03:37 --> 404 Page Not Found: /index
ERROR - 2020-10-23 09:16:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020332604) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-23 09:16:01 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020332604) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020332604', 'susi', 'susikusuma23520@gmail.com', '', '5a1ecf437e6776965f374efbbe332d0c', '2020-10-23', 'Elshop_Elzatta', '', '02', 'ZHO')
