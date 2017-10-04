<?php

   class Process extends CI_Controller{
       
       
       public function roomAdd(){         
            $this->load->model('datasource','d');
            $ar = array();
        $ar['roomno'] = $this->input->post('roomno');
        $ar['type'] = $this->input->post('type');
        $ar['rent'] = $this->input->post('rent');
        $ar['AC'] = $this->input->post('ac');
        $ar['floor'] = $this->input->post('floor');
        $this->d->insert_data("rooms", $ar);
        
        echo "<script>
alert('There are no fields to generate a report');
           </script>";
       redirect('MainController/addRoom');
       
    
       }
   
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       
       public function ajxrentroom(){
           //echo 'hlooo';
           
         $q = "select * from rooms where rflag='1' ";
         $result = $this->db->query($q);
         $num=$result->num_rows();
         echo $num;
           
       }
       
       
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       
       
        public function ajcat(){
            $cat=$_POST['cat'];
           // echo $cat;
              $cnum=1;
             if($cat=='*'){
	       $cq="select * from rooms";
               $result = $this->db->query($cq)->result_array();
               
              // echo '*';
	   }
   else{
        $cq="select * from rooms where type='$cat'";
         $result = $this->db->query($cq)->result_array();
       // echo $cq;
   }
   
   
   foreach ($result as $re){
       
       $roomno=$re['roomno'];
       
     if($re['rflag']==1)
     {
         $ab="<b style='color:red;'>Occupied</b>";
         
           $e='<tr>
                  <td>'.$cnum.'</td>
                  <td>'.$re['roomno'].'</td>
                  <td>'.$re['type'].'</td>
                  <td>'.$re['rent'].'</td>
                      
                  <td>'.$ab.'</td>
           </tr>';
			   
        echo $e; $cnum=$cnum+1;
     }
     
     else{
         $ab="";
         
          $e='<tr>
                  <td>'.$cnum.'</td>
                  <td>'.$re['roomno'].'</td>
                  <td>'.$re['type'].'</td>
                  <td>'.$re['rent'].'</td>
                      
                  <td><a href="'.base_url('index.php/MainController/rentRoom/'.$roomno).'" class="link1"><b>Vacant</b></a></td>
           </tr>';
			   
        echo $e; $cnum=$cnum+1;
     }
       
   }
   
   
        }

        
        /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
        
        
        public function ajrentcat(){
            
             $cat=$_POST['cat'];
              $crq="select * from rooms where type='$cat' and rflag='0'";   
              
               $result = $this->db->query($crq)->result_array();
               
               foreach($result as $res2){
                   
                     $re='<option value="'.$res2['roomno'].'">'.$res2['roomno'].'</option>';
			   echo $re;    
               }    
                   
        }
        
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/
       /****************************************************************************/ 
        
       public function rentProcess($roomno){
            $roomno;
          $d=  date('Y/m/d');
         // echo $d;
        //   $rn=$this->input->post('roomno');
           $this->load->model('datasource','d');
           $result=  $this->d->select_where('rooms',array('roomno'=>$roomno));
           
           foreach($result as $result){
           $rd= $result['id'];
            $rno= $result['roomno'];
           }
            $ar=array();         
             $ar['roomid'] = $rd;
             $ar['roomno'] = $roomno;
              $ar['uname'] = $this->input->post('pname');
              $ar['uaddress'] = $this->input->post('paddrs');
              
              $ar['mob'] = $this->input->post('pmobile');
              $ar['advance'] = $this->input->post('advnc');
              $ar['edate'] = $d;
          
               
              $this->d->insert_data("rentroom", $ar);
              $this->d->update("rooms", array('rflag'=>1),array('id'=>$rd));
                  
                // echo $ar['roomid'].$ar['uname'].$ar['uaddress'].$ar['mob'].$ar['advance'].$ar['edate'];
                 redirect('MainController/viewRooms');
            
        }
        
        
       
       
   }


?>
