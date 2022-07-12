<?php

//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['add_brand'])){
	//register user
	//grab from data
	$bname = ($_POST['bname']);
	

	//call a controller
	$check = insert_brand_ctr($bname);

	if ($check){
		header("location:../admin/brand.php");
	} else {
		echo "Insert failed";
	}
}


?>