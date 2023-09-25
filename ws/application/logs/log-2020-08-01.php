<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-01 03:02:55 --> 404 Page Not Found: /index
ERROR - 2020-08-01 11:06:05 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ALAIKUM&quot;
LINE 4:     tbl.&quot;MemberCode&quot; = 'ASSALAMU'ALAIKUM%20WR'
                                         ^ /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-01 11:06:05 --> Query error: ERROR:  syntax error at or near "ALAIKUM"
LINE 4:     tbl."MemberCode" = 'ASSALAMU'ALAIKUM%20WR'
                                         ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
				tbl."MemberCode" = 'ASSALAMU'ALAIKUM%20WR'
				OR "tbl"."Handpone" = 'ASSALAMU'ALAIKUM%20WR' 
				OR tbl."Barcode" = 'ASSALAMU'ALAIKUM%20WR'
			)
 LIMIT 1
ERROR - 2020-08-01 11:06:05 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
