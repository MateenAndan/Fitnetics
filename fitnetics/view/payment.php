<?php
// include("../settings/core.php");
include("../controllers/cart_controller.php");
include("navbar.php");
//for the number of items in the cart
$c_id= get_id();
$cartlist=view_cart_ctr($c_id);
$email=email_ctr($c_id);
$email= $email['customer_email'];

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
	<script src="https://js.paystack.co/v1/inline.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
	<title>Checkout</title>
</head>
<body>

	<br>
	<br>
	<h4>Items For checkout</h4>

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
					<div class="card-header"><h4>Summary</h4> </div>
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
						<form action="" method="POST"> 
							<input type="hidden" id="email"  name="email" value="<?php echo $email; ?>" >
							<input type="hidden" id="amount"  name="amount" value="<?php echo $grandtotal1; ?>">
							<input type="hidden" name="customerid" value="<?php echo $c_id; ?>"> 
							<button class="btn btn-success" type="submit" name="pay_now" id="pay-now" title="Pay now" onclick=payWithPaystack()>Pay now</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>

</body>
</html>

<script> 

	function payWithPaystack() {

		var one= document.getElementById("email").value;
		var two= document.getElementById("amount").value;

		event.preventDefault();

		let handler = PaystackPop.setup({

    key: 'pk_live_bd5356607a881f3a0d6843b75d3172b74b9675cd', // Replace with your public key
    email: document.getElementById("email").value,
    amount: document.getElementById("amount").value * 100,
    currency: 'GHS',
    ref: ''+Math.floor((Math.random() * 1000000000) + 1), // generates a pseudo-unique reference. Please replace with a reference you generated. Or remove the line entirely so our API will generate one for you
    // label: "Optional string that replaces customer email"
    
    onClose: function(){
    	alert('Window closed.');
    },
    callback: function(response){
       //let message = 'Payment complete! Reference: ' + response.reference;
       //alert(message);
      // window.location='payment_sucess.php?email='+one+'&amount='+two;
      $.ajax({
      	url: '../functions/payment_proc.php?reference='+ response.reference+'&email='+one+'&amount='+two,
      	method: 'get',
      	success: function (response) {
      // the transaction status is in response.data.status
      alert(response);
       window.location = 'homepage.php';
  }
});
  }

});
		handler.openIframe();
	}
</script>