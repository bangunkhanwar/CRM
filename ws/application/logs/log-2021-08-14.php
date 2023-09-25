<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-14 17:59:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2134097) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-08-14 17:59:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2134097) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKHE.0009', 'Z010', '2021-08-14', 'WS', '20210814 17:59:44', '10103160023', '03', '1', 'Transaksi Sales', '11', '0', '20210814 17:59:44', '1921011')
