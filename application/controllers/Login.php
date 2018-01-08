<?php
class Login extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
	}

	public function index($page = 'login') {
		if($this->session->userdata('logged_in') != null) {
			header('Location: home');
		}
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$data['error'] = FALSE;
		if ($this->form_validation->run() === FALSE) {
			$data['title'] = ucfirst($page); // Capitalize the first letter
			$this->load->view($page, $data);
		} else {
			$user = $this->input->post('username');
			$pass = $this->input->post('password');
			$query = $this->db->get_where('publisher', array('username' => $user, 'password' => $pass));
			if($query->num_rows() > 0) {
				$newdata = array(
						'username'  => $user,
						'name'  => $query->row()->name,
						'logged_in' => TRUE
				);
				$this->session->set_userdata($newdata);
				header('Location: home');
			} else {
				$data['error'] = TRUE;
				$this->load->view($page, $data);
			}
		}
	}
	
	public function logout() {
		$this->session->sess_destroy();
		header('Location: login');
	}
}