<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author		Alex
 */

/*
 * This Record controller is used  to operate with DB
 */

class Record extends Public_Controller {

	public function __construct() {
    	parent::__construct();
		// load model Db for DB functions
		$this->load->model('data');
    }

	public function add() {
		// get post
		$post = $this->input->post(null, true);
		// build customer array to store
		$customer = [ 
			'fname' => $post['fname'],
			'lname' => $post['lname'],
			'address' => $post['address'],
			'state' => $post['state'],
			'zip' => $post['zip'],
			'city' => $post['city'],
			'phone' => $post['phone'],
			'email' => $post['email'],
			'footage' => $post['footage']
		];
		//call model data and its save_recor method to store data
		$result = $this->data->save_record($customer);
		// return to js(ajax) json string	
		echo json_encode($result);
	}

	public function show() {
		// get post
		$post = $this->input->post(null, true);
		$id = $post['id'];
		// get a specific record
		$result = $this->data->get_record_by_id($id);
		// return result to ajax
		echo json_encode($result);	
	}
}