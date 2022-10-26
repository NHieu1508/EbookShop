<?php
session_start();
ob_start();
/*
session_destroy();
die();
*/
$layMaKH=0;
if (isset($_SESSION['MaKH'])){

    $layMaKH=$_SESSION['MaKH'];
 } 

include ("class/classCNM.php");
$p=new tmdt();
?>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>ebook</title>
  <link rel="stylesheet" type="text/css" href="style/cart.css" >
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome -->
  <link rel="stylesheet" href="admin/plugins/fontawesome-free/css/all.min.css">
  <!-- Ionicons -->
  <link rel="stylesheet" href="https://code.ionicframework.com/ionicons/2.0.1/css/ionicons.min.css">
  <!-- Tempusdominus Bootstrap 4 -->
  <link rel="stylesheet" href="admin/plugins/tempusdominus-bootstrap-4/css/tempusdominus-bootstrap-4.min.css">
  <!-- iCheck -->
  <link rel="stylesheet" href="admin/plugins/icheck-bootstrap/icheck-bootstrap.min.css">
  <!-- JQVMap -->
  <link rel="stylesheet" href="admin/plugins/jqvmap/jqvmap.min.css">
  <!-- Theme style -->
  <link rel="stylesheet" href="admin/dist/css/adminlte.min.css">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="admin/plugins/overlayScrollbars/css/OverlayScrollbars.min.css">
  <!-- Daterange picker -->
  <link rel="stylesheet" href="admin/plugins/daterangepicker/daterangepicker.css">
  <!-- summernote -->
  <link rel="stylesheet" href="admin/plugins/summernote/summernote-bs4.min.css">
  <link rel="stylesheet" type="text/css" href="styles/bootstrap4/bootstrap.min.css">
<link href="plugins/font-awesome-4.7.0/css/font-awesome.min.css" rel="stylesheet" type="text/css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.carousel.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/owl.theme.default.css">
<link rel="stylesheet" type="text/css" href="plugins/OwlCarousel2-2.2.1/animate.css">
<link rel="stylesheet" type="text/css" href="styles/main_styles.css">
<link rel="stylesheet" type="text/css" href="styles/responsive.css">
</head>
<style>
.container-fluid
{
    width: 50%;
}
    </style>
<body>
    <?php
    /*
    <div class="form-order">
    <h1>THÔNG TIN ĐẶT HÀNG</h1>
    <div class="form-group">
    <label for="Hoten">Họ tên</label>
    <input  type="text" class="form-control" placeholder="" id="Hoten" name="Hoten" value="<?php echo $p->laycot_KH("select Hoten from tbl_khachhang where MaKH='$MaKH'"); ?>">
  </div>
  <div class="form-group">
    <label for="Diachi">Địa chỉ </label>
    <input type="text" class="form-control" placeholder=""name="Diachi" id="Diachi"value="<?php echo $p->laycot_KH("select Diachi from tbl_khachhang where MaKH='$MaKH'"); ?>">
  </div>
  <div class="form-group">
    <label for="Sdt">Số điện thoại </label>
    <input type="text" class="form-control" placeholder=""name="Sdt" id="Sdt"value="<?php echo $p->laycot_KH("select Sdt from tbl_khachhang where MaKH='$MaKH'"); ?>">
  </div>
  <div class="form-group">
    <label for="Email">Email </label>
    <input type="email" class="form-control" placeholder=""name="Email" id="Email"value="<?php echo $p->laycot_KH("select Email from tbl_khachhang where MaKH='$MaKH'"); ?>">
  </div>
</div>
*/
?>
<!-- Header -->
<div class="super_container">

	<!-- Header -->

	<header class="header trans_300">

		<!-- Top Navigation -->

		<div class="top_nav">
			<div class="container">
				<div class="row">
					<!--   Tim kiem sach -->
					<div class="col-md-6"><div style="padding-top: 5px;" class="input-group mb-3">
						<input type="text" class="form-control" placeholder="Search....">
						<div class="input-group-append">
							<button  name="btnSearch" value="search" type="submit" class="btn btn-primary"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
								<path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
							  </svg> </button>
						</div>
					  </div>
					 <!--   -->
					</div>
					<div class="col-md-6 text-right">
						<div class="top_nav_right">
							<ul class="top_nav_menu">

								<!--   Language / My Account -->

								
								<li class="language">
									<a href="#">
										English
										<i class="fa fa-angle-down"></i>
									</a>
									<ul class="language_selection">
										<li><a href="#">VietNam</a></li>
										
									</ul>
								</li>
                                <?php 
								
