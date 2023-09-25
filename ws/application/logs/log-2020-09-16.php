<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-16 03:04:08 --> 404 Page Not Found: /index
ERROR - 2020-09-16 21:44:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;fileUpload_pkey&quot;
DETAIL:  Key (&quot;idFileUpload&quot;)=(3120) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-16 21:44:59 --> Query error: ERROR:  duplicate key value violates unique constraint "fileUpload_pkey"
DETAIL:  Key ("idFileUpload")=(3120) already exists. - Invalid query: INSERT INTO "public"."fileUpload" ("UseFor", "UsedFor", "FileServerName", "FileType", "FilePath", "FileExt", "FileSize", "IsImage", "ImageWidth", "ImageHeight", "ImageType", "ImageSizeStr", "FileName", "UploadBy") VALUES ('1', '1', 'B4AC1450-0EE6-876D-8027-9AF30CB14EE1', 'jpg', '../file_storage/image/', 'jpg', '82479', '1', '100', '100', '', '', 'image_72788.jpg', '20020316302')
