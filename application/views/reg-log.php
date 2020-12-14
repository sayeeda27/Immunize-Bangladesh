<div class="container-fluid text-center">
   <div class="reg-area11 text-center ">
     <div class="user-reg-area1">
        <div class="user-reg-title text-center">
            <h3>SignUp</h3>
        </div>
     <div class="user-log-form">
     <?php
        if($this->session->flashdata('signup_message')){
          echo '<div class="alert alert-success text-center">
                   '.$this->session->flashdata("signup_message").'
               </div>';
        }
     ?>
        <form method="post" action="<?php echo base_url();?>Welcome/validation">
               <input type="text" class="form-control" name="user_name" placeholder="user name" value="<?php echo set_value('user_name');?>">
                <span class="text-danger"><?php echo form_error('user_name'); ?></span>
                <input type="text" class="form-control" name="user_email" placeholder="user email" value="<?php echo set_value('user_email');?>">
                <span class="text-danger"><?php echo form_error('user_email'); ?></span>
                <input type="password" class="form-control" name="user_password" placeholder="user password" value="<?php echo set_value('user_password');?>">
                <span class="text-danger"><?php echo form_error('user_password'); ?></span>
                <button type="submit" name ="register" value="Welcome" 
                class="btn" >Signup</button>
                
        </form>
     </div>
     </div>

     <div class="user-reg-img">

     
      </div>


 </div>
</div>