<style>
  .status-shad{
    text-shadow: 2px 2px lightgray;
  }
  .h3-debit{
    text-align:center;
    padding:10px;
  }
  .h3-credit{
    text-align:center;
    padding:10px;
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
                        <th>Debitor</th>
                        <th>Creditor</th>
                        <!-- <th>E-mail / <br> Contact</th> -->
                        <th>Transaction Date</th>
                      </tr>
                    </thead>
                    <tbody>
                      <?php
                      $count = 1;
                     foreach ($debit as $show) {
                       // if ($show->role == 2) {
                            // print_r($debit);
                      ?>
                          <tr>
                            <td><?php echo $count++; ?></td>
                            <td><b><?php echo  $show->debit; ?> </b></td>
                            <td><b><?php echo  $show->credit; ?> </b></td>
                            <!-- <td> -->
                                <?php //echo  $show->email; ?>
                              <?php //echo $show->contact; ?>
                            <!-- </td> -->
                            <?php $originalDate = $show->created_at;
                            $newDate = date("d-m-Y", strtotime($originalDate)); ?>
                            <td><?php echo $newDate; ?></td>
                            <!-- <td></td> -->
                          </tr>
                      <?php
                       }
                     // }
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