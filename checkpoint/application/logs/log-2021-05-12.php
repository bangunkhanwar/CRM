<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-05-12 11:45:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'undefined'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-05-12 11:45:41 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "fidPropinsi" = 'undefined'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'undefined'
