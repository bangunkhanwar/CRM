<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-05 16:45:55 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020255647) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-05 16:45:55 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020255647) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085640262359', 'KAB. KLATEN', 'Eliya', 'BAYAT', '57462', 'Gamping Gede RT 3 RW 2,Tegalrejo (Belakang Masjid Darussalam ), KAB. KLATEN, BAYAT, JAWA TENGAH, ID, 57462', 'Z301', 'SHOPEE', '20020255647', 'Eliya', '', 'e3961f24714237864b34ac898281b967', '2020-05-05', 'bePOS', '2020-05-05 16:45:55', '2020-05-05 16:45:55', '2021-05-05', '538975', '02')
