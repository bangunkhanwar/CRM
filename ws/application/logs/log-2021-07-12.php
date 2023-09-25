<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-12 11:34:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-07-12 11:34:56 --> Unable to connect to the database
ERROR - 2021-07-12 11:35:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-07-12 11:35:01 --> Unable to connect to the database
ERROR - 2021-07-12 11:36:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-07-12 11:36:08 --> Unable to connect to the database
ERROR - 2021-07-12 11:36:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-07-12 11:36:08 --> Unable to connect to the database
ERROR - 2021-07-12 11:36:08 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-07-12 11:36:08 --> Unable to connect to the database
ERROR - 2021-07-12 11:36:08 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-07-12 11:36:08 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '082110818639'
				OR "tbl"."HP" = '082110818639' 
				OR tbl."BarCode" = '082110818639'
			)
 LIMIT 1
ERROR - 2021-07-12 11:36:08 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-07-12 13:12:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2116787) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-12 13:12:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2116787) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKGC.0001', 'Z805', '2021-07-12', 'WS', '20210712 13:12:15', '10602170338', '02', '1', 'Transaksi Sales', '6', '0', '20210712 13:12:15', '1821001')
ERROR - 2021-07-12 14:27:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2116802) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-12 14:27:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2116802) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKGC.0011', 'Z766', '2021-07-12', 'WS', '20210712 14:27:12', '20020219546', '02', '1', 'Transaksi Sales', '6', '0', '20210712 14:27:12', '1821001')
ERROR - 2021-07-12 15:57:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2116822) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-12 15:57:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2116822) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.AKGC.0002', 'Z808', '2021-07-12', 'WS', '20210712 15:57:10', '16682170573', '02', '1', 'Transaksi Sales', '4', '0', '20210712 15:57:10', '1821001')
