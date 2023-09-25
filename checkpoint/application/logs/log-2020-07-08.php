<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-08 10:47:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column &quot;defaultContent&quot; does not exist
LINE 20: ORDER BY &quot;defaultContent&quot; ASC
                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-08 10:47:49 --> Query error: ERROR:  column "defaultContent" does not exist
LINE 20: ORDER BY "defaultContent" ASC
                  ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg ( 'Store: '||"StoreCode"||','||"RecipientName"||' ('||"Address"||'), Phone:'||"Phone", '<br>' ORDER BY "StoreCode" ) AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP BY 1 ) adr_list  ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200708'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "defaultContent" ASC
 LIMIT 10
ERROR - 2020-07-08 17:08:08 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-07-08 19:25:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;AGUS&quot;
LINE 12:      OR UPPER(&quot;IdCardNumber&quot;) LIKE '%ANA AGUS'%'
                                                  ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-08 19:25:54 --> Query error: ERROR:  syntax error at or near "AGUS"
LINE 12:      OR UPPER("IdCardNumber") LIKE '%ANA AGUS'%'
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
WHERE (tbl."MemberCode" ~* 'ANA AGUS''
					OR UPPER("IdCardNumber") LIKE '%ANA AGUS'%'
					OR tbl."Name" ~* 'ANA AGUS''
					OR UPPER("Phone") LIKE '%ANA AGUS'%'
					OR UPPER("Handpone") LIKE '%ANA AGUS'%'
					OR UPPER("Barcode") LIKE '%ANA AGUS'%'
					OR UPPER("Email") LIKE '%ANA AGUS'%'
					OR UPPER("Address") LIKE '%ANA AGUS'%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='188')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
