<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-05-13 09:44:37 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 09:44:37 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 09:44:37 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 09:44:37 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 09:44:37 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 10:23:13 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 10:23:13 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 10:23:13 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 10:23:13 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 10:23:13 --> Severity: Warning --> Division by zero /home/elcorps/crm/adm/application/modules/dashboard/views/member/monthly_by_age.php 200
ERROR - 2020-05-13 13:33:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid input syntax for integer: &quot;null&quot;
LINE 3: WHERE &quot;fidKecamatan&quot; = 'null'
                               ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-13 13:33:42 --> Query error: ERROR:  invalid input syntax for integer: "null"
LINE 3: WHERE "fidKecamatan" = 'null'
                               ^ - Invalid query: SELECT "tbl".*
FROM "indonesia"."Kelurahan" "tbl"
WHERE "fidKecamatan" = 'null'
ERROR - 2020-05-13 17:05:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-05-13 17:05:39 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT *
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200501'
AND "tbl"."TransDate" <= '20200513'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* 'agu\'
			OR tbl."RecipientName" ~* 'agu\'
			OR tbl."Phone" ~* 'agu\'
			OR tbl."Address" ~* 'agu\'
			OR str_list."StoreCodeList" ~* 'agu\'
			OR member."Name" ~* 'agu\'
		)
