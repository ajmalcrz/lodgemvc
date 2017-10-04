<?php

   class MainController extends CI_Controller{
       
       
       public function home(){
           $this->load->view('pageTop');
           $this->load->view('home');
           $this->load->view('pageBottom');
       }
       
       public function addRoom(){
           $this->load->view('pageTop');
           $this->load->view('addRoom');
           $this->load->view('pageBottom');
       }
       
        public function viewRooms(){
           $this->load->model('datasource');          
           $data['rlist']=$this->datasource->get_all('rooms');           
           $this->load->view('pageTop');
           $this->load->view('viewRooms',$data);
           $this->load->view('pageBottom');
       }
       
       public function logout(){
           
        session_start();
        session_unset();
        session_destroy();
        redirect(Login/index);
        
       }
       
        public function rentRoom($roomno){
            
            $roomno;
            $this->load->view('pageTop');
            $this->load->view('rentRoom',array('roomno'=>$roomno));
            $this->load->view('pageBottom');
       }
       
       
         public function vacateRoom(){
           $this->load->model('datasource');          
            $data2['rlist']=$this->datasource->get_all('rentroom');   
            $this->load->view('pageTop');
           $this->load->view('vacateRoom',$data2);
           $this->load->view('pageBottom');
       }
       
       
   }


?>
