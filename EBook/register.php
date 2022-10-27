<?php
ob_start();
include ("class/classCNM.php");
$p=new tmdt();
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Ebook | Registration Page</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
</head>
<body class="hold-transition register-page">
<div class="register-box">
  <div class="card card-outline card-primary">
    <div class="card-header text-center">
      <a href="index.html" class="h1"><b>E</b>BOOK</a>
    </div>
    <div class="card-body">
      <p class="login-box-msg">Register a new membership</p>

      <form action="" method="post">
        <div class="input-group mb-3">
          <input type="text" name="Hoten" id="Hoten" class="form-control" placeholder="Full name">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-user"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="Diachi" id="Diachi" class="form-control" placeholder="Address">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-map-marker-alt"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="text" name="Sdt" id="Sdt" class="form-control" placeholder="09|03|07|08|05-12345678">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-phone"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="email" name="Email" id="Email" class="form-control" placeholder="email@gmail.com">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-envelope"></span>
            </div>
          </div>
        </div>
        <div class="input-group mb-3">
          <input type="password" name="Password" id="Password" class="form-control" placeholder="Password">
          <div class="input-group-append">
            <div class="input-group-text">
              <span class="fas fa-lock"></span>
            </div>
          </div>
        </div>
        <?php
switch($_POST['nut'])
{
    case 'Register':
    {
             
            $Hoten=$_REQUEST['Hoten'];
            $Diachi=$_REQUEST['Diachi'];
            $Sdt=$_REQUEST['Sdt'];
            $Email=$_REQUEST['Email'];
            $Password=$_REQUEST['Password'];
            if($Hoten!='' && $Diachi!='' && $Sdt!=''&& $Email!=''&& $Password!='')
            {
                //Kiểm tra cú pháp họ tên
                if (!eregi("^[a-zA-Z_]+( [a-zA-Z_]+)*$", $Hoten))
    {
        echo "Tên này không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
       // Kiểm tra địa chỉ
       if (!eregi("^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$", $Diachi ))
       {
           echo "Địa chỉ này không hợp lệ. Vui lòng nhập đúng địa chỉ. <a href='javascript: history.go(-1)'>Trở lại</a>";
           exit;
       }
    // Kiểm tra cú pháp số điện thoại  
    if (!eregi("^(09|03|07|08|05)+([0-9]{8})$", $Sdt ))
    {
        echo "SDT này không hợp lệ. Vui lòng nhập đúng SDT. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     // Kiểm tra cú pháp email  
     if (!eregi("^([a-zA-Z0-9])+@([a-zA-Z0-9-])+(.com)+", $Email ))
     {
         echo "Email này không hợp lệ. Vui lòng nhập đúng Email. <a href='javascript: history.go(-1)'>Trở lại</a>";
         exit;
     }
    $Password= md5($Password);
  if($p->themxoasua("INSERT INTO tbl_khachhang (Hoten ,Diachi ,Sdt ,Email,Password)
  VALUES ( '$Hoten', '$Diachi', ' $Sdt', '$Email', '$Password')")==1)
                     {
    echo '<script>alert("Bạn đã đăng ký thành công!!");</script>';
                     }
                     else
                     {
                        echo"Email đã có tài khoản!!!. <a href='javascript: history.go(-1)'>Trở lại</a>"; 
                     }
                }
            
            else
            {
                echo "Vui lòng điền đầy đủ thông tin.<a href='javascript: history.go(-1)'>Trở lại</a>";
            }
break;
        }
}

        ?>
        
          <!-- /.col -->
          <div class="col-12">
            <button type="submit" name="nut" id="nut" class="btn btn-primary btn-block" value="Register">Register</button>
          </div>
          <!-- /.col -->
        </div>
      </form>
      <a href="login.php" class="text-center">I already have a membership</a>
    </div>
    <!-- /.form-box -->
  </div><!-- /.card -->
</div>
<!-- /.register-box -->

<!-- jQuery -->
<script src="admin/plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap 4 -->
<script src="admin/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- AdminLTE App -->
<script src="admin/dist/js/adminlte.min.js"></script>

</body>
</html>
