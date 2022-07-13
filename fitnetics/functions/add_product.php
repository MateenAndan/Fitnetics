<?php
//connect the controller
require("../controllers/product_controller.php");

//check for 
if (isset($_POST['add_product'])){
	//register user
	//grab from data
	$target= "../images/".basename($_FILES['pimage']['name']);
	$pcat = ($_POST['pcat']);
	$ptitle = ($_POST['ptitle']);
	$pprice = ($_POST['pprice']);
	$pdesc = ($_POST['pdesc']);
	$pimage = ($_FILES['pimage']['name']);
	$pkey = ($_POST['pkey']);

	

	//call a controller
	$check = insert_product_ctr($pcat,$ptitle,$pprice,$pdesc,$pimage,$pkey);

	if ($check){
		header("location:../admin/product.php");

		if (move_uploaded_file($_FILES['pimage']['tmp_name'], $target)) {
			echo "success";
        # code...
		}else {
			echo "fail";
		}
		header("location:../admin/product.php");

	} else {
		echo "Insert failed";
	}

}

if (isset($_GET['delete'])){
	$productID= $_GET['delete'];
	$check= delete_product_ctr($productID);
	if ($check) {
		header("location:../admin/product.php");
	} else {
		echo "fail";
	}

}


?>