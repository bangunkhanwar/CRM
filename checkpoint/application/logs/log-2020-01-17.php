<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-17 10:02:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;undefined&quot;
LINE 3: WHERE &quot;fidPropinsi&quot; = 'undefined'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-17 10:02:11 --> Query error: ERROR:  invalid input syntax for integer: "undefined"
LINE 3: WHERE "fidPropinsi" = 'undefined'
                              ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kabupaten" "tbl"
WHERE "fidPropinsi" = 'undefined'
ERROR - 2020-01-17 10:02:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Kabupaten_model.php 50
