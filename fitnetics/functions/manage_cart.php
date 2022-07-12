<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

 
 //for increase quantity in cart
 if (isset($_GET['update1'])) {
    $p_id= $_GET['update1'];
    $c_id= get_id();
    $qty=select_one_from_cart_ctr($p_id,$c_id);
    $q1= $qty['qty'];
    $check= increase_cart_ctr($p_id,$c_id,$q1);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
    }
 }

 //for decrease quantity in cart
 if (isset($_GET['decrease'])) {
    $p_id= $_GET['decrease'];
    $c_id= get_id();
    $qty=select_one_from_cart_ctr($p_id,$c_id);
    $q1= $qty['qty'];
    $check= decrease_cart_ctr($p_id,$c_id,$q1);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
    }
 }

?>