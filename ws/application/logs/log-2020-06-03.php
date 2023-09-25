<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-03 11:35:38 --> Severity: Warning --> Missing argument 1 for Profile::upload_photo_profile(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/profile/controllers/Profile.php 560
ERROR - 2020-06-03 11:42:47 --> Severity: Warning --> Missing argument 1 for Profile::upload_photo_profile(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/profile/controllers/Profile.php 560
ERROR - 2020-06-03 12:02:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020288950) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-03 12:02:17 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020288950) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020288950', 'dintania meydianda', 'dintaniarga@gmail.com', '', '836d01cb057c0e0a9f8d19111f22c632', '2020-06-03', 'Elshop_Elzatta', '', '02', 'ZHO')
