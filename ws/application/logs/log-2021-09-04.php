<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-09-04 03:30:38 --> 404 Page Not Found: /index
ERROR - 2021-09-04 10:31:51 --> 404 Page Not Found: /index
ERROR - 2021-09-04 18:51:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2148928) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-09-04 18:51:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2148928) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKI4.0014', 'Z766', '2021-09-04', 'WS', '20210904 18:51:00', '21023204517', '02', '1', 'Transaksi Sales', '66', '0', '20210904 18:51:00', '1821001')
