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
              <h4 class="page-title m-b-0"><i data-feather="user"></i> <?php echo $title; ?></h4>
            </li>
          </ul>
          <div class="section-body">
            <div class="row">
              <div class="col-12 col-md-6 col-lg-6">
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
                <form method="POST" action="<?php echo base_url(); ?>update-slot">
                <input type="hidden" name="id" value="<?php echo $fetch[0]['sid']; ?>">
                    <div class="card-body">
                    <div class="form-group ex">
                            <label><b>Slot Name</b></label>
                            <input type="text" class="form-control shad" name="slot_name" placeholder="Enter Slot Name"  value="<?php echo $fetch[0]['slot_name']; ?>">
                        </div>
                        <div class="form-group ex">
                            <label><b>Slot Value</b></label>
                            <input type="number" class="form-control shad" name="slot_value" placeholder="Enter Slot Value"  value="<?php echo $fetch[0]['slot_value']; ?>">
                        </div>
                        <div class="form-group ex">
                            <label for="">User Status</label>
                            <select name="status" id="" class="form-control">
                                <option value="">Select Status</option>
                                <option value="1" <?php if($fetch[0]['status'] ==1){ echo "selected";}else{ echo "";} ?>>Activate</option>
                                <option value="0" <?php if($fetch[0]['status'] ==0){ echo "selected";}else{ echo "";} ?>>Dacitvate</option>
                            </select>
                        </div>
                    </div>
                    <div class="card-footer text-right">
                    <div class="form-group ex">
                        <input type="submit" name="submit" value="Update" class="btn btn-primary">
                        <input type="button" onclick="window.history.go(-1)" value="Back" class="btn btn-info">
                        </div>
                    </div>
                  </form>
                </div>
              </div>
            </div>
          </div>
        </section>
</div>