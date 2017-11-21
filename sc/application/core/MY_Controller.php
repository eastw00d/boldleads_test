<?php

/**
 *
 * @author		Alex
 */

class MY_Controller extends CI_Controller {

	function __construct() {
    	parent::__construct();
		// start session
    	session_start();
    }

}

/**
 * Default Front-end Controller
 */

class Public_Controller extends MY_Controller {

	function __construct() {
    	parent::__construct();
   	}

}