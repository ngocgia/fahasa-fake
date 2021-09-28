<?php
    include_once "lib/session.php";
    include_once 'model/admin.php';
    include_once 'model/db.php';
    include_once 'model/users.php';
    include_once 'model/products.php';
    $db=new Database();
    $admin=new Admin;
    $user=new User;
?>
<!DOCTYPE html>
<html>
<head>
  <meta content='30' http-equiv='refresh'/> 
  <title>Quản lí đơn hàng</title>
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
        <li><a href="?controller=product"><i class="fa fa-link"></i> <span>Quản lý sản phẩm</span></a></li>
        <li><a href="?controller=user" ><i class="fa fa-link"></i> <span>Quản lý khách hàng</span></a></li>
        <li><a href="?controller=order" ><i class="fa fa-link"></i> <span>Quản lý đơn hàng</span></a></li>
		    <li><a href="?controller=response" ><i class="fa fa-link"></i> <span>Quản lý phản hồi</span></a></li>
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
    <div class="header-area">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
					<!-- Menu admin đăng nhập -->
					<h3 ><a href="index.php">Về HomePage</a></h3> 
                </div>
            </div>
        </div>
</div> <!-- End header area -->
    <div class="panel-body"> 
     <table class="table table-striped table-bordered table-list"> 
      <thead> 
       <tr> 
        <th><em class="fa fa-cog"></em>
        </th> 
        <th class="hidden-xs">ID</th> 
        <th>ID giao dịch</th>
        <th>ID Người nhận</th>
        <th>Tên người nhận</th>
        <th>Số điện thoại</th>
        <th>Sản phẩm</th>
        <th>Số lượng</th>
        <th>Thành tiền</th>
        <th>Trạng thái</th>
        <th></th>

       </tr> 
      </thead> 
      <tbody>
      
        <?php
              //Tải thông tin các thành viên
                if($result){
                    while ($row=$result->fetch_assoc()) {
        ?>
                       <!-- onclick="return confirm('Bạn có chắc muốn xóa không?')" -->
                    <td align="center"><a href="index.php?controller=order&action=edit&id= <?php  echo $row['id'];?>" target="_blank" class="btn btn-default"><em class="fa fa-pencil"></em></a>
                      <a class="btn btn-danger" onclick="return confirm('Bạn chắc muốn xóa chứ?')" href="index.php?controller=user&action=delete&id= <?php  echo $row['id'];?>" ><em class="fa fa-trash"></em></a>
                    </td> 
                    <td class="hidden-xs"><?php  echo $row["id"]?></td> 
                    <td><?php  echo $row["transaction"]?></td> 
                    <td><?php  echo $row["user_id"]?></td>
                    <td><?php  echo $row["name"]?></td> 
                    <td><?php  echo $row["phone"]?></td>
                    <td><?php  echo $row["data"]?></td> 
                    <td><?php  echo $row["qty"]?></td>
                    <td><?php  echo number_format($row["amount"])?></td>
                    <td><?php if($row["status"]==1)  echo 'Giao hàng thành công'; elseif($row["status"]==0) echo 'Đang xử lí '; ?></td>
         
                    </tr>   
                    
                    
              <?php
                  }
                  } 
              ?> 
      
      
     </tbody></table> 
    </div> 
     
     
    </section>
    <!-- /.content -->
  </div>
  

<!-- jQuery 3 -->
<script src="public/bower_components/jquery/dist/jquery.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="public/bower_components/bootstrap/dist/js/bootstrap.min.js"></script>
<!-- AdminLTE App -->
<script src="public/dist/js/adminlte.min.js"></script>



  
   </div> 
  </div> 
 </div>
</div>
</body>
</html>