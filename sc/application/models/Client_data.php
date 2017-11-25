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

	// this function saves info to DB
    public function add_record($data) {
		// INSERT INTO record.client $data array
		$result = $this->db->insert('client', $data);
		return ($result == TRUE) ? TRUE : FALSE;
	}

	// this function gets record by user name
    public function get_record_by_name($user_name) {
		// select from customer where user_name matches
		$this->db->where('user_name LIKE "%' . $user_name . '%"');
		$this->db->from('client'); 
		$this->db->limit(1);
		$query = $this->db->get();
		// return row
        return $query->row_array();
	}
}