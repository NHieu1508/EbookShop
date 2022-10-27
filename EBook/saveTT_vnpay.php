<?php
session_start();
ob_start();
include ("class/classCNM.php");
$p=new tmdt();
if (isset($_SESSION['MaKH'])){

    $MaKH=$_SESSION['MaKH'];
 }


?>
<?php

if(isset($_REQUEST['vnp_Amount']))
{
    $vnp_Amount=$_REQUEST['vnp_Amount'];
    $vnp_BankCode=$_REQUEST['vnp_BankCode'];
    $vnp_BankTranNo=$_REQUEST['vnp_BankTranNo'];
    $vnp_CardType=$_REQUEST['vnp_CardType'];
    $vnp_OrderInfo=$_REQUEST['vnp_OrderInfo'];
    $vnp_PayDate=$_REQUEST['vnp_PayDate'];
    $vnp_TmnCode=$_REQUEST['vnp_TmnCode'];
    $vnp_TransactionNo=$_REQUEST['vnp_TransactionNo']; 
    $vnp_TxnRef=$_REQUEST['vnp_TxnRef'];
}
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
								
$p->loadten("select Hoten from  tbl_khachhang  where MaKH = '$MaKH' ");
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
   
        <!--Begin display -->
        <div class="container-fluid">  
        <div class="card">  
        <div class="card-header"> 
                <h3 style="text-align:center;" class="text-bold">THÔNG TIN THANH TOÁN VNPAY</h3>
</div>
<div class="card-body">
            <div style="padding-top:10px;" class="table-responsive">
                <div class="form-group">
                    <label >Mã đơn hàng:</label>

                    <label><?php echo $vnp_TxnRef ?></label>
                </div>    
                <div class="form-group">

                    <label >Số tiền:</label>
                    <label><?php echo $vnp_Amount ?></label>
                </div>  
                <div class="form-group">
                    <label >Nội dung thanh toán:</label>
                    <label><?php echo $vnp_OrderInfo ?></label>
                </div> 
                <div class="form-group">
                    <label >Loại thẻ:</label>
                    <label><?php echo $vnp_CardType ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã GD Tại VNPAY:</label>
                    <label><?php echo $vnp_TransactionNo ?></label>
                </div> 
                <div class="form-group">
                    <label >Mã Ngân hàng:</label>
                    <label><?php echo $vnp_BankCode ?></label>
                </div> 
                <div class="form-group">
                    <label >Thời gian thanh toán:</label>
                    <label><?php echo $vnp_PayDate?></label>
                </div> 
                <a href="categories.php"><input style="width: 50%;margin-left:25%;" type="button" class="btn btn-success" value="QUAY LẠI"></a>
</div> 
</div>       
</div>         

<?php

if(isset($_REQUEST['vnp_Amount']))
{
    $vnp_Amount=$_REQUEST['vnp_Amount'];
    $vnp_BankCode=$_REQUEST['vnp_BankCode'];
    $vnp_BankTranNo=$_REQUEST['vnp_BankTranNo'];
    $vnp_CardType=$_REQUEST['vnp_CardType'];
    $vnp_OrderInfo=$_REQUEST['vnp_OrderInfo'];
    $vnp_PayDate=$_REQUEST['vnp_PayDate'];
    $vnp_TmnCode=$_REQUEST['vnp_TmnCode'];
    $vnp_TransactionNo=$_REQUEST['vnp_TransactionNo']; 

if($p->themxoasua("INSERT INTO tbl_vnpay(vnp_amount,vnp_bankcode ,vnp_banktranno,vnp_cardtype,vnp_orderinfo,vnp_paydate,vnp_tmncode,vnp_transactionno,MaKH)
                 VALUES ('$vnp_Amount', '$vnp_BankCode', '$vnp_BankTranNo','$vnp_CardType','$vnp_OrderInfo','  $vnp_PayDate','  $vnp_TmnCode',' $vnp_TransactionNo','$MaKH')") ==1 )
                                {
                                    //echo 'Successful VNPay payment. Thank you customer!!!';
                                    echo '<a href="categories.php"><input type="button" class="btn btn-primary" value="Đồng ý"></a>';
                                }
                                else
                                {
                                    echo'Giao dịch thất bại. Vui lòng thanh toán lại.<a href="javascript: history.go(-1)">Trở lại</a>';
                                }
}
?>