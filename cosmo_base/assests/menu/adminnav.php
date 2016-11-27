<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>Admin Panel</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <!-- Bootstrap 3.3.6 -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/bootstrap/css/bootstrap.min.css'; ?>">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.5.0/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/dist/css/AdminLTE.min.css';?>">

  <link rel="stylesheet" href="<?php echo base_url().'assests/dist/css/skins/skin-blue.min.css';?>  ">

  <link rel="stylesheet" href="<?php echo base_url().'assests/dist/css/skins/_all-skins.min.css';?>">
  <!-- iCheck -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/iCheck/flat/blue.css';?>">
  <!-- Morris chart -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/morris/morris.css';?>">
  <!-- jvectormap -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/jvectormap/jquery-jvectormap-1.2.2.css';?>">
  <!-- Date Picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/datepicker/datepicker3.css';?>">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/daterangepicker/daterangepicker.css';?>">
  <!-- bootstrap wysihtml5 - text editor -->
  <link rel="stylesheet" href="<?php echo base_url().'assests/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.min.css';?>">

</head>
<!--
BODY TAG OPTIONS:
=================
Apply one or more of the following classes to get the
desired effect
|---------------------------------------------------------|
| SKINS         | skin-blue                               |
|               | skin-black                              |
|               | skin-purple                             |
|               | skin-yellow                             |
|               | skin-red                                |
|               | skin-green                              |
|---------------------------------------------------------|
|LAYOUT OPTIONS | fixed                                   |
|               | layout-boxed                            |
|               | layout-top-nav                          |
|               | sidebar-collapse                        |
|               | sidebar-mini                            |
|---------------------------------------------------------|
-->
<body class="hold-transition skin-blue sidebar-mini">

<div class="wrapper">
  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="index2.html" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"><b>C</b>Mo</span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Cos</b>Mo</span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="offcanvas" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <!-- User Account Menu -->
          <li class="dropdown user user-menu">
            <!-- Menu Toggle Button -->
            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
              <!-- The user image in the navbar-->
              <img src="<?php echo base_url().'assests/dist/img/user2-160x160.jpg';?>" class="user-image" alt="User Image">
              <!-- hidden-xs hides the username on small devices so only the image appears. -->
              <span class="hidden-xs"><?php echo $this->session->fname;?> <?php echo $this->session->lname; ?></span>
            </a>
            <ul class="dropdown-menu">
              <!-- The user image in the menu -->
              <li class="user-header">
                <img src="<?php echo base_url().'assests/dist/img/user2-160x160.jpg';?>" class="img-circle" alt="User Image">
                <p>
                  <?php echo $this->session->fname;?> <?php echo $this->session->lname; ?>
                  <small>Member since <?php echo $this->session->date;?></small>
                </p>
              </li>
              <!-- Menu Body -->
              <li class="user-body">
                <!-- /.row -->
              </li>
              <!-- Menu Footer-->
              <li class="user-footer">
                <?php
                if(isset($this->session->u_status) && ($this->session->u_status) == 1)
                {
                  echo '<div class="pull-left">';
                    echo '<a href="';
                    echo base_url().'index.php';
                    echo '" class="btn btn-default btn-flat">';
                    echo 'User Portal</a>';
                  echo '</div>';
                }
                ?>
                <div class="pull-right">
                  <a href="<?php echo base_url().'index.php/login/logout';?>" class="btn btn-default btn-flat">Sign out</a>
                </div>
              </li>
            </ul>
          </li>
        </ul>
      </div>
    </nav>
  </header>
  <!-- Left side column. contains the logo and sidebar -->
  <aside class="main-sidebar">

    <!-- sidebar: style can be found in sidebar.less -->
    <section class="sidebar">

      <!-- Sidebar user panel (optional) -->
      <div class="user-panel">
        <div class="pull-left image">
          <img src="<?php echo base_url().'assests/dist/img/user2-160x160.jpg';?>" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">
          <p><?php echo $this->session->fname;?> <?php echo $this->session->lname;?></p>
          <!-- Status -->
        </div>
      </div>
      <br>
      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Panel</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="<?php echo base_url().'index.php/admin';?>"><i class="fa fa-link"></i> Home</a></li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Complaint</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'index.php/complaint/viewEComplaint';?>">Booked Complaints</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>Service</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'index.php/service/viewECommplaint';?>">Booked Service's</a></li>
          </ul>
        </li>
        <li class="treeview">
          <a href="#"><i class="fa fa-link"></i> <span>News</span>
            <span class="pull-right-container">
              <i class="fa fa-angle-left pull-right"></i>
            </span>
          </a>
          <ul class="treeview-menu">
            <li><a href="<?php echo base_url().'index.php/news/';?>">Add News</a></li>
            <li><a href="<?php echo base_url().'index.php/news/';?>">Edit News</a></li>
          </ul>
        </li>
      </ul>

      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

<!-- REQUIRED JS SCRIPTS -->
<!-- jQuery 2.2.3 -->
<script src="<?php echo base_url().'assests/plugins/jQuery/jquery-2.2.3.min.js';?>"></script>
<!-- jQuery UI 1.11.4 -->
<script src="https://code.jquery.com/ui/1.11.4/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button);
</script>
<!-- Bootstrap 3.3.6 -->
<script src="<?php echo base_url().'assests/bootstrap/js/bootstrap.min.js';?>"></script>
<!-- Morris.js charts -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/raphael/2.1.0/raphael-min.js"></script>
<script src="<?php echo base_url().'assests/plugins/morris/morris.min.js';?>"></script>
<!-- Sparkline -->
<script src="<?php echo base_url().'assests/plugins/sparkline/jquery.sparkline.min.js';?>"></script>
<!-- jvectormap -->
<script src="<?php echo base_url().'assests/plugins/jvectormap/jquery-jvectormap-1.2.2.min.js';?>"></script>
<script src="<?php echo base_url().'assests/plugins/jvectormap/jquery-jvectormap-world-mill-en.js';?>"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url().'assests/plugins/knob/jquery.knob.js';?>"></script>
<!-- daterangepicker -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.11.2/moment.min.js"></script>
<script src="<?php echo base_url().'assests/plugins/daterangepicker/daterangepicker.js';?>"></script>
<!-- datepicker -->
<script src="<?php echo base_url().'assests/plugins/datepicker/bootstrap-datepicker.js';?>"></script>
<!-- Bootstrap WYSIHTML5 -->
<script src="<?php echo base_url().'assests/plugins/bootstrap-wysihtml5/bootstrap3-wysihtml5.all.min.js';?>"></script>
<!-- Slimscroll -->
<script src="<?php echo base_url().'assests/plugins/slimScroll/jquery.slimscroll.min.js';?>"></script>
<!-- FastClick -->
<script src="<?php echo base_url().'assests/plugins/fastclick/fastclick.js';?>"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url().'assests/dist/js/app.min.js';?>"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url().'assests/dist/js/pages/dashboard.js';?>"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url().'assests/dist/js/demo.js';?>"></script>

</body>
</html>
