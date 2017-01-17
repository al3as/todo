<?php

 class Users extends CI_Controller
 {
 	public function __construct() {
 		parent::__construct();
 		// Any own commands here
 	}

 	// Register an account
 	public function regsiter()
 	{
 		//Load all models
 		$this->load->model('user_model');

 		//Validation
 		$this->load->library('form_validation');
 		$this->form_validation->set_rules('user_name','username','required|is_unique[users.user_name]');
 		$this->form_validation->set_rules('user_fullname','full name','required');
 		$this->form_validation->set_rules('user_pass','password','required');

 		//Run validation
 		if($this->form_validation->run() === FALSE)
 		{
 			$this->load->view('layouts/header');
 			$this->load->view('index');
 			$this->load->view('layouts/footer');
 		}
 		else
 		{
 			$this->user_model->insert();

 			//Get user data
 			$user = $this->user_model->getUserByName($this->input->post('user_name'));
 			//Set sessions
 			$this->session->set_userdata(session($user));


 			//redirect to dashboard
 			redirect('notes');
 		}

 	}

 	public function login()
 	{
 		//Load the models
 		$this->load->model('user_model');
 		$user = $this->user_model->getLogin();
 		if($user) {
 			$this->session->set_userdata(session($user));
 			$this->session->set_flashdata('alert','Welcome back ' . $this->session->userdata('user_name'));
 			redirect('notes');
 		} else {
 			$this->session->set_flashdata('error','Username or password are wrong');
 			redirect();
 		}

 	}

 	//Logout the user
 	public function logout()
 	{
 		// Destroy the session
 		$this->session->unset_userdata(['user_id', 'user_name', 'logged_in']);
 		
 		$this->session->set_flashdata('alert','Logout successfully, we wait you soon');

 		//redirect to main
 		redirect();
 	}

 	/*public function setting()
 	{
 		this->load->view('layouts/header');
 		this->load->view('');
 		this->load->view('layouts/footer');
 	}
*/
 }	