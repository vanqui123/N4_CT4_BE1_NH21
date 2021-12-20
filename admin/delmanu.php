<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['manu_id'])){
    
    $product->delManu($_GET['manu_id']);
}
header('location:manufacture.php');
