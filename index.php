<?php
session_start();
include "header.php";
require_once('component.php');

?>
<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="width: 80%;" src="./img/Samsung-Galaxy-Book-Pro-2021-H1.jpeg" alt="">
					</div>
					<div class="shop-body">
						<h3>Laptop<br>Collection</h3>

					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="width: 80%;" src="./img/dienthoai1.jpg" alt="">
					</div>
					<div class="shop-body">
						<h3>Phone<br>Collection</h3>

					</div>
				</div>
			</div>
			<!-- /shop -->

			<!-- shop -->
			<div class="col-md-4 col-xs-6">
				<div class="shop">
					<div class="shop-img">
						<img style="width: 78%;" src="./img/mw07srs-eddbo8001_1603878272.png" alt="">
					</div>
					<div class="shop-body">
						<h3>Clock<br>Collection</h3>

					</div>
				</div>
			</div>
			<!-- /shop -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">New Products</h3>
					<div class="section-nav">
						<ul class="section-tab-nav tab-nav">
							<?php foreach ($getAllProtypes as $value) : ?>
								<li class="<?php if (isset($_GET['type_id']) && $_GET['type_id'] ==  $value['type_id']) {
												echo 'active';
											} else echo ""; ?>">
									<a href="index.php?type_id=<?php echo $value['type_id']; ?>">
										<?php echo $value['type_name'] ?></a>
								</li>
							<?php endforeach ?>
						</ul>
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">

				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab1" class="tab-pane active">
							<div class="products-slick" data-nav="#slick-nav-1">
								<?php
								if (isset($_GET["type_id"])) {
									$type_id = $_GET["type_id"];
									$getProductsByType = $product->getProductsByType($type_id);
									foreach ($getProductsByType  as $value) {
										componentNewByID($value['name'], $value['price'], $value['image'], $value['id'], $value['type_id']);
									}
								} else {
									foreach ($getAllProducts as $vl) {
										componentNewProduct($vl['name'], $vl['price'], $vl['image'], $vl['id'], $vl['type_id']);
									}
								}
								?>

							</div>
							<div id="slick-nav-1" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>

			</div>

			<!-- Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- HOT DEAL SECTION -->
<div id="hot-deal" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<div class="hot-deal">
					<ul class="hot-deal-countdown">
						<li>
							<div>
								<h3>02</h3>
								<span>Days</span>
							</div>
						</li>
						<li>
							<div>
								<h3>10</h3>
								<span>Hours</span>
							</div>
						</li>
						<li>
							<div>
								<h3>34</h3>
								<span>Mins</span>
							</div>
						</li>
						<li>
							<div>
								<h3>60</h3>
								<span>Secs</span>
							</div>
						</li>
					</ul>
					<h2 class="text-uppercase">hot deal this week</h2>
					<p>New Collection Up to 50% OFF</p>
					<a class="primary-btn cta-btn" href="#">Shop now</a>
				</div>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /HOT DEAL SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">

			<!-- section title -->
			<div class="col-md-12">
				<div class="section-title">
					<h3 class="title">FEATURED PRODUCTS</h3>
					<div class="section-nav">
					</div>
				</div>
			</div>
			<!-- /section title -->

			<!-- Products tab & slick -->
			<div class="col-md-12">
				<div class="row">
					<div class="products-tabs">
						<!-- tab -->
						<div id="tab2" class="tab-pane fade in active">
							<div class="products-slick" data-nav="#slick-nav-2">
								<!-- product -->
								<?php 
								$getAllProductsFeature = $product->getAllProductsFeature();
								foreach ($getAllProductsFeature as $value) {
									componentProFeature($value['name'], $value['price'], $value['image'], $value['id'],$value['type_id']);
								} ?>
								<!-- /product -->
							</div>
							<div id="slick-nav-2" class="products-slick-nav"></div>
						</div>
						<!-- /tab -->
					</div>
				</div>
			</div>
			<!-- /Products tab & slick -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->

<?php include "footer.html"; ?>