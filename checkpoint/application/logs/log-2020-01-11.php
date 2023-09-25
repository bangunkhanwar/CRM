<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-11 16:39:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-11 16:39:17 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-01-11 16:39:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Kecamatan_model.php 50
