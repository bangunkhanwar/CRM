<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-27 19:21:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020287840) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-27 19:21:48 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020287840) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020287840', 'Hani A', '', '081285506534', '40e46d17e67a8baf8d39e93f7cf9b285', '2020-05-27', 'Elshop_Elzatta', '', '152976', '02', 'ZHO')
