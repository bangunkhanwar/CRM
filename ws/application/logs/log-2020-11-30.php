<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-30 03:05:56 --> 404 Page Not Found: /index
ERROR - 2020-11-30 09:57:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-11-30 09:57:28, 085784424248) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-30 09:57:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-11-30 09:57:28, 085784424248) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-30 09:57:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-11-30 09:57:28, 085784424248) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201130 09:57:28', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '085784424248', 'Your Verification ID: 699176', '699176', '19020010432', '1', '28')
ERROR - 2020-11-30 09:57:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-11-30 09:57:28, 085784424248) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20201130 09:57:28', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '085784424248', 'Your Verification ID: 884440', '884440', '19020010432', '1', '28')
ERROR - 2020-11-30 18:22:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340993) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-30 18:22:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340993) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340993', 'yunita nur cholifah', 'yunitanurcholifah@gmail.com', '', 'f621948336bb14a692fb916fe31898db', '2020-11-30', 'Elshop_Elzatta', '', '02', 'ZHO')
