<style>
  .status-shad{
    text-shadow: 2px 2px lightgray;
  }
</style>
  <div class="main-content">
    <section class="section">
      <ul class="breadcrumb breadcrumb-style ">
        <li class="breadcrumb-item">
          <h4 class="page-title m-b-0"><i data-feather="users"></i> <?php echo $title; ?></h4>
        </li>
      </ul>
      <div class="section-body">
        <div class="row">
          <div class="col-12">
            <div class="card">
              <?php if ($this->session->flashdata('success')) { ?>
                <div class="alert alert-success" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Successfull !</strong> <?php echo $this->session->flashdata('success'); ?>
                </div>
              <?php } else if ($this->session->flashdata('error')) {  ?>
                <div class="alert alert-danger" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Error !</strong> <?php echo $this->session->flashdata('error'); ?>
                </div>

              <?php } else if ($this->session->flashdata('warning')) {  ?>
                <div class="alert alert-warning" role="alert">
                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                  </button>
                  <strong>Warning !</strong> <?php echo $this->session->flashdata('warning'); ?>
                </div>
              <?php } ?>
              <div class="card-header">
                <!-- <a href="<?php //echo base_url() 
                              ?>user-add" class = "btn btn-primary">+ Add</a> -->
              </div>
              <div class="card-body">
                <div class="table-responsive">
                  <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Profile / <br>UserName</th>
                        <th>Sr.No.</th>
                        <th>Request Amount</th>
                        <th>E-mail</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Reaquest Date</th>
                        <th>Approved Date</th>
                        <!-- <th>Parent Name</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count = 1;
                      foreach ($Transaction_details as $show) {
                      ?>
                          <tr>
                            <td>
                              <img src="<?php echo base_url() . 'uploads/' . $show->user_profile; ?>" height="50px" alt="">
                              <br>
                              <p class="text-danger ml-2">Id : <b><?php echo $show->userID; ?></b></p>
                            </td>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $show->request_amt; ?></td>
                            <td><?php echo $show->email; ?></td>
                            <td>
                              <?php echo $show->contact; ?><br>
                            </td>
                            <td>
                              <?php if ($show->req_status == 0) { ?>
                                <p class="text-warning status-shad"><i>Pending</i></p>
                              <?php }elseif ($show->req_status == 1) { ?>
                                <p class="text-success status-shad"><i>Approved</i></p>
                              <?php } elseif($show->req_status == 2) { ?>
                                <p class="text-danger status-shad"><i>Declined</i></p>
                              <?php } ?>
                            </td>
                            <?php $originalDate = $show->created_at;
                            $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                            <td><?php echo $show->created_at; ?></td>

                            <?php $originalDate = $show->updated_at;
                            $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                            <td><?php echo $show->updated_at; ?></td>
                            <td>
                              <?php if ($show->req_status == 0) { ?>
                                <a href="<?php echo base_url() ?>edit-transactions/<?php echo $show->wid; ?>" style = "color:#fff;" class="btn bg-warning">
                                  <i class="fas fa-info"></i>
                                </a>
                              <?php } elseif ($show->req_status == 1) { ?>
                                  <p  class="btn btn-success "><i data-feather="thumbs-up" style = "color:#fff; "></i></p>
                              <?php } elseif($show->req_status == 2) { ?>
                                  <p class = "btn btn-danger"><i class="fas fa-ban" style = "color:#fff;"></i></p>
                              <?php } ?>
                            </td>
                          </tr>
                      <?php
                      }
                      ?>
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>