<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-01-10 10:46:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 5:    OR UPPER(&quot;Handpone&quot;) LIKE '%082372049191'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-01-10 10:46:43 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 5:    OR UPPER("Handpone") LIKE '%082372049191'%'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%082372049191'%'
			OR UPPER("Handpone") LIKE '%082372049191'%'
			OR UPPER("Email") LIKE '%082372049191'%')
 LIMIT 1
ERROR - 2020-01-10 10:46:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/models/Base_model.php 84
