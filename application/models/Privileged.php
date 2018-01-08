<?php

class Privileged extends CI_Model {
	
	public function privilegedList() {
		$query = $this->db->get_where('privileged');
		return $query->result_array();
	}

}






?>