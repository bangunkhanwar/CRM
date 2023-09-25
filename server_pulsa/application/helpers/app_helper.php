<?php  if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**/
function is_logged_in()
{
	$CI =& get_instance();
	$ss = $CI->session->userdata('LoggedIn');
	if($ss != '')
	{
	    // return TRUE;
		return TRUE;
	}else{
		return FALSE;
	}
	//return true;
}

if ( ! function_exists('log2file'))
{
	function log2file($msg)
	{
		$myFile = "log_file.txt";
		$fh = fopen($myFile, 'a') or die("can't open file");
		$stringData = date("Y-m-d h:m:s").chr(13);
		fwrite($fh, $stringData);
		
		fwrite($fh, $msg.chr(13).chr(13));
		fclose($fh);
	}
}
