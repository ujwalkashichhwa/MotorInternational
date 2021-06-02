<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Motor International</title>

    <!-- Bootstrap -->
    <link href="<?php echo base_url("assets/vendors/bootstrap/dist/css/bootstrap.min.css"); ?>" rel="stylesheet">
	<!--date picker -->
	<link href="<?php echo base_url("assets/datepicker3.css"); ?>" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="<?php echo base_url("assets/vendors/font-awesome/css/font-awesome.min.css"); ?>" rel="stylesheet">
    <!-- NProgress -->
    <link href="<?php echo base_url("assets/vendors/nprogress/nprogress.css"); ?>" rel="stylesheet">
    <!-- sweet-alert --> 
    <link href="<?php echo base_url("assets/vendors/sweetalert/sweetalert.css"); ?>" rel="stylesheet">
    
    <!-- Custom Theme Style -->
    <link href="<?php echo base_url("assets/build/css/custom.min.css"); ?>" rel="stylesheet">
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">
        <div class="col-md-3 left_col">
          <div class="left_col scroll-view">
            <div class="navbar nav_title" style="border: 0;">
             <a href="<?= base_url('admin/dashboard'); ?>" class="site_title"><span>Moto Int'l</span></a>
            </div>

            <div class="clearfix"></div>

            <!-- menu profile quick info -->
            <div class="profile clearfix">

                <div class="profile_info">
                    <span>Welcome,</span>
                    <h2><?= $this->session->userdata('first_name'); ?></h2>
                </div>
                <div class="clearfix"></div>
            </div>
            <!-- /menu profile quick info -->

            <br />

            <!-- sidebar menu -->
            <div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
              <div class="menu_section">
                <ul class="nav side-menu">
                  <?php if($this->session->userdata('type') == "admin" ) : ?>
                  <li><a href="<?= base_url('admin/dashboard'); ?>"><i class="fa fa-home"></i> Dashboard </a></li>
                  <li><a><i class="fa fa-edit"></i> Manage Users <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/employee/add'); ?>">Add new User</a></li>
                      <li><a href="<?= base_url('admin/employee'); ?>">All User</a></li>
                    </ul>
                  </li>
                  
                    <li>
                        <a><i class="fa fa-desktop"></i>Manufacturers &amp; Model <span class="fa fa-chevron-down"></span></a>

                        <ul class="nav child_menu">
                          <li><a href="<?php echo base_url() . 'admin/manufacturers';?>">Add Manufacturer</a></li>
                          <li><a href="<?php echo base_url() . 'admin/car_model';?>">Add Model</a></li>
                        </ul>
                    </li>
                    <?php endif; ?>
                  <li><a><i class="fa fa-table"></i> Vehicles <span class="fa fa-chevron-down"></span></a>
                    <ul class="nav child_menu">
                      <li><a href="<?= base_url('admin/vehicles'); ?>">Sell/Book</a></li>
                    
                      <?php if($this->session->userdata('type') == "admin" ) : ?>
                        <li><a href="<?= base_url('admin/vehicles'); ?>">All Vehicles</a></li>
                      <li><a href="<?= base_url('admin/vehicles/soldlist'); ?>">Sold Vehicles</a></li>
                      <li><a href="<?= base_url('admin/vehicles/booklist'); ?>">Booked Vehicles</a></li>
                    <?php endif;?>
                      <li><a href="<?= base_url('admin/products')?>">Buy Vehicles</a></li>
                      <li><a href="<?= base_url('admin/spare'); ?>">Buy Vehicles parts</a></li>
                    </ul>
                  </li>
                  <?php if($this->session->userdata('type') == "admin" ) : ?>
                    <li><a href="<?= base_url('admin/services'); ?>"><i class="fa fa-bell"></i> Vehicle Servicing Request </a></li>
                  <?php endif?>

                  <?php if($this->session->userdata('type') != "admin" ) : ?>
                    <li><a href="<?= base_url('admin/services/add'); ?>"><i class="fa fa-rocket"></i> Register Vehicle Servicing </a></li>

                  <?php endif?>
                </ul>
              </div>
            </div>
            <!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <?= $this->session->userdata('first_name'); ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    
                    <li><a href="<?php echo base_url() . 'admin/dashboard/logout'; ?>"><i class="fa fa-sign-out pull-right"></i> Log Out</a></li>
                  </ul>
                </li>
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->