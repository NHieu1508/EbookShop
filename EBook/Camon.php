<?php
session_start();
ob_start();
include ("class/classCNM.php");
$p=new tmdt();
if (isset($_SESSION['MaKH'])){

    $MaKH=$_SESSION['MaKH'];
 }

if(isset($_GET['id']))
{
  $id=$_GET['id'];
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
<style>
    .container-fluid
    {
        width: 50%;
        text-align:center;

    }
  #qrcode
  {
    padding-left: 40px;
    color:black;
    font-size:large;
  }
</style>
</head>

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
<div class="container-fluid">  
        <div class="card" > 
<?php
echo '<p style="font-size:30px;color:red;"><strong>Đặt hàng thành công. Cảm ơn quý khách !!!</strong></p>';
?>
<img src="images/image-18.png"style=" height:100px; width:100px; margin-left:500px; " alt="" srcset="">
<div >
<p class="fa fa-user" style="font-size:30px;color:blue;padding-top: 15px;"><strong>Nhân viên CSKH sẽ liên hệ quý khách trong thời gian sớm nhất</strong></p>
</div>
<?php
echo '<p style="font-size:large; color:red;"><strong>Thông tin đơn hàng. Quét ở đây!!!</strong></p>';
?>
<input id="text" type="hidden" value="http://localhost:88/CNM_2022/CNM_FINAL/EBook/chitietdonhang.php?id=<?php echo $id?>" style="width:80%" /><br />
<div id="qrcode" style="width:100px;margin-bottom:15px; height:100px;  padding-left: 500px; "></div>
</div>
</div>
<script type="text/javascript" src="qrcodes/ jquery.min.js"></script>
<script type="text/javascript" src="qrcodes/qrcode.js"></script>
<script type="text/javascript">
  var qrcode =new QRCode(document.getElementById("qrcode"),
  {
    width:100,
    height:100
  });
  function makeCode()
  {
    var elText = document.getElementById("text");

    if(!elText.value)
    {
      alert ("Input a text");
      elText.focus();
      return;
    }
    qrcode.makeCode(elText.value);
  }
  makeCode();
  $("#text").
  on("blur",function()
  {
    makeCode();
  }).
  on("keydown", function(e) 
  {
    if(e.keyCode == 13)
    {
      makeCode();
    }
  });
</script>