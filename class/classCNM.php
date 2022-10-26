<?php
include ("classUpload.php");
class tmdt extends upfiles
{ 
	private function connect()
	{
		$con=mysql_connect ("localhost","ebook","123456");
		if(!$con)
		{
			echo 'Khong ket noi csdl'; 
			exit(); 
		}
			
		else 
		{
				mysql_select_db("db_ebook"); 
				mysql_query("SET NAME UTF8");
				return $con;
		}
		}
		public function mylogin($Email,$Password)
		{
			$Password = md5($Password);
			$link = $this->connect();
			$sql = "select * from tbl_khachhang where Email = '$Email' and Password = '$Password' limit 1";
			$ketqua = mysql_query($sql,$link);
			$i = mysql_num_rows($ketqua);
			if($i==1)
			{
			    while ($row=mysql_fetch_array ($ketqua))
				{
				  $MaKH=$row['MaKH'];
				  $Hoten=$row['Hoten'];
				  $Diachi=$row['Diachi'];
				  $Sdt=$row['Sdt'];
				  $Email=$row['Email'];
				  $Password=$row['Password'];
					session_start ();
					$_SESSION['MaKH'] = $MaKH;
					$_SESSION['Hoten'] = $Hoten;
					$_SESSION['Diachi'] = $Diachi;
					$_SESSION['Sdt'] = $Sdt;
					$_SESSION['Email'] = $Email;
					$_SESSION['Password'] = $Password;
	
				}
				return 1;
			}
			else
			{
			    return 0;
			}
		}
		public function mylogin_admin($Email,$Password)
		{
			$Password = $Password;
			$link = $this->connect();
			$sql = "select * from tbl_quanly where Email = '$Email' and Password = '$Password' limit 1";
			$ketqua = mysql_query($sql,$link);
			$i = mysql_num_rows($ketqua);
			if($i==1)
			{
			    while ($row=mysql_fetch_array ($ketqua))
				{
				  $MaQL=$row['MaQL'];
				  $Hoten=$row['Hoten'];
				  $Email=$row['Email'];
				  $Diachi=$row['Diachi'];
				  $Password=$row['Password'];
					session_start ();
					$_SESSION['MaQL'] = $MaQL;
					$_SESSION['Hoten'] = $Hoten;
					$_SESSION['Email'] = $Email;
					$_SESSION['Diachi'] = $Diachi;
					$_SESSION['Password'] = $Password;
	
				}
				return 1;
			}
			else
			{
			    return 0;
			}
		}
		public function confirmlogin($MaQl,$Hoten,$Email,$Diachi,$Password)
		{
			$link = $this->connect();
			$sql = "select MaQL from tbl_quanly where MaQl='$MaQl' and Hoten='$Hoten' and Email ='$Email' and Diachi ='$Diachi' and Password='$Password' limit 1 ";
			$ketqua = mysql_query ($sql,$link);
			$i = mysql_num_rows ($ketqua);
			if($i!=1)
			{
				
				header('Location:login_admin.php');
			}
		}
		public function loadten($sql)
		{
			$link=$this->connect();
			$ketqua= mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
			   
				while ($row=mysql_fetch_array($ketqua))
				{
					 
				  $MaKH=$row['MaKH'];
				  $Hoten=$row['Hoten'];
				  $Diachi=$row['Diachi'];
				  $Sdt=$row['Sdt'];
				  $Email=$row['Email'];
				  $Password=$row['Password'];
								echo '<li class="account">
								<a href="#">
									'.$Hoten.'
									<i class="fa fa-angle-down"></i>
								</a>
								<ul class="account_selection">
									<li><a href="logout.php"><i class="fa fa-sign-in" aria-hidden="true"></i>Log Out</a></li>
									<li><a href="myaccount.php"><i class="fa fa-user" aria-hidden="true"></i>Account</a></li>
								</ul>
							</li>';
				   }
				}
				else{
					echo 'Đăng nhập để có tài khoản';
				}
		}
		public function loadKH_admin($sql)
		{
			$link=$this->connect();
			$ketqua= mysql_query($sql,$link);
			mysql_close($link);
			$i=mysql_num_rows($ketqua);
			if($i>0)
			{
			   
				while ($row=mysql_fetch_array($ketqua))
				{
					 
				  $MaKH=$row['MaKH'];
				  $Hoten=$row['Hoten'];
				  $Diachi=$row['Diachi'];
				  $Sdt=$row['Sdt'];
				  $Email=$row['Email'];
				  $Password=$row['Password'];
								echo "$Hoten";
				   }
				}
				else{
					echo 'Đăng nhập để có tài khoản';
				}
		}		
		public function load_ctsp($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  while($row=mysql_fetch_array($ketqua))
			  {
				  $Masach=$row['Masach'];
				  $Maloai=$row['Maloai'];
				  $Mavoucher=$row['Mavoucher'];
				  $Tensach=$row['Tensach'];
				  $Anh=$row['Anh'];
				  $Gia=$row['Gia'];
				  $NXB=$row['NXB'];
				  $Soluong=$row['Soluong'];
				  $Tentacgia=$row['Tentacgia'];
				  echo '<form action="cart.php?act=addcart&&Masach='.$Masach.'" method="post">
				  <div class="row">
			<div class="col-lg-7">
				<div class="single_product_pics">
					<div class="row">
						<div class="col-lg-9 image_col order-lg-2 order-1">
							<div class="single_product_image">
								<div class="single_product_image_background" style="background-image:url(images/'.$Anh.')"></div>
								<input type="hidden" name="Anh" value="'.$Anh.'">
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="col-lg-5">
				<div class="product_details">
					<div class="product_details_title">
						<h2>'.$Tensach.'</h2>
						<input type="hidden" name="Tensach" value="'.$Tensach.'">
						
					</div>
					<div style="font-size:large;padding-top:15px;"><strong>Nhà xuất bản:</strong> '.$NXB.' </div>
					<div style="font-size:large;padding-top:15px;"><strong>Tên tác giả:</strong> '.$Tentacgia.' </div>
					<div class="product_price"  style=padding-top:15px;"><strong>Giá:</strong> '.$Gia.'</div>
					<input type="hidden" name="Gia" value="'.$Gia.'">
					
					
					<div class="quantity d-flex flex-column flex-sm-row align-items-sm-center">
						<strong><span style="padding-right:5px;">Quantity:  </span></strong>
					
						<input type="number" name="Soluong" value="1" min="1" max="10">
					
						<a href="cart.php?Masach='.$Masach.'"><input type="submit" name="addcart" value="Add to cart"  class="red_button add_to_cart_button"></a>
						<div class="product_favorite d-flex flex-column align-items-center justify-content-center"></div>
					</div>
					<div class="free_delivery d-flex flex-row align-items-center justify-content-center">
						<span class="ti-truck"></span><span>free delivery</span>
					</div>
				</div>
			</div>
		</div>	
		</form>				
';
				  }
			  }
		}
		public function loadsp($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  while($row=mysql_fetch_array($ketqua))
			  {
				  $Masach=$row['Masach'];
				  $Maloai=$row['Maloai'];
				  $Mavoucher=$row['Mavoucher'];
				  $Tensach=$row['Tensach'];
				  $Anh=$row['Anh'];
				  $Gia=$row['Gia'];
				  $NXB=$row['NXB'];
				  $Soluong=$row['Soluong'];
				  $Tentacgia=$row['Tentacgia'];
				  
				  echo '<form action="cart.php?act=addcart&&Masach='.$Masach.'" method="post">
				  <div class="product-item men">
							<div class="product discount product_filter">
							<input type="hidden" name="Masach" value="'.$Masach.'">
								<div class="product_image">
								<a href="chitietsanpham.php?Masach='.$Masach.'">
								 <img  src="images/'.$Anh.'" alt="">
								 <input type="hidden" name="Anh" value="'.$Anh.'">
									</a>
								</div>
								<div class="favorite favorite_left">
								
								</div>
								<div class="product_info">
									<h6 class="product_name"><a href="chitietsanpham.php?Masach='.$Masach.'">'.$Tensach.'</a>
									<input type="hidden" name="Tensach" value="'.$Tensach.'">
									</h6>
									<div class="product_price">'.$Gia.'
									<input type="hidden" name="Gia" value="'.$Gia.'">
									</div>
									<div>

							<input type="number" name="Soluong" value="1" min="1" max="10">
						</div>
								</div>
							</div>
							<a href="cart.php?Masach='.$Masach.'"><input type="submit" name="addcart" value="Add to cart"  class="red_button add_to_cart_button"></a>
						</div>	
						<div>
						</div>	
						</form>						
';
				  }
			  }
		}

		public function load_donhang($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {	
			  echo 
			  '
			  <table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
			  <tr  >
				<td width="41" height="55" align="center"><strong>Ma don hang</strong></td>
				<td width="132" align="center"><strong>Ten sach</strong></td>
				<td width="87" align="center"><strong>Gia</strong></td>
				<td width="149" align="center"><strong>So luong</strong></td>
				<td width="134" align="center"><strong>Thanh tien</strong></td>
						  </tr>';

			   while($row=mysql_fetch_array($ketqua))
			   {
				  $id=$row['id'];
				  $Tensach=$row['Tensach'];
				  $Gia=$row['Gia'];
				  $Soluong_mua=$row['Soluong_mua'];
				  $Thanhtien=$row['Thanhtien'];
				   echo'<tr  >
				   <td width="41" height="55" align="center">'.$id.'</td>
				   <td width="132" align="center">'.$Tensach.'</td>
				   <td width="87" align="center">'.$Gia.'</td>
				   <td width="149" align="center">'.$Soluong_mua.'</td>
				   <td width="134" align="center" >'.$Thanhtien.'</td>   
				 </tr>';


				   }
				   echo '
				   
				   </table>
				  ';
			  }
			  
		}
		
		public function loadloai($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			   while($row=mysql_fetch_array($ketqua))
			   {
				   $Maloai=$row['Maloai'];
				   $Tenloai=$row['Tenloai'];
				   echo'<a style="hover:red;" href="categories.php?Maloai='.$Maloai.'"><p style="font-size:large;color:blue;">'.$Tenloai.'</p></a> ';
				   echo '<br>';
				   }
			  }
		}
		public function load_tt($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			   while($row=mysql_fetch_array($ketqua))
			   {
				   $Tongtien=$row['Tongtien'];
				   $MaKH=$row['MaKH'];
				 echo   "<input type='text' class='form-control'name='tt' id='tt' value='$Tongtien'>";
				   }
			  }
		}
		public function load_dssp($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
    <td width="41" height="55" align="center"><strong>Mã sách</strong></td>
    <td width="132" align="center"><strong>Tên sách</strong></td>
    <td width="87" align="center"><strong>Giá</strong></td>
    
    <td width="256" align="center"><strong>Ảnh</strong></td>
    <td width="134" align="center"><strong>NXB</strong></td>
    <td width="149" align="center"><strong>Số lượng</strong></td>
    <td width="81" align="center"><strong>Tên tác giả</strong></td>
    <td width="81" align="center"><strong>Thao tác</strong></td>
    
  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				  $Masach=$row['Masach'];
				  $Maloai=$row['Maloai'];
				  $Mavoucher=$row['Mavoucher'];
				  $Tensach=$row['Tensach'];
				  $Anh=$row['Anh'];
				  $Gia=$row['Gia'];
				  $NXB=$row['NXB'];
				  $Soluong=$row['Soluong'];
				  $Tentacgia=$row['Tentacgia'];
				   echo'<tr >
    <td width="41" height="55" align="center">'.$Masach.'</td>
    <td width="132" align="center">'.$Tensach.'</td>
    <td width="87" align="center">'.$Gia.'</td>
    
    <td width="256" align="center"><img width="75%" src="../images/'.$Anh.'">   </td>
    <td width="134" align="center">'.$NXB.'</td>
    <td width="40" align="center">'.$Soluong.'</td>
    <td width="81" align="center">'.$Tentacgia.'</td>
    <td width="81" align="center"><a href="sua_sp.php?Masach='.$Masach.'">  <i class="fas fa-edit"></i> </a>|| <a href="xoa_sp.php?Masach='.$Masach.'"> <i class="fas fa-trash-alt"></i> </a></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }
			  
		}

		public function load_dsdh($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
    <td width="41" height="55" align="center"><strong>MaKH</strong></td>
    <td width="132" align="center"><strong>Họ tên</strong></td>
    <td width="256" align="center"><strong>Địa chỉ</strong></td>
    
    <td width="87" align="center"><strong>Số điện thoại</strong></td>
    <td width="134" align="center"><strong>Email</strong></td>
	<td width="149" align="center"><strong>Thao tác</strong></td>
  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				  $MaKH=$row['MaKH'];
				  $Hoten=$row['Hoten'];
				  $Diachi=$row['Diachi'];
				  $Sdt=$row['Sdt'];
				  $Email=$row['Email'];
				  $Password=$row['Password'];
				   echo'<tr >
    <td width="41" height="55" align="center">'.$MaKH.'</td>
    <td width="132" align="center">'.$Hoten.'</td>
    <td width="87" align="center">'.$Diachi.'</td>
    
    <td width="256" align="center">'.$Sdt.'   </td>
    <td width="134" align="center">'.$Email.'</td>
    <td width="81" align="center"><a href="chitietdonhang.php?MaKH='.$MaKH.'"> <i class="fas fa-eye"></i> </a></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }
			  
		}
		public function xem_ctdh()
	{
		$link=$this->connect();
		$ketqua=mysql_query($sql,$link);
		mysql_close($link);
		$i=mysql_num_rows($ketqua);
		if($i>0)
					{
						  
						echo '<table width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
						<tr  >
						<td width="41" height="55" align="center"><strong>Mã đơn hàng</strong></td>
						  <td width="41" height="55" align="center"><strong>Mã KH</strong></td>
						  <td width="132" align="center"><strong>Tên sách</strong></td>
						  <td width="256" align="center"><strong>Giá</strong></td>
						  
						  <td width="87" align="center"><strong>Số lượng </strong></td>
						  <td width="134" align="center"><strong>Thành tiền</strong></td>
						  <td width="134" align="center"><strong>Trạng thái</strong></td>
						  <td width="149" align="center"><strong>Thao tác</strong></td>
						</tr>';
						while ($row = mysql_fetch_array($sql)) 
						{
				 $Madonhang=$row['Madonhang'];
				  $MaKH=$row['MaKH'];
				  $Tensach=$row['Tensach'];
				  $Gia=$row['Gia'];
				  $Soluong=$row['Soluong_mua'];
				  $Thanhtien=$row['Thanhtien'];
				  $Trangthai=$row['Trangthai'];
				   echo'<tr >
				   <td width="41" height="55" align="center">'.$Madonhang.'</td>
    <td width="41" height="55" align="center">'.$MaKH.'</td>
    <td width="132" align="center">'.$Tensach.'</td>
    <td width="87" align="center">'.$Gia.'</td>
    
    <td width="256" align="center">'.$Soluong.'   </td>
    <td width="134" align="center">'.$Thanhtien.'</td>
	<td width="134" align="center"><strong style="color:blue;">'.$Trangthai.'</strong></td>
    <td width="81" align="center"><a href="sua_dh.php?Madonhang='.$Madonhang.'"> Cập nhật </a></td> 
  </tr> ';
						}
						echo '</table>';
							
					}
					else
					{
						echo 'Không tìm thấy kết quả!!!';
					}
				
	}

		public function timkiem($search)
	{
				
				if(empty($search))
				{
					echo 'Vui lòng nhập Mã Khách Hàng để tìm kiếm!!!';
				}
				else
				{
                	$query = "Select * FROM tbl_khachhang where MaKH  like '%$search%'";
					$link= $this->connect();
					$sql= mysql_query($query);
					$num = mysql_num_rows($sql);
					if ($num > 0 && $search != "") 
					{
						  
						echo '<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
    <td width="41" height="55" align="center"><strong>MaKH</strong></td>
    <td width="132" align="center"><strong>Họ tên</strong></td>
    <td width="256" align="center"><strong>Địa chỉ</strong></td>
    
    <td width="87" align="center"><strong>Số điện thoại</strong></td>
    <td width="134" align="center"><strong>Email</strong></td>
	<td width="149" align="center"><strong>Thao tác</strong></td>
  </tr>';
						while ($row = mysql_fetch_array($sql)) 
						{
							$MaKH=$row['MaKH'];
							$Hoten=$row['Hoten'];
							$Diachi=$row['Diachi'];
							$Sdt=$row['Sdt'];
							$Email=$row['Email'];
							$Password=$row['Password'];
							 echo'<tr >
			  <td width="41" height="55" align="center">'.$MaKH.'</td>
			  <td width="132" align="center">'.$Hoten.'</td>
			  <td width="87" align="center">'.$Diachi.'</td>
			  
			  <td width="256" align="center">'.$Sdt.'   </td>
			  <td width="134" align="center">'.$Email.'</td>
			  <td width="81" align="center"><a href="chitietdonhang.php?MaKH='.$MaKH.'"> Xem </a></td> 
			</tr> ';
						  
						}
						echo '</table>';
							
					}
					else
					{
						echo 'Không tìm thấy kết quả!!!';
					}
				}
	}


		public function load_ctdh($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table width="1685" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
  <td width="81" height="55" align="center"><strong>Mã đơn hàng</strong></td>
    <td width="41" height="55" align="center"><strong>Mã KH</strong></td>
    <td width="132" align="center"><strong>Tên sách</strong></td>
    <td width="256" align="center"><strong>Giá</strong></td>
    <td width="87" align="center"><strong>Số lượng </strong></td>
    <td width="134" align="center"><strong>Thành tiền</strong></td>
	<td width="194" align="center"><strong>Phương thức thanh toán</strong></td>
	<td width="134" align="center"><strong>Trạng thái</strong></td>
	<td width="149" align="center"><strong>Thao tác</strong></td>
  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				$id=$row['id'];
				$Madonhang=$row['Madonhang'];
				  $MaKH=$row['MaKH'];
				  $Tensach=$row['Tensach'];
				  $Gia=$row['Gia'];
				  $Soluong=$row['Soluong_mua'];
				  $Thanhtien=$row['Thanhtien'];
				  $Trangthai=$row['Trangthai'];
				  $Pttt=$row['Pttt'];

				   echo'<tr >
				   <td width="41" height="55" align="center">'.$Madonhang.'</td>
    <td width="41" height="55" align="center"><strong><a href="sua_dh.php?Madonhang='.$Madonhang.'">'.$MaKH.'</a></strong></td>
    <td width="132" align="center">'.$Tensach.'</td>
    <td width="87" align="center">'.$Gia.'</td>
    <td width="256" align="center">'.$Soluong.'   </td>
    <td width="134" align="center">'.$Thanhtien.'</td>
		<td width="134" align="center"><strong>'.$Pttt.'</strong></td>
	<td width="134" align="center"><strong style="color:blue;">'.$Trangthai.'</strong></td>
    <td width="81" align="center"><a href="sua_dh.php?Madonhang='.$Madonhang.'"> <i class="fas fa-edit"></i> </a></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }
			  else
			  {
				echo '123';
			  }

			  
		}
		public function load_lsdh($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
  <td width="41" height="55" align="center"><strong>Mã đơn hàng</strong></td>
    <td width="41" height="55" align="center"><strong>Mã KH</strong></td>
    <td width="132" align="center"><strong>Tên sách</strong></td>
    <td width="256" align="center"><strong>Giá</strong></td>
    
    <td width="87" align="center"><strong>Số lượng </strong></td>
    <td width="134" align="center"><strong>Thành tiền</strong></td>
	<td width="134" align="center"><strong>Trạng thái</strong></td>
	<td width="149" align="center"><strong>Mã QRCode</strong></td>
  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				$Madonhang=$row['Madonhang'];
				  $MaKH=$row['MaKH'];
				  $Tensach=$row['Tensach'];
				  $Gia=$row['Gia'];
				  $Soluong=$row['Soluong_mua'];
				  $Thanhtien=$row['Thanhtien'];
				  $Trangthai=$row['Trangthai'];
				   echo'<tr >
				   <td width="41" height="55" align="center">'.$Madonhang.'</td>
    <td width="41" height="55" align="center"><strong><a href="sua_dh.php?Madonhang='.$Madonhang.'">'.$MaKH.'</a></strong></td>
    <td width="132" align="center">'.$Tensach.'</td>
    <td width="87" align="center">'.$Gia.'</td>
    
    <td width="256" align="center">'.$Soluong.'   </td>
    <td width="134" align="center">'.$Thanhtien.'</td>
	<td width="134" align="center"><strong style="color:blue;">'.$Trangthai.'</strong></td>
    <td width="81" align="center"></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }

			  
		}
		
		public function load_dskh($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
    <td width="41" height="55" align="center"><strong>MaKH</strong></td>
    <td width="132" align="center"><strong>Họ tên</strong></td>
    <td width="256" align="center"><strong>Địa chỉ</strong></td>
    
    <td width="87" align="center"><strong>Số điện thoại</strong></td>
    <td width="134" align="center"><strong>Email</strong></td>
	<td width="149" align="center"><strong>Thao tác</strong></td>
  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				  $MaKH=$row['MaKH'];
				  $Hoten=$row['Hoten'];
				  $Diachi=$row['Diachi'];
				  $Sdt=$row['Sdt'];
				  $Email=$row['Email'];
				  $Password=$row['Password'];
				   echo'<tr >
    <td width="41" height="55" align="center">'.$MaKH.'</td>
    <td width="132" align="center">'.$Hoten.'</td>
    <td width="87" align="center">'.$Diachi.'</td>
    
    <td width="256" align="center">'.$Sdt.'   </td>
    <td width="134" align="center">'.$Email.'</td>
    <td width="81" align="center"><a href="sua_kh.php?MaKH='.$MaKH.'">  Sửa </a>| <a href="xoa_kh.php?MaKH='.$MaKH.'">  Xóa </a></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }
			  
		}
		public function load_dsloai($sql)
		{
		  $link=$this->connect();
		  $ketqua=mysql_query($sql,$link);
		  mysql_close($link);
		  $i=mysql_num_rows ($ketqua);
		  if($i>0)
		  {
			  echo '<table   width="1485" height="107" border="1" align="center" cellpadding="3" cellspacing="0">
  <tr  >
    <td width="41" height="55" align="center"><strong>Mã loại</strong></td>
    <td width="132" align="center"><strong>Tên loại</strong></td>

  </tr>';
			   while($row=mysql_fetch_array($ketqua))
			   {
				  $Maloai=$row['Maloai'];
				  $Tenloai=$row['Tenloai'];
				   echo'<tr >
    <td width="41" height="55" align="center">'.$Maloai.'</td>
    <td width="132" align="center">'.$Tenloai.'</td>

    <td width="81" align="center"><a href="xoa_loai.php?Maloai='.$Maloai.'">  Xóa </a></td> 
  </tr> ';
				   
				   }
				   echo '</table>';
			  }
			  
		}
		public function load_loaisach($sql,$idloai)
		{
			$link=$this->connect();
			$ketqua=mysql_query($sql,$link);
			mysql_close($link);
			$i= mysql_num_rows($ketqua);
			if($i>0)
			{
				echo ' <select name="maloai" id="maloai"  style="width:25%;">
                        ';
				while ($row=mysql_fetch_array($ketqua))
				{
				    $Masach=$row['Masach'];
					$Maloai=$row['Maloai'];
					$Tenloai=$row['Tenloai'];
					if($Maloai==$idloai)
					{
					echo ' <option selected="selected" value="'.$Maloai.'">'.$Tenloai.'</option>';
					}
					else
					{
					echo ' <option value="'.$Maloai.'">'.$Tenloai.'</option>';
					}
				}
					
				}
				echo '</select>';
			}
			public function laycot($sql)
			{
				$link=$this->connect();
				$ketqua=mysql_query($sql,$link);
				mysql_close($link);
			    $i=mysql_num_rows($ketqua);
				$kq='';
				if($i>0)
				{
					while ($row=mysql_fetch_array($ketqua))
					{
						$Masach=$row['0'];
						$kq=$Masach;
					}
				}
				return $kq;
			}
			public function laycot_KH($sql)
			{
				$link=$this->connect();
				$ketqua=mysql_query($sql,$link);
				mysql_close($link);
			    $i=mysql_num_rows($ketqua);
				$kq='';
				if($i>0)
				{
					while ($row=mysql_fetch_array($ketqua))
					{
						$MaKH=$row['0'];
						$kq=$MaKH;
					}
				}
				return $kq;
			}
			public function themxoasua($sql)
			{
				$link=$this->connect();
				if(mysql_query($sql,$link)) 
				{
					
					return 1;
				}
				else
				{
				    return 0;	
				}
			}
		
}
