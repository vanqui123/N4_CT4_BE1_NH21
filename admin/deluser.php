<?php 
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$user = new User;
if(isset($_GET['user_id'])){
    
    $user->delUser($_GET['user_id']);
}
header('location:user.php');