<?php

/**
 *
 * @author		Alex
 */

/*
 * This Data model is used by Record controller
 */

class Data extends MY_Model {

	public function __construct() {
		parent::__construct();
	}

	// this function saves info to DB
    public function save_record($data) {
		return $this->db->insert('customer', $data);
	}

	// this function gets record by ID
    public function get_record_by_id($id) {
		// select from customer where id = $id
		$this->db->where('id', $id);
		$this->db->from('customer'); 
		$this->db->limit(1);
		$query = $this->db->get();
		// return row
        return $query->row_array();
	}

	// this function gets all records for dashboard
    public function get_all_records() {
		// SELECT * FROM customer ORDER BY fanme ASC
		$this->db->select('fname, lname, email, date_created');
        $this->db->from('customer');
        $this->db->order_by('customer.fname', 'ASC');
		//return an array
        $query = $this->db->get();
        return $query->result_array();
	}

}