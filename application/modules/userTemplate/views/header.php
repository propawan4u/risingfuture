<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <title>Rising Future</title>
  <!-- General CSS Files -->
  <link rel="stylesheet" href="<?php echo base_url(); ?>build/css/bootstrap.min.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>build/css/style.css">
  <link rel="stylesheet" href="<?php echo base_url(); ?>assets/fontawesome/css/font-awesome.min.css">
  <link rel='shortcut icon' type='image/x-icon' href='assets/img/favicon.ico' />
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
  </style>
</head>

<body>
  <section>
    <div class="">
      <div class="container-fluid">
        <nav class="navbar navbar-expand-md navbar-light">
          <a class="navbar-brand" href="<?php echo base_url('user-dashboard'); ?>">
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
                  <li><a class="dropdown-item" href="#"> Main Panel</a></li>
                  <li><a class="dropdown-item" href="#"> Profile</a></li>
                  <li><a class="dropdown-item" href="#"> Security</a></li>
                  <li><a class="dropdown-item" href="#"> Partners</a></li>
                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Wallet </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdownMenuLink">
                  <li><a class="dropdown-item" href="#"> Buy Balance</a></li>
                  <li><a class="dropdown-item" href="#"> Top-up</a></li>
                  <li><a class="dropdown-item" href="#"> Transfer</a></li>
                  <li><a class="dropdown-item" href="#"> Withdrawal</a></li>
                  <li><a class="dropdown-item" href="#"> Statistics</a></li>

                </ul>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="javascript:void;" id="navbarDropdownMenuLink" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                  Coins </a>
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