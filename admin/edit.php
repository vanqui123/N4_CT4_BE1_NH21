
<?php
 require "config.php";
 require "models/db.php";
 require "models/product.php";
$product = new Product;
echo $_GET['id'];
if(isset($_POST['submit'])){
    $id = $_GET['id'];
    $name = $_POST['name'];
    if(isset($_POST['manu'])){
        $manu_id = $_POST['manu'];
    }else{
        $manu_id=1;

    } 
    if(isset($_POST['type'])){
        $type_id = $_POST['type'];
    }else{
        $type_id=1;
    } 

    $price = $_POST['price'];
    $desc = $_POST['desc'];
  
    if(isset($_POST['feature'])){
        $feature = $_POST['feature'];
    }else{
        $feature=0;
    } 
    if(isset($_FILES['image'])){
        $image = $_FILES['image']['name'];
    }else{
        $image="";
    }
    // thêm
    $product->editProduct($name,$manu_id,$type_id,$price,$image,$desc,$feature,$id);
    // upload Hình
    $target_dir = "../img/";
    $target_file = $target_dir . basename($_FILES["image"]["name"]);
    move_uploaded_file($_FILES["image"]["tmp_name"], $target_file);
}
header('location:products.php');
