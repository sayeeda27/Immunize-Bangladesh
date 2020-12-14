<div class="reg-area text-center mb ">
  <div class="container">
    <div class="row">
      <div class="col-xl-12">
        <div class="reg-title text-center">
            <h3>Edit Birth Register</h3>
        </div>
      </div>
      
    </div>
     <div class="reg-form">
     <form method="post" action="<?php echo base_url(); ?>Crud/update/<?php echo $singleData->br_id; ?>">

          <div class="reg-input">
              <input type="text" class="form-control" name="fullname"  value="<?php echo $singleData->full_name; ?>" >
              <input type="text" class="form-control" name="dob"  value="<?php echo $singleData->d_o_b; ?>">
              <input type="text" class="form-control" name="gender" value="<?php echo $singleData->gender; ?>">
              <input type="text" class="form-control" name="pob" value="<?php echo $singleData->p_o_b; ?>">
              <input type="text" class="form-control" name="fname" value="<?php echo $singleData->f_name; ?>">
              <input type="text" class="form-control" name="mname" value="<?php echo $singleData->m_name; ?>">
              <input type="text" class="form-control" name="peraddr" value="<?php echo $singleData->permanent_addr; ?>">
              <input type="text" class="form-control" name="preaddr" value="<?php echo $singleData->present_addr; ?>">
              <input type="text" class="form-control" name="monumber" value="<?php echo $singleData->mo_number; ?>">
          </div>
          
            <button type="submit" name ="edit" value="update" class="btn reg-btn" >Update</button>

      </form>
     </div>
  </div>
</div>
