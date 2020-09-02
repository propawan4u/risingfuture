<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Rising Future | Admin LogIn</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bundles/bootstrap-social/bootstrap-social.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url() ?>assets/img/favicon.ico' />
  <style>
    body {
      margin: 0px;
      padding: 0px;
      background: linear-gradient(0deg, rgba(255, 255, 255, 1) 0%, rgba(242, 176, 247, 1) 100%);
      height: 100%;
      line-height: 2.85;
    }

    .card-bg {
      background-color: #274f8a;
    }

    .text-box {
      background-color: #00000033;
    }

    hr {
      width: 90%;
      background-color: lightseagreen;
    }

    .card {
      background: linear-gradient(0deg, rgba(142, 127, 255, 0.8155637254901961) 0%, rgba(243, 102, 255, 0.8071603641456583) 100%);
    }

    .text-dark1 {
      color: #373739;
    }

    .text-dark2 {
      color: #6d6e73;
    }
  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-4">
            <img src="<?php echo base_url(); ?>assets/uploads/rising-future.png" alt="rising-future.png" width="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 offset-md-2">
            <div class="card card-primary card-bg">
              <!-- <div class="card-header float-right mx-auto">
                
              </div> -->
              <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>user-auth" class="needs-validation" novalidate="">
                  <div class="row">
                    <div class="col-md-2"></div>
                    <div class="col-md-8">
                      <div class="form-group">
                        <div>
                          <h4 class="text-dark1">The Entrance to the Office</h4>
                        </div>
                        <div>
                          <small class="text-light">For access to all the functions of your personal account, use Login</small>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="userID" class="text-light">Enter Account ID</label>
                        <input id="userID" type="text" class="form-control text-box" value="<?php echo set_value('userID'); ?>" name="userID" placeholder="Partner ID" autofocus>
                        <span class="text-danger"><?php echo form_error("userID"); ?></span>
                        <div class="invalid-feedback">
                          Please fill in your email
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="password" class="text-light">Enter Password</label>
                        <input id="password" type="password" class="form-control text-box" name="password" placeholder="Password">
                        <span class="text-danger"><?php echo form_error("password"); ?></span>
                        <div class="invalid-feedback">
                          please fill in your password
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="form-group" align="center">
                <button type="submit" name="submit" class="btn btn-success btn-lg rounded-pill">Authorization</button>
              </div>

              </form>
              <div class="form-group">
                <div class="d-block" align="center">
                  <hr>
                  <span class="text-light">Forgot Password?</span><a href="#" class="text-light"> Click</a>
                  <hr>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
  </div>
  </section>
  </div>
  <!-- General JS Scripts -->
  <script src="<?php echo base_url() ?>assets/js/app.min.js"></script>
  <!-- JS Libraies -->
  <!-- Page Specific JS File -->
  <!-- Template JS File -->
  <script src="<?php echo base_url() ?>assets/js/scripts.js"></script>
  <!-- Custom JS File -->
  <script src="<?php echo base_url() ?>assets/js/custom.js"></script>
</body>

</html>