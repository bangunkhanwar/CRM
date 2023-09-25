<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-08-02 18:11:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2126889) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-08-02 18:11:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2126889) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransDate", "CreateBy", "CreateTime", "MemberCode", "StoreCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate") VALUES ('2021-08-02', 'ELZATTA TUBAN', '2021-08-02 18:11:08', '21023252759', 'Z812', '02', 5, 'Aktivasi Handphone', 50, 0, '2021-08-02 18:11:08')
