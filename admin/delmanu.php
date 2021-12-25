<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
 $product = new Product;
if(isset($_GET['manu_id'])){
  $getAllProductByManuId = $product->getAllProductByManuId($_GET['manu_id']);

if(count($getAllProductByManuId) == 0 ) {
$product->delManu($_GET['manu_id']);
echo"<script> alert('Xóa thành công')</script>";
  }
else{
    
  echo"<script> alert('Hãng sản phẩm bạn xóa vẫn đang tồn tại !KHÔNG THỂ XÓA!!!')</script>";
    
	
}
  }
  echo "<script>window.location = 'manufacture.php'</script>";

