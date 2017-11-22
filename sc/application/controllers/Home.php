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
		$this->load->model('data');
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

	/*
	*	invokes dashboard page and passes settings
    */

	public function dashboard() {
		$data['title'] = '';
		$data['header_allowed'] = TRUE;
		$data['header_black'] = TRUE;
        $this->load->template('dashboard', 'dashboard', $data);
    }

	/*
	*	invokes landing page and passes settings
    */

	public function landing() {
        $data['title'] = '';
		$data['header_allowed'] = TRUE;
		$data['header_black'] = FALSE;
        $this->load->template('landing', 'landing', $data);
    }

	/*
	*	invokes thanks page and passes settings
    */

	public function thanks() {
        $data['title'] = '';
		$data['header_allowed'] = TRUE;
		$data['header_black'] = TRUE;
        $this->load->template('thanks', 'thanks', $data);
    }
}