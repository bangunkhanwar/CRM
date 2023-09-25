<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-17 12:24:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2194031) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-17 12:24:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2194031) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKJH.0004', 'D760', '2021-10-17', 'WS', '20211017 12:24:09', '21023217106', '02', '1', 'Transaksi Sales', '8', '0', '20211017 12:24:09', '1821001')
