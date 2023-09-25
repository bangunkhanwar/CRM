<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-29 03:05:22 --> 404 Page Not Found: /index
ERROR - 2020-10-29 14:44:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:06 --> Unable to connect to the database
ERROR - 2020-10-29 14:44:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:11 --> Unable to connect to the database
ERROR - 2020-10-29 14:44:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:16 --> Unable to connect to the database
ERROR - 2020-10-29 14:44:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:21 --> Unable to connect to the database
ERROR - 2020-10-29 14:44:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:26 --> Unable to connect to the database
ERROR - 2020-10-29 14:44:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-29 14:44:31 --> Unable to connect to the database
ERROR - 2020-10-29 16:23:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-10-29 16:23:47, 082242777735) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-29 16:23:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-10-29 16:23:47, 082242777735) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-29 16:23:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-10-29 16:23:47, 082242777735) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-29 16:23:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-10-29 16:23:47, 082242777735) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201029 16:23:47', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '082242777735', 'Your Verification ID: 573145', '573145', '20020333779', '1', '28')
ERROR - 2020-10-29 16:23:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-10-29 16:23:47, 082242777735) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201029 16:23:47', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '082242777735', 'Your Verification ID: 146050', '146050', '20020333779', '1', '28')
ERROR - 2020-10-29 16:23:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-10-29 16:23:47, 082242777735) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201029 16:23:47', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '082242777735', 'Your Verification ID: 640556', '640556', '20020333779', '1', '28')
