<?php

   class Login extends CI_Controller{

   // private $d;
       
       public function index(){
            $this->load->view('starting');
           $this->load->view('Loginpage');
            $this->load->view('ending');
       }
       
       
       
       public function enter(){
           
           $this->load->view('demo');
       }
       
       
      public function login_validation(){
          
          $this->load->library('form_validation');
          $this->form_validation->set_rules('username','Username','required');
          $this->form_validation->set_rules('password','Password','required');
          
          if($this->form_validation->run())
          {
                $username = $this->input->post('username');
                $password = $this->input->post('password');
                
                $this->load->model('Main');
                
                if($this->Main->can_login($username,$password))
                {
                    $session_data=array('username'=>$username);
                    $this->session->set_userdata($session_data);
                    redirect("MainController/home");
                }
          }
          else
          {
              
          }
      }
              
       
   }
?>
