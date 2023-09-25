<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-06-13 03:01:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2090619) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-13 03:01:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2090619) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKFC.0002', 'Z015', '2021-06-12', 'WS', '20210613 03:01:42', '10152180859', '02', '1', 'Transaksi Sales', '18', '0', '20210613 03:01:42', '1821001')
ERROR - 2021-06-13 23:40:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2091821) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-06-13 23:40:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2091821) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransDate", "CreateBy", "CreateTime", "MemberCode", "StoreCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate") VALUES ('2021-06-13', 'CRM Webservice', '2021-06-13 23:40:59', '21023244458', 'ZHO', '02', 5, 'Account Verify', 50, 0, '2021-06-13 23:40:59')
