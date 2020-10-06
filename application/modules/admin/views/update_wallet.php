<style>
  .ex {
    padding: 15px;
  }

  .card .card-body p {
    font-weight: 500;
    color: red;
  }

  .shad {
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
            <?php //echo print_r($getRequest); 
            ?>
            <form method="POST" action="<?php echo base_url(); ?>#">
              <input type="hidden" name="uid" value="<?php echo $getRequest->rqid; ?>">
              <div class="card-body">
                <div class="row">
                  <div class="form-group ex col-md-4">
                    <label><b>User Id</b></label>
                    <input readonly class="form-control shad" required name="user_id" placeholder=" User Id" value="<?php echo $getRequest->rq_userID; ?>">
                  </div>
                  <div class="form-group ex col-md-4">
                    <label><b>Request Amount</b></label>
                    <input readonly class="form-control shad" required name="amount" placeholder=" Requested Amount" value="<?php echo $getRequest->wallet_amt; ?>">
                  </div>
                </div>
                <div class="row">
                  <div class="form-group ex  col-md-4">
                    <label for=""><b>Request Status</b></label>
                    <select name="request_status" id="" class="form-control">
                      <option value="">Select Status</option>
                       <option value="0" <?php if ($getRequest->wallet_status == 0) {
                                          echo "selected";
                                        } else {
                                          echo "";
                                        } ?>>Pending</option>
                        <option value="1" <?php if ($getRequest->wallet_status == 1) {
                                          echo "selected";
                                        } else {
                                          echo "";
                                        } ?>>Approved</option>
                         <option value="2" <?php if ($getRequest->wallet_status == 2) {
                                          echo "selected";
                                        } else {
                                          echo "";
                                        } ?>>Declined</option>
                     
                    </select>
                  </div>
                  <div class="row">
                    <div class="form-group ex">
                      <input type="submit" name="submit" value="Update Request" class="btn btn-primary">
                      <input type="button" onclick="window.history.go(-1)" value="Back" class="btn btn-info">
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