<?php
//connect to the user account class
include("../classes/customer_class.php");

//sanitize data
function cleanText($data) 
{
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
function insert_new_customer_ctr ($a,$b,$c,$d,$e){
  $insert = new customer_class();
  return $insert->customer_register_cls($a,$b,$c,$d,$e);
}

// function insert_brand_ctr($bname){
//   $insert_brand = new customer_class();
//   return $insert_brand->add_brand_cls($bname);
// }



//--SELECT--//
function select_customer_ctr($b,$c){
  $select = new customer_class();
  return $select->customer_login_cls($b,$c);
}


//--UPDATE--//

//--DELETE--//

?>