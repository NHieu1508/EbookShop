<?php
ob_start();
include ("header.php");

$layid=0;
if(isset($_REQUEST['Masach']))
{
	$layid=$_REQUEST['Masach'];
	}
?>
<?php
$p->load_dsloai("select * from tbl_loai");
?>

<?php
include ("footer.php");
?>
