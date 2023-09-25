<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-03 09:56:14 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 09:56:14 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 10:05:12 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 10:05:12 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 10:07:30 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 10:07:30 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 10:09:23 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 10:09:23 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 10:23:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020237410) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-03 10:23:25 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020237410) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085259436024', 'KOTA SURABAYA', 'Mughni Hidayatullah', 'ASEMROWO', '60183', 'Jl. Margomulyo 63A, Greges, Asemrowo, Surabaya 60183, KOTA SURABAYA, ASEMROWO, JAWA TIMUR, ID, 60183', 'Z301', 'SHOPEE', '20020237410', 'Mughni Hidayatullah', '', '19012016732617aebda20df80d470277', '2020-03-03', 'bePOS', '2020-03-03 10:23:25', '2020-03-03 10:23:25', '2021-03-03', '870301', '02')
ERROR - 2020-03-03 10:43:30 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-03 10:43:30 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-03 11:07:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(50)
CONTEXT:  SQL statement &quot;INSERT INTO &quot;member&quot;.&quot;MemberPointsCurrently&quot; (&quot;MemberCode&quot;, &quot;Name&quot;, &quot;TotalPoints&quot;) VALUES (&quot;s_MemberCode&quot;, s_Name, n_TotalPoints) ON CONFLICT DO NOTHING&quot;
PL/pgSQL function member.&quot;sp_InsertMemberPoints&quot;(character varying,numeric,numeric) line 105 at SQL statement /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-03 11:07:31 --> Query error: ERROR:  value too long for type character varying(50)
CONTEXT:  SQL statement "INSERT INTO "member"."MemberPointsCurrently" ("MemberCode", "Name", "TotalPoints") VALUES ("s_MemberCode", s_Name, n_TotalPoints) ON CONFLICT DO NOTHING"
PL/pgSQL function member."sp_InsertMemberPoints"(character varying,numeric,numeric) line 105 at SQL statement - Invalid query: SELECT "member"."sp_InsertMemberPoints"('20020237483','2020','3')
ERROR - 2020-03-03 11:15:12 --> Severity: Warning --> Missing argument 1 for Promo::promolist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 300
ERROR - 2020-03-03 11:15:12 --> Severity: Warning --> Missing argument 1 for Promo::merchantpromolist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 353
ERROR - 2020-03-03 11:15:12 --> Severity: Warning --> Missing argument 1 for Promo::merchantpromolist(), called in /home/elcorps/crm/ws/system/core/CodeIgniter.php on line 532 and defined /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 353
ERROR - 2020-03-03 11:15:12 --> Severity: Notice --> Undefined variable: membercode /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 373
ERROR - 2020-03-03 11:15:12 --> Severity: Notice --> Undefined variable: membercode /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 373
ERROR - 2020-03-03 11:15:12 --> Severity: Notice --> Undefined variable: membercode /home/elcorps/crm/ws/application/modules/promo/controllers/Promo.php 332
ERROR - 2020-03-03 14:21:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020237716) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-03 14:21:49 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020237716) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('089602680029', 'KOTA JAKARTA UTARA', 'Sasmita', 'KOJA', '14260', 'Jalan syawal 1 rt:002 rw:03 No:22( kontrakan ke 3 setelah masjid al-muhajirin) kel: tugu selatan, kec: koja, jakarta utara 14260, KOTA JAKARTA UTARA, KOJA, DKI JAKARTA, ID, 14260', 'Z301', 'SHOPEE', '20020237716', 'Sasmita', '', 'ed564372e3e9742d3fa15be768517372', '2020-03-03', 'bePOS', '2020-03-03 14:21:48', '2020-03-03 14:21:48', '2021-03-03', '711418', '02')
ERROR - 2020-03-03 14:26:33 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 14:26:33 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 15:08:47 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 15:08:47 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 15:42:21 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 15:42:21 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 16:10:25 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 16:10:25 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 16:31:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(20020237890) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-03 16:31:47 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(20020237890) already exists. - Invalid query: INSERT INTO "member"."Member" ("Handpone", "City", "Name", "District", "PosCode", "Address", "StoreCode", "memberFrom", "MemberCode", "FullName", "Email", "Password", "RegistrationDate", "CreatedBy", "CreatedDate", "LastUpdate", "ValidUntil", "OTP", "fidMemberCategory") VALUES ('085794017074', 'KAB. SUMEDANG', 'Rosalinda Julian Syifa', 'JATINANGOR', '45363', 'Wisma Rini 2, Kp.Cisaladah, Desa Hegarmanah, KAB. SUMEDANG, JATINANGOR, JAWA BARAT, ID, 45363', 'Z301', 'SHOPEE', '20020237890', 'Rosalinda Julian Syifa', '', 'f8eebb1e292d891d1804c8cf5584a83a', '2020-03-03', 'bePOS', '2020-03-03 16:31:47', '2020-03-03 16:31:47', '2021-03-03', '163166', '02')
ERROR - 2020-03-03 16:58:30 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 16:58:30 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 17:28:18 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 17:28:18 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 17:34:21 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 17:34:21 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 18:23:05 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 18:23:05 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 18:30:01 --> Severity: Notice --> Undefined index: StoreCode /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 406
ERROR - 2020-03-03 18:30:01 --> Severity: Notice --> Undefined index: fidMemberCategory /home/elcorps/crm/ws/application/modules/register/controllers/Register.php 414
ERROR - 2020-03-03 19:45:12 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-03 19:45:12 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-03 22:24:12 --> Severity: Notice --> Undefined offset: 1 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
ERROR - 2020-03-03 22:24:12 --> Severity: Notice --> Undefined offset: 2 /home/elcorps/crm/ws/application/helpers/MY_date_helper.php 21
