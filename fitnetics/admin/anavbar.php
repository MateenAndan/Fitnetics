<?php
include("../settings/core.php");
// include("../controllers/product_controller.php");
check_login();
$adminn = check_admin();
if ($adminn == 1) {
	// code...
}else{
	// echo "no access";
}
// echo "this is the admin page";
// echo "this is the homepage";
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">

	<!-- Latest compiled and minified CSS -->
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

	<!-- Latest compiled JavaScript -->
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>


<nav class="navbar navbar-expand-sm navbar-dark bg-dark">
	<div class="container-fluid">
		<a class="navbar-brand" href="admin.php">Admin</a>
		<button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#mynavbar">
			<span class="navbar-toggler-icon"></span>
		</button>
		<div class="collapse navbar-collapse" id="mynavbar">
			<ul class="navbar-nav me-auto">

				<!-- <li class='nav-item'>
					<a class='nav-link' href='../view/admin_view/category.php'>Brands</a>
				</li> -->
				<li class='nav-item'>
					<a class='nav-link' href="category.php">Categories</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="product.php">Product</a>
				</li>

				<li class="nav-item">
					<a class="nav-link" href="../login/logout.php">Logout</a>
				</li>
			</ul>
			<form  role="search" action="../view/search_result.php" method="POST" class="d-flex">
				<input class="form-control me-2" type="text" placeholder="Search"  name="find">
				<button class="btn btn-primary" type="submit" name="submit22">Search</button>
			</form>
		</div>
	</div>
</nav>
<body>

</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {
		var url = window.location;
		$('ul.navbar a[href="'+ url +'"]').parent().addClass('active');
		$('ul.navbar a').filter(function() {
			return this.href == url;
		}).parent().addClass('active');
	});
</script> 


