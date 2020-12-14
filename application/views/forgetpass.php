<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Forgot  Password</h3>
        </div>
      </div>
    </div>
     <div class="log-form">
     <?php
        if($this->session->flashdata('confirmation_message')){
          echo '<div class="alert alert-success">
                   '.$this->session->flashdata("confirmation_message").'
               </div>';
        }
     ?>
        <form method="post" action="<?php echo base_url('Forget_pass/resetlink');?>">
            <input type="text" class="form-control" name="user_email" placeholder="user email" required="required">
           
            <button type="submit" name ="login" class="btn " value="send reset link" >send reset link</button>
                
        </form>
     </div>
  </div>
</div>