<!DOCTYPE html>
<html lang="en">
<head>
	<title>ShoeShi</title>
	<meta charset="UTF-8">
	<meta name="description" content="The Plaza eCommerce Template">
	<meta name="keywords" content="plaza, eCommerce, creative, html">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<!-- Favicon -->   
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
				<img  src="../
                image/SHOESHI.png" alt="logo" width="180" height="55">
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


	<!-- Page Info -->
	<div class="page-info-section page-info">
		<div class="container">
			<div class="site-breadcrumb">
				<a href="index.php">Home</a> / 
				<span>รายการใบสั่งซื้อ</span>
			</div>
			<img src="image/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
	  <div class="gaming-library profile-library">
	  <div class="col-lg-20">
		  <div class="cart-section mt-150 mb-150">
		<div class="container">
			<div class="row">
				<div class="col-lg-12 ">
					<div class="cart-table-wrap" >
						<table class="cart-table" width="100%" height="80%">
							<thead class="cart-table-head" >
								<tr class="table-head-row" >
									<th class="product-image">&nbsp;</th>
									<th class="product-name">เลขที่ใบสั่งซื้อ</th>
									<th class="product-price">วันที่</th>
									<th class="product-quantity">ราคารวม</th>
									<th class="product-total">รหัสลูกค้า</th>
								</tr>
                <?php
	                include("connectdb.php");
	                $sql = "select  *  from  `orders`  order by oid  ASC ";
	                $rs = mysqli_query($conn, $sql) ;
	                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
                    ?>
                      <tr>
                  <th><a href="view_order_detail.php?o=<?=$data['oid'];?>">ดูรายละเอียด</a></th>
                  <th><?=$data['oid'];?></th>
                  <th><?=$data['odate'];?></th>
                  <th><?=number_format($data['ototal'],0);?></th>
                  <th></th>
					   </tr>
                    <?php  }  ?>
							</thead>
						</table>
					</div>
				</div>

	<!--====== Javascripts & Jquery ======-->
	<script src="js/jquery-3.2.1.min.js"></script>
	<script src="js/bootstrap.min.js"></script>
	<script src="js/owl.carousel.min.js"></script>
	<script src="js/mixitup.min.js"></script>
	<script src="js/sly.min.js"></script>
	<script src="js/jquery.nicescroll.min.js"></script>
	<script src="js/main.js"></script>
    </body>
</html>