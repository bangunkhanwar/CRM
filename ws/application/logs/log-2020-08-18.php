<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-18 03:04:55 --> 404 Page Not Found: /index
ERROR - 2020-08-18 11:49:09 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020308483) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-18 11:49:09 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020308483) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081324200220', 'KAB. TANGERANG', 'Ipung(pabrik tempe)', 'BALARAJA', '15610', 'Kp. Kadaung No. 91 Rt. 01 rw. 01 kel.  Balaraja kec. Balaraja, KAB. TANGERANG, BALARAJA, BANTEN, ID, 15610', 'Z301', 'SHOPEE', '20020308483', 'Ipung(pabrik tempe)', '', '7894c434e94de932b7da5459aef0916d', '2020-08-18', 'bePOS', '2020-08-18 11:49:09', '2020-08-18 11:49:09', '2021-08-18', '358148', '02')
ERROR - 2020-08-18 12:14:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:47 --> Unable to connect to the database
ERROR - 2020-08-18 12:14:52 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:52 --> Unable to connect to the database
ERROR - 2020-08-18 12:14:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:53 --> Unable to connect to the database
ERROR - 2020-08-18 12:14:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:53 --> Unable to connect to the database
ERROR - 2020-08-18 12:14:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:53 --> Unable to connect to the database
ERROR - 2020-08-18 12:14:53 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-08-18 12:14:53 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '087772657451'
				OR "tbl"."HP" = '087772657451' 
				OR tbl."BarCode" = '087772657451'
			)
 LIMIT 1
ERROR - 2020-08-18 12:14:53 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-08-18 12:14:57 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:14:57 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:01 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:01 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:07 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:07 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:11 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:11 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:13 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:13 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:17 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:17 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:21 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:22 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:22 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:27 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:27 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:31 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:31 --> Unable to connect to the database
ERROR - 2020-08-18 12:15:32 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-08-18 12:15:32 --> Unable to connect to the database
