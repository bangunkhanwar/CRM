<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-24 03:04:51 --> 404 Page Not Found: /index
ERROR - 2021-01-24 03:59:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2021-01-24 03:59:57, 081233180554) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-24 03:59:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2021-01-24 03:59:57, 081233180554) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20210124 03:59:57', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '081233180554', 'Your Verification ID: 886028', '886028', '10033170005', '1', '28')
