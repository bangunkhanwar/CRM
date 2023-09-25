<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-20 03:06:37 --> 404 Page Not Found: /index
ERROR - 2020-12-20 07:10:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020346377) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-20 07:10:02 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020346377) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020346377', 'Dearahayu', '', '6281283635134', 'd6964da48dd8952648ebe07061c1a156', '2020-12-20', 'Elshop_Elzatta', '', '736022', '02', 'ZHO')
ERROR - 2020-12-20 20:18:15 --> 404 Page Not Found: /index
