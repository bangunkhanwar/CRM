<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-10-09 03:03:50 --> 404 Page Not Found: /index
ERROR - 2020-10-09 10:27:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: could not connect to server: Connection refused
	Is the server running on host &quot;10.10.11.94&quot; and accepting
	TCP/IP connections on port 5432? /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 10:27:11 --> Unable to connect to the database
ERROR - 2020-10-09 10:28:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 10:28:33 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  the database system is starting up
FATAL:  the database system is starting up /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 10:28:33 --> Unable to connect to the database
ERROR - 2020-10-09 10:28:33 --> Unable to connect to the database
ERROR - 2020-10-09 12:03:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 12:03:26 --> Unable to connect to the database
ERROR - 2020-10-09 12:56:11 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 12:56:11 --> Unable to connect to the database
ERROR - 2020-10-09 12:56:16 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 12:56:16 --> Unable to connect to the database
ERROR - 2020-10-09 12:56:21 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 12:56:21 --> Unable to connect to the database
ERROR - 2020-10-09 12:56:26 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 12:56:26 --> Unable to connect to the database
ERROR - 2020-10-09 13:55:47 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 13:55:47 --> Unable to connect to the database
ERROR - 2020-10-09 13:55:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 13:55:48 --> Unable to connect to the database
ERROR - 2020-10-09 13:55:48 --> Severity: Warning --> pg_connect(): Unable to connect to PostgreSQL server: FATAL:  sorry, too many clients already
FATAL:  sorry, too many clients already /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 154
ERROR - 2020-10-09 13:55:48 --> Unable to connect to the database
ERROR - 2020-10-09 13:55:48 --> Severity: Warning --> pg_last_error() expects parameter 1 to be resource, boolean given /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 479
ERROR - 2020-10-09 13:55:48 --> Query error:  - Invalid query: SELECT "tbl".*
FROM "public"."msCustomer" "tbl"
WHERE (
				tbl."CustCode" = '087780895388'
				OR "tbl"."HP" = '087780895388' 
				OR tbl."BarCode" = '087780895388'
			)
 LIMIT 1
ERROR - 2020-10-09 13:55:48 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/ws/application/models/Base_model.php 84
