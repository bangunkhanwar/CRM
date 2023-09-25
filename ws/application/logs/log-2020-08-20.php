<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-20 03:04:06 --> 404 Page Not Found: /index
ERROR - 2020-08-20 04:30:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020309080) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-20 04:30:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020309080) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-20 04:30:39 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020309080) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020309080', 'meysin', 'meysinkartika3@gmail.com', '', '4269cf175c0963ba34c3a90ce1cf41df', '2020-08-20', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-08-20 04:30:39 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020309080) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020309080', 'meysin', 'meysinkartika3@gmail.com', '', '4269cf175c0963ba34c3a90ce1cf41df', '2020-08-20', 'Elshop_Elzatta', '', '02', 'ZHO')
