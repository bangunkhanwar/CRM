<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-03 03:07:53 --> 404 Page Not Found: /index
ERROR - 2020-07-03 06:43:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(10162180729) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-03 06:43:56 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(10162180729) already exists. - Invalid query: INSERT INTO "member"."Member" ("fidMemberCategory", "MemberCode", "Name", "RegistrationDate", "CityOfBirth", "DateOfBirth", "IdCardNumber", "Address", "RT", "RW", "PosCode", "City", "Phone", "Handpone", "StoreCode", "ValidUntil", "ModifiedDate", "ModifiedBy", "Sex", "Barcode", "LastUpdate", "isActive") VALUES ('02', '10162180729', 'JUMRIANI KABIR', '2018-12-03', 'nabire', '1991-12-07', '9201075807910003', 'jl merpati', '001', '002', '90000', 'MAKASAR', '4555522', '081248721371', 'Z016', '2019-12-03', '2018-12-03', 'eka', '2', '180200716311', '2018-12-03 13:55:12', '1')
