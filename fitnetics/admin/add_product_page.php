<?php 
include("anavbar.php");
include"../controllers/product_controller.php";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/index.css">
	<title>Add Product</title>
</head>
<body>
	<form action="../functions/add_product.php" method="post" enctype="multipart/form-data">
		<div class="container">
			<h1>Add a Product</h1>
			<p>Please fill in this form to Add a product</p>
			<hr>

			<label for="ptitle"><b>Product Title</b></label>
			<input type="text" placeholder="Enter Product Name" name="ptitle"required>
			

			<label>Select Product Category:</label>
			<select class = "form-control" name = "pcat">
				<option>-- Select Category --</option>
				<?php 
				$cat_list = get_all_category_ctr();
				if ($cat_list) {
		                    // course found

					foreach ($cat_list as $one_cat) {
						$cat_id = $one_cat['cat_id'];
						$cat_name = $one_cat['cat_name'];
		                        // code...
						echo "<option value='$cat_id'>$cat_name</option>";
					}
				}else{
		                    //no course found
					echo "<option value='no_found'>No Category found</option>";
				}
				?>
			</select>

			<label for="pprice"><b>Product Price (in Ghana Cedis)</b></label>
			<input type="text" placeholder="Enter Product Price (Ghana Cedi)" name="pprice"required>
			
			<label for="pdesc"><b>Product Description</b></label>
			<input type="text" placeholder="Enter Product Description" name="pdesc" required>
			
			<label for="pkey"><b>Product keyword</b></label>
			<input type="text" placeholder="Enter Product keyword" name="pkey"required>

			<label class="image" for="pimage"><b>Select Product Image</b></label>
			<input type="file" name="pimage" class="image">


			<hr>

			<button type="submit" value="Add new product" name="add_product" class="registerbtn">Add Product</button>
		</div>
	</form>
</body>
</html>