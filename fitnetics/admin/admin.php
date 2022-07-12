<?php
// include("../settings/core.php");
include("../functions/product_functions.php");
include("anavbar.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link rel="stylesheet" href="../css/index.css"> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
	<?php
	if ($adminn == 1) {
		// code...
		echo "<title>Admin Homepage</title>";
	}else{

	}

	?>
	<title>Homepage</title>
</head>
<body>
	<!-- start php
	// if ($adminn == 1) {
		// code...
		//echo"

		//<a class ='btn btn-primary btn-sm' href='../admin/brand.php'> Brands</a>

		//<a class ='btn btn-primary btn-sm' href='../admin/category.php'> Categories</a>

		//";
	//}
	//end>
	<a class ='btn btn-primary btn-sm' href="../login/register.php">Register</a>
	<a class ='btn btn-primary btn-sm' href='../admin/product.php'> Add product</a>
	<a class ='btn btn-primary btn-sm' href="../login/logout.php">Logout</a> -->


	<br>
	<br>


	<h4>Products for Sale</h4>
	<div class="container">
		<div class='row row-cols-1 row-cols-md-3 g-4' >
			<?php
			$productlist = get_all_product_ctr();
			foreach ($productlist as $aproduct) {
				$product_id = $aproduct['product_id'];
				$product_title = $aproduct['product_title'];
				$product_price = $aproduct['product_price'];
				$product_image = $aproduct['product_image'];
				echo "
				
				<div class='card-columns'>
				
				<div class='card'>
				<img src=' ../images/$product_image' class='card-img-top' style='height: 500px;'>
				<div class='card-body style='font-size:20px;' >
				Name: $product_title <br>
				Price:  GHS $product_price <br> <br> 
				<a href='../functions/add_to_cart.php?pid=$product_id' class='btn btn-primary'>Add to Cart</a>
				<a href='single_product.php?vid=$product_id' class='btn btn-primary'>View</a>
				</div>
				</div>
				
				</div>
				
				";
			}
			?>
		</div>
	</div>
</body>

</html>