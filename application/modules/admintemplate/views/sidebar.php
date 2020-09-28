<div class="main-sidebar sidebar-style-2">
  <aside id="sidebar-wrapper">
    <div class="sidebar-brand">
      <a href="<?php echo base_url(); ?>"> <img alt="image" src="<?php echo base_url() ?>assets/img/logo.png" class="header-logo" /> <span class="logo-name">Rising Future</span>
      </a>
    </div>
    <div class="sidebar-user">
      <div class="sidebar-user-picture">
        <img alt="image" src="<?php echo base_url() ?>assets/img/user.png">
      </div>
    </div>

    <ul class="sidebar-menu">
      <li class="menu-header">Main</li>
      <li class="dropdown active">
        <a href="<?php echo base_url('dashboard'); ?>" class="menu-toggl"><i data-feather="monitor"></i><span>Dashboard</span></a>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Manage Users</span></a>
        <ul class="dropdown-menu">
          <!-- <li><a class="nav-link" href="<?php echo base_url() ?>user-registration">User Registration</a></li> -->
          <li><a class="nav-link" href="<?php echo base_url() ?>user-details">User Details</a></li>
        </ul>
      </li>

      <li class="dropdown">
        <a href="#" class="menu-toggle nav-link has-dropdown"><i data-feather="briefcase"></i><span>Manage Slots</span></a>
        <ul class="dropdown-menu">
          <li><a class="nav-link" href="<?php echo base_url() ?>add-slots">Add Slots</a></li>
          <li><a class="nav-link" href="<?php echo base_url() ?>slots-detail">Manage Slots</a></li>
        </ul>
      </li>

      <li class="dropdown" style = "margin-left:-8px;">
        <a href="#" class="menu-toggle nav-link has-dropdown">
          <i class="fas fa-rupee-sign"></i>
          <span>
            Manage Transactions
          </span>
        </a>
        <ul class="dropdown-menu">
          <!--<li><a class="nav-link" href="<?php echo base_url() ?>manage-transaction"> Transaction Requests</a></li>-->
          <li><a class="nav-link" href="<?php echo base_url() ?>show-debit-credit"> Debit or Credit</a></li>
        </ul>
      </li>
  </aside>
</div>