<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class Designation_model extends CI_Model {
   
   // load designation data
   public function data($id = ''){ 

      // if has id will return 1 row
      if($id){
         return $this->db->get_where('designations', ['id'=>$id])->row();  
      }else{
         return $this->db->get('designations')->result();  
      }
      

   }

   // save new designation
   public function save_new_designation()
   {
      // form data
      $data['title'] = $this->input->post('title',true); 
      // return a boolean result
      return $this->db->insert('designations',$data); 
   }  

   // update designation
   public function update_designation($id)
   {
      // form data
      $data['title'] = $this->input->post('title',true); 
      
      $this->db->where('id',$id);

      // return a boolean result
      return $this->db->update('designations',$data); 
   } 

   // delete designation
   public function delete_designation($id)
   { 
      $this->db->where('id',$id);
      // return a boolean result
      return $this->db->delete('designations'); 
   }  

}