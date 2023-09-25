<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-01-06 03:05:46 --> 404 Page Not Found: /index
ERROR - 2021-01-06 08:13:27 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;member_pkey&quot;
DETAIL:  Key (&quot;MemberCode&quot;)=(21023190677) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-06 08:13:27 --> Query error: ERROR:  duplicate key value violates unique constraint "member_pkey"
DETAIL:  Key ("MemberCode")=(21023190677) already exists. - Invalid query: INSERT INTO "member"."Member" ("DateOfBirth", "MemberCode", "Name", "Email", "Handpone", "Password", "RegistrationDate", "CreatedBy", "DeviceToken", "fidMemberCategory", "StoreCode") VALUES ('19950101', '21023190677', 'Siti Nur Evayanti', 'sitinurevayanti@gmail.com', '', '07c38e56906feba9c85fc67d028c7756', '2021-01-06', 'Elshop_Elzatta', '', '02', 'ZHO')
ERROR - 2021-01-06 14:43:44 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;fileUpload_pkey&quot;
DETAIL:  Key (&quot;idFileUpload&quot;)=(3492) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-01-06 14:43:44 --> Query error: ERROR:  duplicate key value violates unique constraint "fileUpload_pkey"
DETAIL:  Key ("idFileUpload")=(3492) already exists. - Invalid query: INSERT INTO "public"."fileUpload" ("UseFor", "UsedFor", "FileServerName", "FileType", "FilePath", "FileExt", "FileSize", "IsImage", "ImageWidth", "ImageHeight", "ImageType", "ImageSizeStr", "FileName", "UploadBy") VALUES ('1', '1', '2ABA0C72-5D12-1312-22A6-09FEC709CBA4', 'jpg', '../file_storage/image/', 'jpg', '237418', '1', '100', '100', '', '', 'image_82921.jpg', '21023190740')
