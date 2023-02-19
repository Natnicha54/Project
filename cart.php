<?php
error_reporting(E_NOTICE);

	@session_start();
	$conn=mysqli_connect("localhost","root","12345678")or die("เชื่อมต่อฐานข้อมูลไม่ได้");
	mysqli_select_db($conn,"shoeshi")or die("เลือกฐานข้อมูลไม่ได้");
	mysqli_query($conn,"SET NAMES utf8"); //ทำให้อ่านข้อมูลที่เป็นภาษาไทยได้
	$sql = "select * from product where p_id='{$_GET['id']}' ";
	$rs = mysqli_query($conn, $sql) ;
	$data = mysqli_fetch_array($rs);
	$id = $_GET['id'] ;
	
	if(isset($_GET['id'])) {
		$_SESSION['pid'][$id] = $data['p_id'];
		$_SESSION['pname'][$id] = $data['p_name'];
		$_SESSION['pprice'][$id] = $data['p_price'];
		$_SESSION['pdetail'][$id] = $data['p_detail'];
		$_SESSION['picturea'][$id] = $data['p_id'];
		@$_SESSION['itema'][$id]++;
	}
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
				<a href="index2.php">Home</a> / 
				<span>Cart</span>
			</div>
			<img src="image/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->


	<!-- Page -->
	<div class="page-area cart-page spad">
		<div class="container">
	  <div class="text" >
		<a href="product.php" type="submit" class="site-btn ">กลับไปเลือกสินค้า</a> </div><br>
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
									<th class="product-image">Product Image</th>
									<th class="product-name">Name</th>
									<th class="product-price">Price</th>
									<th class="product-quantity">Quantity</th>
									<th class="product-total">Total</th>
									<th class="product-remove"></th>
								</tr>
								<?php
                    if(!empty($_SESSION['pid'])) {
                        foreach($_SESSION['pid'] as $pid) {
                            @$i++;
                            $sum[$pid] = $_SESSION['pprice'][$pid] * $_SESSION['itema'][$pid] ;
                            @$total += $sum[$pid] ;
                       ?>

                      <tr>
                  <th><a href="product.php?p=<?=$pid;?>"><img src="image/<?=$_SESSION['picturea'][$pid];?>.jpg"  height="50" class="templatemo-item"></a></th>
                  <th><?=$_SESSION['pname'][$pid];?></th>
                  <th><?=number_format($_SESSION['pprice'][$pid],0);?> ฿</th>
                  <th><?=$_SESSION['itema'][$pid];?></th>
                  <th><?=number_format($sum[$pid],0);?> ฿</th>
                  <th><div class="main-button"><a href="cle.php?id=<?=$pid;?>">remove</a></div></th>
						</tr>
                <?php } // end foreach ?>
							</thead>
						</table>
					</div>
				</div>

				<div class="col-lg-12">
					<div class="total-section">
						<table class="total-table">
								<tr class="table-total-row">
									<th class="product-image"></th>
									<th class="product-name"></th>
									<th class="product-price"></th>
									<th class="product-quantity"></th>
									<th class="product-total">TotalPrice<?=number_format($total,0);?>   ฿</th>
									
								</tr>
						   </div>
						</table>
					</div>
				</div>
						<?php 
       					 } else {
       				  ?>
           			 <tr>
               			 <td colspan="7" height="50" align="center">ไม่มีสินค้าในตะกร้า</td>
           			 </tr>
       				 <?php } // end if ?> </div>
										
												</table>
											</div>
										</div>
									</div>
	 							</div>
							</div>
							<!-- Page end -->
							<div class="col-lg-12">
             		 									<div class="text-center">
                            							<a href="clearall.php" class="site-btn ">ลบสินค้าทั้งหมด</a>
                           								 <a href="record.php" class="site-btn ">สั่งซื้อสินค้า</a><br>
                        								</div><br>
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