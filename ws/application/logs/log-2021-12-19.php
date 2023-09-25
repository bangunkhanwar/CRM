<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-19 03:01:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2254612) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-19 03:01:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2254612) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D138.AKLI.0005', 'D138', '2021-12-18', 'WS', '20211219 03:01:15', '271214758', '02', '1', 'Transaksi Sales', '18', '0', '20211219 03:01:15', '1821001')
ERROR - 2021-12-19 10:49:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2255228) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-19 10:49:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2255228) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z789.AKLJ.0001', 'Z789', '2021-12-19', 'WS', '20211219 10:49:12', '17062170045', '02', '1', 'Transaksi Sales', '12', '0', '20211219 10:49:12', '1821001')
ERROR - 2021-12-19 19:25:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2255413) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-19 19:25:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2255413) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z711.AKLJ.0003', 'Z711', '2021-12-19', 'WS', '20211219 19:25:16', '17112150452', '02', '1', 'Transaksi Sales', '6', '0', '20211219 19:25:16', '1821001')
