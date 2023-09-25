<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-12 03:01:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1922360) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 03:01:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1922360) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCB.0008', 'Z045', '2021-03-11', 'WS', '20210312 03:01:17', '273311403', '02', '1', 'Transaksi Sales', '12', '0', '20210312 03:01:17', '1821001')
ERROR - 2021-03-12 03:01:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1922361) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 03:01:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1922361) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCB.0009', 'Z077', '2021-03-11', 'WS', '20210312 03:01:19', '20030313349', '03', '1', 'Transaksi Sales', '13', '0', '20210312 03:01:19', '1921011')
ERROR - 2021-03-12 03:01:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1922362) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 03:01:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1922362) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z054.AKCB.0008', 'Z054', '2021-03-11', 'WS', '20210312 03:01:20', '10232171057', '02', '1', 'Transaksi Sales', '30', '0', '20210312 03:01:20', '1821001')
ERROR - 2021-03-12 03:01:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1922363) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 03:01:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1922363) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z726.AKCB.0016', 'Z726', '2021-03-11', 'WS', '20210312 03:01:22', '272611701', '02', '1', 'Transaksi Sales', '18', '0', '20210312 03:01:22', '1821001')
ERROR - 2021-03-12 03:01:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1922364) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 03:01:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1922364) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z734.AKCB.0002', 'Z734', '2021-03-11', 'WS', '20210312 03:01:23', '17343180001', '03', '1', 'Transaksi Sales', '39', '0', '20210312 03:01:23', '1921011')
ERROR - 2021-03-12 03:06:47 --> 404 Page Not Found: /index
ERROR - 2021-03-12 07:50:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923199) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 07:50:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923199) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21023200613',
			now(),
			'21023200613',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023200613' AND "TransType" = 4 )
ERROR - 2021-03-12 09:39:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923199) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:39:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923199) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransDate", "CreateBy", "CreateTime", "MemberCode", "StoreCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate") VALUES ('2021-03-12', 'CRM Webservice', '2021-03-12 09:39:06', '21023198253', 'ZHO', '02', 5, 'Account Verify', 50, 0, '2021-03-12 09:39:06')
ERROR - 2021-03-12 09:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923200) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:44:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923200) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKCC.0001', 'Z704', '2021-03-12', 'WS', '20210312 09:44:53', '17042171756', '02', '1', 'Transaksi Sales', '6', '0', '20210312 09:44:53', '1821001')
ERROR - 2021-03-12 09:47:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:16 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:21 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:26 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:31 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:36 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:41 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:46 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:51 --> Unable to connect to the database
ERROR - 2021-03-12 09:47:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:47:56 --> Unable to connect to the database
ERROR - 2021-03-12 09:48:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:48:01 --> Unable to connect to the database
ERROR - 2021-03-12 09:48:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:48:06 --> Unable to connect to the database
ERROR - 2021-03-12 09:48:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:48:11 --> Unable to connect to the database
ERROR - 2021-03-12 09:48:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-12 09:48:16 --> Unable to connect to the database
ERROR - 2021-03-12 09:49:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923201) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:49:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923201) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0001', 'Z830', '2021-03-12', 'WS', '20210312 09:49:03', '17682170053', '02', '1', 'Transaksi Sales', '24', '0', '20210312 09:49:03', '1821001')
ERROR - 2021-03-12 09:49:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923202) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:49:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923202) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0001', 'Z830', '2021-03-12', 'WS', '20210312 09:49:05', '17682170053', '02', '1', 'Transaksi Sales', '24', '0', '20210312 09:49:05', '1821001')
ERROR - 2021-03-12 09:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:55:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:55:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'200913001',
			now(),
			'200913001',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '200913001' AND "TransType" = 4 )
