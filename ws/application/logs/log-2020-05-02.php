<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-02 23:00:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020253999) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 23:00:48 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020253999) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020253999', 'kanza nabilla', 'kanzanabilla1@gmail.com', '', '58642e32dc88c4c7940310a7e2886462', '2020-05-02', 'Elshop_Elzatta_Dauky', '', '02', 'ZHO')
ERROR - 2020-05-02 23:51:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020254007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-02 23:51:49 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020254007) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020254007', 'Roikhatun Aflaha', 'aflahapple30@gmail.com', '', '4795bab8776f890b6ea3d52e8709ff1a', '2020-05-02', 'Elshop_Elzatta_Dauky', '', '02', 'ZHO')
