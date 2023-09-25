<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-28 03:08:18 --> 404 Page Not Found: /index
ERROR - 2020-06-28 20:58:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020296148) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-28 20:58:27 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020296148) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020296148', 'mitaratna', '', '082139659340', '17e648dc1f1ff4c25d4682cd38fa978c', '2020-06-28', 'Elshop_Elzatta', '', '550089', '02', 'ZHO')
