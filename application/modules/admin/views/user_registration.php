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

    .shadd {
        text-shadow: 2px 5px lightgray;
    }

    .hr-new {
        border-top: 4px solid skyblue;
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
                        <form method="POST" action="<?php echo base_url(); ?>user-add" enctype="multipart/form-data">
                            <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <h3 class="shadd">Genral Details</h3>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="form-group ex">
                                        <label><b>Name</b></label>
                                        <input type="text" class="form-control shad" name="user_name" placeholder="Enter Name" value="<?php echo set_value('user_name'); ?>">
                                        <?php if (form_error('user_name')) {
                                            echo "<span style = 'color:red;'>" . form_error('user_name') . "</span>";
                                        }
                                        ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Email</b></label>
                                        <input type="email" class="form-control shad" name="user_email" placeholder="Enter User E-mail" value="<?php echo set_value('user_email'); ?>">
                                        <?php if (form_error('user_email')) {
                                            echo "<span style = 'color:red'>" . form_error('user_email') . "</span>";
                                        } ?>
                                    </div>

                                    <div class="form-group ex">
                                        <label><b>Contact</b></label>
                                        <input type="phone" name="user_contact" value="<?php echo set_value('user_contact'); ?>" placeholder="Enter Contact Number" class="form-control shad">
                                        <?php if (form_error('user_contact')) {
                                            echo "<span style = 'color:red'>" . form_error('user_contact') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Alt Contact</b></label>
                                        <input type="phone" name="user_alt_contact" value="<?php echo set_value('user_alt_contact'); ?>" placeholder="Enter Alt Contact" class="form-control shad">
                                        <?php if (form_error('user_alt_contact')) {
                                            echo "<span style = 'color:red'>" . form_error('user_alt_contact') . "</span>";
                                        } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group ex">
                                        <label><b>Address</b></label>
                                        <input type="text" name="user_address" value="<?php echo set_value('user_address'); ?>" placeholder="Enter User Contact Number" class="form-control shad">
                                        <?php if (form_error('user_address')) {
                                            echo "<span style = 'color:red'>" . form_error('user_address') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>BTC Address</b></label>
                                        <input type="text" name="btc_address" value="<?php echo set_value('btc_address'); ?>" placeholder="Enter BTC Address" class="form-control shad">
                                        <?php if (form_error('btc_address')) {
                                            echo "<span style = 'color:red'>" . form_error('btc_address') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Parent Id</b></label>
                                        <input type="text" name="parent_id" value="<?php echo set_value('parent_id'); ?>" id="parent_id" placeholder="Enter Parent Id" class="form-control shad">
                                        <?php if (form_error('parent_id')) {
                                            echo "<span style = 'color:red'>" . form_error('parent_id') . "</span>";
                                        } ?>
                                        <span style="color:red;display:none;" id="error"><i>Id not Matched</i></span>
                                        <span style="color: green;display:none;" id="success"><i> Id Matched</i></span>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Parent Name</b></label>
                                        <input readonly="" name="parent_name" id="parent_name" value="<?php echo set_value('parent_name'); ?>" placeholder="Please Enter Parent Id" class="form-control shad">
                                        <?php if (form_error('parent_name')) {
                                            echo "<span style = 'color:red'>" . form_error('parent_name') . "</span>";
                                        } ?>
                                        <span style="color: green;display:none;" id="namesuccess"><i>Name Found</i></span>
                                        <span style="color: red;display:none;" id="nameerror"><i>Name Not Found</i></span>
                                    </div>

                                </div>
                                <div class="row">
                                    <div class="form-group ex">
                                        <label for=""><b>Add Slot</b></label>
                                        <select name="add_slots" id="" class="form-control" required>
                                            <option value="">Select Slots</option>
                                            <?php
                                            foreach ($getSlot as $slot) {
                                            ?>
                                                <option value="<?php echo $slot['id'] ?>"><?php echo $slot['slot_value']; ?>
                                                </option>
                                            <?php
                                            }
                                            ?>
                                        </select>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Profile</b></label>
                                        <input type="file" name="userfile" required class="form-control shad">
                                    </div>
                                </div>
                                <hr class="hr-new">
                                <div class="row">
                                    <div class="col-md-4"></div>
                                    <h3 class="shadd">Bank Details</h3>
                                    <div class="col-md-3"></div>
                                    <div class="col-md-3"></div>
                                    <div class="form-group ex">
                                        <label><b>Bank Name</b></label>
                                        <input type="text" name="bank_name" value="<?php echo set_value('bank_name'); ?>" placeholder="Enter User Bank Name" class="form-control shad">
                                        <?php if (form_error('bank_name')) {
                                            echo "<span style = 'color:red'>" . form_error('bank_name') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Account Holder Name</b></label>
                                        <input type="text" name="account_holder_name" value="<?php echo set_value('account_holder_name'); ?>" placeholder="Enter Account Holder Name" class="form-control shad">
                                        <?php if (form_error('account_holder_name')) {
                                            echo "<span style = 'color:red'>" . form_error('account_holder_name') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>Account Number</b></label>
                                        <input type="number" name="account_no" value="<?php echo set_value('account_no'); ?>" placeholder="Enter Account Number" class="form-control shad">
                                        <?php if (form_error('account_no')) {
                                            echo "<span style = 'color:red'>" . form_error('account_no') . "</span>";
                                        } ?>
                                    </div>
                                    <div class="form-group ex">
                                        <label><b>IFSC Code</b></label>
                                        <input type="text" name="ifsc_code" value="<?php echo set_value('ifsc_code'); ?>" placeholder="Enter IFSC Code" class="form-control shad">
                                        <?php if (form_error('ifsc_code')) {
                                            echo "<span style = 'color:red'>" . form_error('ifsc_code') . "</span>";
                                        } ?>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group ex">
                                        <input type="submit" name="submit" value="Registar" class="btn btn-primary">
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