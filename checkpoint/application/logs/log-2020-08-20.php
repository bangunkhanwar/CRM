<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-20 01:54:36 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-20 04:42:53 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-20 11:26:49 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-20 14:18:33 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-20 14:18:33 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
