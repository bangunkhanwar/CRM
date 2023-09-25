<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-19 08:47:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020283079) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-19 08:47:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020283079) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-19 08:47:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020283079) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020283079', 'Rr Cicilia Dewayani', '', '082287832323', 'ccaeac8e5ac77114c81c5a889c8d141a', '2020-05-19', 'Elshop_Elzatta', '', '179289', '02', 'ZHO')
ERROR - 2020-05-19 08:47:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020283079) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020283079', 'Rr Cicilia Dewayani', '', '082287832323', 'ccaeac8e5ac77114c81c5a889c8d141a', '2020-05-19', 'Elshop_Elzatta', '', '931157', '02', 'ZHO')
ERROR - 2020-05-19 10:14:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020283106) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-19 10:14:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020283106) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020283106', 'nita nopiarni', 'nopiarnita@gmail.com', '', '0fb872f259819df7d88d2b414ae702e3', '2020-05-19', 'Elshop_Elzatta', '', '02', 'ZHO')
