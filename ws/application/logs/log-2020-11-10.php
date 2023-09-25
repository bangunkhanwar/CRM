<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-10 03:05:12 --> 404 Page Not Found: /index
ERROR - 2020-11-10 07:52:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020335909) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-10 07:52:36 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020335909) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020335909', 'Muna mushoffa', '', '089667623094', '4e78129b3fa1563e04c9757c6adc565e', '2020-11-10', 'Elshop_Elzatta', '', '834821', '02', 'ZHO')
