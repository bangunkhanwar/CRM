<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-30 11:06:45 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-10-30 13:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;RUF&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* 'MA'RUF'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-30 13:55:25 --> Query error: ERROR:  syntax error at or near "RUF"
LINE 3: WHERE ( "Name" ~* 'MA'RUF'
                              ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* 'MA'RUF'
					)
AND "StoreCode" = 'Z726'
AND "DateOfBirth" = '19751123'
 LIMIT 100
ERROR - 2020-10-30 13:55:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;RUF&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* 'MA'RUF'
                              ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-10-30 13:55:25 --> Query error: ERROR:  syntax error at or near "RUF"
LINE 3: WHERE ( "Name" ~* 'MA'RUF'
                              ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* 'MA'RUF'
					)
AND "StoreCode" = 'Z726'
AND "DateOfBirth" = '19751123'
 LIMIT 100
