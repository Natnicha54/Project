
<meta charset="utf-8">
<?php
if (isset($_GET['id'])){
	include("../connectdb.php");
	$sql = "delete from product where p_id='{$_GET['id']}'";
	mysqli_query($conn, $sql) or die ("ลบข้อมูลไม่ได้");
	unlink("../image/".$_GET['id'].".jpg");
	
	echo "<script>";
	echo "alert('ยืนยันการลบ');";
	echo "window.location='product.php';";
	echo "</script>";
	
	}

?>
