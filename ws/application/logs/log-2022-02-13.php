<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-13 03:01:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2308139) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 03:01:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2308139) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALBC.0005', 'Z032', '2022-02-12', 'WS', '20220213 03:01:11', '10322180937', '02', '1', 'Transaksi Sales', '2', '0', '20220213 03:01:11', '1821001')
ERROR - 2022-02-13 10:22:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2308765) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 10:22:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2308765) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALBD.0002', 'Z045', '2022-02-13', 'WS', '20220213 10:22:14', '10452151204', '02', '1', 'Transaksi Sales', '20', '0', '20220213 10:22:14', '1821001')
ERROR - 2022-02-13 10:47:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  could not extend file &quot;base/16384/3421251&quot;: No space left on device
HINT:  Check free disk space. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 10:47:43 --> Query error: ERROR:  could not extend file "base/16384/3421251": No space left on device
HINT:  Check free disk space. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z769.ALBD.0002', '2022-02-13', '16', '20220213 10:47:43', '19020046890', '#SUKSES point yg didapat 16')
ERROR - 2022-02-13 10:47:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  could not extend file &quot;base/16384/3421251&quot;: No space left on device
HINT:  Check free disk space. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 10:47:44 --> Query error: ERROR:  could not extend file "base/16384/3421251": No space left on device
HINT:  Check free disk space. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z769.ALBD.0002', '2022-02-13', '16', '20220213 10:47:44', '19020046890', '#SUKSES point yg didapat 16')
ERROR - 2022-02-13 11:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2308781) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:21:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2308781) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.ALBD.0002', 'D760', '2022-02-13', 'WS', '20220213 11:21:16', '270410932', '02', '1', 'Transaksi Sales', '10', '0', '20220213 11:21:16', '1821001')
ERROR - 2022-02-13 11:26:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:26:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '10142161110'
				OR "tbl"."HP" = '10142161110' 
				OR tbl."BarCode" = '10142161110'
			)
 LIMIT 1
ERROR - 2022-02-13 11:26:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:26:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:34 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:26:34 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082142501601'
				OR "tbl"."HP" = '082142501601' 
				OR tbl."BarCode" = '082142501601'
			)
 LIMIT 1
ERROR - 2022-02-13 11:26:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:26:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:57 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:26:57 --> Unable to connect to the database
ERROR - 2022-02-13 11:26:57 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:26:57 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082142501601'
				OR "tbl"."HP" = '082142501601' 
				OR tbl."BarCode" = '082142501601'
			)
 LIMIT 1
ERROR - 2022-02-13 11:26:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:15 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:15 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:15 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:15 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:15 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:15 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:15 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:27:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:27:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:27:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:27:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:27:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:06 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:28:06 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200822384'
				OR "tbl"."HP" = '190200822384' 
				OR tbl."BarCode" = '190200822384'
			)
 LIMIT 1
ERROR - 2022-02-13 11:28:06 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:28:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:28:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:28:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:29:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:29:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:11 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:11 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:11 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:12 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:12 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:12 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:13 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:13 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:13 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:13 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:24 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:24 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:24 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:24 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:25 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:25 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:25 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:30:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:25 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:25 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:30:25 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:30:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:30:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:30:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:30:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200822384'
				OR "tbl"."HP" = '190200822384' 
				OR tbl."BarCode" = '190200822384'
			)
 LIMIT 1
ERROR - 2022-02-13 11:31:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:17 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:17 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082268211037'
				OR "tbl"."HP" = '082268211037' 
				OR tbl."BarCode" = '082268211037'
			)
 LIMIT 1
ERROR - 2022-02-13 11:31:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:34 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:34 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:34 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:34 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:38 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:38 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:38 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:38 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:38 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:38 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:39 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:39 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:39 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:39 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200822384'
				OR "tbl"."HP" = '190200822384' 
				OR tbl."BarCode" = '190200822384'
			)
 LIMIT 1
ERROR - 2022-02-13 11:31:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:41 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:41 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082268211037'
				OR "tbl"."HP" = '082268211037' 
				OR tbl."BarCode" = '082268211037'
			)
 LIMIT 1
ERROR - 2022-02-13 11:31:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:48 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:48 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:48 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:48 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:50 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:31:50 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:31:50 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:50 --> Unable to connect to the database
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:31:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:31:50 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:31:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:31:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:31:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:32:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:32:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:33:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:33:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:34:43 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:34:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:34:43 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:34:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:43 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:43 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:34:43 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:34:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:34:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:34:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:34:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:04 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:35:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:04 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:35:04 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:35:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:35:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:05 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:35:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:05 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:35:05 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:35:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:35:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:35:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '089611658001'
				OR "tbl"."HP" = '089611658001' 
				OR tbl."BarCode" = '089611658001'
			)
 LIMIT 1
ERROR - 2022-02-13 11:35:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:26 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:35:26 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:35:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:35:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:35:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:35:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:36:11 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:36:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:11 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:36:11 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:36:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:23 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:36:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085385810483'
				OR "tbl"."HP" = '085385810483' 
				OR tbl."BarCode" = '085385810483'
			)
 LIMIT 1
ERROR - 2022-02-13 11:36:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:36:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:36:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:36:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:36:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:36:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:36:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:36:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:36:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:36:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:36:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:36:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:37:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:37:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:38:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:38:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:39:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:39:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:39:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:39:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:34 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:39:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:34 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:34 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:39:34 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:39:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:39:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:39:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:39:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:40:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:40:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:41:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200797287'
				OR "tbl"."HP" = '190200797287' 
				OR tbl."BarCode" = '190200797287'
			)
 LIMIT 1
ERROR - 2022-02-13 11:41:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:41:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:40 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:41:40 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200797287'
				OR "tbl"."HP" = '190200797287' 
				OR tbl."BarCode" = '190200797287'
			)
 LIMIT 1
