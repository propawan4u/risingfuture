<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Rising Future</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>build/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>build/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/ionicons.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/toastr.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/sweetalert2.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>sweetalert2/css/animate.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/font-awesome.min.css">
  <!-- Data Tables Started-->
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/bootstrap.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/dataTables.bootstrap4.min.css">
  <link rel="stylesheet" href="<?php echo base_url() ?>assets/css/responsive.bootstrap4.min.css">
  <!-- Data Tables Endded-->
  <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/uploads/apple-icon-57x57.png">
  <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>assets/uploads/apple-icon-60x60.png">
  <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/uploads/apple-icon-72x72.png">
  <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/uploads/apple-icon-76x76.png">
  <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/uploads/apple-icon-114x114.png">
  <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/uploads/apple-icon-120x120.png">
  <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/uploads/apple-icon-144x144.png">
  <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/uploads/apple-icon-152x152.png">
  <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>assets/uploads/apple-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="<?php echo base_url(); ?>assets/uploads/android-icon-192x192.png">
  <link rel="icon" type="image/png" sizes="32x32" href="<?php echo base_url(); ?>assets/uploads/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="96x96" href="<?php echo base_url(); ?>assets/uploads/favicon-96x96.png">
  <link rel="icon" type="image/png" sizes="16x16" href="<?php echo base_url(); ?>assets/uploads/favicon-16x16.png">
  <link rel="manifest" href="<?php echo base_url(); ?>assets/uploads/manifest.json">
  <meta name="msapplication-TileColor" content="#ffffff">
  <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>assets/uploads/ms-icon-144x144.png">
  <meta name="theme-color" content="#ffffff">
  <style>
    .navbar-nav li:hover>ul.dropdown-menu {
      display: block;
    }

    .dropdown-submenu {
      position: relative;
    }

    .dropdown-submenu>.dropdown-menu {
      top: 0;
      left: 100%;
      margin-top: -6px;
    }

    /* rotate caret on hover */
    .dropdown-menu>li>a:hover:after {
      text-decoration: underline;
      transform: rotate(-90deg);
    }

    body {
      height: 100vh;
      background: linear-gradient(90deg, rgba(206, 168, 255, 1) 0%, rgba(119, 15, 255, 1) 35%, rgba(119, 15, 255, 1) 100%);
      /* background: linear-gradient(0deg, rgba(206, 168, 255, 1) 0%, rgba(119, 15, 255, 1) 100%); */
    }

    .nav {
      background-color: #274f8a;
    }

    .navbar-light .navbar-nav .nav-link {
      color: white;
      font-weight: bold;
      font-size: 14px;
    }

    .fa-telegram:before {
      color: aqua;
    }

    .rotate {
      animation: rotation 2s infinite linear;
    }

    ul li {
      list-style-type: none;
    }

    .id-size {
      font-weight: bold;
      font-size: 24px;
    }

    .text-pink {
      color: #fc38ac;
    }

    .member-image img {
      width: 35px;
      height: 35px;
    }

    small {
      font-size: 12px;
    }
    .table-background-light {
      background: black;
      opacity: 0.3;
      font-weight: bold;
    }
  </style>
</head>

<body>
  <section>
    <div class="">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="<?php echo base_url(); ?>">
            <img src="<?php echo base_url('assets/uploads/rising-future.png'); ?>" alt="rising-future.png" width="80">
          </a>
          <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav ml-auto">
              <li class="nav-item active ">
                <a class="nav-link" href="#" title="Email"><i class="fa fa-telegram" aria-hidden="true"></i> <span class="sr-only">(current)</span></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Office </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?php echo base_url('user-dashboard'); ?>"> Main Panel</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('user-profile'); ?>"> Profile</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('security') ?>"> Security</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('direct-partners'); ?>"> Partners</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Wallet </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="<?php echo base_url() ?>by-balance"> Buy Balance</a></li>
                  <li><a class="dropdown-item" href="#"> Top-up</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('transfer'); ?>"> Transfer</a></li>
                  <li><a class="dropdown-item" href="<?php echo base_url('withdrawal'); ?>"> Withdrawal</a></li>
                  <li><a class="dropdown-item" href="#"> Statistics</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Radium Point </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#">Transfer</a></li>
                  <li><a class="dropdown-item" href="#"> Statistics</a></li>
                </ul>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="<?php echo base_url('user-logout'); ?>" title="Logout"><i class="fa fa-sign-out" aria-hidden="true"></i></a>
              </li>
            </ul>
          </div>
        </nav>
      </div>
    </div>
  </section>