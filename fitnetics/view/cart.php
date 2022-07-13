<?php
// include("../settings/core.php");
include("navbar.php");
include("../controllers/cart_controller.php");
$c_id= get_id();
$cartlist=view_cart_ctr($c_id);
$total= select_total_qty_from_cart_ctr($c_id);
$total=$total[0];
$total1=$total['SUM(qty)'];
$grandtotal=select_total_price_ctr($c_id);
$grandtotal=$grandtotal[0];
$grandtotal1=$grandtotal['SUM(products.product_price*cart.qty)'];
?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cart</title>
</head>
<body>

  <br>
  <br>
  <h4>Items in cart</h4>

  <div style="display: flex; ">
    <div class="container" style=" flex: 2; ">
      <div class='row row-cols-1 row-cols-md-3 g-4' >
        <?php
        foreach ($cartlist as $oneproduct) {
          $product_id = $oneproduct['product_id'];
          $product_title = $oneproduct['product_title'];
          $product_price = $oneproduct['product_price'];
          $product_image = $oneproduct['product_image'];
          $product_qty=  $oneproduct['qty'];
          $itemtotal_price= $product_price * $product_qty;
          
          if($product_qty ==1){
            echo"              
            <div class='card-columns'>  
            <div class='card'>
            <img src=' ../images/$product_image' class='card-img-top' style='height: 350px; ' >
            <div class='card-body style='font-size:20px;' >
            Name: $product_title <br>
            Price:  GHS $product_price <br>
            Quantity:   $product_qty <br>
            Total:  GHS $itemtotal_price <br> <br> 
            <a href='#' class='btn btn-secondary ' disabled>-</a>
            $product_qty
            <a href='../functions/manage_cart.php?update1=$product_id' class='btn btn-outline-dark mt-auto'>+</a>
            <a href='../functions/remove_from_cart.php?delete=$product_id' class='btn btn-outline-dark mt-auto '>Remove</a>
            </div>
            </div>

            </div>                 
            ";
          }
          else {
            echo "                 
            <div class='card-columns'>  
            <div class='card'>
            <img src=' ../images/$product_image' class='card-img-top' style='height: 350px; ' >
            <div class='card-body style='font-size:20px;' >
            Name: $product_title <br>
            Price:  GHS $product_price <br>
            Quantity:   $product_qty <br> 
            Total:  GHS $itemtotal_price <br><br>
            <a href='../functions/manage_cart.php?decrease=$product_id' class='btn btn-outline-dark mt-auto'>-</a>
            $product_qty
            <a href='../functions/manage_cart.php?update1=$product_id' class='btn btn-outline-dark mt-auto'>+</a>
            <a href='../functions/remove_from_cart.php?delete=$product_id' class='btn btn-outline-dark mt-auto'>Remove</a>
            </div>
            </div>

            </div>

            ";

          }

          if (empty($product_qty)) {
            // code...
            echo "<h4>Items in cart</h4>";
          }

        }
        ?>
      </div>
    </div>
    <div style=" min-height: 400px; flex: 1.5;  ">
      <div class="container" style="margin-top: 40px;">
        <div class="card">
          <div class="card-header"><h4>Cart Summary</h4> </div>
          <div class="card-body">
            <?php
            foreach ($cartlist as $oneproduct) {

              $product_title = $oneproduct['product_title'];
              $product_price = $oneproduct['product_price'];
              $product_qty=  $oneproduct['qty'];
              $itemtotal_price= $product_price * $product_qty;
              echo "<h6>$product_title ($product_qty): GHS $itemtotal_price</h6> <br>";
            }

            ?>

            <?php

            echo"<h6>Total Price: GHS $grandtotal1</h6> <br>";

            ?>
          </div> 
          <div class="card-footer">
            <a href='payment.php' class='btn btn-success mt-auto'>Check Out</a> <br> <br>
            <a href='homepage.php' class='btn btn-outline-dark mt-auto'>Continue Shopping</a>
          </div>
        </div>
      </div>
    </div>
  </div>

</body>
</html>