$p->loadten("select Hoten from  tbl_khachhang  where MaKH = '$layMaKH' ");
?>
							</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
        <div class="main_nav_container">
			<div class="container">
				<div class="row">
					<div class="col-lg-12 text-right">
						<div class="logo_container">
							<a href="index.html">Ebook<span>shop</span></a>
						</div>
						<nav class="navbar">
							<ul class="navbar_menu">
								<li><a href="index.html">home</a></li>
								<li><a href=categories.php>categories</a></li>
								<li><a href="#">About</a></li>
								
								<li><a href="#">blog</a></li>
								<li><a href="contact.html">contact</a></li>
							</ul>
							<ul class="navbar_user">
								<li><a href="#"></a></li>
								
								<li class="checkout">
									<a href="cart.php">
										<i class="fa fa-shopping-cart" aria-hidden="true"></i>
										<span id="checkout_items" class="checkout_items"><?php if (isset($_SESSION['giohang'])){
                                                     
	$count = count($_SESSION['giohang']);
	echo $count;
}else{
	echo 0;
} ?></span>
									</a>
								</li>
							</ul>
							<div class="hamburger_container">
								<i class="fa fa-bars" aria-hidden="true"></i>
							</div>
						</nav>
					</div>
				</div>
			</div>
		</div>

	</header>

	<div class="fs_menu_overlay"></div>
	<div class="hamburger_menu">
		<div class="hamburger_close"><i class="fa fa-times" aria-hidden="true"></i></div>
		<div class="hamburger_menu_content text-right">
			<ul class="menu_top_nav">
				
				<li class="menu_item has-children">
					<a href="#">
						English
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#">VietNam</a></li>
					</ul>
				</li>
				<li class="menu_item has-children">
					<a href="#">
						My Account
						<i class="fa fa-angle-down"></i>
					</a>
					<ul class="menu_selection">
						<li><a href="#"><i class="fa fa-sign-in" aria-hidden="true"></i>Sign In</a></li>
						<li><a href="#"><i class="fa fa-user-plus" aria-hidden="true"></i>Register</a></li>
					</ul>
				</li>
				<li class="menu_item"><a href="index.html">home</a></li>
				<li class="menu_item"><a href="categories.php">categories</a></li>		
				<li class="menu_item"><a href="#">About</a></li>
				<li class="menu_item"><a href="#">blog</a></li>
				<li class="menu_item"><a href="contact.html">contact</a></li>
			</ul>
		</div>
	</div>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
    <br>
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1 style="text-align:center;">Tài khoản của tôi</h1> 
        </div>
        <div class="card-body">
            <form action=""enctype="multilpart/form-data" method="post">
            <div class="form-group">
                  <label for="Hoten" style="font-size:large;">Họ tên</label>
                  <input type="text" name="Hoten" id="Hoten" class="form-control" value="<?php  echo $p->laycot_KH("select Hoten from tbl_khachhang where MaKH='$layMaKH'"); ?>" >
                </div>
            <div class="form-group">
                  <label for="Diachi" style="font-size:large;">Địa chỉ</label>
                  <input type="text" name="Diachi" id="Diachi" class="form-control"value="<?php echo $p->laycot_KH("select Diachi from tbl_khachhang where MaKH='$layMaKH'"); ?>"  >
                </div>
                <div class="form-group">
                  <label for="sdt" style="font-size:large;">Số điện thoại</label>
                  <input type="text" name="Sdt" id="Sdt" class="form-control"value="<?php echo $p->laycot_KH("select Sdt from tbl_khachhang where MaKH='$layMaKH'"); ?>" >
                </div>
                <div class="form-group">
                  <label for="Email" style="font-size:large;">Email</label>
                  <input type="email" name="Email" id="Email" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot_KH("select Email from tbl_khachhang where MaKH='$layMaKH'"); ?>">
                </div>
                <div class="form-group">
                  <label for="Password" style="font-size:large;">Password</label>
                  <input type="password"  name="Password" id="Password" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot_KH("select Password from tbl_khachhang where MaKH='$layMaKH'"); ?>">
                </div >
                <input style="width: 50%;margin-left:25%;" type="submit" class="btn btn-success" name="nut" id="nut" value="Cập nhật" />
                </form>
</div>
</div>
                <?php
