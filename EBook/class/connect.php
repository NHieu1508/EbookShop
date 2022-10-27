<?php
function ketnoidb(){
$host = "localhost";
$user = "ebook";
$password = "123456";
$database = "db_ebook";
$con = mysqli_connect($host, $user, $password, $database);
if (mysqli_connect_errno()){
    echo "Connection Fail: ".mysqli_connect_errno();exit;
}
}
function taodonhang($MaKH,$Tongsoluong,$Tongtien,$Pttt)
{
    $con=ketnoidb();
    $sql="INSERT INTO tbl_cthd(MaKH,Tongsoluong ,Tongtien,Pttt)
    VALUES ('$MaKH', '$Tongsoluong', '$Tongtien','$Pttt')";
    $con->exec($sql);

}
?>