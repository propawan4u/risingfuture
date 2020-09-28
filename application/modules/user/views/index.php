<!DOCTYPE html>
<html>

<head>
  <meta charset="UTF-8">
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no" name="viewport">
  <title>Rising Future | Partner LogIn</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/app.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/bundles/bootstrap-social/bootstrap-social.css">

  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/sweetalert2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/animate.min.css">
  <!-- Template CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>build/css/custom.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/components.css">
  <!-- Custom style CSS -->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/custom.css">
  <link rel='shortcut icon' type='image/x-icon' href='<?php echo base_url() ?>assets/img/favicon.ico' />
</head>

<body>
  <div class="loader"></div>
  <div id="app">
    <section class="section align-middle">
      <div class="container mt-5 align-middle">
        <div class="row align-middle">
          <div class="col-md-4 align-middle">
            <img src="<?php echo base_url(); ?>assets/uploads/rising-future.png" alt="rising-future.png" width="">
          </div>
          <div class="col-lg-6 col-md-6 col-sm-6 offset-md-2 align-middle">
            <div class="card card-primary card-bg">
              <!-- <div class="card-header float-right mx-auto"></div> -->
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
  <script src="<?php echo base_url(); ?>sweetalert2/js/toastr.min.js"></script>
  <script src="<?php echo base_url(); ?>sweetalert2/js/sweetalert2.min.js"></script>
  <script>
    // ---Function for getting Tree by ID----
    $(document).ready(function() {
      $("#getCycleID").change(function() {
        var x3id = $("#getCycleID").val();
        // alert(sid);
        $.ajax({
          url: "<?php echo base_url(); ?>show-tree",
          method: "POST",
          data: {
            x3id: x3id,
          },
          success: function(result) {
            $("#showTree").html(result);
            // alert(result);
          }
        });

      });

      // ----------------Sweetalert2-----------------

      $(function() {
        const Toast = Swal.mixin({
          toast: true,
          position: 'top-end',
          showConfirmButton: false,
          timer: 3000
        });

        <?php if ($this->session->flashdata('success')) { ?>
          Toast.fire({
            icon: 'success',
            title: '<?php echo $this->session->flashdata('success'); ?>'
          });
        <?php } else if ($this->session->flashdata('error')) {  ?>
          Toast.fire({
            icon: 'error',
            title: '<?php echo $this->session->flashdata('error'); ?>'
          });
        <?php } else if ($this->session->flashdata('warning')) {  ?>
          Toast.fire({
            icon: 'warning',
            title: '<?php echo $this->session->flashdata('warning'); ?>'
          });
        <?php } else if ($this->session->flashdata('info')) {  ?>
          Toast.fire({
            icon: 'info',
            title: '<?php echo $this->session->flashdata('info'); ?>'
          });
        <?php } ?>

        $('.swalDefaultSuccess').click(function() {
          Toast.fire({
            icon: 'success',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultInfo').click(function() {
          Toast.fire({
            icon: 'info',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultError').click(function() {
          Toast.fire({
            icon: 'error',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultWarning').click(function() {
          Toast.fire({
            icon: 'warning',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.swalDefaultQuestion').click(function() {
          Toast.fire({
            icon: 'question',
            title: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });

        $('.toastrDefaultSuccess').click(function() {
          toastr.success('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultInfo').click(function() {
          toastr.info('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultError').click(function() {
          toastr.error('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });
        $('.toastrDefaultWarning').click(function() {
          toastr.warning('Lorem ipsum dolor sit amet, consetetur sadipscing elitr.')
        });

        $('.toastsDefaultDefault').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultTopLeft').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'topLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultBottomRight').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomRight',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultBottomLeft').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            position: 'bottomLeft',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultAutohide').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            autohide: true,
            delay: 750,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultNotFixed').click(function() {
          $(document).Toasts('create', {
            title: 'Toast Title',
            fixed: false,
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultFull').click(function() {
          $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            icon: 'fas fa-envelope fa-lg',
          })
        });
        $('.toastsDefaultFullImage').click(function() {
          $(document).Toasts('create', {
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            image: '<?php echo base_url(); ?>dist/img/user3-128x128.jpg',
            imageAlt: 'User Picture',
          })
        });
        $('.toastsDefaultSuccess').click(function() {
          $(document).Toasts('create', {
            class: 'bg-success',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultInfo').click(function() {
          $(document).Toasts('create', {
            class: 'bg-info',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultWarning').click(function() {
          $(document).Toasts('create', {
            class: 'bg-warning',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultDanger').click(function() {
          $(document).Toasts('create', {
            class: 'bg-danger',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
        $('.toastsDefaultMaroon').click(function() {
          $(document).Toasts('create', {
            class: 'bg-maroon',
            title: 'Toast Title',
            subtitle: 'Subtitle',
            body: 'Lorem ipsum dolor sit amet, consetetur sadipscing elitr.'
          })
        });
      });

    });
  </script>
</body>

</html>