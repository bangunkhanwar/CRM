<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-06 03:05:20 --> 404 Page Not Found: /index
ERROR - 2020-08-06 20:19:52 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;082331863393&quot;
LINE 5:     OR &quot;tbl&quot;.&quot;Handpone&quot; = '082331863393'' 
                                   ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-06 20:19:52 --> Query error: ERROR:  syntax error at or near "082331863393"
LINE 5:     OR "tbl"."Handpone" = '082331863393'' 
                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = '082331863393''
				OR "tbl"."Handpone" = '082331863393'' 
				OR tbl."Barcode" = '082331863393''
			)
 LIMIT 1
ERROR - 2020-08-06 20:19:52 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
