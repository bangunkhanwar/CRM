<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-30 03:07:31 --> 404 Page Not Found: /index
ERROR - 2021-05-30 17:26:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2075453) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-30 17:26:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2075453) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z803.AKEU.0012', 'Z803', '2021-05-30', 'WS', '20210530 17:26:04', '21023202755', '02', '1', 'Transaksi Sales', '20', '0', '20210530 17:26:04', '1821001')
