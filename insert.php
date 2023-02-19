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
				<a href="admin/home.php">Home</a> /ข้อมูลรองเท้า ShoeShi Shop</div>
			<img src="image/page-info-art.png" alt="" class="page-info-art">
		</div>
	</div>
	<!-- Page Info end -->
    
    <form  class="form-horizontal" method="post" action="" enctype="multipart/form-data" >
<fieldset>

<!-- Form Name -->
<legend></legend><br>

<!-- Text input-->

<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="p_id" >รหัสสินค้า</label>  
  <div class="col-md-4">
  <input id="p_id" name="p_id" type="text" placeholder="รหัสสินค้า" class="form-control input-md" required autofocus ></div>
    
  </div>
</div>
<!-- Text input-->
<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="p_name">ชื่อรองเท้า</label>  
  <div class="col-md-4" >
  <input id="p_name" name="p_name" type="text" placeholder="ชื่อรองเท้า" class="form-control input-md" required>
    
  </div>
</div>

<!-- Textarea -->
<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="p_detail">รายละเอียด</label>
  <div class="col-md-4">                     
    <textarea class="form-control" id="p_detail" name="p_detail">รายละเอียด</textarea>
  </div>
</div>



<!-- Text input-->
<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="p_price">ราคา</label>  
  <div class="col-md-4">
  <input id="p_price" name="p_price" type="text" placeholder="ราคา" class="form-control input-md" required>
    
  </div>
</div>

<!-- Text input-->
<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="p_type">ยี่ห้อ</label>  
  <div class="col-md-4">
  <input id="p_type" name="p_type" type="text" placeholder="ยี่ห้อ" class="form-control input-md" required>
    
  </div>
</div>

<!-- File Button --> 
<div class="form-group" align="center">
  <label align="left" class="col-md-4 control-label" for="img">รูปรองเท้า</label>
  <div class="col-md-4">
    <input id="img" name="img" class="input-file" type="file">
  </div>
</div>




<!-- Button -->
<div class="form-group" align="center">
  <label class="col-md-4 control-label" for="Submit"></label>
  <div class="text-center" >
    <button id="Submit" name="Submit" class=" btn-lg btn-dark">บันทึกข้อมูล</button>
    <a href="admin/product.php"class=" btn-lg btn-dark" type="submit" >กลับ</a>
  </div>
</div> 


 
</fieldset>
</form>

<?php
	if (isset($_POST['Submit'])){
		include("../connectdb.php");
		$sql = "INSERT INTO `product` (`p_id`, `p_name`, `p_detail`, `p_price`) VALUES ('{$_POST['p_id']}', '{$_POST['p_name']}', '{$_POST['p_detail']}', '{$_POST['p_price']}')";
		mysqli_query($conn, $sql) or die ("insert ไม่ได้");
		
		
	@copy($_FILES['p_picture']['tmp_name'], "../image/".$_POST['p_id'].".jpg");
		
	echo "<script>";
	echo "alert('บันทึกข้อมูลสำเร็จ')";
	echo "</script>";
	
	}
?>

</body>
</html>