<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['type_id'])){

    if($value['type_id'] ==  $product->getAllProductByTypeId($_GET['type_id'])){
        $product->delProtype(($_GET['type_id']));
      }
    else{
        echo"<script> alert('Item Already Added');
        window.location.href ='protype.php';
    </script>";
    }
}
header('location:protype.php');
