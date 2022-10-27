<?php
include("header.php");
$layMaKH=0;
if(isset($_REQUEST['MaKH'])) 
{
	$layMaKH=$_REQUEST['MaKH'];
}
if(isset($_REQUEST['Madonhang'])) 
{
	$Madonhang=$_REQUEST['Madonhang'];
}
?>
<h1>Đơn hàng của khách hàng: <span style='color:red;'> <?php $p->loadKH_admin("SELECT Hoten from tbl_khachhang WHERE MaKH='$layMaKH'"); 
 ?> </span></h1>
 <br>
  <?php

   $p->load_ctdh("SELECT * FROM tbl_donhang d JOIN tbl_khachhang k WHERE  d.MaKH=k.MaKH AND d.MaKH='$layMaKH'");

?>
<?php
include("footer.php");
?>