ERROR - 2021-03-12 09:56:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923205) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 09:56:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923205) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0001', 'Z807', '2021-03-12', 'WS', '20210312 09:56:16', '21023200617', '02', '1', 'Transaksi Sales', '32', '0', '20210312 09:56:16', '1821001')
ERROR - 2021-03-12 10:44:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923228) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:44:52 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923228) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKCC.0002', 'Z704', '2021-03-12', 'WS', '20210312 10:44:52', '17042161533', '02', '1', 'Transaksi Sales', '8', '0', '20210312 10:44:52', '1821001')
ERROR - 2021-03-12 10:50:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923232) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:50:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923232) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKCC.0003', 'Z826', '2021-03-12', 'WS', '20210312 10:50:10', '20020254377', '02', '1', 'Transaksi Sales', '2', '0', '20210312 10:50:10', '1821001')
ERROR - 2021-03-12 10:50:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923233) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:50:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923233) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKCC.0003', 'Z826', '2021-03-12', 'WS', '20210312 10:50:12', '20020254377', '02', '1', 'Transaksi Sales', '2', '0', '20210312 10:50:12', '1821001')
ERROR - 2021-03-12 10:53:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923237) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:53:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923237) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKCC.0002', 'Z766', '2021-03-12', 'WS', '20210312 10:53:43', '17662161394', '02', '1', 'Transaksi Sales', '8', '0', '20210312 10:53:43', '1821001')
ERROR - 2021-03-12 10:56:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923238) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:56:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923238) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0003', 'Z807', '2021-03-12', 'WS', '20210312 10:56:03', '21023200623', '02', '1', 'Transaksi Sales', '18', '0', '20210312 10:56:03', '1821001')
ERROR - 2021-03-12 10:56:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923239) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:56:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923239) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0003', 'Z807', '2021-03-12', 'WS', '20210312 10:56:05', '21023200623', '02', '1', 'Transaksi Sales', '18', '0', '20210312 10:56:05', '1821001')
ERROR - 2021-03-12 10:56:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923240) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:56:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923240) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0003', 'Z807', '2021-03-12', 'WS', '20210312 10:56:06', '21023200623', '02', '1', 'Transaksi Sales', '18', '0', '20210312 10:56:06', '1821001')
ERROR - 2021-03-12 10:56:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923241) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 10:56:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923241) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0003', 'Z807', '2021-03-12', 'WS', '20210312 10:56:08', '21023200623', '02', '1', 'Transaksi Sales', '18', '0', '20210312 10:56:08', '1821001')
ERROR - 2021-03-12 11:00:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923243) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:00:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923243) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCC.0003', 'Z045', '2021-03-12', 'WS', '20210312 11:00:34', '10452163082', '02', '1', 'Transaksi Sales', '6', '0', '20210312 11:00:34', '1821001')
ERROR - 2021-03-12 11:02:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923244) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:02:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923244) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKCC.0001', 'Z722', '2021-03-12', 'WS', '20210312 11:02:09', '21272180857', '02', '1', 'Transaksi Sales', '8', '0', '20210312 11:02:09', '1821001')
ERROR - 2021-03-12 11:02:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923245) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:02:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923245) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0005', 'D132', '2021-03-12', 'WS', '20210312 11:02:46', '10392162177', '02', '1', 'Transaksi Sales', '12', '0', '20210312 11:02:46', '1821001')
ERROR - 2021-03-12 11:02:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923246) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:02:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923246) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0005', 'D132', '2021-03-12', 'WS', '20210312 11:02:48', '10392162177', '02', '1', 'Transaksi Sales', '12', '0', '20210312 11:02:48', '1821001')
ERROR - 2021-03-12 11:06:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923249) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923249) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0003', 'Z033', '2021-03-12', 'WS', '20210312 11:06:03', '10332163016', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:06:03', '1821001')
ERROR - 2021-03-12 11:06:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923250) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923250) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0003', 'Z033', '2021-03-12', 'WS', '20210312 11:06:05', '10332163016', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:06:05', '1821001')
ERROR - 2021-03-12 11:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923251) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923251) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0003', 'Z033', '2021-03-12', 'WS', '20210312 11:06:06', '10332163016', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:06:06', '1821001')
ERROR - 2021-03-12 11:06:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923252) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923252) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0003', 'Z033', '2021-03-12', 'WS', '20210312 11:06:08', '10332163016', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:06:08', '1821001')
ERROR - 2021-03-12 11:06:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923253) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923253) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0003', 'Z033', '2021-03-12', 'WS', '20210312 11:06:10', '10332163016', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:06:10', '1821001')
ERROR - 2021-03-12 11:06:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923254) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:06:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923254) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0003', 'Z077', '2021-03-12', 'WS', '20210312 11:06:37', '10082182082', '02', '1', 'Transaksi Sales', '10', '0', '20210312 11:06:37', '1821001')
ERROR - 2021-03-12 11:15:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923258) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:15:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923258) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z803.AKCC.0002', 'Z803', '2021-03-12', 'WS', '20210312 11:15:16', '18032170306', '02', '1', 'Transaksi Sales', '16', '0', '20210312 11:15:16', '1821001')
ERROR - 2021-03-12 11:15:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923259) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:15:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923259) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.AKCC.0003', 'Z712', '2021-03-12', 'WS', '20210312 11:15:59', '210311050', '02', '1', 'Transaksi Sales', '12', '0', '20210312 11:15:59', '1821001')
ERROR - 2021-03-12 11:18:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923260) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:18:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923260) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0004', 'Z830', '2021-03-12', 'WS', '20210312 11:18:43', '21023200624', '02', '1', 'Transaksi Sales', '24', '0', '20210312 11:18:43', '1821001')
ERROR - 2021-03-12 11:18:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923261) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:18:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923261) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0005', 'Z830', '2021-03-12', 'WS', '20210312 11:18:45', '21023194819', '02', '1', 'Transaksi Sales', '16', '0', '20210312 11:18:45', '1821001')
ERROR - 2021-03-12 11:20:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923262) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:20:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923262) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKCC.0005', 'Z032', '2021-03-12', 'WS', '20210312 11:20:35', '10322160140', '02', '1', 'Transaksi Sales', '14', '0', '20210312 11:20:35', '1821001')
ERROR - 2021-03-12 11:22:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923263) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:22:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923263) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKCC.0002', 'Z805', '2021-03-12', 'WS', '20210312 11:22:38', '21023200600', '02', '1', 'Transaksi Sales', '44', '0', '20210312 11:22:38', '1821001')
ERROR - 2021-03-12 11:22:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923264) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:22:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923264) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKCC.0002', 'Z805', '2021-03-12', 'WS', '20210312 11:22:40', '21023200600', '02', '1', 'Transaksi Sales', '44', '0', '20210312 11:22:40', '1821001')
ERROR - 2021-03-12 11:23:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923265) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:23:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923265) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0003', 'D130', '2021-03-12', 'WS', '20210312 11:23:21', '201413393', '02', '1', 'Transaksi Sales', '36', '0', '20210312 11:23:21', '1821001')
ERROR - 2021-03-12 11:23:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923266) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:23:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923266) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0003', 'D130', '2021-03-12', 'WS', '20210312 11:23:23', '201413393', '02', '1', 'Transaksi Sales', '36', '0', '20210312 11:23:23', '1821001')
ERROR - 2021-03-12 11:23:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923267) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:23:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923267) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0003', 'D130', '2021-03-12', 'WS', '20210312 11:23:26', '201413393', '02', '1', 'Transaksi Sales', '36', '0', '20210312 11:23:26', '1821001')
ERROR - 2021-03-12 11:23:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923268) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:23:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923268) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.AKCC.0002', 'D121', '2021-03-12', 'WS', '20210312 11:23:43', '10342151484', '02', '1', 'Transaksi Sales', '6', '0', '20210312 11:23:43', '1821001')
ERROR - 2021-03-12 11:27:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923269) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:27:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923269) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0003', 'Z010', '2021-03-12', 'WS', '20210312 11:27:44', '19020062026', '02', '1', 'Transaksi Sales', '26', '0', '20210312 11:27:44', '1821001')
ERROR - 2021-03-12 11:27:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923270) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:27:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923270) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0003', 'Z010', '2021-03-12', 'WS', '20210312 11:27:46', '19020062026', '02', '1', 'Transaksi Sales', '26', '0', '20210312 11:27:46', '1821001')
ERROR - 2021-03-12 11:27:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923271) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:27:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923271) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0003', 'Z010', '2021-03-12', 'WS', '20210312 11:27:49', '19020062026', '02', '1', 'Transaksi Sales', '26', '0', '20210312 11:27:49', '1821001')
ERROR - 2021-03-12 11:27:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923272) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:27:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923272) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0003', 'Z010', '2021-03-12', 'WS', '20210312 11:27:51', '19020062026', '02', '1', 'Transaksi Sales', '26', '0', '20210312 11:27:51', '1821001')
ERROR - 2021-03-12 11:27:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923273) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:27:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923273) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0003', 'Z010', '2021-03-12', 'WS', '20210312 11:27:53', '19020062026', '02', '1', 'Transaksi Sales', '26', '0', '20210312 11:27:53', '1821001')
ERROR - 2021-03-12 11:28:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923274) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923274) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:13', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:13', '1821001')
ERROR - 2021-03-12 11:28:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923275) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923275) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:16', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:16', '1821001')
ERROR - 2021-03-12 11:28:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923276) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923276) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:18', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:18', '1821001')
ERROR - 2021-03-12 11:28:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923277) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923277) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:20', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:20', '1821001')
ERROR - 2021-03-12 11:28:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923278) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923278) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:22', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:22', '1821001')
ERROR - 2021-03-12 11:28:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923279) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923279) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:25', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:25', '1821001')
ERROR - 2021-03-12 11:28:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923280) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923280) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:27', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:27', '1821001')
ERROR - 2021-03-12 11:28:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923281) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:28:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923281) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0001', 'Z731', '2021-03-12', 'WS', '20210312 11:28:29', '10212171144', '02', '1', 'Transaksi Sales', '30', '0', '20210312 11:28:29', '1821001')
ERROR - 2021-03-12 11:32:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923282) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:32:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923282) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKCC.0002', 'Z722', '2021-03-12', 'WS', '20210312 11:32:11', '21272180857', '02', '1', 'Transaksi Sales', '12', '0', '20210312 11:32:11', '1821001')
ERROR - 2021-03-12 11:32:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923283) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:32:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923283) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0009', 'D132', '2021-03-12', 'WS', '20210312 11:32:47', '21023190267', '02', '1', 'Transaksi Sales', '18', '0', '20210312 11:32:47', '1821001')
ERROR - 2021-03-12 11:32:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923284) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:32:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923284) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0009', 'D132', '2021-03-12', 'WS', '20210312 11:32:49', '21023190267', '02', '1', 'Transaksi Sales', '18', '0', '20210312 11:32:49', '1821001')
ERROR - 2021-03-12 11:35:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923285) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:35:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923285) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D108.AKCB.0001', 'D108', '2021-03-11', 'WS', '20210312 11:35:55', '210810288', '02', '1', 'Transaksi Sales', '60', '0', '20210312 11:35:55', '1821001')
ERROR - 2021-03-12 11:36:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923286) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:36:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923286) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D108.AKCB.0001', 'D108', '2021-03-11', 'WS', '20210312 11:36:08', '210810288', '02', '1', 'Transaksi Sales', '60', '0', '20210312 11:36:08', '1821001')
ERROR - 2021-03-12 11:36:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923287) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:36:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923287) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D108.AKCB.0001', 'D108', '2021-03-11', 'WS', '20210312 11:36:25', '210810288', '02', '1', 'Transaksi Sales', '60', '0', '20210312 11:36:25', '1821001')
ERROR - 2021-03-12 11:36:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923288) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:36:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923288) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D108.AKCB.0001', 'D108', '2021-03-11', 'WS', '20210312 11:36:37', '210810288', '02', '1', 'Transaksi Sales', '60', '0', '20210312 11:36:37', '1821001')
ERROR - 2021-03-12 11:36:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923289) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:36:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923289) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0006', 'Z077', '2021-03-12', 'WS', '20210312 11:36:44', '20020242092', '02', '1', 'Transaksi Sales', '18', '0', '20210312 11:36:44', '1821001')
ERROR - 2021-03-12 11:36:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923290) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 11:36:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923290) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0006', 'Z077', '2021-03-12', 'WS', '20210312 11:36:47', '20020242092', '02', '1', 'Transaksi Sales', '18', '0', '20210312 11:36:47', '1821001')
ERROR - 2021-03-12 12:03:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923307) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:03:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923307) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0010', 'D132', '2021-03-12', 'WS', '20210312 12:03:02', '21023191316', '02', '1', 'Transaksi Sales', '12', '0', '20210312 12:03:02', '1821001')
ERROR - 2021-03-12 12:16:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923313) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:16:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923313) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z706.AKCC.0004', 'Z706', '2021-03-12', 'WS', '20210312 12:16:19', '270612021', '02', '1', 'Transaksi Sales', '12', '0', '20210312 12:16:19', '1821001')
ERROR - 2021-03-12 12:18:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923314) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:18:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923314) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0005', 'Z714', '2021-03-12', 'WS', '20210312 12:18:13', '17142161327', '02', '1', 'Transaksi Sales', '28', '0', '20210312 12:18:13', '1821001')
ERROR - 2021-03-12 12:18:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923315) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:18:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923315) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0005', 'Z714', '2021-03-12', 'WS', '20210312 12:18:16', '17142161327', '02', '1', 'Transaksi Sales', '28', '0', '20210312 12:18:16', '1821001')
ERROR - 2021-03-12 12:18:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923316) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:18:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923316) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0005', 'Z714', '2021-03-12', 'WS', '20210312 12:18:19', '17142161327', '02', '1', 'Transaksi Sales', '28', '0', '20210312 12:18:19', '1821001')
ERROR - 2021-03-12 12:28:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923323) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:28:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923323) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0008', 'Z010', '2021-03-12', 'WS', '20210312 12:28:05', '17362160051', '02', '1', 'Transaksi Sales', '8', '0', '20210312 12:28:05', '1821001')
ERROR - 2021-03-12 12:36:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923333) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:36:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923333) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0008', 'Z077', '2021-03-12', 'WS', '20210312 12:36:40', '20020302710', '02', '1', 'Transaksi Sales', '48', '0', '20210312 12:36:40', '1821001')
ERROR - 2021-03-12 12:51:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923340) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:51:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923340) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKCC.0004', 'Z015', '2021-03-12', 'WS', '20210312 12:51:26', '10152160347', '02', '1', 'Transaksi Sales', '6', '0', '20210312 12:51:26', '1821001')
ERROR - 2021-03-12 12:51:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923341) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:51:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923342) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:51:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923341) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKCC.0005', 'Z015', '2021-03-12', 'WS', '20210312 12:51:30', '17262160904', '02', '1', 'Transaksi Sales', '10', '0', '20210312 12:51:30', '1821001')
ERROR - 2021-03-12 12:51:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923342) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0007', 'Z033', '2021-03-12', 'WS', '20210312 12:51:30', '201410551', '02', '1', 'Transaksi Sales', '6', '0', '20210312 12:51:30', '1821001')
ERROR - 2021-03-12 12:56:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923348) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 12:56:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923348) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z769.AKCC.0003', 'Z769', '2021-03-12', 'WS', '20210312 12:56:33', '17692190053', '02', '1', 'Transaksi Sales', '18', '0', '20210312 12:56:33', '1821001')
ERROR - 2021-03-12 13:06:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923356) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:06:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923356) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0009', 'Z077', '2021-03-12', 'WS', '20210312 13:06:51', '271315747', '02', '1', 'Transaksi Sales', '26', '0', '20210312 13:06:51', '1821001')
ERROR - 2021-03-12 13:06:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923357) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:06:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923357) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0009', 'Z077', '2021-03-12', 'WS', '20210312 13:06:56', '271315747', '02', '1', 'Transaksi Sales', '26', '0', '20210312 13:06:56', '1821001')
ERROR - 2021-03-12 13:08:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923360) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:08:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923360) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKCC.0005', 'Z766', '2021-03-12', 'WS', '20210312 13:08:58', '21023200709', '02', '1', 'Transaksi Sales', '40', '0', '20210312 13:08:58', '1821001')
ERROR - 2021-03-12 13:20:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923362) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:20:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923362) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0003', 'Z061', '2021-03-12', 'WS', '20210312 13:20:37', '10612160401', '02', '1', 'Transaksi Sales', '42', '0', '20210312 13:20:37', '1821001')
ERROR - 2021-03-12 13:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923363) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:20:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923363) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0003', 'Z061', '2021-03-12', 'WS', '20210312 13:20:41', '10612160401', '02', '1', 'Transaksi Sales', '42', '0', '20210312 13:20:41', '1821001')
ERROR - 2021-03-12 13:20:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923364) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:20:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923364) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0003', 'Z061', '2021-03-12', 'WS', '20210312 13:20:46', '10612160401', '02', '1', 'Transaksi Sales', '42', '0', '20210312 13:20:46', '1821001')
ERROR - 2021-03-12 13:20:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923365) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:20:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923365) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0003', 'Z061', '2021-03-12', 'WS', '20210312 13:20:50', '10612160401', '02', '1', 'Transaksi Sales', '42', '0', '20210312 13:20:50', '1821001')
ERROR - 2021-03-12 13:20:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923366) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:20:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923366) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0003', 'Z061', '2021-03-12', 'WS', '20210312 13:20:53', '10612160401', '02', '1', 'Transaksi Sales', '42', '0', '20210312 13:20:53', '1821001')
ERROR - 2021-03-12 13:21:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923367) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:21:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923367) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0009', 'Z033', '2021-03-12', 'WS', '20210312 13:21:47', '201414123', '02', '1', 'Transaksi Sales', '14', '0', '20210312 13:21:47', '1821001')
ERROR - 2021-03-12 13:21:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923368) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:21:52 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923368) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0009', 'Z033', '2021-03-12', 'WS', '20210312 13:21:52', '201414123', '02', '1', 'Transaksi Sales', '14', '0', '20210312 13:21:52', '1821001')
ERROR - 2021-03-12 13:21:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923369) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:21:54 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923369) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0011', 'Z033', '2021-03-12', 'WS', '20210312 13:21:54', '201410607', '02', '1', 'Transaksi Sales', '62', '0', '20210312 13:21:54', '1821001')
ERROR - 2021-03-12 13:23:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923374) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:23:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923374) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0008', 'Z752', '2021-03-12', 'WS', '20210312 13:23:00', '17522190288', '02', '1', 'Transaksi Sales', '16', '0', '20210312 13:23:00', '1821001')
ERROR - 2021-03-12 13:27:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923376) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:27:54 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923376) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0013', 'Z010', '2021-03-12', 'WS', '20210312 13:27:54', '201011387', '02', '1', 'Transaksi Sales', '58', '0', '20210312 13:27:54', '1821001')
ERROR - 2021-03-12 13:27:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923377) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:27:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923377) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0013', 'Z010', '2021-03-12', 'WS', '20210312 13:27:58', '201011387', '02', '1', 'Transaksi Sales', '58', '0', '20210312 13:27:58', '1821001')
ERROR - 2021-03-12 13:28:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923378) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:28:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923378) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0013', 'Z010', '2021-03-12', 'WS', '20210312 13:28:00', '201011387', '02', '1', 'Transaksi Sales', '58', '0', '20210312 13:28:00', '1821001')
ERROR - 2021-03-12 13:28:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923379) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:28:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923379) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0013', 'Z010', '2021-03-12', 'WS', '20210312 13:28:03', '201011387', '02', '1', 'Transaksi Sales', '58', '0', '20210312 13:28:03', '1821001')
ERROR - 2021-03-12 13:33:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923382) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:33:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923382) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0007', 'Z714', '2021-03-12', 'WS', '20210312 13:33:13', '17142151059', '02', '1', 'Transaksi Sales', '8', '0', '20210312 13:33:13', '1821001')
ERROR - 2021-03-12 13:33:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923383) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:33:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923383) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0007', 'Z714', '2021-03-12', 'WS', '20210312 13:33:17', '17142151059', '02', '1', 'Transaksi Sales', '8', '0', '20210312 13:33:17', '1821001')
ERROR - 2021-03-12 13:51:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923394) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:51:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923394) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0014', 'Z033', '2021-03-12', 'WS', '20210312 13:51:18', '10142170724', '02', '1', 'Transaksi Sales', '12', '0', '20210312 13:51:18', '1821001')
ERROR - 2021-03-12 13:58:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923400) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:58:01 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923400) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKCC.0005', 'Z057', '2021-03-12', 'WS', '20210312 13:58:01', '20020310939', '02', '1', 'Transaksi Sales', '18', '0', '20210312 13:58:01', '1821001')
ERROR - 2021-03-12 13:58:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923403) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 13:58:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923403) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0015', 'Z010', '2021-03-12', 'WS', '20210312 13:58:39', '201011387', '02', '1', 'Transaksi Sales', '30', '0', '20210312 13:58:39', '1821001')
ERROR - 2021-03-12 14:06:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923413) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:06:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923413) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0014', 'Z077', '2021-03-12', 'WS', '20210312 14:06:48', '19020034541', '02', '1', 'Transaksi Sales', '2', '0', '20210312 14:06:48', '1821001')
ERROR - 2021-03-12 14:09:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923421) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:09:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923421) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z728.AKCC.0003', 'Z728', '2021-03-12', 'WS', '20210312 14:09:48', '272910597', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:09:48', '1821001')
ERROR - 2021-03-12 14:13:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923423) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:13:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923423) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z711.AKCC.0001', 'Z711', '2021-03-12', 'WS', '20210312 14:13:45', '275512419', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:13:45', '1821001')
ERROR - 2021-03-12 14:13:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923424) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:13:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923424) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z711.AKCC.0001', 'Z711', '2021-03-12', 'WS', '20210312 14:13:47', '275512419', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:13:47', '1821001')
ERROR - 2021-03-12 14:17:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923425) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923425) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0004', 'Z709', '2021-03-12', 'WS', '20210312 14:17:21', '270911021', '02', '1', 'Transaksi Sales', '62', '0', '20210312 14:17:21', '1821001')
ERROR - 2021-03-12 14:17:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923426) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923426) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0004', 'Z709', '2021-03-12', 'WS', '20210312 14:17:24', '270911021', '02', '1', 'Transaksi Sales', '62', '0', '20210312 14:17:24', '1821001')
ERROR - 2021-03-12 14:17:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923427) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923427) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0004', 'Z709', '2021-03-12', 'WS', '20210312 14:17:27', '270911021', '02', '1', 'Transaksi Sales', '62', '0', '20210312 14:17:27', '1821001')
ERROR - 2021-03-12 14:17:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923428) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923428) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKCC.0004', 'Z722', '2021-03-12', 'WS', '20210312 14:17:27', '21272180857', '02', '1', 'Transaksi Sales', '16', '0', '20210312 14:17:27', '1821001')
ERROR - 2021-03-12 14:17:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923429) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923429) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0006', 'Z709', '2021-03-12', 'WS', '20210312 14:17:32', '17092190171', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:17:32', '1821001')
ERROR - 2021-03-12 14:17:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923430) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923430) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0006', 'Z709', '2021-03-12', 'WS', '20210312 14:17:34', '17092190171', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:17:34', '1821001')
ERROR - 2021-03-12 14:17:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923431) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:17:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923431) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKCC.0006', 'Z709', '2021-03-12', 'WS', '20210312 14:17:37', '17092190171', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:17:37', '1821001')
ERROR - 2021-03-12 14:18:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923434) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:18:01 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923434) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKCC.0006', 'Z062', '2021-03-12', 'WS', '20210312 14:18:01', '21023200731', '02', '1', 'Transaksi Sales', '14', '0', '20210312 14:18:01', '1821001')
ERROR - 2021-03-12 14:21:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923436) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:21:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923436) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKCC.0007', 'Z044', '2021-03-12', 'WS', '20210312 14:21:21', '10442170236', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:21:21', '1821001')
ERROR - 2021-03-12 14:21:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923437) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:21:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923437) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0018', 'Z033', '2021-03-12', 'WS', '20210312 14:21:45', '10142171421', '02', '1', 'Transaksi Sales', '10', '0', '20210312 14:21:45', '1821001')
ERROR - 2021-03-12 14:21:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923438) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:21:47 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923438) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0019', 'Z033', '2021-03-12', 'WS', '20210312 14:21:47', '10142162452', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:21:47', '1821001')
ERROR - 2021-03-12 14:21:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923439) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:21:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923439) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0019', 'Z033', '2021-03-12', 'WS', '20210312 14:21:50', '10142162452', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:21:50', '1821001')
ERROR - 2021-03-12 14:21:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923442) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:21:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923442) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0022', 'Z033', '2021-03-12', 'WS', '20210312 14:21:59', '21023199602', '02', '1', 'Transaksi Sales', '28', '0', '20210312 14:21:59', '1821001')
ERROR - 2021-03-12 14:22:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923449) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:22:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923449) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCC.0010', 'Z045', '2021-03-12', 'WS', '20210312 14:22:35', '10452161816', '02', '1', 'Transaksi Sales', '18', '0', '20210312 14:22:35', '1821001')
ERROR - 2021-03-12 14:27:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923452) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:27:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923452) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:27:58', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:27:58', '1821001')
ERROR - 2021-03-12 14:28:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923453) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923453) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:28:00', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:28:00', '1821001')
ERROR - 2021-03-12 14:28:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923454) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923454) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:28:02', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:28:02', '1821001')
ERROR - 2021-03-12 14:28:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923455) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923455) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:28:04', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:28:04', '1821001')
ERROR - 2021-03-12 14:28:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923456) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923456) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:28:07', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:28:07', '1821001')
ERROR - 2021-03-12 14:28:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923457) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923457) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0020', 'Z010', '2021-03-12', 'WS', '20210312 14:28:09', '10642170565', '02', '1', 'Transaksi Sales', '24', '0', '20210312 14:28:09', '1821001')
ERROR - 2021-03-12 14:28:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923458) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:28:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923458) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0023', 'Z010', '2021-03-12', 'WS', '20210312 14:28:18', '10102190474', '02', '1', 'Transaksi Sales', '6', '0', '20210312 14:28:18', '1821001')
ERROR - 2021-03-12 14:31:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923460) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:31:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923460) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D126.AKCC.0005', 'D126', '2021-03-12', 'WS', '20210312 14:31:34', '21023200756', '02', '1', 'Transaksi Sales', '14', '0', '20210312 14:31:34', '1821001')
ERROR - 2021-03-12 14:31:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923461) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:31:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923461) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D126.AKCC.0005', 'D126', '2021-03-12', 'WS', '20210312 14:31:38', '21023200756', '02', '1', 'Transaksi Sales', '14', '0', '20210312 14:31:38', '1821001')
ERROR - 2021-03-12 14:32:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923463) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:32:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923463) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKCC.0006', 'Z722', '2021-03-12', 'WS', '20210312 14:32:10', '21023200286', '02', '1', 'Transaksi Sales', '6', '0', '20210312 14:32:10', '1821001')
ERROR - 2021-03-12 14:33:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923466) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:33:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923466) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0007', 'Z830', '2021-03-12', 'WS', '20210312 14:33:50', '17682180839', '02', '1', 'Transaksi Sales', '6', '0', '20210312 14:33:50', '1821001')
ERROR - 2021-03-12 14:33:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923467) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:33:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923467) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0008', 'Z830', '2021-03-12', 'WS', '20210312 14:33:53', '21023200769', '02', '1', 'Transaksi Sales', '8', '0', '20210312 14:33:53', '1821001')
ERROR - 2021-03-12 14:36:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923472) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:36:54 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923472) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0003', 'D127', '2021-03-12', 'WS', '20210312 14:36:54', '10242162543', '02', '1', 'Transaksi Sales', '14', '0', '20210312 14:36:54', '1821001')
ERROR - 2021-03-12 14:37:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923476) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:37:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923476) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0004', 'Z770', '2021-03-12', 'WS', '20210312 14:37:06', '21023199235', '02', '1', 'Transaksi Sales', '14', '0', '20210312 14:37:06', '1821001')
ERROR - 2021-03-12 14:38:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923482) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:38:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923482) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0015', 'Z752', '2021-03-12', 'WS', '20210312 14:38:21', '20020218110', '02', '1', 'Transaksi Sales', '114', '0', '20210312 14:38:21', '1821001')
ERROR - 2021-03-12 14:44:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923484) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:44:54 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923484) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKCC.0011', 'Z704', '2021-03-12', 'WS', '20210312 14:44:54', '276012279', '02', '1', 'Transaksi Sales', '12', '0', '20210312 14:44:54', '1821001')
ERROR - 2021-03-12 14:44:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923485) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:44:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923485) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKCC.0011', 'Z704', '2021-03-12', 'WS', '20210312 14:44:56', '276012279', '02', '1', 'Transaksi Sales', '12', '0', '20210312 14:44:56', '1821001')
ERROR - 2021-03-12 14:51:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923486) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923486) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0028', 'Z033', '2021-03-12', 'WS', '20210312 14:51:14', '201410567', '02', '1', 'Transaksi Sales', '30', '0', '20210312 14:51:14', '1821001')
ERROR - 2021-03-12 14:51:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923487) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923487) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0028', 'Z033', '2021-03-12', 'WS', '20210312 14:51:16', '201410567', '02', '1', 'Transaksi Sales', '30', '0', '20210312 14:51:16', '1821001')
ERROR - 2021-03-12 14:51:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923488) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923488) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0029', 'Z033', '2021-03-12', 'WS', '20210312 14:51:18', '10332160568', '02', '1', 'Transaksi Sales', '52', '0', '20210312 14:51:18', '1821001')
ERROR - 2021-03-12 14:51:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923489) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923489) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0029', 'Z033', '2021-03-12', 'WS', '20210312 14:51:23', '10332160568', '02', '1', 'Transaksi Sales', '52', '0', '20210312 14:51:23', '1821001')
ERROR - 2021-03-12 14:51:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923490) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923490) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0029', 'Z033', '2021-03-12', 'WS', '20210312 14:51:25', '10332160568', '02', '1', 'Transaksi Sales', '52', '0', '20210312 14:51:25', '1821001')
ERROR - 2021-03-12 14:51:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923491) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923491) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0029', 'Z033', '2021-03-12', 'WS', '20210312 14:51:28', '10332160568', '02', '1', 'Transaksi Sales', '52', '0', '20210312 14:51:28', '1821001')
ERROR - 2021-03-12 14:51:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923492) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:51:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923492) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0029', 'Z033', '2021-03-12', 'WS', '20210312 14:51:32', '10332160568', '02', '1', 'Transaksi Sales', '52', '0', '20210312 14:51:32', '1821001')
ERROR - 2021-03-12 14:53:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923495) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:53:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923495) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0010', 'D130', '2021-03-12', 'WS', '20210312 14:53:33', '10142171072', '02', '1', 'Transaksi Sales', '26', '0', '20210312 14:53:33', '1821001')
ERROR - 2021-03-12 14:53:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923496) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:53:36 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923496) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0010', 'D130', '2021-03-12', 'WS', '20210312 14:53:36', '10142171072', '02', '1', 'Transaksi Sales', '26', '0', '20210312 14:53:36', '1821001')
ERROR - 2021-03-12 14:53:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923497) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:53:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923497) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0011', 'D130', '2021-03-12', 'WS', '20210312 14:53:39', '19020032603', '02', '1', 'Transaksi Sales', '62', '0', '20210312 14:53:39', '1821001')
ERROR - 2021-03-12 14:57:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923498) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:57:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923498) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0024', 'Z010', '2021-03-12', 'WS', '20210312 14:57:53', '20020304010', '02', '1', 'Transaksi Sales', '38', '0', '20210312 14:57:53', '1821001')
ERROR - 2021-03-12 14:57:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923499) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:57:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923499) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0024', 'Z010', '2021-03-12', 'WS', '20210312 14:57:56', '20020304010', '02', '1', 'Transaksi Sales', '38', '0', '20210312 14:57:56', '1821001')
ERROR - 2021-03-12 14:57:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923500) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:57:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923500) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0025', 'Z010', '2021-03-12', 'WS', '20210312 14:57:58', '201011720', '02', '1', 'Transaksi Sales', '4', '0', '20210312 14:57:58', '1821001')
ERROR - 2021-03-12 14:58:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923501) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:01 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923501) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0026', 'Z010', '2021-03-12', 'WS', '20210312 14:58:01', '201010525', '02', '1', 'Transaksi Sales', '6', '0', '20210312 14:58:01', '1821001')
ERROR - 2021-03-12 14:58:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923502) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923502) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0027', 'Z010', '2021-03-12', 'WS', '20210312 14:58:03', '19020041727', '02', '1', 'Transaksi Sales', '2', '0', '20210312 14:58:03', '1821001')
ERROR - 2021-03-12 14:58:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923503) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923503) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0024', 'Z010', '2021-03-12', 'WS', '20210312 14:58:06', '20020304010', '02', '1', 'Transaksi Sales', '38', '0', '20210312 14:58:06', '1821001')
ERROR - 2021-03-12 14:58:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923504) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923504) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0024', 'Z010', '2021-03-12', 'WS', '20210312 14:58:10', '20020304010', '02', '1', 'Transaksi Sales', '38', '0', '20210312 14:58:10', '1821001')
ERROR - 2021-03-12 14:58:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923505) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923505) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0025', 'Z010', '2021-03-12', 'WS', '20210312 14:58:13', '201011720', '02', '1', 'Transaksi Sales', '4', '0', '20210312 14:58:13', '1821001')
ERROR - 2021-03-12 14:58:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923506) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 14:58:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923506) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0026', 'Z010', '2021-03-12', 'WS', '20210312 14:58:16', '201010525', '02', '1', 'Transaksi Sales', '6', '0', '20210312 14:58:16', '1821001')
ERROR - 2021-03-12 15:01:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923507) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:01:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923507) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.AKCC.0005', 'Z712', '2021-03-12', 'WS', '20210312 15:01:02', '17322190154', '02', '1', 'Transaksi Sales', '6', '0', '20210312 15:01:02', '1821001')
ERROR - 2021-03-12 15:01:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923508) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:01:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923508) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.AKCC.0005', 'Z712', '2021-03-12', 'WS', '20210312 15:01:06', '17322190154', '02', '1', 'Transaksi Sales', '6', '0', '20210312 15:01:06', '1821001')
ERROR - 2021-03-12 15:03:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923509) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:03:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923509) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCC.0020', 'D132', '2021-03-12', 'WS', '20210312 15:03:05', '10392163226', '02', '1', 'Transaksi Sales', '16', '0', '20210312 15:03:05', '1821001')
ERROR - 2021-03-12 15:07:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923510) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923510) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0019', 'Z077', '2021-03-12', 'WS', '20210312 15:07:04', '21033180017', '03', '1', 'Transaksi Sales', '10', '0', '20210312 15:07:04', '1921011')
ERROR - 2021-03-12 15:07:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923511) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923511) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0005', 'D127', '2021-03-12', 'WS', '20210312 15:07:06', '20020249147', '02', '1', 'Transaksi Sales', '6', '0', '20210312 15:07:06', '1821001')
ERROR - 2021-03-12 15:07:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923512) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923512) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0018', 'Z077', '2021-03-12', 'WS', '20210312 15:07:07', '21033180017', '03', '1', 'Transaksi Sales', '10', '0', '20210312 15:07:07', '1921011')
ERROR - 2021-03-12 15:07:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923513) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923513) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0005', 'D127', '2021-03-12', 'WS', '20210312 15:07:09', '20020249147', '02', '1', 'Transaksi Sales', '6', '0', '20210312 15:07:09', '1821001')
ERROR - 2021-03-12 15:07:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923514) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923514) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKCC.0019', 'Z077', '2021-03-12', 'WS', '20210312 15:07:09', '21033180017', '03', '1', 'Transaksi Sales', '10', '0', '20210312 15:07:09', '1921011')
ERROR - 2021-03-12 15:07:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923515) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:07:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923515) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0005', 'D127', '2021-03-12', 'WS', '20210312 15:07:12', '20020249147', '02', '1', 'Transaksi Sales', '6', '0', '20210312 15:07:12', '1821001')
ERROR - 2021-03-12 15:08:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923516) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923516) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0017', 'Z752', '2021-03-12', 'WS', '20210312 15:08:03', '17522180559', '02', '1', 'Transaksi Sales', '208', '0', '20210312 15:08:03', '1821001')
ERROR - 2021-03-12 15:08:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923517) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923517) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKCC.0013', 'Z047', '2021-03-12', 'WS', '20210312 15:08:05', '10472160303', '02', '1', 'Transaksi Sales', '34', '0', '20210312 15:08:05', '1821001')
ERROR - 2021-03-12 15:08:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923518) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923518) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0018', 'Z752', '2021-03-12', 'WS', '20210312 15:08:06', '20020246891', '02', '1', 'Transaksi Sales', '12', '0', '20210312 15:08:06', '1821001')
ERROR - 2021-03-12 15:08:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923519) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923519) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKCC.0015', 'Z047', '2021-03-12', 'WS', '20210312 15:08:08', '10472150554', '02', '1', 'Transaksi Sales', '12', '0', '20210312 15:08:08', '1821001')
ERROR - 2021-03-12 15:08:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923520) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923520) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0018', 'Z752', '2021-03-12', 'WS', '20210312 15:08:09', '20020246891', '02', '1', 'Transaksi Sales', '12', '0', '20210312 15:08:09', '1821001')
ERROR - 2021-03-12 15:08:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923521) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:08:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923521) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKCC.0013', 'Z047', '2021-03-12', 'WS', '20210312 15:08:11', '10472160303', '02', '1', 'Transaksi Sales', '34', '0', '20210312 15:08:11', '1821001')
ERROR - 2021-03-12 15:19:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923526) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:19:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923526) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKCC.0001', 'D136', '2021-03-12', 'WS', '20210312 15:19:16', '19020045308', '02', '1', 'Transaksi Sales', '24', '0', '20210312 15:19:16', '1821001')
ERROR - 2021-03-12 15:19:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923527) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:19:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923527) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKCC.0001', 'D136', '2021-03-12', 'WS', '20210312 15:19:19', '19020045308', '02', '1', 'Transaksi Sales', '24', '0', '20210312 15:19:19', '1821001')
ERROR - 2021-03-12 15:19:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923528) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:19:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923528) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKCC.0001', 'D136', '2021-03-12', 'WS', '20210312 15:19:22', '19020045308', '02', '1', 'Transaksi Sales', '24', '0', '20210312 15:19:22', '1821001')
ERROR - 2021-03-12 15:19:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923529) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:19:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923529) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKCC.0001', 'D136', '2021-03-12', 'WS', '20210312 15:19:28', '19020045308', '02', '1', 'Transaksi Sales', '24', '0', '20210312 15:19:28', '1821001')
ERROR - 2021-03-12 15:19:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923530) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:19:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923530) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKCC.0001', 'D136', '2021-03-12', 'WS', '20210312 15:19:31', '19020045308', '02', '1', 'Transaksi Sales', '24', '0', '20210312 15:19:31', '1821001')
ERROR - 2021-03-12 15:20:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923531) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:20:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923531) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKCC.0012', 'Z032', '2021-03-12', 'WS', '20210312 15:20:46', '10322150467', '02', '1', 'Transaksi Sales', '50', '0', '20210312 15:20:46', '1821001')
ERROR - 2021-03-12 15:23:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923538) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:23:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923538) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0012', 'D130', '2021-03-12', 'WS', '20210312 15:23:50', '10142160745', '02', '1', 'Transaksi Sales', '42', '0', '20210312 15:23:50', '1821001')
ERROR - 2021-03-12 15:35:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923549) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:35:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923549) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0006', 'Z061', '2021-03-12', 'WS', '20210312 15:35:40', '10612180856', '02', '1', 'Transaksi Sales', '2', '0', '20210312 15:35:40', '1821001')
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:36:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:36:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21262160097',
			now(),
			'21262160097',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21262160097' AND "TransType" = 4 )
