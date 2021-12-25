<?php 
 require "config.php";
 require "models/db.php";
require "models/user.php";
 
 $user = new User;
 if(isset($_POST['submit'])){
    $username = $_POST['name'];
    $password = $_POST['pass'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $fullname = $_POST['fullname'];
    $roles = $_POST['roles'];
    $user->addUser($username,$password, $email, $phone, $fullname, $roles);
 }
 header('location:user.php');