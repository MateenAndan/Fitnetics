<?php
// include("../settings/core.php");
include("../controllers/product_controller.php");
include("anavbar.php");
// check_login();

// $adminn = check_admin();
// if ($adminn == 1) {
// 	// code...
// }else{
// 	echo "no access";
// }
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous"> -->
	<title>Categories</title>
</head>
<body>
	<div class="table-responsive">
		<h1>List of Categories</h1>
		<a class= "btn btn-success" href="add_category_page.php" role="button">New Category</a>
		<br>
		<table class="table" style="width: 450px;">
			<thead>
				<tr>
					<th>ID</th>
					<th>Categories</th>
					<th>Actions</th>
				</tr>
			</thead>

			<tbody>
				<?php
				$cat_list = get_all_category_ctr();
				foreach ($cat_list as $acategory) {
					// code...
					$cid = $acategory['cat_id'];
					$cname = $acategory['cat_name'];
					echo"
				 	<tr>
				 		<td>$cid</td>
						<td>$cname</td>
						<td>
						<a class ='btn btn-primary btn-sm' href='../view/update_category_page.php?cid=$cid'>Update</a>
						<a class = 'btn btn-danger btn-sm remove'>Delete</a>
						</td>
					</tr>";
				}
				
				?>
			</tbody>
		</table>
	</div>
	
</body>
</html>

<script>
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
</script> 
