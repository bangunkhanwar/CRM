<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-13 03:06:29 --> 404 Page Not Found: /index
ERROR - 2020-07-13 16:15:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-07-13 16:15:06 --> Unable to connect to the database
ERROR - 2020-07-13 16:48:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020300383) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-13 16:48:54 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020300383) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081999883992', 'KAB. PAMEKASAN', 'Melly atika', 'PASEAN', '69356', 'Klinik dr.fajar habibi jl.raya waru desa tlontoraja,kecamatan pasean, KAB. PAMEKASAN, PASEAN, JAWA TIMUR, ID, 69356', 'Z301', 'SHOPEE', '20020300383', 'Melly atika', '', '1fd79230d08a08be54ef2144d41d037c', '2020-07-13', 'bePOS', '2020-07-13 16:48:54', '2020-07-13 16:48:54', '2021-07-13', '665724', '02')
