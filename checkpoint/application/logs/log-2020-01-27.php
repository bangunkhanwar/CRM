<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-27 14:36:06 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 5:    OR UPPER(&quot;Handpone&quot;) LIKE '%082145533006'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-27 14:36:06 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 5:    OR UPPER("Handpone") LIKE '%082145533006'%'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%082145533006'%'
			OR UPPER("Handpone") LIKE '%082145533006'%'
			OR UPPER("Email") LIKE '%082145533006'%')
 LIMIT 1
ERROR - 2020-01-27 14:36:06 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/models/Base_model.php 84
