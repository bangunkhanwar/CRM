<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-27 03:01:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1938798) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:01:16 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1938798) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D126.AKCQ.0001', 'D126', '2021-03-26', 'WS', '20210327 03:01:16', '17413160002', '03', '1', 'Transaksi Sales', '10', '0', '20210327 03:01:16', '1921011')
ERROR - 2021-03-27 03:01:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1938799) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:01:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1938799) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z035.AKCQ.0007', 'Z035', '2021-03-26', 'WS', '20210327 03:01:18', '10362180598', '02', '1', 'Transaksi Sales', '8', '0', '20210327 03:01:18', '1821001')
ERROR - 2021-03-27 03:06:47 --> 404 Page Not Found: /index
ERROR - 2021-03-27 03:16:14 --> 404 Page Not Found: /index
ERROR - 2021-03-27 03:17:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z065.AKCQ.0006) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:39 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z065.AKCQ.0006) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z065.AKCQ.0006', '2021-03-26', '6', '20210327 03:17:39', '10652180364', '#SUKSES point yg didapat 6')
ERROR - 2021-03-27 03:17:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D132.AKCQ.0054) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:42 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D132.AKCQ.0054) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'D132.AKCQ.0054', '2021-03-26', '54', '20210327 03:17:42', '10392181881', '#SUKSES point yg didapat 54')
ERROR - 2021-03-27 03:17:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z726.AKCQ.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:48 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z726.AKCQ.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z726.AKCQ.0016', '2021-03-26', '36', '20210327 03:17:47', '17262160855', '#SUKSES point yg didapat 36')
ERROR - 2021-03-27 03:17:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z076.AKCQ.0034) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:51 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z076.AKCQ.0034) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z076.AKCQ.0034', '2021-03-26', '188', '20210327 03:17:51', '21023200456', '#SUKSES point yg didapat 188')
ERROR - 2021-03-27 03:17:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z833.AKCQ.0006) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:52 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z833.AKCQ.0006) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z833.AKCQ.0006', '2021-03-26', '8', '20210327 03:17:52', '10372180763', '#SUKSES point yg didapat 8')
ERROR - 2021-03-27 03:17:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z039.AKCQ.0003) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:54 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z039.AKCQ.0003) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z039.AKCQ.0003', '2021-03-26', '2', '20210327 03:17:54', '21023192698', '#SUKSES point yg didapat 2')
ERROR - 2021-03-27 03:17:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z065.AKCQ.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:55 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z065.AKCQ.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z065.AKCQ.0002', '2021-03-26', '8', '20210327 03:17:55', '10502180086', '#SUKSES point yg didapat 8')
ERROR - 2021-03-27 03:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z029.AKCQ.0002) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z029.AKCQ.0002) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z029.AKCQ.0002', '2021-03-26', '26', '20210327 03:17:57', '202901163', '#SUKSES point yg didapat 26')
ERROR - 2021-03-27 03:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKCP.0046) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKCP.0046) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKCP.0046', '2021-03-25', '0', '20210327 03:17:57', '21023203868', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:17:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKCP.0103) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:57 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKCP.0103) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKCP.0103', '2021-03-25', '0', '20210327 03:17:57', '19020015287', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z047.AKCQ.0055) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z047.AKCQ.0055) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z047.AKCQ.0055', '2021-03-26', '44', '20210327 03:17:59', '17902190129', '#SUKSES point yg didapat 44')
ERROR - 2021-03-27 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.AKCQ.0062) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.AKCQ.0062) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.AKCQ.0062', '2021-03-26', '0', '20210327 03:17:59', '21023204147', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKCQ.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKCQ.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKCQ.0009', '2021-03-26', '0', '20210327 03:17:59', '21023204018', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z301.BKCQ.0011) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z301.BKCQ.0011) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'Z301.BKCQ.0011', '2021-03-26', '0', '20210327 03:17:59', '21023204016', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:17:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(D301.BKCQ.0036) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:17:59 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(D301.BKCQ.0036) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('0', 'D301.BKCQ.0036', '2021-03-26', '0', '20210327 03:17:59', '19020000770', '#FAILED promo tidak ditemukan')
ERROR - 2021-03-27 03:18:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z003.AKCQ.0005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:18:00 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z003.AKCQ.0005) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z003.AKCQ.0005', '2021-03-26', '10', '20210327 03:18:00', '20030313267', '#SUKSES point yg didapat 10')
ERROR - 2021-03-27 03:18:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z765.AKCQ.0018) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:18:05 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z765.AKCQ.0018) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z765.AKCQ.0018', '2021-03-26', '18', '20210327 03:18:05', '19020064939', '#SUKSES point yg didapat 18')
ERROR - 2021-03-27 03:18:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z020.AKCQ.0016) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:18:06 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z020.AKCQ.0016) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z020.AKCQ.0016', '2021-03-26', '36', '20210327 03:18:06', '271514609', '#SUKSES point yg didapat 36')
ERROR - 2021-03-27 03:18:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z772.AKCQ.0009) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:18:14 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z772.AKCQ.0009) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z772.AKCQ.0009', '2021-03-26', '12', '20210327 03:18:13', '17722160427', '#SUKSES point yg didapat 12')
ERROR - 2021-03-27 03:18:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;LogSalesPoint_pkey&quot;
DETAIL:  Key (&quot;TransNum&quot;)=(Z772.AKCQ.0013) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 03:18:18 --> Query error: ERROR:  duplicate key value violates unique constraint "LogSalesPoint_pkey"
DETAIL:  Key ("TransNum")=(Z772.AKCQ.0013) already exists. - Invalid query: INSERT INTO "terminal"."LogSalesPoint" ("StatusCode", "TransNum", "TransDate", "JumlahPoint", "LastUpdate", "CustCode", "ResultMessage") VALUES ('1', 'Z772.AKCQ.0013', '2021-03-26', '16', '20210327 03:18:16', '17722170294', '#SUKSES point yg didapat 16')
ERROR - 2021-03-27 08:30:45 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1939588) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 08:30:45 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1939588) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z044.AKCR.0001', 'Z044', '2021-03-27', 'WS', '20210327 08:30:45', '10442170053', '02', '1', 'Transaksi Sales', '62', '0', '20210327 08:30:45', '1821001')
ERROR - 2021-03-27 09:44:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1939595) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 09:44:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1939595) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z010.AKCR.0002', 'Z010', '2021-03-27', 'WS', '20210327 09:44:05', '10102170604', '02', '1', 'Transaksi Sales', '36', '0', '20210327 09:44:05', '1821001')
ERROR - 2021-03-27 13:40:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:26 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:31 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:36 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:41 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:46 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:51 --> Unable to connect to the database
ERROR - 2021-03-27 13:40:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:40:56 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:01 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:06 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:11 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:16 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:21 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:26 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:31 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:44 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:44 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:44 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-03-27 13:41:44 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:44 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:44 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-03-27 13:41:44 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-03-27 13:41:44 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-03-27 13:41:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:45 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:45 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:45 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-03-27 13:41:45 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 13:41:45 --> Unable to connect to the database
ERROR - 2021-03-27 13:41:45 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-03-27 13:41:45 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-03-27 13:41:45 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-03-27 14:41:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:21 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:26 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:31 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:36 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:39 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:39 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:39 --> Unable to connect to the database
ERROR - 2021-03-27 14:41:39 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-03-27 14:41:39 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '085347631182'
				OR "tbl"."HP" = '085347631182' 
				OR tbl."BarCode" = '085347631182'
			)
 LIMIT 1
