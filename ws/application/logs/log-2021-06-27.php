<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-27 03:01:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2106057) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-27 03:01:36 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2106057) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z771.AKFQ.0001', 'Z771', '2021-06-26', 'WS', '20210627 03:01:36', '17712171138', '02', '1', 'Transaksi Sales', '8', '0', '20210627 03:01:36', '1821001')
