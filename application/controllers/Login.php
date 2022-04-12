<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Login extends CI_Controller {
 	
 	function __Construct(){ 

 		parent::__construct();
 		// load employee model 	
 	    $this->load->model('User_model','user'); 

 	}

	public function index()
	{   
		$this->load->view('login');
	}

	public function validate()
	{
		$result = $this->user->validate_login();

		if(@$result->id){
			
			$this->session->set_flashdata('success', 'Login Success.');

			$session_data = array(
			        'user_id'  		  => $result->id,
			        'name_of_user'    => $result->name,  
			        'logged_in' 	  => true
			);

			$this->session->set_userdata($session_data);

			redirect(base_url('employee'),'refresh');
		
		}else{
			
			$this->session->set_flashdata('error', 'Invalid Login.');

			redirect(base_url(),'refresh');
		
		}
		
	}

	public function logout()
	{ 
		$session_data = array(
		        'user_id'  		  => '',
		        'name_of_user'    => '',  
		        'logged_in' 	  => false
		);
		$this->session->set_userdata($session_data);
		redirect(base_url(),"refresh"); 
	}
 
}
