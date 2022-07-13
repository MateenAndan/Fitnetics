<?php
// include("../settings/core.php");
// check_login();
include("anavbar.php");
include("../functions/product_functions.php");

// $adminn = check_admin();
// if ($adminn == 1) {
//  // code...
// }else{
//  echo "no access";
// }
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>View product</title>
</head>
<body>
	<!-- Section-->
	<section class="py-5">
		<h2 style="text-align: center;">Product Details</h2>
		<div class="container px-4 px-lg-5 mt-5">
			<div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
				<div class='col mb-5'>
					<div class='card h-100'>
						<!-- Product image-->
						<img class='card-img-top' src='../images/<?php echo $product_image; ?>' alt='product image'/>
						<!-- Product details-->
						<div class='card-body p-4'>
							<div class='text-center'>
								<!-- Product name-->
								<h5 class='fw-bolder'><?php echo $product_title; ?></h5>
								<!-- Product category -->
								Category: <?php echo $cname['cat_name']; ?> <br>
								<!-- Product product desc-->
								Description: <?php echo $product_desc; ?>
								<br>
								<!-- keywords -->
								Keywords: <?php echo $product_keywords; ?> <br>
								<!-- Product price-->
								GHS <?php echo $product_price; ?>
							</div>
						</div>
						<!-- Product actions-->
						<div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
							<div class='text-center'><a class='btn btn-outline-dark mt-auto' onclick="history.back()">Back</a></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</section>
</body>
</html>