<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-02 03:04:34 --> 404 Page Not Found: /index
ERROR - 2020-11-02 08:54:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020334329) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-02 08:54:14 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020334329) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020334329', 'Nana', 'kiranabernadine09@gmail.com', '', '6646bc30da3cdd381cb0b952d7f8f5e1', '2020-11-02', 'Elshop_Elzatta', '', '02', 'ZHO')
