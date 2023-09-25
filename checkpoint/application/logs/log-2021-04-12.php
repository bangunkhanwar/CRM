<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-04-12 12:38:33 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2021-04-12 13:03:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(919) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-04-12 13:03:04 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(919) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('288', '02')
ERROR - 2021-04-12 22:04:23 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
