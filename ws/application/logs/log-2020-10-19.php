<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-19 01:31:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020331869) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-19 01:31:19 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020331869) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020331869', 'NASIRUN NAJIB HARAHAO', '', '082243571201', 'f36b30744d957620c701bcb952c0ba37', '2020-10-19', 'Elshop_Elzatta', '', '704475', '02', 'ZHO')
ERROR - 2020-10-19 03:04:56 --> 404 Page Not Found: /index
ERROR - 2020-10-19 06:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020331870) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-19 06:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020331870) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-19 06:47:14 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020331870) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020331870', 'Ayu Andika P', 'ayuandikapuspitasari17@gmail.com', '', '6224a6582ada6ddc77e0689c88a9a574', '2020-10-19', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-10-19 06:47:14 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020331870) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020331870', 'Ayu Andika P', 'ayuandikapuspitasari17@gmail.com', '', '6224a6582ada6ddc77e0689c88a9a574', '2020-10-19', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-10-19 11:05:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-19 11:05:16 --> Unable to connect to the database
