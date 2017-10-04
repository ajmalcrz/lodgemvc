

<div class="col-lg-12" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #999;">
                        <h4>View Rooms</h4>
                  </div><div class="clearfix"></div>

    <div class="wpanel">
    
            Categories
            <select style="width:22%;" onchange="changecat()" class="cat">
                <option value="*">All</option>
                <option value="Single BedRoom">Single BedRoom</option>
                <option value="Double BedRoom">Double BedRoom</option>
                <option value="Dormetory">Dormetory</option>
            </select>
            <table border="1" width="90%" style=" margin:auto;  margin-top:20px;">
            
               
                  
               <tr class="thead">
                  <td width="5%">Srl No.</td>
                  <td width="15%">Room NO.</td>
                  <td>Type Of Room</td>
                  <td width="15%">Rent For a Day</td>
                  <td width="23%">Status</td>
               </tr>
               
               <tbody id="tbdy">
                   
              
               <?php
               $num=1;
                foreach($rlist as $res){
                    $roomno=$res['roomno'];
               ?>
                  
               
                  <tr>
                    <td><?php echo $num; ?></td>
                    <td><?php echo $res['roomno'];?></td>
                    <td><?php echo $res['type'];?></td>
                    <td><?php echo $res['rent'];?></td>
                    <td><?php if($res['rflag']==1){ echo "<b style='color:red;'>Occupied</b>";}
                    else {echo anchor("MainController/rentRoom/$roomno","<b>Vacant</b>",array('title' => 'Rent This Room','class' => 'link1')) ;}
                    ?></td>
                  </tr>
                
                <?php    $num=$num+1; }?>
              
                </tbody>
            </table>
    </div>
</div>









<!-- Modal -->
<div id="myModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Modal Header</h4>
      </div>
      <div class="modal-body">
        <p>Some text in the modal.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
      </div>
    </div>

  </div>
</div>

















<script>

function changecat(){
    
     var page="<?php echo base_url(); ?>index.php/Process/ajcat";
              
            var cat=$(".cat").val();
            
           /* alert (cat);*/
              $.post(page,{cat:cat},function(data){
                  
                // alert (data);
                  $("#tbdy").html(data); 
               });
}

</script>