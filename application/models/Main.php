<?php

 class Main extends CI_Model{
     
     public function can_login($username,$password)
    {
         $this->db->where('username',$username);
         $this->db->where('password',$password);
         $query=  $this->db->get('user');
         
         if($query->num_rows() > 0)
         {
             return TRUE;
         }
         else
         {
             return FALSE;
         }
    }
 }
?>
