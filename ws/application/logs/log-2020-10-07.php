<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-07 03:04:02 --> 404 Page Not Found: /index
ERROR - 2020-10-07 08:13:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020329519) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-07 08:13:19 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020329519) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020329519', 'dede rahayu', '', '082210209053', '990bf1e23cbe24ec2870c3060a5758bb', '2020-10-07', 'Elshop_Elzatta', '', '975389', '02', 'ZHO')
ERROR - 2020-10-07 19:10:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020329654) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-07 19:10:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020329654) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020329654', 'indah', 'indhjynt@gmail.com', '', 'e927045605b8a59bab43a2640eec7014', '2020-10-07', 'Elshop_Elzatta', '', '02', 'ZHO')
