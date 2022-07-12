<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

 
 //for delete from cart
 if (isset($_GET['delete'])) {
    $p_id= $_GET['delete'];
    $c_id= get_id ();
    $check= delete_from_cart_ctr($p_id,$c_id);
    if ($check) {
        header("location:../view/cart.php");
        
    } else {
      echo "fail";
    }
 }

?>