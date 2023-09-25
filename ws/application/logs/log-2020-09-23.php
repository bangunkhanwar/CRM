<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-23 03:03:19 --> 404 Page Not Found: /index
ERROR - 2020-09-23 08:31:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020327070) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-23 08:31:24 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020327070) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "OTP", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020327070', 'alfina fisalmuna', '', '085793458739', '402c89a7200faa210f36134529c35e56', '2020-09-23', 'Elshop_Elzatta_Dauky', '', '110981', '02', 'ZHO')
ERROR - 2020-09-23 09:37:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;atunKonaah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Mar'atunKonaah'
                                                ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-23 09:37:28 --> Query error: ERROR:  syntax error at or near "atunKonaah"
LINE 3: WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
                                                ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
			 OR replace("MemberCode", '.', '') = 'Mar'atunKonaah'
			 OR replace("Handpone", '.', '') = 'Mar'atunKonaah')
			 
AND "Password" = '372496e15dd17a85fa33ca83d391788d'
 LIMIT 1
ERROR - 2020-09-23 09:37:28 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-09-23 09:37:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;atunKonaah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Mar'atunKonaah'
                                                ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-23 09:37:31 --> Query error: ERROR:  syntax error at or near "atunKonaah"
LINE 3: WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
                                                ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
			 OR replace("MemberCode", '.', '') = 'Mar'atunKonaah'
			 OR replace("Handpone", '.', '') = 'Mar'atunKonaah')
			 
AND "Password" = '372496e15dd17a85fa33ca83d391788d'
 LIMIT 1
ERROR - 2020-09-23 09:37:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-09-23 09:37:34 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;atunKonaah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Mar'atunKonaah'
                                                ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-23 09:37:34 --> Query error: ERROR:  syntax error at or near "atunKonaah"
LINE 3: WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
                                                ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Mar'atunKonaah'
			 OR replace("MemberCode", '.', '') = 'Mar'atunKonaah'
			 OR replace("Handpone", '.', '') = 'Mar'atunKonaah')
			 
AND "Password" = '372496e15dd17a85fa33ca83d391788d'
 LIMIT 1
ERROR - 2020-09-23 09:37:34 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
