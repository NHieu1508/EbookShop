<?php
session_start();
ob_start();
include ("class/classCNM.php");
$p=new tmdt();
if (isset($_SESSION['MaKH'])){

    $MaKH=$_SESSION['MaKH'];
 }
$layid=0;
 if(isset($_REQUEST['id'])) 
{
	$layid=$_REQUEST['id'];
}

?>
<?php
 function showgiohang(){
	if(isset($_SESSION['giohang'])&&(is_array($_SESSION['giohang']))){
		if(sizeof($_SESSION['giohang'])>0){
			$tong=0;
			for ($i=0; $i < sizeof($_SESSION['giohang']); $i++) { 
				$tt=$_SESSION['giohang'][$i][2] * $_SESSION['giohang'][$i][3];
				$tong+=$tt;
        $Tongsoluong+=$_SESSION['giohang'][$i][3];
				echo '<tr>
						<td>'.($i+1).'</td>
						<td><img src="images/'.$_SESSION['giohang'][$i][0].'" alt="" width=150px;height=150px; ></td>
					   
						<td>'.$_SESSION['giohang'][$i][1].'</td>
					 
						<td>'.$_SESSION['giohang'][$i][2].'</td>
					
						<td>'.$_SESSION['giohang'][$i][3].'</td> 
					  
						<td>
							<div>'.$tt.'</div>
							<input type="hidden" name="Thanhtien" value="'.$tt.'">
						</td>
					</tr>';
					
			}
			echo '<form  action="thanhtoan.php?MaKH='.$MaKH.'"  method="post" enctype="multipart/form-data" >
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
        </form>';
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
    .form-order
    {
        float: left;
        width: 50%;
        padding-left:15px ;
        padding-top:15px;
    }
    .form-order h1
    {
      
        text-align:center;
		color:blue;
    border-bottom: 1px solid black;
    }
	.cart-page
	{
		float: left;
        width: 50%;
        padding-left:15px ;
        padding-top:15px;
	}
	.cart-page h1
	{
		text-align:center;
		color:blue;
    border-bottom: 1px solid black;
	}
  #qrcode
  {
    float:left;
    color:black;
    font-size:large;
  }
</style>
</head>

<body>
<form  action="thanhtoan.php"  method="post" enctype="multipart/form-data" >
<div class="form-order">
    <h1>THÔNG TIN ĐẶT HÀNG </h1>
    <div class="form-group">
    <label for="id">Mã đơn hàng</label>
    <input type="text" class="form-control" placeholder="" id="id" name="id" value="<?php echo $layid; ?>">
  </div>
    <div class="form-group">
    <label for="Hoten">Họ tên</label>
    <input type="text" class="form-control" placeholder="" id="Hoten" name="Hoten" value="<?php echo $p->laycot_KH("select Hoten from tbl_khachhang where MaKH='$MaKH'"); ?>">
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
  <div class="form-group">
 <label for="">Phương thức thanh toán
  <select name="Pttt" id="Pttt" class="form-control">
  <option  value="Thanh toán khi nhận hàng">Thanh toán khi nhận hàng</option>
  <option  value ="VNPay">VNPay</option>
  <input type="hidden" name="tienmat" value="Thanh toán khi nhận hàng" >
  <input type="hidden" name="VNPay" value="VNPay" >
  </select>
  </label>
  </div>
  

</div>

<div class="cart-page">

    <h1>ĐƠN HÀNG</h1>
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
                        <?php echo'<pre>';
                         showgiohang();
                         ?>
                    </table>
                </div>
                <input class="btn btn-primary" type="submit" value="THANH TOÁN" name="payment">
                </div>
                </div>
                </div>
                </div>      
            </div>
            </form>
            <?php
include("vnpay_php/config.php"); 
$vnp_TxnRef =  $_REQUEST['id']; //Mã đơn hàng. Trong thực tế Merchant cần insert đơn hàng vào DB và gửi mã này sang VNPAY
$vnp_OrderInfo = 'Thanh toán đơn hàng';
$vnp_OrderType = 'billpayment';
$vnp_Amount =  100000 * 100;
$vnp_Locale = "vn";
$vnp_BankCode = 'NCB';
$vnp_IpAddr = $_SERVER['REMOTE_ADDR'];
//Add Params of 2.0.1 Version
$vnp_ExpireDate = $expire;
//
$inputData = array(
    "vnp_Version" => "2.1.0",
    "vnp_TmnCode" => $vnp_TmnCode,
    "vnp_Amount" => $vnp_Amount,
    "vnp_Command" => "pay",
    "vnp_CreateDate" => date('YmdHis'),
    "vnp_CurrCode" => "VND",
    "vnp_IpAddr" => $vnp_IpAddr,
    "vnp_Locale" => $vnp_Locale,
    "vnp_OrderInfo" => $vnp_OrderInfo,
    "vnp_OrderType" => $vnp_OrderType,
    "vnp_ReturnUrl" => $vnp_Returnurl,
    "vnp_TxnRef" => $vnp_TxnRef,
    "vnp_ExpireDate"=>$vnp_ExpireDate
);

if (isset($vnp_BankCode) && $vnp_BankCode != "") {
    $inputData['vnp_BankCode'] = $vnp_BankCode;
}

ksort($inputData);
$query = "";
$i = 0;
$hashdata = "";
foreach ($inputData as $key => $value) {
    if ($i == 1) {
        $hashdata .= '&' . urlencode($key) . "=" . urlencode($value);
    } else {
        $hashdata .= urlencode($key) . "=" . urlencode($value);
        $i = 1;
    }
    $query .= urlencode($key) . "=" . urlencode($value) . '&';
}

$vnp_Url = $vnp_Url . "?" . $query;
if (isset($vnp_HashSecret)) {
    $vnpSecureHash =   hash_hmac('sha512', $hashdata, $vnp_HashSecret);//  
    $vnp_Url .= 'vnp_SecureHash=' . $vnpSecureHash;
}
$returnData = array('code' => '00'
    , 'message' => 'success'
    , 'data' => $vnp_Url);
    if (isset($_POST['redirect'])) {
        header('Location: ' . $vnp_Url);
        die();
    } else {
        
    }
 
 ?>

            <?php 
        
                switch($_POST['payment'])
                {
                    case 'THANH TOÁN':
                      {
                        for ($i=0; $i < sizeof($_SESSION['giohang']); $i++)
                        {
                                $tensp=$_SESSION['giohang'][$i][1];
                                    $hinhsp=$_SESSION['giohang'][$i][0];
                                    $giasp=$_SESSION['giohang'][$i][2];
                                    $soluong=$_SESSION['giohang'][$i][3];      
                                    $Thanhtien=$giasp*$soluong;
                              $id=$_REQUEST['id'];
                       $Tongsoluong=$_REQUEST['Tongsoluong'];
                       $Tongtien=$_REQUEST['tong']; 
                       $Pttt=$_REQUEST['Pttt'];
                       $tienmat=$_REQUEST['tienmat'] ;
                       $VNPay=$_REQUEST['VNPay']  ;  
                      if($_REQUEST['Pttt']==$VNPay)
                      {
                        if($p->themxoasua("INSERT INTO tbl_donhang(MaKH,Tensach ,Anh,Gia,Soluong_mua,Thanhtien,Trangthai,Pttt,id)
                        VALUES ('$MaKH', '$tensp', '$hinhsp','$giasp','$soluong','$Thanhtien','Chờ xử lý','$Pttt','$id')") ==1 )
                                       
                           {           
                            header('Location: ' . $vnp_Url);
                            unset($_SESSION['giohang']);
                           }
                           else
                           {
                            echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Thanh toán không thành công!!!</strong></p>'; 
                           }
                      } 
                    }  
                      for ($i=0; $i < sizeof($_SESSION['giohang']); $i++)
                {
                        $tensp=$_SESSION['giohang'][$i][1];
                            $hinhsp=$_SESSION['giohang'][$i][0];
                            $giasp=$_SESSION['giohang'][$i][2];
                            $soluong=$_SESSION['giohang'][$i][3];      
                            $Thanhtien=$giasp*$soluong;
                      $id=$_REQUEST['id'];
						   $Tongsoluong=$_REQUEST['Tongsoluong'];
               $Tongtien=$_REQUEST['tong']; 
               $Pttt=$_REQUEST['Pttt'];
               $tienmat=$_REQUEST['tienmat'] ;
               $VNPay=$_REQUEST['VNPay']  ;  
               
               if($_REQUEST['Pttt']==$tienmat)
                            {								
							                 if($p->themxoasua("INSERT INTO tbl_donhang(MaKH,Tensach ,Anh,Gia,Soluong_mua,Thanhtien,Trangthai,Pttt,id)
                                VALUES ('$MaKH', '$tensp', '$hinhsp','$giasp','$soluong','$Thanhtien','Chờ xử lý','$Pttt','$id')") ==1 )
                               
									 {
                    
                   echo "<script>alert('Đặt hàng thành công. Xin cảm ơn Quý Khách <3.');</script>"; 
                   
                   echo("<script>window.location = 'Camon.php?id=$id';</script>");
                   unset($_SESSION['giohang']);
									 }
									 else
									 {
										echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Thanh toán không thành công!!!</strong></p>'; 
									 }
							}
            }
  
                             
		break;
                        }
                          
                }
                ?>
</body>


</html>
