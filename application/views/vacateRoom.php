
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="margin-top:10px;">
                  <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #999;">
                        <h4>Vacate Room</h4>
                  </div>
                  
                   <div class="clearfix"></div>
                   
                   
                   <div class="wpanel" style="">
                  
                    <table border="1" style="margin:auto;" width="95%">
                        <tr class="thead">
                           <td width="5%">Srl No.</td>
                           <td width="10%">Room No</td>
                           <td>User Name,Address</td>
                           <td>Enter Date</td>
                           <td>Add Advance</td>
                           <td>Vacate Room</td>
                        </tr>
                         
		<?php $num2=1; foreach ($rlist as $rlist){?>			   
                        <tr class="hbrow"  onclick="window.document.location='';">
                            <td><?php echo $num2;?></td>
                           <td><?php echo $rlist['roomno'];?></td>
                           <td><?php echo $rlist['uname'].$rlist['uaddress'];?></td>
                           <td><?php echo $rlist['edate'];?></td>
                           <td width="15%" style="text-align: center;"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class='glyphicon glyphicon-plus'></span></button></td>
                           <td width="15%" style="text-align: center;"><button type="button" class="btn btn-info btn-lg" data-toggle="modal" data-target="#myModal"><span class="glyphicon glyphicon-transfer"></span></button></td>
                        </tr>
                       <?php $num2=$num2+1;}?>
                        
                    </table>
                     
                      
                   </div>
                  
           </div>
    




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