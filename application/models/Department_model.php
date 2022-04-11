<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Department_model extends CI_Model {
   
   // load department data
   public function data($id = ''){ 

      // if has id will return 1 row
      if($id){
         return $this->db->get_where('departments', ['id'=>$id])->row();  
      }else{
         return $this->db->get('departments')->result();  
      }
       
   }

   // save new department
   public function save_new_department()
   {
      // form data
      $data['title'] = $this->input->post('title',true); 
      // return a boolean result
      return $this->db->insert('departments',$data); 
   }  

   // update department
   public function update_department($id)
   {
      // form data
      $data['title'] = $this->input->post('title',true); 
      
      $this->db->where('id',$id);

      // return a boolean result
      return $this->db->update('departments',$data); 
   } 

   // delete department
   public function delete_department($id)
   { 
      $this->db->where('id',$id);
      // return a boolean result
      return $this->db->delete('departments'); 
   }  

}