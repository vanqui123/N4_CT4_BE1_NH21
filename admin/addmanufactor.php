<?php 
 require "config.php";
 require "models/db.php";
 require "models/manufacture.php";
 require "models/product.php";
 $product = new Product;
 $Manufacture = new Manufacture;
 if(isset($_POST['submit'])){
    $name = $_POST['name'];
    $product->addManu($name);
 }
 header('location:manufacture.php');