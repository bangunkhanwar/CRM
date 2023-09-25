<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-09-02 02:27:23 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-09-02 15:06:32 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;msCustomerCategoryAccess_pkey&quot;
DETAIL:  Key (&quot;idMsCustomerCategoryAccess&quot;)=(910) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-09-02 15:06:32 --> Query error: ERROR:  duplicate key value violates unique constraint "msCustomerCategoryAccess_pkey"
DETAIL:  Key ("idMsCustomerCategoryAccess")=(910) already exists. - Invalid query: INSERT INTO "admpanel"."msCustomerCategoryAccess" ("fidMsOperator", "CatCode") VALUES ('282', '02')
