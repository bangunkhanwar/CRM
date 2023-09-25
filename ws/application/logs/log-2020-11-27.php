<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-27 03:03:52 --> 404 Page Not Found: /index
ERROR - 2020-11-27 09:21:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340221) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-27 09:21:53 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340221) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340221', 'nadine', '', '081246476744', '34030b242cf45466549e5d22aa5d0403', '2020-11-27', 'Elshop_Elzatta', '', '549126', '02', 'ZHO')
ERROR - 2020-11-27 10:34:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-27 10:34:19 --> Unable to connect to the database
ERROR - 2020-11-27 10:34:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-27 10:34:19 --> Unable to connect to the database
ERROR - 2020-11-27 20:35:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340428) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-27 20:35:14 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340428) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340428', 'ria agustin sukowati', '', '085732309844', '2a44085d09c8f88336cf018515bc88ac', '2020-11-27', 'Elshop_Elzatta', '', '607360', '02', 'ZHO')
