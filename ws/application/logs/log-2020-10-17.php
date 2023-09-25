<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-17 03:04:45 --> 404 Page Not Found: /index
ERROR - 2020-10-17 14:53:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;20020241790&quot;
LINE 4:     tbl.&quot;MemberCode&quot; = ''20020241790'
                                 ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-17 14:53:42 --> Query error: ERROR:  syntax error at or near "20020241790"
LINE 4:     tbl."MemberCode" = ''20020241790'
                                 ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = ''20020241790'
				OR "tbl"."Handpone" = ''20020241790' 
				OR tbl."Barcode" = ''20020241790'
			)
 LIMIT 1
ERROR - 2020-10-17 14:53:42 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