ERROR - 2022-02-13 11:41:40 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:41:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:59 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:59 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:59 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:41:59 --> Unable to connect to the database
ERROR - 2022-02-13 11:41:59 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:41:59 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200797287'
				OR "tbl"."HP" = '190200797287' 
				OR tbl."BarCode" = '190200797287'
			)
 LIMIT 1
ERROR - 2022-02-13 11:41:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:08 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:16 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:17 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:17 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:17 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:17 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:18 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:19 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:19 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:19 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:19 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200797287'
				OR "tbl"."HP" = '190200797287' 
				OR tbl."BarCode" = '190200797287'
			)
 LIMIT 1
ERROR - 2022-02-13 11:42:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:44 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:44 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:44 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:44 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:44 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:45 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:45 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:45 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:45 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:45 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:45 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:45 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:47 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:47 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:48 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:48 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:42:48 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:49 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:42:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:49 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:42:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:42:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:42:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:42:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:42:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:43:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '190200822384'
				OR "tbl"."HP" = '190200822384' 
				OR tbl."BarCode" = '190200822384'
			)
 LIMIT 1
ERROR - 2022-02-13 11:43:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:43:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:43:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:43:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:44:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:44:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:35 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:35 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:45:36 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:45:37 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:39 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:39 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:39 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:45:39 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:40 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:40 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:40 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:40 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:40 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:40 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:40 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:40 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:45:41 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:45:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:45:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:45:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:45:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:46:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:17 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:46:17 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:46:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:46:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:46:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:46:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:46:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:46:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:46:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:46:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:47:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:47:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:08 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:08 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:08 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:48:08 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085526200367'
				OR "tbl"."HP" = '085526200367' 
				OR tbl."BarCode" = '085526200367'
			)
 LIMIT 1
ERROR - 2022-02-13 11:48:08 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:48:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:48:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:48:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:49:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085228115499'
				OR "tbl"."HP" = '085228115499' 
				OR tbl."BarCode" = '085228115499'
			)
 LIMIT 1
ERROR - 2022-02-13 11:49:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:49:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:49:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:49:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:50:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:50:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:51:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:51:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:51:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:51:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:51:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:12 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:12 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:12 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:13 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:13 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:13 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:13 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:13 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:52:14 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:14 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:14 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:14 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:14 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:14 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:14 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:14 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:15 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:15 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:15 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:52:15 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:15 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:25 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:25 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:52:25 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:25 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:25 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:25 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:26 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:26 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:52:26 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:52:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:52:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:52:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:52:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:52:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:28 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:28 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:29 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:29 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:53:29 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:53:30 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:53:31 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:31 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:32 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:53:32 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:32 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:53:32 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:33 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:53:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:33 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:33 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:53:33 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:53:33 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:53:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:53:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:53:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:21 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:54:21 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082199619832'
				OR "tbl"."HP" = '082199619832' 
				OR tbl."BarCode" = '082199619832'
			)
 LIMIT 1
ERROR - 2022-02-13 11:54:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:54:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:31 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:54:31 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082199619832'
				OR "tbl"."HP" = '082199619832' 
				OR tbl."BarCode" = '082199619832'
			)
 LIMIT 1
ERROR - 2022-02-13 11:54:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:54:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:54:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:54:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:18 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:55:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '273712742'
				OR "tbl"."HP" = '273712742' 
				OR tbl."BarCode" = '273712742'
			)
 LIMIT 1
ERROR - 2022-02-13 11:55:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:55:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:30 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:30 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:55:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:55:30 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:55:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:55:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:55:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:55:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:56:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:56:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:57:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:57:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:01 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:11 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:16 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:21 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:26 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:31 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:36 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:41 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:46 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:51 --> Unable to connect to the database
ERROR - 2022-02-13 11:58:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:58:56 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:59:02 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:02 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:02 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:02 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:02 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:03 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:03 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:03 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:03 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:03 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:03 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:04 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:59:04 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:59:04 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:04 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:04 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:04 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:04 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 11:59:05 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:05 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:05 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:05 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:06 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:06 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:06 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:06 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 11:59:06 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 11:59:06 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 11:59:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:07 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:12 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:17 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:22 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:27 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:37 --> Unable to connect to the database
ERROR - 2022-02-13 11:59:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 11:59:47 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:01 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:06 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:11 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:26 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:36 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:46 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:51 --> Unable to connect to the database
ERROR - 2022-02-13 12:00:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:00:56 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:06 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:11 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:17 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:17 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:17 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:17 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:17 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:17 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:18 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:18 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:18 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:19 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:19 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:19 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:19 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:19 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:19 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:19 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:21 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:26 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:27 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 12:01:27 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:27 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:27 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 12:01:27 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:28 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:28 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:28 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2022-02-13 12:01:28 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:28 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:28 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-02-13 12:01:28 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2022-02-13 12:01:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-02-13 12:01:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:31 --> Unable to connect to the database
ERROR - 2022-02-13 12:01:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  could not write init file /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-02-13 12:01:36 --> Unable to connect to the database
ERROR - 2022-02-13 13:31:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2308808) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 13:31:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2308808) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALBD.0005', 'Z010', '2022-02-13', 'WS', '20220213 13:31:47', '10102180532', '02', '1', 'Transaksi Sales', '24', '0', '20220213 13:31:47', '1821001')
ERROR - 2022-02-13 20:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2308907) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-13 20:12:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2308907) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransDate", "CreateBy", "CreateTime", "MemberCode", "StoreCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate") VALUES ('2022-02-13', 'CRM Webservice', '2022-02-13 20:12:11', '22020011630', 'ZHO', '02', 5, 'Account Verify', 50, 0, '2022-02-13 20:12:11')
