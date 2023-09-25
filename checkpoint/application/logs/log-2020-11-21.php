<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-11-21 06:15:19 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-11-21 18:58:16 --> Severity: Warning --> pg_query(): Query failed: ERROR:  unterminated quoted string at or near &quot;'081311331446''&quot;
LINE 1: ...&quot; + interval '360 seconds' &gt; now() AND &quot;Msisdn&quot; = '081311331...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-11-21 18:58:16 --> Query error: ERROR:  unterminated quoted string at or near "'081311331446''"
LINE 1: ..." + interval '360 seconds' > now() AND "Msisdn" = '081311331...
                                                             ^ - Invalid query: SELECT * FROM ws."Messages" WHERE "DateCreate" + interval '360 seconds' > now() AND "Msisdn" = '081311331446''
