<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-12-11 03:04:37 --> 404 Page Not Found: /index
ERROR - 2020-12-11 13:45:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-12-11 13:45:34 --> Unable to connect to the database
ERROR - 2020-12-11 13:45:34 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-12-11 13:45:34 --> Unable to connect to the database
ERROR - 2020-12-11 13:45:34 --> Severity: Warning --> pg_escape_literal() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 326
ERROR - 2020-12-11 13:45:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;LIMIT&quot;
LINE 4:  LIMIT 1
         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-12-11 13:45:35 --> Query error: ERROR:  syntax error at or near "LIMIT"
LINE 4:  LIMIT 1
         ^ - Invalid query: SELECT "tbl".*
FROM "public"."trSales" "tbl"
WHERE "TransNum" =
 LIMIT 1
ERROR - 2020-12-11 13:45:35 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
