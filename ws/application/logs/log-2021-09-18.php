<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-18 14:01:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2163214) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-18 14:01:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2163214) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKII.0005', 'Z057', '2021-09-18', 'WS', '20210918 14:01:05', '21262170853', '02', '1', 'Transaksi Sales', '4', '0', '20210918 14:01:05', '1821001')
ERROR - 2021-09-18 21:50:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2163402) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-18 21:50:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2163402) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-09-18',
			'21023265757',
			now(),
			'21023265757',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023265757' AND "TransType" = 4 )
