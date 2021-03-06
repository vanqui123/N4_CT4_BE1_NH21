<?php include "header.php"; ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="#">Search Results</a></li>
					<li class="active"><?php
										if (isset($_GET['manu_id']))
											foreach ($getAllManu as $value) {
												if ($_GET['manu_id'] == $value['manu_id']) {
													echo $value['manu_name'];
													echo " (" . count($product->getProductsByManu($_GET['manu_id'])) . ")";
												}
											}
										?></li>
				</ul>
			</div>
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /BREADCRUMB -->

<!-- SECTION -->
<div class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<!-- ASIDE -->
			<div id="aside" class="col-md-3">
				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Categories</h3>
					<div class="checkbox-filter">
						<?php foreach ($getAllProtypes as $value) : ?>
							<div class="input-checkbox">
								<input type="checkbox" id="category-1">
								<label for="category-1">
									<span></span>
									<?php echo $value['type_name'] ?>
									<small><?php echo "(12)"; ?></small>
								</label>
							</div>
						<?php endforeach ?>

					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Price</h3>
					<div class="price-filter">
						<div id="price-slider"></div>
						<div class="input-number price-min">
							<input id="price-min" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
						<span>-</span>
						<div class="input-number price-max">
							<input id="price-max" type="number">
							<span class="qty-up">+</span>
							<span class="qty-down">-</span>
						</div>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Brand</h3>
					<div class="checkbox-filter">
						<?php foreach ($getAllManu as $value) : ?>
							<div class="input-checkbox">
								<input type="checkbox" id="brand-1">
								<label for="brand-1">
									<span></span>
									<?php echo $value['manu_name'] ?>
									<small>(578)</small>
								</label>
							</div>
						<?php endforeach ?>
					</div>
				</div>
				<!-- /aside Widget -->

				<!-- aside Widget -->
				<div class="aside">
					<h3 class="aside-title">Featured Products</h3>
					<?php
					$get3ProductsFeature = $product->get3ProductsFeature();
					foreach ($get3ProductsFeature as $value) : ?>
						<div class="product-widget">
							<div class="product-img">
								<img src="./img/<?php echo $value['image'] ?>" alt="">
							</div>
							<div class="product-body">
								<p class="product-category">Category</p>
								<h3 class="product-name"><a href="#"><?php echo $value['name'] ?></a></h3>
								<h4 class="product-price"><?php echo number_format($value['price']) ?></h4>
							</div>
						</div>
					<?php endforeach; ?>

				</div>
				<!-- /aside Widget -->
			</div>
			<!-- /ASIDE -->

			<!-- STORE -->
			<div id="store" class="col-md-9">
				<!-- store top filter -->
				<div class="store-filter clearfix">
					<div class="store-sort">
						<label>
							Sort By:
							<select class="input-select">
								<option value="0">Popular</option>
								<option value="1">Position</option>
							</select>
						</label>

						<label>
							Show:
							<select class="input-select">
								<option value="0">20</option>
								<option value="1">50</option>
							</select>
						</label>
					</div>
					<ul class="store-grid">
						<li class="active"><i class="fa fa-th"></i></li>
						<li><a href="#"><i class="fa fa-th-list"></i></a></li>
					</ul>
				</div>
				<!-- /store top filter -->

				<!-- store products -->
				<div class="row">
					<?php
					if (isset($_GET["manu_id"])) :
						$manu_id = $_GET["manu_id"];
						$getProductsByManu = $product->getProductsByManu($manu_id);
						// hi???n th??? 3 s???n ph???m tr??n 1 trang
						$perPage = 3;
						// L???y s??? trang tr??n thanh ?????a ch???
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						// T??nh t???ng s??? d??ng t???ng s??? k???t qu??? c???a products
						$total = count($getProductsByManu);
						// l???y ???????ng d???n ?????n file hi???n h??nh
						$url = $_SERVER['PHP_SELF'] . "?manu_id=" . $manu_id;
						$get3ProductsByManu = $product->get3ProductsByManu($manu_id, $page, $perPage);
						foreach ($get3ProductsByManu as $value) :
					?>
							<!-- product -->
							<div class="col-md-4 col-xs-6">
								<div class="product">
									<div class="product-img">
										<img src="./img/<?php echo $value["image"]; ?>" alt="">

									</div>
									<div class="product-body">
										<p class="product-category">Category</p>
										<h3 class="product-name"><a href="#"><?php echo $value["name"] ?></a></h3>
										<h4 class="product-price"><?php echo number_format($value["price"]); ?>VN??</h4>
										<div class="product-rating">
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
											<i class="fa fa-star"></i>
										</div>
										<div class="product-btns">
											<button class="add-to-wishlist"><i class="fa fa-heart-o"></i><span class="tooltipp">add to wishlist</span></button>
											<button class="add-to-compare"><i class="fa fa-exchange"></i><span class="tooltipp">add to compare</span></button>
											<a href="product_detail.php?id=<?php echo $value['id'] ?>&type_id=<?php echo $value['type_id'] ?>"><i class="fa fa-eye"></i><span class="tooltipp"></span></a>
										</div>
									</div>
									<div class="add-to-cart">
										<form action="index.php" method="post">

											<button type="submit" name="add" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
											<input type="hidden" name="id" value="<?php echo $value['id']; ?>">

											<input type="hidden" name="image" value="<?php echo $value['image']; ?>">
											<input type="hidden" name="name" value="<?php echo  $value['name']; ?>">
											<input type="hidden" name="price" value="<?php echo $value['price']; ?>">
										</form>
									</div>
								</div>
							</div>
							<!-- /product -->
						<?php endforeach; ?>

				</div>
				<!-- /store products -->

				<!-- store bottom filter -->
				<div class="store-filter clearfix">
					<span class="store-qty">Showing 20-100 products</span>
					<ul class="store-pagination">
						<?php echo $product->paginate($url, $total, $perPage, $page); ?>
					</ul>
				</div>
				<!-- /store bottom filter -->
			<?php endif; ?>
			</div>
			<!-- /STORE -->
		</div>
		<!-- /row -->
	</div>
	<!-- /container -->
</div>
<!-- /SECTION -->
<?php include "footer.html"; ?>