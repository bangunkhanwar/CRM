<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-02-13 09:58:38 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:58:45 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:58:49 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:59:01 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:59:05 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:59:16 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 09:59:24 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 10:00:02 --> Severity: error --> Exception: syntax error, unexpected 'echo' (T_ECHO) /home/elcorps/crm/adm/application/modules/membership/views/member/input.php 140
ERROR - 2020-02-13 12:06:11 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 847
ERROR - 2020-02-13 12:06:13 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 847
ERROR - 2020-02-13 12:06:33 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 847
ERROR - 2020-02-13 12:07:13 --> Severity: error --> Exception: syntax error, unexpected ';' /home/elcorps/crm/adm/application/modules/membership/controllers/Member.php 847
ERROR - 2020-02-13 17:06:07 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-13 17:06:07 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-02-13 17:06:07 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Kelurahan_model.php 50
ERROR - 2020-02-13 20:02:19 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKabupaten&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-02-13 20:02:19 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKabupaten" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kecamatan" "tbl"
WHERE "fidKabupaten" = 'null'
ERROR - 2020-02-13 20:02:19 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/master/models/Kecamatan_model.php 50
