<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Reset Password</h3>
        </div>
      </div>
    </div>
     <div class="log-form">
    
        <form method="post" action="<?php echo base_url('Forget_pass/updatepass');?>">
            <input type="password" class="form-control" name="user_password" placeholder="password" required="required">
            <input type="password" class="form-control" name="us_password" placeholder="confirm password" required="required">
           
            <input type="hidden" class="form-control" name="userid" value="16" required="required">
            <button type="submit" name ="updatepass" class="btn " value="update password" >Update passwords</button>
                
        </form>
     </div>
  </div>
</div>