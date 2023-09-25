<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-10 03:04:35 --> 404 Page Not Found: /index
ERROR - 2020-08-10 11:09:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020306619) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-10 11:09:50 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020306619) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085777727967', 'KOTA JAKARTA PUSAT', 'Kartika (bag. Finance)', 'GAMBIR', '10150', 'Apotek roxy biak jl. Biak no. 39 Rt. 01/05 ,cideng,gambir,Jakarta Pusat, KOTA JAKARTA PUSAT, GAMBIR, DKI JAKARTA, ID, 10150', 'Z301', 'SHOPEE', '20020306619', 'Kartika (bag. Finance)', '', 'ab623cfdca83e98ba351680b084013f8', '2020-08-10', 'bePOS', '2020-08-10 11:09:50', '2020-08-10 11:09:50', '2021-08-10', '202744', '02')
ERROR - 2020-08-10 11:19:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020306634) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-10 11:19:41 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020306634) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085838144504', 'KAB. LAMPUNG UTARA', 'Triagustin', 'BUKIT KEMUNING', '34556', 'Alamat:jl.lintas sumber jaya ,ujanmas,desa:tanjung baru kecamatan bukit kemuning, KAB. LAMPUNG UTARA, BUKIT KEMUNING, LAMPUNG, ID, 34556', 'Z301', 'SHOPEE', '20020306634', 'Triagustin', '', 'dbb0ea7245f10b5ccce0e45db064e2bd', '2020-08-10', 'bePOS', '2020-08-10 11:19:41', '2020-08-10 11:19:41', '2021-08-10', '171190', '02')
ERROR - 2020-08-10 19:16:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;10592190606&quot;
LINE 5:     OR &quot;tbl&quot;.&quot;Handpone&quot; = '10592190606'' 
                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-10 19:16:52 --> Query error: ERROR:  syntax error at or near "10592190606"
LINE 5:     OR "tbl"."Handpone" = '10592190606'' 
                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = '10592190606''
				OR "tbl"."Handpone" = '10592190606'' 
				OR tbl."Barcode" = '10592190606''
			)
 LIMIT 1
ERROR - 2020-08-10 19:16:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
