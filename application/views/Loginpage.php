
<div style="width: 100%; height: 100%; background-image: url('../imgs/bg.jpg'); background-size: 100%; ">
   
    <div style="padding-top: 11%;"></div>
    
<div class="logbox">
    <div class="user"><img src="<?php echo base_url();?>imgs/user.png" width="80%" style="margin-top: 12px;"></div>

    <?php echo form_open("Login/login_validation"); ?>
    
    <input type="text" placeholder="Enter Username" name="username" class="form-control">
    <input type="password" placeholder="**********" name="password" class="form-control">
    <input type="submit" value="Login" name="login" class="btn btn-info">

</form>

</div>
    
</div>