ERROR - 2021-03-12 15:37:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923550) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:37:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923550) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0006', 'D127', '2021-03-12', 'WS', '20210312 15:37:10', '21212160838', '02', '1', 'Transaksi Sales', '20', '0', '20210312 15:37:10', '1821001')
ERROR - 2021-03-12 15:37:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923551) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:37:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923551) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKCC.0006', 'D127', '2021-03-12', 'WS', '20210312 15:37:14', '21212160838', '02', '1', 'Transaksi Sales', '20', '0', '20210312 15:37:14', '1821001')
ERROR - 2021-03-12 15:43:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923558) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:43:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923558) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0011', 'Z731', '2021-03-12', 'WS', '20210312 15:43:12', '17312150127', '02', '1', 'Transaksi Sales', '14', '0', '20210312 15:43:12', '1821001')
ERROR - 2021-03-12 15:43:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923559) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:43:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923559) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKCC.0011', 'Z731', '2021-03-12', 'WS', '20210312 15:43:16', '17312150127', '02', '1', 'Transaksi Sales', '14', '0', '20210312 15:43:16', '1821001')
ERROR - 2021-03-12 15:51:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923561) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:51:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923561) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0034', 'Z033', '2021-03-12', 'WS', '20210312 15:51:26', '10332151072', '02', '1', 'Transaksi Sales', '104', '0', '20210312 15:51:26', '1821001')
ERROR - 2021-03-12 15:51:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923562) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:51:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923562) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0034', 'Z033', '2021-03-12', 'WS', '20210312 15:51:29', '10332151072', '02', '1', 'Transaksi Sales', '104', '0', '20210312 15:51:29', '1821001')
ERROR - 2021-03-12 15:57:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:57:38 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: INSERT INTO "member"."Member" ("RegistrationDate", "ValidUntil", "CreatedBy", "CreatedDate", "fidMemberCategory", "StoreCode", "MemberCode", "IdCardNumber", "Name", "CityOfBirth", "DateOfBirth", "Address", "RT", "RW", "Village", "District", "City", "Provinces", "PosCode", "Phone", "Handpone", "Email", "Sex", "Married", "ModifiedBy", "ModifiedDate", "LastUpdate", "Barcode", "FullName", "isMerchantPartner", "instagram", "facebook", "memberFrom", "MerchantPartnerCode", "MemberCodeMerchantPartner", "OTP") VALUES ('2021-03-12 15:57:38', '2022-03-12', 'Z772', '2021-03-12 15:57:38', '02', 'Z772', '21023200835', '6372056311960002', 'AUDITA SEKAR PERTIWI', 'BANJARBARU', '19961123', 'JL BUDI KARAY NO 03 LOKTABAT UTARA', '017', '006', '0', '0', '0', '0', '', '', 'SELECT * 	FROM &quot;promo&quot;.&quot;msPro', '', '2', '2', 'Z772', '2021-03-12 15:57:38', '2021-03-12 15:57:38', '', 'AUDITA SEKAR PERTIWI', '0', '', '', '', '', '', '405650')
ERROR - 2021-03-12 15:57:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:57:43 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: INSERT INTO "member"."Member" ("RegistrationDate", "ValidUntil", "CreatedBy", "CreatedDate", "fidMemberCategory", "StoreCode", "MemberCode", "IdCardNumber", "Name", "CityOfBirth", "DateOfBirth", "Address", "RT", "RW", "Village", "District", "City", "Provinces", "PosCode", "Phone", "Handpone", "Email", "Sex", "Married", "ModifiedBy", "ModifiedDate", "LastUpdate", "Barcode", "FullName", "isMerchantPartner", "instagram", "facebook", "memberFrom", "MerchantPartnerCode", "MemberCodeMerchantPartner", "OTP") VALUES ('2021-03-12 15:57:43', '2022-03-12', 'Z772', '2021-03-12 15:57:43', '02', 'Z772', '21023200835', '6372056311960002', 'AUDITA SEKAR PERTIWI', 'BANJARBARU', '19961123', 'JL BUDI KARAY NO 03 LOKTABAT UTARA', '017', '006', '0', '0', '0', '0', '', '', 'SELECT * 	FROM &quot;promo&quot;.&quot;msPro', '', '2', '2', 'Z772', '2021-03-12 15:57:43', '2021-03-12 15:57:43', '', 'AUDITA SEKAR PERTIWI', '0', '', '', '', '', '', '614433')
ERROR - 2021-03-12 15:57:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:57:50 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: INSERT INTO "member"."Member" ("RegistrationDate", "ValidUntil", "CreatedBy", "CreatedDate", "fidMemberCategory", "StoreCode", "MemberCode", "IdCardNumber", "Name", "CityOfBirth", "DateOfBirth", "Address", "RT", "RW", "Village", "District", "City", "Provinces", "PosCode", "Phone", "Handpone", "Email", "Sex", "Married", "ModifiedBy", "ModifiedDate", "LastUpdate", "Barcode", "FullName", "isMerchantPartner", "instagram", "facebook", "memberFrom", "MerchantPartnerCode", "MemberCodeMerchantPartner", "OTP") VALUES ('2021-03-12 15:57:50', '2022-03-12', 'Z772', '2021-03-12 15:57:50', '02', 'Z772', '21023200835', '6372056311960002', 'AUDITA SEKAR PERTIWI', 'BANJARBARU', '19961123', 'JL BUDI KARAY NO 03 LOKTABAT UTARA', '017', '006', '0', '0', '0', '0', '', '', 'SELECT * 	FROM &quot;promo&quot;.&quot;msPro', '', '2', '2', 'Z772', '2021-03-12 15:57:50', '2021-03-12 15:57:50', '', 'AUDITA SEKAR PERTIWI', '0', '', '', '', '', '', '586353')
ERROR - 2021-03-12 15:59:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923566) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:59:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923566) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0031', 'Z010', '2021-03-12', 'WS', '20210312 15:59:07', '10102150471', '02', '1', 'Transaksi Sales', '84', '0', '20210312 15:59:07', '1821001')
ERROR - 2021-03-12 15:59:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923567) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:59:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923567) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0031', 'Z010', '2021-03-12', 'WS', '20210312 15:59:11', '10102150471', '02', '1', 'Transaksi Sales', '84', '0', '20210312 15:59:11', '1821001')
ERROR - 2021-03-12 15:59:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923572) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 15:59:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923572) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0032', 'Z010', '2021-03-12', 'WS', '20210312 15:59:51', '10102180608', '02', '1', 'Transaksi Sales', '54', '0', '20210312 15:59:51', '1821001')
ERROR - 2021-03-12 16:00:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923574) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:00:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923574) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-12',
			'21023200838',
			now(),
			'21023200838',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023200838' AND "TransType" = 4 )
