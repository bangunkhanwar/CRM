<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-10 06:35:54 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 06:35:54 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 13:30:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Prevent_duplicate_same_time_create&quot;
DETAIL:  Key (&quot;DateCreate&quot;, &quot;Msisdn&quot;)=(2020-03-10 13:30:28, 087724797427) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-10 13:30:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Prevent_duplicate_same_time_create"
DETAIL:  Key ("DateCreate", "Msisdn")=(2020-03-10 13:30:28, 087724797427) already exists. - Invalid query: INSERT INTO "ws"."Messages" ("DateCreate", "MessageType", "SenderID", "RequestBy", "Campaign", "Noaccent", "SMSType", "Msisdn", "Message", "OTP", "MemberCode", "SmsCount", "SmsCharCount") VALUES ('20200310 13:30:28', 'SMS', 'elcorps', 'App CRM', 'Aktivasi Handphone', 'False', '2', '087724797427', 'Your Verification ID: 335665', '335665', '17022190664', '1', '28')
ERROR - 2020-03-10 13:37:42 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 13:37:42 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 16:55:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;200711335&quot;
LINE 5:     OR &quot;tbl&quot;.&quot;Handpone&quot; = '200711335'' 
                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-10 16:55:08 --> Query error: ERROR:  syntax error at or near "200711335"
LINE 5:     OR "tbl"."Handpone" = '200711335'' 
                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = '200711335''
				OR "tbl"."Handpone" = '200711335'' 
				OR tbl."Barcode" = '200711335''
			)
 LIMIT 1
ERROR - 2020-03-10 17:40:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;10062170529&quot;
LINE 4:     tbl.&quot;MemberCode&quot; = ''10062170529'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-10 17:40:10 --> Query error: ERROR:  syntax error at or near "10062170529"
LINE 4:     tbl."MemberCode" = ''10062170529'
                                 ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = ''10062170529'
				OR "tbl"."Handpone" = ''10062170529' 
				OR tbl."Barcode" = ''10062170529'
			)
 LIMIT 1
ERROR - 2020-03-10 19:34:42 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 19:34:42 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 19:35:25 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-10 19:35:25 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
