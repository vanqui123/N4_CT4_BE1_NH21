<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['type_id'])){
  $getAllProductByTypeId = $product-> getAllProductByTypeId($_GET['type_id']);
    if(count($getAllProductByTypeId) == 0){
        $product->delProtype(($_GET['type_id']));
echo"<script> alert('Xóa thành công')</script>";

      }
    else {
      echo"<script> alert('Loại sản phẩm bạn xóa vẫn đang tồn tại !KHÔNG THỂ XÓA!!!')</script>";
    }
}
    echo "<script>window.location = 'protype.php'</script>";

