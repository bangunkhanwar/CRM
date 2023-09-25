<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-28 01:40:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340432) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-28 01:40:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340432) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 01:40:22 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340432) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340432', 'tania audina', '', '085232864110', '4811f6275017d876d1fe7a75ceb2d155', '2020-11-28', 'Elshop_Elzatta', '', '665545', '02', 'ZHO')
ERROR - 2020-11-28 01:40:22 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340432) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340432', 'tania audina', '', '085232864110', '4811f6275017d876d1fe7a75ceb2d155', '2020-11-28', 'Elshop_Elzatta', '', '300442', '02', 'ZHO')
ERROR - 2020-11-28 03:06:36 --> 404 Page Not Found: /index
ERROR - 2020-11-28 04:56:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340433) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 04:56:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020340433) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 04:56:04 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340433) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340433', 'sumiati', 'sumiiatii03@gmail.com', '', '503bf7b48ffac3614d7cfd4d1cb36244', '2020-11-28', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-11-28 04:56:04 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020340433) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020340433', 'sumiati', 'sumiiatii03@gmail.com', '', '503bf7b48ffac3614d7cfd4d1cb36244', '2020-11-28', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-11-28 17:39:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:23 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:23 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:23 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2020-11-28 17:39:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:23 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:39:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2020-11-28 17:39:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:39:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:26 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:30 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:30 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:39:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081274911020'
				OR "tbl"."HP" = '081274911020' 
				OR tbl."BarCode" = '081274911020'
			)
 LIMIT 1
ERROR - 2020-11-28 17:39:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:39:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:31 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:36 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:40 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:40 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:46 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:51 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:53 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:53 --> Unable to connect to the database
ERROR - 2020-11-28 17:39:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:39:56 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:01 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:06 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:11 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:16 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:21 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:26 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:31 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:36 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:46 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:46 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:46 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:40:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '210410297'
				OR "tbl"."HP" = '210410297' 
				OR tbl."BarCode" = '210410297'
			)
 LIMIT 1
ERROR - 2020-11-28 17:40:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:40:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:51 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:51 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:51 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:40:51 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085880263341'
				OR "tbl"."HP" = '085880263341' 
				OR tbl."BarCode" = '085880263341'
			)
 LIMIT 1
ERROR - 2020-11-28 17:40:51 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:40:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:51 --> Unable to connect to the database
ERROR - 2020-11-28 17:40:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:40:56 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:01 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:06 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:10 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:10 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:10 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:10 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:10 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:41:10 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '210410297'
				OR "tbl"."HP" = '210410297' 
				OR tbl."BarCode" = '210410297'
			)
 LIMIT 1
ERROR - 2020-11-28 17:41:10 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:41:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:11 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:16 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:21 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:26 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:26 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:26 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:26 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:41:26 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085707000562'
				OR "tbl"."HP" = '085707000562' 
				OR tbl."BarCode" = '085707000562'
			)
 LIMIT 1
ERROR - 2020-11-28 17:41:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:41:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:29 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:29 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:41:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '210410297'
				OR "tbl"."HP" = '210410297' 
				OR tbl."BarCode" = '210410297'
			)
 LIMIT 1
ERROR - 2020-11-28 17:41:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:41:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:31 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:36 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:41 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:41:41 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '27121268888'
				OR "tbl"."HP" = '27121268888' 
				OR tbl."BarCode" = '27121268888'
			)
 LIMIT 1
ERROR - 2020-11-28 17:41:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:41:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:46 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:50 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:50 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:50 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:41:50 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '276010900'
				OR "tbl"."HP" = '276010900' 
				OR tbl."BarCode" = '276010900'
			)
 LIMIT 1
ERROR - 2020-11-28 17:41:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 17:41:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:51 --> Unable to connect to the database
ERROR - 2020-11-28 17:41:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:41:56 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:42:15 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:42:41 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:42:42 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:42:42 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:42 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2020-11-28 17:42:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 17:42:42 --> Unable to connect to the database
ERROR - 2020-11-28 17:42:42 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-11-28 17:42:42 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2020-11-28 17:42:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 18:14:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 18:14:41 --> Unable to connect to the database
ERROR - 2020-11-28 18:14:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 18:14:46 --> Unable to connect to the database
ERROR - 2020-11-28 18:14:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-11-28 18:14:52 --> Unable to connect to the database
ERROR - 2020-11-28 22:37:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;iag&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ucusam'iag'
                                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 22:37:30 --> Query error: ERROR:  syntax error at or near "iag"
LINE 3: WHERE (replace("Email", '.', '') = 'Ucusam'iag'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ucusam'iag'
			 OR replace("MemberCode", '.', '') = 'Ucusam'iag'
			 OR replace("Handpone", '.', '') = 'Ucusam'iag')
			 
AND "Password" = '160faf71421127ea1f606b0bf01f9af9'
 LIMIT 1
ERROR - 2020-11-28 22:37:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 22:37:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;iag&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ucusam'iag'
                                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 22:37:33 --> Query error: ERROR:  syntax error at or near "iag"
LINE 3: WHERE (replace("Email", '.', '') = 'Ucusam'iag'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ucusam'iag'
			 OR replace("MemberCode", '.', '') = 'Ucusam'iag'
			 OR replace("Handpone", '.', '') = 'Ucusam'iag')
			 
AND "Password" = '160faf71421127ea1f606b0bf01f9af9'
 LIMIT 1
ERROR - 2020-11-28 22:37:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 22:37:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;iag&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ucusam'iag'
                                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 22:37:36 --> Query error: ERROR:  syntax error at or near "iag"
LINE 3: WHERE (replace("Email", '.', '') = 'Ucusam'iag'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ucusam'iag'
			 OR replace("MemberCode", '.', '') = 'Ucusam'iag'
			 OR replace("Handpone", '.', '') = 'Ucusam'iag')
			 
AND "Password" = '160faf71421127ea1f606b0bf01f9af9'
 LIMIT 1
ERROR - 2020-11-28 22:37:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-11-28 22:37:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;iah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ucusam'iah'
                                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-28 22:37:42 --> Query error: ERROR:  syntax error at or near "iah"
LINE 3: WHERE (replace("Email", '.', '') = 'Ucusam'iah'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ucusam'iah'
			 OR replace("MemberCode", '.', '') = 'Ucusam'iah'
			 OR replace("Handpone", '.', '') = 'Ucusam'iah')
			 
AND "Password" = '160faf71421127ea1f606b0bf01f9af9'
 LIMIT 1
ERROR - 2020-11-28 22:37:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
