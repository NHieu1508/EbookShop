<?php
ob_start();
include ("header.php");

$layid=0;
if(isset($_REQUEST['Masach']))
{
	$layid=$_REQUEST['Masach'];
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
$idxoa=$_REQUEST['Masach'];
if($idxoa>0)
{
if($p->themxoasua("delete from tbl_sach where Masach='$idxoa' LIMIT 1 ")==1)
{
  header("location:Danhsachsanpham.php");
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
                  <label for="Masach">Mã sách</label>
                  <input type="text" name="Masach" id="Masach" class="form-control" value="<?php echo $p->laycot("select Masach from tbl_sach where Masach='$layid'"); ?>" >
                </div>
            <div class="form-group">
            <label for="Maloai">Thể loại</label><br>
                  <?php $p->load_loaisach('select s.Maloai,l.Tenloai from tbl_sach s INNER JOIN tbl_loai l ON l.Maloai=s.Maloai',$idloai); ?>
                </div>
            <div class="form-group">
                  <label for="">Mã Voucher</label>
                  <input type="text" name="mavoucher" id="mavoucher" class="form-control"value="<?php echo $p->laycot("select Mavoucher from tbl_sach where Masach='$layid'"); ?>"  >
                </div>
                <div class="form-group">
                  <label for="Tensach">Tên sản phẩm</label>
                  <input type="text" name="Tensach" id="Tensach" class="form-control"value="<?php echo $p->laycot("select Tensach from tbl_sach where Masach='$layid'"); ?>" >
                </div>
           
            <div class="form-group">
                  <label for="Anh">Ảnh sản phẩm</label>
                  <img width="256" src="../images/<?php echo $p->laycot("select Anh from tbl_sach where Masach='$layid'"); ?>" alt="" srcset="">
                  <input type="file" name="Anh" id="Anh"value="<?php echo $p->laycot("select Anh from tbl_sach where Masach='$layid'"); ?>" >
                </div>
                <div class="form-group">
                  <label for="Gia">Giá sản phẩm</label>
                  <input type="number" name="Gia" id="Gia" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot("select Gia from tbl_sach where Masach='$layid'"); ?>">
                </div>
                <div class="form-group">
                  <label for="NXB">NXB</label>
                  <input type="text" name="NXB" id="NXB" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot("select NXB from tbl_sach where Masach='$layid'"); ?>">
                </div>
                <div class="form-group">
                  <label for="Soluong">Số lượng</label>
                  <input type="number" name="Soluong" id="Soluong" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot("select Soluong from tbl_sach where Masach='$layid'"); ?>">
                </div>
                <div class="form-group">
                  <label for="Tentacgia">Tên tác giả</label>
                  <input type="text" name="Tentacgia" id="Tentacgia" class="form-control" placeholder="" aria-describedby="helpId" value="<?php echo $p->laycot("select Tentacgia from tbl_sach where Masach='$layid'"); ?>">
                </div>
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Xóa" />
                </form>

<?php
include ("footer.php");
?>
