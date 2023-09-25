<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-22 03:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2065288) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 03:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2065288) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z003.AKEL.0004', 'Z003', '2021-05-21', 'WS', '20210522 03:01:16', '10153180016', '03', '1', 'Transaksi Sales', '17', '0', '20210522 03:01:16', '1921011')
ERROR - 2021-05-22 03:07:38 --> 404 Page Not Found: /index
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:13 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:14 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:14 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:14 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-05-22 11:37:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-05-22 11:37:14 --> Unable to connect to the database
ERROR - 2021-05-22 11:37:14 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-05-22 11:37:14 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-05-22 11:37:14 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-05-22 12:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2021-05-22 12:50:24, 0895709870000) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 12:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2021-05-22 12:50:24, 0895709870000) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 12:50:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2021-05-22 12:50:24, 0895709870000) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20210522 12:50:24', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '0895709870000', 'Your Verification ID: 612692', '612692', '21023237025', '1', '28')
ERROR - 2021-05-22 12:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2021-05-22 12:50:24, 0895709870000) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 12:50:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2021-05-22 12:50:24, 0895709870000) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20210522 12:50:24', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '0895709870000', 'Your Verification ID: 925291', '925291', '21023237025', '1', '28')
ERROR - 2021-05-22 12:50:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2021-05-22 12:50:24, 0895709870000) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20210522 12:50:24', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '0895709870000', 'Your Verification ID: 964691', '964691', '21023237025', '1', '28')
ERROR - 2021-05-22 12:50:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2021-05-22 12:50:24, 0895709870000) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 12:50:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2021-05-22 12:50:24, 0895709870000) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20210522 12:50:24', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '0895709870000', 'Your Verification ID: 950047', '950047', '21023237025', '1', '28')
ERROR - 2021-05-22 12:51:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2066210) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 12:51:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2066210) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z048.AKEM.0004', 'Z048', '2021-05-22', 'WS', '20210522 12:51:27', '10482160992', '02', '1', 'Transaksi Sales', '42', '0', '20210522 12:51:27', '1821001')
ERROR - 2021-05-22 16:14:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2066320) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 16:14:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2066320) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.AKEM.0004', 'Z075', '2021-05-22', 'WS', '20210522 16:14:56', '21033180044', '03', '1', 'Transaksi Sales', '10', '0', '20210522 16:14:56', '1921011')
ERROR - 2021-05-22 16:14:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2066321) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-22 16:14:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2066321) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.AKEM.0004', 'Z075', '2021-05-22', 'WS', '20210522 16:14:58', '21033180044', '03', '1', 'Transaksi Sales', '10', '0', '20210522 16:14:58', '1921011')
ERROR - 2021-05-22 18:47:39 --> 404 Page Not Found: /index
