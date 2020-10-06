<div class="col-md-9 border border-warning mt-1 rounded-lg text-light px-md-3">
    <div class="row">
        <h3 class="head ml-3">Buy Wallet</h3>
        <pre class="text-light">
          </pre>
    </div>
    <div class="row">
        <div class="border-gradient">
            <div class="border-gradient_content">

                <div class="row ml-3">
                    <div class="col-md-8">
                        <div class="bg-black_transparent  ml-3">
                            <h5><u>IMPS, NEFT, RTGS, Cash Deposit</u></h5>
                            Bank Name : <b>ICICI Bank</b>
                            <br />Bank IFSC : <b>ICIC0007450</b>
                            <br />Account Name : <b>RISINGFUTURE</b>
                            <br />Account Number : <b>745005000140
                                <!--673205500306--></b>
                        </div>
                        <div class="bg-black_transparent" style="display: none;">
                            <p><b>Note: </b>For get auto credit throught paying Bit Coins (BTC) use <a href="BuyBalanceBTC.aspx" class="btn btn-primary">BTC PAY NOW</a></p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="bg-black_transparent text-center">
                            <h5><u>Scan UPI QR</u></h5>
                            <img src="<?php echo base_url() ?>assets/img/AccountQrCode/qrcode.jpeg" alt="UPI" style="max-width:100%;width:200px;" />
                        </div>
                    </div>
                </div>
                <br />
                <div class="bg-black_transparent  ml-3">
                    <form action="<?php echo base_url() ?>add-topup" class="form-panel" method="POST" enctype="multipart/form-data">
                        <div class="row">

                            <div class="col-md-2 form-group">
                                <label>Payment Mode</label>
                                <select name="topup_type" class="form-control">
                                    <option value="0">Cash</option>
                                    <option value="1">IMPS</option>
                                    <option value="2">NEFT</option>
                                    <option value="3">RTGS</option>
                                    <option value="4">UPI</option>

                                </select>
                                <span class="text-danger"><?php echo form_error('topup_type'); ?></span>
                            </div>
                            <div class="col-md-4 form-group">
                                <label>Payment UTR *</span></label>
                                <input name="payment_utr" type="text" class="form-control" placeholder="Enter UTR" />
                                <span class="text-danger"><?php echo form_error('payment_utr'); ?></span>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Amount *</label>
                                <input name="request_amount" type="number" class="form-control" placeholder="Enter Amount" />
                                <span class="text-danger"><?php echo form_error('request_amount'); ?></span>
                            </div>
                            <div class="col-md-3 form-group">
                                <label>Upload Receipt *</label>
                                <input type="file" title="Plese Put SnapShot" name="userfile" style="max-width:100%" />
                                <span class="text-danger"><?php echo form_error('userfile'); ?></span>
                            </div>
                                <input type="submit" name="submit" <?php if(!empty($getRequest)){  if ($getRequest[0]->wallet_status == 0) { echo "disabled title = 'You can not Make any Request untill your Previuos Request Approved or Declined'"; } } ?> value="Submit" class="btn btn-success mr-3 ml-5" />
                                <input type="reset" name="reset" value="Cancle" class="btn btn-info" />
                           
                        </div>
                    </form>
                    <p><b>Note: </b>Company may block account in case of providing worng information about payment!</p>
                </div>
                <div class="table-responsive">
                    <div class="card-body">
                        <div class="table-responsive">
                            <table class="table table-striped table-bordered dt-responsive nowrap text-light table-background-light" id="save-stage" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th>Sr.No.</th>
                                        <th>Payment UTR</th>
                                        <th>Payment Type</th>
                                        <th>Request Amount</th>
                                        <th>Status</th>
                                        <th>Approval Date</th>
                                    </tr>
                                    <?php $count = 1;
                                    //if(!empty($getRequest)){
                                    foreach ($getRequest as $show) {
                                        // print_r($getRequest);
                                    ?>
                                        <tr>
                                            <td><?php echo $count++; ?></td>
                                            <td><?php echo $show->payment_utr; ?></td>
                                            <td>
                                                <?php if ($show->amount_type == 0) { ?>
                                                    <p>Cash</p>
                                                <?php } elseif ($show->amount_type == 1) { ?>
                                                    <p>IMPS</p>
                                                <?php } elseif ($show->amount_type == 2) { ?>
                                                    <p>NEFT</p>
                                                <?php } elseif ($show->amount_type == 3) { ?>
                                                    <p>RTGS</p>
                                                <?php } elseif ($show->amount_type == 4) { ?>
                                                    <p>UPI</p>
                                                <?php } else { ?>
                                                    <p>You're Request Could Not Processed Successfully !!</p>
                                                <?php } ?>

                                            </td>
                                            <td><?php echo $show->wallet_amt; ?></td>
                                            <td>
                                                <?php if ($show->wallet_status == 0) { ?>
                                                    <p class="text-warning status-shad">Pending</p>
                                                <?php } elseif ($show->wallet_status == 1) { ?>
                                                    <p class="text-success status-shad">Approved</p>
                                                <?php } elseif ($show->wallet_status == 2) { ?>
                                                    <p class="text-danger status-shad">Declined</p>
                                                <?php } else { ?>

                                                <?php } ?>
                                            </td>
                                            <td><?php echo $show->approved_date; ?></td>
                                        </tr>
                                    <?php } //}?>
                        </div>
                    </div>
                </div>
            </div>
        </div>