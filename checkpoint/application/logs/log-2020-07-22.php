<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-07-22 12:06:46 --> Severity: Warning --> pg_query(): Query failed: ERROR:  value too long for type character varying(3) /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-22 12:06:46 --> Query error: ERROR:  value too long for type character varying(3) - Invalid query: INSERT INTO "omnichannel"."fileUpload" ("fileServerName", "fileType", "filePath", "fileExt", "fileSize", "isImage", "imageWidth", "imageHeight", "imageType", "imageSizeStr", "fidData", "tableName", "realName", "SKU", "ColorCode", "fidProductSize", "fidProductParent", "fidUploadType", "Order", "ForeignID") VALUES ('1_20200722120646305433.jpg', 'jpg', 'files/15582/', 'jpg', '326048', '1', '1000', '1000', 'jpg', '', '5', 'msProductParent', 'Asya Dress_dark olive.jpg', '120201050001', 'undefined', '', '15582', '2', '1', '120201050001')
ERROR - 2020-07-22 16:46:54 --> Severity: Warning --> pg_query(): Query failed: ERROR:  invalid regular expression: invalid escape \ sequence /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-07-22 16:46:54 --> Query error: ERROR:  invalid regular expression: invalid escape \ sequence - Invalid query: SELECT "tbl".*, coalesce(mpc."TotalPoints", 0) "TotalPoints", "datepoint"."LastTransaction"
FROM "member"."Member" "tbl"
LEFT JOIN "member"."MemberPointsCurrently" "mpc" ON "tbl"."MemberCode" = "mpc"."MemberCode"
LEFT JOIN (SELECT "MemberCode", MAX ( "TransDate" ) "LastTransaction" 
FROM
	points."Points" 
WHERE
	"TransType" = 1 
GROUP BY
	"MemberCode") datepoint ON "tbl"."MemberCode" = "datepoint"."MemberCode"
WHERE (tbl."MemberCode" ~* '18042180792\'
					OR UPPER("IdCardNumber") LIKE '%18042180792\%'
					OR tbl."Name" ~* '18042180792\'
					OR UPPER("Phone") LIKE '%18042180792\%'
					OR UPPER("Handpone") LIKE '%18042180792\%'
					OR UPPER("Barcode") LIKE '%18042180792\%'
					OR UPPER("Email") LIKE '%18042180792\%'
					OR UPPER("Address") LIKE '%18042180792\%')
AND "tbl"."StoreCode" in (select "StoreCode" from admpanel."msStoreAccess" where "fidMsOperator"='239')
ORDER BY "RegistrationDate" DESC
 LIMIT 10
