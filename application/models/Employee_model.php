<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Employee_model extends CI_Model {
   
   // load employee masterlist data
   public function masterlist(){

      $this->db->select('t1.*, t2.title as department_title, t3.title as designation_title'); 
      
      $this->db->from('employees t1');  

      $this->db->join('departments t2', 't2.id = t1.department_id', 'left'); 
      $this->db->join('designations t3', 't3.id = t1.designation_id', 'left'); 

      $this->db->order_by("last_name", "asc"); // order by last name

      return $this->db->get()->result();  

   }

   // save new employee
   public function save_new_employee()
   {
      // form data
      $data['first_name'] = $this->input->post('first_name',true);
      $data['last_name'] = $this->input->post('last_name',true);
      $data['address'] = $this->input->post('address',true);
      $data['designation_id'] = $this->input->post('designation_id',true);
      $data['department_id'] = $this->input->post('department_id',true);
      $data['salary'] = $this->input->post('salary',true);
      $data['bank_account_number'] = $this->input->post('bank_account_number',true);
      $data['email'] = $this->input->post('email',true);
      // return a boolean result
      return $this->db->insert('employees',$data); 
   }  

   // load employee data
   public function employee_information($id){

      // load 1 row array data
      return $this->db->get_where('employees', ['id'=>$id])->row();  

   }

   // update employee
   public function update_employee($id)
   {
      // form data
      $data['first_name'] = $this->input->post('first_name',true);
      $data['last_name'] = $this->input->post('last_name',true);
      $data['address'] = $this->input->post('address',true);
      $data['designation_id'] = $this->input->post('designation_id',true);
      $data['department_id'] = $this->input->post('department_id',true);
      $data['salary'] = $this->input->post('salary',true);
      $data['bank_account_number'] = $this->input->post('bank_account_number',true);
      $data['email'] = $this->input->post('email',true);
      
      $this->db->where('id',$id);

      // return a boolean result
      return $this->db->update('employees',$data); 
   } 

   // delete employee
   public function delete_employee($id)
   { 
      $this->db->where('id',$id);
      // return a boolean result
      return $this->db->delete('employees'); 
   }  

}