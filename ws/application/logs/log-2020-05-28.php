<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-28 08:13:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020287862) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-28 08:13:16 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020287862) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020287862', 'rahmaniar', 'destiantirahmaniar@gmail.com', '', '9f6e2cd0be394065155f86d07df6d419', '2020-05-28', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2020-05-28 11:44:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'A'ah'
                                              ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-28 11:44:13 --> Query error: ERROR:  syntax error at or near "ah"
LINE 3: WHERE (replace("Email", '.', '') = 'A'ah'
                                              ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'A'ah'
			 OR replace("MemberCode", '.', '') = 'A'ah'
			 OR replace("Handpone", '.', '') = 'A'ah')
			 
AND "Password" = '3eead99e33b0caf97a5fa73c46235cd2'
 LIMIT 1
ERROR - 2020-05-28 11:44:13 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-05-28 11:44:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'A'ah'
                                              ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-28 11:44:32 --> Query error: ERROR:  syntax error at or near "ah"
LINE 3: WHERE (replace("Email", '.', '') = 'A'ah'
                                              ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'A'ah'
			 OR replace("MemberCode", '.', '') = 'A'ah'
			 OR replace("Handpone", '.', '') = 'A'ah')
			 
AND "Password" = '7c401ffda3a1a3821efbd3f82a0826c8'
 LIMIT 1
ERROR - 2020-05-28 11:44:32 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-05-28 21:56:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020288005) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-28 21:56:30 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020288005) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '20020288005', 'Yeni Oktavia', 'yenioktavia29@gmail.com', '', '1803ca9d0a77f78437a4ac969a248b21', '2020-05-28', 'Elshop_Elzatta', '', '02', 'ZHO')
