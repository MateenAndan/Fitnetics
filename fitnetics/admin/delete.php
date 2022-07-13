<?php

//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_GET['delete_brand'])){
	//register user
	//grab from data
	$bidd = ($_GET['bidd']);
	

	//call a controller
	$check = delete_brand_ctr($bid);

	// if ($check){
	// 	header("location:../admin/brand.php");
	// } else {
	// 	echo "Insert failed";
	// }
}


?>