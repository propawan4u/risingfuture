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
        text-align: center;
        margin-left: -40px;
    }

    .hr-new {
        border-top: 4px solid skyblue;
    }
    .ad-img{
        border-radius:100px;
        width:80px;
        height:80px;
        box-shadow:0px 0px 3px 3px gray;
    }
    /* .text-h3-shadd{
        text-shadow:0px 0px 5px 5px gray;
    } */
    .btn-primary{
        margin-bottom:15px;
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
                <div class="col-12 col-md-6 col-lg-6">
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
                        <img src="<?php echo base_url($getAdmin['user_profile']) ?>" class = "ad-img ml-3" alt="">
                        <h5 class = "ml-5 text-h3-shadd"><?php echo $getAdmin['name'] ?></h5>
                <form method="POST" action="<?php echo base_url(); ?>up-admin" enctype="multipart/form-data">
                <input type="hidden" name = "Id" value = "<?php echo $getAdmin['uid']; ?>">
                  <div class="card-body">
                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Name</label>
                        <input type="text" class="form-control" id="name" value = "<?php echo $getAdmin['name']; ?>" placeholder="Name" name = "name">
                        <?php if (form_error('name')) {
                            echo "<span style = 'color:red'>" . form_error('name') . "</span>";
                        } ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputEmail4">Email</label>
                        <input type="email" class="form-control" id="inputEmail4" name = "email" placeholder="Email"  value = "<?php echo $getAdmin['email'] ?>">
                        <?php if (form_error('email')) {
                            echo "<span style = 'color:red'>" . form_error('email') . "</span>";
                        } ?>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Password</label>
                        <input type="password" class="form-control" id="inputPassword4" name = "password" placeholder="Password"  value = "<?php echo $getAdmin['password'] ?>">
                        <?php if (form_error('password')) {
                            echo "<span style = 'color:red'>" . form_error('password') . "</span>";
                        } ?>
                      </div>
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Contact</label>
                        <input type="phone" class="form-control" id="inputPassword4" name = "contact" placeholder="Contact" value = "<?php echo $getAdmin['contact'] ?>">
                        <?php if (form_error('contact')) {
                            echo "<span style = 'color:red'>" . form_error('contact') . "</span>";
                        } ?>
                      </div>
                    </div>

                    <div class="form-row">
                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Wallet Balance</label>
                        <input type="number" class="form-control" id="inputPassword4" name = "wallet" placeholder="Address" value = "<?php echo $getAdmin['wallet'] ?>">
                        <?php if (form_error('wallet')) {
                            echo "<span style = 'color:red'>" . form_error('wallet') . "</span>";
                        } ?>
                      </div>

                      <div class="form-group col-md-6">
                        <label for="inputPassword4">Profile</label>
                        <input type="file" class="form-control" id="inputPassword4" name = "userfile" placeholder=""  value = "<?php echo set_value('userfile'); ?>">
                        <?php if (form_error('alt_contact')) {
                            echo "<span style = 'color:red'>" . form_error('alt_contact') . "</span>";
                        } ?>
                      </div>
                    </div>

                    <div class="form-row">
                      
                    </div>
                    
                  <div class="card-footer">
                    <input type="submit" name = "submit" class="btn btn-primary float-right" value = "Update">
                  </div>
                </div>
            </div>
        </div>

        
    </div>
    
</div>

</section>
</div>
