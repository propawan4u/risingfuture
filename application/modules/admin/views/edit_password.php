<style>
    .ex{
        padding: 15px;
    }
    .card .card-body p 
    {
        font-weight: 500;
        color: red;
    }
    .shad
    {
        text-shadow: 2px 2px lightblue;
    }
</style>
<div class="main-content">
    <section class="section">
      <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0"><i class="fa fa-key" style="color: #FFD700;" ></i> <?php echo $title; ?></h4>
        </li>
      </ul>
      <div class="section-body">
        <div class="row">
          <div class="col-12 col-md-12 col-lg-12">
            <div class="card">
            <h6 style="font-size: 12px;">
    <?php if ($this->session->flashdata('success')) { ?>
      <div class="alert alert-success" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Successully !</strong> <?php echo $this->session->flashdata('success'); ?>
      </div>
    <?php } else if ($this->session->flashdata('warning')) {  ?>
      <div class="alert alert-warning" role="alert">
        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
        <strong>Warning!</strong> <?php echo $this->session->flashdata('warning'); ?>
      </div>
    <?php }  ?>
  </h6>
              <form method="POST" action="<?php echo base_url(); ?>update-password">
              <input type="hidden" name="uid" value="<?php echo $fetch[0]['uid']; ?>">
                <div class="card-body">
                    <div class="row">
                    <div class="row">
                        <div class="form-group ex">
                            <label><b>Password</b></label>
                            <input type="text" name="password" required  placeholder="Enter New Password" id="password" class="form-control shad">
                        </div>                       
                    </div>
                    <div class="row">
                    <div class="form-group ex">
                        <input type="submit" name="submit" value="Update" class="btn btn-primary">
                        <input type="button" onclick="window.history.go(-1)" value="Back" class="btn btn-info">
                        </div>
                    </div>
                </div>
                <!-- <div class="card-footer text-right pull-left">
                  
                </div> -->
              </form>
              <div class="row">
                <div class="form-group ex ml-4">
                  <input type="hidden" value="<?php echo rand(1111,9999);?>" id="getpass1">
                <input type="button" name="remember" value="Generate Password" class="btn btn-info btn-sm" tabindex="3" id="getpass">
                </div>
              
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
</div>
