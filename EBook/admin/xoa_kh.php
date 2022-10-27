<?php
ob_start();
  include("header.php");

$layMaKH=0;
if(isset($_REQUEST['MaKH']))
{
	$layMaKH=$_REQUEST['MaKH'];
	}
?>
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1>Xóa thông tin khách hàng</h1> 
        </div>
        <div class="card-body">
            <form action=""enctype="multilpart/form-data" method="post">
            <div class="form-group">
                  <label for="MaKH">Mã khách hàng</label>
                  <input readonly="readonly" type="text" name="MaKH" id="MaKH" class="form-control" value="<?php echo $p->laycot_KH("select MaKh from tbl_khachhang where MaKH='$layMaKH'"); ?>" >
                </div>
            <div class="form-group">
                  <label for="Hoten">Họ tên</label>
                  <input type="text" name="Hoten" id="Hoten" class="form-control" value="<?php echo $p->laycot_KH("select Hoten from tbl_khachhang where MaKH='$layMaKH'"); ?>" >
                </div>
            <div class="form-group">
                  <label for="Diachi">Địa chỉ</label>
                  <input type="text" name="Diachi" id="Diachi" class="form-control"value="<?php echo $p->laycot_KH("select Diachi from tbl_khachhang where MaKH='$layMaKH'"); ?>"  >
                </div>
                <div class="form-group">
                  <label for="sdt">Số điện thoại</label>
                  <input type="text" name="Sdt" id="Sdt" class="form-control"value="<?php echo $p->laycot_KH("select Sdt from tbl_khachhang where MaKH='$layMaKH'"); ?>" >
                </div>
                <div class="form-group">
                  <label for="Email">Email</label>
                  <input type="email" name="Email" id="Email" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot_KH("select Email from tbl_khachhang where MaKH='$layMaKH'"); ?>">
                </div>
                <div class="form-group">
                  <label for="Password">Password</label>
                  <input type="text" readonly="readonly" name="Password" id="Password" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot_KH("select Password from tbl_khachhang where MaKH='$layMaKH'"); ?>">
                </div>
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Xóa" />
                </form>
                <?php
switch ($_POST['nut'])
	{
		case 'Xóa':
      {
$MaKHxoa=$_REQUEST['MaKH'];
if($MaKHxoa>0)
{
if($p->themxoasua("delete from tbl_khachhang where MaKH='$MaKHxoa' LIMIT 1 ")==1)
{
  header("location:danhsachkhachhang.php");
}
else
{
echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Xóa không thành công</strong></p>';
}
}
  else
{
  echo '<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Vui lòng chọn khách hàng cần xóa</strong></p>';
}
break;
}
    }
    ?>

<?php
   include("footer.php");
?>
