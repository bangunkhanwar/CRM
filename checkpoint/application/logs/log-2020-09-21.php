<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-21 11:52:25 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(911) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 11:52:25 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(911) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('283', '02')
ERROR - 2020-09-21 13:03:15 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-21 14:47:53 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(912) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-21 14:47:53 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(912) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('283', '11')
