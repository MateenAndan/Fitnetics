<?php 
include("anavbar.php");

 ?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="../css/index.css">
	<title>Add Category</title>
</head>
<body>
	<form action="../functions/add_category.php" method="post">
	  <div class="container">
	    <h1>Add a Category</h1>
	    <p>Please fill this to add a Category</p>
	    <hr>
	    <label for="cname"><b>Category Name</b></label>
	    <input type="text" placeholder="Enter Category Name" name="cname" required>
	    <hr>

	    <button type="submit" value="Add a Category" name="add_category" class="registerbtn">Add Category</button>
	  </div>
	</form>
</body>
</html>
