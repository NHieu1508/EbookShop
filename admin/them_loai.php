<?php
ob_start();
include ("header.php");
?>
<style>
    .container-fluid{
        width: 50%;
    }
    
</style>
<div class="container-fluid">
    <div class="card">
        <div class="card-header">
           <h1>Thêm Loại Sách</h1> 
        </div>
        <div class="card-body">
            <form  action="them_loai.php"  method="post" enctype="multipart/form-data" >
            <div class="form-group">
                  <label for="Tenloai">Loại sách</label>
                  <input type="text" name="Tenloai" id="Tenloai" class="form-control"  >
                </div>

                </div>
                <input style="width: 25%;" type="submit" class="btn btn-success" name="nut" id="nut" value="Thêm loại sách" />
                </form>
</div>
                <?php
                switch($_POST['nut'])
                {
                    case 'Thêm loại sách':
					{
						     
                            $Tenloai=$_REQUEST['Tenloai'];

                            if($Tenloai!='')
                            {								
							 if($p->themxoasua("INSERT INTO tbl_loai (Tenloai) VALUES ('$Tenloai')") ==1 )
									 {
                                        echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Thêm thành công</strong></p>';  
									 }
									 else
									 {
										echo'<p style="color:green; font-size:1.6rem;text-align:center;"><strong>Thêm không thành công!!!</strong></p>'; 
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