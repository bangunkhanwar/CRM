<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-14 03:03:49 --> 404 Page Not Found: /index
ERROR - 2020-07-14 10:47:13 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020300457) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-14 10:47:13 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020300457) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('082217861946', 'KAB. GARUT', 'Lela Agustin', 'PANGATIKAN', '44195', 'Jln.pangatikan no 32 desa karangsari kecamatan pangatikan(depan sd karangsari 2), KAB. GARUT, PANGATIKAN, JAWA BARAT, ID, 44195', 'Z301', 'SHOPEE', '20020300457', 'Lela Agustin', '', '121207805cd5c4f1b1203fd8b7045323', '2020-07-14', 'bePOS', '2020-07-14 10:47:13', '2020-07-14 10:47:13', '2021-07-14', '890536', '02')
ERROR - 2020-07-14 18:00:26 --> Severity: Warning --> Missing argument 1 for Profile::upload_photo_profile(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/profile/controllers/Profile.php 560
