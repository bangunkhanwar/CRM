<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-29 03:03:45 --> 404 Page Not Found: /index
ERROR - 2020-09-29 14:39:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:39:41 --> Unable to connect to the database
ERROR - 2020-09-29 14:39:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:39:46 --> Unable to connect to the database
ERROR - 2020-09-29 14:39:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:39:51 --> Unable to connect to the database
ERROR - 2020-09-29 14:39:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:39:56 --> Unable to connect to the database
ERROR - 2020-09-29 14:40:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:40:01 --> Unable to connect to the database
ERROR - 2020-09-29 14:40:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-29 14:40:06 --> Unable to connect to the database
ERROR - 2020-09-29 23:01:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020328369) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-29 23:01:44 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020328369) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020328369', 'Yayang', '', '08984955764', 'a76aac1d9385db2784ad2587879e6d89', '2020-09-29', 'Elshop_Elzatta', '', '245119', '02', 'ZHO')
