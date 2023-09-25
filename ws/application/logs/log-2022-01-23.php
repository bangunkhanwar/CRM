<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-01-23 13:43:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2289954) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-01-23 13:43:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2289954) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.ALAN.0008', 'Z047', '2022-01-23', 'WS', '20220123 13:43:02', '22020005423', '02', '1', 'Transaksi Sales', '34', '0', '20220123 13:43:02', '1821001')
