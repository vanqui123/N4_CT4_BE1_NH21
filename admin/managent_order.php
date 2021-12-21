<?php
include 'header.php';

$con = mysqli_connect("localhost", "root", "", "nhom4-be");
mysqli_set_charset($con, 'UTF8');

?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <title>Document</title>
</head>

<body>

  <div class="container mt-5" style='margin-left: 230px; width: 100%;'>
    <div class="row">
      <div class='col lg-12'>
        <table class="table text-center table-dark">
          <thead>
            <tr>
              <th scope='col'>Order ID</th>
              <th scope='col'>Customer Name</th>
              <th scope='col'>Phone Number</th>
              <th scope='col'>Address</th>
              <th scope='col'>Pay Node</th>
              <th scope='col'>Orders</th>

            </tr>
          </thead>
          <tbody>
            <?php
            $query = "SELECT * FROM `order_manager`";
            $user_result = mysqli_query($con, $query);
            while ($user_value = mysqli_fetch_assoc($user_result)) {
              echo "
    <tr>
    <td>$user_value[Order_id]</td>
    <td>$user_value[FullName]</td>
    <td>$user_value[Phone]</td>
    <td>$user_value[Address]</td>
    <td>$user_value[Pay_Mode]</td>
    <td>
        <table class='table text-center table-dark'>
            <thead>
            <tr>
                <th scope='col'>Item Name</th>
                <th scope='col'>Price</th>
                <th scope='col'>Quantity</th>
            </tr>
            </thead>
            <tbody>
    ";
              $total = 0;
              $order_query = "SELECT * FROM `user_order` WHERE `Order_id`='$user_value[Order_id]'";
              $order_result = mysqli_query($con, $order_query);
              while ($order_value = mysqli_fetch_assoc($order_result)) {
            ?>
                <tr>
                  <td><?php echo $order_value['Item_Name'] ?></td>
                  <td><?php echo number_format($order_value['Price']) ?>VNĐ</td>
                  <td><?php echo $order_value['Quanity'] ?></td>

                </tr>

              <?php
                $total = $total + $order_value['Price'];
              } ?>
              <td>Total: <?php echo  number_format($total) ?>VNĐ </td>
            <?php
              echo "
    </tbody>
    </table>
    </td>
      </tr>
     
    ";
            }
            ?>



          </tbody>
        </table>
      </div>
    </div>
  </div>
</body>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>

</html>