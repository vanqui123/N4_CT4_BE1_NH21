<?php

session_start();

   require "config.php";
    require "models/db.php";
    require "models/product.php";

    $product = new Product;
    $getAllProducts = $product->getAllProducts();
require_once ("component.php");
if (isset($_POST['remove'])){
  if ($_GET['action'] == 'remove'){
      foreach ($_SESSION['cart'] as $key => $value){
          if($value["id"] == $_GET['id']){
              unset($_SESSION['cart'][$key]);
              echo "<script>alert('Product has been Removed...!')</script>";
              echo "<script>window.location = 'cart.php'</script>";
          }
      }
  }
}
if(isset($_POST['Mod_Quantity'])){
    foreach($_SESSION['cart'] as $key=>$value){
        if($value['id'] == $_POST['id']){
            $_SESSION['cart'][$key]['Quantity'] =$_POST['Mod_Quantity'];
           
            echo "<script>window.location = 'cart.php'</script>";
        }
    }
}

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Cart</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.8.2/css/all.css" />

    <!-- Bootstrap CDN -->
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="mycart.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   
   

    
</head>

<body class="bg-light">
<div class="container-fluid">
    <div class="row px-5">
        <div class="col-md-7">
            <div class="shopping-cart">
                <h6>My Cart</h6>
                <hr>
                <?php
                    if (isset($_SESSION['cart'])){
                        foreach ($_SESSION['cart'] as $key => $value){    
                                   
                                    ?>       
                                                    
                    <div class="border rounded">
                        <div class="row bg-white">
                            <div class="col-md-3 pl-0">
                                <img src=./img/<?php echo $value['image']; ?> alt="Image1" class="img-fluid">
                            </div>
                            <div class="col-md-6">
                                <h5 class="pt-2"> <?php echo $value['name']; ?></h5>
								<p>Product Code - <?php echo $value['id']; ?></p>
                                <h5 class="pt-2 " >
                             
                                    <?php echo number_format($value['price']);?>
                                    <input  type="hidden" class="iprice" value="<?php echo $value['price'];?>">
                                    VNĐ</h5>
                                <form action="cart.php?action=remove&id=<?php echo $value['id'];?>" method="post" class="cart-items">    

                                <button type="submit" class="btn btn-warning">Save for Later</button>
                                <button type="submit" class="btn btn-danger mx-2" name="remove">Remove</button>       
                                </form>                   
                            </div>
                            <div class="col-md-3 py-5">
                                <div>			
								<div class="quantity">
                                    <form action="cart.php" method="post">
         						 <input type="number" name="Mod_Quantity" onchange='this.form.submit();' value="<?php echo $value['Quantity'] ?>" min="1" class="quantity-field iquantity" >
                                  <input  type="hidden" name="id" value="<?php echo $value['id'];?>">  
                                </form>
                                  <h5>Total</h5>
								  <h5 class="pt-2 itotal"><?php echo number_format($totalqty);?> VNĐ</h5>
       								 </div>									 
                                </div>
                            </div>
                        </div>
                    </div>
                    
                <?php
                                   
                                 
                            }
                            }
                        
                    else{
                        echo "<h5>Cart is Empty</h5>";
                    }
                ?>
            </div>
        </div>
        <div class="col-md-4 offset-md-1 border rounded mt-5 bg-white h-25">

            <div class="pt-4">
                <h6>PRICE DETAILS</h6>
                <hr>
                <div class="row price-details">
                    <div class="col-md-6">
                        <?php
                            if (isset($_SESSION['cart'])){
                                $count  = count($_SESSION['cart']);
                                echo "<h6>Price ($count items)</h6>";
                            }else{
                                echo "<h6>Price (0 items)</h6>";
                            }
                        ?>
                        <h6>Delivery Charges</h6>
                        <hr>
                        <h6>Amount Payable</h6>
                    </div>
                    <div class="col-md-6">
                        <h6 id="gtotal_free"></h6>
                        <h6 class="text-success">FREE</h6>
                        <hr>
                        <h6 id="gtotal"></h6>
                    </div>

                    <?php 
                        if(isset($_SESSION['cart']) && count($_SESSION['cart'])>0)
                            {

                            
                    ?>
                  <form action="purchase.php" method="post">
                    <div class="form_info">
                   
                    <div class="form-group">
                            <label>Full Name</label>
                        <input name="fullname" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label>Phone Number</label>
                        <input name="phone_no" type="text" class="form-control" required>
                    </div>
                    <div class="form-group">
                            <label>Address</label>
                        <input name="address" type="text" class="form-control" required>
                    </div>
                   <div>
                       <input type="radio" name="pay_mode" value="COD" id="pay_rd">
                       <label for="pay_rd">
                           Cash On Delivery
                       </label>
                            </br>
                       <input type="radio" name="pay_mode" value="ATM" id="pay_rd">
                       <label for="pay_rd">
                       Payment by ATM card
                       </label>
                   </div>
                   <br>
                    <button type="submit" class="btn btn-warning" name="purchase">PurChase</button>
                    </div>
                    <form>
                    <?php } ?>
                </div>
            </div>
           
        </div>
      

        <div>
                  
                </div>

    </div>
</div>



<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
<script>
    const numberFormat = new Intl.NumberFormat('vi-VN', {
  style: 'currency',
  currency: 'VND',
});
    var gt=0;
    var gtfree =0;
var iprice = document.getElementsByClassName('iprice');
var iquantity = document.getElementsByClassName('iquantity');
var itotal = document.getElementsByClassName('itotal');
var gtotal = document.getElementById('gtotal');
var gtotal_free = document.getElementById('gtotal_free');

function subTotal()
{
  gt=0;
	for(i=0;i<iprice.length;i++)
	{
		itotal[i].innerText = numberFormat.format((iprice[i].value)*(iquantity[i].value));
        gtfree=gt+(iprice[i].value)*(iquantity[i].value);
        gt=gt+(iprice[i].value)*(iquantity[i].value);
    }
    gtotal.innerText =numberFormat.format(gt);
    gtotal_free.innerText =numberFormat.format(gtfree);
	
}
subTotal();
</script>
</html>