<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

 if (isset($_GET['pid'])) {
    $p_id= $_GET['pid'];
    $c_id= get_id();
     $ip_add= $_SERVER['REMOTE_ADDR'];
     $qty= 1;
     $evaluate=evaluate_ctr($p_id,$c_id);
     //print_r($evaluate);
     if ($evaluate!="") {
      echo "<div style='text-align:center;font-size:12px;color:white;background-color:grey;'>";
      echo "The following errors occured<br><br>";
      echo $evaluate;
      echo "</div>";
     }else {
         $check= add_to_cart_ctr($p_id,$ip_add,$c_id,$qty);
         if ($check) {
                  header("location:../view/homepage.php");
               
         } else {
            //header("location:../view/loggedin_index.php");
            // echo "sorry increase qty in cart";
            echo "fail";
         }
   }
 }
 
 

?>