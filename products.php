<<<<<<< HEAD
<?php include "header.php"; ?>
<!-- BREADCRUMB -->
<div id="breadcrumb" class="section">
	<!-- container -->
	<div class="container">
		<!-- row -->
		<div class="row">
			<div class="col-md-12">
				<ul class="breadcrumb-tree">
					<li><a href="#">Home</a></li>
					<li><a href="#">All Categories</a></li>
					<li><a href="#">Accessories</a></li>
					<li class="active">Headphones (227,490 Results)</li>
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
					<?php foreach($getAllProtypes as $value): ?>
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
					<?php foreach($getAllManu as $value): ?>
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
					<h3 class="aside-title">Top selling</h3>
					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product01.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product02.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>

					<div class="product-widget">
						<div class="product-img">
							<img src="./img/product03.png" alt="">
						</div>
						<div class="product-body">
							<p class="product-category">Category</p>
							<h3 class="product-name"><a href="#">product name goes here</a></h3>
							<h4 class="product-price">$980.00 <del class="product-old-price">$990.00</del></h4>
						</div>
					</div>
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
						// hiển thị 3 sản phẩm trên 1 trang
						$perPage = 3;
						// Lấy số trang trên thanh địa chỉ
						$page = isset($_GET['page']) ? $_GET['page'] : 1;
						// Tính tổng số dòng tổng số kết quả của products
						$total = count($getProductsByManu);
						// lấy đường dẫn đến file hiện hành
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
										<h4 class="product-price"><?php echo number_format($value["price"]); ?>VNĐ</h4>
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
										<button class="add-to-cart-btn"><i class="fa fa-shopping-cart"></i> add to cart</button>
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
						<?php echo $product->paginate($url, $total, $perPage,$page); ?>
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
=======
<?php include "header.php" ?>
  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1>Projects</h1>
          </div>
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Projects</li>
            </ol>
          </div>
        </div>
      </div><!-- /.container-fluid -->
    </section>

    <!-- Main content -->
    <section class="content">

      <!-- Default box -->
      <div class="card">
        <div class="card-header">
          <h3 class="card-title">Projects</h3>

          <div class="card-tools">
            <button type="button" class="btn btn-tool" data-card-widget="collapse" title="Collapse">
              <i class="fas fa-minus"></i>
            </button>
            <button type="button" class="btn btn-tool" data-card-widget="remove" title="Remove">
              <i class="fas fa-times"></i>
            </button>
          </div>
        </div>
        <div class="card-body p-0">
          <table class="table table-striped projects">
              <thead>
                  <tr>
                      <th style="width: 1%">
                          ID
                      </th>
                      <th style="width: 10%">
                          Name
                      </th>
                      <th style="width: 8%">
                          Image
                      </th>
                      <th style="width: 8%" class="text-center">
                          Price
                      </th>
                      <th style="width: 8%" class="text-center">
                          Manufacture
                      </th>
                      <th style="width: 8%" class="text-center">
                          Protype
                      </th>
                      <th style="width: 13%" class="text-center">
                          Description
                      </th>
                      <th style="width: 10%" class="text-center">
                          Created
                      </th>
                      <th style="width: 12%" class="text-center">
                          Action
                      </th>
                  </tr>
              </thead>
              <tbody>
                  <?php foreach($getAllProducts as $value): ?>
                  <tr>
                      <td>
                  <?php echo $value['id'] ?>
                          
                      </td>
                      <td>
                      <?php echo $value['name'] ?>
                      </td>
                      <td > <img style="width: 40%;" src="../img/<?php echo $value["image"]; ?>" alt="">
                      </td>
                      <td class="text-center">
                      <?php echo number_format($value['price'])."VND"; ?>
                      </td>
                      <td class="text-center">
                      <?php echo $value['manu_name'] ?>
                      </td>
                      <td class="text-center">
                      <?php echo $value['type_name'] ?>
                      </td>
                      <td class="text-center">
                      <?php echo substr($value['description'],0,100)."..."?>
                      </td>
                      <td class="text-center">
                      <?php echo $value['created_at'] ?>
                      </td>
                      <td class="project-actions text-right" >
                          <a class="btn btn-info btn-sm" href="#">
                              <i class="fas fa-pencil-alt">
                              </i>
                              Edit  
                          </a>
                          <a class="btn btn-danger btn-sm" href="#">
                              <i class="fas fa-trash">
                              </i>
                              Delete
                          </a>
                      </td>
                  </tr>
                  <?php endforeach ?>

              </tbody>
          </table>
        </div>
        <!-- /.card-body -->
      </div>
      <!-- /.card -->

    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->
  <?php include "footer.html" ?>
>>>>>>> 16716625ea9621e1fac2782d595bdde53786ba8a
