<meta charset="utf-8">
<?php
	$host = "localhost";
	$user = "root";
	$pwd = "12345678";
	$db = "shoeshi";
	
	$conn = mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"shoeshi") or die ("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
	
?>
