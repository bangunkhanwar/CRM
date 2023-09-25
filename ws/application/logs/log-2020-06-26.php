<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-26 03:07:45 --> 404 Page Not Found: /index
ERROR - 2020-06-26 09:36:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-06-26 09:36:49, 08115221964) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-26 09:36:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-06-26 09:36:49, 08115221964) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20200626 09:36:49', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '08115221964', 'Your Verification ID: 766822', '766822', '20020295244', '1', '28')
