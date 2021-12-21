<?php include "header.php";
require_once('component.php');
?>

<div class="card-wrapper">
  <div class="card">
    <?php if (isset($_GET["id"])) {
      $id = $_GET["id"];
      $getProductById = $product->getProductById($id);
      foreach ($getProductById  as $value) {
    ?>
        <!-- card left -->
        <div class="product-imgs">
          <div class="img-display">
            <div class="img-showcase">
              <img src="./img/<?php echo $value['image'] ?>">

            </div>
          </div>

        </div>
        <!-- card right -->
        <div class="product-content">
          <h2 class="product-title"><?php echo $value['name'] ?></h2>

          <div class="product-rating">
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star"></i>
            <i class="fas fa-star-half-alt"></i>
            <span>4.7(21)</span>
          </div>

          <div class="product-price">
            <p class="last-price">Old Price: <span><?php echo number_format($value['price']); ?> VNĐ</span></p>
            <p class="new-price">New Price: <span><?php echo number_format($value['price'] - 100000)   ?> VNĐ (5%)</span></p>
          </div>

          <div class="product-detail">
            <h2>about this item: </h2>
            <p><?php echo $value['description']; ?></p>

            <ul>

              <li>Shipping Area: <span>All over the world</span></li>
              <li>Shipping Fee: <span>Free</span></li>
            </ul>
          </div>

          <div class="purchase-info">
          <form action="index.php" method="post">
            <button type="submit" name="add"  class = "btn">
              Add to Cart <i class = "fas fa-shopping-cart"></i>
            </button>
			<input type="hidden" name="id" value="<?php echo $value['id'] ?>">
					<input type="hidden" name="image" value="<?php echo $value['image']; ?>">
					<input type="hidden" name="name" value="<?php echo $value['name']?>">
					<input type="hidden" name="price" value="<?php echo $value['price']; ?>">
					</form>
            <button type="button" class="btn">Compare</button>
          </div>

          <div class="social-links">
            <p>Share At: </p>
            <a href="#">
              <i class="fab fa-facebook-f"></i>
            </a>
            <a href="#">
              <i class="fab fa-twitter"></i>
            </a>
            <a href="#">
              <i class="fab fa-instagram"></i>
            </a>
            <a href="#">
              <i class="fab fa-whatsapp"></i>
            </a>
            <a href="#">
              <i class="fab fa-pinterest"></i>
            </a>
          </div>
        </div>
  </div>
</div>
<?php
      }
    }
?>
<h2>Related Products </h2>


<!-- Products tab & slick -->
<div class="col-md-12">
  <div class="row">
    <div class="products-tabs">
      <!-- tab -->
      <div id="tab2" class="tab-pane fade in active">
        <div class="products-slick" data-nav="#slick-nav-2">
          <!-- product -->
          <?php

          if (isset($_GET["type_id"])) {
            $type_id = $_GET["type_id"];
            $getProductByTypeId = $product->getProductByTypeId($type_id);
            foreach ($getProductByTypeId  as $value) {
              componentProFeature($value['name'], $value['price'], $value['image'], $value['id'],$value['type_id']);
            }
          }
          ?>






          <!-- /product -->
        </div>

        <div id="slick-nav-2" class="products-slick-nav"></div>
      </div>
      <!-- /tab -->
    </div>
  </div>
</div>
<?php include "footer.html"; ?>