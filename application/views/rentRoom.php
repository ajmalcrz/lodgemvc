<div class="col-lg-12" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #999;">
                        <h4>Rent a Room</h4>
                  </div><div class="clearfix"></div>

    <div class="wpanel">
    
       <?php
              // echo $roomno;
       echo form_open("Process/rentProcess/".$roomno);?>
      <table border="0" width="95%" style="margin:auto;">
          <!--
           <tr><td colspan="4" style="text-align:center;"><h4><u>Room Details</u></h4></td></tr>
           <tr>
               <td width="22%">Select Room Type</td>
               <td width="25%">
                      <select style=" width:100%;" onchange="ajcat()" class="cat">
                <option>-------------------------</option>
                <option value="Single BedRoom">Single BedRoom</option>
                <option value="Double BedRoom">Double BedRoom</option>
                <option value="Dormetory">Dormetory</option>
            </select>
               </td>
               <td>Select Available Rooms</td>
               <td>
                     <select style=" width:100%;" name="roomno" onchange="" id="rno">
               
               
                    </select>
               </td>
           </tr>
           -->
           
           <tr><td colspan="4" style="text-align:center;"><br><h4><u>Personal Details</u></h4></td></tr>
           
           <tr>
               <td width="22%">Name</td>
               <td width="25%"><input type="text" style="width:100%;" name="pname" required></td>
               <td></td>
               <td></td>
           </tr>
           
            <tr>
               <td valign="top"><br>Address</td>
               <td><br><textarea style="max-width:200px;" name="paddrs"  required></textarea></td>
               <td></td>
               <td></td>
           </tr>
           
            <tr>
               <td>Mobile No.</td>
               <td><input type="text" style="width:100%;" name="pmobile" required></td>
               <td></td>
               <td></td>
           </tr>
           
            <tr>
               <td>Advance</td>
               <td><input type="text" style="width:100%;" name="advnc"  required></td>
               <td></td>
               <td></td>
           </tr>
           
           
           
           <tr><td colspan="2" style="text-align:center;"><br><input type="submit" value="submit" name="rs"  required></td></tr>
      </table>  
      
    </form>
    </div>
</div>




<script>

function ajcat(){
    
     var page="<?php echo base_url(); ?>index.php/Process/ajrentcat";
              
            var cat=$(".cat").val();
            
          
              $.post(page,{cat:cat},function(data){
                  
                 $("#rno").html(data);
               });
}

</script>