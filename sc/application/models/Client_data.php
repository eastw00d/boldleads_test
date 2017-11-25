<?php

/**
 *
 * @author		Alex
 */

/*
 * This Client_data model is used by Client controller
 */

class Client_data extends MY_Model {

	public function __construct() {
		parent::__construct();
	}

	/*
	* this method is to check if name is already taken
	* @user_name String
	*/

	public function name_exists($user_name) {
			// SELECT user_name FROM record.client WHERE LOWER(user_name) = {$user_name}
			$query = $this->db
				->where('LOWER(user_name)', strtolower($user_name))
				->from('client')
				->get()
				->row_array();
			// if user_name match return TRUE or FALSE
			$result = ($user_name == $query['user_name']) ? TRUE : FALSE;
		return $result;
	}

	/*
	* this method is to add record to client table during registration
	* @data an array representing a row of the client table
	*/

    public function add_record($data) {
		// INSERT INTO record.client $data array
		$result = $this->db->insert('client', $data);
		return ($result == TRUE) ? TRUE : FALSE;
	}

	/*
	* this method is to get a DB row by the name
	* @user_name String
	*/

    public function get_record_by_name($user_name) {
		// select from customer where user_name matches
		$this->db->where('user_name LIKE "%' . $user_name . '%"');
		$this->db->from('client'); 
		$this->db->limit(1);
		$query = $this->db->get();
		// return row
        return $query->row_array();
	}

	/*
	* this method is to update last_login of client table
	* @user_id Integer
	*/

	public function update_last_login($user_id) {
		if ($user_id) {
			$this->db->where('client_id', $user_id);
			$this->db->update('client', ['last_login' => date('Y-m-d H:i:s')]);
			return TRUE;
		} else {
			return FALSE;
		}
	}
}