<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-27 03:04:52 --> 404 Page Not Found: /index
ERROR - 2020-10-27 08:02:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020333329) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-27 08:02:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020333329) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-27 08:02:48 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020333329) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020333329', 'Dhiva', '', '083195928966', '06c820cd94c1efcd3ad603de7a8edc45', '2020-10-27', 'Elshop_Elzatta', '', '602574', '02', 'ZHO')
ERROR - 2020-10-27 08:02:48 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020333329) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020333329', 'Dhiva', '', '083195928966', '06c820cd94c1efcd3ad603de7a8edc45', '2020-10-27', 'Elshop_Elzatta', '', '837347', '02', 'ZHO')
