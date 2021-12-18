<?php

require "config.php";
require "models/db.php";
require "models/product.php";
require "models/manufacture.php";
require "models/protypers.php";

$product = new Product;
$getAllProducts = $product->getAllProducts();
$getNew10product = $product->getNew10Product();
$getProductLapTop = $product->getProductLapTop();
$getProductPhones = $product->getProductPhones();


$Manufacture = new Manufacture;
$getAllManu = $Manufacture->getAllManu();
$protypes = new Protypes;
$getAllProtypes = $protypes->getAllProtypes();

if(isset($_POST['add'])){
	// print_r($_POST['id']);
	if(isset($_SESSION['cart'])){
	$myitems =	array_column($_SESSION['cart'],'name');
	if(in_array($_POST['name'],$myitems)){
		echo"<script> alert('Item Already Added');
				window.location.href ='index.php';
			</script>";
		
	}
	else{
		$count = count($_SESSION['cart']);
		$_SESSION['cart'][$count] = array(
		'id'=> $_POST['id'],
		'image'=> $_POST['image'],
		'name'=> $_POST['name'],
		'price'=> $_POST['price'],
		'Quantity'=>1,
		);
		echo"<script> alert('Item Already Added');
				window.location.href ='index.php';
			</script>";
	}
															
	}
	else{
		$_SESSION['cart'][0] = array(
			'id'=> $_POST['id'],
	'image'=> $_POST['image'],
	'name'=> $_POST['name'],
	'price'=> $_POST['price'],
	'Quantity'=>1
	);
	echo"<script> alert('Item Adeed');
				window.location.href ='index.php';
			</script>";
	}
	}
	

?>
<!DOCTYPE html>
<html lang="en">

<head>

	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

	<title>Electro - HTML Ecommerce Template</title>

	<!-- Google font -->
	<link href="https://fonts.googleapis.com/css?family=Montserrat:400,500,700" rel="stylesheet">

	<!-- Bootstrap -->
	<link type="text/css" rel="stylesheet" href="css/bootstrap.min.css" />

	<!-- Slick -->
	<link type="text/css" rel="stylesheet" href="css/slick.css" />
	<link type="text/css" rel="stylesheet" href="css/slick-theme.css" />

	<!-- nouislider -->
	<link type="text/css" rel="stylesheet" href="css/nouislider.min.css" />

	<!-- Font Awesome Icon -->
	<link rel="stylesheet" href="css/font-awesome.min.css">

	<!-- Custom stlylesheet -->
	<link type="text/css" rel="stylesheet" href="css/style.css" />

	<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
	<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
	<!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>
	<!-- HEADER -->
	<header>
		<!-- TOP HEADER -->
		<div id="top-header">
			<div class="container">
				<ul class="header-links pull-left">
					<li><a href="#"><i class="fa fa-phone"></i> +021-95-51-84</a></li>
					<li><a href="#"><i class="fa fa-envelope-o"></i> email@email.com</a></li>
					<li><a href="#"><i class="fa fa-map-marker"></i> 1734 Stonecoal Road</a></li>
				</ul>
				<ul class="header-links pull-right">
					<li><a href="#"><i class="fa fa-dollar"></i> USD</a></li>
					<?php
					if (!isset($_SESSION['user'])) {?>
					<li><a href="login/index.php"><i class="fa fa-user-o"></i> My Account</a></li>
						<?php } else {
							 ?>
							<li><a href="#"><i class="fa fa-user-o"></i> <?php echo $_SESSION['user']?> </a></li>
							<li><a href="models/logout.php"><i</i>/ Logout </a></li>
							<?php	} ?>
				</ul>
			</div>
		</div>
		<!-- /TOP HEADER -->

		<!-- MAIN HEADER -->
		<div id="header">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">
					<!-- LOGO -->
					<div class="col-md-3">
						<div class="header-logo">
							<a href="index.php" class="logo">
								<img src="./img/logo.png" alt="">
							</a>
						</div>
					</div>
					<!-- /LOGO -->

					<!-- SEARCH BAR -->
					<div class="col-md-6">
						<div class="header-search">
							<form method="get" action="result.php">
								<select class="input-select">
									<option value="0">All Categories</option>
									<option value="1">Category 01</option>
									<option value="1">Category 02</option>
								</select>
								<input class="input" name="keyword" placeholder="Search here">
								<button type="submit" class="search-btn">Search</button>
							</form>
						</div>
					</div>
					<!-- /SEARCH BAR -->

					<!-- ACCOUNT -->
					<div class="col-md-3 clearfix">
						<div class="header-ctn">
							<!-- Wishlist -->
							<div>
								<a href="#">
									<i class="fa fa-heart-o"></i>
									<span>Your Wishlist</span>
									<div class="qty">2</div>
								</a>
							</div>
							<!-- /Wishlist -->

							<!-- Cart -->
							<div class="dropdown">
								<a class="dropdown-toggle" data-toggle="dropdown" aria-expanded="true">
									<i class="fa fa-shopping-cart"></i>
									<span>Your Cart</span>
									<?php
									if (isset($_SESSION['cart'])) {
										$count = count($_SESSION['cart']);
										echo "<div class='qty' id='cart_count'>$count</div>";
									} else {
										echo "<div class='qty' id='cart_count'>0</div>";
									}
									?>
								</a>
								<div class="cart-dropdown">
									<div class="cart-list">
										<div class="product-widget">
											<div class="product-img">
												<img src="./img/product01.png" alt="">
											</div>
											<div class="product-body">
												<h3 class="product-name"><a href="#">product name goes here</a></h3>
												<h4 class="product-price"><span class="qty">1x</span>$980.00</h4>
											</div>
											<button class="delete"><i class="fa fa-close"></i></button>
										</div>
									</div>

									<div class="cart-btns">
										<a href="cart.php">View Cart</a>
										<a href="#">Checkout <i class="fa fa-arrow-circle-right"></i></a>
									</div>
								</div>
							</div>
							<!-- /Cart -->

							<!-- Menu Toogle -->
							<div class="menu-toggle">
								<a href="#">
									<i class="fa fa-bars"></i>
									<span>Menu</span>
								</a>
							</div>
							<!-- /Menu Toogle -->
						</div>
					</div>
					<!-- /ACCOUNT -->
				</div>
				<!-- row -->
			</div>
			<!-- container -->
		</div>
		<!-- /MAIN HEADER -->
	</header>
	<!-- /HEADER -->

	<!-- NAVIGATION -->
	<nav id="navigation">
		<!-- container -->
		<div class="container">
			<!-- responsive-nav -->
			<div id="responsive-nav">
				<!-- NAV -->
				<ul class="main-nav nav navbar-nav">

					<li class="active"><a href="index.php">Home</a></li>
					<?php foreach ($getAllManu as $value) : ?>
						<li class=""><a href="products.php?manu_id=<?php echo $value['manu_id']; ?>"><?php echo $value['manu_name'] ?></a></li>
					<?php endforeach ?>

				</ul>
				<!-- /NAV -->
			</div>
			<!-- /responsive-nav -->
		</div>
		<!-- /container -->
	</nav>
	<!-- /NAVIGATION -->