<?php 
 require "config.php";
 require "models/db.php";
 require "models/protypers.php";
 require "models/product.php";
 $product = new Product;
 
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $product->addProType($name);
 }
 header('location:protype.php');