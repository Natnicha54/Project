<?php
	
	session_start();
?>

<?php
	session_start();
	if (empty($_SESSION['ses_id'])){
		echo "Access denied";
		exit;	
	}
	echo "ยินดีต้อนรับคุณ  ".$_SESSION['ses_name'];	
?>


<!DOCTYPE html>
<html lang="en">
<head>
	<title>ShoeShi</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
	<link href="" rel="shortcut icon"/>

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
	<header class="header-section">
		<div class="container-fluid">
			<!-- logo -->
			<div class="site-logo"><img src="../image/SHOESHI.png" width="200" height="55"></div>
			<!-- responsive -->
			<div class="nav-switch">
				<i class="fa fa-bars"></i>
			</div>
			<div class="header-right">
				<a href="../cart.php" class="card-bag"><img src="../image/icons/bag.png" alt=""></a>
				<a href="#" class="search"><img src="../image/icons/search.png" alt=""></a>
			</div>
			<!-- site menu -->
			<ul class="main-menu">
				<li><a href="home.php"></a></li>
				<li><a href="product.php">Shop</a></li>
				<li><a href="../member.php">Member</a></li>
				<li><a href="../view_order.php">view order</a></li>
				
				<li><a href="logout.php">ออกจากระบบ</a></li>
			</ul>
		</div>
	</header>
	<!-- Header section end -->


	<!-- Hero section -->
	<section class="hero-section set-bg" data-setbg="../image/bg.jpg">
		<div class="hero-slider owl-carousel">
			<div class="hs-item">
				<div class="hs-left"><img src="../image/slider-img.png" alt=""></div>
				<div class="hs-right">
					<div class="hs-content">
						<h2><span>2020</span> <br>MORE than Sneakers. </h2>
						<a href="../product.php"class="site-btn">Shop NOW!</a>
					</div>	
				</div>
			</div>
		</div>
	</section>
	<!-- Hero section end -->

	
	<!-- Intro section -->
	<section class="intro-section spad pb-0">
		<div class="section-title">
			<h2> products</h2>
			<p>We recommend</p>
		</div>
		<div class="intro-slider">
			<ul class="slidee">
				<li>
					<div class="intro-item">
						<figure>
							<img src="../image/aa.jpg" alt="#">
						</figure>
						<div class="product-info">
							<h5>NMD_V3</h5>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="../image/bb.jpg" alt="#">
						</figure>
						<div class="product-info">
							<h5>RUN STAR HIKE HI BLACK</h5>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="../image/cc.jpg" alt="#">
							<div class="bache">NEW</div>
						</figure>
						<div class="product-info">
							<h5>Nike Air Force 1 '07 LV8</h5>
						</div>
					</div>
				</li>
				<li>
					<div class="intro-item">
						<figure>
							<img src="../image/dd.jpg" alt="#">
						</figure>
						<div class="product-info">
							<h5>Nike Air Force 1 High SE</h5>
						</div>
					</div>
				</li>
			</ul>
		</div>
		<div class="container">
			<div class="scrollbar">
				<div class="handle">
					<div class="mousearea"></div>
				</div>
			</div>
		</div>
	</section>
	<!-- Intro section end -->


	<!-- Featured section -->
	<div class="featured-section spad">
		<div class="container">
			<div class="row">
				<div class="col-md-6">
					<div class="featured-item">
						<img src="../image/gray.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
				<div class="col-md-6">
					<div class="featured-item mb-0">
						<img src="../image/f.jpg" alt="">
						<a href="#" class="site-btn">see more</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	<!-- Featured section end -->



      <!-- Blog section -->	
<section class="blog-section spad">
		<div class="container">
        			<ul class="product-filter controls">
				<li class="control" data-filter="all">Recommended</li>
			</ul>
            <div class="row featurette">
      <div class="col-md-7">
        <h2 class="featurette-heading fw-normal lh-1">Nike Joyride Dual Run</h2>
        <p class="lead">		 รองเท้าคู่นี้ให้สัมผัสคล้ายรองเท้าวิ่งแบบดั้งเดิมมากกว่า เพราะมีปุ่มเม็ดโฟมจิ๋ว 2 ปุ่มที่ส้นและส่วนกลางเท้าซึ่งช่วยลดแรงกระแทกได้อย่างเฉพาะตัวในจุดที่คุณต้องการที่สุด</p>
      </div>
      <div class="col-md-5">
        <img src="../image/44.jpg" width="600" height="250">
      </div>
    </div>
	</section>
	<!-- Blog section end --><!-- Product section end -->


	<!-- Blog section -->	
	<section class="blog-section spad">
		<div class="container">
			<div class="row"></div>
		</div>
</section>
	<!-- Blog section end -->	


<!-- Footer top section -->	
	<section class="footer-top-section home-footer">
		<div class="container">
			<div class="row">
				<div class="col-lg-3 col-md-8 col-sm-12">
					<div class="footer-widget about-widget">
						<img src="../image/SHOESHI.png" class="footer-logo">
					<div class="cards">
					<img src="../img/cards/5.png" alt="">
					<img src="../img/cards/4.png" alt="">
					<img src="../img/cards/3.png" alt="">
					<img src="../img/cards/2.png" alt="">
					<img src="../img/cards/1.png" alt="">
						</div>
					</div>
				</div>
				<div class="col-lg-2 col-md-4 col-sm-6">
					<div class="footer-widget">
						<h6 class="fw-title">Contact</h6>
						<div class="text-box">
							<p>Your Company Ltd </p>
							<p>1481 Creekside Lane  Avila Beach, CA 93424, </p>
							<p>+53 345 7953 32453</p>
							<p>office@youremail.com</p>
						</div>
					</div>
				</div>
			</div>
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
    </body>
</html>