<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
if(isset($_GET['manu_id'])){
    if($value['manu_id'] ==  $product->getAllProductByManuId($_GET['manu_id'])){
    $product->delManu($_GET['manu_id']);
      }
    else{
        echo"<script> alert('Item Adeed');
                    window.location.href ='manufacture.php';
                </script>";
    }
}
header('location:manufacture.php');
