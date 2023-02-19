<meta charset="utf-8">
<?php
	@session_start();
	$id2 = $_GET['id'] ;
	unset($_SESSION['pid'][$id2]) ;
	unset($_SESSION['pname'][$id2]) ;
	unset($_SESSION['pprice'][$id2]) ;
	unset($_SESSION['pdetail'][$id2]) ;
	unset($_SESSION['picturea'][$id2]) ;
	unset($_SESSION['itema'][$id2]) ;
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=cart.php\">";

?>