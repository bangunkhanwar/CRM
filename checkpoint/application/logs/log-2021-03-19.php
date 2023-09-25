<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2021-03-19 16:16:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(918) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2021-03-19 16:16:46 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(918) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('287', '02')
