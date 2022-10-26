<?php
ob_start();
include ("header.php");
?>

<div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1>Thêm sản phẩm</h1> 
        </div>
        <div class="card-body">
            <form action="them_sp.php"  method="post" enctype="multipart/form-data" >
            <div class="form-group">
                  <label for="maloai">Thể loại</label><br>
                  <?php $p->load_loaisach('select * from tbl_loai',$idloai); ?>
                </div>
            <div class="form-group">
                  <label for="mavoucher">Mã Voucher</label>
                  <input type="text" name="mavoucher" id="mavoucher" class="form-control"  >
                </div>
                <div class="form-group">
                  <label for="txtten">Tên sản phẩm</label>
                  <input type="text" name="txtten" id="txtten" class="form-control" >
                </div>
                <div class="form-group">
                  <label for="myfile">Ảnh sản phẩm</label>
                  <input type="file" name="myfile" id="myfile" >
                  </div>
                <div class="form-group">
                  <label for="txtgia">Giá sản phẩm</label>
                  <input type="text" name="txtgia" id="txtgia" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="nxb">NXB</label>
                  <input type="text" name="nxb" id="nxb" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="soluong">Số lượng</label>
                  <input type="number" name="soluong" id="soluong" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <div class="form-group">
                  <label for="tentacgia">Tên tác giả</label>
                  <input type="text" name="tentacgia" id="tentacgia" class="form-control" placeholder="" aria-describedby="helpId">
                </div>
                <input type="submit" class="btn btn-success" name="nut" id="nut" value="Thêm sản phẩm" />
                </form>
                <?php
                switch($_POST['nut'])
                {
                    case 'Thêm sản phẩm':
					{
						     
						                $Maloai=$_REQUEST['maloai'];
							              $Mavoucher=$_REQUEST['mavoucher'];
                            $Tensach=$_REQUEST['txtten'];
                            $Gia=$_REQUEST['txtgia'];
                            $NXB=$_REQUEST['nxb'];
                            $Soluong=$_REQUEST['soluong'];
                            $Tentacgia=$_REQUEST['tentacgia'];
                            $name=$_FILES['myfile']['name'];
	                          $type=$_FILES['myfile']['type'];
	                          $tmp_name=$_FILES['myfile']['tmp_name'];
	                          $size=$_FILES['myfile']['size'];
                            if($name!='' && $Tensach!='' && $Maloai!=''&& $Mavoucher!=''&& $Gia!=''&& $Soluong!=''&& $Tentacgia!='')
                            {
								if($p->uploadfiles($name,$tmp_name,"../images")==1)
								{
								   if($p->themxoasua("INSERT INTO tbl_sach (Maloai ,Mavoucher ,Tensach ,Anh,Gia ,NXB ,Soluong ,Tentacgia)
                  VALUES ( '$Maloai', '$Mavoucher', ' $Tensach', '$name', '$Gia', ' $NXB', '$Soluong', '$Tentacgia')")==1)
									 {
                    header('Location:danhsachsanpham.php'); 
									 }
									 else
									 {
										echo'Thêm không thành công'; 
									 }
								}
								else
								{
									echo 'Up hình không thành công.';
								}
							}
							else
							{
								echo 'Vui lòng điền đầy đủ thông tin...';
							}
		break;
                        }
                }
                ?>
        </div>
    </div>
</div>
<?php
include ("footer.php");
?>