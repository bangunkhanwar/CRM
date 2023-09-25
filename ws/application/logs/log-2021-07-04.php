<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-04 03:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2111661) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-04 03:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2111661) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.AKG3.0004', 'D121', '2021-07-03', 'WS', '20210704 03:01:15', '272313369', '02', '1', 'Transaksi Sales', '14', '0', '20210704 03:01:15', '1821001')
ERROR - 2021-07-04 16:30:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2112219) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-04 16:30:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2112219) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKG4.0008', 'Z033', '2021-07-04', 'WS', '20210704 16:30:42', '21023232582', '02', '1', 'Transaksi Sales', '16', '0', '20210704 16:30:42', '1821001')
