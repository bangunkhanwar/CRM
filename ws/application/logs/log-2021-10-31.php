<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-31 10:35:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207062) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 10:35:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207062) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKJV.0009', 'Z047', '2021-10-31', 'WS', '20211031 10:35:55', '10472161473', '02', '1', 'Transaksi Sales', '92', '0', '20211031 10:35:55', '1821001')
ERROR - 2021-10-31 10:38:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207064) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 10:38:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207064) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKJV.0001', 'Z044', '2021-10-31', 'WS', '20211031 10:38:25', '10442190226', '02', '1', 'Transaksi Sales', '20', '0', '20211031 10:38:25', '1821001')
ERROR - 2021-10-31 11:30:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207104) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 11:30:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207104) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-10-31',
			'21023278271',
			now(),
			'21023278271',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023278271' AND "TransType" = 4 )
ERROR - 2021-10-31 11:35:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207104) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 11:35:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207104) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKJV.0015', 'Z047', '2021-10-31', 'WS', '20211031 11:35:57', '10472162979', '02', '1', 'Transaksi Sales', '24', '0', '20211031 11:35:57', '1821001')
ERROR - 2021-10-31 17:10:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207321) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 17:10:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207321) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKJV.0022', 'Z062', '2021-10-31', 'WS', '20211031 17:10:10', '10622161329', '02', '1', 'Transaksi Sales', '26', '0', '20211031 17:10:10', '1821001')
ERROR - 2021-10-31 20:32:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2207422) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-31 20:32:50 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2207422) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKJV.0052', 'Z033', '2021-10-31', 'WS', '20211031 20:32:50', '10332151213', '02', '1', 'Transaksi Sales', '8', '0', '20211031 20:32:50', '1821001')
