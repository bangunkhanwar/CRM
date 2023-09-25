<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-10 03:03:36 --> 404 Page Not Found: /index
ERROR - 2020-09-10 12:17:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;082261288989&quot;
LINE 4:     tbl.&quot;MemberCode&quot; = ''082261288989'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-10 12:17:11 --> Query error: ERROR:  syntax error at or near "082261288989"
LINE 4:     tbl."MemberCode" = ''082261288989'
                                 ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = ''082261288989'
				OR "tbl"."Handpone" = ''082261288989' 
				OR tbl."Barcode" = ''082261288989'
			)
 LIMIT 1
ERROR - 2020-09-10 12:17:11 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
