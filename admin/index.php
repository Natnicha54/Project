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
	<link href="../img/favicon.ico" rel="shortcut icon"/>

	<!-- Google Fonts -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

	<!-- Stylesheets -->
	<link rel="stylesheet" href="../css/bootstrap.min.css"/>
	<link rel="stylesheet" href="../css/font-awesome.min.css"/>
	<link rel="stylesheet" href="../css/owl.carousel.css"/>
	<link rel="stylesheet" href="../css/style.css"/>
	<link rel="stylesheet" href="../css/animate.css"/>


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
			<img  src="../image/SHOESHI.png" alt="logo" width="180" height="55">
			</div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">    
				<a href="#" class="search"><img src="../image/icons/search.png" alt=""></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="../index.php">Home</a></li>
				<li><a href="#">Shop</a></li>
				<li><a href="#">Login</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->

		<!-- Hero section -->
		<section class="hero-section set-bg" data-setbg="../image/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="../image/slider-img.png"alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<h2><span>2020</span> <br>MORE than Sneakers. </h2>
						<a href="product.php"class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->


	<!-- Page -->
	<div class="page-area contact-page">
		<div class="container spad">
			<div class="text-center">
				<h4 class="contact-title">Please Login</h4>
			</div>
			<form method="post" action=""  >
				<div class="row">
					<div class="col-md-12">
                    	Username
                        <input  type="text" class="form-control" name="user" autofocus required><br>
                        
                        
					</div> 
					<div class="col-md-12">
                    	Password
						<input type="password" class="form-control" name="pwd" required> 
                        <br>
                         
						<div class="text-center">
						    <input class="w-100 btn btn-lg btn-dark" type="submit"  name="Submit" value="Login">
    <p class="mt-5 mb-3 text-muted">&copy; 2017–2022</p>
    
						</div>
					</div>
				</div>
			</form>
     <?php
if(isset($_POST['Submit'])){
	include("../connectdb.php");
	$sql = "SELECT * FROM admin where a_user ='{$_POST['user']}' and a_pwd = '".md5($_POST['pwd'])."' LIMIT 1";
	$rs = mysqli_query($conn, $sql);
	$num = mysqli_num_rows($rs);
	//นับจำนวนว่าเจอการล็อกอินกี่แถวถ้าเจอจะเป็น1ไม่เจอเป็น0
	
	if ($num > 0){
		$data = mysqli_fetch_array($rs);
		$_SESSION['ses_id']= $data['a_id'] ;
		$_SESSION['ses_name']= $data['a_name'] ;
		
		echo "<script>";
		echo "window.location='home.php';";
		echo "</script>";
	} else {
		echo "<script>";
		echo "alert('Username หรือ Password ไม่ถูกต้อง ');";
		echo "</script>";
	}
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
	<script src="../js/jquery-3.2.1.min.js"></script>
	<script src="../js/bootstrap.min.js"></script>
	<script src="../js/owl.carousel.min.js"></script>
	<script src="../js/mixitup.min.js"></script>
	<script src="../js/sly.min.js"></script>
	<script src="../js/jquery.nicescroll.min.js"></script>
	<script src="../js/main.js"></script>

	<!-- Map js -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCWTIlluowDL-X4HbYQt3aDw_oi2JP0Krc&sensor=false"></script>
	<script src="../js/map.js"></script>

    </body>
</html>