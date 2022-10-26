<?php
ob_start();
session_start();
include ("../class/classCNM.php");
$p=new tmdt();

if (isset($_SESSION['Email'])){

  $Email=$_SESSION['Email'];
} 
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ebook | Log in</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="dist/css/adminlte.min.css">
</head>
<body class="hold-transition login-page">
<div class="login-box">
  <!-- /.login-logo -->
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="#" class="h1"><b>ADMIN</b></a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Quản lý hệ thống</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="email" name="Email" id="Email" class="form-control" placeholder="Nhập Email....">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password" id="Password" class="form-control" placeholder="Nhập Password...">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php
  switch ($_POST['nut'])
  {
	 case 'Đăng nhập':
	 {

		 $Email = $_REQUEST['Email'];
		 $Password = $_REQUEST['Password'];
		 if($Email!='' && $Password!='')
		 {
			 
            if($p->mylogin_admin($Email,$Password)==1)
			 {
				 $_SESSION['Email'] = $Email;
			    header("Location:index.php");
				echo 'Đăng nhập thành công';
			   
			 }
			 else
			 {
				 echo 'Đăng nhập không thành công';
			 }
		 }
		 else
		 {
			echo 'Vui lòng nhập đầy đủ thông tin...'; 
		 }
		 break;
	 } 
  }

  ?>
        
          <!-- /.col -->
          <div class="col-16">
            <button type="submit" name="nut" id="nut" class="btn btn-primary btn-block" value="Đăng nhập">Đăng nhập</button>
          </div>
          <!-- /.col -->
        </div>
      </form>


      <!-- /.social-auth-links -->

    </div>
    <!-- /.card-body -->
  </div>
  <!-- /.card -->
</div>
<!-- /.login-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>
</body>
</html>
