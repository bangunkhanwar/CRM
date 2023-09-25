<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-04-21 12:05:28 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-21 12:05:28 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* 'HJ DIAN\'
					OR UPPER("IdCardNumber") LIKE '%HJ DIAN\%'
					OR tbl."Name" ~* 'HJ DIAN\'
					OR UPPER("Phone") LIKE '%HJ DIAN\%'
					OR UPPER("Handpone") LIKE '%HJ DIAN\%'
					OR UPPER("Barcode") LIKE '%HJ DIAN\%'
					OR UPPER("Email") LIKE '%HJ DIAN\%'
					OR UPPER("Address") LIKE '%HJ DIAN\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='95')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:19:39 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:05 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/category/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusColor /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 14:20:14 --> Severity: Notice --> Undefined index: StatusTrx /home/elcorps/crm/adm/application/modules/omnichannel/views/master/sku/list.php 61
ERROR - 2020-04-21 16:23:51 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;fileUpload_pkey&quot;
DETAIL:  Key (&quot;idFileUpload&quot;)=(3417) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-21 16:23:51 --> Query error: ERROR:  duplicate key value violates unique constraint "fileUpload_pkey"
DETAIL:  Key ("idFileUpload")=(3417) already exists. - Invalid query: INSERT INTO "omnichannel"."fileUpload" ("fileServerName", "fileType", "filePath", "fileExt", "fileSize", "isImage", "imageWidth", "imageHeight", "imageType", "imageSizeStr", "fidData", "tableName", "realName", "SKU", "ColorCode", "fidProductSize", "fidProductParent", "fidUploadType", "Order", "ForeignID") VALUES ('1_20200421162351920928.jpg', 'jpg', 'files/15328/', 'jpg', '145921', '1', '1280', '1280', 'jpg', '', '5', 'msProductParent', 'MISHA HIJAB INSTAN STONE GREY.jpg', '120101130008', '804', '', '15328', '2', '1', '120101130008')
ERROR - 2020-04-21 16:33:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  duplicate key value violates unique constraint &quot;fileUpload_pkey&quot;
DETAIL:  Key (&quot;idFileUpload&quot;)=(3418) already exists. /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-04-21 16:33:40 --> Query error: ERROR:  duplicate key value violates unique constraint "fileUpload_pkey"
DETAIL:  Key ("idFileUpload")=(3418) already exists. - Invalid query: INSERT INTO "omnichannel"."fileUpload" ("fileServerName", "fileType", "filePath", "fileExt", "fileSize", "isImage", "imageWidth", "imageHeight", "imageType", "imageSizeStr", "fidData", "tableName", "realName", "SKU", "ColorCode", "fidProductSize", "fidProductParent", "fidUploadType", "Order", "ForeignID") VALUES ('1_20200421163340816078.jpg', 'jpg', 'files/15328/', 'jpg', '145921', '1', '1280', '1280', 'jpg', '', '5', 'msProductParent', 'MISHA HIJAB INSTAN STONE GREY.jpg', '120101130008', '804', '', '15328', '2', '1', '120101130008')
