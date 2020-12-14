<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>LogIn</h3>
        </div>
      </div>
    </div>
     <div class="log-form">
       <?php
           if($this->session->flashdata('message')){
            echo '<div class="alert alert-danger">
                     '.$this->session->flashdata("message").'
                 </div>';
          }
       ?>
        <form method="post" action="<?php echo base_url();?>login/validation">
            <input type="text" class="form-control" name="user_email" placeholder="user email" value="<?php echo set_value('user_email');?>">
            <span class="text-danger"><?php echo form_error('user_email'); ?></span>
            <input type="password" class="form-control" name="user_password" placeholder="user password" value="<?php echo set_value('user_password');?>">
            <span class="text-danger"><?php echo form_error('user_password'); ?></span>
            <a href="<?php echo base_url('Forget_pass/forgot_pass');?>">Forgot your password?</a><br>
            <button type="submit" name ="login" class="btn login-btn" value="Login" >Login</button>
            
        
                
        </form>
     </div>
  </div>
</div>