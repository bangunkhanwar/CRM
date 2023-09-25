<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-06 11:20:18 --> Severity: Warning --> pg_query(): Query failed: ERROR:  table name &quot;str_list&quot; specified more than once /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:20:18 --> Query error: ERROR:  table name "str_list" specified more than once - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg("Address", ',' ORDER BY "StoreCode") AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-07-06 11:23:35 --> Severity: Warning --> pg_query(): Query failed: ERROR:  operator does not exist: || text
LINE 4: LEFT JOIN (SELECT &quot;TransNum&quot;, string_agg((||&quot;Address&quot;||), ',...
                                                  ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:23:35 --> Query error: ERROR:  operator does not exist: || text
LINE 4: LEFT JOIN (SELECT "TransNum", string_agg((||"Address"||), ',...
                                                  ^
HINT:  No operator matches the given name and argument type. You might need to add an explicit type cast. - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg((||"Address"||), ',' ORDER BY "StoreCode") AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) adr_list ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-07-06 11:23:47 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ORDER&quot;
LINE 4: ...SELECT &quot;TransNum&quot;, string_agg(||(||&quot;Address&quot;, ',' ORDER BY &quot;...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:23:47 --> Query error: ERROR:  syntax error at or near "ORDER"
LINE 4: ...SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "...
                                                             ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "StoreCode") AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) adr_list ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" DESC
 LIMIT 10
ERROR - 2020-07-06 11:23:48 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ORDER&quot;
LINE 4: ...SELECT &quot;TransNum&quot;, string_agg(||(||&quot;Address&quot;, ',' ORDER BY &quot;...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:23:48 --> Query error: ERROR:  syntax error at or near "ORDER"
LINE 4: ...SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "...
                                                             ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "StoreCode") AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) adr_list ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-07-06 11:23:49 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ORDER&quot;
LINE 4: ...SELECT &quot;TransNum&quot;, string_agg(||(||&quot;Address&quot;, ',' ORDER BY &quot;...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:23:49 --> Query error: ERROR:  syntax error at or near "ORDER"
LINE 4: ...SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "...
                                                             ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg(||(||"Address", ',' ORDER BY "StoreCode") AS "AddressList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) adr_list ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
ERROR - 2020-07-06 11:28:11 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ON&quot;
LINE 4: ...ne&quot;, ',' ORDER BY &quot;StoreCode&quot; ) AS &quot;AddressList&quot;  ON tbl.&quot;Tr...
                                                             ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-06 11:28:11 --> Query error: ERROR:  syntax error at or near "ON"
LINE 4: ...ne", ',' ORDER BY "StoreCode" ) AS "AddressList"  ON tbl."Tr...
                                                             ^ - Invalid query: SELECT "tbl".*, "sts"."Description" "StatusDescription", "sts"."Note" "StatusNote", "sts"."StatusColor", "sts"."IconPath" "StatusIcon", "sts"."Description", "paymentType"."PaymentTypeCode", str_list."StoreCodeList", adr_list."AddressList", "member"."Name" "MemberName"
FROM "omnichannel"."trCustomerOrderHeader" "tbl"
LEFT JOIN (SELECT "TransNum", string_agg("StoreCode", ',' ORDER BY "StoreCode") AS "StoreCodeList" FROM omnichannel."trCustomerOrder" GROUP  BY 1) str_list ON tbl."TransNum" = str_list."TransNum"
LEFT JOIN (SELECT "TransNum", string_agg ( 'Store: '||"StoreCode"||','||"RecipientName"||'('||"Address"||'), Phone:'||"Phone", ',' ORDER BY "StoreCode" ) AS "AddressList"  ON tbl."TransNum" = adr_list."TransNum"
LEFT JOIN "omnichannel"."msTransStatus" "sts" ON "tbl"."TransStatus"="sts"."TransStatus"
LEFT JOIN "omnichannel"."trCustomerOrderPaymentStatus" "orderPaymentStatus" ON "tbl"."TransNum"="orderPaymentStatus"."TransNum"
LEFT JOIN "omnichannel"."msPaymentType" "paymentType" ON "orderPaymentStatus"."fidPaymentType"="paymentType"."idPaymentType"
LEFT JOIN "member"."Member" "member" ON "tbl"."CustCode"="member"."MemberCode"
WHERE "tbl"."TransDate" >= '20200701'
AND "tbl"."TransDate" <= '20200706'
AND "tbl"."TransStatus" in (1,2,3,4)
AND (
			tbl."TransNum" ~* ''
			OR tbl."RecipientName" ~* ''
			OR tbl."Phone" ~* ''
			OR tbl."Address" ~* ''
			OR str_list."StoreCodeList" ~* ''
			OR member."Name" ~* ''
		)
ORDER BY "TransNum" ASC
 LIMIT 10
