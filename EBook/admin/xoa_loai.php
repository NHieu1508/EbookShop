<?php
ob_start();
include ("header.php");

$layid=0;
if(isset($_REQUEST['Maloai']))
{
	$layid=$_REQUEST['Maloai'];
	}
?>

    
    <div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1>Xóa sản phẩm</h1> 
           <?php
switch ($_POST['nut'])
	{
		case 'Xóa':
      {
$idxoa=$_REQUEST['Maloai'];
if($idxoa>0)
{
if($p->themxoasua("delete from tbl_loai where Maloai='$idxoa' LIMIT 1 ")==1)
{
  header("location:danhsachloaisach.php");
}
else
{
echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Xóa không thành công</strong></p>';
}
}
  else
{
  echo 'Vui lòng chọn sản phẩm cần xóa';
}
break;
}
    }
    ?>
        </div>
        <div class="card-body">
            <form action=""enctype="multilpart/form-data" method="post">
            <div class="form-group">
                  <label for="">Mã loại</label>
                  <input type="text" readonly  class="form-control" value="<?php echo $p->laycot("select Maloai from tbl_loai where Maloai='$layid'"); ?>" >
                </div>
                <div class="form-group">
                  <label for="">Tên sản phẩm</label>
                  <input type="text"class="form-control"value="<?php echo $p->laycot("select Tenloai from tbl_loai where Maloai='$layid'"); ?>" >
                </div>
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Xóa" />
</form>


<?php
include ("footer.php");
?>
