<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed'); 
$config['logo_path']		= "";
$config['app_name']			= "Admin CRM";
$config['app_name_ws']		= "WS";
$config['app_name_mobile']	= "App CRM";
$config['app_name_sms']		= "SMS CRM";
$config['url_api']			= "http://crm.elcorps.com:89/";
$config['ws_api']			= "http://crm.elcorps.com:9081/";
$config['beon_api']			= "http://beon.bezayagroup.com/bezsync/en/";
$config['u_api']			= "ict";
$config['p_api']			= "ict@api2018";
$config['debug']			= "0"; 
// jika 0 maka dianggap production (loading button enabled) 
// jika 1 maka dianggap debugging (loading button disable)
$config['default_status']	= '1,2,3,4';