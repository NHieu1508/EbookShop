<?php
session_start();
ob_start();
/*
session_destroy();
die();
*/
if (isset($_SESSION['MaKH'])){

    $MaKH=$_SESSION['MaKH'];
 } 
include ("class/classCNM.php");
$p=new tmdt();

if(isset($_REQUEST['Masach'])) 
{
	$Masach=$_REQUEST['Masach'];
}

?>
<?php
    
    if(!isset($_SESSION['giohang'])) $_session['giohang']='';
    //làm rỗng giỏ hàng
    if(isset($_GET['delcart'])&&($_GET['delcart']==1)) unset($_SESSION['giohang']);
	
	  if(isset($_GET['delid'])&&($_GET['delid']>=0))
      {
		  
       array_splice($_SESSION['giohang'],$_GET['delid'],1);
    }	
    //lấy dữ liệu từ form
    if(isset($_POST['addcart'])&&($_POST['addcart']))
    {
        $Anh=$_POST['Anh'];
        $Tensach=$_POST['Tensach'];
        $Gia=$_POST['Gia']; 
		$Soluong=$_POST['Soluong'];	
        //kiem tra sp co trong gio hang hay khong?

        $fl=0; //kiem tra sp co trung trong gio hang khong?
       
	   
        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) 
        { 
            
            if($_SESSION['giohang'][$i][1]==$Tensach)
            {
                $fl=1;
                $soluongnew=$Soluong+$_SESSION['giohang'][$i][3];
                $_SESSION['giohang'][$i][3]=$soluongnew;
                break;
            }          
        }
	  if($fl==0)
      {
		   $sp=array($Anh,$Tensach,$Gia,$Soluong);
	       $_SESSION['giohang'][]=$sp;
      }
	  
    }

    function showgiohang(){
        if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
            if(sizeof($_SESSION['giohang'])>0){
                $tong=0;
                for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
                    $tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
                    $tong+=$tt;
                    $Tongsoluong+=$_SESSION['giohang'][$i][3];
                    echo '
                    <tr>
                            <td>'.($i+1).'</td>
                            <td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt="" width=150px;height=150px; ></td>
                           
                            <td>'.$_SESSION['giohang'][$i][1].'</td>
                         
                            <td>'.$_SESSION['giohang'][$i][2].'</td>
                        
                            <td>'.$_SESSION['giohang'][$i][3].'</td> 
                          
                            <td>
                                <div>'.$tt.'</div>
                                <input type="hidden" name="Thanhtien" value="'.$tt.'">
                            </td>
                            <td>
                                <a href="cart.php?delid='.$i.'"><i class="fas fa-trash-alt"></i></a>
                            </td>
                        </tr>';
                        
                }
                echo '<form  action="cart.php"  method="post" enctype="multipart/form-data" >
                <tr>
                <th style="background-color: #CCC;" colspan="4">Tổng Đơn Hàng (VNĐ)</th>
                <th style="background-color: #CCC;">
                              <div >'.$Tongsoluong.'(sản phẩm)</div>
                              <input type="hidden" name="Tongsoluong" value="'.$Tongsoluong.'">
                          </th>
                          <th style="background-color: #CCC;">
                              <div >'.$tong.'(VNĐ)</div>
                  <input type="hidden"id="" name="tong" value="'.$tong.'">
                              
                          </th>
      
                    </tr>
                    </form>
                    ';
            }else{
                echo "<script >Giỏ hàng rỗng!</script>";
            }    
        }
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
    .cart-page{
        padding-top:200px;
        width: 100%;
        float: left;
       
    }
    .form-order
    {
        float: left;
        width: 50%;
        padding-left:50px ;
        padding-top:150px;
    }
    .form-order h1
    {
        text-align:center;
    }
</style>
</head>

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
<!-- Main -->
<div class="cart-page">
<form  action="cart.php"  method="post" enctype="multipart/form-data" >
    <h1>GIỎ HÀNG</h1>
    <?php

    ?>
    <?php
                switch($_POST['confirm_order'])
                {
                    case 'TIẾN HÀNH THANH TOÁN >>':
					{
                       
						          
                        
                        {
                           
                            $tensp=$_SESSION['giohang'][$i][1];
                            $hinhsp=$_SESSION['giohang'][$i][0];
                            $giasp=$_SESSION['giohang'][$i][2];
                            $soluong=$_SESSION['giohang'][$i][3];      
                            $Thanhtien=$giasp*$soluong;
                            $Tongtien=$_REQUEST['tong']; 
                            $idKH=$MaKH; 
                            $Tongsoluong=$_REQUEST['Tongsoluong']; 
                            

                            if($idKH!='')
                            {								
                                        if($p->themxoasua("INSERT INTO tbl_cthd(MaKH,Tongsoluong ,Tongtien)
                                        VALUES ('$MaKH', '$Tongsoluong', '$Tongtien')") ==1 )
                                        {
                                            $id=mysql_insert_id();
                                            header("location:thanhtoan.php?id=$id");
                                        } 
                                        else
                                        {
                                            echo '123';
                                        } 								
							}
                        }
                        
							if($MaKH=='')
							{
                               echo'<p style="text-align:center;color:red;font-size:30px;">Bạn cần đăng nhập để đặt hàng!!!. <a style="color:blue;" href="login.php">Login Here</a></p>';
                              //  echo "<script>alert('Bạn cần đăng nhập để đặt hàng!!!!!');</script>"; 
                              unset($_SESSION['giohang']);	
							}
                        
		break;
                        }
                }
                ?>
                
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="cart-page-inner">
                            <div class="table-responsive">
                                <table class="table table-bordered">
                                    <thead class="thead-light">
                                        <tr>
                                      
                            <th>STT</th>
                            <th>Hình</th>
                            <th>Tên sản phẩm</th>
                            <th>Đơn giá</th>
                            <th>Số Lượng</th>
                            <th>Thành tiền(VNĐ)</th>

                                        </tr>
                                    </thead>
                        <?php 
                         //echo'<pre>'; var_dump($_SESSION['giohang']);
                         showgiohang(); ?>
                    </table>
                </div>
                </div>
                </div>
                </div>

            
            <input style="float:right;"  class="btn btn-primary" type="submit" value="TIẾN HÀNH THANH TOÁN >>" name="confirm_order">
            <a href="categories.php"><input class="btn btn-success" type="button" value="TIẾP TỤC ĐẶT HÀNG <<"></a>
                    <a href="cart.php?delcart=1"><input class="btn btn-danger" type="button" value="XÓA GIỎ HÀNG"></a>
                </div>
      
                
            </div>
            </form>
          
</body>
</html>