<div class="col-lg-12" style="margin-top:10px;">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12" style="border-bottom:1px solid #999;">
                        <h4>Adding of Room</h4>
                  </div><div class="clearfix"></div>

    <div class="wpanel">
        <?php echo form_open("Process/roomAdd")?>
              <input type="text" placeholder="Enter Room No" name="roomno" required><br>
              <select name="type">
                 <option value="Single Bedroom">Single Bedroom</option>
                 <option value="Double Bedroom">Double Bedroom</option>
                 <option value="Dormetory">Dormetory</option>
              </select>
              <br>
              
               <select name="ac">
                 <option value="A/C">A/C</option>
                 <option value="Non A/C">Non A/C</option>
                
              </select>
              
              <input type="text" placeholder="Floor no"  name="floor">
              <input type="text" placeholder="Rent For A Day"  name="rent">
              <input type="submit" name="ar" value="Add To List">
              
              
         </form>
    </div>
</div>