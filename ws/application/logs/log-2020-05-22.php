<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-22 05:01:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020285939) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-22 05:01:44 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020285939) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020285939', 'Sri Partuti Rahmayanti', 'sripartutirahmayanti14@gmail.com', '', '0c2abe2954579f15e6f7993843b50b3f', '2020-05-22', 'Elshop_Elzatta_Dauky', '', '02', 'ZHO')
