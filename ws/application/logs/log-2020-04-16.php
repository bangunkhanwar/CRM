<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-16 14:33:30 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;MemberDevice_pkey&quot;
DETAIL:  Key (&quot;DeviceToken&quot;)=(ct8dQd3Bq7E:APA91bF5CSxm3TWMT8-i41iwizKFXySlzrTHKRHzm4raNkRWm_u-yzN88cwEv4RoYpdaGD3QVg_DUvjCH6MzcUp8x9mp6_0LgOMJhthFnYaSElmELbgbiD03iywQV1bb4N9K_JM5ith3) already exists. /home/elcorps/crm/ws/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-16 14:33:30 --> Query error: ERROR:  duplicate key value violates unique constraint "MemberDevice_pkey"
DETAIL:  Key ("DeviceToken")=(ct8dQd3Bq7E:APA91bF5CSxm3TWMT8-i41iwizKFXySlzrTHKRHzm4raNkRWm_u-yzN88cwEv4RoYpdaGD3QVg_DUvjCH6MzcUp8x9mp6_0LgOMJhthFnYaSElmELbgbiD03iywQV1bb4N9K_JM5ith3) already exists. - Invalid query: INSERT INTO "member"."MemberDevice" ("DeviceToken", "MemberCode", "brand", "isLogin") VALUES ('ct8dQd3Bq7E:APA91bF5CSxm3TWMT8-i41iwizKFXySlzrTHKRHzm4raNkRWm_u-yzN88cwEv4RoYpdaGD3QVg_DUvjCH6MzcUp8x9mp6_0LgOMJhthFnYaSElmELbgbiD03iywQV1bb4N9K_JM5ith3', '20020249985', '1', '0')
