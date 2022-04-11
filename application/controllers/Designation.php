<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Designation extends CI_Controller {
 	
 	function __Construct(){ 

 		parent::__construct(); 
 	    // load designation model 	
 	    $this->load->model('Designation_model','designation'); 

 	    // validate active session
 	    if(!@$this->session->logged_in){
 	    	redirect(base_url(),'refresh');
 	    }

 	    // nav active menu
 	    $this->page_data['designation_tab'] = 'active';
 	    // content sub folder
 	    $this->page_data['sub_folder'] = 'designation';

 	}

	public function index()
	{
		// page title
		$this->page_data['page_title'] = 'Designation Masterlist';
		// page views content
		$this->page_data['content'] = 'masterlist';

		// load designation data
		$this->page_data['designations'] = $this->designation->data();

		$this->load->view('main', $this->page_data);
	}

	public function add_designation_details()
	{
		// page title
		$this->page_data['page_title'] = 'Add New Designation';
		// page views content
		$this->page_data['content'] = 'add_designation';
  
		$this->load->view('main', $this->page_data);
	}

	public function save_designation_details()
	{	
		// backend form validation
		$this->form_validation->set_rules('title', 'Title', 'required'); 
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to add designation page
			redirect(base_url('add-new-designation'),'refresh');

		}else{

			// save to database
			if($this->designation->save_new_designation()){
				$this->session->set_flashdata('success', 'Designation Successfuly Added.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('designation'),'refresh');
		}
		
		
	}

	public function edit_designation_details($id)
	{
		// page title
		$this->page_data['page_title'] = 'Edit Designation Information';
		// page views content
		$this->page_data['content'] = 'edit_designation'; 

		// load designation data
		$this->page_data['designation'] = $this->designation->data($id); 
 
		// validate if designation id exist
		if(!$this->page_data['designation']){
			die('invalid request.');
		}

		$this->load->view('main', $this->page_data);
	}

	public function update_designation_details($id)
	{	
		// backend form validation
		$this->form_validation->set_rules('title', 'Title', 'required'); 
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to edit designation page
			redirect(base_url('edit-new-designation/'.$id),'refresh');

		}else{

			// save to database
			if($this->designation->update_designation($id)){
				$this->session->set_flashdata('success', 'Designation Successfuly Updated.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('designation'),'refresh');
		}
		
		
	}

	public function delete_designation_details($id)
	{	 

		// save to database
		if($this->designation->delete_designation($id)){
			$this->session->set_flashdata('success', 'Designation Successfuly Deleted.');
		}else{
			$this->session->set_flashdata('error', 'Database Error. Please try again.');
		}

		// return to main page 
		redirect(base_url('designation'),'refresh');
		 		
		
	}



}
