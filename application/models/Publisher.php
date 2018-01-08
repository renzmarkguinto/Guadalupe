<?php

class Publisher extends CI_Model {
	
	public function __construct()
	{
		$this->load->database();
		parent::__construct();
	}
	
	public function save($id=NULL) {
		if(!$id) { //Save user
		
			$data = array(
				'name' => $this->input->post('name'),
				'contact' => $this->input->post('contact'),
				'gender' => $this->input->post('gender'),
				'address' => $this->input->post('address')
			);
			$this->db->insert('publisher', $data);
			return ($this->db->affected_rows() > 0) ? TRUE : FALSE;
		} else {	//Update user
			/*$data = array(
               'firstname' => $_POST['first_name'],
               'lastname' => $_POST['last_name'],
               'dob' => $_POST['dob']
            );

			$this->db->where('id', $id);
			$this->db->update('user_model', $data);
			return ($this->db->affected_rows() > 0) ? TRUE : FALSE;*/
		}
	}
	
}