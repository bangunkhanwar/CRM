<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-02 03:07:58 --> 404 Page Not Found: /index
ERROR - 2020-07-02 13:33:53 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-07-02 13:33:53 --> Unable to connect to the database
ERROR - 2020-07-02 15:10:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ana&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'Yu'ana'
                                               ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-02 15:10:11 --> Query error: ERROR:  syntax error at or near "ana"
LINE 3: WHERE (replace("Email", '.', '') = 'Yu'ana'
                                               ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'Yu'ana'
			 OR replace("MemberCode", '.', '') = 'Yu'ana'
			 OR replace("Handpone", '.', '') = 'Yu'ana')
			 
AND "Password" = '74e59720dd08b1db45f7152d082c5051'
 LIMIT 1
ERROR - 2020-07-02 15:10:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
