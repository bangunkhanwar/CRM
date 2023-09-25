<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-02 03:04:04 --> 404 Page Not Found: /index
ERROR - 2021-01-02 18:03:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023190253) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-02 18:03:03 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023190253) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023190253', 'Imas mastufah', 'masfufah82@gmail.com', '', '07afb7d5d82abddba332e2b4123fbaa8', '2021-01-02', 'Elshop_Elzatta', '', '02', 'ZHO')
