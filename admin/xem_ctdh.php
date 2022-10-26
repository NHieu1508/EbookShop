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
<?php
  $p->xem_ctdh("SELECT *
  FROM tbl_donhang,tbl_khachhang WHERE  tbl_donhang.MaKH=tbl_khachhang.MaKH AND tbl_donhang.MaKH='$layMaKH'");
  ?>
<?php
include("footer.php");
?>