<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Register extends CI_Controller {
 	
 	function __Construct(){ 

 		parent::__construct();
 		// load employee model 	
 	    $this->load->model('User_model','user'); 

 	}

	public function index()
	{   
		$this->load->view('register');
	}

	public function validate()
	{
		// backend form validation
		$this->form_validation->set_rules('name', 'Name', 'required'); 
		$this->form_validation->set_rules('username', 'Username', 'required'); 
		$this->form_validation->set_rules('password', 'Password', 'required'); 
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to add department page
			redirect(base_url('register'),'refresh');

		}else{

			// save to database
			if($this->user->register()){
				$this->session->set_flashdata('success', 'Successfuly Registered.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url(),'refresh');
		}
		
	} 
 
}
