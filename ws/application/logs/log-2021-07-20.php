<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-20 12:08:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2120365) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-20 12:08:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2120365) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKGK.0002', 'Z805', '2021-07-20', 'WS', '20210720 12:08:12', '18052170169', '02', '1', 'Transaksi Sales', '12', '0', '20210720 12:08:12', '1821001')
