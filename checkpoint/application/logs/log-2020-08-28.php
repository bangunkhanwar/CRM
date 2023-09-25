<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-28 11:01:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-28 11:01:24 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-08-28 13:14:17 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
