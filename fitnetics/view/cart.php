<?php
include("../controllers/cart_controller.php");
include("../settings/core.php");
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
	<title>Fitnetics Cart</title>
	<link rel="stylesheet" type="text/css" href="../css/ccss.css">
	<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,600,700,900" rel="stylesheet">
</head>
<body>

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
      <div class='CartContainer'>   
      <div class='Header'>
      <h3 class='Heading'>Shopping Cart</h3>
      </div>

      <div class='Cart-Items pad'>
      <div class='image-box'>
      <img src='../images/$product_image' style={{ height='120px' }} />
      </div>
      <div class='about'>
      <h1 class='title'>$product_title</h1>
      <img src='../images/$product_image' style={{ height='30px' }}/>
      </div>
      <div class='counter'>
      <div class='btn'><a href='../functions/manage_cart.php?update1=$product_id'>+</a></div>
      <div class='count'>$product_qty</div>
      <div class='btn' disabled>-</div>
      </div>
      <div class='prices'>
      <div class='amount'>GHS $product_price</div>
      <div class='remove'><u>Remove</u></div>
      </div>
      </div>
      <hr> 
      <div class='checkout'>
      <div class='total'>
      <div>
      <div class='Subtotal'>Sub-Total</div>
      <div class='items'>$total1 items</div>
      </div>
      <div class='total-amount'>GHS $grandtotal1</div>
      </div>
      <button class='button'>Checkout</button></div>
      </div>
      </div>
      ";
    }
    else {
      echo "
            <div class='CartContainer'> 
      <div class='Header'>
      <h3 class='Heading'>Shopping Cart</h3>
      </div>

      <div class='Cart-Items pad'>
      <div class='image-box'>
      <img src='../images/$product_image' style={{ height='120px' }} />
      </div>
      <div class='about'>
      <h1 class='title'>$product_title</h1>
      <img src='../images/$product_image' style={{ height='30px' }}/>
      </div>
      <div class='counter'>
      <div class='btn'><a href='../functions/manage_cart.php?update1=$product_id'>+</a></div>
      <div class='count'>$product_qty</div>
      <div class='btn'><a href='../functions/manage_cart.php?decrease=$product_id'>-</a></div>
      </div>
      <div class='prices'>
      <div class='amount'>GHS $product_price</div>
      <div class='remove'><u>Remove</u></div>
      </div>
      </div>
      <hr> 
      <div class='checkout'>
      <div class='total'>
      <div>
      <div class='Subtotal'>Sub-Total</div>
      <div class='items'>$total1 items</div>
      </div>
      <div class='total-amount'>GHS $grandtotal1</div>
      </div>
      <button class='button'>Checkout</button></div>
      </div>
      </div>


      ";
    }
  }
  ?>
</body>
</html>

