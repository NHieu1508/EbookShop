<?php
include("header.php");
if(isset($_REQUEST['MaKH'])) 
{
	$MaKH=$_REQUEST['MaKH'];
} 
?>
<h1 style="color:green; text-align:center;">DANH SÁCH NHỮNG KHÁCH HÀNG CÓ ĐƠN HÀNG</h1>
</br>
<form action="" method="post">
<div style="padding-top:20px" align="center"> <h3><strong>TÌM KIẾM ĐƠN HÀNG</strong></h3></div>
  <div style="padding-top:20px;" id="txtSearch" class="input-group">
  
   <input placeholder="Nhập Mã Khách Hàng....." name="txtSearch" type="search"  class="form-control" />
  
  <button  name="btnSearch" value="search" type="submit" class="btn btn-primary">Search</button>
  </div>
  </form>
  <?php
  if(isset($_REQUEST['btnSearch']))
  {
	  $search = $_REQUEST['txtSearch'];
		$p->timkiem($search);
		 
  }
  else
  {
  $p->load_dsdh("SELECT *
  FROM tbl_donhang d
  INNER JOIN tbl_khachhang k ON d.MaKH=k.MaKH 
  WHERE d.MaKH=k.MaKH
  GROUP BY d.MaKH");
  }
?>
<?php
include("footer.php");
?>