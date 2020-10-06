<!-- Main Content -->
<div class="main-content">
  <section class="section">
    <ul class="breadcrumb breadcrumb-style ">
      <li class="breadcrumb-item">
        <h4 class="page-title m-b-0"><i data-feather="home"></i> <?php echo $title; ?></h4>
        <?php //print_r($this->session->userdata('user_logged_in')); 
        ?>
      </li>
    </ul>
    <div class="row ">
      <div class="col-xl-3 col-lg-6">
        <div class="card l-bg-style1">
          <div class="card-statistic-3">
            <div class="card-icon card-icon-large"><i class="fa fa-award"></i></div>
            <div class="card-content">
              <h4 class="card-title">All Users</h4>
              <!-- <span>524</span> -->
              <div class="progress mt-1 mb-1" data-height="8">
                <!-- <div class="progress-bar l-bg-purple" role="progressbar" data-width="25%" aria-valuenow="25" aria-valuemin="0" aria-valuemax="100"></div> -->
              </div>
              <p class="mb-0 text-sm">
                <span class="mr-2">
                  <p> <a href="<?php echo base_url() ?>user-details" class="text-white"> All Users :- <?php echo  $CountAll;  ?> <i class="fa fa-arrow-up"></i></a></p>
                </span>
                <!-- <span class="text-nowrap">Since last month</span> -->
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
    <br><br>
    <h3 align="center" style="text-shadow:5px 5px 5px 5px gray;">Ntofication's</h3><br><br>
    <div class="row">
      <h4>Wallet Request's</h4>
      <br>
      <br>
      <div class="table-responsive">
        <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
          <?php //print_r($wallet_request); 
          ?>
          <thead>
            <tr>
              <th>Document's</th>
              <th>Sr.No.</th>
              <th>User Id</th>
              <th>Payment UTR</th>
              <th>Amount Type</th>
              <th>Requested Amount</th>
              <th>Requested Date</th>
              <th>Approvel Date</th>
              <th>Request Status</th>
              <th>Action</th>
            </tr>
          </thead>
          <tbody>
            <?php
            $count = 1;
            foreach ($wallet_request as $request) {
            ?>
              <tr>
                <td>
                  <a href="javascript:void()" onclick=" window.open('<?php echo base_url() . '/' . $request->snapshot; ?>','_blank', 'location=yes,height=570,width=520,scrollbars=yes,status=yes')">
                    <img src="<?php echo base_url() . '/' . $request->snapshot; ?>" alt="" target="_blank" width=50px; height=50px;>
                  </a>
                </td>
                <td><?php echo $count++ ?></td>
                <td><?php echo $request->rq_userID; ?></td>
                <td><?php echo $request->payment_utr; ?></td>
                <td>
                    <?php if($request->amount_type == 0 ){ ?>
                        <p>Cash</p>
                    <?php } elseif($request->amount_type == 1 ){ ?>
                        <p>IMPS</p>
                    <?php } elseif ($request->amount_type == 2 ){ ?>
                        <p>NEFT</p>
                    <?php } elseif ($request->amount_type == 3 ){ ?>
                        <p>RTGS</p>
                    <?php } elseif ($request->amount_type == 4 ){ ?>
                        <p>UPI</p>
                    <?php } else{ ?>
                        <p>User Not sent Request Successfully !!</p>
                    <?php } ?>
                </td>
                <td><?php echo $request->wallet_amt; ?></td>
                <td><?php echo $request->requested_date; ?></td>
                <td><?php echo $request->approved_date; ?></td>
                <td>
                  <?php if ($request->wallet_status == 0) { ?>
                    <p class="text-warning status-shad"><i>Pending</i></p>
                  <?php } elseif ($request->wallet_status == 1) { ?>
                    <p class="text-success status-shad"><i>Approved</i></p>
                  <?php } elseif ($request->wallet_status == 2) { ?>
                    <p class="text-danger status-shad"><i>Declined</i></p>
                  <?php } else { ?>
                    <p class="text-info status-shad">Request Not Submitted Successfully !!</p>
                  <?php } ?>
                </td>
                <td>
                  <?php if ($request->wallet_status == 0) { ?>
                    <a href="<?php echo base_url() ?>update-request/<?php echo $request->rqid ?>/<?php echo $request->rq_userID; ?>/<?php echo $request->wallet_amt; ?>/1" value=1 class="text-success ml-2" title="Approved Request"><i class="fa fa-check" aria-hidden="true"></i></a>
                    <a href="<?php echo base_url() ?>update-request/<?php echo $request->rqid ?>/<?php echo $request->rq_userID; ?>/<?php echo $request->wallet_amt; ?>/2" value=2 class="text-danger ml-2" title="Declined Request"><i class="fas fa-times"></i></a>
                  <?php } elseif ($request->wallet_status == 1) { ?>
                    <p class=" text-success status-shad "><i class=" fa fa-check mr-1 " aria-hidden="true"></i></p>
                  <?php } elseif ($request->wallet_status == 2) { ?>
                    <p class=" text-danger status-shad "><i class=" fas fa-times mr-1 "></i></p>
                  <?php } else { ?>
                    <p class="text-info status-shad">Request Not Submitted Successfully !!</p>
                  <?php } ?>

                </td>
                <!-- <td><a href="<?php echo base_url() ?>show-request/<?php echo $request->rq_userID; ?>"><i class = "fa fa-wallet"></i></a></td> -->
              </tr>
            <?php
            }
            ?>
          </tbody>
        </table>
      </div>
    </div>

    <br>
    <br>
    <!-- <div class="row">
      <h4></h4>
      <div class="table-responsive">
                  <table class="table table-striped table-hover" id="save-stage" style="width:100%;">
                    <thead>
                      <tr>
                        <th>Sr.No.</th>
                        <th>Debitor</th>
                        <th>Creditor</th>
                         <th>E-mail / <br> Contact</th> -->
    <!-- <th>Transaction Date</th>
                      </tr>
                    </thead>
                    <tbody>
                    </tbody>
</table>
</div>
    </div> -->
</div>
</div>
</div>