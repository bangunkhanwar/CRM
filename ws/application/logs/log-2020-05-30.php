<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-30 06:18:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020288163) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-30 06:18:05 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020288163) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020288163', 'titrinindrianti', '', '085648080070', '845786f5705a1fbacb0a00a01a4dec3e', '2020-05-30', 'Elshop_Elzatta', '', '101192', '02', 'ZHO')
ERROR - 2020-05-30 06:27:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020288165) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-30 06:27:48 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020288165) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020288165', 'andri', 'punyaemailnya@gmail.com', '', 'aac7de74b943d5a3fbfd433ed61bccdd', '2020-05-30', 'Elshop_Elzatta', '', '02', 'ZHO')