switch ($_POST['nut'])
	{
		case 'Cập nhật':
      {
$Hoten=$_REQUEST['Hoten'];
$Diachi=$_REQUEST['Diachi'];
$Sdt=$_REQUEST['Sdt'];
$Email=$_REQUEST['Email'];
$Password=$_REQUEST['Password'];
$Password=md5($Password);
if(!empty($Hoten))
{
    //Kiểm tra cú pháp họ tên
    if (!eregi("^[a-zA-Z_]+( [a-zA-Z_]+)*$", $Hoten))
    {
        echo "<p style='color:red; font-size:1.6rem;'>Tên này không hợp lệ. Vui lòng nhập lại. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
       // Kiểm tra địa chỉ
       if (!eregi("^[a-zA-Z0-9_]+( [a-zA-Z0-9_]+)*$", $Diachi ))
       {
           echo "<p style='color:red; font-size:1.6rem;'>Địa chỉ này không hợp lệ. Vui lòng nhập đúng địa chỉ. <a href='javascript: history.go(-1)'>Trở lại</a>";
           exit;
       }
    // Kiểm tra cú pháp số điện thoại  
    if (!eregi("^(09|03|07|08|05)+([0-9]{8})$", $Sdt ))
    {
        echo "<p style='color:red; font-size:1.6rem;'>SDT này không hợp lệ. Vui lòng nhập theo cú pháp (09|03|07|08|05)-12345678. <a href='javascript: history.go(-1)'>Trở lại</a>";
        exit;
    }
     // Kiểm tra cú pháp email  
     if (!eregi("^([a-zA-Z0-9])+@([a-zA-Z0-9-])+(.com)+", $Email ))
     {
         echo "<p style='color:red; font-size:1.6rem;'>Email này không hợp lệ. Vui lòng nhập đúng Email. <a href='javascript: history.go(-1)'>Trở lại</a>";
         exit;
     }
if($p->themxoasua("UPDATE tbl_khachhang SET Hoten = '$Hoten',Diachi = '$Diachi',Sdt = '$Sdt',Email='$Email',Password= '$Password' WHERE MaKH = '$layMaKH' LIMIT 1 ")==1)
{
    echo "<script>alert('Đã thay đổi thông tin tài khoản.');</script>"; 
                   
    echo("<script>window.location = 'myaccount.php';</script>");
}
else
{
echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Thay đổi không thành công</strong></p>';
}
}
  else
{
  echo '<p style="color:red; font-size:1.6rem;text-align:center;"><strong>Bạn cần đăng nhập!!!</strong></p>';
}
break;
}
    }
    ?>

	<!-- Slider Navigation -->

    <div class="product_slider_nav_left product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-left" aria-hidden="true"></i>
						</div>
						<div class="product_slider_nav_right product_slider_nav d-flex align-items-center justify-content-center flex-column">
							<i class="fa fa-chevron-right" aria-hidden="true"></i>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Benefit -->
    </body>
    <footer>
	<div class="benefit">
		<div class="container">
			<div class="row benefit_row">
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-truck" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>free shipping</h6>
							<p>Suffered Alteration in Some Form</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-money" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>cash on delivery</h6>
							<p>The Internet Tend To Repeat</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-undo" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>45 days return</h6>
							<p>Making it Look Like Readable</p>
						</div>
					</div>
				</div>
				<div class="col-lg-3 benefit_col">
					<div class="benefit_item d-flex flex-row align-items-center">
						<div class="benefit_icon"><i class="fa fa-clock-o" aria-hidden="true"></i></div>
						<div class="benefit_content">
							<h6>opening all week</h6>
							<p>8AM - 09PM</p>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<!-- Footer -->

	<footer class="footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-6">
					<div class="footer_nav_container d-flex flex-sm-row flex-column align-items-center justify-content-lg-start justify-content-center text-center">
						<ul class="footer_nav">
							<li><a href="#">Blog</a></li>
							<li><a href="#">FAQs</a></li>
							<li><a href="contact.html">Contact us</a></li>
						</ul>
					</div>
				</div>
				<div class="col-lg-6">
					<div class="footer_social d-flex flex-row align-items-center justify-content-lg-end justify-content-center">
						<ul>
							<li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
							<li><a href="#"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
						</ul>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-12">
					<div class="footer_nav_container">
						<div class="cr">©2022 All Rights Reserverd. Made with <i class="fa fa-heart-o" aria-hidden="true"></i> by <a href="#">NhatHieu</a> &amp; distributed by <a href="#">Hieu_Nha</a></div>
					</div>
				</div>
			</div>
		</div>
	</footer>

</div>

<script src="js/jquery-3.2.1.min.js"></script>
<script src="styles/bootstrap4/popper.js"></script>
<script src="styles/bootstrap4/bootstrap.min.js"></script>
<script src="plugins/Isotope/isotope.pkgd.min.js"></script>
<script src="plugins/OwlCarousel2-2.2.1/owl.carousel.js"></script>
<script src="plugins/easing/easing.js"></script>
<script src="js/custom.js"></script>

<footer>
</html>

