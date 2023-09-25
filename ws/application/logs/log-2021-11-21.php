<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-11-21 03:01:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2227471) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-11-21 03:01:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2227471) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKKK.0007', 'Z047', '2021-11-20', 'WS', '20211121 03:01:15', '10472150338', '02', '1', 'Transaksi Sales', '4', '0', '20211121 03:01:15', '1821001')
ERROR - 2021-11-21 08:43:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2228050) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-11-21 08:43:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2228050) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKKL.0001', 'Z722', '2021-11-21', 'WS', '20211121 08:43:27', '202013598', '02', '1', 'Transaksi Sales', '2', '0', '20211121 08:43:27', '1821001')
ERROR - 2021-11-21 17:14:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2228254) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-11-21 17:14:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2228254) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z722.AKKL.0012', 'Z722', '2021-11-21', 'WS', '20211121 17:14:39', '20020244002', '02', '1', 'Transaksi Sales', '42', '0', '20211121 17:14:39', '1821001')
