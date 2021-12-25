<?php
function componentNewByID($name, $price, $image, $id, $type_id)
{
?>
	<!-- product -->
	<form action="index.php" method="post" enctype="multipart/form-data">

		<div class="product">
			<div class="product-img">

				<img name="" src="./img/<?php echo $image ?>" alt="">
			</div>
			<div class="product-body">
				<p class="product-category">Category</p>
				<h3 class="product-name"><a name="" href="#"><?php echo $name ?></a></h3>
				<h4 class="product-price" name=""><?php echo number_format($price); ?>VND</h4>
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
					<a href="product_detail.php?id=<?php echo $id ?>&type_id=<?php echo $type_id ?>"><i class="fa fa-eye"></i><span class="tooltipp"></span></a>

				</div>
			</div>

			<div class="add-to-cart">
				<form action="index.php" method="post">
					<button type="submit" name="add" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i>add to cart</button>
					<input type="hidden" name="id" value="<?php echo $id ?>">

					<input type="hidden" name="image" value="<?php echo $image ?>">
					<input type="hidden" name="name" value="<?php echo $name ?>">
					<input type="hidden" name="price" value="<?php echo $price ?>">
				</form>
			</div>
		</div>
	</form>
	<!-- /product -->
<?php }
?>
<?php function componentProFeature($name, $price, $image, $id, $type_id)
{ ?>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<div class="product">
			<div class="product-img">
				<img src="./img/<?php echo $image ?>" alt="">
				<div class="product-label">
					<span class="sale">-30%</span>
					<span class="new">NEW</span>
				</div>
			</div>
			<div class="product-body">
				<p class="product-category">Category</p>
				<h3 class="product-name"><a href="#"><?php echo $name ?></a></h3>
				<h4 class="product-price"><?php echo  number_format($price) ?>&ensp; VND</h4>
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
					<a href="product_detail.php?id=<?php echo $id ?>&type_id=<?php echo $type_id ?>"><i class="fa fa-eye"></i><span class="tooltipp"></span></a>
				</div>
			</div>
			<div class="add-to-cart">
				<form action="index.php" method="post">
					<button type="submit" name="add" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="hidden" name="image" value="<?php echo $image ?>">
					<input type="hidden" name="name" value="<?php echo $name ?>">
					<input type="hidden" name="price" value="<?php echo $price ?>">
				</form>
			</div>
		</div>
	</form>
<?php } ?>

<?php function componentSearch($name, $price, $image, $id, $type_id)
{ ?>
	<form action="index.php" method="post" enctype="multipart/form-data">
		<div class="col-md-4 col-xs-6">
			<div class="product">
				<div class="product-img">
					<img src="./img/<?php echo $image ?> " alt="">
					<div class="product-label">
						<span class="sale">-30%</span>
						<span class="new">NEW</span>
					</div>
				</div>
				<div class="product-body">
					<p class="product-category">Category</p>
					<h3 class="product-name"><a href="#"><?php echo $name ?></a></h3>
					<h4 class="product-price"><?php echo number_format($price) ?> VND</h4>
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
						<button class="quick-view"><i class="fa fa-eye"></i><span class="tooltipp">quick view</span></button>
					</div>
				</div>
				<div class="add-to-cart">
					<form action="index.php" method="post">
						<a href=""><button type="submit" name="add" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button></a>
						<input type="hidden" name="id" value="<?php echo $id ?>">
					</form>
				</div>
			</div>
		</div>
	</form>
<?php } ?>
<?php
function componentNewProduct($name, $price, $image, $id, $type_id)
{
?>
	<!-- product -->
	<form action="index.php" method="post" enctype="multipart/form-data">

		<div class="product">
			<div class="product-img">

				<img name="img" src="./img/<?php echo $image ?>" alt="">
			</div>
			<div class="product-body">
				<p class="product-category">Category</p>
				<h3 class="product-name"><a name="name" href="#"><?php echo $name ?></a></h3>
				<h4 class="product-price" name="price"><?php echo number_format($price); ?>VND</h4>
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
					<a href="product_detail.php?id=<?php echo $id ?>&type_id=<?php echo $type_id ?>"><i class="fa fa-eye"></i><span class="tooltipp"></span></a>
				</div>
			</div>
			<a href="checklogin.php"><div class="add-to-cart">
				<form action="index.php" method="post">
					
					<button type="submit" name="add" class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart </button>
					<input type="hidden" name="id" value="<?php echo $id ?>">
					<input type="hidden" name="image" value="<?php echo $image ?>">
					<input type="hidden" name="name" value="<?php echo $name ?>">
					<input type="hidden" name="price" value="<?php echo $price ?>">
				</form>
			</div></a>
			
		</div>
	</form>
	<!-- /product -->

<?php }
?>