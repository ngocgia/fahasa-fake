<?php
    include_once "lib/session.php";
    include_once 'model/admin.php';
    include_once 'model/db.php';
    include_once 'model/users.php';
    include_once 'model/products.php';
    Session::init();
   
    $db=new Database();
    $admin=new Admin;
    $user=new User;
    $product=new Product;
?>
<!DOCTYPE html>
<!--
This is a starter template page. Use this page to start your new project from
scratch. This page gets rid of all links and provides the needed markup only.
-->
<html>
<head>
  <!--Check phiên đăng nhập-->
  <?php
    $check_login=session::get("login");
    if ($check_login==false) {
     
     header("Location:login.php");
    } 
   ?>
   <?php
    if (isset($_GET["action"])&&$_GET["action"]=="logout") {
      Session_destroy();
     header("Location:login.php");
    } 
   ?>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title>FAHASA FAKE</title>
  <!-- Tell the browser to be responsive to screen width -->
  <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">
  <link rel="stylesheet" href="public/bower_components/bootstrap/dist/css/bootstrap.min.css">
  <!-- Font Awesome -->

  <link rel="stylesheet" href="public/bower_components/font-awesome/css/font-awesome.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="public/bower_components/Ionicons/css/ionicons.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="public/dist/css/AdminLTE.min.css">
  
  <!-- Viền trên +Thanh chức năng  -->
  <link rel="stylesheet" href="public/dist/css/skins/skin-blue.min.css">

 
  <!-- Google Font -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,600,700,300italic,400italic,600italic">
     <!--  <script type="text/javascript">
       \
      </script> -->
</head>
<body class="hold-transition skin-blue sidebar-mini">
<div class="wrapper">

  <!-- Main Header -->
  <header class="main-header">

    <!-- Logo -->
    <a href="#" class="logo">
      <!-- mini logo for sidebar mini 50x50 pixels -->
      <span class="logo-mini"></span>
      <!-- logo for regular state and mobile devices -->
      <span class="logo-lg"><b>Admin</b></span>
    </a>

    <!-- Header Navbar -->
    <nav class="navbar navbar-static-top" role="navigation">
      <!-- Sidebar toggle button-->
      <a href="#" class="sidebar-toggle" data-toggle="push-menu" role="button">
        <span class="sr-only">Toggle navigation</span>
      </a>
      <!-- Navbar Right Menu -->
      <div class="navbar-custom-menu">
        <ul class="nav navbar-nav">
          <li >
            <!-- Menu Toggle Button -->

              <a href="?action=logout" >Đăng xuất</a>
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
          <img src="public/dist/img/ava.jpg" class="img-circle" alt="User Image">
        </div>
        <div class="pull-left info">




         <!-- CHỖ ĐIỀN TÊN KẾ BÊN NÚT XANH ONLINE -->





          <p><?php echo session::get("name") ?></p>
          <!-- Status -->
          <!-- <a href="#"><i class="fa fa-circle text-success"></i> Online</a> -->
        </div>
      </div>
      
      <!-- search form (Optional) -->
      <form action="#" method="get" class="sidebar-form">
        <div class="input-group">
          <input type="text" name="q" class="form-control" placeholder="Search...">
          <span class="input-group-btn">
              <button type="submit" name="search" id="search-btn" class="btn btn-flat"><i class="fa fa-search"></i>
              </button>
            </span>
        </div>
      </form>
      <!-- /.search form -->

      <!-- Sidebar Menu -->
      <ul class="sidebar-menu">
        <li class="header">Chức năng</li>
        <!-- Optionally, you can add icons to the links -->
        <li><a href="?controller=product"><i class="fa fa-link"></i> <span>Quản lý sản phẩm</span></a></li>
        <li><a href="?controller=user" ><i class="fa fa-link"></i> <span>Quản lý khách hàng</span></a></li>
        <li><a href="?controller=order" ><i class="fa fa-link"></i> <span>Quản lý đơn hàng</span></a></li>
		<li><a href="?controller=response" ><i class="fa fa-link"></i> <span>Quản lý phản hồi</span></a></li>


        <!-- <li><a href="?controller=banner" ><i class="fa fa-link"></i> <span>Quản lý Banner</span></a></li> -->


       
      </ul>
      <!-- /.sidebar-menu -->
    </section>
    <!-- /.sidebar -->
  </aside>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper" >
    <!-- Content Header (Page header) -->
   
    <!-- Main content -->
    <section class="content container-fluid" >

      <!--------------------------
        | Your Page Content Here |
        -------------------------->
          <!--  <iframe src="#" width="100%" height="600px" id="KH" name="KH" hidden="true"  ></iframe> -->
        <h1 style="margin: 0 auto; text-align: center; font-size: 60px; ">Wellcome</h1>
        <h3 style="text-align: center">Chào mừng <?php echo session::get("name") ?>  đến với trang quản lý Website mua sách trực tuyến <u style="font-family: Arial;">FAHASA FAKE</u></h3>
        
     
     
    </section>
    <!-- /.content -->
  </div>
  

<!-- jQuery 3 -->
<script src="public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>

<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. -->
</body>
</html>