<?php
require("../controllers/product_controller.php");

if (isset($_POST['update_category'])){
	//update brand
	//grab from data
	$cnamee = ($_POST['cnamee']);
	$cidd = ($_POST['cidd']);

	//call a controller
	$check = update_category_ctr($cnamee,$cidd);

	if ($check){
		header("location:../admin/category.php");
	} else {
		echo "Update failed";
	}
}

?>