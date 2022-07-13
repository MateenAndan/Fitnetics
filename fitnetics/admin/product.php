<?php
// include("../settings/core.php");
include("../controllers/product_controller.php");
// check_login();
include("anavbar.php");

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <script src="../js/delete.js"></script> -->
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->

	<title>Products</title>
</head>
<body>
	<div class="table-responsive">
		<h1>List of Products</h1>
		<a class= "btn btn-success" href="add_product_page.php" role="button">New Product</a>
		<br>
		<table class="table">
			<thead>
				<tr>
					<th>ID</th>
					<th>Product Name</th>
					<th>Product Category</th>
					<th>Product Price</th>
					<th>Product Description</th>
					<th>Product Keyword</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$product_list = get_all_product_ctr();
				foreach ($product_list as $aproduct) {
					// code...
					$pid = $aproduct['product_id'];
					$pname = $aproduct['product_title'];
					$pcat = $aproduct['product_cat'];
					$pprice = $aproduct['product_price'];
					$pdesc = $aproduct['product_desc'];
					$pkey = $aproduct['product_keywords'];

					echo"
					<tr>
					<td>$pid</td>
					<td>$pname</td>
					<td>$pcat</td>
					<td>$pprice</td>
					<td>$pdesc</td>
					<td>$pkey</td>

					<td>
					<a class ='btn btn-primary btn-sm' href='single_product_admin.php?vid=$pid'>View</a>
					<a class ='btn btn-primary btn-sm' href='update_product_page.php?pid=$pid'>Update</a>
					<a class = 'btn btn-danger btn-sm' href='../functions/add_product.php?delete=$pid'>Delete</a>
					</td>
					</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
	
</body>
</html>

<!-- <script>
	$(".remove").click(function(){
		var bid = $(this).parents("tr").attr("bid");
		if(confirm('Are you sure to delete this record ?'))
		{
			$.ajax({
				url: 'delete.php',
				type: 'GET',
				data: {bid: bid},
				error: function() {
					alert('Something is wrong');
				},
				success: function(data) {
					$("#"+bid).remove();
					alert("Record deleted successfully");  
				}
			});
		}
	});
</script>  -->