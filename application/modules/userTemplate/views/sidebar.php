<section>
  <!-- <div class=""> -->
  <div class="container-fluid">
    <div class="row px-md-3 mx-auto">
      <!-- Main section -->
      <div class="col-md-3 border border-warning mt-1 rounded-lg text-light px-md-3 mx-auto">
        <div class="row">
          <!-- <img src="<?php echo base_url('assets/uploads/rising-future.png'); ?>" class="fa-spin" alt="rising-future.png" width="100"> -->
          <ul class="ml-auto mx-auto">
            <li class="id-size">User ID :- <?php echo $LogValue->userID; ?></li>
            <li class="font-weight-bold text-white">Balance :- <?php echo $LogValue->balance ?>/-</li>
          </ul>
        </div>
        <div class="row">
          <ul class="mt-1 rounded-lg text-light mx-auto">
            <li><a href="<?php echo base_url('user-x3'); ?>"><img src="<?php echo base_url('assets/uploads/x3.png'); ?>" class="img-fluid" alt="x3.png" width="280"></a></li>
          </ul>
        </div>
        <div class="row">
          <ul class="mt-1 rounded-lg text-light mx-auto">
            <li>
              <a href="<?php echo base_url('user-x4'); ?>">
                <img src="<?php echo base_url('assets/uploads/x4.png'); ?>" class="img-fluid" alt="x3.png" width="280"></li>
            </a>
          </ul>
        </div>
        <div class="row">
          <ul class="mt-1 rounded-lg text-light mx-auto">
            <li>
              <img src="<?php echo base_url('assets/uploads/radium.png'); ?>" class="img-fluid" alt="x3.png" width="280"></li>
            <span class="btn btn-primary text-light font-weight-bold rounded-pill mt-2 float-right mr-2">Points :- <?php echo $LogValue->points ?>/-</span>
          </ul>
        </div>
        <!-- <div class="row">
          <ul class="border border-warning mt-1 rounded-lg text-light mx-auto">
            <li><img src="<?php echo base_url('assets/uploads/x3.png'); ?>" class="img-fluid" alt="x3.png" width="260"></li>
          </ul>
        </div>
        <div class="row">
          <ul class="border border-warning mt-1 rounded-lg text-light mx-auto">
            <li><img src="<?php echo base_url('assets/uploads/x3.png'); ?>" class="img-fluid" alt="x3.png" width="260"></li>
          </ul>
        </div> -->
      </div>