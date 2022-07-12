<?php
//connect the controller
require("../controllers/customer_controller.php");

//check for 
if (isset($_POST['regis'])){
	//register user
	//grab from data
	$customer_name = ($_POST['customer_name']);
	$customer_email = ($_POST['customer_email']);
	$customer_password = ($_POST['customer_password']);
	$customer_no = ($_POST['customer_no']);
	$user_role = 2;

	//call a controller
	$check = insert_new_customer_ctr($customer_name,$customer_email,$customer_password,$customer_no,$user_role);
	if ($check){
		header("location:../view/login.php");
	} else {
		echo "Insert failed";
	}
}



?>