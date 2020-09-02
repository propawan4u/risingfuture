<style>
    .ex{
        padding: 15px;
    }
</style>
<div class="main-content">
    <section class="section">
      <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0"><i data-feather="user"></i> <?php echo $title; ?></h4>
        </li>
      </ul>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
              <form method="POST" action="<?php echo base_url() ?>user-add">
                <div class="card-body">
                    <div class="row">
                            <div class="form-group ex">
                            <label><b>Name</b></label>
                            <input type="text" class="form-control" name="user_name" placeholder="Enter Name"  value="<?php echo set_value('user_name'); ?>">
                            <?php if(form_error('user_name')){
                                echo "<span style = 'color:red'>".form_error('user_name')."</span>";
                            }
                            ?>
                        </div>
                        <div class="form-group ex">
                            <label><b>Email</b></label>
                            <input type="email" class="form-control" name="user_email" placeholder="Enter User E-mail" value="<?php echo set_value('user_emial'); ?>" >
                            <?php if(form_error('user_email')){
                                echo "<span style = 'color:red'>".form_error('user_email')."</span>";
                            } ?>
                        </div>
                        <!-- <div class="form-group ex">
                            <label><b>Password</b></label>
                            <input type="password" name="user_password" placeholder="Enter User Password" class="form-control">
                            <small>Password must be 8 Charecter</small>
                            <?php //if(form_error('user_password')){
                                //echo "<span style = 'color:red'>".form_error('user_password')."</span>";
                            //} ?>
                        </div> -->
                        
                        <div class="form-group ex">
                            <label><b>Contact</b></label>
                            <input type="phone" name="user_contact" value="<?php echo set_value('user_contact'); ?>" placeholder="Enter Contact Number" class="form-control">
                            <?php if(form_error('user_contact')){
                                echo "<span style = 'color:red'>".form_error('user_contact')."</span>";
                            } ?>
                        </div>
                    </div>
                    <div class="row">

                        <div class="form-group ex">
                            <label><b>Alt Contact</b></label>
                            <input type="phone" name="user_alt_contact" value="<?php echo set_value('user_alt_contact'); ?>" placeholder="Enter Alt Contact" class="form-control">
                            <?php if(form_error('user_alt_contact')){
                                echo "<span style = 'color:red'>".form_error('user_alt_contact')."</span>";
                            } ?>
                        </div>
                        <div class="form-group ex">
                            <label><b>Address</b></label>
                            <input type="phone" name="user_address" value="<?php echo set_value('user_address'); ?>" placeholder="Enter User Contact Number" class="form-control">
                            <?php if(form_error('user_address')){
                                echo "<span style = 'color:red'>".form_error('user_address')."</span>";
                            } ?>
                        </div>
                        
                    </div>
                    <div class="row">
                    <div class="form-group ex">
                        <button class="btn btn-primary">Submit</button>
                        </div>
                    </div>
                </div>
                <!-- <div class="card-footer text-right pull-left">
                  
                </div> -->
              </form>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>