<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-13 03:04:08 --> 404 Page Not Found: /index
ERROR - 2020-10-13 13:04:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-10-13 13:04:07, 089620749229) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-13 13:04:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-10-13 13:04:07, 089620749229) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201013 13:04:07', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '089620749229', 'Your Verification ID: 859658', '859658', '20020244225', '1', '28')
