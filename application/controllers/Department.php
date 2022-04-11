<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Department extends CI_Controller {
 	
 	function __Construct(){ 

 		parent::__construct(); 
 	    // load department model 	
 	    $this->load->model('Department_model','department'); 

 	    // validate active session
 	    if(!@$this->session->logged_in){
 	    	redirect(base_url(),'refresh');
 	    }

 	    // nav active menu
 	    $this->page_data['department_tab'] = 'active';
 	    // content sub folder
 	    $this->page_data['sub_folder'] = 'department';

 	}

	public function index()
	{
		// page title
		$this->page_data['page_title'] = 'Department Masterlist';
		// page views content
		$this->page_data['content'] = 'masterlist';

		// load department data
		$this->page_data['departments'] = $this->department->data();

		$this->load->view('main', $this->page_data);
	}

	public function add_department_details()
	{
		// page title
		$this->page_data['page_title'] = 'Add New Department';
		// page views content
		$this->page_data['content'] = 'add_department';
  
		$this->load->view('main', $this->page_data);
	}

	public function save_department_details()
	{	
		// backend form validation
		$this->form_validation->set_rules('title', 'Title', 'required'); 
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to add department page
			redirect(base_url('add-new-department'),'refresh');

		}else{

			// save to database
			if($this->department->save_new_department()){
				$this->session->set_flashdata('success', 'Department Successfuly Added.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('department'),'refresh');
		}
		
		
	}

	public function edit_department_details($id)
	{
		// page title
		$this->page_data['page_title'] = 'Edit Department Information';
		// page views content
		$this->page_data['content'] = 'edit_department'; 

		// load department data
		$this->page_data['department'] = $this->department->data($id); 
 
		// validate if department id exist
		if(!$this->page_data['department']){
			die('invalid request.');
		}

		$this->load->view('main', $this->page_data);
	}

	public function update_department_details($id)
	{	
		// backend form validation
		$this->form_validation->set_rules('title', 'Title', 'required'); 
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to edit department page
			redirect(base_url('edit-new-department/'.$id),'refresh');

		}else{

			// save to database
			if($this->department->update_department($id)){
				$this->session->set_flashdata('success', 'Department Successfuly Updated.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('department'),'refresh');
		}
		
		
	}

	public function delete_department_details($id)
	{	 

		// save to database
		if($this->department->delete_department($id)){
			$this->session->set_flashdata('success', 'Department Successfuly Deleted.');
		}else{
			$this->session->set_flashdata('error', 'Database Error. Please try again.');
		}

		// return to main page 
		redirect(base_url('department'),'refresh');
		 		
		
	}



}
