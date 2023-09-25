<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2022-02-06 03:01:14 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2302573) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-06 03:01:14 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2302573) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z059.ALB5.0003', 'Z059', '2022-02-05', 'WS', '20220206 03:01:14', '10592162074', '02', '1', 'Transaksi Sales', '8', '0', '20220206 03:01:14', '1821001')
ERROR - 2022-02-06 09:24:10 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2303211) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-06 09:24:10 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2303211) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z033.ALB6.0001', 'Z033', '2022-02-06', 'WS', '20220206 09:24:10', '10332152468', '02', '1', 'Transaksi Sales', '70', '0', '20220206 09:24:10', '1821001')
ERROR - 2022-02-06 09:30:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  could not extend file &quot;base/16384/3421251&quot;: No space left on device
HINT:  Check free disk space. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-06 09:30:55 --> Query error: ERROR:  could not extend file "base/16384/3421251": No space left on device
HINT:  Check free disk space. - Invalid query: UPDATE "terminal"."LogSalesPoint" SET "StatusCode" = '1', "TransNum" = 'Z087.ALB5.0018', "TransDate" = '2022-02-05', "JumlahPoint" = '146', "LastUpdate" = '20220206 09:30:55', "CustCode" = '21023190777', "ResultMessage" = '#SUKSES point yg didapat 146'
WHERE "TransNum" = 'Z087.ALB5.0018'
ERROR - 2022-02-06 10:28:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;089680750744&quot;
LINE 4:     tbl.&quot;MemberCode&quot; = ''089680750744'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2022-02-06 10:28:54 --> Query error: ERROR:  syntax error at or near "089680750744"
LINE 4:     tbl."MemberCode" = ''089680750744'
                                 ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = ''089680750744'
				OR "tbl"."Handpone" = ''089680750744' 
				OR tbl."Barcode" = ''089680750744'
			)
 LIMIT 1
ERROR - 2022-02-06 10:28:54 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
