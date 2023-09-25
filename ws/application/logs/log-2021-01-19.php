<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-19 03:04:25 --> 404 Page Not Found: /index
ERROR - 2021-01-19 06:00:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023192343) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-19 06:00:51 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023192343) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023192343', 'riris', '', '085797320856', '04c80b76bb0ad1f54e85d6b371d47dfd', '2021-01-19', 'Elshop_Elzatta', '', '452926', '02', 'ZHO')
ERROR - 2021-01-19 13:35:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-19 13:35:21 --> Unable to connect to the database
ERROR - 2021-01-19 15:35:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023192407) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-19 15:35:40 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023192407) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023192407', 'Desy Nurhayati', 'desynurhayati2010@gmail.com', '', 'e9d3c81fe91211b00118f12bb26c7174', '2021-01-19', 'Elshop_Elzatta', '', '02', 'ZHO')
