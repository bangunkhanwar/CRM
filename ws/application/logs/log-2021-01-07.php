<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-07 03:05:39 --> 404 Page Not Found: /index
ERROR - 2021-01-07 05:14:58 --> 404 Page Not Found: /index
ERROR - 2021-01-07 06:23:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023190817) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 06:23:19 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023190817) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023190817', 'rafikah', 'rafikah.yf@gmail.com', '', '8118cfed408ce031d85179e114df6b44', '2021-01-07', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-01-07 15:11:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:11:36 --> Unable to connect to the database
ERROR - 2021-01-07 15:11:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:11:41 --> Unable to connect to the database
ERROR - 2021-01-07 15:11:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:11:46 --> Unable to connect to the database
ERROR - 2021-01-07 15:11:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:11:51 --> Unable to connect to the database
ERROR - 2021-01-07 15:11:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:11:56 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:01 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:06 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:11 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:21 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:26 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:28 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:28 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 15:12:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081333928615'
				OR "tbl"."HP" = '081333928615' 
				OR tbl."BarCode" = '081333928615'
			)
 LIMIT 1
ERROR - 2021-01-07 15:12:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:12:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:29 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:29 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 15:12:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '083856750003'
				OR "tbl"."HP" = '083856750003' 
				OR tbl."BarCode" = '083856750003'
			)
 LIMIT 1
ERROR - 2021-01-07 15:12:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:12:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:31 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:36 --> Unable to connect to the database
ERROR - 2021-01-07 15:12:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:12:41 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 15:13:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-07 15:13:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:13:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:17 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-07 15:13:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 15:13:17 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-07 15:13:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:13:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:25 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:25 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:25 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-07 15:13:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:13:25 --> Unable to connect to the database
ERROR - 2021-01-07 15:13:25 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 15:13:25 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-07 15:13:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:26:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:16 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:21 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:26 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:32 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:32 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-07 15:26:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:32 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 15:26:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-07 15:26:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:26:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:33 --> Unable to connect to the database
ERROR - 2021-01-07 15:26:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-07 15:26:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 15:26:33 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-07 15:26:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 15:26:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 15:26:46 --> Unable to connect to the database
ERROR - 2021-01-07 17:16:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;matulMaula&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ni'matulMaula'
                                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 17:16:35 --> Query error: ERROR:  syntax error at or near "matulMaula"
LINE 3: WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
                                               ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
			 OR replace("MemberCode", '.', '') = 'Ni'matulMaula'
			 OR replace("Handpone", '.', '') = 'Ni'matulMaula')
			 
AND "Password" = '0325fa9a5140810b32bc905f2d16db01'
 LIMIT 1
ERROR - 2021-01-07 17:16:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 17:16:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;matulMaula&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ni'matulMaula'
                                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 17:16:42 --> Query error: ERROR:  syntax error at or near "matulMaula"
LINE 3: WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
                                               ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
			 OR replace("MemberCode", '.', '') = 'Ni'matulMaula'
			 OR replace("Handpone", '.', '') = 'Ni'matulMaula')
			 
AND "Password" = '0325fa9a5140810b32bc905f2d16db01'
 LIMIT 1
ERROR - 2021-01-07 17:16:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 17:16:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;matulMaula&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Ni'matulMaula'
                                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-07 17:16:45 --> Query error: ERROR:  syntax error at or near "matulMaula"
LINE 3: WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
                                               ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Ni'matulMaula'
			 OR replace("MemberCode", '.', '') = 'Ni'matulMaula'
			 OR replace("Handpone", '.', '') = 'Ni'matulMaula')
			 
AND "Password" = '0325fa9a5140810b32bc905f2d16db01'
 LIMIT 1
ERROR - 2021-01-07 17:16:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 17:45:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:05 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:05 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:05 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:19 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:19 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:19 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:19 --> Unable to connect to the database
ERROR - 2021-01-07 17:45:19 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-07 17:45:19 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082336000244'
				OR "tbl"."HP" = '082336000244' 
				OR tbl."BarCode" = '082336000244'
			)
 LIMIT 1
ERROR - 2021-01-07 17:45:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-07 17:45:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-07 17:45:21 --> Unable to connect to the database
