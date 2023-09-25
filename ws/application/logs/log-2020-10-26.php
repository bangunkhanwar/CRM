<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-26 03:05:49 --> 404 Page Not Found: /index
ERROR - 2020-10-26 10:04:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020333066) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-26 10:04:02 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020333066) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081384178616', 'KAB. SUKABUMI', 'Hidayat ( Pak Majini )', 'CIBADAK', '43351', 'Kampung Randegan Rt 01 Rw 10 Desa Sekarwangi Kecamatan Cibadak Kabupaten Sukabumi, KAB. SUKABUMI, CIBADAK, JAWA BARAT, ID, 43351', 'Z301', 'SHOPEE', '20020333066', 'Hidayat ( Pak Majini )', '', '9d199142f8045148dfcfbf5cac36e3ed', '2020-10-26', 'bePOS', '2020-10-26 10:04:02', '2020-10-26 10:04:02', '2021-10-26', '713728', '02')
ERROR - 2020-10-26 10:05:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:05:16 --> Unable to connect to the database
ERROR - 2020-10-26 10:05:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:05:16 --> Unable to connect to the database
ERROR - 2020-10-26 10:08:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:08:15 --> Unable to connect to the database
ERROR - 2020-10-26 10:08:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:08:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:08:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:08:15 --> Unable to connect to the database
ERROR - 2020-10-26 10:08:15 --> Unable to connect to the database
ERROR - 2020-10-26 10:08:15 --> Unable to connect to the database
ERROR - 2020-10-26 10:08:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:08:16 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:41 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:45 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:45 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:45 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-10-26 10:59:45 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081317130646'
				OR "tbl"."HP" = '081317130646' 
				OR tbl."BarCode" = '081317130646'
			)
 LIMIT 1
ERROR - 2020-10-26 10:59:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-10-26 10:59:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:46 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:51 --> Unable to connect to the database
ERROR - 2020-10-26 10:59:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 10:59:56 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:32 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:32 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-10-26 13:05:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '271813246'
				OR "tbl"."HP" = '271813246' 
				OR tbl."BarCode" = '271813246'
			)
 LIMIT 1
ERROR - 2020-10-26 13:05:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-10-26 13:05:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:33 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:33 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-10-26 13:05:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '08136770568'
				OR "tbl"."HP" = '08136770568' 
				OR tbl."BarCode" = '08136770568'
			)
 LIMIT 1
ERROR - 2020-10-26 13:05:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-10-26 13:05:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:36 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:41 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:42 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:42 --> Unable to connect to the database
ERROR - 2020-10-26 13:05:42 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-10-26 13:05:42 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '271813246'
				OR "tbl"."HP" = '271813246' 
				OR tbl."BarCode" = '271813246'
			)
 LIMIT 1
ERROR - 2020-10-26 13:05:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-10-26 13:05:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 13:05:47 --> Unable to connect to the database
ERROR - 2020-10-26 14:01:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:01:51 --> Unable to connect to the database
ERROR - 2020-10-26 14:01:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:01:56 --> Unable to connect to the database
ERROR - 2020-10-26 14:02:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:02:01 --> Unable to connect to the database
ERROR - 2020-10-26 14:02:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:02:06 --> Unable to connect to the database
ERROR - 2020-10-26 14:02:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:02:11 --> Unable to connect to the database
ERROR - 2020-10-26 14:02:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-26 14:02:16 --> Unable to connect to the database
