<?php
class Backstage extends CI_Controller {
	
	public function __construct() {
		parent::__construct();
		$this->load->library('session');
		$this->load->library('form_validation');
		$this->load->helper('url');
		$this->load->helper('form');
		$this->load->database();
		$this->load->model('privileged');
		$this->load->model('publisher');
	}
	
	
	public function home($page = "home") {
		$data['title'] = ucfirst($page);
		$this->load->view('templates/header', $data);
		$this->load->view($page, $data);
		$this->load->view('templates/footer');
	}
	
	
	public function add_groups($page = "Group - Add") {
		$this->form_validation->set_rules('username', 'username', 'required');
		$this->form_validation->set_rules('password', 'password', 'required');
		$data['title'] = $page;
		$this->load->view('templates/header', $data);
		$this->load->view('group_add');
		$this->load->view('templates/footer');
	}
	
	public function groups($page = "Group - View") {
		$data['title'] = $page;
		$this->load->view('templates/header', $data);
		$this->load->view('group_view');
		$this->load->view('templates/footer');
	}
	
	public function add_publisher($page = "Publisher - Add") {
		
	}
	
	public function publisher($page, $id = NULL) {
		if(!$id) { //View or Add page
			if($page == "view") {
				$data['title'] = "Publisher - View";
				$this->load->view('templates/header', $data);
				$this->load->view('publisher_view');
				$this->load->view('templates/footer');
			} elseif($page == "add") {
				if($_SERVER['REQUEST_METHOD'] == 'POST') {
					if($this->publisher->save()) {
						$this->session->set_flashdata('notif', 'success');
					} else {
						$this->session->set_flashdata('notif', 'failed');
					}
					redirect('publisher/add', 'refresh');
				} else {
					$data['title'] = "Publisher - Add";
					$data['privileged'] = $this->privileged->privilegedList();
					$this->load->view('templates/header', $data);
					$this->load->view('publisher_add');
					$this->load->view('templates/footer');
				}
			}
		} else { //Update page
			
		}
	}
	
	public function save_publisher() {
		$name = $this->input->post('username');
		$contact = $this->input->post('contact');
		$gender = $this->input->post('gender');
		$address = $this->input->post('address');
		$priviledge = count($this->input->post('priviledge'));
	}
	
	public function tms() {
		
	}
	
	public function pt() {
		
	}
	
	public function users() {
		
	}
}
?>