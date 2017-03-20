<?php

defined('BASEPATH') OR exit('No direct script access allowed');


class Auth extends CI_Controller {

	public function __construct() {
		parent::__construct();
	}

	public function index() {
		$this->load->view('login');
	}

	public function authentication() {
		$result = $this->auth_model->validate();
	 //
		if($result){
	      $this->session->set_userdata('logged_in');
	      redirect('user');

		 } else {
			 redirect('');
		 }
	}

	public function logout() {
		$this->session->unset_userdata('logged_in');
		session_destroy();
		redirect('');
	}
}
