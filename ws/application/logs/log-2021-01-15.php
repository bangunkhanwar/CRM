<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-15 03:05:22 --> 404 Page Not Found: /index
ERROR - 2021-01-15 08:28:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023191846) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-15 08:28:12 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023191846) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023191846', 'ferawaty', 'ferrawaty7@gmail.com', '', '274bbf92a67fcb4aac97104f5aaf94f7', '2021-01-15', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-01-15 15:45:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-15 15:45:43 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: UPDATE "member"."Member" SET "MemberCode" = '10272190911', "IdCardNumber" = '', "Name" = 'SUSANTI', "CityOfBirth" = '', "DateOfBirth" = '19951019', "Address" = 'TANGGAMUS', "RT" = '', "RW" = '', "Village" = '0', "District" = '0', "City" = '0', "Provinces" = '0', "PosCode" = '', "Phone" = '0SELECT * 	FROM &quot;promo&quot;.&quot;msPr', "Handpone" = '0895705215053', "Email" = '', "Sex" = '2', "Married" = '1', "ModifiedBy" = 'Z027', "ModifiedDate" = '2021-01-15 15:45:43', "LastUpdate" = '2021-01-15 15:45:43', "Barcode" = '', "FullName" = 'SUSANTI', "isMerchantPartner" = '0', "instagram" = '', "facebook" = '', "memberFrom" = '', "MerchantPartnerCode" = '', "MemberCodeMerchantPartner" = ''
WHERE "MemberCode" = '10272190911'
ERROR - 2021-01-15 15:45:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-15 15:45:50 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: UPDATE "member"."Member" SET "MemberCode" = '10272190911', "IdCardNumber" = '', "Name" = 'SUSANTI', "CityOfBirth" = '', "DateOfBirth" = '19951019', "Address" = 'TANGGAMUS', "RT" = '', "RW" = '', "Village" = '0', "District" = '0', "City" = '0', "Provinces" = '0', "PosCode" = '', "Phone" = '0SELECT * 	FROM &quot;promo&quot;.&quot;msPr', "Handpone" = '0895705215053', "Email" = '', "Sex" = '2', "Married" = '1', "ModifiedBy" = 'Z027', "ModifiedDate" = '2021-01-15 15:45:50', "LastUpdate" = '2021-01-15 15:45:50', "Barcode" = '', "FullName" = 'SUSANTI', "isMerchantPartner" = '0', "instagram" = '', "facebook" = '', "memberFrom" = '', "MerchantPartnerCode" = '', "MemberCodeMerchantPartner" = ''
WHERE "MemberCode" = '10272190911'
ERROR - 2021-01-15 15:46:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(30) /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-15 15:46:04 --> Query error: ERROR:  value too long for type character varying(30) - Invalid query: UPDATE "member"."Member" SET "MemberCode" = '10272190911', "IdCardNumber" = '', "Name" = 'SUSANTI', "CityOfBirth" = '', "DateOfBirth" = '19951019', "Address" = 'TANGGAMUS', "RT" = '', "RW" = '', "Village" = '0', "District" = '0', "City" = '0', "Provinces" = '0', "PosCode" = '', "Phone" = '0SELECT * 	FROM &quot;promo&quot;.&quot;msPr', "Handpone" = '0895705215053', "Email" = '', "Sex" = '2', "Married" = '1', "ModifiedBy" = 'Z027', "ModifiedDate" = '2021-01-15 15:46:03', "LastUpdate" = '2021-01-15 15:46:03', "Barcode" = '', "FullName" = 'SUSANTI', "isMerchantPartner" = '0', "instagram" = '', "facebook" = '', "memberFrom" = '', "MerchantPartnerCode" = '', "MemberCodeMerchantPartner" = ''
WHERE "MemberCode" = '10272190911'
ERROR - 2021-01-15 16:50:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 16:50:42 --> Unable to connect to the database
ERROR - 2021-01-15 16:50:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 16:50:42 --> Unable to connect to the database
ERROR - 2021-01-15 16:50:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 16:50:42 --> Unable to connect to the database
ERROR - 2021-01-15 16:50:42 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 16:50:42 --> Unable to connect to the database
ERROR - 2021-01-15 17:29:06 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 17:29:06 --> Unable to connect to the database
ERROR - 2021-01-15 17:29:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 17:29:11 --> Unable to connect to the database
ERROR - 2021-01-15 17:29:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 17:29:11 --> Unable to connect to the database
ERROR - 2021-01-15 17:29:11 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-15 17:29:11 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '15020043920'
				OR "tbl"."HP" = '15020043920' 
				OR tbl."BarCode" = '15020043920'
			)
 LIMIT 1
ERROR - 2021-01-15 17:29:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-15 17:29:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 17:29:11 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:21 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:26 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:31 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:49 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:49 --> Unable to connect to the database
ERROR - 2021-01-15 18:35:49 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:35:49 --> Unable to connect to the database
ERROR - 2021-01-15 18:36:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:36:15 --> Unable to connect to the database
ERROR - 2021-01-15 18:36:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:36:15 --> Unable to connect to the database
ERROR - 2021-01-15 18:36:15 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2021-01-15 18:36:15 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:36:15 --> Unable to connect to the database
ERROR - 2021-01-15 18:36:15 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2021-01-15 18:36:15 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2021-01-15 18:36:15 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2021-01-15 18:36:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 18:36:16 --> Unable to connect to the database
ERROR - 2021-01-15 19:09:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 19:09:53 --> Unable to connect to the database
ERROR - 2021-01-15 19:09:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 19:09:53 --> Unable to connect to the database
ERROR - 2021-01-15 19:09:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2021-01-15 19:09:53 --> Unable to connect to the database
