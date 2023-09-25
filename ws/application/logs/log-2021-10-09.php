<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-10-09 15:09:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2185854) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-10-09 15:09:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2185854) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKJ9.0012', 'Z714', '2021-10-09', 'WS', '20211009 15:09:39', '21023270893', '02', '1', 'Transaksi Sales', '18', '0', '20211009 15:09:39', '1821001')
