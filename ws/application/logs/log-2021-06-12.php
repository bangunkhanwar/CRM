<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-12 03:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2088805) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-12 03:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2088805) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z041.AKFA.0019', 'Z041', '2021-06-10', 'WS', '20210612 03:01:16', '21023243779', '02', '1', 'Transaksi Sales', '68', '0', '20210612 03:01:16', '1821001')
