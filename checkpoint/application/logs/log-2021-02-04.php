<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-02-04 14:20:00 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;'%'&quot;
LINE 5:    OR UPPER(&quot;Handpone&quot;) LIKE '%082221860636'%'
                                                   ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-02-04 14:20:00 --> Query error: ERROR:  syntax error at or near "'%'"
LINE 5:    OR UPPER("Handpone") LIKE '%082221860636'%'
                                                   ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%082221860636'%'
			OR UPPER("Handpone") LIKE '%082221860636'%'
			OR UPPER("Email") LIKE '%082221860636'%')
 LIMIT 1
