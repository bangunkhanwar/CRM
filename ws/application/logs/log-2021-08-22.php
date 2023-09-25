<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-22 04:57:01 --> 404 Page Not Found: /index
ERROR - 2021-08-22 09:16:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2139214) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-08-22 09:16:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2139214) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKHM.0001', 'Z752', '2021-08-22', 'WS', '20210822 09:16:19', '17522160283', '02', '1', 'Transaksi Sales', '4', '0', '20210822 09:16:19', '1821001')
ERROR - 2021-08-22 14:30:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2139295) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-08-22 14:30:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2139295) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKHM.0009', 'Z033', '2021-08-22', 'WS', '20210822 14:30:51', '10332151072', '02', '1', 'Transaksi Sales', '28', '0', '20210822 14:30:51', '1821001')
