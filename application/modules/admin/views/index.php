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
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section">
      <div class="container mt-5">
        <div class="row">
          <div class="col-12 col-sm-8 offset-sm-2 col-md-6 offset-md-3 col-lg-6 offset-lg-3 col-xl-4 offset-xl-4">
            <div class="card card-primary">
              <div class="card-header">
                <h4>Admin Login</h4>
              </div>
              <div class="card-body">
                <form method="POST" action="<?php echo base_url() ?>check-login" class="needs-validation" novalidate="">
                  <div class="form-group">
                    <label for="email">Email</label>
                    <input id="email" type="email" class="form-control" name="email" required autofocus>
                    <div class="invalid-feedback">
                      Please fill in your email
                    </div>
                  </div>
                  <div class="form-group">
                    <div class="d-block">
                      <label for="password" class="control-label">Password</label>
                      <div class="float-right">
                        <a href="#" class="text-small">
                          Forgot Password?
                        </a>
                      </div>
                    </div>
                    <input id="password" type="password" class="form-control" name="password" required>
                    <div class="invalid-feedback">
                      please fill in your password
                    </div>
                  </div>
              </div>
              <div class="form-group" align="center">
                <input type="submit" name="submit" value="Login" class="btn btn-primary btn-lg">
              </div>
              </form>
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