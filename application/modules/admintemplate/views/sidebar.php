<?php defined('BASEPATH') or exit('No direct script access allowed'); ?>
<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>"> <img alt="image" src="assets/img/logo.png" class="header-logo" /> <span class="logo-name">Rising Future</span>
      </a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="assets/img/user.png">
      </div>
    </div>
    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="<?php echo base_url('dashboard'); ?>" class="menu-toggl"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>
      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Widgets</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo base_url() ?>">Chart Widgets</a></li>
          <li><a class="nav-link" href="<?php echo base_url() ?>">Data Widgets</a></li>
        </ul>
      </li>
  </aside>
</div>