<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['type_id'])){
    
    $product->delProtype(($_GET['type_id']));
}
header('location:protype.php');
