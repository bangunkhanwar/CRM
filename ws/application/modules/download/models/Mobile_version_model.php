<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

class Mobile_version_model extends Base_Model {

	function __construct() {

        parent::__construct();
		$this->set_schema('ws');
		$this->set_table('MobileVersion');
		$this->set_pk('Version');
		 // $this->set_pk('ItemCode');
		$this->set_log(false);
    }	
}