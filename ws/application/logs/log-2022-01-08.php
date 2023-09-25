<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-08 03:01:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2276729) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-08 03:01:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2276729) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z832.ALA7.0012', 'Z832', '2022-01-07', 'WS', '20220108 03:01:14', '17382180234', '02', '1', 'Transaksi Sales', '12', '0', '20220108 03:01:14', '1821001')
ERROR - 2022-01-08 05:58:22 --> 404 Page Not Found: /index
ERROR - 2022-01-08 13:18:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2277505) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-08 13:18:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2277505) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.ALA8.0011', 'Z045', '2022-01-08', 'WS', '20220108 13:18:44', '21023199698', '02', '1', 'Transaksi Sales', '18', '0', '20220108 13:18:44', '1821001')
