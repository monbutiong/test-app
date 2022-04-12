<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');

class User_model extends CI_Model {
   
   // validate username & passowrd
   public function validate_login(){ 

      $user = $this->db->get_where('users', ['username'=>$this->input->post('username')])->row();  

      if($user->id){ 

         if (password_verify($this->input->post('password'), $user->password)) {

            return $user;

         }else{
            
            return [];

         }

      }else{
         
         return [];

      }

   }

   // save registration
   public function register()
   {
      // form data
      $data['name'] = $this->input->post('name',true); 
      $data['username'] = $this->input->post('username',true); 
      $data['password'] = password_hash($this->input->post('password',true), PASSWORD_DEFAULT); 
      // return a boolean result
      return $this->db->insert('users',$data); 
   }  

}