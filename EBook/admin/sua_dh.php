<?php
ob_start();
  include("header.php");
  $layMaKH=0;
  if(isset($_REQUEST['MaKH'])) 
  {
    $layMaKH=$_REQUEST['MaKH'];
  }
    $layDH=0;
    if(isset($_REQUEST['Madonhang'])) 
{
	$layDH=$_REQUEST['Madonhang'];
}
?>
  <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1>Sửa thông tin đơn hàng</h1> 
        </div>
        <div class="card-body">
            <form action=""enctype="multilpart/form-data" method="post">
            <div class="form-group">
                  <label for="MaKH">Mã khách hàng</label>
                  <input readonly="readonly" type="text" name="MaKH" id="MaKH" class="form-control" value="<?php echo $p->laycot_KH("select MaKh from tbl_donhang where Madonhang='$layDH'"); ?>" >
                </div>
                <div class="form-group">
                  <label for="Madonhang">Mã đơn hàng</label>
                  <input readonly="readonly" type="text" name="Madonhang" id="Madonhang" class="form-control" 
                  value="<?php echo $p->laycot_KH("select Madonhang from tbl_donhang where Madonhang='$layDH'"); ?>">
                </div>
                <div class="form-group">
                  <label for="TT">Trạng thái đơn hàng</label>
                  <input type="text" name="TT" id="TT" class="form-control" 
                  value="<?php echo $p->laycot_KH("select Trangthai from tbl_donhang where Madonhang='$layDH'"); ?>">
                </div>
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Sửa" />
                </form>
                <?php
switch ($_POST['nut'])
	{
		case 'Sửa':
      {
$Madonhang=$_REQUEST['Madonhang'];
$MaKHsua=$_REQUEST['MaKH'];
$Trangthai=$_REQUEST['TT'];

if($MaKHsua>0)
{
    
if($p->themxoasua("UPDATE tbl_donhang SET Trangthai = '$Trangthai' WHERE Madonhang = '$Madonhang' LIMIT 1 ")==1)
{
header("location:chitietdonhang.php?MaKH=$layMaKH");
}
else
{
echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Sửa không thành công</strong></p>';
}
}
  else
{
  echo '<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Vui lòng chọn đơn hàng cần sửa</strong></p>';
}
break;
}
    }
    ?>

<?php
   include("footer.php");
?>
