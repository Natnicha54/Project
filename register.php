<?php
	session_start();
	
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<title>Login</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/font-awesome.min.css"/>
	<link rel="stylesheet" href="css/owl.carousel.css"/>
	<link rel="stylesheet" href="css/style.css"/>
	<link rel="stylesheet" href="css/animate.css"/>


	<!--[if lt IE 9]>
	  <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
	  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
	<![endif]-->

</head>
<body>
	<!-- Page Preloder -->
	<div id="preloder">
		<div class="loader"></div>
	</div>
	
	<!-- Header section -->
	<header class="header-section header-normal">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo">
			<img  src="image/SHOESHI.png" alt="logo" width="190" height="55">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">    
				<a href="#" class="search"><img src="img/icons/search.png" alt=""></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Page -->
	<div class="page-area contact-page">
		<div class="container spad">
			<div class="text-center">
				<h4 class="contact-title">Register</h4>
			</div>
			<form method="post" action="">
				<div class="row">
					<div class="col-md-12">
					ชื่อ<input type="text" name="firstname" class="form-control"  >
                    เบอร์โทรศัพท์<input type="number" name="phone" class="form-control"  >
					ที่อยู่<input type="text" name="adress" class="form-control"  >
					Username<input type="text" name="username"  class="form-control"  >  
					Password<input type="password" name="password"  class="form-control"  ><br>
                    <div class="col-md-100">
               
						<div class="text-center">     <input type="submit" name="submit" value="Save" class=" btn-lg btn-dark">
                    <input type="reset" name="cancel" value="Cancle" class=" btn-lg btn-dark"></div>
    						<a href="login.php"  type="submit" class=" btn-lg btn-dark">Login</a>
						</div>
					</div>
				</div>
			</form>
            <?php
			if (isset($_POST['submit'])){
				
				$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
				mysqli_select_db($conn,"shoeshi")or die("เลือกฐานข้อมูลไม่ได้");
				mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
				
				$sql = "INSERT INTO `mem` (cus_id, cus_name,cus_phone,cus_adress,cus_user ,cus_pwd) VALUES (NULL, '{$_POST['firstname']}', '{$_POST['phone']}', '{$_POST['adress']}', '{$_POST['username']}', md5('{$_POST[('password')]}') )";
				mysqli_query($conn,$sql) or die ("บันทึกข้อมูลไม่ได้");
				
				echo "<script>";
				echo "alert ('บันทึกข้อมูลสำเร็จ');";
					echo "window.location='register.php';";
				echo "</script>";	
			}
            
			?>
		</div>
		<div class="container contact-info-warp"></div>
	</div> 
	<!-- Page end -->


	<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row"></div>
		</div>
	</section>
	<!-- Footer top section end -->	



	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>

	<!-- Map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="js/map.js"></script>

    </body>
</html>