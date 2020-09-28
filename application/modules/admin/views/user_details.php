<style>

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
                        <th>UserID</th>
                        <th>Sr.No.</th>
                        <th>E-mail</th>
                        <th>Contact</th>
                        <th>Status</th>
                        <th>Password</th>
                        <th>Wallet Status</th>
                        <th>Join Date</th>
                        <!-- <th>Parent Name</th> -->
                        <th>Action</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count = 1;
                      foreach ($user_get as $show) {
                        if ($show->role == 2 && $show->is_delete == 0) {
                      ?>
                          <tr>
                            <td>
                              <img src="<?php echo base_url() . 'uploads/' . $show->user_profile; ?>" height="50px" alt="">
                              <br>
                              <p class="text-danger ml-2">Id : <b><?php echo $show->userID; ?></b></p>
                            </td>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $show->email; ?></td>
                            <td>
                              <?php echo $show->contact; ?><br>
                            </td>
                            <td>
                              <?php if ($show->status == 1) { ?>
                                <p class="text-success status-shad">Acitve</p>
                              <?php } else { ?>
                                <p class="text-danger status-shad">Dacitve</p>
                              <?php } ?>
                            </td>
                            <td><?php echo $show->show_pass; ?></td>
                            <td><?php echo $show->wallet; ?></td>
                            <?php $originalDate = $show->join_at;
                            $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                            <td><?php echo $newDate; ?></td>
                            <!-- <td></td> -->
                            <td>
                              <a href="<?php echo base_url() ?>edit-password/<?php echo $show->uid; ?>" class="btn bg-info btn-sm">
                                <i class="fa fa-key text-primary"></i>
                              </a>
                              <a href="<?php echo base_url() ?>show-childs-dettails/<?php echo $show->userID; ?>" class="btn bg-info btn-sm">
                                <i class="fa fa-eye "></i>
                              </a>
                              <a href="<?php echo base_url() ?>edit-user/<?php echo $show->uid ?>" class="btn bg-info btn-sm">
                                <i class="fa fa-edit" style="padding-left: 5px; color:blue;"></i>
                              </a>
                              <a href="<?php echo base_url() ?>delete-user/<?php echo $show->uid ?>/1" class="btn bg-info btn-sm">
                                <i style="color: red;margin-left:5px;" class="fa fa-trash" style="margin-left: 9px;"></i>
                              </a>
                              <!-- <a href="<?php echo base_url() ?>user-form/<?php echo $show->uid ?>" class="btn bg-info btn-sm"> -->
                              <!-- <i class="fa fa-plus"></i> -->
                              <!-- </a> -->
                            </td>
                          </tr>
                      <?php
                        }
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