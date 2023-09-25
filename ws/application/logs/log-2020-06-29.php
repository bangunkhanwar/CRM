<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-29 03:03:23 --> 404 Page Not Found: /index
ERROR - 2020-06-29 13:45:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020296368) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-29 13:45:49 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020296368) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('081234123509', 'KOTA JAKARTA PUSAT', 'Fitri', 'MENTENG', '10320', 'Jalan kimia no. 2 kel.pegangsaan kec.menteng (samping the baile sebelum RS mata kirana), KOTA JAKARTA PUSAT, MENTENG, DKI JAKARTA, ID, 10320', 'Z301', 'SHOPEE', '20020296368', 'Fitri', '', 'e145e7903ab70beb5ecdbce59a7e72d6', '2020-06-29', 'bePOS', '2020-06-29 13:45:49', '2020-06-29 13:45:49', '2021-06-29', '305024', '02')
ERROR - 2020-06-29 15:20:54 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:30:55 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:31:19 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:31:48 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:33:42 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:34:32 --> 404 Page Not Found: /index
ERROR - 2020-06-29 15:36:24 --> 404 Page Not Found: /index
ERROR - 2020-06-29 16:05:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(17602150330) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-29 16:05:56 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(17602150330) already exists. - Invalid query: INSERT INTO "member"."Member" ("fidMemberCategory", "MemberCode", "Name", "RegistrationDate", "CityOfBirth", "DateOfBirth", "IdCardNumber", "Address", "RT", "RW", "City", "Phone", "Handpone", "StoreCode", "ValidUntil", "ModifiedDate", "ModifiedBy", "Sex", "Married", "Barcode", "LastUpdate") VALUES ('02', '17602150330', 'MAYA ANDRIANI', '2015-12-26', 'TANGERANG', '1994-05-02', '3603184205900011', 'KP TALAGA', '07', '02', 'CIKUPA', '3741', '085716925152', 'Z760', '2016-12-26', '2015-12-26', 'rahma', '2', '1', '150200059230', '2015-12-26 10:30:41')
