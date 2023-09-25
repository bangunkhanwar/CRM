<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-14 03:01:35 --> 404 Page Not Found: /index
ERROR - 2021-05-14 11:12:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2057361) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-14 11:12:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2057361) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKEE.0005', 'Z032', '2021-05-14', 'WS', '20210514 11:12:04', '10322161128', '02', '1', 'Transaksi Sales', '8', '0', '20210514 11:12:04', '1821001')
ERROR - 2021-05-14 11:37:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2057362) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-14 11:37:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2057362) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKEE.0001', 'Z033', '2021-05-14', 'WS', '20210514 11:37:38', '10332160865', '02', '1', 'Transaksi Sales', '16', '0', '20210514 11:37:38', '1821001')
