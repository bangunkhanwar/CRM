<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-08-18 01:58:26 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-08-18 15:37:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-18 15:37:46 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-08-18 16:01:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: character varying = integer
LINE 4: AND &quot;showInExpeditionList&quot; = 1
                                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-18 16:01:11 --> Query error: ERROR:  operator does not exist: character varying = integer
LINE 4: AND "showInExpeditionList" = 1
                                   ^
HINT:  No operator matches the given name and argument types. You might need to add explicit type casts. - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCourier" "tbl"
WHERE "isActive" = 1
AND "showInExpeditionList" = 1
ORDER BY "CourierCode" ASC, "CourierService" ASC
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierService /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierName /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 139
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierService /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierName /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 139
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierService /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 137
ERROR - 2020-08-18 16:03:00 --> Severity: Notice --> Undefined index: CourierName /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 139
ERROR - 2020-08-18 16:17:06 --> Severity: error --> Exception: syntax error, unexpected end of file /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 125
ERROR - 2020-08-18 16:18:24 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;pickupservice&quot; does not exist
LINE 5: ORDER BY &quot;CourierCode&quot; ASC, &quot;CourierService&quot; ASC, &quot;pickupser...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-18 16:18:24 --> Query error: ERROR:  column "pickupservice" does not exist
LINE 5: ORDER BY "CourierCode" ASC, "CourierService" ASC, "pickupser...
                                                          ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCourier" "tbl"
WHERE "isActive" = 1
AND "showInExpeditionList" = 1
ORDER BY "CourierCode" ASC, "CourierService" ASC, "pickupservice" DESC
ERROR - 2020-08-18 16:18:26 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;pickupservice&quot; does not exist
LINE 5: ORDER BY &quot;CourierCode&quot; ASC, &quot;CourierService&quot; ASC, &quot;pickupser...
                                                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-08-18 16:18:26 --> Query error: ERROR:  column "pickupservice" does not exist
LINE 5: ORDER BY "CourierCode" ASC, "CourierService" ASC, "pickupser...
                                                          ^ - Invalid query: SELECT "tbl".*
FROM "ongkir"."msCourier" "tbl"
WHERE "isActive" = 1
AND "showInExpeditionList" = 1
ORDER BY "CourierCode" ASC, "CourierService" ASC, "pickupservice" DESC
ERROR - 2020-08-18 16:29:03 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 138
ERROR - 2020-08-18 16:29:06 --> Severity: error --> Exception: syntax error, unexpected 'else' (T_ELSE) /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 138
ERROR - 2020-08-18 16:29:25 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:26 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:33 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:33 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:34 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:34 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:34 --> Severity: error --> Exception: syntax error, unexpected '}' /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 140
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 149
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierService /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 149
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierName /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 150
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierService /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 150
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierServiceDescription /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 150
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 151
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 153
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 153
ERROR - 2020-08-18 16:29:57 --> Severity: Notice --> Undefined index: CourierCode /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Store.php 154
