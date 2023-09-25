<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-11 03:24:24 --> 404 Page Not Found: /index
ERROR - 2021-05-11 08:34:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023233772) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 08:34:58 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023233772) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023233772', 'Muhammad Hafidz', 'hafidzmuh1920@gmail.com', '', 'ec425da574fca63ad9c7d73c16e716c3', '2021-05-11', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-05-11 08:36:57 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2046839) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 08:36:57 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2046839) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z047.AKEA.0001', 'Z047', '2021-05-10', 'WS', '20210511 08:36:57', '10472181465', '02', '1', 'Transaksi Sales', '32', '0', '20210511 08:36:57', '1821001')
ERROR - 2021-05-11 11:29:36 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047030) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 11:29:36 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047030) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z714.AKEB.0006', 'Z714', '2021-05-11', 'WS', '20210511 11:29:36', '271415026', '02', '1', 'Transaksi Sales', '118', '0', '20210511 11:29:36', '1821001')
ERROR - 2021-05-11 12:14:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047134) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 12:14:43 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047134) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z015.AKEB.0010', 'Z015', '2021-05-11', 'WS', '20210511 12:14:43', '201516250', '02', '1', 'Transaksi Sales', '16', '0', '20210511 12:14:43', '1821001')
ERROR - 2021-05-11 12:30:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023233949) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 12:30:07 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023233949) already exists. - Invalid query: INSERT INTO "member"."Member" ("RegistrationDate", "ValidUntil", "CreatedBy", "CreatedDate", "fidMemberCategory", "StoreCode", "MemberCode", "IdCardNumber", "Name", "CityOfBirth", "DateOfBirth", "Address", "RT", "RW", "Village", "District", "City", "Provinces", "PosCode", "Phone", "Handpone", "Email", "Sex", "Married", "ModifiedBy", "ModifiedDate", "LastUpdate", "Barcode", "FullName", "isMerchantPartner", "instagram", "facebook", "memberFrom", "MerchantPartnerCode", "MemberCodeMerchantPartner", "OTP") VALUES ('2021-05-11 12:30:07', '2022-05-11', 'Z833', '2021-05-11 12:30:07', '02', 'Z833', '21023233949', '', 'ENDAH SRI WAHYUNI', 'MADIUN', '19830731', '', '', '', '3502120', '3502', '3502120012', '35', '', '', '085235511141', '', '2', '2', 'Z833', '2021-05-11 12:30:07', '2021-05-11 12:30:07', '', 'ENDAH SRI WAHYUNI', '0', '', '', '', '', '', '873071')
ERROR - 2021-05-11 16:02:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047724) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 16:02:06 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047724) already exists. - Invalid query: INSERT INTO "points"."Points" ( "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "IdRec" ) SELECT
			'2021-05-11',
			'21023234205',
			now(),
			'21023234205',
			'05',
			4,
			'Download Apps',
			50,
			0,
			now(),
			( SELECT "max" ( "IdRec" )+1 FROM points."Points" ) 
			WHERE
				NOT EXISTS ( SELECT * FROM points."Points" WHERE "MemberCode" = '21023234205' AND "TransType" = 4 )
ERROR - 2021-05-11 16:02:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047724) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 16:02:26 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047724) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z790.AKEB.0053', 'Z790', '2021-05-11', 'WS', '20210511 16:02:26', '17902190154', '02', '1', 'Transaksi Sales', '36', '0', '20210511 16:02:26', '1821001')
ERROR - 2021-05-11 16:04:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047730) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 16:04:11 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047730) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z766.AKEB.0056', 'Z766', '2021-05-11', 'WS', '20210511 16:04:11', '21023213105', '02', '1', 'Transaksi Sales', '12', '0', '20210511 16:04:11', '1821001')
ERROR - 2021-05-11 16:26:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047774) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 16:26:05 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047774) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z061.AKEB.0050', 'Z061', '2021-05-11', 'WS', '20210511 16:26:05', '21023234201', '02', '1', 'Transaksi Sales', '42', '0', '20210511 16:26:05', '1821001')
ERROR - 2021-05-11 18:19:58 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2047990) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 18:19:58 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2047990) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('Z816.AKEB.0016', 'Z816', '2021-05-11', 'WS', '20210511 18:19:58', '17342150281', '02', '1', 'Transaksi Sales', '14', '0', '20210511 18:19:58', '1821001')
ERROR - 2021-05-11 21:12:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;Points_pkey&quot;
DETAIL:  Key (&quot;IdRec&quot;)=(2048373) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-11 21:12:18 --> Query error: ERROR:  duplicate key value violates unique constraint "Points_pkey"
DETAIL:  Key ("IdRec")=(2048373) already exists. - Invalid query: INSERT INTO "points"."Points" ("TransNumRef", "StoreCode", "TransDate", "CreateBy", "CreateTime", "MemberCode", "fidMemberCategory", "TransType", "Description", "Debit", "Credit", "LastUpdate", "PromoCode") VALUES ('D132.AKEB.0100', 'D132', '2021-05-11', 'WS', '20210511 21:12:18', '16672170249', '02', '1', 'Transaksi Sales', '22', '0', '20210511 21:12:18', '1821001')
