<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-23 03:01:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2066461) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-23 03:01:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2066461) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKEM.0004', 'Z790', '2021-05-22', 'WS', '20210523 03:01:44', '17902190134', '02', '1', 'Transaksi Sales', '18', '0', '20210523 03:01:44', '1821001')
ERROR - 2021-05-23 03:06:57 --> 404 Page Not Found: /index
ERROR - 2021-05-23 16:16:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2067468) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-23 16:16:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2067468) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKEN.0010', 'Z062', '2021-05-23', 'WS', '20210523 16:16:22', '21023237305', '02', '1', 'Transaksi Sales', '88', '0', '20210523 16:16:22', '1821001')
