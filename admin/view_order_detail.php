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
				<img  src="image/SHOESHI.png" alt="logo" width="180" height="55">
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
				<a href="view_order.php">รายการใบสั่งซื้อ</a> / 
				<span>รายละเอียดใบสั่งซื้อ</span>
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
									<th class="product-image">ที่</th>
									<th class="product-name">สินค้า</th>
									<th class="product-quantity">จำนวน</th>
									<th class="product-price">ราคา/ชิ้น</th>
									<th class="product-total">รวม (บาท)</th>
								</tr>
                <?php
	                include("connectdb.php");
	                $sql = "SELECT  *  FROM  orders_detail
                  INNER JOIN product ON orders_detail.pid = product.p_id
                  WHERE orders_detail.oid = '".$_GET['o']."'  ";
	                $rs = mysqli_query($conn, $sql) ;
	                $i = 0;
	                while ($data = mysqli_fetch_array($rs, MYSQLI_BOTH)) {
	              	$i++;
		              $sum = $data['p_price'] * $data['item'] ;
		              @$total += $sum;
                ?>
                  <tr>
                  <th><?=$i;?></th>
                  <th><img src="image/<?=$data['p_id'];?>.jpg" width="80"><br>
                  รหัสสินค้า: <?=@$data['p_id'];?> <br>
                  ชื่อสินค้า: <?=$data['p_name'];?></th>
                  <th><?=$data['item'];?></th>
                  <th><?=number_format($data['p_price'],0);?></th>
                  <th><?=number_format($sum,0);?></th>
					      </tr>
                    <?php  }  ?>

                    <tr>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>&nbsp;</th>
                  <th>รวมทั้งสิ้น</th>
                  <th><?=number_format($sum,0);?></th>
					      </tr>
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