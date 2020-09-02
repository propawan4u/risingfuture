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
      background-color: #274f8a;
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

    /* input {
      width: 25px;
      height: 10px;
    } */
  </style>
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-md-2"></div>
          <div class="col-8 col-md-8 col-sm-8">

            <div class="card card-primary card-bg">
              <!-- <div class="card-header float-right">
                <h3 class="text-light">Admin Login</h3>
              </div> -->
              <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>check-login" class="needs-validation" novalidate="">
                  <div class="row">
                    <div class="col-md-3"></div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <div>
                          <h4 class="text-light">The entrance to the office</h4>
                        </div>
                        <div>
                          <small class="text-light">For access to all the functions of your personal account, use Login</small>
                        </div>
                      </div>

                      <div class="form-group">
                        <label for="email" class="text-light">Enter Account ID</label>
                        <input id="email" type="text" class="form-control text-box" name="email" placeholder="Partner ID" required autofocus>
                        <div class="invalid-feedback">
                          Please fill in your email
                        </div>
                      </div>
                      <div class="form-group">
                        <label for="email" class="text-light">Enter Password</label>
                        <input id="password" type="password" class="form-control text-box" name="password" placeholder="Password" required>
                        <div class="invalid-feedback">
                          please fill in your password
                        </div>
                      </div>
                    </div>
                  </div>
              </div>
              <div class="form-group" align="center">
                <button type="submit" name="submit" class="btn btn-success btn-xl">Authorization</button>
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