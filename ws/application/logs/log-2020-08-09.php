<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-09 03:04:35 --> 404 Page Not Found: /index
ERROR - 2020-08-09 12:41:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;150200055107&quot;
LINE 5:     OR &quot;tbl&quot;.&quot;Handpone&quot; = '150200055107'' 
                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-09 12:41:17 --> Query error: ERROR:  syntax error at or near "150200055107"
LINE 5:     OR "tbl"."Handpone" = '150200055107'' 
                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = '150200055107''
				OR "tbl"."Handpone" = '150200055107'' 
				OR tbl."Barcode" = '150200055107''
			)
 LIMIT 1
ERROR - 2020-08-09 12:41:17 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
