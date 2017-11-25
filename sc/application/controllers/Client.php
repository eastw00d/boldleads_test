<?php
defined('BASEPATH') OR exit('No direct script access allowed');
/**
 *
 * @author		Alex
 */

/*
 * This Client controller is used to operate with Login/Logout functionality
 */

class Client extends Public_Controller {

	public function __construct() {
    	parent::__construct();
		// load model Client_data for DB functions
		$this->load->model('client_data');
    }

	/*
    * This method is going to register a new user
    * Gets POST variables of String type
    */
	public function register() {
		// get posted variables from ajax
		$post = $this->input->post(null, true);
		if (!empty($post)) {
			// validate post
    		$this->form_validation->set_rules('user_name', 'User Name', 'trim|required|max_length[25]|xss_clean');
    		$this->form_validation->set_rules('password', 'Password', 'trim|required|max_length[11]|xss_clean');

    		if ($this->form_validation->run()) {
				//create an array to pass to DB
				$data = [
					'user_name' => $post['user_name'],
					'password_hash' => password_hash($post['password'], PASSWORD_DEFAULT),
					'created' => date('Y-m-d H:i:s')
				];
				// store data into client table
				$response = $this->client_data->add_record($data);

			    if ($response == TRUE) {
			        $result = TRUE;
			    } else {
			        error_log('Error occurred while registering user into DB');
			        error_log(print_r($this->get_errors(), true));
			        $result = FALSE;
			    }
    		} else {
    			$result = FALSE;
    			error_log(validation_errors());
    		}
    	} else {
    		$result = FALSE;
    	}

    	echo json_encode($result);
	}

	/*
    * This method is going to check for a unique nick_name
    * Meant to handle jquery validation upon typing
    */

    public function is_unique_name() {
    	$post = $this->input->post(null, true);
    	
		if (!empty($post)) {
    		$user_name = $post['user_name'];
    		$response = $this->client_data->name_exists($user_name);
    		
    		$result = ($response) ? 'This Name is already taken' : TRUE;
    	}
    	
    	echo json_encode($result);
    }

	/*
    * This method is going to login client and establish session parameters
    */

	public static function login() {
		$post = $this->input->post(null, true);
		$data = [];

		if (!empty($post)) {
			// get post variables
			$password = $post['password'];
			$user_name = $post['user_name'];
			
			// get credentials from DB by user_name and verify
			$data = $this->client_data->get_record_by_name($user_name);
			$password_hash = $data['password_hash'];
			$user_id = $data['client_id'];
			$user_name = $data['user_name'];
			
			// verify password hash
			if (password_verify($password, $password_hash)) { 
				// when success populate session variables
				$_SESSION['user']['user_id'] = $user_id;
	            $_SESSION['user']['user_name'] = $user_name;
				
				// update last login field in client table
				$this->client_data->update_last_login($user_id);

				$result = TRUE;
			} else {
				$result = FALSE;
			}
			
		} else {
			$result = FALSE;
		}

		echo json_encode($result);
	}

	/*
    * This method is going to logout client
    */

	public static function logout() {
		session_unset();
	    $_SESSION['user']['user_id'] = 0;
	    $_SESSION['user']['user_name'] = 'Guest';
		$result = TRUE;

		echo json_encode($result);
	}
}