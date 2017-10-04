<html>
    <head>
    <title>Lodge</title>
     
    <script src="<?php echo base_url(); ?>styles/js/jquery-1.11.1.min.js"></script>
    <script src="<?php echo base_url(); ?>styles/js/bootstrap.min.js"></script>
     
    <link href="<?php echo base_url();?>styles/css/bootstrap.min.css" rel="stylesheet">
    <link href="<?php echo base_url();?>styles/css/style.css" rel="stylesheet">
    
    <script>
         $(document).ready(function(){
           
              var page="<?php echo base_url(); ?>index.php/Process/ajxrentroom";
              
              
              $.post(page,{},function(data){
                  // alert (data);
                  $('#RV').html(data);
                  
                  
               });
         });
    </script>
   
    </head>
    
    <body>
        
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="padding:0;">
    
    <div class="col-lg-2 col-md-3 hidden-xs hidden-sm dash pull-left">
        <div class="director"><p style="font-size:22px; color:#FFF; font-family:'Comic Sans MS', cursive">Director</p></div>
        
        <div class="admin">
             <div class="pull-left" style="width:60px; height:60px; background-color:#302e2e; border-radius:50%; "></div>
              <div class="pull-left" style="padding:15px; color:#302e2e;">
              Hello Admin<br><div class="pull-left" style="width:10px;height:10px; border-radius:50%; margin:4px 3px 0 0; background-color:#0F0;">
              </div><p class="pull-left" style="font-size:12px;">online</p></div>
              <div class="clearfix"></div>           
        </div>
        
        
           <div class="dmenu">
                 
              <ul>
                   <?php echo anchor("MainController/home", "<li><span class='glyphicon glyphicon-home'></span> Home</li>"); ?>
                   <?php echo anchor("MainController/viewRooms", "<li><span class='glyphicon glyphicon-eye-open'></span> Rooms</li>"); ?>
                   <?php echo anchor("MainController/vacateRoom", "<li><span class='glyphicon glyphicon-tint'></span> Room Vacate  <div class='notc' id='RV'>0</div> </li>"); ?>
                  
                   <?php echo anchor("Home/contact", "<li><span class='glyphicon glyphicon-tags'></span> Prebook a Room</li>"); ?>
                   <?php echo anchor("MainController/logout", "<li><span class='glyphicon glyphicon-log-out'></span> Logout</li>"); ?>
               
              </ul>
           </div>
    </div>
    
    
    
    
    
    
    <div class="col-lg-10 col-md-9 col-sm-12 col-xs-12 ui pull-right">
    
     <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 uhead">
                <ul>
                    
                   
                        <?php echo anchor("MainController/home","<li><span class='glyphicon glyphicon-pencil'></span> Change rent Rate</li>",array('title' => 'Edit Rent')); ?>
                        <?php echo anchor("MainController/addRoom","<li><span class='glyphicon glyphicon-plus'></span></li>",array('title' => 'Add Rooms')); ?>
                        <?php echo anchor("MainController/addRoom","<li><span style='color:rgb(250,0,0);' class='glyphicon glyphicon-heart'></span></li>",array('title' => 'Pre-Booking')); ?>
                </ul>
           </div>
        
        
        
        
        
        
        
        

        
        
        
        
        
        
        
 