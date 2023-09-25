<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-21 03:01:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1972668) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:01:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1972668) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z048.AKDK.0001', 'Z048', '2021-04-20', 'WS', '20210421 03:01:34', '10482190092', '02', '1', 'Transaksi Sales', '20', '0', '20210421 03:01:34', '1821001')
ERROR - 2021-04-21 03:01:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1972669) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:01:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1972669) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z301.AKDJ.0137', 'Z301', '2021-04-19', 'WS', '20210421 03:01:35', '20030313230', '03', '1', 'Transaksi Sales', '63', '0', '20210421 03:01:35', '1921011')
ERROR - 2021-04-21 03:01:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1972670) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:01:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1972670) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D752.AKDK.0002', 'D752', '2021-04-20', 'WS', '20210421 03:01:37', '261910026', '02', '1', 'Transaksi Sales', '8', '0', '20210421 03:01:37', '1821001')
ERROR - 2021-04-21 03:08:31 --> 404 Page Not Found: /index
ERROR - 2021-04-21 03:16:19 --> 404 Page Not Found: /index
ERROR - 2021-04-21 03:17:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z810.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:21 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z810.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z810.AKDK.0003', '2021-04-20', '28', '20210421 03:17:20', '211310851', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:17:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0014) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:31 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0014) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0014', '2021-04-20', '8', '20210421 03:17:30', '10342171344', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:17:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z024.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:33 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z024.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z024.AKDK.0013', '2021-04-20', '22', '20210421 03:17:33', '202415474', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:17:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z827.AKDK.0028) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:35 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z827.AKDK.0028) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z827.AKDK.0028', '2021-04-20', '4', '20210421 03:17:35', '21023192445', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:17:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z734.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:37 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z734.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z734.AKDK.0005', '2021-04-20', '8', '20210421 03:17:37', '17342171052', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:17:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z742.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z742.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z742.AKDK.0005', '2021-04-20', '54', '20210421 03:17:38', '17422170621', '#SUKSES point yg didapat 54')
ERROR - 2021-04-21 03:17:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDJ.0107) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDJ.0107) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDJ.0107', '2021-04-19', '0', '20210421 03:17:38', '21023211237', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:17:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.AKDJ.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.AKDJ.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.AKDJ.0004', '2021-04-19', '0', '20210421 03:17:38', '21023211081', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:17:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.AKDJ.0046) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.AKDJ.0046) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.AKDJ.0046', '2021-04-19', '0', '20210421 03:17:38', '20020318024', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:17:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z706.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z706.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z706.AKDK.0008', '2021-04-20', '52', '20210421 03:17:40', '270612264', '#SUKSES point yg didapat 52')
ERROR - 2021-04-21 03:17:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0146) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0146) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0146', '2021-04-20', '0', '20210421 03:17:40', '21023211568', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:17:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0084) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0084) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0084', '2021-04-20', '0', '20210421 03:17:40', '21023211633', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z753.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:42 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z753.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z753.AKDK.0005', '2021-04-20', '10', '20210421 03:17:41', '21023211408', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:17:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z760.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z760.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z760.AKDK.0015', '2021-04-20', '8', '20210421 03:17:43', '17602190351', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:17:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z777.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z777.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z777.AKDK.0008', '2021-04-20', '14', '20210421 03:17:45', '20020257639', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:17:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z729.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z729.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z729.AKDK.0003', '2021-04-20', '10', '20210421 03:17:46', '17292171371', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:17:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0025) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0025) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0025', '2021-04-20', '6', '20210421 03:17:48', '21023198248', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:17:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z832.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:49 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z832.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z832.AKDK.0002', '2021-04-20', '6', '20210421 03:17:49', '27592161446', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:17:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z832.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z832.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z832.AKDK.0005', '2021-04-20', '38', '20210421 03:17:51', '20020231627', '#SUKSES point yg didapat 38')
ERROR - 2021-04-21 03:17:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z078.AKDB.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z078.AKDB.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z078.AKDB.0016', '2021-04-11', '36', '20210421 03:17:55', '20020330317', '#SUKSES point yg didapat 36')
ERROR - 2021-04-21 03:17:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z015.AKDK.0014) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:56 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z015.AKDK.0014) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z015.AKDK.0014', '2021-04-20', '1', '20210421 03:17:56', '10153180016', '#SUKSES point yg didapat 1')
ERROR - 2021-04-21 03:17:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D120.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:58 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D120.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D120.AKDK.0003', '2021-04-20', '48', '20210421 03:17:58', '10432170112', '#SUKSES point yg didapat 48')
ERROR - 2021-04-21 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z815.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z815.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z815.AKDK.0013', '2021-04-20', '8', '20210421 03:17:59', '21023211481', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:18:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z827.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:02 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z827.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z827.AKDK.0007', '2021-04-20', '16', '20210421 03:18:02', '20020291167', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:18:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z042.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:04 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z042.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z042.AKDK.0003', '2021-04-20', '84', '20210421 03:18:04', '20020283974', '#SUKSES point yg didapat 84')
ERROR - 2021-04-21 03:18:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z010.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:05 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z010.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z010.AKDK.0001', '2021-04-20', '16', '20210421 03:18:05', '20020285696', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:18:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z775.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:07 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z775.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z775.AKDK.0015', '2021-04-20', '26', '20210421 03:18:07', '17752170652', '#SUKSES point yg didapat 26')
ERROR - 2021-04-21 03:18:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z829.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:10 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z829.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z829.AKDK.0009', '2021-04-20', '50', '20210421 03:18:10', '21023197491', '#SUKSES point yg didapat 50')
ERROR - 2021-04-21 03:18:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z815.AKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:12 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z815.AKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z815.AKDK.0011', '2021-04-20', '26', '20210421 03:18:12', '17672160095', '#SUKSES point yg didapat 26')
ERROR - 2021-04-21 03:18:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0020) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:14 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0020) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0020', '2021-04-20', '12', '20210421 03:18:14', '10342151309', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:18:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z830.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:15 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z830.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z830.AKDK.0012', '2021-04-20', '4', '20210421 03:18:15', '17682180703', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:18:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z023.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:20 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z023.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z023.AKDK.0002', '2021-04-20', '14', '20210421 03:18:20', '10502160963', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:18:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z814.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:24 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z814.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z814.AKDK.0001', '2021-04-20', '14', '20210421 03:18:24', '17642180339', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:18:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z738.AKDJ.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:25 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z738.AKDJ.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z738.AKDJ.0012', '2021-04-19', '24', '20210421 03:18:25', '275912779', '#SUKSES point yg didapat 24')
ERROR - 2021-04-21 03:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z029.AKDK.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z029.AKDK.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z029.AKDK.0016', '2021-04-20', '45', '20210421 03:18:27', '20030313372', '#SUKSES point yg didapat 45')
ERROR - 2021-04-21 03:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0052) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0052) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0052', '2021-04-20', '0', '20210421 03:18:27', '19020006721', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0011', '2021-04-20', '0', '20210421 03:18:27', '21023211486', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:18:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0058) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0058) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0058', '2021-04-20', '0', '20210421 03:18:27', '21023211552', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:18:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z063.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:29 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z063.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z063.AKDK.0003', '2021-04-20', '16', '20210421 03:18:29', '10632160825', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:18:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z040.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:30 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z040.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z040.AKDK.0001', '2021-04-20', '36', '20210421 03:18:30', '10402150296', '#SUKSES point yg didapat 36')
ERROR - 2021-04-21 03:18:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0024) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0024) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0024', '2021-04-20', '10', '20210421 03:18:32', '17812190728', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:18:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z830.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:35 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z830.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z830.AKDK.0005', '2021-04-20', '30', '20210421 03:18:35', '21023203069', '#SUKSES point yg didapat 30')
ERROR - 2021-04-21 03:18:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z784.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:36 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z784.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z784.AKDK.0002', '2021-04-20', '20', '20210421 03:18:36', '17602190996', '#SUKSES point yg didapat 20')
ERROR - 2021-04-21 03:18:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z021.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:41 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z021.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z021.AKDK.0008', '2021-04-20', '6', '20210421 03:18:41', '10212181651', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:18:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z039.AKDK.0027) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z039.AKDK.0027) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z039.AKDK.0027', '2021-04-20', '172', '20210421 03:18:43', '10392173791', '#SUKSES point yg didapat 172')
ERROR - 2021-04-21 03:18:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z709.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z709.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z709.AKDK.0012', '2021-04-20', '10', '20210421 03:18:45', '17093150002', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:18:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0060) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0060) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0060', '2021-04-20', '0', '20210421 03:18:45', '20020321233', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:18:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:47 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0012', '2021-04-20', '106', '20210421 03:18:46', '17022180199', '#SUKSES point yg didapat 106')
ERROR - 2021-04-21 03:18:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z054.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z054.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z054.AKDK.0008', '2021-04-20', '16', '20210421 03:18:48', '19020047311', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:18:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:50 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0016', '2021-04-20', '34', '20210421 03:18:50', '21023210340', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:18:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z786.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z786.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z786.AKDK.0001', '2021-04-20', '4', '20210421 03:18:51', '20020287728', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:18:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0027) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:53 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0027) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0027', '2021-04-20', '4', '20210421 03:18:53', '17882181411', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:18:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D122.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D122.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D122.AKDK.0002', '2021-04-20', '96', '20210421 03:18:54', '21222170176', '#SUKSES point yg didapat 96')
ERROR - 2021-04-21 03:18:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z010.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:56 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z010.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z010.AKDK.0013', '2021-04-20', '10', '20210421 03:18:56', '10102180695', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:18:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0133) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:18:56 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0133) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0133', '2021-04-20', '0', '20210421 03:18:56', '21023211534', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z040.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:01 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z040.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z040.AKDK.0002', '2021-04-20', '12', '20210421 03:19:01', '10392190760', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:19:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z054.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:02 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z054.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z054.AKDK.0007', '2021-04-20', '176', '20210421 03:19:02', '21023211666', '#SUKSES point yg didapat 176')
ERROR - 2021-04-21 03:19:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D760.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:04 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D760.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D760.AKDK.0009', '2021-04-20', '16', '20210421 03:19:04', '27602170136', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:19:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:06 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0007', '2021-04-20', '34', '20210421 03:19:06', '17882170696', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:19:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0024) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:07 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0024) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0024', '2021-04-20', '104', '20210421 03:19:07', '20020254241', '#SUKSES point yg didapat 104')
ERROR - 2021-04-21 03:19:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D108.AKDK.0006) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:07 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D108.AKDK.0006) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D108.AKDK.0006', '2021-04-20', '0', '20210421 03:19:07', '515030937', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z765.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:09 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z765.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z765.AKDK.0004', '2021-04-20', '24', '20210421 03:19:09', '17652180472', '#SUKSES point yg didapat 24')
ERROR - 2021-04-21 03:19:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z754.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:10 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z754.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z754.AKDK.0002', '2021-04-20', '86', '20210421 03:19:10', '17542150296', '#SUKSES point yg didapat 86')
ERROR - 2021-04-21 03:19:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z754.AKDK.0024) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:12 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z754.AKDK.0024) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z754.AKDK.0024', '2021-04-20', '6', '20210421 03:19:12', '17542170380', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:19:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z039.AKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:13 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z039.AKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z039.AKDK.0011', '2021-04-20', '42', '20210421 03:19:13', '21023211527', '#SUKSES point yg didapat 42')
ERROR - 2021-04-21 03:19:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:22 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0010', '2021-04-20', '8', '20210421 03:19:22', '21023208803', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:19:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0024) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:23 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0024) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0024', '2021-04-20', '8', '20210421 03:19:23', '17022170238', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:19:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z815.AKDK.0023) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:25 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z815.AKDK.0023) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z815.AKDK.0023', '2021-04-20', '29', '20210421 03:19:25', '19033310083', '#SUKSES point yg didapat 29')
ERROR - 2021-04-21 03:19:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z023.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:26 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z023.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z023.AKDK.0009', '2021-04-20', '34', '20210421 03:19:26', '10392171278', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:19:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z057.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:30 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z057.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z057.AKDK.0008', '2021-04-20', '24', '20210421 03:19:29', '20020331919', '#SUKSES point yg didapat 24')
ERROR - 2021-04-21 03:19:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z706.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:31 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z706.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z706.AKDK.0005', '2021-04-20', '10', '20210421 03:19:31', '17062170140', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:19:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D121.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:33 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D121.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D121.AKDK.0003', '2021-04-20', '15', '20210421 03:19:33', '21213180006', '#SUKSES point yg didapat 15')
ERROR - 2021-04-21 03:19:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:33 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.AKDK.0015', '2021-04-20', '0', '20210421 03:19:33', '21023211449', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z821.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:34 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z821.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z821.AKDK.0012', '2021-04-20', '4', '20210421 03:19:34', '20020288018', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:19:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:37 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0004', '2021-04-20', '32', '20210421 03:19:37', '17812170463', '#SUKSES point yg didapat 32')
ERROR - 2021-04-21 03:19:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z832.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:39 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z832.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z832.AKDK.0009', '2021-04-20', '16', '20210421 03:19:39', '17392170451', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:19:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z077.AKDK.0017) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:41 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z077.AKDK.0017) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z077.AKDK.0017', '2021-04-20', '10', '20210421 03:19:41', '1J023190002', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z771.AKDJ.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z771.AKDJ.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z771.AKDJ.0002', '2021-04-19', '170', '20210421 03:19:43', '20020284194', '#SUKSES point yg didapat 170')
ERROR - 2021-04-21 03:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0040) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0040) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0040', '2021-04-20', '0', '20210421 03:19:43', '21023211403', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0169) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0169) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0169', '2021-04-20', '0', '20210421 03:19:43', '21023211626', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0071) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0071) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0071', '2021-04-20', '0', '20210421 03:19:43', '21023211595', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z028.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:44 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z028.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z028.AKDK.0013', '2021-04-20', '12', '20210421 03:19:44', '10282180610', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:19:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0008', '2021-04-20', '22', '20210421 03:19:46', '272411252', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:19:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z745.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:47 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z745.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z745.AKDK.0002', '2021-04-20', '12', '20210421 03:19:47', '271412859', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:19:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z775.AKDK.0019) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:49 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z775.AKDK.0019) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z775.AKDK.0019', '2021-04-20', '4', '20210421 03:19:49', '17752161218', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:19:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDJ.0103) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:49 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDJ.0103) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDJ.0103', '2021-04-19', '0', '20210421 03:19:49', '21023211233', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z704.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z704.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z704.AKDK.0001', '2021-04-20', '64', '20210421 03:19:51', '17043170008', '#SUKSES point yg didapat 64')
ERROR - 2021-04-21 03:19:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z077.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:52 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z077.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z077.AKDK.0010', '2021-04-20', '28', '20210421 03:19:52', '1J022190644', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:19:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDJ.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDJ.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDJ.0004', '2021-04-19', '216', '20210421 03:19:54', '21023211112', '#SUKSES point yg didapat 216')
ERROR - 2021-04-21 03:19:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0056) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0056) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0056', '2021-04-20', '0', '20210421 03:19:54', '21023211416', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:19:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z760.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z760.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z760.AKDK.0001', '2021-04-20', '114', '20210421 03:19:55', '17602180733', '#SUKSES point yg didapat 114')
ERROR - 2021-04-21 03:19:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z015.AKDL.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:19:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z015.AKDL.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z015.AKDL.0001', '2021-04-21', '32', '20210421 03:19:57', '210811039', '#SUKSES point yg didapat 32')
ERROR - 2021-04-21 03:20:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z771.AKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:05 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z771.AKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z771.AKDK.0011', '2021-04-20', '18', '20210421 03:20:05', '17712190415', '#SUKSES point yg didapat 18')
ERROR - 2021-04-21 03:20:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:06 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0001', '2021-04-20', '50', '20210421 03:20:06', '17262160136', '#SUKSES point yg didapat 50')
ERROR - 2021-04-21 03:20:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:08 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0005', '2021-04-20', '4', '20210421 03:20:08', '21023199995', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z765.AKDK.0029) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z765.AKDK.0029) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z765.AKDK.0029', '2021-04-20', '56', '20210421 03:20:11', '17652170003', '#SUKSES point yg didapat 56')
ERROR - 2021-04-21 03:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0012', '2021-04-20', '0', '20210421 03:20:11', '21023211374', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0094) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0094) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0094', '2021-04-20', '0', '20210421 03:20:11', '21023211480', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0152) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0152) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0152', '2021-04-20', '0', '20210421 03:20:11', '21023211582', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0080) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0080) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0080', '2021-04-20', '0', '20210421 03:20:11', '21023211628', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z829.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:13 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z829.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z829.AKDK.0001', '2021-04-20', '52', '20210421 03:20:13', '21023211017', '#SUKSES point yg didapat 52')
ERROR - 2021-04-21 03:20:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z763.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:14 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z763.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z763.AKDK.0015', '2021-04-20', '18', '20210421 03:20:14', '17632190099', '#SUKSES point yg didapat 18')
ERROR - 2021-04-21 03:20:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z729.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:16 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z729.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z729.AKDK.0008', '2021-04-20', '34', '20210421 03:20:16', '17292180766', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:20:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z787.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:17 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z787.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z787.AKDK.0010', '2021-04-20', '18', '20210421 03:20:17', '17872171641', '#SUKSES point yg didapat 18')
ERROR - 2021-04-21 03:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0068) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:19 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0068) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0068', '2021-04-20', '0', '20210421 03:20:19', '21023211434', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:19 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0010', '2021-04-20', '0', '20210421 03:20:19', '20020308367', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:20:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z008.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:21 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z008.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z008.AKDK.0010', '2021-04-20', '46', '20210421 03:20:21', '10032170175', '#SUKSES point yg didapat 46')
ERROR - 2021-04-21 03:20:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z033.AKDK.0028) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:22 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z033.AKDK.0028) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z033.AKDK.0028', '2021-04-20', '2', '20210421 03:20:22', '16962170368', '#SUKSES point yg didapat 2')
ERROR - 2021-04-21 03:20:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z787.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:24 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z787.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z787.AKDK.0004', '2021-04-20', '50', '20210421 03:20:24', '17872171310', '#SUKSES point yg didapat 50')
ERROR - 2021-04-21 03:20:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z772.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:25 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z772.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z772.AKDK.0013', '2021-04-20', '28', '20210421 03:20:25', '201511783', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:20:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z790.AKDK.0025) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z790.AKDK.0025) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z790.AKDK.0025', '2021-04-20', '34', '20210421 03:20:27', '17902170440', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:20:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z022.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:29 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z022.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z022.AKDK.0003', '2021-04-20', '4', '20210421 03:20:29', '10222150050', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:20:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z717.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:30 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z717.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z717.AKDK.0003', '2021-04-20', '38', '20210421 03:20:30', '27542180278', '#SUKSES point yg didapat 38')
ERROR - 2021-04-21 03:20:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z042.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z042.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z042.AKDK.0004', '2021-04-20', '100', '20210421 03:20:32', '20020283974', '#SUKSES point yg didapat 100')
ERROR - 2021-04-21 03:20:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z030.AKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:33 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z030.AKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z030.AKDK.0011', '2021-04-20', '6', '20210421 03:20:33', '10302180730', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:20:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z771.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:35 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z771.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z771.AKDK.0001', '2021-04-20', '22', '20210421 03:20:35', '17712160214', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:20:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z827.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:36 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z827.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z827.AKDK.0002', '2021-04-20', '8', '20210421 03:20:36', '19020066090', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:20:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z822.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z822.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z822.AKDK.0001', '2021-04-20', '12', '20210421 03:20:38', '20020297165', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z030.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:41 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z030.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z030.AKDK.0003', '2021-04-20', '132', '20210421 03:20:41', '10302160494', '#SUKSES point yg didapat 132')
ERROR - 2021-04-21 03:20:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z065.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z065.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z065.AKDK.0002', '2021-04-20', '42', '20210421 03:20:46', '10232170935', '#SUKSES point yg didapat 42')
ERROR - 2021-04-21 03:20:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0032) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:50 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0032) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0032', '2021-04-20', '28', '20210421 03:20:49', '21023210691', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:20:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0030) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0030) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0030', '2021-04-20', '32', '20210421 03:20:51', '19020032534', '#SUKSES point yg didapat 32')
ERROR - 2021-04-21 03:20:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0014) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:53 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0014) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0014', '2021-04-20', '18', '20210421 03:20:53', '19020031150', '#SUKSES point yg didapat 18')
ERROR - 2021-04-21 03:20:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0013', '2021-04-20', '18', '20210421 03:20:54', '17882181009', '#SUKSES point yg didapat 18')
ERROR - 2021-04-21 03:20:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z745.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:56 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z745.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z745.AKDK.0009', '2021-04-20', '4', '20210421 03:20:56', '17452161743', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:20:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z024.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z024.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z024.AKDK.0008', '2021-04-20', '14', '20210421 03:20:57', '21272160362', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:20:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z754.AKDK.0025) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:20:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z754.AKDK.0025) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z754.AKDK.0025', '2021-04-20', '20', '20210421 03:20:59', '21023211699', '#SUKSES point yg didapat 20')
ERROR - 2021-04-21 03:21:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D760.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:01 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D760.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D760.AKDK.0001', '2021-04-20', '70', '20210421 03:21:01', '20020226793', '#SUKSES point yg didapat 70')
ERROR - 2021-04-21 03:21:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z061.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:03 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z061.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z061.AKDK.0010', '2021-04-20', '14', '20210421 03:21:03', '21023199978', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:21:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0081) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:03 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0081) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0081', '2021-04-20', '0', '20210421 03:21:03', '21023207082', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z753.AKDK.0021) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:04 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z753.AKDK.0021) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z753.AKDK.0021', '2021-04-20', '88', '20210421 03:21:04', '17532190080', '#SUKSES point yg didapat 88')
ERROR - 2021-04-21 03:21:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z008.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:06 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z008.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z008.AKDK.0003', '2021-04-20', '144', '20210421 03:21:06', '21023211431', '#SUKSES point yg didapat 144')
ERROR - 2021-04-21 03:21:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z729.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:07 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z729.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z729.AKDK.0001', '2021-04-20', '6', '20210421 03:21:07', '17282150053', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:21:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:09 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0011', '2021-04-20', '22', '20210421 03:21:09', '20020241529', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:21:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0018) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:10 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0018) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0018', '2021-04-20', '8', '20210421 03:21:10', '10172150145', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:21:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z723.AKDK.0018) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:12 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z723.AKDK.0018) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z723.AKDK.0018', '2021-04-20', '4', '20210421 03:21:12', '17232150448', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:21:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z021.AKDK.0006) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:14 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z021.AKDK.0006) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z021.AKDK.0006', '2021-04-20', '16', '20210421 03:21:13', '18032180182', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:21:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z754.AKDK.0027) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:15 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z754.AKDK.0027) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z754.AKDK.0027', '2021-04-20', '4', '20210421 03:21:15', '20020233218', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:21:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDJ.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:19 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDJ.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDJ.0007', '2021-04-19', '14', '20210421 03:21:19', '10343180016', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:21:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z078.AKDD.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z078.AKDD.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z078.AKDD.0003', '2021-04-13', '90', '20210421 03:21:32', '10392171149', '#SUKSES point yg didapat 90')
ERROR - 2021-04-21 03:21:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0057) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0057) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0057', '2021-04-20', '0', '20210421 03:21:32', '21023211417', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0061) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0061) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0061', '2021-04-20', '0', '20210421 03:21:32', '21023211123', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0114) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0114) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0114', '2021-04-20', '0', '20210421 03:21:32', '20020294517', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.BKDK.0018) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:32 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.BKDK.0018) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.BKDK.0018', '2021-04-20', '0', '20210421 03:21:32', '21023211598', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:35 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0013', '2021-04-20', '12', '20210421 03:21:35', '17022170471', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:21:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z786.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:36 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z786.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z786.AKDK.0013', '2021-04-20', '16', '20210421 03:21:36', '21023198243', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:21:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z745.AKDK.0014) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z745.AKDK.0014) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z745.AKDK.0014', '2021-04-20', '6', '20210421 03:21:38', '274501661', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:21:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z814.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z814.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z814.AKDK.0003', '2021-04-20', '10', '20210421 03:21:40', '18142190648', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:21:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0083) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0083) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0083', '2021-04-20', '0', '20210421 03:21:40', '21023211448', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z815.AKDK.0020) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:41 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z815.AKDK.0020) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z815.AKDK.0020', '2021-04-20', '28', '20210421 03:21:41', '17672161080', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:21:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z020.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z020.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z020.AKDK.0010', '2021-04-20', '134', '20210421 03:21:43', '10202190628', '#SUKSES point yg didapat 134')
ERROR - 2021-04-21 03:21:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z039.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z039.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z039.AKDK.0007', '2021-04-20', '44', '20210421 03:21:45', '21322191061', '#SUKSES point yg didapat 44')
ERROR - 2021-04-21 03:21:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z078.AKDB.0019) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z078.AKDB.0019) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z078.AKDB.0019', '2021-04-11', '6', '20210421 03:21:46', '10392181026', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:21:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0015', '2021-04-20', '0', '20210421 03:21:46', '21023211377', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:21:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z829.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z829.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z829.AKDK.0007', '2021-04-20', '32', '20210421 03:21:48', '20020283439', '#SUKSES point yg didapat 32')
ERROR - 2021-04-21 03:21:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z048.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:49 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z048.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z048.AKDK.0005', '2021-04-20', '14', '20210421 03:21:49', '10482180091', '#SUKSES point yg didapat 14')
ERROR - 2021-04-21 03:21:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z702.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z702.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z702.AKDK.0009', '2021-04-20', '4', '20210421 03:21:51', '21023211041', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:21:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0038) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:53 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0038) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0038', '2021-04-20', '6', '20210421 03:21:53', '17812170894', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:21:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0018) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0018) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0018', '2021-04-20', '4', '20210421 03:21:54', '272610100', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:21:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z827.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:21:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z827.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z827.AKDK.0015', '2021-04-20', '22', '20210421 03:21:56', '20020246615', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:22:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0009', '2021-04-20', '16', '20210421 03:22:40', '17262150194', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:22:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z020.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:42 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z020.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z020.AKDK.0004', '2021-04-20', '90', '20210421 03:22:42', '10202161969', '#SUKSES point yg didapat 90')
ERROR - 2021-04-21 03:22:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z822.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z822.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z822.AKDK.0009', '2021-04-20', '10', '20210421 03:22:43', '20020227102', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:22:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z021.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z021.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z021.AKDK.0012', '2021-04-20', '112', '20210421 03:22:45', '10542180193', '#SUKSES point yg didapat 112')
ERROR - 2021-04-21 03:22:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.AKDJ.0022) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:45 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.AKDJ.0022) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.AKDJ.0022', '2021-04-19', '0', '20210421 03:22:45', '21023211094', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z728.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:47 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z728.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z728.AKDK.0008', '2021-04-20', '8', '20210421 03:22:47', '272911175', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:22:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0125) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:47 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0125) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0125', '2021-04-20', '0', '20210421 03:22:47', '21023211519', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKDK.0087) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:47 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKDK.0087) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKDK.0087', '2021-04-20', '0', '20210421 03:22:47', '21023198924', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z076.AKDK.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z076.AKDK.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z076.AKDK.0005', '2021-04-20', '104', '20210421 03:22:48', '16682170171', '#SUKSES point yg didapat 104')
ERROR - 2021-04-21 03:22:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z043.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:50 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z043.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z043.AKDK.0003', '2021-04-20', '8', '20210421 03:22:50', '10432181433', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:22:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKDK.0006) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:52 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKDK.0006) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKDK.0006', '2021-04-20', '112', '20210421 03:22:52', '20020315779', '#SUKSES point yg didapat 112')
ERROR - 2021-04-21 03:22:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z827.AKDK.0031) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:53 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z827.AKDK.0031) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z827.AKDK.0031', '2021-04-20', '20', '20210421 03:22:53', '17812180658', '#SUKSES point yg didapat 20')
ERROR - 2021-04-21 03:22:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z020.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z020.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z020.AKDK.0007', '2021-04-20', '106', '20210421 03:22:55', '275511356', '#SUKSES point yg didapat 106')
ERROR - 2021-04-21 03:22:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDJ.0091) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDJ.0091) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDJ.0091', '2021-04-19', '0', '20210421 03:22:55', '21023211217', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(ZJ05.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(ZJ05.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'ZJ05.AKDK.0002', '2021-04-20', '0', '20210421 03:22:55', '10022190129', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z078.AKDC.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z078.AKDC.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z078.AKDC.0005', '2021-04-12', '22', '20210421 03:22:57', '10392173066', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:22:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0107) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0107) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0107', '2021-04-20', '0', '20210421 03:22:57', '17352171313', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:22:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z753.AKDK.0020) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:22:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z753.AKDK.0020) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z753.AKDK.0020', '2021-04-20', '38', '20210421 03:22:59', '21023211545', '#SUKSES point yg didapat 38')
ERROR - 2021-04-21 03:23:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z002.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:00 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z002.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z002.AKDK.0001', '2021-04-20', '6', '20210421 03:23:00', '200002', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:23:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z076.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:02 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z076.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z076.AKDK.0001', '2021-04-20', '12', '20210421 03:23:02', '10622171557', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:23:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D120.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:03 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D120.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D120.AKDK.0004', '2021-04-20', '8', '20210421 03:23:03', '10432171871', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:23:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z773.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:05 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z773.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z773.AKDK.0001', '2021-04-20', '26', '20210421 03:23:05', '17732160397', '#SUKSES point yg didapat 26')
ERROR - 2021-04-21 03:23:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z815.AKDK.0017) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:06 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z815.AKDK.0017) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z815.AKDK.0017', '2021-04-20', '38', '20210421 03:23:06', '18152190482', '#SUKSES point yg didapat 38')
ERROR - 2021-04-21 03:23:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0004) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:08 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0004) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0004', '2021-04-20', '60', '20210421 03:23:08', '20020230921', '#SUKSES point yg didapat 60')
ERROR - 2021-04-21 03:23:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z786.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:09 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z786.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z786.AKDK.0003', '2021-04-20', '36', '20210421 03:23:09', '21023211473', '#SUKSES point yg didapat 36')
ERROR - 2021-04-21 03:23:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D122.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:11 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D122.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D122.AKDK.0001', '2021-04-20', '26', '20210421 03:23:11', '201411559', '#SUKSES point yg didapat 26')
ERROR - 2021-04-21 03:23:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z717.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:13 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z717.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z717.AKDK.0002', '2021-04-20', '38', '20210421 03:23:12', '27542180278', '#SUKSES point yg didapat 38')
ERROR - 2021-04-21 03:23:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z029.AKDK.0008) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:15 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z029.AKDK.0008) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z029.AKDK.0008', '2021-04-20', '8', '20210421 03:23:15', '20020311876', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:23:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z015.AKDK.0012) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:16 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z015.AKDK.0012) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z015.AKDK.0012', '2021-04-20', '56', '20210421 03:23:16', '10152160911', '#SUKSES point yg didapat 56')
ERROR - 2021-04-21 03:23:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0038) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:16 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0038) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0038', '2021-04-20', '0', '20210421 03:23:16', '21023211400', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:23:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z753.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:18 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z753.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z753.AKDK.0002', '2021-04-20', '50', '20210421 03:23:18', '20020281075', '#SUKSES point yg didapat 50')
ERROR - 2021-04-21 03:23:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D120.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:18 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D120.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D120.AKDK.0001', '2021-04-20', '0', '20210421 03:23:18', '515071135', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:23:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z030.AKDK.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:21 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z030.AKDK.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z030.AKDK.0016', '2021-04-20', '68', '20210421 03:23:21', '10302171335', '#SUKSES point yg didapat 68')
ERROR - 2021-04-21 03:23:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z028.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:22 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z028.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z028.AKDK.0003', '2021-04-20', '12', '20210421 03:23:22', '10323180002', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:23:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z034.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:24 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z034.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z034.AKDK.0015', '2021-04-20', '22', '20210421 03:23:24', '21232160620', '#SUKSES point yg didapat 22')
ERROR - 2021-04-21 03:23:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0041) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:25 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0041) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0041', '2021-04-20', '16', '20210421 03:23:25', '17812180648', '#SUKSES point yg didapat 16')
ERROR - 2021-04-21 03:23:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z830.AKDK.0020) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:27 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z830.AKDK.0020) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z830.AKDK.0020', '2021-04-20', '8', '20210421 03:23:27', '17682170233', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:23:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z022.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:29 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z022.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z022.AKDK.0002', '2021-04-20', '6', '20210421 03:23:29', '10222150050', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:23:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z753.AKDK.0010) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:34 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z753.AKDK.0010) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z753.AKDK.0010', '2021-04-20', '12', '20210421 03:23:34', '17532190432', '#SUKSES point yg didapat 12')
ERROR - 2021-04-21 03:23:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:37 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0013', '2021-04-20', '32', '20210421 03:23:37', '17812160464', '#SUKSES point yg didapat 32')
ERROR - 2021-04-21 03:23:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0014) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:38 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0014) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0014', '2021-04-20', '118', '20210421 03:23:38', '21023211471', '#SUKSES point yg didapat 118')
ERROR - 2021-04-21 03:23:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0029) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:40 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0029) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0029', '2021-04-20', '2', '20210421 03:23:40', '17882170985', '#SUKSES point yg didapat 2')
ERROR - 2021-04-21 03:23:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D111.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:42 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D111.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D111.AKDK.0001', '2021-04-20', '51', '20210421 03:23:42', '21113170030', '#SUKSES point yg didapat 51')
ERROR - 2021-04-21 03:23:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z002.AKDK.0007) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:43 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z002.AKDK.0007) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z002.AKDK.0007', '2021-04-20', '6', '20210421 03:23:43', '20020339391', '#SUKSES point yg didapat 6')
ERROR - 2021-04-21 03:23:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z821.AKDK.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:46 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z821.AKDK.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z821.AKDK.0003', '2021-04-20', '8', '20210421 03:23:46', '21023191957', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:23:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z729.AKDK.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z729.AKDK.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z729.AKDK.0016', '2021-04-20', '4', '20210421 03:23:48', '10492170357', '#SUKSES point yg didapat 4')
ERROR - 2021-04-21 03:23:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:50 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0002', '2021-04-20', '52', '20210421 03:23:50', '10082162081', '#SUKSES point yg didapat 52')
ERROR - 2021-04-21 03:23:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z830.AKDK.0025) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:53 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z830.AKDK.0025) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z830.AKDK.0025', '2021-04-20', '40', '20210421 03:23:53', '17682180831', '#SUKSES point yg didapat 40')
ERROR - 2021-04-21 03:23:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z024.AKDK.0015) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z024.AKDK.0015) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z024.AKDK.0015', '2021-04-20', '34', '20210421 03:23:54', '21212150039', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:23:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z754.AKDK.0026) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:23:56 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z754.AKDK.0026) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z754.AKDK.0026', '2021-04-20', '8', '20210421 03:23:56', '27662170275', '#SUKSES point yg didapat 8')
ERROR - 2021-04-21 03:24:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z008.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:03 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z008.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z008.AKDK.0009', '2021-04-20', '64', '20210421 03:24:03', '20020218674', '#SUKSES point yg didapat 64')
ERROR - 2021-04-21 03:24:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z781.AKDK.0017) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:04 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z781.AKDK.0017) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z781.AKDK.0017', '2021-04-20', '26', '20210421 03:24:04', '272413454', '#SUKSES point yg didapat 26')
ERROR - 2021-04-21 03:24:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z788.AKDK.0020) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:07 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z788.AKDK.0020) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z788.AKDK.0020', '2021-04-20', '34', '20210421 03:24:07', '17882181249', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:24:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0034) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:09 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0034) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0034', '2021-04-20', '0', '20210421 03:24:09', '21023211395', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:24:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z746.AKDK.0001) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:12 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z746.AKDK.0001) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z746.AKDK.0001', '2021-04-20', '34', '20210421 03:24:12', '17082170997', '#SUKSES point yg didapat 34')
ERROR - 2021-04-21 03:24:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z723.AKDK.0035) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:14 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z723.AKDK.0035) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z723.AKDK.0035', '2021-04-20', '52', '20210421 03:24:14', '21023209631', '#SUKSES point yg didapat 52')
ERROR - 2021-04-21 03:24:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z024.AKDK.0033) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:16 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z024.AKDK.0033) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z024.AKDK.0033', '2021-04-20', '10', '20210421 03:24:16', '10243160007', '#SUKSES point yg didapat 10')
ERROR - 2021-04-21 03:24:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:19 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0013', '2021-04-20', '0', '20210421 03:24:19', '21023211375', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:24:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKDK.0047) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:19 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKDK.0047) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKDK.0047', '2021-04-20', '0', '20210421 03:24:19', '21023211409', '#FAILED promo tidak ditemukan')
ERROR - 2021-04-21 03:24:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z760.AKDK.0017) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:21 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z760.AKDK.0017) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z760.AKDK.0017', '2021-04-20', '28', '20210421 03:24:21', '17602190353', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 03:24:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z007.AKDK.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 03:24:22 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z007.AKDK.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z007.AKDK.0009', '2021-04-20', '28', '20210421 03:24:22', '10073160010', '#SUKSES point yg didapat 28')
ERROR - 2021-04-21 09:28:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973847) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:28:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973847) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0001', 'D760', '2021-04-21', 'WS', '20210421 09:28:25', '276012485', '02', '1', 'Transaksi Sales', '50', '0', '20210421 09:28:25', '1821001')
ERROR - 2021-04-21 09:56:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973853) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:56:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973853) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0002', 'D760', '2021-04-21', 'WS', '20210421 09:56:04', '17042161557', '02', '1', 'Transaksi Sales', '54', '0', '20210421 09:56:04', '1821001')
ERROR - 2021-04-21 09:56:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973854) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:56:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973854) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0002', 'D760', '2021-04-21', 'WS', '20210421 09:56:10', '17042161557', '02', '1', 'Transaksi Sales', '54', '0', '20210421 09:56:10', '1821001')
ERROR - 2021-04-21 09:56:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973855) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:56:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973855) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0002', 'D760', '2021-04-21', 'WS', '20210421 09:56:13', '17042161557', '02', '1', 'Transaksi Sales', '54', '0', '20210421 09:56:13', '1821001')
ERROR - 2021-04-21 09:56:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973856) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:56:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973856) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0002', 'D760', '2021-04-21', 'WS', '20210421 09:56:16', '17042161557', '02', '1', 'Transaksi Sales', '54', '0', '20210421 09:56:16', '1821001')
ERROR - 2021-04-21 09:56:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973857) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 09:56:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973857) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0002', 'D760', '2021-04-21', 'WS', '20210421 09:56:19', '17042161557', '02', '1', 'Transaksi Sales', '54', '0', '20210421 09:56:19', '1821001')
ERROR - 2021-04-21 10:02:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973858) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:02:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973858) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0002', 'Z057', '2021-04-21', 'WS', '20210421 10:02:25', '10572180545', '02', '1', 'Transaksi Sales', '72', '0', '20210421 10:02:25', '1821001')
ERROR - 2021-04-21 10:02:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973859) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:02:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973859) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0002', 'Z057', '2021-04-21', 'WS', '20210421 10:02:27', '10572180545', '02', '1', 'Transaksi Sales', '72', '0', '20210421 10:02:27', '1821001')
ERROR - 2021-04-21 10:02:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973860) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:02:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973860) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0002', 'Z057', '2021-04-21', 'WS', '20210421 10:02:29', '10572180545', '02', '1', 'Transaksi Sales', '72', '0', '20210421 10:02:29', '1821001')
ERROR - 2021-04-21 10:06:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973861) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:06:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973861) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0004', 'Z077', '2021-04-21', 'WS', '20210421 10:06:10', '17252160453', '02', '1', 'Transaksi Sales', '8', '0', '20210421 10:06:10', '1821001')
ERROR - 2021-04-21 10:06:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973862) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:06:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973862) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0004', 'Z077', '2021-04-21', 'WS', '20210421 10:06:12', '17252160453', '02', '1', 'Transaksi Sales', '8', '0', '20210421 10:06:12', '1821001')
ERROR - 2021-04-21 10:06:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973863) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:06:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973863) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0005', 'Z077', '2021-04-21', 'WS', '20210421 10:06:13', '1J022190254', '02', '1', 'Transaksi Sales', '34', '0', '20210421 10:06:13', '1821001')
ERROR - 2021-04-21 10:06:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973864) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:06:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973864) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0005', 'Z077', '2021-04-21', 'WS', '20210421 10:06:15', '1J022190254', '02', '1', 'Transaksi Sales', '34', '0', '20210421 10:06:15', '1821001')
ERROR - 2021-04-21 10:06:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973865) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:06:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973865) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0003', 'Z077', '2021-04-21', 'WS', '20210421 10:06:17', '17252160453', '02', '1', 'Transaksi Sales Retur', '0', '6', '20210421 10:06:17', '1821001')
ERROR - 2021-04-21 10:09:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973869) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:09:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973869) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0003', 'Z044', '2021-04-21', 'WS', '20210421 10:09:09', '10442150226', '02', '1', 'Transaksi Sales', '12', '0', '20210421 10:09:09', '1821001')
ERROR - 2021-04-21 10:15:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973871) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:15:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973871) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z808.AKDL.0001', 'Z808', '2021-04-21', 'WS', '20210421 10:15:07', '200415062', '02', '1', 'Transaksi Sales', '20', '0', '20210421 10:15:07', '1821001')
ERROR - 2021-04-21 10:32:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973875) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:32:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973875) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0003', 'Z057', '2021-04-21', 'WS', '20210421 10:32:24', '21023211735', '02', '1', 'Transaksi Sales', '14', '0', '20210421 10:32:24', '1821001')
ERROR - 2021-04-21 10:32:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973876) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:32:25 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973876) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0003', 'Z057', '2021-04-21', 'WS', '20210421 10:32:25', '21023211735', '02', '1', 'Transaksi Sales', '14', '0', '20210421 10:32:25', '1821001')
ERROR - 2021-04-21 10:34:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973877) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:34:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973877) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0001', 'Z033', '2021-04-21', 'WS', '20210421 10:34:27', '20020278137', '02', '1', 'Transaksi Sales', '18', '0', '20210421 10:34:27', '1821001')
ERROR - 2021-04-21 10:34:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973878) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:34:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973878) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0001', 'Z033', '2021-04-21', 'WS', '20210421 10:34:29', '20020278137', '02', '1', 'Transaksi Sales', '18', '0', '20210421 10:34:29', '1821001')
ERROR - 2021-04-21 10:34:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973879) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:34:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973879) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0001', 'Z033', '2021-04-21', 'WS', '20210421 10:34:30', '20020278137', '02', '1', 'Transaksi Sales', '18', '0', '20210421 10:34:30', '1821001')
ERROR - 2021-04-21 10:34:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973880) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:34:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973880) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0002', 'Z033', '2021-04-21', 'WS', '20210421 10:34:32', '21023211690', '02', '1', 'Transaksi Sales', '34', '0', '20210421 10:34:32', '1821001')
ERROR - 2021-04-21 10:36:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973881) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:36:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973881) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z789.AKDL.0003', 'Z789', '2021-04-21', 'WS', '20210421 10:36:43', '21023194706', '02', '1', 'Transaksi Sales', '28', '0', '20210421 10:36:43', '1821001')
ERROR - 2021-04-21 10:39:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973884) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:39:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973884) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0004', 'Z044', '2021-04-21', 'WS', '20210421 10:39:06', '10442150226', '02', '1', 'Transaksi Sales', '2', '0', '20210421 10:39:06', '1821001')
ERROR - 2021-04-21 10:45:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973888) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:45:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973888) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z712.AKDL.0003', 'Z712', '2021-04-21', 'WS', '20210421 10:45:59', '17122170295', '02', '1', 'Transaksi Sales', '38', '0', '20210421 10:45:59', '1821001')
ERROR - 2021-04-21 10:54:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973896) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:54:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973896) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z831.AKDL.0001', 'Z831', '2021-04-21', 'WS', '20210421 10:54:59', '10552160197', '02', '1', 'Transaksi Sales', '60', '0', '20210421 10:54:59', '1821001')
ERROR - 2021-04-21 10:56:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973898) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:56:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973898) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z706.AKDL.0002', 'Z706', '2021-04-21', 'WS', '20210421 10:56:38', '17062150012', '02', '1', 'Transaksi Sales', '26', '0', '20210421 10:56:38', '1821001')
ERROR - 2021-04-21 10:59:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973901) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:59:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973901) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0001', 'Z826', '2021-04-21', 'WS', '20210421 10:59:30', '20020254377', '02', '1', 'Transaksi Sales', '8', '0', '20210421 10:59:30', '1821001')
ERROR - 2021-04-21 10:59:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973902) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:59:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973902) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0002', 'Z826', '2021-04-21', 'WS', '20210421 10:59:32', '20020254377', '02', '1', 'Transaksi Sales', '4', '0', '20210421 10:59:32', '1821001')
ERROR - 2021-04-21 10:59:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973903) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 10:59:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973903) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0002', 'Z826', '2021-04-21', 'WS', '20210421 10:59:33', '20020254377', '02', '1', 'Transaksi Sales', '4', '0', '20210421 10:59:33', '1821001')
ERROR - 2021-04-21 11:03:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973907) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:03:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973907) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKDL.0001', 'D127', '2021-04-21', 'WS', '20210421 11:03:55', '21023211758', '02', '1', 'Transaksi Sales', '24', '0', '20210421 11:03:55', '1821001')
ERROR - 2021-04-21 11:03:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973908) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:03:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973908) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKDL.0001', 'D127', '2021-04-21', 'WS', '20210421 11:03:57', '21023211758', '02', '1', 'Transaksi Sales', '24', '0', '20210421 11:03:57', '1821001')
ERROR - 2021-04-21 11:04:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973909) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:04:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973909) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0003', 'Z033', '2021-04-21', 'WS', '20210421 11:04:27', '10332180018', '02', '1', 'Transaksi Sales', '20', '0', '20210421 11:04:27', '1821001')
ERROR - 2021-04-21 11:04:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973910) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:04:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973910) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0003', 'Z033', '2021-04-21', 'WS', '20210421 11:04:29', '10332180018', '02', '1', 'Transaksi Sales', '20', '0', '20210421 11:04:29', '1821001')
ERROR - 2021-04-21 11:06:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973911) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:06:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973911) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z789.AKDL.0008', 'Z789', '2021-04-21', 'WS', '20210421 11:06:37', '20020328767', '02', '1', 'Transaksi Sales', '32', '0', '20210421 11:06:37', '1821001')
ERROR - 2021-04-21 11:09:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973912) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:09:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973912) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0005', 'Z044', '2021-04-21', 'WS', '20210421 11:09:09', '10442170790', '02', '1', 'Transaksi Sales', '162', '0', '20210421 11:09:09', '1821001')
ERROR - 2021-04-21 11:09:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973913) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:09:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973913) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0005', 'Z044', '2021-04-21', 'WS', '20210421 11:09:11', '10442170790', '02', '1', 'Transaksi Sales', '162', '0', '20210421 11:09:11', '1821001')
ERROR - 2021-04-21 11:10:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973915) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:10:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973915) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0006', 'Z752', '2021-04-21', 'WS', '20210421 11:10:16', '19020065320', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:10:16', '1821001')
ERROR - 2021-04-21 11:10:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973916) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:10:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973916) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0007', 'Z752', '2021-04-21', 'WS', '20210421 11:10:19', '17522151072', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:10:19', '1821001')
ERROR - 2021-04-21 11:18:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973918) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:18:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973918) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKDL.0003', 'Z770', '2021-04-21', 'WS', '20210421 11:18:30', '17702180397', '02', '1', 'Transaksi Sales', '64', '0', '20210421 11:18:30', '1821001')
ERROR - 2021-04-21 11:18:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973919) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:18:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973919) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z770.AKDL.0003', 'Z770', '2021-04-21', 'WS', '20210421 11:18:32', '17702180397', '02', '1', 'Transaksi Sales', '64', '0', '20210421 11:18:32', '1821001')
ERROR - 2021-04-21 11:20:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973920) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:20:39 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973920) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0003', 'Z045', '2021-04-21', 'WS', '20210421 11:20:39', '10452181482', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:20:39', '1821001')
ERROR - 2021-04-21 11:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973921) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:20:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973921) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0003', 'Z045', '2021-04-21', 'WS', '20210421 11:20:41', '10452181482', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:20:41', '1821001')
ERROR - 2021-04-21 11:21:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973924) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:21:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973924) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:21:14', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:21:14', '1821001')
ERROR - 2021-04-21 11:22:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973925) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:22:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973925) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0005', 'Z047', '2021-04-21', 'WS', '20210421 11:22:19', '10472190995', '02', '1', 'Transaksi Sales', '48', '0', '20210421 11:22:19', '1821001')
ERROR - 2021-04-21 11:22:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973926) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:22:54 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973926) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z807.AKDL.0004', 'Z807', '2021-04-21', 'WS', '20210421 11:22:54', '21023208841', '02', '1', 'Transaksi Sales', '50', '0', '20210421 11:22:54', '1821001')
ERROR - 2021-04-21 11:26:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973930) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:26:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973930) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0003', 'D760', '2021-04-21', 'WS', '20210421 11:26:00', '276012485', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:26:00', '1821001')
ERROR - 2021-04-21 11:26:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973931) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:26:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973931) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0003', 'D760', '2021-04-21', 'WS', '20210421 11:26:02', '276012485', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:26:02', '1821001')
ERROR - 2021-04-21 11:26:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973932) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:26:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973932) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D760.AKDL.0003', 'D760', '2021-04-21', 'WS', '20210421 11:26:03', '276012485', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:26:03', '1821001')
ERROR - 2021-04-21 11:26:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973933) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:26:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973933) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKDL.0002', 'Z805', '2021-04-21', 'WS', '20210421 11:26:40', '10602170769', '02', '1', 'Transaksi Sales', '36', '0', '20210421 11:26:40', '1821001')
ERROR - 2021-04-21 11:29:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973935) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:29:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973935) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKDL.0001', 'Z714', '2021-04-21', 'WS', '20210421 11:29:03', '19020046201', '02', '1', 'Transaksi Sales', '4', '0', '20210421 11:29:03', '1821001')
ERROR - 2021-04-21 11:29:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973936) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:29:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973936) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKDL.0002', 'Z714', '2021-04-21', 'WS', '20210421 11:29:05', '17142190386', '02', '1', 'Transaksi Sales', '4', '0', '20210421 11:29:05', '1821001')
ERROR - 2021-04-21 11:35:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973937) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:35:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973937) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:35:51', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:35:51', '1821001')
ERROR - 2021-04-21 11:35:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973938) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:35:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973938) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:35:53', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:35:53', '1821001')
ERROR - 2021-04-21 11:35:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973939) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:35:55 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973939) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:35:55', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:35:55', '1821001')
ERROR - 2021-04-21 11:36:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973940) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973940) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0004', 'Z014', '2021-04-21', 'WS', '20210421 11:36:06', '10142150614', '02', '1', 'Transaksi Sales', '16', '0', '20210421 11:36:06', '1821001')
ERROR - 2021-04-21 11:36:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973941) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973941) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0004', 'Z014', '2021-04-21', 'WS', '20210421 11:36:08', '10142150614', '02', '1', 'Transaksi Sales', '16', '0', '20210421 11:36:08', '1821001')
ERROR - 2021-04-21 11:36:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973942) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973942) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0010', 'Z077', '2021-04-21', 'WS', '20210421 11:36:11', '1J022190389', '02', '1', 'Transaksi Sales', '46', '0', '20210421 11:36:11', '1821001')
ERROR - 2021-04-21 11:36:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973943) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973943) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0010', 'Z077', '2021-04-21', 'WS', '20210421 11:36:13', '1J022190389', '02', '1', 'Transaksi Sales', '46', '0', '20210421 11:36:13', '1821001')
ERROR - 2021-04-21 11:36:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973944) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973944) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0012', 'Z077', '2021-04-21', 'WS', '20210421 11:36:15', '18162190834', '02', '1', 'Transaksi Sales', '6', '0', '20210421 11:36:15', '1821001')
ERROR - 2021-04-21 11:36:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973945) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973945) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:36:18', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:36:18', '1821001')
ERROR - 2021-04-21 11:36:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973946) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973946) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:36:19', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:36:19', '1821001')
ERROR - 2021-04-21 11:36:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973947) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:36:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973947) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:36:21', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:36:21', '1821001')
ERROR - 2021-04-21 11:39:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973948) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:39:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973948) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKDL.0002', 'Z015', '2021-04-21', 'WS', '20210421 11:39:06', '10152151407', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:39:06', '1821001')
ERROR - 2021-04-21 11:39:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973949) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:39:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973949) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKDL.0002', 'Z015', '2021-04-21', 'WS', '20210421 11:39:08', '10152151407', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:39:08', '1821001')
ERROR - 2021-04-21 11:40:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973950) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:40:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973950) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0008', 'Z752', '2021-04-21', 'WS', '20210421 11:40:16', '17522171118', '02', '1', 'Transaksi Sales', '16', '0', '20210421 11:40:16', '1821001')
ERROR - 2021-04-21 11:40:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973951) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:40:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973951) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0009', 'Z752', '2021-04-21', 'WS', '20210421 11:40:18', '20020216385', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:40:18', '1821001')
ERROR - 2021-04-21 11:40:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973952) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:40:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973952) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0009', 'Z752', '2021-04-21', 'WS', '20210421 11:40:20', '20020216385', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:40:20', '1821001')
ERROR - 2021-04-21 11:41:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973954) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:41:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973954) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKDL.0003', 'Z061', '2021-04-21', 'WS', '20210421 11:41:04', '21023211798', '02', '1', 'Transaksi Sales', '20', '0', '20210421 11:41:04', '1821001')
ERROR - 2021-04-21 11:46:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973955) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:46:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973955) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0003', 'Z010', '2021-04-21', 'WS', '20210421 11:46:02', '21023211797', '02', '1', 'Transaksi Sales', '14', '0', '20210421 11:46:02', '1821001')
ERROR - 2021-04-21 11:46:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973956) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:46:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973956) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0003', 'Z010', '2021-04-21', 'WS', '20210421 11:46:03', '21023211797', '02', '1', 'Transaksi Sales', '14', '0', '20210421 11:46:03', '1821001')
ERROR - 2021-04-21 11:46:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973957) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:46:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973957) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0003', 'Z010', '2021-04-21', 'WS', '20210421 11:46:05', '21023211797', '02', '1', 'Transaksi Sales', '14', '0', '20210421 11:46:05', '1821001')
ERROR - 2021-04-21 11:48:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973960) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:48:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973960) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKDL.0004', 'Z790', '2021-04-21', 'WS', '20210421 11:48:10', '21023211803', '02', '1', 'Transaksi Sales', '12', '0', '20210421 11:48:10', '1821001')
ERROR - 2021-04-21 11:48:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973961) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:48:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973961) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKDL.0004', 'Z790', '2021-04-21', 'WS', '20210421 11:48:12', '21023211803', '02', '1', 'Transaksi Sales', '12', '0', '20210421 11:48:12', '1821001')
ERROR - 2021-04-21 11:49:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973965) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:49:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973965) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0005', 'Z033', '2021-04-21', 'WS', '20210421 11:49:26', '17652161128', '02', '1', 'Transaksi Sales', '56', '0', '20210421 11:49:26', '1821001')
ERROR - 2021-04-21 11:50:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973967) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:50:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973967) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0004', 'Z047', '2021-04-21', 'WS', '20210421 11:50:30', '10472181908', '02', '1', 'Transaksi Sales', '40', '0', '20210421 11:50:30', '1821001')
ERROR - 2021-04-21 11:50:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973968) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:50:42 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973968) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0006', 'Z045', '2021-04-21', 'WS', '20210421 11:50:42', '18092180851', '02', '1', 'Transaksi Sales', '12', '0', '20210421 11:50:42', '1821001')
ERROR - 2021-04-21 11:55:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973971) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:55:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973971) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKDL.0001', 'Z709', '2021-04-21', 'WS', '20210421 11:55:35', '270911966', '02', '1', 'Transaksi Sales', '72', '0', '20210421 11:55:35', '1821001')
ERROR - 2021-04-21 11:55:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973972) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:55:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973972) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKDL.0001', 'Z709', '2021-04-21', 'WS', '20210421 11:55:37', '270911966', '02', '1', 'Transaksi Sales', '72', '0', '20210421 11:55:37', '1821001')
ERROR - 2021-04-21 11:55:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973973) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:55:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973973) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z709.AKDL.0001', 'Z709', '2021-04-21', 'WS', '20210421 11:55:38', '270911966', '02', '1', 'Transaksi Sales', '72', '0', '20210421 11:55:38', '1821001')
ERROR - 2021-04-21 11:56:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973974) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:56:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973974) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKDL.0003', 'Z805', '2021-04-21', 'WS', '20210421 11:56:41', '10602170769', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:56:41', '1821001')
ERROR - 2021-04-21 11:56:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973975) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:56:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973975) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKDL.0003', 'Z805', '2021-04-21', 'WS', '20210421 11:56:43', '10602170769', '02', '1', 'Transaksi Sales', '8', '0', '20210421 11:56:43', '1821001')
ERROR - 2021-04-21 11:56:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973976) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:56:44 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973976) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z805.AKDL.0004', 'Z805', '2021-04-21', 'WS', '20210421 11:56:44', '201411831', '02', '1', 'Transaksi Sales', '16', '0', '20210421 11:56:44', '1821001')
ERROR - 2021-04-21 11:59:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1973979) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 11:59:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1973979) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKDL.0006', 'Z714', '2021-04-21', 'WS', '20210421 11:59:19', '271414142', '02', '1', 'Transaksi Sales', '6', '0', '20210421 11:59:19', '1821001')
ERROR - 2021-04-21 12:46:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974019) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:46:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974019) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0010', 'Z010', '2021-04-21', 'WS', '20210421 12:46:05', '10112180205', '02', '1', 'Transaksi Sales', '54', '0', '20210421 12:46:05', '1821001')
ERROR - 2021-04-21 12:48:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974024) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:48:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974024) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKDL.0008', 'Z790', '2021-04-21', 'WS', '20210421 12:48:14', '17902170670', '02', '1', 'Transaksi Sales', '10', '0', '20210421 12:48:14', '1821001')
ERROR - 2021-04-21 12:49:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974027) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:49:27 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974027) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0010', 'Z033', '2021-04-21', 'WS', '20210421 12:49:27', '21033180089', '03', '1', 'Transaksi Sales', '15', '0', '20210421 12:49:27', '1921011')
ERROR - 2021-04-21 12:49:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974028) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:49:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974028) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0010', 'Z033', '2021-04-21', 'WS', '20210421 12:49:29', '21033180089', '03', '1', 'Transaksi Sales', '15', '0', '20210421 12:49:29', '1921011')
ERROR - 2021-04-21 12:51:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974030) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:51:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974030) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0009', 'Z047', '2021-04-21', 'WS', '20210421 12:51:14', '10472170550', '02', '1', 'Transaksi Sales', '6', '0', '20210421 12:51:14', '1821001')
ERROR - 2021-04-21 12:52:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974031) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:52:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974031) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z817.AKDL.0002', 'Z817', '2021-04-21', 'WS', '20210421 12:52:58', '18172190274', '02', '1', 'Transaksi Sales Retur', '0', '52', '20210421 12:52:58', '1821001')
ERROR - 2021-04-21 12:53:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974032) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:53:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974032) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z817.AKDL.0003', 'Z817', '2021-04-21', 'WS', '20210421 12:53:00', '18172190274', '02', '1', 'Transaksi Sales', '54', '0', '20210421 12:53:00', '1821001')
ERROR - 2021-04-21 12:56:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974033) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:56:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974033) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z731.AKDL.0002', 'Z731', '2021-04-21', 'WS', '20210421 12:56:11', '20020327899', '02', '1', 'Transaksi Sales', '4', '0', '20210421 12:56:11', '1821001')
ERROR - 2021-04-21 12:57:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974034) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:57:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974034) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKDL.0004', 'Z062', '2021-04-21', 'WS', '20210421 12:57:29', '20020299339', '02', '1', 'Transaksi Sales', '12', '0', '20210421 12:57:29', '1821001')
ERROR - 2021-04-21 12:57:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974035) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 12:57:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974035) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKDL.0005', 'Z062', '2021-04-21', 'WS', '20210421 12:57:32', '20020299339', '02', '1', 'Transaksi Sales', '4', '0', '20210421 12:57:32', '1821001')
ERROR - 2021-04-21 13:00:15 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974036) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:00:15 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974036) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKDL.0001', 'D136', '2021-04-21', 'WS', '20210421 13:00:15', '21362190110', '02', '1', 'Transaksi Sales', '54', '0', '20210421 13:00:15', '1821001')
ERROR - 2021-04-21 13:00:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974037) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:00:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974037) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKDL.0001', 'D136', '2021-04-21', 'WS', '20210421 13:00:18', '21362190110', '02', '1', 'Transaksi Sales', '54', '0', '20210421 13:00:18', '1821001')
ERROR - 2021-04-21 13:02:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974038) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:02:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974038) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D126.AKDL.0001', 'D126', '2021-04-21', 'WS', '20210421 13:02:59', '10492160422', '02', '1', 'Transaksi Sales', '18', '0', '20210421 13:02:59', '1821001')
ERROR - 2021-04-21 13:03:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974039) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:03:56 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974039) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKDL.0005', 'D127', '2021-04-21', 'WS', '20210421 13:03:56', '21272190365', '02', '1', 'Transaksi Sales', '8', '0', '20210421 13:03:56', '1821001')
ERROR - 2021-04-21 13:03:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974040) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:03:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974040) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKDL.0006', 'D127', '2021-04-21', 'WS', '20210421 13:03:58', '20020252186', '02', '1', 'Transaksi Sales', '40', '0', '20210421 13:03:58', '1821001')
ERROR - 2021-04-21 13:03:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974041) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:03:59 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974041) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D127.AKDL.0006', 'D127', '2021-04-21', 'WS', '20210421 13:03:59', '20020252186', '02', '1', 'Transaksi Sales', '40', '0', '20210421 13:03:59', '1821001')
ERROR - 2021-04-21 13:04:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974042) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:04:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974042) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.AKDL.0001', 'Z081', '2021-04-21', 'WS', '20210421 13:04:49', '10232181519', '02', '1', 'Transaksi Sales', '50', '0', '20210421 13:04:49', '1821001')
ERROR - 2021-04-21 13:04:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974043) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:04:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974043) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.AKDL.0001', 'Z081', '2021-04-21', 'WS', '20210421 13:04:51', '10232181519', '02', '1', 'Transaksi Sales', '50', '0', '20210421 13:04:51', '1821001')
ERROR - 2021-04-21 13:04:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974044) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:04:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974044) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z081.AKDL.0001', 'Z081', '2021-04-21', 'WS', '20210421 13:04:53', '10232181519', '02', '1', 'Transaksi Sales', '50', '0', '20210421 13:04:53', '1821001')
ERROR - 2021-04-21 13:06:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974045) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:06:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974045) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0012', 'Z014', '2021-04-21', 'WS', '20210421 13:06:06', '20020262468', '02', '1', 'Transaksi Sales', '12', '0', '20210421 13:06:06', '1821001')
ERROR - 2021-04-21 13:06:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974046) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:06:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974046) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0012', 'Z014', '2021-04-21', 'WS', '20210421 13:06:08', '20020262468', '02', '1', 'Transaksi Sales', '12', '0', '20210421 13:06:08', '1821001')
ERROR - 2021-04-21 13:10:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974047) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:10:17 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974047) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0017', 'Z752', '2021-04-21', 'WS', '20210421 13:10:17', '21023211851', '02', '1', 'Transaksi Sales', '20', '0', '20210421 13:10:17', '1821001')
ERROR - 2021-04-21 13:10:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974048) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:10:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974048) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0017', 'Z752', '2021-04-21', 'WS', '20210421 13:10:18', '21023211851', '02', '1', 'Transaksi Sales', '20', '0', '20210421 13:10:18', '1821001')
ERROR - 2021-04-21 13:10:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974049) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:10:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974049) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0017', 'Z752', '2021-04-21', 'WS', '20210421 13:10:20', '21023211851', '02', '1', 'Transaksi Sales', '20', '0', '20210421 13:10:20', '1821001')
ERROR - 2021-04-21 13:54:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974089) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:54:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974089) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.AKDL.0004', 'D121', '2021-04-21', 'WS', '20210421 13:54:37', '10172150616', '02', '1', 'Transaksi Sales', '52', '0', '20210421 13:54:37', '1821001')
ERROR - 2021-04-21 13:55:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974090) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:55:19 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974090) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0019', 'Z752', '2021-04-21', 'WS', '20210421 13:55:19', '17522160445', '02', '1', 'Transaksi Sales', '16', '0', '20210421 13:55:19', '1821001')
ERROR - 2021-04-21 13:55:21 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974091) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:55:21 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974091) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0019', 'Z752', '2021-04-21', 'WS', '20210421 13:55:21', '17522160445', '02', '1', 'Transaksi Sales', '16', '0', '20210421 13:55:21', '1821001')
ERROR - 2021-04-21 13:56:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974093) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:56:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974093) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKDL.0008', 'Z061', '2021-04-21', 'WS', '20210421 13:56:03', '10612190558', '02', '1', 'Transaksi Sales', '4', '0', '20210421 13:56:03', '1821001')
ERROR - 2021-04-21 13:56:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974095) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 13:56:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974095) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKDL.0004', 'Z766', '2021-04-21', 'WS', '20210421 13:56:28', '19020043041', '02', '1', 'Transaksi Sales', '16', '0', '20210421 13:56:28', '1821001')
ERROR - 2021-04-21 14:00:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974100) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:00:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974100) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKDL.0005', 'Z704', '2021-04-21', 'WS', '20210421 14:00:29', '270418065', '02', '1', 'Transaksi Sales', '30', '0', '20210421 14:00:29', '1821001')
ERROR - 2021-04-21 14:07:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974102) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:07:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974102) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0013', 'Z047', '2021-04-21', 'WS', '20210421 14:07:16', '20020342669', '02', '1', 'Transaksi Sales', '84', '0', '20210421 14:07:16', '1821001')
ERROR - 2021-04-21 14:10:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974103) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:10:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974103) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z718.AKDL.0003', 'Z718', '2021-04-21', 'WS', '20210421 14:10:19', '21023211900', '02', '1', 'Transaksi Sales', '46', '0', '20210421 14:10:19', '1821001')
ERROR - 2021-04-21 14:10:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974104) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:10:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974104) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z803.AKDL.0006', 'Z803', '2021-04-21', 'WS', '20210421 14:10:33', '18032180374', '02', '1', 'Transaksi Sales', '8', '0', '20210421 14:10:33', '1821001')
ERROR - 2021-04-21 14:14:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974105) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:14:29 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974105) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0006', 'Z826', '2021-04-21', 'WS', '20210421 14:14:29', '20020254377', '02', '1', 'Transaksi Sales', '2', '0', '20210421 14:14:29', '1821001')
ERROR - 2021-04-21 14:14:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974106) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:14:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974106) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0006', 'Z826', '2021-04-21', 'WS', '20210421 14:14:30', '20020254377', '02', '1', 'Transaksi Sales', '2', '0', '20210421 14:14:30', '1821001')
ERROR - 2021-04-21 14:16:01 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974107) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:01 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974107) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:01', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:01', '1821001')
ERROR - 2021-04-21 14:16:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974108) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974108) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:03', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:03', '1821001')
ERROR - 2021-04-21 14:16:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974109) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974109) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:04', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:04', '1821001')
ERROR - 2021-04-21 14:16:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974110) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974110) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:06', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:06', '1821001')
ERROR - 2021-04-21 14:16:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974111) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974111) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:07', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:07', '1821001')
ERROR - 2021-04-21 14:16:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974112) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:16:09 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974112) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0015', 'Z010', '2021-04-21', 'WS', '20210421 14:16:09', '201112180', '02', '1', 'Transaksi Sales', '190', '0', '20210421 14:16:09', '1821001')
ERROR - 2021-04-21 14:19:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974114) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:19:38 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974114) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0019', 'Z033', '2021-04-21', 'WS', '20210421 14:19:38', '10332171270', '02', '1', 'Transaksi Sales', '4', '0', '20210421 14:19:38', '1821001')
ERROR - 2021-04-21 14:19:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974115) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:19:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974115) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0020', 'Z033', '2021-04-21', 'WS', '20210421 14:19:40', '10332163495', '02', '1', 'Transaksi Sales', '36', '0', '20210421 14:19:40', '1821001')
ERROR - 2021-04-21 14:25:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974122) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:25:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974122) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0020', 'Z752', '2021-04-21', 'WS', '20210421 14:25:22', '17522190464', '02', '1', 'Transaksi Sales', '8', '0', '20210421 14:25:22', '1821001')
ERROR - 2021-04-21 14:27:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974124) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:27:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974124) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKDL.0006', 'Z062', '2021-04-21', 'WS', '20210421 14:27:40', '10622170296', '02', '1', 'Transaksi Sales', '38', '0', '20210421 14:27:40', '1821001')
ERROR - 2021-04-21 14:27:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974125) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:27:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974125) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z062.AKDL.0006', 'Z062', '2021-04-21', 'WS', '20210421 14:27:45', '10622170296', '02', '1', 'Transaksi Sales', '38', '0', '20210421 14:27:45', '1821001')
ERROR - 2021-04-21 14:28:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974126) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:28:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974126) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0009', 'Z044', '2021-04-21', 'WS', '20210421 14:28:34', '21023208245', '02', '1', 'Transaksi Sales', '24', '0', '20210421 14:28:34', '1821001')
ERROR - 2021-04-21 14:29:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974127) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:29:40 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974127) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0006', 'D132', '2021-04-21', 'WS', '20210421 14:29:40', '21322190885', '02', '1', 'Transaksi Sales', '4', '0', '20210421 14:29:40', '1821001')
ERROR - 2021-04-21 14:33:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974129) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:33:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974129) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z831.AKDL.0008', 'Z831', '2021-04-21', 'WS', '20210421 14:33:28', '21023211843', '02', '1', 'Transaksi Sales', '162', '0', '20210421 14:33:28', '1821001')
ERROR - 2021-04-21 14:38:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974132) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:38:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974132) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0013', 'Z045', '2021-04-21', 'WS', '20210421 14:38:20', '21023211912', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:38:20', '1821001')
ERROR - 2021-04-21 14:38:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974133) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:38:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974133) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0013', 'Z045', '2021-04-21', 'WS', '20210421 14:38:22', '21023211912', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:38:22', '1821001')
ERROR - 2021-04-21 14:38:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974134) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:38:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974134) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z045.AKDL.0013', 'Z045', '2021-04-21', 'WS', '20210421 14:38:24', '21023211912', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:38:24', '1821001')
ERROR - 2021-04-21 14:43:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974138) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:43:03 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974138) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKDL.0004', 'Z032', '2021-04-21', 'WS', '20210421 14:43:03', '275912377', '02', '1', 'Transaksi Sales', '18', '0', '20210421 14:43:03', '1821001')
ERROR - 2021-04-21 14:43:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974139) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:43:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974139) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKDL.0004', 'Z032', '2021-04-21', 'WS', '20210421 14:43:05', '275912377', '02', '1', 'Transaksi Sales', '18', '0', '20210421 14:43:05', '1821001')
ERROR - 2021-04-21 14:43:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974140) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:43:07 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974140) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKDL.0004', 'Z032', '2021-04-21', 'WS', '20210421 14:43:07', '275912377', '02', '1', 'Transaksi Sales', '18', '0', '20210421 14:43:07', '1821001')
ERROR - 2021-04-21 14:44:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974141) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:44:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974141) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0007', 'D132', '2021-04-21', 'WS', '20210421 14:44:45', '21322180314', '02', '1', 'Transaksi Sales', '14', '0', '20210421 14:44:45', '1821001')
ERROR - 2021-04-21 14:44:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974142) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:44:46 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974142) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0007', 'D132', '2021-04-21', 'WS', '20210421 14:44:46', '21322180314', '02', '1', 'Transaksi Sales', '14', '0', '20210421 14:44:46', '1821001')
ERROR - 2021-04-21 14:44:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974143) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:44:49 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974143) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0007', 'D132', '2021-04-21', 'WS', '20210421 14:44:49', '21322180314', '02', '1', 'Transaksi Sales', '14', '0', '20210421 14:44:49', '1821001')
ERROR - 2021-04-21 14:44:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974144) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:44:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974144) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0007', 'D132', '2021-04-21', 'WS', '20210421 14:44:51', '21322180314', '02', '1', 'Transaksi Sales', '14', '0', '20210421 14:44:51', '1821001')
ERROR - 2021-04-21 14:44:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974145) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:44:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974145) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0008', 'D132', '2021-04-21', 'WS', '20210421 14:44:53', '10392150151', '02', '1', 'Transaksi Sales', '64', '0', '20210421 14:44:53', '1821001')
ERROR - 2021-04-21 14:46:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974147) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:46:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974147) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0016', 'Z010', '2021-04-21', 'WS', '20210421 14:46:02', '10102180988', '02', '1', 'Transaksi Sales', '10', '0', '20210421 14:46:02', '1821001')
ERROR - 2021-04-21 14:46:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974148) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:46:04 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974148) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKDL.0016', 'Z010', '2021-04-21', 'WS', '20210421 14:46:04', '10102180988', '02', '1', 'Transaksi Sales', '10', '0', '20210421 14:46:04', '1821001')
ERROR - 2021-04-21 14:47:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974150) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:47:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974150) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0011', 'Z057', '2021-04-21', 'WS', '20210421 14:47:23', '10572171769', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:47:23', '1821001')
ERROR - 2021-04-21 14:49:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974151) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:49:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974151) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0023', 'Z033', '2021-04-21', 'WS', '20210421 14:49:28', '10332161436', '02', '1', 'Transaksi Sales', '58', '0', '20210421 14:49:28', '1821001')
ERROR - 2021-04-21 14:49:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974152) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:49:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974152) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.AKDL.0023', 'Z033', '2021-04-21', 'WS', '20210421 14:49:30', '10332161436', '02', '1', 'Transaksi Sales', '58', '0', '20210421 14:49:30', '1821001')
ERROR - 2021-04-21 14:50:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974153) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:50:51 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974153) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0009', 'Z047', '2021-04-21', 'WS', '20210421 14:50:51', '10472170550', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:50:51', '1821001')
ERROR - 2021-04-21 14:50:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974154) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:50:53 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974154) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0011', 'Z047', '2021-04-21', 'WS', '20210421 14:50:53', '10472181296', '02', '1', 'Transaksi Sales', '6', '0', '20210421 14:50:53', '1821001')
ERROR - 2021-04-21 14:51:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974155) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:51:13 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974155) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0016', 'Z014', '2021-04-21', 'WS', '20210421 14:51:13', '10332172394', '02', '1', 'Transaksi Sales', '14', '0', '20210421 14:51:13', '1821001')
ERROR - 2021-04-21 14:55:20 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974160) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:55:20 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974160) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0022', 'Z752', '2021-04-21', 'WS', '20210421 14:55:20', '21023211928', '02', '1', 'Transaksi Sales', '24', '0', '20210421 14:55:20', '1821001')
ERROR - 2021-04-21 14:55:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974161) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:55:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974161) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0022', 'Z752', '2021-04-21', 'WS', '20210421 14:55:22', '21023211928', '02', '1', 'Transaksi Sales', '24', '0', '20210421 14:55:22', '1821001')
ERROR - 2021-04-21 14:55:23 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974162) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:55:23 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974162) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z752.AKDL.0022', 'Z752', '2021-04-21', 'WS', '20210421 14:55:23', '21023211928', '02', '1', 'Transaksi Sales', '24', '0', '20210421 14:55:23', '1821001')
ERROR - 2021-04-21 14:58:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974167) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:58:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974167) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKDL.0012', 'Z044', '2021-04-21', 'WS', '20210421 14:58:37', '20020300285', '02', '1', 'Transaksi Sales', '126', '0', '20210421 14:58:37', '1821001')
ERROR - 2021-04-21 14:59:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974169) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 14:59:41 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974169) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKDL.0009', 'D132', '2021-04-21', 'WS', '20210421 14:59:41', '10392161452', '02', '1', 'Transaksi Sales', '8', '0', '20210421 14:59:41', '1821001')
ERROR - 2021-04-21 15:09:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974177) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:09:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974177) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D121.AKDL.0006', 'D121', '2021-04-21', 'WS', '20210421 15:09:37', '272312114', '02', '1', 'Transaksi Sales', '34', '0', '20210421 15:09:37', '1821001')
ERROR - 2021-04-21 15:10:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974178) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:10:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974178) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z728.AKDL.0003', 'Z728', '2021-04-21', 'WS', '20210421 15:10:12', '272811547', '02', '1', 'Transaksi Sales', '26', '0', '20210421 15:10:12', '1821001')
ERROR - 2021-04-21 15:14:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974186) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:14:28 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974186) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0007', 'Z826', '2021-04-21', 'WS', '20210421 15:14:28', '20020254377', '02', '1', 'Transaksi Sales', '6', '0', '20210421 15:14:28', '1821001')
ERROR - 2021-04-21 15:14:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974187) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:14:30 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974187) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z826.AKDL.0007', 'Z826', '2021-04-21', 'WS', '20210421 15:14:30', '20020254377', '02', '1', 'Transaksi Sales', '6', '0', '20210421 15:14:30', '1821001')
ERROR - 2021-04-21 15:15:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974188) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:15:33 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974188) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKDL.0006', 'Z704', '2021-04-21', 'WS', '20210421 15:15:33', '27602161160', '02', '1', 'Transaksi Sales', '14', '0', '20210421 15:15:33', '1821001')
ERROR - 2021-04-21 15:45:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974208) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:45:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974208) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D136.AKDL.0003', 'D136', '2021-04-21', 'WS', '20210421 15:45:18', '20020245024', '02', '1', 'Transaksi Sales', '142', '0', '20210421 15:45:18', '1821001')
ERROR - 2021-04-21 15:47:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974210) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:47:24 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974210) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z057.AKDL.0013', 'Z057', '2021-04-21', 'WS', '20210421 15:47:24', '21262170247', '02', '1', 'Transaksi Sales', '10', '0', '20210421 15:47:24', '1821001')
ERROR - 2021-04-21 15:51:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974213) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:51:12 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974213) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0020', 'Z014', '2021-04-21', 'WS', '20210421 15:51:12', '261610258', '02', '1', 'Transaksi Sales', '138', '0', '20210421 15:51:12', '1821001')
ERROR - 2021-04-21 15:51:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974214) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:51:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974214) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z014.AKDL.0020', 'Z014', '2021-04-21', 'WS', '20210421 15:51:14', '261610258', '02', '1', 'Transaksi Sales', '138', '0', '20210421 15:51:14', '1821001')
ERROR - 2021-04-21 15:58:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974222) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:58:00 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974222) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKDL.0009', 'Z032', '2021-04-21', 'WS', '20210421 15:58:00', '10322180636', '02', '1', 'Transaksi Sales', '26', '0', '20210421 15:58:00', '1821001')
ERROR - 2021-04-21 15:58:02 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974223) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 15:58:02 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974223) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z032.AKDL.0010', 'Z032', '2021-04-21', 'WS', '20210421 15:58:02', '10322160832', '02', '1', 'Transaksi Sales', '146', '0', '20210421 15:58:02', '1821001')
ERROR - 2021-04-21 16:00:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974226) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 16:00:35 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974226) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKDL.0007', 'Z704', '2021-04-21', 'WS', '20210421 16:00:35', '17042180765', '02', '1', 'Transaksi Sales', '12', '0', '20210421 16:00:35', '1821001')
ERROR - 2021-04-21 16:00:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974227) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 16:00:37 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974227) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKDL.0007', 'Z704', '2021-04-21', 'WS', '20210421 16:00:37', '17042180765', '02', '1', 'Transaksi Sales', '12', '0', '20210421 16:00:37', '1821001')
ERROR - 2021-04-21 16:30:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974249) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 16:30:34 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974249) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z704.AKDL.0008', 'Z704', '2021-04-21', 'WS', '20210421 16:30:34', '17042180765', '02', '1', 'Transaksi Sales', '16', '0', '20210421 16:30:34', '1821001')
ERROR - 2021-04-21 20:09:08 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974344) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 20:09:08 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974344) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKDL.0026', 'Z047', '2021-04-21', 'WS', '20210421 20:09:08', '17692160048', '02', '1', 'Transaksi Sales', '60', '0', '20210421 20:09:08', '1821001')
ERROR - 2021-04-21 20:21:22 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1974355) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 20:21:22 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1974355) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z077.AKDL.0025', 'Z077', '2021-04-21', 'WS', '20210421 20:21:22', '1J022190337', '02', '1', 'Transaksi Sales', '34', '0', '20210421 20:21:22', '1821001')
ERROR - 2021-04-21 22:05:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023212079) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 22:05:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023212079) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-21 22:05:06 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023212079) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023212079', 'Hasni', '', '085255001164', '9e96072e8c1de10e568061098faa2d26', '2021-04-21', 'Elshop_Elzatta', '', '562362', '02', 'ZHO')
ERROR - 2021-04-21 22:05:06 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023212079) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023212079', 'Hasni', '', '085255001164', '9e96072e8c1de10e568061098faa2d26', '2021-04-21', 'Elshop_Elzatta', '', '893303', '02', 'ZHO')
