<?php 
session_start();
if (!isset($_SESSION['user'])) {
    echo"<script> alert('Vui lòng đăng nhập để xem đơn hàng')</script>";
    echo "<script>window.location = 'index.php'</script>";
}else {
    echo "<script>window.location = 'cart.php'</script>";
}