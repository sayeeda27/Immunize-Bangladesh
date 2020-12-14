<div class="reg-area text-center mb">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Birth Register</h3>
            <p>Insert the child birth details with correct information!!! </p>
        </div>
      </div>
    </div>
     <div class="reg-form">
        <form method="post" action="<?php echo base_url();?>crud/insertData">
            
                <div class="reg-input">
                    <input type="text" class="form-control" name="fullname" placeholder="Full name">
                    <input type="text" class="form-control" name="dob"  placeholder="date of Birth">
                    <input type="text" class="form-control" name="gender" placeholder="gender">
                    <input type="text" class="form-control" name="pob"  placeholder="Place Of Birth">
                    <input type="text" class="form-control" name="fname"  placeholder="Father name">
                    <input type="text" class="form-control" name="mname" placeholder="Mother name">
                    <input type="text" class="form-control" name="peraddr" placeholder="Permanent address">
                    <input type="text" class="form-control" name="preaddr" placeholder="Present address">
                    <input type="text" class="form-control" name="monumber" placeholder="mobile number">
                </div>
               
           <button type="submit" name ="insert" value="Add Data" class="btn reg-btn" >Register Now</button>
           
        </form>
     </div>
  </div>
</div>