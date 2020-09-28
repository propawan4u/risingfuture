<style>
  .shaadd{
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
                        <th>Sr.No.</th>
                        <th>Slot Name</th>
                        <th>Slot Value</th>
                        <th>Status</th>
                        <th>Creation Date</th>
                        <th>Action</th>
                    </tr>
                  </thead>
                  <tbody>
                    <?php
                        $count = 1;
                        foreach($get_slot as $show)
                        {
                    ?>
                        <tr>
                            <td><?php echo $count++; ?></td>
                            <td><?php echo $show->slot_name; ?></td>
                            <td><?php echo $show->slot_value; ?></td>
                            <td>
                            <?php if ($show->status == 1) { ?>
                              <p class="text-success shaadd">Acitve</p>
                            <?php } else { ?>
                              <p class="text-danger shaadd">Dacitve</p>
                            <?php } ?>
                            </td>
                            <?php $originalDate = $show->created_at;
                            $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                            <td><?php echo $newDate; ?></td>
                            <td>
                                <a href="<?php echo base_url() ?>edit-slots/<?php echo $show->sid ?>" style="margin-left: 5px;"><i class="fa fa-eye"></i></a>
                                <a href="<?php echo base_url() ?>delete-slots/<?php echo $show->sid ?>" style="margin-left: 5px;"><i class="fa fa-trash"></i></a>
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
