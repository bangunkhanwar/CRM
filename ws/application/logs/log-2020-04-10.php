<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-10 12:43:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;fileUpload_pkey&quot;
DETAIL:  Key (&quot;idFileUpload&quot;)=(1077) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-10 12:43:39 --> Query error: ERROR:  duplicate key value violates unique constraint "fileUpload_pkey"
DETAIL:  Key ("idFileUpload")=(1077) already exists. - Invalid query: INSERT INTO "public"."fileUpload" ("UseFor", "UsedFor", "FileServerName", "FileType", "FilePath", "FileExt", "FileSize", "IsImage", "ImageWidth", "ImageHeight", "ImageType", "ImageSizeStr", "FileName", "UploadBy") VALUES ('1', '1', 'C12ADAA5-F3D8-DE02-63D3-13D7E1D29236', 'jpg', '../file_storage/image/', 'jpg', '1334382', '1', '100', '100', '', '', 'image_59138.jpg', '20020248883')
