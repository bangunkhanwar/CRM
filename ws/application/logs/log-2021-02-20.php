<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-20 03:01:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1902644) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-20 03:01:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1902644) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKBJ.0011', 'Z032', '2021-02-19', 'WS', '20210220 03:01:14', '10322161970', '02', '1', 'Transaksi Sales', '34', '0', '20210220 03:01:14', '1821001')
ERROR - 2021-02-20 03:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1902645) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-20 03:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1902645) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKBJ.0016', 'Z032', '2021-02-19', 'WS', '20210220 03:01:16', '10622170780', '02', '1', 'Transaksi Sales', '34', '0', '20210220 03:01:16', '1821001')
ERROR - 2021-02-20 03:05:02 --> 404 Page Not Found: /index
ERROR - 2021-02-20 10:15:20 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:20 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:20 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:20 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:20 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-02-20 10:15:20 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:20 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:20 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-02-20 10:15:20 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-02-20 10:15:20 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-02-20 10:15:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:21 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:21 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:21 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-02-20 10:15:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 10:15:21 --> Unable to connect to the database
ERROR - 2021-02-20 10:15:21 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-02-20 10:15:21 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-02-20 10:15:21 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-02-20 11:05:43 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-02-20 11:05:43 --> Unable to connect to the database
ERROR - 2021-02-20 11:56:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1903290) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-20 11:56:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1903290) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKBK.0001', 'Z062', '2021-02-20', 'WS', '20210220 11:56:13', '10622171389', '02', '1', 'Transaksi Sales', '34', '0', '20210220 11:56:13', '1821001')
