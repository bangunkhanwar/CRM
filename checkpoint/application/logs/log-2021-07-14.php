<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-07-14 11:20:41 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid byte sequence for encoding &quot;UTF8&quot;: 0x8c /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-07-14 11:20:41 --> Query error: ERROR:  invalid byte sequence for encoding "UTF8": 0x8c - Invalid query: SELECT "tbl".*
FROM "member"."Member" "tbl"
WHERE "MemberCode" = '21023+LŒ'
 LIMIT 1
