<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-14 03:04:45 --> 404 Page Not Found: /index
ERROR - 2020-09-14 11:30:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020315705) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-14 11:30:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020315705) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081361641538', 'KOTA MEDAN', 'M.iqbal/Ibu Ita Sri suyanti', 'MEDAN POLONIA', '20157', 'Jln.polonia GG.imam no.47 rumah abu abu merah, samping kedai deo, KOTA MEDAN, MEDAN POLONIA, SUMATERA UTARA, ID, 20157', 'Z301', 'SHOPEE', '20020315705', 'M.iqbal/Ibu Ita Sri suyanti', '', '9a26819b5f976fe8e6ad1ea4dde97fdb', '2020-09-14', 'bePOS', '2020-09-14 11:30:09', '2020-09-14 11:30:09', '2021-09-14', '508776', '02')
ERROR - 2020-09-14 12:31:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-09-14 12:31:02 --> Unable to connect to the database
