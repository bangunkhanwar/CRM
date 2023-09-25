<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/*
| -------------------------------------------------------------------
| DATABASE CONNECTIVITY SETTINGS
| -------------------------------------------------------------------
| This file will contain the settings needed to access your database.
|
| For complete instructions please consult the 'Database Connection'
| page of the User Guide.
|
| -------------------------------------------------------------------
| EXPLANATION OF VARIABLES
| -------------------------------------------------------------------
|
|	['hostname'] The hostname of your database server.
|	['username'] The username used to connect to the database
|	['password'] The password used to connect to the database
|	['database'] The name of the database you want to connect to
|	['dbdriver'] The database type. ie: mysql.  Currently supported:
				 mysql, mysqli, postgre, odbc, mssql, sqlite, oci8
|	['dbprefix'] You can add an optional prefix, which will be added
|				 to the table name when using the  Active Record class
|	['pconnect'] TRUE/FALSE - Whether to use a persistent connection
|	['db_debug'] TRUE/FALSE - Whether database errors should be displayed.
|	['cache_on'] TRUE/FALSE - Enables/disables query caching
|	['cachedir'] The path to the folder where cache files should be stored
|	['char_set'] The character set used in communicating with the database
|	['dbcollat'] The character collation used in communicating with the database
|				 NOTE: For MySQL and MySQLi databases, this setting is only used
| 				 as a backup if your server is running PHP < 5.2.3 or MySQL < 5.0.7
|				 (and in table creation queries made with DB Forge).
| 				 There is an incompatibility in PHP with mysql_real_escape_string() which
| 				 can make your site vulnerable to SQL injection if you are using a
| 				 multi-byte character set and are running versions lower than these.
| 				 Sites using Latin-1 or UTF-8 database character set and collation are unaffected.
|	['swap_pre'] A default table prefix that should be swapped with the dbprefix
|	['autoinit'] Whether or not to automatically initialize the database.
|	['stricton'] TRUE/FALSE - forces 'Strict Mode' connections
|							- good for ensuring strict SQL while developing
|
| The $active_group variable lets you choose which connection group to
| make active.  By default there is only one group (the 'default' group).
|
| The $active_record variables lets you determine whether or not to load
| the active record class
*/

$active_group = 'default';
$active_record = TRUE;

// $db['default']['hostname'] = '10.10.11.103';
$db['default']['hostname'] = 'localhost';
$db['default']['username'] = 'postgres';
// $db['default']['password'] = 'pgcrm2018';
$db['default']['password'] = 'passWord';
$db['default']['database'] = 'CRM';
$db['default']['dbdriver'] = 'postgre';
$db['default']['dbprefix'] = '';
$db['default']['pconnect'] = FALSE;
$db['default']['db_debug'] = (ENVIRONMENT !== 'production');
$db['default']['cache_on'] = FALSE;
$db['default']['cachedir'] = '';
$db['default']['char_set'] = 'utf8';
$db['default']['dbcollat'] = 'utf8_general_ci';
$db['default']['swap_pre'] = '';
$db['default']['autoinit'] = TRUE;
$db['default']['stricton'] = FALSE;
$db['default']['port'] = 5433;

$db['beon']['hostname'] = '10.10.11.94';
$db['beon']['username'] = 'postgres';
// $db['default']['password'] = 'oranye@11003';
$db['beon']['password'] = 'pgsmarton2015';
$db['beon']['database'] = 'SmartDB';
$db['beon']['dbdriver'] = 'postgre';
$db['beon']['dbprefix'] = '';
$db['beon']['pconnect'] = FALSE;
$db['beon']['db_debug'] = (ENVIRONMENT !== 'production');
$db['beon']['cache_on'] = FALSE;
$db['beon']['cachedir'] = '';
$db['beon']['char_set'] = 'utf8';
$db['beon']['dbcollat'] = 'utf8_general_ci';
$db['beon']['swap_pre'] = '';
$db['beon']['autoinit'] = TRUE;
$db['beon']['stricton'] = FALSE;
//$db['default']['port'] = 5432;

$db['hrm']['hostname'] = '10.10.11.91';
$db['hrm']['username'] = 'postgres';
// $db['default']['password'] = 'oranye@11003';
$db['hrm']['password'] = 'pgroot91';
$db['hrm']['database'] = 'hrm_db';
$db['hrm']['dbdriver'] = 'postgre';
$db['hrm']['dbprefix'] = '';
$db['hrm']['pconnect'] = FALSE;
$db['hrm']['db_debug'] = (ENVIRONMENT !== 'production');
$db['hrm']['cache_on'] = FALSE;
$db['hrm']['cachedir'] = '';
$db['hrm']['char_set'] = 'utf8';
$db['hrm']['dbcollat'] = 'utf8_general_ci';
$db['hrm']['swap_pre'] = '';
$db['hrm']['autoinit'] = TRUE;
$db['hrm']['stricton'] = FALSE;
//$db['default']['port'] = 5432;


/* End of file database.php */
/* Location: ./application/config/database.php */