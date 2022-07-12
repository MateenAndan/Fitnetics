<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['add_category'])){
	//register user
	//grab from data
	$cname = ($_POST['cname']);
	

	//call a controller
	$check = insert_category_ctr($cname);

	if ($check){
		header("location:../admin/category.php");
	} else {
		echo "Insert failed";
	}
}


?>