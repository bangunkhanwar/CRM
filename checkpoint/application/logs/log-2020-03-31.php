<?php defined('BASEPATH') OR exit('No direct script access allowed'); ?>

ERROR - 2020-03-31 11:02:29 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:02:29 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:02:29 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:02:29 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:25:38 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:25:38 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:25:38 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:25:38 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:26:31 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:26:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:26:31 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:26:31 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:27:39 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:27:39 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:27:39 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:27:39 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:29:43 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:29:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:29:43 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:29:43 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:29:50 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:29:50 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:29:50 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:29:50 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:29:59 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:29:59 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:29:59 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:29:59 --> Severity: error --> Exception: Call to a member function num_rows() on boolean /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 67
ERROR - 2020-03-31 11:30:31 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:30:31 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:30:31 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:30:31 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:30:37 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:30:37 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:30:37 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:30:37 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:30:42 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:30:42 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:30:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:30:42 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:32:40 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:32:40 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:32:40 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:32:40 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:32:42 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:32:42 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:32:42 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:32:42 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:32:56 --> Severity: Warning --> Missing argument 1 for Stock_current_model::get_list(), called in /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Inventory.php on line 57 and defined /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 27
ERROR - 2020-03-31 11:32:56 --> Severity: Notice --> Undefined variable: sku /home/elcorps/crm/adm/application/modules/omnichannel/models/Stock_current_model.php 44
ERROR - 2020-03-31 11:32:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;)&quot;
LINE 8:   &quot;tbl&quot;.&quot;SKU&quot; IN ()
                          ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:32:56 --> Query error: ERROR:  syntax error at or near ")"
LINE 8:   "tbl"."SKU" IN ()
                          ^ - Invalid query: 		SELECT "tbl"."StoreCode",count("SKU"),
	"mss"."Description" "StoreName",
	"mss"."Phone" "PhoneStore" 
	FROM
		"omnichannel"."trStockCurrent" "tbl"
		LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode" = "mss"."StoreCode" 
	WHERE
		"tbl"."SKU" IN ()
		GROUP BY "tbl"."StoreCode","mss"."Description",	"mss"."Phone"
	ORDER BY
		"tbl"."StoreCode" ASC
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:36:26 --> Severity: Notice --> Undefined index: StoreName /home/elcorps/crm/adm/application/modules/omnichannel/views/inventory/list.php 29
ERROR - 2020-03-31 11:54:56 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;SKU&quot; is ambiguous
LINE 6:      OR UPPER(&quot;SKU&quot;) LIKE '%%'
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:54:56 --> Query error: ERROR:  column reference "SKU" is ambiguous
LINE 6:      OR UPPER("SKU") LIKE '%%'
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-03-31 11:56:04 --> Severity: Warning --> pg_query(): Query failed: ERROR:  column reference &quot;SKU&quot; is ambiguous
LINE 6:      OR UPPER(&quot;SKU&quot;) LIKE '%%'
                      ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 11:56:04 --> Query error: ERROR:  column reference "SKU" is ambiguous
LINE 6:      OR UPPER("SKU") LIKE '%%'
                      ^ - Invalid query: SELECT "tbl".*, "mss"."Description" "StoreName", "mps"."isOmni"
FROM "omnichannel"."trStockCurrent" "tbl"
LEFT JOIN "public"."msProductStore" "mps" ON "tbl"."SKU"="mps"."SKU"
LEFT JOIN "public"."msStore" "mss" ON "tbl"."StoreCode"="mss"."StoreCode"
WHERE (UPPER("tbl"."StoreCode") LIKE '%%'
					OR UPPER("SKU") LIKE '%%'
					OR UPPER("tbl"."Description") LIKE '%%')
ORDER BY "StoreCode" ASC
 LIMIT 10
ERROR - 2020-03-31 15:37:17 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ATIN&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* ' NAFI'ATIN MUKARROMAH'
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 15:37:17 --> Query error: ERROR:  syntax error at or near "ATIN"
LINE 3: WHERE ( "Name" ~* ' NAFI'ATIN MUKARROMAH'
                                 ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* ' NAFI'ATIN MUKARROMAH'
					)
AND "StoreCode" = 'D117'
AND "DateOfBirth" = '19880417'
 LIMIT 10
ERROR - 2020-03-31 15:38:43 --> Severity: Warning --> pg_query(): Query failed: ERROR:  syntax error at or near &quot;ATIN&quot;
LINE 3: WHERE ( &quot;Name&quot; ~* ' NAFI'ATIN MUKARROMAH'
                                 ^ /home/elcorps/crm/adm/system/database/drivers/postgre/postgre_driver.php 242
ERROR - 2020-03-31 15:38:43 --> Query error: ERROR:  syntax error at or near "ATIN"
LINE 3: WHERE ( "Name" ~* ' NAFI'ATIN MUKARROMAH'
                                 ^ - Invalid query: SELECT *
FROM "public"."msCustomer" "tbl"
WHERE ( "Name" ~* ' NAFI'ATIN MUKARROMAH'
					)
AND "StoreCode" = 'D117'
AND "DateOfBirth" = '19880417'
 LIMIT 10
ERROR - 2020-03-31 15:44:07 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-03-31 15:44:07 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
ERROR - 2020-03-31 16:51:03 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-03-31 16:51:48 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 441
ERROR - 2020-03-31 17:20:09 --> Severity: Notice --> Undefined index: fidPrductColor /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 293
ERROR - 2020-03-31 17:20:09 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 294
ERROR - 2020-03-31 17:20:58 --> Severity: Notice --> Undefined index: fidPrductColor /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 293
ERROR - 2020-03-31 17:20:58 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 294
ERROR - 2020-03-31 17:32:24 --> Severity: Notice --> Undefined index: fidPrductColor /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 293
ERROR - 2020-03-31 17:32:24 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 294
ERROR - 2020-03-31 17:33:25 --> Severity: Notice --> Undefined index: fidPrductColor /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 293
ERROR - 2020-03-31 17:33:25 --> Severity: Notice --> Undefined index: fidProductSize /home/elcorps/crm/adm/application/modules/omnichannel/controllers/Master.php 294
ERROR - 2020-03-31 20:17:28 --> Severity: Notice --> Undefined index: HTTP_HOST /home/elcorps/crm/adm/application/config/config.php 27
