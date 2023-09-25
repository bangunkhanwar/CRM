<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-06-04 08:00:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AM&quot;
LINE 11: WHERE (tbl.&quot;MemberCode&quot; ~* 'IN'AM'
                                        ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-06-04 08:00:17 --> Query error: ERROR:  syntax error at or near "AM"
LINE 11: WHERE (tbl."MemberCode" ~* 'IN'AM'
                                        ^ - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'IN'AM'
					OR UPPER("IdCardNumber") LIKE '%IN'AM%'
					OR tbl."Name" ~* 'IN'AM'
					OR UPPER("Phone") LIKE '%IN'AM%'
					OR UPPER("Handpone") LIKE '%IN'AM%'
					OR UPPER("Barcode") LIKE '%IN'AM%'
					OR UPPER("Email") LIKE '%IN'AM%'
					OR UPPER("Address") LIKE '%IN'AM%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='224')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-06-04 10:23:56 --> Severity: Notice --> Undefined variable: trx_status /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-06-04 10:23:56 --> Severity: error --> Exception: Call to a member function result_array() on null /home/elcorps/crm/adm/application/modules/omnichannel/views/payment/main.php 189
ERROR - 2020-06-04 16:54:50 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