ERROR - 2021-03-27 14:41:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-03-27 14:41:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:41:41 --> Unable to connect to the database
ERROR - 2021-03-27 14:42:02 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:42:02 --> Unable to connect to the database
ERROR - 2021-03-27 14:42:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:42:21 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:31 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:36 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:36 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:41 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:41 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:46 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:46 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:51 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:51 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:56 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:56 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:57 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:57 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:57 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-03-27 14:47:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-03-27 14:47:57 --> Unable to connect to the database
ERROR - 2021-03-27 14:47:57 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-03-27 14:47:57 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-03-27 14:47:57 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-03-27 17:20:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023204359) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 17:20:32 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023204359) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023204359', '', 'beclenabe@gmail.com', '', 'b24d232a38b5a11143ceb5f6fba0c1c8', '2021-03-27', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-03-27 17:20:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1939893) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 17:20:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1939893) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-27',
			'21023204360',
			now(),
			'21023204360',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023204360' AND "TransType" = 4 )
ERROR - 2021-03-27 17:20:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1939893) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 17:20:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1939893) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-03-27',
			'21023204360',
			now(),
			'21023204360',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023204360' AND "TransType" = 4 )
ERROR - 2021-03-27 17:23:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(1939893) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-27 17:23:32 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(1939893) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKCR.0051', 'D132', '2021-03-27', 'WS', '20210327 17:23:32', '21322180310', '02', '1', 'Transaksi Sales', '118', '0', '20210327 17:23:32', '1821001')
