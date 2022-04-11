<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Employee extends CI_Controller {
 	
 	function __Construct(){ 

 		parent::__construct();
 		// load employee model 	
 	    $this->load->model('Employee_model','employee');
 	    // load designations model 	
 	    $this->load->model('Designation_model','designation');
 	    // load department model 	
 	    $this->load->model('Department_model','department'); 

 	    // validate active session
 	    if(!@$this->session->logged_in){
 	    	redirect(base_url(),'refresh');
 	    }
 
 	    // nav active menu
 	    $this->page_data['employee_tab'] = 'active';
 	    // content sub folder
 	    $this->page_data['sub_folder'] = 'employee';

 	}

	public function index()
	{
		// page title
		$this->page_data['page_title'] = 'Employee Masterlist';
		// page views content
		$this->page_data['content'] = 'masterlist';

		// load employee masterlist data
		$this->page_data['employees'] = $this->employee->masterlist();

		$this->load->view('main', $this->page_data);
	}

	public function add_employee_details()
	{
		// page title
		$this->page_data['page_title'] = 'Add New Employee';
		// page views content
		$this->page_data['content'] = 'add_employee';

		// load designation data
		$this->page_data['designations'] = $this->designation->data();
		// load department data
		$this->page_data['departments'] = $this->department->data();

		$this->load->view('main', $this->page_data);
	}

	public function save_employee_details()
	{	
		// backend form validation
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('first_name', 'First name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required');
		$this->form_validation->set_rules('department_id', 'Department', 'required');
		$this->form_validation->set_rules('designation_id', 'Designation', 'required');
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to add employee page
			redirect(base_url('add-new-employee'),'refresh');

		}else{

			// save to database
			if($this->employee->save_new_employee()){
				$this->session->set_flashdata('success', 'Employee Successfuly Added.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('employee'),'refresh');
		}
		
		
	}

	public function edit_employee_details($id)
	{
		// page title
		$this->page_data['page_title'] = 'Edit Employee Information';
		// page views content
		$this->page_data['content'] = 'edit_employee';

		// load designation data
		$this->page_data['designations'] = $this->designation->data();
		// load department data
		$this->page_data['departments'] = $this->department->data();

		// load employee masterlist data
		$this->page_data['employee'] = $this->employee->employee_information($id);
 
		// validate if employee id exist
		if(!$this->page_data['employee']){
			die('invalid request.');
		}

		$this->load->view('main', $this->page_data);
	}

	public function update_employee_details($id)
	{	
		// backend form validation
		$this->form_validation->set_rules('last_name', 'Last Name', 'required');
		$this->form_validation->set_rules('first_name', 'First name', 'required');
		$this->form_validation->set_rules('email', 'Email', 'required');
		$this->form_validation->set_rules('salary', 'Salary', 'required');
		$this->form_validation->set_rules('department_id', 'Department', 'required');
		$this->form_validation->set_rules('designation_id', 'Designation', 'required');
 	   
 		// validate forms
		if($this->form_validation->run() == FALSE){
  
			// will return to edit employee page
			redirect(base_url('edit-new-employee/'.$id),'refresh');

		}else{

			// save to database
			if($this->employee->update_employee($id)){
				$this->session->set_flashdata('success', 'Employee Successfuly Updated.');
			}else{
				$this->session->set_flashdata('error', 'Database Error. Please try again.');
			}

			// return to main page 
			redirect(base_url('employee'),'refresh');
		}
		
		
	}

	public function delete_employee_details($id)
	{	
		 

		// save to database
		if($this->employee->delete_employee($id)){
			$this->session->set_flashdata('success', 'Employee Successfuly Deleted.');
		}else{
			$this->session->set_flashdata('error', 'Database Error. Please try again.');
		}

		// return to main page 
		redirect(base_url('employee'),'refresh');
		 		
		
	}

	public function view_employee_details($id)
	{
		// page title
		$this->page_data['page_title'] = 'View Employee Information';
		// page views content
		$this->page_data['content'] = 'view_employee';

		// load designation data
		$this->page_data['designations'] = $this->designation->data();
		// load department data
		$this->page_data['departments'] = $this->department->data();

		// load employee masterlist data
		$this->page_data['employee'] = $this->employee->employee_information($id);
 
		// validate if employee id exist
		if(!$this->page_data['employee']){
			die('invalid request.');
		}

		$this->load->view('main', $this->page_data);
	}


}
