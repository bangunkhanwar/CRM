<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-21 03:05:29 --> 404 Page Not Found: /index
ERROR - 2020-11-21 07:08:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020339181) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-21 07:08:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020339181) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020339181', 'Fransiska mahulae', 'fransiskamahulae830@gmail.com', '', '5e1f3380ab39132cf27fc631b3df0625', '2020-11-21', 'Elshop_Elzatta', '', '02', 'ZHO')