ERROR - 2021-03-12 16:00:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923576) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:00:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923576) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0035', 'Z010', '2021-03-12', 'WS', '20210312 16:00:13', '10102150395', '02', '1', 'Transaksi Sales', '104', '0', '20210312 16:00:13', '1821001')
ERROR - 2021-03-12 16:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923582) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923582) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z706.AKCC.0007', 'Z706', '2021-03-12', 'WS', '20210312 16:01:16', '21023200830', '02', '1', 'Transaksi Sales', '62', '0', '20210312 16:01:16', '1821001')
ERROR - 2021-03-12 16:02:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923585) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:02:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923585) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z764.AKCC.0003', 'Z764', '2021-03-12', 'WS', '20210312 16:02:08', '200715341', '02', '1', 'Transaksi Sales', '24', '0', '20210312 16:02:08', '1821001')
ERROR - 2021-03-12 16:03:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923587) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:03:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923587) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0012', 'Z830', '2021-03-12', 'WS', '20210312 16:03:57', '271914190', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:03:57', '1821001')
ERROR - 2021-03-12 16:04:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923588) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:04:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923588) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0012', 'Z830', '2021-03-12', 'WS', '20210312 16:04:00', '271914190', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:04:00', '1821001')
ERROR - 2021-03-12 16:04:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923589) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:04:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923589) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0012', 'Z830', '2021-03-12', 'WS', '20210312 16:04:02', '271914190', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:04:02', '1821001')
ERROR - 2021-03-12 16:07:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923592) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:07:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923592) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCC.0016', 'Z045', '2021-03-12', 'WS', '20210312 16:07:25', '21023200827', '02', '1', 'Transaksi Sales', '18', '0', '20210312 16:07:25', '1821001')
ERROR - 2021-03-12 16:14:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923596) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:14:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923596) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKCC.0007', 'Z057', '2021-03-12', 'WS', '20210312 16:14:24', '201312277', '02', '1', 'Transaksi Sales', '6', '0', '20210312 16:14:24', '1821001')
ERROR - 2021-03-12 16:14:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923597) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:14:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923597) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKCC.0007', 'Z057', '2021-03-12', 'WS', '20210312 16:14:27', '201312277', '02', '1', 'Transaksi Sales', '6', '0', '20210312 16:14:27', '1821001')
ERROR - 2021-03-12 16:21:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923598) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:21:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923598) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKCC.0013', 'Z015', '2021-03-12', 'WS', '20210312 16:21:08', '21033180011', '03', '1', 'Transaksi Sales', '11', '0', '20210312 16:21:08', '1921011')
ERROR - 2021-03-12 16:21:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923599) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:21:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923599) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKCC.0013', 'Z015', '2021-03-12', 'WS', '20210312 16:21:12', '21033180011', '03', '1', 'Transaksi Sales', '11', '0', '20210312 16:21:12', '1921011')
ERROR - 2021-03-12 16:21:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923600) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:21:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923600) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKCC.0013', 'Z015', '2021-03-12', 'WS', '20210312 16:21:16', '21033180011', '03', '1', 'Transaksi Sales', '11', '0', '20210312 16:21:16', '1921011')
ERROR - 2021-03-12 16:23:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923603) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:23:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923603) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.AKCC.0007', 'D121', '2021-03-12', 'WS', '20210312 16:23:59', '10362190191', '02', '1', 'Transaksi Sales', '26', '0', '20210312 16:23:59', '1821001')
ERROR - 2021-03-12 16:24:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923605) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:24:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923605) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKCC.0009', 'Z826', '2021-03-12', 'WS', '20210312 16:24:35', '20020254377', '02', '1', 'Transaksi Sales', '6', '0', '20210312 16:24:35', '1821001')
ERROR - 2021-03-12 16:28:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923607) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:28:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923607) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0040', 'Z010', '2021-03-12', 'WS', '20210312 16:28:17', '273612584', '02', '1', 'Transaksi Sales', '66', '0', '20210312 16:28:17', '1821001')
ERROR - 2021-03-12 16:28:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923608) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:28:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923608) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0040', 'Z010', '2021-03-12', 'WS', '20210312 16:28:20', '273612584', '02', '1', 'Transaksi Sales', '66', '0', '20210312 16:28:20', '1821001')
ERROR - 2021-03-12 16:28:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923609) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:28:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923609) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0040', 'Z010', '2021-03-12', 'WS', '20210312 16:28:24', '273612584', '02', '1', 'Transaksi Sales', '66', '0', '20210312 16:28:24', '1821001')
ERROR - 2021-03-12 16:28:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923610) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:28:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923610) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0040', 'Z010', '2021-03-12', 'WS', '20210312 16:28:27', '273612584', '02', '1', 'Transaksi Sales', '66', '0', '20210312 16:28:27', '1821001')
ERROR - 2021-03-12 16:29:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923616) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:29:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923616) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKCC.0013', 'Z704', '2021-03-12', 'WS', '20210312 16:29:57', '21023200712', '02', '1', 'Transaksi Sales', '6', '0', '20210312 16:29:57', '1821001')
ERROR - 2021-03-12 16:33:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923617) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:33:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923617) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0006', 'Z770', '2021-03-12', 'WS', '20210312 16:33:09', '17702180303', '02', '1', 'Transaksi Sales', '16', '0', '20210312 16:33:09', '1821001')
ERROR - 2021-03-12 16:33:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923618) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:33:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923618) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0007', 'Z770', '2021-03-12', 'WS', '20210312 16:33:13', '21023200855', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:33:13', '1821001')
ERROR - 2021-03-12 16:33:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923619) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:33:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923619) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0007', 'Z770', '2021-03-12', 'WS', '20210312 16:33:16', '21023200855', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:33:16', '1821001')
ERROR - 2021-03-12 16:33:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923620) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:33:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923620) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0007', 'Z770', '2021-03-12', 'WS', '20210312 16:33:19', '21023200855', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:33:19', '1821001')
ERROR - 2021-03-12 16:33:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923621) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:33:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923621) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKCC.0007', 'Z770', '2021-03-12', 'WS', '20210312 16:33:23', '21023200855', '02', '1', 'Transaksi Sales', '14', '0', '20210312 16:33:23', '1821001')
ERROR - 2021-03-12 16:34:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923622) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:34:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923622) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z830.AKCC.0013', 'Z830', '2021-03-12', 'WS', '20210312 16:34:00', '20020305136', '02', '1', 'Transaksi Sales', '32', '0', '20210312 16:34:00', '1821001')
ERROR - 2021-03-12 16:35:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923625) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:35:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923625) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0008', 'Z061', '2021-03-12', 'WS', '20210312 16:35:45', '10612180676', '02', '1', 'Transaksi Sales', '10', '0', '20210312 16:35:45', '1821001')
ERROR - 2021-03-12 16:49:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923626) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:49:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923626) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKCC.0003', 'D760', '2021-03-12', 'WS', '20210312 16:49:33', '27602161367', '02', '1', 'Transaksi Sales', '8', '0', '20210312 16:49:33', '1821001')
ERROR - 2021-03-12 16:51:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923627) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:51:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923627) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0038', 'Z033', '2021-03-12', 'WS', '20210312 16:51:22', '10332180688', '02', '1', 'Transaksi Sales', '18', '0', '20210312 16:51:22', '1821001')
ERROR - 2021-03-12 16:51:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923628) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:51:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923628) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0038', 'Z033', '2021-03-12', 'WS', '20210312 16:51:25', '10332180688', '02', '1', 'Transaksi Sales', '18', '0', '20210312 16:51:25', '1821001')
ERROR - 2021-03-12 16:51:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923629) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:51:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923629) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0039', 'Z033', '2021-03-12', 'WS', '20210312 16:51:28', '10142190496', '02', '1', 'Transaksi Sales', '12', '0', '20210312 16:51:28', '1821001')
ERROR - 2021-03-12 16:51:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923630) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:51:31 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923630) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0039', 'Z033', '2021-03-12', 'WS', '20210312 16:51:31', '10142190496', '02', '1', 'Transaksi Sales', '12', '0', '20210312 16:51:31', '1821001')
ERROR - 2021-03-12 16:52:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923631) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:52:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923631) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKCC.0004', 'Z790', '2021-03-12', 'WS', '20210312 16:52:30', '17902190404', '02', '1', 'Transaksi Sales', '52', '0', '20210312 16:52:30', '1821001')
ERROR - 2021-03-12 16:53:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923632) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:53:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923632) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0023', 'Z752', '2021-03-12', 'WS', '20210312 16:53:05', '17522151538', '02', '1', 'Transaksi Sales', '26', '0', '20210312 16:53:05', '1821001')
ERROR - 2021-03-12 16:53:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923633) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:53:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923633) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0023', 'Z752', '2021-03-12', 'WS', '20210312 16:53:09', '17522151538', '02', '1', 'Transaksi Sales', '26', '0', '20210312 16:53:09', '1821001')
ERROR - 2021-03-12 16:53:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923634) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:53:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923634) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0024', 'Z752', '2021-03-12', 'WS', '20210312 16:53:13', '17522171188', '02', '1', 'Transaksi Sales', '34', '0', '20210312 16:53:13', '1821001')
ERROR - 2021-03-12 16:53:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923635) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:53:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923635) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKCC.0024', 'Z752', '2021-03-12', 'WS', '20210312 16:53:16', '17522171188', '02', '1', 'Transaksi Sales', '34', '0', '20210312 16:53:16', '1821001')
ERROR - 2021-03-12 16:56:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923639) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:56:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923639) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKCC.0011', 'Z807', '2021-03-12', 'WS', '20210312 16:56:21', '21023191921', '02', '1', 'Transaksi Sales', '8', '0', '20210312 16:56:21', '1821001')
ERROR - 2021-03-12 16:58:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923642) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 16:58:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923642) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0045', 'Z010', '2021-03-12', 'WS', '20210312 16:58:33', '20020218628', '02', '1', 'Transaksi Sales', '48', '0', '20210312 16:58:33', '1821001')
ERROR - 2021-03-12 17:01:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923652) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:01:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923652) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z815.AKCC.0013', 'Z815', '2021-03-12', 'WS', '20210312 17:01:19', '17672170451', '02', '1', 'Transaksi Sales', '14', '0', '20210312 17:01:19', '1821001')
ERROR - 2021-03-12 17:03:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923653) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:03:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923653) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKCC.0011', 'Z062', '2021-03-12', 'WS', '20210312 17:03:39', '273310350', '02', '1', 'Transaksi Sales', '8', '0', '20210312 17:03:39', '1821001')
ERROR - 2021-03-12 17:03:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923654) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:03:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923654) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKCC.0011', 'Z062', '2021-03-12', 'WS', '20210312 17:03:44', '273310350', '02', '1', 'Transaksi Sales', '8', '0', '20210312 17:03:44', '1821001')
ERROR - 2021-03-12 17:03:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923655) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:03:48 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923655) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKCC.0011', 'Z062', '2021-03-12', 'WS', '20210312 17:03:48', '273310350', '02', '1', 'Transaksi Sales', '8', '0', '20210312 17:03:48', '1821001')
ERROR - 2021-03-12 17:07:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923658) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:07:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923658) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCC.0020', 'Z045', '2021-03-12', 'WS', '20210312 17:07:26', '17442150495', '02', '1', 'Transaksi Sales', '38', '0', '20210312 17:07:26', '1821001')
ERROR - 2021-03-12 17:07:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923659) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:07:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923659) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKCC.0020', 'Z045', '2021-03-12', 'WS', '20210312 17:07:29', '17442150495', '02', '1', 'Transaksi Sales', '38', '0', '20210312 17:07:29', '1821001')
ERROR - 2021-03-12 17:48:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923673) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:48:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923673) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKCC.0016', 'Z714', '2021-03-12', 'WS', '20210312 17:48:08', '20020226450', '02', '1', 'Transaksi Sales', '20', '0', '20210312 17:48:08', '1821001')
ERROR - 2021-03-12 17:51:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923674) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:51:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923674) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0040', 'Z033', '2021-03-12', 'WS', '20210312 17:51:14', '10142171483', '02', '1', 'Transaksi Sales', '106', '0', '20210312 17:51:14', '1821001')
ERROR - 2021-03-12 17:51:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923675) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:51:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923675) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0040', 'Z033', '2021-03-12', 'WS', '20210312 17:51:16', '10142171483', '02', '1', 'Transaksi Sales', '106', '0', '20210312 17:51:16', '1821001')
ERROR - 2021-03-12 17:51:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923676) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:51:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923676) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0040', 'Z033', '2021-03-12', 'WS', '20210312 17:51:19', '10142171483', '02', '1', 'Transaksi Sales', '106', '0', '20210312 17:51:19', '1821001')
ERROR - 2021-03-12 17:51:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923677) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:51:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923677) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0040', 'Z033', '2021-03-12', 'WS', '20210312 17:51:21', '10142171483', '02', '1', 'Transaksi Sales', '106', '0', '20210312 17:51:21', '1821001')
ERROR - 2021-03-12 17:51:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923678) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:51:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923678) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKCC.0040', 'Z033', '2021-03-12', 'WS', '20210312 17:51:23', '10142171483', '02', '1', 'Transaksi Sales', '106', '0', '20210312 17:51:23', '1821001')
ERROR - 2021-03-12 17:54:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923683) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:54:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923683) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0019', 'D130', '2021-03-12', 'WS', '20210312 17:54:51', '201410607', '02', '1', 'Transaksi Sales', '4', '0', '20210312 17:54:51', '1821001')
ERROR - 2021-03-12 17:54:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923684) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 17:54:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923684) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D130.AKCC.0019', 'D130', '2021-03-12', 'WS', '20210312 17:54:53', '201410607', '02', '1', 'Transaksi Sales', '4', '0', '20210312 17:54:53', '1821001')
ERROR - 2021-03-12 18:34:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923708) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 18:34:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923708) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z048.AKCC.0003', 'Z048', '2021-03-12', 'WS', '20210312 18:34:51', '10482150483', '02', '1', 'Transaksi Sales', '6', '0', '20210312 18:34:51', '1821001')
ERROR - 2021-03-12 19:36:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923727) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 19:36:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923727) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKCC.0011', 'Z061', '2021-03-12', 'WS', '20210312 19:36:00', '21023199510', '02', '1', 'Transaksi Sales', '16', '0', '20210312 19:36:00', '1821001')
ERROR - 2021-03-12 19:57:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923732) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 19:57:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923732) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCC.0067', 'Z010', '2021-03-12', 'WS', '20210312 19:57:41', '20020226880', '02', '1', 'Transaksi Sales', '26', '0', '20210312 19:57:41', '1821001')
ERROR - 2021-03-12 20:26:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1923747) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-12 20:26:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1923747) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z816.AKCC.0006', 'Z816', '2021-03-12', 'WS', '20210312 20:26:05', '17252150066', '02', '1', 'Transaksi Sales', '20', '0', '20210312 20:26:05', '1821001')
