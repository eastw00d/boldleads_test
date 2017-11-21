<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author		Alex
 */

/*
 * This Home controller is used  to load templates
 */

class Home extends Public_Controller {

	public function __construct() {
    	parent::__construct();
    }

    /*
    * - Index is a method that fires automatically and launches 
	*	index page - main layout
	* In this case it will load home template
    */

    public function index() {
        $data['title'] = '';
		$data['header_allowed'] = TRUE;
		$data['header_black'] = FALSE;
        $this->load->template('home', 'home', $data);
    }

}