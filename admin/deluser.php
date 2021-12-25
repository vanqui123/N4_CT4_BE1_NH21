<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['user_id'])){
        $product->delUser($_GET['user_id']);
   
        echo"<script> alert('Xóa thành công');
    </script>";
    }
    echo "<script>window.location = 'user.php'</script>";

