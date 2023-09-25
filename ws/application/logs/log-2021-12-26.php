<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-12-26 09:50:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2263460) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-12-26 09:50:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2263460) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKLQ.0001', 'D760', '2021-12-26', 'WS', '20211226 09:50:02', '21023299923', '02', '1', 'Transaksi Sales', '44', '0', '20211226 09:50:02', '1821001')
