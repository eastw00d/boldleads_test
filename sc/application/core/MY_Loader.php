<?php

/**
 *
 * @author		Alex
 */

class MY_Loader extends CI_Loader {
    private $ci;

	public function __construct() {
		// extend Code Igniter instance
	    $this->ci =& get_instance();
	}
   
	public function template ($template_name, $body_view, $data = []) {

		//Set Page header to force reload on back button
		header("Cache-Control: no-store, must-revalidate, max-age=0");
		header("Pragma: no-cache");
		header("Expires: Sat, 26 Jul 1997 05:00:00 GMT");
		
		// load template
        $tpl = new Template;
        $tpl->load($template_name, $body_view, $data);
    }
}

