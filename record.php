<meta charset="utf-8">
<?php
	@session_start();
	$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"shoeshi")or die("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
	
		foreach($_SESSION['pid'] as $pid) {
			$sum[$pid] = $_SESSION['pprice'][$pid] * $_SESSION['itema'][$pid] ;
			@$total += $sum[$pid] ;
		}
	
	$sql = "INSERT INTO `orders` (`oid`,`ototal`, `odate`,`cus_id`)values('', '$total', CURRENT_TIMESTAMP, '".$_SESSION['ses_id']."');" ;
	
	mysqli_query($conn, $sql) or die(mysqli_error($conn));
	$id = mysqli_insert_id($conn);
	
	foreach($_SESSION['pid'] as $pid) {
		$sql2 = "INSERT INTO `orders_detail`  (`od_id`,`oid`, `pid`,`item`) values('', '$id', '".$_SESSION['pid'][$pid]."', '".$_SESSION['itema'][$pid]."');" ;
		mysqli_query($conn, $sql2) or die(mysqli_error($conn));
	}
	
echo "<meta http-equiv=\"refresh\" content=\"0;URL=clearall.php\">";
?>