<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-13 05:20:12 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'sitimuzaro'ah'
                                                       ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-13 05:20:12 --> Query error: ERROR:  syntax error at or near "ah"
LINE 3: WHERE (replace("Email", '.', '') = 'sitimuzaro'ah'
                                                       ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'sitimuzaro'ah'
			 OR replace("MemberCode", '.', '') = 'sitimuzaro'ah'
			 OR replace("Handpone", '.', '') = 'sitimuzaro'ah')
			 
AND "Password" = 'f233282d4ecffccb1d8d900ad45a5117'
 LIMIT 1
ERROR - 2020-06-13 05:20:12 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
ERROR - 2020-06-13 05:20:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ah&quot;
LINE 3: WHERE (replace(&quot;Email&quot;, '.', '') = 'sitimuzaro'ah'
                                                       ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-13 05:20:18 --> Query error: ERROR:  syntax error at or near "ah"
LINE 3: WHERE (replace("Email", '.', '') = 'sitimuzaro'ah'
                                                       ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (replace("Email", '.', '') = 'sitimuzaro'ah'
			 OR replace("MemberCode", '.', '') = 'sitimuzaro'ah'
			 OR replace("Handpone", '.', '') = 'sitimuzaro'ah')
			 
AND "Password" = 'f233282d4ecffccb1d8d900ad45a5117'
 LIMIT 1
ERROR - 2020-06-13 05:20:18 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
