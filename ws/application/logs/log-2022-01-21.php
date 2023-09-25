<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-21 09:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288629) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 09:12:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288629) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0001', 'Z752', '2022-01-21', 'WS', '20220121 09:12:11', '17522190359', '02', '1', 'Transaksi Sales', '18', '0', '20220121 09:12:11', '1821001')
ERROR - 2022-01-21 09:51:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:22 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:23 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:33 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:36 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:51:36 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:51:36 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:51:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:37 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:43 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:43 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:43 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:51:43 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:51:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:51:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:46 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:51:46 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:51:46 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:51:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:53 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:53 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:51:53 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:51:53 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:53 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:53 --> Unable to connect to the database
ERROR - 2022-01-21 09:51:53 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:51:53 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:51:53 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:51:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:51:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:02 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:02 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:02 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:02 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:02 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:02 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:07 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:07 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:07 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:07 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:07 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:07 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:12 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:17 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:17 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:17 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:17 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:17 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:22 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:23 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:23 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:23 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:23 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:23 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:23 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:30 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:30 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:30 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:30 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:30 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:30 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:32 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:37 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:42 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:47 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:47 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:47 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:47 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:52:47 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081283977399'
				OR "tbl"."HP" = '081283977399' 
				OR tbl."BarCode" = '081283977399'
			)
 LIMIT 1
ERROR - 2022-01-21 09:52:47 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:52:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:52 --> Unable to connect to the database
ERROR - 2022-01-21 09:52:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:52:57 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:16 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:53:16 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081284622465'
				OR "tbl"."HP" = '081284622465' 
				OR tbl."BarCode" = '081284622465'
			)
 LIMIT 1
ERROR - 2022-01-21 09:53:16 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:53:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:53:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081284622465'
				OR "tbl"."HP" = '081284622465' 
				OR tbl."BarCode" = '081284622465'
			)
 LIMIT 1
ERROR - 2022-01-21 09:53:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:53:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:41 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:53:41 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085335531413'
				OR "tbl"."HP" = '085335531413' 
				OR tbl."BarCode" = '085335531413'
			)
 LIMIT 1
ERROR - 2022-01-21 09:53:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:53:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:49 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:49 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:49 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:53:49 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085335531413'
				OR "tbl"."HP" = '085335531413' 
				OR tbl."BarCode" = '085335531413'
			)
 LIMIT 1
ERROR - 2022-01-21 09:53:49 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:53:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:58 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:58 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:58 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:53:58 --> Unable to connect to the database
ERROR - 2022-01-21 09:53:58 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:53:58 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081221191978'
				OR "tbl"."HP" = '081221191978' 
				OR tbl."BarCode" = '081221191978'
			)
 LIMIT 1
ERROR - 2022-01-21 09:53:58 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:54:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:12 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:12 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:12 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:12 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:54:12 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '170200402040'
				OR "tbl"."HP" = '170200402040' 
				OR tbl."BarCode" = '170200402040'
			)
 LIMIT 1
ERROR - 2022-01-21 09:54:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:54:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:24 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:24 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:24 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:24 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:54:24 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085335531413'
				OR "tbl"."HP" = '085335531413' 
				OR tbl."BarCode" = '085335531413'
			)
 LIMIT 1
ERROR - 2022-01-21 09:54:24 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:54:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:38 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:38 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:38 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:38 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:54:38 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081287175408'
				OR "tbl"."HP" = '081287175408' 
				OR tbl."BarCode" = '081287175408'
			)
 LIMIT 1
ERROR - 2022-01-21 09:54:38 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:54:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:41 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:54:41 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082152222062'
				OR "tbl"."HP" = '082152222062' 
				OR tbl."BarCode" = '082152222062'
			)
 LIMIT 1
ERROR - 2022-01-21 09:54:41 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:54:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:54:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:54:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:05 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:05 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:05 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:05 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:55:05 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081287175408'
				OR "tbl"."HP" = '081287175408' 
				OR tbl."BarCode" = '081287175408'
			)
 LIMIT 1
ERROR - 2022-01-21 09:55:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:55:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:55:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:55:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:56:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:56:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:27 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:27 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:57:27 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '083114083351'
				OR "tbl"."HP" = '083114083351' 
				OR tbl."BarCode" = '083114083351'
			)
 LIMIT 1
ERROR - 2022-01-21 09:57:27 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:57:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:57:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:57:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:58:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:58:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:01 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:06 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:11 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:16 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:21 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:26 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:31 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:36 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:37 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:37 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:37 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:37 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:59:37 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085726518219'
				OR "tbl"."HP" = '085726518219' 
				OR tbl."BarCode" = '085726518219'
			)
 LIMIT 1
ERROR - 2022-01-21 09:59:37 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 09:59:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:41 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:46 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:51 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 09:59:56 --> Unable to connect to the database
ERROR - 2022-01-21 09:59:56 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 09:59:56 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085726518219'
				OR "tbl"."HP" = '085726518219' 
				OR tbl."BarCode" = '085726518219'
			)
 LIMIT 1
ERROR - 2022-01-21 09:59:56 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 10:00:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:01 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:06 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:11 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:16 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:21 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:31 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:36 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:41 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:45 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:45 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:45 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 10:00:45 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '081221191978'
				OR "tbl"."HP" = '081221191978' 
				OR tbl."BarCode" = '081221191978'
			)
 LIMIT 1
ERROR - 2022-01-21 10:00:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 10:00:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:46 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:51 --> Unable to connect to the database
ERROR - 2022-01-21 10:00:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:00:56 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:01 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:06 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:11 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:16 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:21 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:31 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:36 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:41 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:46 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:51 --> Unable to connect to the database
ERROR - 2022-01-21 10:01:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:01:56 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:01 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:06 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:11 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:16 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:21 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:31 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:36 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:41 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:46 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:51 --> Unable to connect to the database
ERROR - 2022-01-21 10:02:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:02:56 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:01 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:06 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:11 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:16 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:21 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:31 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:35 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:35 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:35 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:35 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 10:03:35 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '083114083351'
				OR "tbl"."HP" = '083114083351' 
				OR tbl."BarCode" = '083114083351'
			)
 LIMIT 1
ERROR - 2022-01-21 10:03:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 10:03:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:36 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:41 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:46 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:51 --> Unable to connect to the database
ERROR - 2022-01-21 10:03:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:03:56 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:01 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:06 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:11 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:16 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:21 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:26 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2022-01-21 10:04:26 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082152222062'
				OR "tbl"."HP" = '082152222062' 
				OR tbl."BarCode" = '082152222062'
			)
 LIMIT 1
