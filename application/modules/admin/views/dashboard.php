<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <ul class="breadcrumb breadcrumb-style ">
      <li class="breadcrumb-item">
        <h4 class="page-title m-b-0"><i data-feather="home"></i> <?php echo $title; ?></h4>
        <?php print_r($this->session->userdata('user_logged_in')); ?>
      </li>
    </ul>
    <div class="row ">
      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-style1">
          <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
            <div class="card-content">
              <h4 class="card-title">New Orders</h4>
              <span>524</span>
              <div class="progress mt-1 mb-1" data-height="8">
                <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mb-0 text-sm">
                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-style2">
          <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-briefcase"></i></div>
            <div class="card-content">
              <h4 class="card-title">New Booking</h4>
              <span>1,258</span>
              <div class="progress mt-1 mb-1" data-height="8">
                <div class="progress-bar l-bg-orange" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mb-0 text-sm">
                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-style3">
          <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-globe"></i></div>
            <div class="card-content">
              <h4 class="card-title">Inquiry</h4>
              <span>10,225</span>
              <div class="progress mt-1 mb-1" data-height="8">
                <div class="progress-bar l-bg-cyan" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mb-0 text-sm">
                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-style4">
          <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-money-bill-alt"></i></div>
            <div class="card-content">
              <h4 class="card-title">Earning</h4>
              <span>$2,658</span>
              <div class="progress mt-1 mb-1" data-height="8">
                <div class="progress-bar l-bg-green" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div>
              </div>
              <p class="mb-0 text-sm">
                <span class="mr-2"><i class="fa fa-arrow-up"></i> 10%</span>
                <span class="text-nowrap">Since last month</span>
              </p>
            </div>
          </div>
        </div>
      </div>
    </div>
</div>
</div>
</div>