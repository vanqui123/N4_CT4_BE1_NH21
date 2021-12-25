<?php session_start(); 
 
if (isset($_SESSION['user'])){
    unset($_SESSION['user']); // xóa session login
    unset($_SESSION['cart']);
}
header('location:/n4_ct4_be1_nh21/index.php');