ERROR - 2022-01-21 10:04:26 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2022-01-21 10:04:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:26 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:31 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:36 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:41 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:46 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:51 --> Unable to connect to the database
ERROR - 2022-01-21 10:04:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:04:56 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:07:00 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2022-01-21 10:07:00 --> Unable to connect to the database
ERROR - 2022-01-21 10:08:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288631) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:08:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288631) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0001', 'Z045', '2022-01-21', 'WS', '20220121 10:08:57', '10452150463', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:08:57', '1821001')
ERROR - 2022-01-21 10:08:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288632) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:08:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288632) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0001', 'Z045', '2022-01-21', 'WS', '20220121 10:08:59', '10452150463', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:08:59', '1821001')
ERROR - 2022-01-21 10:09:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288633) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:09:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288633) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0001', 'Z047', '2022-01-21', 'WS', '20220121 10:09:46', '10472151263', '02', '1', 'Transaksi Sales', '24', '0', '20220121 10:09:46', '1821001')
ERROR - 2022-01-21 10:09:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288634) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:09:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288634) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0001', 'Z047', '2022-01-21', 'WS', '20220121 10:09:48', '10472151263', '02', '1', 'Transaksi Sales', '24', '0', '20220121 10:09:48', '1821001')
ERROR - 2022-01-21 10:09:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288635) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:09:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288635) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0001', 'Z047', '2022-01-21', 'WS', '20220121 10:09:50', '10472151263', '02', '1', 'Transaksi Sales', '24', '0', '20220121 10:09:50', '1821001')
ERROR - 2022-01-21 10:09:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288636) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:09:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288636) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0001', 'Z047', '2022-01-21', 'WS', '20220121 10:09:53', '10472151263', '02', '1', 'Transaksi Sales', '24', '0', '20220121 10:09:53', '1821001')
ERROR - 2022-01-21 10:14:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288637) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:14:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288637) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.ALAL.0001', 'D121', '2022-01-21', 'WS', '20220121 10:14:08', '21212190027', '02', '1', 'Transaksi Sales', '12', '0', '20220121 10:14:08', '1821001')
ERROR - 2022-01-21 10:14:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288638) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:14:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288638) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0001', 'Z722', '2022-01-21', 'WS', '20220121 10:14:09', '19020042626', '02', '1', 'Transaksi Sales', '2', '0', '20220121 10:14:09', '1821001')
ERROR - 2022-01-21 10:14:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288639) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:14:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288639) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.ALAL.0001', 'D121', '2022-01-21', 'WS', '20220121 10:14:12', '21212190027', '02', '1', 'Transaksi Sales', '12', '0', '20220121 10:14:12', '1821001')
ERROR - 2022-01-21 10:19:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288640) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:19:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288640) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.ALAL.0001', 'Z790', '2022-01-21', 'WS', '20220121 10:19:07', '17902170116', '02', '1', 'Transaksi Sales', '8', '0', '20220121 10:19:07', '1821001')
ERROR - 2022-01-21 10:27:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288641) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:27:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288641) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.ALAL.0001', 'Z061', '2022-01-21', 'WS', '20220121 10:27:03', '10612180020', '02', '1', 'Transaksi Sales', '34', '0', '20220121 10:27:03', '1821001')
ERROR - 2022-01-21 10:27:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288642) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:27:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288642) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.ALAL.0001', 'Z061', '2022-01-21', 'WS', '20220121 10:27:05', '10612180020', '02', '1', 'Transaksi Sales', '34', '0', '20220121 10:27:05', '1821001')
ERROR - 2022-01-21 10:32:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(22020005086) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:32:55 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(22020005086) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('08118485800', 'KOTA DEPOK', 'Angel', 'CIMANGGIS', '16451', 'Perum Pondok Duta I, Jl. Duta Wenang Blok H2 No.9B, KOTA DEPOK, CIMANGGIS, JAWA BARAT, ID, 16451', 'Z301', 'SHOPEE', '22020005086', 'Angel', '', '32c1c98c6b9c0c31793eca7b34d8d6f8', '2022-01-21', 'bePOS', '2022-01-21 10:32:55', '2022-01-21 10:32:55', '2023-01-21', '667867', '02')
ERROR - 2022-01-21 10:34:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288643) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288643) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:30', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:30', '1821001')
ERROR - 2022-01-21 10:34:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288644) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288644) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:32', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:32', '1821001')
ERROR - 2022-01-21 10:34:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288645) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288645) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:38', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:38', '1821001')
ERROR - 2022-01-21 10:34:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288646) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288646) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:42', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:42', '1821001')
ERROR - 2022-01-21 10:34:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288647) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288647) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:45', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:45', '1821001')
ERROR - 2022-01-21 10:34:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288648) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:34:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288648) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:34:59', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:34:59', '1821001')
ERROR - 2022-01-21 10:35:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288649) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288649) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:35:07', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:35:07', '1821001')
ERROR - 2022-01-21 10:35:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288650) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288650) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:35:09', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:35:09', '1821001')
ERROR - 2022-01-21 10:35:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288651) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288651) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:35:11', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:35:11', '1821001')
ERROR - 2022-01-21 10:35:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288652) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288652) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAK.0002', 'Z044', '2022-01-20', 'WS', '20220121 10:35:14', '10442180518', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:35:14', '1821001')
ERROR - 2022-01-21 10:35:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288653) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288653) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0001', 'Z044', '2022-01-21', 'WS', '20220121 10:35:16', '10442180518', '02', '1', 'Transaksi Sales', '20', '0', '20220121 10:35:16', '1821001')
ERROR - 2022-01-21 10:35:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288654) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288654) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0001', 'Z044', '2022-01-21', 'WS', '20220121 10:35:32', '10442180518', '02', '1', 'Transaksi Sales', '20', '0', '20220121 10:35:32', '1821001')
ERROR - 2022-01-21 10:35:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288655) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288655) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0001', 'Z044', '2022-01-21', 'WS', '20220121 10:35:34', '10442180518', '02', '1', 'Transaksi Sales', '20', '0', '20220121 10:35:34', '1821001')
ERROR - 2022-01-21 10:35:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288656) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:35:36 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288656) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0001', 'Z044', '2022-01-21', 'WS', '20220121 10:35:36', '10442180518', '02', '1', 'Transaksi Sales', '20', '0', '20220121 10:35:36', '1821001')
ERROR - 2022-01-21 10:36:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288657) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:36:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288657) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0001', 'Z032', '2022-01-21', 'WS', '20220121 10:36:26', '21023193619', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:36:26', '1821001')
ERROR - 2022-01-21 10:36:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288658) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:36:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288658) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0001', 'Z032', '2022-01-21', 'WS', '20220121 10:36:28', '21023193619', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:36:28', '1821001')
ERROR - 2022-01-21 10:36:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288659) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:36:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288659) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0001', 'Z032', '2022-01-21', 'WS', '20220121 10:36:30', '21023193619', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:36:30', '1821001')
ERROR - 2022-01-21 10:44:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288660) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:44:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288660) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.ALAL.0002', 'D121', '2022-01-21', 'WS', '20220121 10:44:49', '21212160255', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:44:49', '1821001')
ERROR - 2022-01-21 10:44:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288661) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:44:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288661) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0002', 'Z722', '2022-01-21', 'WS', '20220121 10:44:49', '22020005073', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:44:49', '1821001')
ERROR - 2022-01-21 10:44:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288662) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:44:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288662) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0002', 'Z722', '2022-01-21', 'WS', '20220121 10:44:51', '22020005073', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:44:51', '1821001')
ERROR - 2022-01-21 10:44:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288663) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:44:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288663) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.ALAL.0002', 'D121', '2022-01-21', 'WS', '20220121 10:44:51', '21212160255', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:44:51', '1821001')
ERROR - 2022-01-21 10:46:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288664) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:46:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288664) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0001', 'Z714', '2022-01-21', 'WS', '20220121 10:46:50', '22020002265', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:46:50', '1821001')
ERROR - 2022-01-21 10:46:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288665) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:46:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288665) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0001', 'Z714', '2022-01-21', 'WS', '20220121 10:46:53', '22020002265', '02', '1', 'Transaksi Sales', '16', '0', '20220121 10:46:53', '1821001')
ERROR - 2022-01-21 10:47:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288666) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:47:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288666) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0002', 'Z010', '2022-01-21', 'WS', '20220121 10:47:29', '201011456', '02', '1', 'Transaksi Sales', '2', '0', '20220121 10:47:29', '1821001')
ERROR - 2022-01-21 10:47:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288667) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:47:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288667) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0003', 'Z010', '2022-01-21', 'WS', '20220121 10:47:31', '10102180972', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:47:31', '1821001')
ERROR - 2022-01-21 10:47:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288668) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:47:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288668) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0003', 'Z010', '2022-01-21', 'WS', '20220121 10:47:32', '10102180972', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:47:32', '1821001')
ERROR - 2022-01-21 10:47:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288669) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 10:47:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288669) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0003', 'Z010', '2022-01-21', 'WS', '20220121 10:47:35', '10102180972', '02', '1', 'Transaksi Sales', '18', '0', '20220121 10:47:35', '1821001')
ERROR - 2022-01-21 11:02:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288670) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:02:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288670) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.ALAL.0001', 'Z712', '2022-01-21', 'WS', '20220121 11:02:21', '17122190667', '02', '1', 'Transaksi Sales', '4', '0', '20220121 11:02:21', '1821001')
ERROR - 2022-01-21 11:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288671) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:06:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288671) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0003', 'Z032', '2022-01-21', 'WS', '20220121 11:06:22', '10322160830', '02', '1', 'Transaksi Sales', '54', '0', '20220121 11:06:22', '1821001')
ERROR - 2022-01-21 11:06:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288672) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:06:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288672) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0003', 'Z032', '2022-01-21', 'WS', '20220121 11:06:24', '10322160830', '02', '1', 'Transaksi Sales', '54', '0', '20220121 11:06:24', '1821001')
ERROR - 2022-01-21 11:06:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288673) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:06:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288673) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0004', 'Z032', '2022-01-21', 'WS', '20220121 11:06:26', '10322190134', '02', '1', 'Transaksi Sales', '8', '0', '20220121 11:06:26', '1821001')
ERROR - 2022-01-21 11:12:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288674) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:12:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288674) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0003', 'Z752', '2022-01-21', 'WS', '20220121 11:12:09', '17522190517', '02', '1', 'Transaksi Sales', '10', '0', '20220121 11:12:09', '1821001')
ERROR - 2022-01-21 11:12:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288675) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:12:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288675) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0004', 'Z752', '2022-01-21', 'WS', '20220121 11:12:11', '17662171257', '02', '1', 'Transaksi Sales', '40', '0', '20220121 11:12:11', '1821001')
ERROR - 2022-01-21 11:13:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288676) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:13:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288676) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0001', 'Z077', '2022-01-21', 'WS', '20220121 11:13:56', '19020043372', '02', '1', 'Transaksi Sales', '14', '0', '20220121 11:13:56', '1821001')
ERROR - 2022-01-21 11:13:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288677) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:13:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288677) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0001', 'Z077', '2022-01-21', 'WS', '20220121 11:13:58', '19020043372', '02', '1', 'Transaksi Sales', '14', '0', '20220121 11:13:58', '1821001')
ERROR - 2022-01-21 11:14:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288678) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:14:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288678) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0001', 'Z077', '2022-01-21', 'WS', '20220121 11:14:00', '19020043372', '02', '1', 'Transaksi Sales', '14', '0', '20220121 11:14:00', '1821001')
ERROR - 2022-01-21 11:14:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288679) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:14:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288679) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0003', 'Z722', '2022-01-21', 'WS', '20220121 11:14:06', '17222170211', '02', '1', 'Transaksi Sales', '12', '0', '20220121 11:14:06', '1821001')
ERROR - 2022-01-21 11:14:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288680) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:14:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288680) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0003', 'Z722', '2022-01-21', 'WS', '20220121 11:14:08', '17222170211', '02', '1', 'Transaksi Sales', '12', '0', '20220121 11:14:08', '1821001')
ERROR - 2022-01-21 11:15:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288681) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:15:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288681) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0001', 'D127', '2022-01-21', 'WS', '20220121 11:15:22', '10242170787', '02', '1', 'Transaksi Sales', '38', '0', '20220121 11:15:22', '1821001')
ERROR - 2022-01-21 11:17:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288682) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288682) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0004', 'Z010', '2022-01-21', 'WS', '20220121 11:17:26', '201010464', '02', '1', 'Transaksi Sales', '52', '0', '20220121 11:17:26', '1821001')
ERROR - 2022-01-21 11:17:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288683) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288683) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0004', 'Z010', '2022-01-21', 'WS', '20220121 11:17:28', '201010464', '02', '1', 'Transaksi Sales', '52', '0', '20220121 11:17:28', '1821001')
ERROR - 2022-01-21 11:17:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288684) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288684) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0004', 'Z010', '2022-01-21', 'WS', '20220121 11:17:30', '201010464', '02', '1', 'Transaksi Sales', '52', '0', '20220121 11:17:30', '1821001')
ERROR - 2022-01-21 11:17:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288685) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288685) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0002', 'Z714', '2022-01-21', 'WS', '20220121 11:17:30', '17142190057', '02', '1', 'Transaksi Sales', '4', '0', '20220121 11:17:30', '1821001')
ERROR - 2022-01-21 11:17:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288686) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288686) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0004', 'Z010', '2022-01-21', 'WS', '20220121 11:17:31', '201010464', '02', '1', 'Transaksi Sales', '52', '0', '20220121 11:17:31', '1821001')
ERROR - 2022-01-21 11:17:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288687) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:17:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288687) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0004', 'Z010', '2022-01-21', 'WS', '20220121 11:17:33', '201010464', '02', '1', 'Transaksi Sales', '52', '0', '20220121 11:17:33', '1821001')
ERROR - 2022-01-21 11:19:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288688) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:19:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288688) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0002', 'Z044', '2022-01-21', 'WS', '20220121 11:19:27', '21023278695', '02', '1', 'Transaksi Sales', '2', '0', '20220121 11:19:27', '1821001')
ERROR - 2022-01-21 11:21:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288689) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:21:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288689) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0003', 'Z032', '2022-01-21', 'WS', '20220121 11:21:17', '10322160830', '02', '1', 'Transaksi Sales', '54', '0', '20220121 11:21:17', '1821001')
ERROR - 2022-01-21 11:21:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288690) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:21:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288690) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0003', 'Z032', '2022-01-21', 'WS', '20220121 11:21:19', '10322160830', '02', '1', 'Transaksi Sales', '54', '0', '20220121 11:21:19', '1821001')
ERROR - 2022-01-21 11:21:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288691) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:21:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288691) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0003', 'Z032', '2022-01-21', 'WS', '20220121 11:21:21', '10322160830', '02', '1', 'Transaksi Sales', '54', '0', '20220121 11:21:21', '1821001')
ERROR - 2022-01-21 11:21:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288692) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:21:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288692) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0004', 'Z032', '2022-01-21', 'WS', '20220121 11:21:23', '10322190134', '02', '1', 'Transaksi Sales', '8', '0', '20220121 11:21:23', '1821001')
ERROR - 2022-01-21 11:21:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288693) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:21:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288693) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0005', 'Z032', '2022-01-21', 'WS', '20220121 11:21:25', '10322150938', '02', '1', 'Transaksi Sales', '16', '0', '20220121 11:21:25', '1821001')
ERROR - 2022-01-21 11:31:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288694) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:31:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288694) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0002', 'Z714', '2022-01-21', 'WS', '20220121 11:31:47', '17142190057', '02', '1', 'Transaksi Sales', '4', '0', '20220121 11:31:47', '1821001')
ERROR - 2022-01-21 11:31:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288695) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:31:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288695) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0002', 'Z714', '2022-01-21', 'WS', '20220121 11:31:50', '17142190057', '02', '1', 'Transaksi Sales', '4', '0', '20220121 11:31:50', '1821001')
ERROR - 2022-01-21 11:36:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288696) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:36:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288696) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0006', 'Z032', '2022-01-21', 'WS', '20220121 11:36:21', '10322151052', '02', '1', 'Transaksi Sales Retur', '0', '24', '20220121 11:36:21', '1821001')
ERROR - 2022-01-21 11:36:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288697) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:36:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288697) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0007', 'Z032', '2022-01-21', 'WS', '20220121 11:36:23', '10322151052', '02', '1', 'Transaksi Sales', '36', '0', '20220121 11:36:23', '1821001')
ERROR - 2022-01-21 11:36:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288698) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:36:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288698) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0007', 'Z032', '2022-01-21', 'WS', '20220121 11:36:25', '10322151052', '02', '1', 'Transaksi Sales', '36', '0', '20220121 11:36:25', '1821001')
ERROR - 2022-01-21 11:40:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288699) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:40:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288699) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0004', 'Z047', '2022-01-21', 'WS', '20220121 11:40:23', '20020233252', '02', '1', 'Transaksi Sales', '6', '0', '20220121 11:40:23', '1821001')
ERROR - 2022-01-21 11:40:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288700) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:40:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288700) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0004', 'Z047', '2022-01-21', 'WS', '20220121 11:40:25', '20020233252', '02', '1', 'Transaksi Sales', '6', '0', '20220121 11:40:25', '1821001')
ERROR - 2022-01-21 11:40:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288701) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:40:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288701) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0005', 'Z047', '2022-01-21', 'WS', '20220121 11:40:27', '10472170320', '02', '1', 'Transaksi Sales', '16', '0', '20220121 11:40:27', '1821001')
ERROR - 2022-01-21 11:40:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288702) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:40:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288702) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0005', 'Z047', '2022-01-21', 'WS', '20220121 11:40:29', '10472170320', '02', '1', 'Transaksi Sales', '16', '0', '20220121 11:40:29', '1821001')
ERROR - 2022-01-21 11:40:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288703) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:40:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288703) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0005', 'Z047', '2022-01-21', 'WS', '20220121 11:40:33', '10472170320', '02', '1', 'Transaksi Sales', '16', '0', '20220121 11:40:33', '1821001')
ERROR - 2022-01-21 11:42:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288704) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:42:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288704) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0005', 'Z752', '2022-01-21', 'WS', '20220121 11:42:10', '21023282170', '02', '1', 'Transaksi Sales', '4', '0', '20220121 11:42:10', '1821001')
ERROR - 2022-01-21 11:43:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288705) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:43:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288705) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0002', 'Z077', '2022-01-21', 'WS', '20220121 11:43:57', '10553180003', '03', '1', 'Transaksi Sales', '27', '0', '20220121 11:43:57', '1921011')
ERROR - 2022-01-21 11:45:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288706) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:45:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288706) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0002', 'D127', '2022-01-21', 'WS', '20220121 11:45:22', '10242191155', '02', '1', 'Transaksi Sales', '14', '0', '20220121 11:45:22', '1821001')
ERROR - 2022-01-21 11:45:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288707) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:45:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288707) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0002', 'D127', '2022-01-21', 'WS', '20220121 11:45:24', '10242191155', '02', '1', 'Transaksi Sales', '14', '0', '20220121 11:45:24', '1821001')
ERROR - 2022-01-21 11:46:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288708) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:46:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288708) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0004', 'Z714', '2022-01-21', 'WS', '20220121 11:46:48', '17143160003', '03', '1', 'Transaksi Sales Retur', '0', '14', '20220121 11:46:48', '1921011')
ERROR - 2022-01-21 11:49:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288709) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:49:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288709) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0003', 'Z044', '2022-01-21', 'WS', '20220121 11:49:28', '10442180518', '02', '1', 'Transaksi Sales', '8', '0', '20220121 11:49:28', '1821001')
ERROR - 2022-01-21 11:49:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288710) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:49:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288710) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0003', 'Z044', '2022-01-21', 'WS', '20220121 11:49:29', '10442180518', '02', '1', 'Transaksi Sales', '8', '0', '20220121 11:49:29', '1821001')
ERROR - 2022-01-21 11:51:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288711) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:51:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288711) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0007', 'Z032', '2022-01-21', 'WS', '20220121 11:51:17', '10322151052', '02', '1', 'Transaksi Sales', '36', '0', '20220121 11:51:17', '1821001')
ERROR - 2022-01-21 11:51:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288712) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:51:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288712) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0007', 'Z032', '2022-01-21', 'WS', '20220121 11:51:19', '10322151052', '02', '1', 'Transaksi Sales', '36', '0', '20220121 11:51:19', '1821001')
ERROR - 2022-01-21 11:51:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288713) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:51:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288713) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0007', 'Z032', '2022-01-21', 'WS', '20220121 11:51:21', '10322151052', '02', '1', 'Transaksi Sales', '36', '0', '20220121 11:51:21', '1821001')
ERROR - 2022-01-21 11:53:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288714) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 11:53:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288714) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.ALAL.0003', 'Z731', '2022-01-21', 'WS', '20220121 11:53:41', '22020001986', '02', '1', 'Transaksi Sales', '2', '0', '20220121 11:53:41', '1821001')
ERROR - 2022-01-21 12:01:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288715) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:01:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288715) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0004', 'Z714', '2022-01-21', 'WS', '20220121 12:01:47', '17143160003', '03', '1', 'Transaksi Sales Retur', '0', '14', '20220121 12:01:47', '1921011')
ERROR - 2022-01-21 12:01:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288716) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:01:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288716) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0004', 'Z714', '2022-01-21', 'WS', '20220121 12:01:49', '17143160003', '03', '1', 'Transaksi Sales Retur', '0', '14', '20220121 12:01:49', '1921011')
ERROR - 2022-01-21 12:06:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288717) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:06:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288717) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0009', 'Z032', '2022-01-21', 'WS', '20220121 12:06:20', '10322171369', '02', '1', 'Transaksi Sales', '26', '0', '20220121 12:06:20', '1821001')
ERROR - 2022-01-21 12:12:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288718) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:12:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288718) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0007', 'Z752', '2022-01-21', 'WS', '20220121 12:12:09', '20020264663', '02', '1', 'Transaksi Sales', '6', '0', '20220121 12:12:09', '1821001')
ERROR - 2022-01-21 12:16:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288719) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:16:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288719) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0005', 'Z714', '2022-01-21', 'WS', '20220121 12:16:48', '17143160003', '03', '1', 'Transaksi Sales', '19', '0', '20220121 12:16:48', '1921011')
ERROR - 2022-01-21 12:16:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288720) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:16:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288720) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0005', 'Z714', '2022-01-21', 'WS', '20220121 12:16:50', '17143160003', '03', '1', 'Transaksi Sales', '19', '0', '20220121 12:16:50', '1921011')
ERROR - 2022-01-21 12:25:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288721) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:25:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288721) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0006', 'Z045', '2022-01-21', 'WS', '20220121 12:25:16', '10452160595', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:25:16', '1821001')
ERROR - 2022-01-21 12:28:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288722) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:28:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288722) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0003', 'Z077', '2022-01-21', 'WS', '20220121 12:28:56', '20020216341', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:28:56', '1821001')
ERROR - 2022-01-21 12:28:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288723) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:28:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288723) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0003', 'Z077', '2022-01-21', 'WS', '20220121 12:28:58', '20020216341', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:28:58', '1821001')
ERROR - 2022-01-21 12:29:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288724) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:29:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288724) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0005', 'Z075', '2022-01-21', 'WS', '20220121 12:29:38', '20020240038', '02', '1', 'Transaksi Sales', '42', '0', '20220121 12:29:38', '1821001')
ERROR - 2022-01-21 12:29:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288725) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:29:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288725) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0005', 'Z075', '2022-01-21', 'WS', '20220121 12:29:40', '20020240038', '02', '1', 'Transaksi Sales', '42', '0', '20220121 12:29:40', '1821001')
ERROR - 2022-01-21 12:29:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288726) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:29:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288726) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0005', 'Z075', '2022-01-21', 'WS', '20220121 12:29:42', '20020240038', '02', '1', 'Transaksi Sales', '42', '0', '20220121 12:29:42', '1821001')
ERROR - 2022-01-21 12:29:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288727) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:29:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288727) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0005', 'Z075', '2022-01-21', 'WS', '20220121 12:29:43', '20020240038', '02', '1', 'Transaksi Sales', '42', '0', '20220121 12:29:43', '1821001')
ERROR - 2022-01-21 12:32:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288728) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:32:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288728) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0001', 'Z033', '2022-01-21', 'WS', '20220121 12:32:05', '201417526', '02', '1', 'Transaksi Sales', '30', '0', '20220121 12:32:05', '1821001')
ERROR - 2022-01-21 12:32:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288729) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:32:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288729) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0001', 'Z033', '2022-01-21', 'WS', '20220121 12:32:06', '201417526', '02', '1', 'Transaksi Sales', '30', '0', '20220121 12:32:06', '1821001')
ERROR - 2022-01-21 12:32:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288730) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:32:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288730) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0001', 'Z033', '2022-01-21', 'WS', '20220121 12:32:08', '201417526', '02', '1', 'Transaksi Sales', '30', '0', '20220121 12:32:08', '1821001')
ERROR - 2022-01-21 12:32:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288731) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:32:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288731) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0001', 'Z033', '2022-01-21', 'WS', '20220121 12:32:10', '201417526', '02', '1', 'Transaksi Sales', '30', '0', '20220121 12:32:10', '1821001')
ERROR - 2022-01-21 12:36:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288732) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:36:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288732) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0010', 'Z032', '2022-01-21', 'WS', '20220121 12:36:20', '10322190098', '02', '1', 'Transaksi Sales', '12', '0', '20220121 12:36:20', '1821001')
ERROR - 2022-01-21 12:36:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288733) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:36:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288733) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0010', 'Z032', '2022-01-21', 'WS', '20220121 12:36:22', '10322190098', '02', '1', 'Transaksi Sales', '12', '0', '20220121 12:36:22', '1821001')
ERROR - 2022-01-21 12:40:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288734) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:40:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288734) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0005', 'Z045', '2022-01-21', 'WS', '20220121 12:40:08', '10452151078', '02', '1', 'Transaksi Sales', '6', '0', '20220121 12:40:08', '1821001')
ERROR - 2022-01-21 12:40:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288735) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:40:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288735) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0006', 'Z045', '2022-01-21', 'WS', '20220121 12:40:10', '10452160595', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:40:10', '1821001')
ERROR - 2022-01-21 12:40:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288736) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:40:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288736) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0006', 'Z045', '2022-01-21', 'WS', '20220121 12:40:14', '10452160595', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:40:14', '1821001')
ERROR - 2022-01-21 12:42:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288737) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:42:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288737) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0009', 'Z752', '2022-01-21', 'WS', '20220121 12:42:10', '17522190121', '02', '1', 'Transaksi Sales', '8', '0', '20220121 12:42:10', '1821001')
ERROR - 2022-01-21 12:45:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288738) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:45:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288738) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0003', 'D127', '2022-01-21', 'WS', '20220121 12:45:22', '22020005175', '02', '1', 'Transaksi Sales', '34', '0', '20220121 12:45:22', '1821001')
ERROR - 2022-01-21 12:45:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288739) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:45:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288739) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0003', 'D127', '2022-01-21', 'WS', '20220121 12:45:24', '22020005175', '02', '1', 'Transaksi Sales', '34', '0', '20220121 12:45:24', '1821001')
ERROR - 2022-01-21 12:47:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288740) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:47:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288740) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.ALAL.0002', 'D130', '2022-01-21', 'WS', '20220121 12:47:00', '201417526', '02', '1', 'Transaksi Sales', '48', '0', '20220121 12:47:00', '1821001')
ERROR - 2022-01-21 12:55:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288741) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:55:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288741) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0007', 'Z047', '2022-01-21', 'WS', '20220121 12:55:58', '10472161648', '02', '1', 'Transaksi Sales', '12', '0', '20220121 12:55:58', '1821001')
ERROR - 2022-01-21 12:56:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288742) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:56:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288742) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0007', 'Z047', '2022-01-21', 'WS', '20220121 12:56:00', '10472161648', '02', '1', 'Transaksi Sales', '12', '0', '20220121 12:56:00', '1821001')
ERROR - 2022-01-21 12:58:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288743) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:58:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288743) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0004', 'Z077', '2022-01-21', 'WS', '20220121 12:58:56', '20020216341', '02', '1', 'Transaksi Sales', '14', '0', '20220121 12:58:56', '1821001')
ERROR - 2022-01-21 12:58:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288744) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 12:58:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288744) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0004', 'Z077', '2022-01-21', 'WS', '20220121 12:58:57', '20020216341', '02', '1', 'Transaksi Sales', '14', '0', '20220121 12:58:57', '1821001')
ERROR - 2022-01-21 13:02:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288745) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288745) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0002', 'Z033', '2022-01-21', 'WS', '20220121 13:02:05', '10332181442', '02', '1', 'Transaksi Sales', '8', '0', '20220121 13:02:05', '1821001')
ERROR - 2022-01-21 13:02:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288746) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288746) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0003', 'Z033', '2022-01-21', 'WS', '20220121 13:02:07', '10332163114', '02', '1', 'Transaksi Sales', '20', '0', '20220121 13:02:07', '1821001')
ERROR - 2022-01-21 13:02:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288747) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288747) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0003', 'Z033', '2022-01-21', 'WS', '20220121 13:02:09', '10332163114', '02', '1', 'Transaksi Sales', '20', '0', '20220121 13:02:09', '1821001')
ERROR - 2022-01-21 13:02:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288748) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288748) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0003', 'Z033', '2022-01-21', 'WS', '20220121 13:02:10', '10332163114', '02', '1', 'Transaksi Sales', '20', '0', '20220121 13:02:10', '1821001')
ERROR - 2022-01-21 13:02:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288749) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288749) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.ALAL.0001', 'D760', '2022-01-21', 'WS', '20220121 13:02:37', '17042150708', '02', '1', 'Transaksi Sales', '28', '0', '20220121 13:02:37', '1821001')
ERROR - 2022-01-21 13:02:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288750) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288750) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.ALAL.0001', 'D760', '2022-01-21', 'WS', '20220121 13:02:38', '17042150708', '02', '1', 'Transaksi Sales', '28', '0', '20220121 13:02:38', '1821001')
ERROR - 2022-01-21 13:02:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288751) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:02:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288751) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.ALAL.0001', 'D760', '2022-01-21', 'WS', '20220121 13:02:41', '17042150708', '02', '1', 'Transaksi Sales', '28', '0', '20220121 13:02:41', '1821001')
ERROR - 2022-01-21 13:06:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288752) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:06:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288752) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0011', 'Z032', '2022-01-21', 'WS', '20220121 13:06:20', '10322160579', '02', '1', 'Transaksi Sales', '38', '0', '20220121 13:06:20', '1821001')
ERROR - 2022-01-21 13:06:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288753) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:06:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288753) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0011', 'Z032', '2022-01-21', 'WS', '20220121 13:06:22', '10322160579', '02', '1', 'Transaksi Sales', '38', '0', '20220121 13:06:22', '1821001')
ERROR - 2022-01-21 13:06:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288754) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:06:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288754) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.ALAL.0011', 'Z032', '2022-01-21', 'WS', '20220121 13:06:24', '10322160579', '02', '1', 'Transaksi Sales', '38', '0', '20220121 13:06:24', '1821001')
ERROR - 2022-01-21 13:08:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288755) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:08:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288755) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.ALAL.0003', 'Z808', '2022-01-21', 'WS', '20220121 13:08:31', '20020301162', '02', '1', 'Transaksi Sales', '10', '0', '20220121 13:08:31', '1821001')
ERROR - 2022-01-21 13:08:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288756) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:08:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288756) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.ALAL.0003', 'Z808', '2022-01-21', 'WS', '20220121 13:08:33', '20020301162', '02', '1', 'Transaksi Sales', '10', '0', '20220121 13:08:33', '1821001')
ERROR - 2022-01-21 13:12:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288757) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:12:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288757) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0011', 'Z752', '2022-01-21', 'WS', '20220121 13:12:10', '17522151480', '02', '1', 'Transaksi Sales', '34', '0', '20220121 13:12:10', '1821001')
ERROR - 2022-01-21 13:15:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288758) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288758) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0002', 'Z081', '2022-01-21', 'WS', '20220121 13:15:00', '261211354', '02', '1', 'Transaksi Sales', '88', '0', '20220121 13:15:00', '1821001')
ERROR - 2022-01-21 13:15:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288759) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288759) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0002', 'Z081', '2022-01-21', 'WS', '20220121 13:15:02', '261211354', '02', '1', 'Transaksi Sales', '88', '0', '20220121 13:15:02', '1821001')
ERROR - 2022-01-21 13:15:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288760) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288760) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0002', 'Z081', '2022-01-21', 'WS', '20220121 13:15:04', '261211354', '02', '1', 'Transaksi Sales', '88', '0', '20220121 13:15:04', '1821001')
ERROR - 2022-01-21 13:15:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288761) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288761) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0002', 'Z081', '2022-01-21', 'WS', '20220121 13:15:06', '261211354', '02', '1', 'Transaksi Sales', '88', '0', '20220121 13:15:06', '1821001')
ERROR - 2022-01-21 13:15:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288762) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288762) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0004', 'Z081', '2022-01-21', 'WS', '20220121 13:15:08', '22020001894', '02', '1', 'Transaksi Sales', '30', '0', '20220121 13:15:08', '1821001')
ERROR - 2022-01-21 13:15:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288763) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288763) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0004', 'Z081', '2022-01-21', 'WS', '20220121 13:15:10', '22020001894', '02', '1', 'Transaksi Sales', '30', '0', '20220121 13:15:10', '1821001')
ERROR - 2022-01-21 13:15:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288764) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288764) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0004', 'Z081', '2022-01-21', 'WS', '20220121 13:15:12', '22020001894', '02', '1', 'Transaksi Sales', '30', '0', '20220121 13:15:12', '1821001')
ERROR - 2022-01-21 13:15:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288765) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288765) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0004', 'Z081', '2022-01-21', 'WS', '20220121 13:15:15', '22020001894', '02', '1', 'Transaksi Sales', '30', '0', '20220121 13:15:15', '1821001')
ERROR - 2022-01-21 13:15:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288766) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:15:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288766) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0004', 'Z081', '2022-01-21', 'WS', '20220121 13:15:17', '22020001894', '02', '1', 'Transaksi Sales', '30', '0', '20220121 13:15:17', '1821001')
ERROR - 2022-01-21 13:19:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288767) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:19:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288767) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0004', 'Z044', '2022-01-21', 'WS', '20220121 13:19:29', '10442161477', '02', '1', 'Transaksi Sales', '14', '0', '20220121 13:19:29', '1821001')
ERROR - 2022-01-21 13:19:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288768) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:19:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288768) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0004', 'Z044', '2022-01-21', 'WS', '20220121 13:19:31', '10442161477', '02', '1', 'Transaksi Sales', '14', '0', '20220121 13:19:31', '1821001')
ERROR - 2022-01-21 13:19:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288769) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:19:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288769) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.ALAL.0004', 'Z044', '2022-01-21', 'WS', '20220121 13:19:32', '10442161477', '02', '1', 'Transaksi Sales', '14', '0', '20220121 13:19:32', '1821001')
ERROR - 2022-01-21 13:19:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288770) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:19:36 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288770) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.ALAL.0004', 'Z057', '2022-01-21', 'WS', '20220121 13:19:36', '17092160137', '02', '1', 'Transaksi Sales', '50', '0', '20220121 13:19:36', '1821001')
ERROR - 2022-01-21 13:23:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288771) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:23:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288771) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z769.ALAL.0002', 'Z769', '2022-01-21', 'WS', '20220121 13:23:38', '21023275912', '02', '1', 'Transaksi Sales', '8', '0', '20220121 13:23:38', '1821001')
ERROR - 2022-01-21 13:31:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288772) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:31:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288772) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0008', 'Z714', '2022-01-21', 'WS', '20220121 13:31:51', '271412180', '02', '1', 'Transaksi Sales', '8', '0', '20220121 13:31:51', '1821001')
ERROR - 2022-01-21 13:38:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288773) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:38:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288773) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.ALAL.0004', 'Z731', '2022-01-21', 'WS', '20220121 13:38:41', '10212160805', '02', '1', 'Transaksi Sales', '16', '0', '20220121 13:38:41', '1821001')
ERROR - 2022-01-21 13:38:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288774) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:38:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288774) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.ALAL.0004', 'Z731', '2022-01-21', 'WS', '20220121 13:38:43', '10212160805', '02', '1', 'Transaksi Sales', '16', '0', '20220121 13:38:43', '1821001')
ERROR - 2022-01-21 13:38:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288775) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:38:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288775) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.ALAL.0004', 'Z731', '2022-01-21', 'WS', '20220121 13:38:45', '10212160805', '02', '1', 'Transaksi Sales', '16', '0', '20220121 13:38:45', '1821001')
ERROR - 2022-01-21 13:38:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288776) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:38:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288776) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.ALAL.0004', 'Z731', '2022-01-21', 'WS', '20220121 13:38:47', '10212160805', '02', '1', 'Transaksi Sales', '16', '0', '20220121 13:38:47', '1821001')
ERROR - 2022-01-21 13:50:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288777) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:50:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288777) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALAL.0007', 'Z045', '2022-01-21', 'WS', '20220121 13:50:49', '10452191366', '02', '1', 'Transaksi Sales', '18', '0', '20220121 13:50:49', '1821001')
ERROR - 2022-01-21 13:59:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288778) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 13:59:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288778) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0009', 'Z075', '2022-01-21', 'WS', '20220121 13:59:39', '10022160363', '02', '1', 'Transaksi Sales', '32', '0', '20220121 13:59:39', '1821001')
ERROR - 2022-01-21 14:01:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288779) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:01:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288779) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0006', 'Z714', '2022-01-21', 'WS', '20220121 14:01:51', '271410548', '02', '1', 'Transaksi Sales', '8', '0', '20220121 14:01:51', '1821001')
ERROR - 2022-01-21 14:01:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288780) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:01:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288780) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0009', 'Z714', '2022-01-21', 'WS', '20220121 14:01:53', '22020005201', '02', '1', 'Transaksi Sales', '20', '0', '20220121 14:01:53', '1821001')
ERROR - 2022-01-21 14:01:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288781) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:01:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288781) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0009', 'Z714', '2022-01-21', 'WS', '20220121 14:01:55', '22020005201', '02', '1', 'Transaksi Sales', '20', '0', '20220121 14:01:55', '1821001')
ERROR - 2022-01-21 14:01:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288782) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:01:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288782) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.ALAL.0009', 'Z714', '2022-01-21', 'WS', '20220121 14:01:57', '22020005201', '02', '1', 'Transaksi Sales', '20', '0', '20220121 14:01:57', '1821001')
ERROR - 2022-01-21 14:14:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288783) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288783) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0004', 'Z722', '2022-01-21', 'WS', '20220121 14:14:06', '20020220359', '02', '1', 'Transaksi Sales', '26', '0', '20220121 14:14:06', '1821001')
ERROR - 2022-01-21 14:14:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288784) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288784) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0009', 'Z075', '2022-01-21', 'WS', '20220121 14:14:37', '10022160363', '02', '1', 'Transaksi Sales', '32', '0', '20220121 14:14:37', '1821001')
ERROR - 2022-01-21 14:14:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288785) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288785) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0009', 'Z075', '2022-01-21', 'WS', '20220121 14:14:39', '10022160363', '02', '1', 'Transaksi Sales', '32', '0', '20220121 14:14:39', '1821001')
ERROR - 2022-01-21 14:14:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288786) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288786) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0009', 'Z075', '2022-01-21', 'WS', '20220121 14:14:40', '10022160363', '02', '1', 'Transaksi Sales', '32', '0', '20220121 14:14:40', '1821001')
ERROR - 2022-01-21 14:14:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288787) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288787) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0009', 'Z075', '2022-01-21', 'WS', '20220121 14:14:42', '10022160363', '02', '1', 'Transaksi Sales', '32', '0', '20220121 14:14:42', '1821001')
ERROR - 2022-01-21 14:14:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288788) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288788) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0005', 'Z081', '2022-01-21', 'WS', '20220121 14:14:56', '10232172651', '02', '1', 'Transaksi Sales', '26', '0', '20220121 14:14:56', '1821001')
ERROR - 2022-01-21 14:14:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288789) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:14:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288789) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0005', 'Z081', '2022-01-21', 'WS', '20220121 14:14:58', '10232172651', '02', '1', 'Transaksi Sales', '26', '0', '20220121 14:14:58', '1821001')
ERROR - 2022-01-21 14:15:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288790) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:15:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288790) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0005', 'Z081', '2022-01-21', 'WS', '20220121 14:15:00', '10232172651', '02', '1', 'Transaksi Sales', '26', '0', '20220121 14:15:00', '1821001')
ERROR - 2022-01-21 14:15:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288791) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:15:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288791) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.ALAL.0005', 'Z081', '2022-01-21', 'WS', '20220121 14:15:02', '10232172651', '02', '1', 'Transaksi Sales', '26', '0', '20220121 14:15:02', '1821001')
ERROR - 2022-01-21 14:22:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288792) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:22:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288792) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.ALAL.0007', 'Z808', '2022-01-21', 'WS', '20220121 14:22:11', '18082180480', '02', '1', 'Transaksi Sales', '24', '0', '20220121 14:22:11', '1821001')
ERROR - 2022-01-21 14:22:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288793) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:22:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288793) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.ALAL.0007', 'Z808', '2022-01-21', 'WS', '20220121 14:22:13', '18082180480', '02', '1', 'Transaksi Sales', '24', '0', '20220121 14:22:13', '1821001')
ERROR - 2022-01-21 14:22:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288794) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:22:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288794) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.ALAL.0007', 'Z808', '2022-01-21', 'WS', '20220121 14:22:15', '18082180480', '02', '1', 'Transaksi Sales', '24', '0', '20220121 14:22:15', '1821001')
ERROR - 2022-01-21 14:29:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288795) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:29:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288795) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:29:38', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:29:38', '1821001')
ERROR - 2022-01-21 14:32:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288796) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:32:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288796) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.ALAL.0003', 'D130', '2022-01-21', 'WS', '20220121 14:32:04', '21023170005', '03', '1', 'Transaksi Sales', '48', '0', '20220121 14:32:04', '1921011')
ERROR - 2022-01-21 14:32:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288797) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:32:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288797) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.ALAL.0006', 'Z712', '2022-01-21', 'WS', '20220121 14:32:20', '17122171397', '02', '1', 'Transaksi Sales', '8', '0', '20220121 14:32:20', '1821001')
ERROR - 2022-01-21 14:44:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288798) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:44:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288798) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:44:37', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:44:37', '1821001')
ERROR - 2022-01-21 14:44:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288799) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:44:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288799) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:44:39', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:44:39', '1821001')
ERROR - 2022-01-21 14:44:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288800) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:44:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288800) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:44:40', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:44:40', '1821001')
ERROR - 2022-01-21 14:44:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288801) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:44:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288801) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:44:42', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:44:42', '1821001')
ERROR - 2022-01-21 14:44:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288802) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:44:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288802) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z075.ALAL.0010', 'Z075', '2022-01-21', 'WS', '20220121 14:44:44', '201010001', '02', '1', 'Transaksi Sales', '58', '0', '20220121 14:44:44', '1821001')
ERROR - 2022-01-21 14:47:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288803) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288803) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:10', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:10', '1821001')
ERROR - 2022-01-21 14:47:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288804) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288804) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:12', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:12', '1821001')
ERROR - 2022-01-21 14:47:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288805) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288805) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:14', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:14', '1821001')
ERROR - 2022-01-21 14:47:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288806) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288806) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:16', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:16', '1821001')
ERROR - 2022-01-21 14:47:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288807) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288807) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:18', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:18', '1821001')
ERROR - 2022-01-21 14:47:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288808) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288808) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:20', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:20', '1821001')
ERROR - 2022-01-21 14:47:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288809) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:47:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288809) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0006', 'Z033', '2022-01-21', 'WS', '20220121 14:47:22', '10332163503', '02', '1', 'Transaksi Sales', '42', '0', '20220121 14:47:22', '1821001')
ERROR - 2022-01-21 14:48:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288810) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:48:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288810) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z817.ALAL.0001', 'Z817', '2022-01-21', 'WS', '20220121 14:48:10', '21023252171', '02', '1', 'Transaksi Sales', '4', '0', '20220121 14:48:10', '1821001')
ERROR - 2022-01-21 14:57:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288811) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 14:57:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288811) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.ALAL.0016', 'Z752', '2022-01-21', 'WS', '20220121 14:57:11', '21023291519', '02', '1', 'Transaksi Sales', '8', '0', '20220121 14:57:11', '1821001')
ERROR - 2022-01-21 15:00:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288812) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:00:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288812) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.ALAL.0006', 'D127', '2022-01-21', 'WS', '20220121 15:00:28', '21023224839', '02', '1', 'Transaksi Sales', '18', '0', '20220121 15:00:28', '1821001')
ERROR - 2022-01-21 15:09:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288813) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:09:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288813) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z831.ALAL.0001', 'Z831', '2022-01-21', 'WS', '20220121 15:09:23', '21242170147', '02', '1', 'Transaksi Sales', '4', '0', '20220121 15:09:23', '1821001')
ERROR - 2022-01-21 15:09:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288814) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:09:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288814) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z831.ALAL.0002', 'Z831', '2022-01-21', 'WS', '20220121 15:09:25', '20020239760', '02', '1', 'Transaksi Sales', '16', '0', '20220121 15:09:25', '1821001')
ERROR - 2022-01-21 15:09:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288815) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:09:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288815) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z831.ALAL.0002', 'Z831', '2022-01-21', 'WS', '20220121 15:09:27', '20020239760', '02', '1', 'Transaksi Sales', '16', '0', '20220121 15:09:27', '1821001')
ERROR - 2022-01-21 15:11:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288816) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:11:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288816) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z736.ALAL.0002', 'Z736', '2022-01-21', 'WS', '20220121 15:11:31', '22020005223', '02', '1', 'Transaksi Sales', '50', '0', '20220121 15:11:31', '1821001')
ERROR - 2022-01-21 15:11:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288817) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 15:11:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288817) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z736.ALAL.0002', 'Z736', '2022-01-21', 'WS', '20220121 15:11:33', '22020005223', '02', '1', 'Transaksi Sales', '50', '0', '20220121 15:11:33', '1821001')
ERROR - 2022-01-21 16:02:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288840) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:02:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288840) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALAL.0008', 'Z033', '2022-01-21', 'WS', '20220121 16:02:05', '201411373', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:02:05', '1821001')
ERROR - 2022-01-21 16:08:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288843) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:08:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288843) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z817.ALAL.0001', 'Z817', '2022-01-21', 'WS', '20220121 16:08:24', '21023252171', '02', '1', 'Transaksi Sales', '4', '0', '20220121 16:08:24', '1821001')
ERROR - 2022-01-21 16:10:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288844) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:10:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288844) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAL.0008', 'Z047', '2022-01-21', 'WS', '20220121 16:10:58', '21023213786', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:10:58', '1821001')
ERROR - 2022-01-21 16:13:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288846) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:13:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288846) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.ALAL.0007', 'Z077', '2022-01-21', 'WS', '20220121 16:13:56', '17502180183', '02', '1', 'Transaksi Sales', '6', '0', '20220121 16:13:56', '1821001')
ERROR - 2022-01-21 16:17:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288847) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:17:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288847) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.ALAL.0013', 'Z010', '2022-01-21', 'WS', '20220121 16:17:28', '10642180564', '02', '1', 'Transaksi Sales', '8', '0', '20220121 16:17:28', '1821001')
ERROR - 2022-01-21 16:29:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288848) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:29:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288848) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0007', 'Z722', '2022-01-21', 'WS', '20220121 16:29:06', '22020003874', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:29:06', '1821001')
ERROR - 2022-01-21 16:29:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288849) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:29:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288849) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.ALAL.0007', 'Z722', '2022-01-21', 'WS', '20220121 16:29:08', '22020003874', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:29:08', '1821001')
ERROR - 2022-01-21 16:32:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288850) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:32:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288850) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0014', 'Z718', '2022-01-21', 'WS', '20220121 16:32:51', '10022150060', '02', '1', 'Transaksi Sales', '6', '0', '20220121 16:32:51', '1821001')
ERROR - 2022-01-21 16:32:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288851) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:32:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288851) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0016', 'Z718', '2022-01-21', 'WS', '20220121 16:32:53', '17182150051', '02', '1', 'Transaksi Sales', '30', '0', '20220121 16:32:53', '1821001')
ERROR - 2022-01-21 16:32:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288852) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:32:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288852) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0016', 'Z718', '2022-01-21', 'WS', '20220121 16:32:55', '17182150051', '02', '1', 'Transaksi Sales', '30', '0', '20220121 16:32:55', '1821001')
ERROR - 2022-01-21 16:32:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288853) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:32:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288853) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0016', 'Z718', '2022-01-21', 'WS', '20220121 16:32:57', '17182150051', '02', '1', 'Transaksi Sales', '30', '0', '20220121 16:32:57', '1821001')
ERROR - 2022-01-21 16:32:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288854) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:32:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288854) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0016', 'Z718', '2022-01-21', 'WS', '20220121 16:32:59', '17182150051', '02', '1', 'Transaksi Sales', '30', '0', '20220121 16:32:59', '1821001')
ERROR - 2022-01-21 16:33:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288855) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:01 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288855) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0016', 'Z718', '2022-01-21', 'WS', '20220121 16:33:01', '17182150051', '02', '1', 'Transaksi Sales', '30', '0', '20220121 16:33:01', '1821001')
ERROR - 2022-01-21 16:33:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288856) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288856) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0018', 'Z718', '2022-01-21', 'WS', '20220121 16:33:03', '10332172828', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:33:03', '1821001')
ERROR - 2022-01-21 16:33:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288857) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288857) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0018', 'Z718', '2022-01-21', 'WS', '20220121 16:33:05', '10332172828', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:33:05', '1821001')
ERROR - 2022-01-21 16:33:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288858) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288858) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0018', 'Z718', '2022-01-21', 'WS', '20220121 16:33:07', '10332172828', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:33:07', '1821001')
ERROR - 2022-01-21 16:33:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288859) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288859) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0018', 'Z718', '2022-01-21', 'WS', '20220121 16:33:09', '10332172828', '02', '1', 'Transaksi Sales', '16', '0', '20220121 16:33:09', '1821001')
ERROR - 2022-01-21 16:33:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288860) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288860) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0020', 'Z718', '2022-01-21', 'WS', '20220121 16:33:11', '200512863', '02', '1', 'Transaksi Sales', '4', '0', '20220121 16:33:11', '1821001')
ERROR - 2022-01-21 16:33:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288861) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 16:33:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288861) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.ALAL.0013', 'Z718', '2022-01-21', 'WS', '20220121 16:33:12', '271812834', '02', '1', 'Transaksi Sales Retur', '0', '6', '20220121 16:33:12', '1821001')
ERROR - 2022-01-21 23:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
ERROR - 2022-01-21 23:23:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2288928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-21 23:23:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2288928) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2022-01-21',
			'22020003907',
			now(),
			'22020003907',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '22020003907' AND "TransType" = 4 )
