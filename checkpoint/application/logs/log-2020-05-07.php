<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-07 10:53:03 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;Z823&quot;
LINE 4: ...&quot;STORECODE&quot;  WHERE 1=1    AND &quot;TR&quot;.&quot;STORECODE&quot; = 'Z823' AND ...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-07 10:53:03 --> Query error: ERROR:  syntax error at or near "Z823"
LINE 4: ..."STORECODE"  WHERE 1=1    AND "TR"."STORECODE" = 'Z823' AND ...
                                                             ^ - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE (
			UPPER("MemberCode") LIKE '%	FROM "WMS"."TRDR" TR 	LEFT JOIN "MSSTORE" MCC 		ON TR."STORECODE" = MCC."STORECODE" 	WHERE 1=1 		 AND "TR"."STORECODE" = 'Z823' AND "TR"."TRANSDATE" >= '20200501' AND "TR"."TRANSDATE" <= '20200507'%'
			OR UPPER("Handpone") LIKE '%	FROM "WMS"."TRDR" TR 	LEFT JOIN "MSSTORE" MCC 		ON TR."STORECODE" = MCC."STORECODE" 	WHERE 1=1 		 AND "TR"."STORECODE" = 'Z823' AND "TR"."TRANSDATE" >= '20200501' AND "TR"."TRANSDATE" <= '20200507'%'
			OR UPPER("Email") LIKE '%	FROM "WMS"."TRDR" TR 	LEFT JOIN "MSSTORE" MCC 		ON TR."STORECODE" = MCC."STORECODE" 	WHERE 1=1 		 AND "TR"."STORECODE" = 'Z823' AND "TR"."TRANSDATE" >= '20200501' AND TR."TRANSDATE" <= '20200507'%'
		)
 LIMIT 1
