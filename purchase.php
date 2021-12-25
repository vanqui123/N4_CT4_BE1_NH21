<?php
session_start();
$con =mysqli_connect("localhost","root","","nhom4-be");
mysqli_set_charset($con, 'UTF8');
if(mysqli_connect_error()){
    echo"<script>
    alert('cannot connect to database');
    window.location.href='cart.php';
    </script>";

}


if(isset($_POST['purchase']))
{

    if(mysqli_query($con,"INSERT INTO `order_manager`(`FullName`, `Phone`, `Address`, `Pay_Mode`) VALUES ('$_POST[fullname]','$_POST[phone_no]','$_POST[address]','$_POST[pay_mode]')"))
    {
    $Order_id=mysqli_insert_id($con);
       $stmt = mysqli_prepare($con,"INSERT INTO `user_order`(`Order_id`, `Item_Name`, `Price`, `Quanity`) VALUES (?,?,?,?)");
       if($stmt)
       {
        mysqli_stmt_bind_param($stmt,"isii",$Order_id,$Item_Name,$Price,$Quantity);
        foreach($_SESSION['cart'] as $key=>$values){
            $Item_Name=$values['name'];
            $Price = $values['price'];
            $Quantity = $values['Quantity'];
            mysqli_stmt_execute($stmt);
        }
        unset($_SESSION['cart']);
        echo"<script>
        alert('Order Place ');
        window.location.href='index.php';
        </script>";
       }
       else{
        echo"<script>
        alert('SQL Query Prepare Error');
        window.location.href='cart.php';
        </script>";
        
       }
    }
    else{
        echo"<script>
        alert('SQL Error');
        window.location.href='cart.php';
        </script>";
        
    }

}



?>