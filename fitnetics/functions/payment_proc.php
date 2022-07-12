<?php
include ("../settings/core.php");
require("../controllers/cart_controller.php");

$url = "https://api.paystack.co/transaction/initialize";
$fields = [
   'email' => $_GET['email'],
   'amount' => $_GET['amount']
];
$fields_string = http_build_query($fields);
 //open connection
$ch = curl_init();

 //set the url, number of POST vars, POST data
curl_setopt($ch,CURLOPT_URL, $url);
curl_setopt($ch,CURLOPT_POST, true);
curl_setopt($ch,CURLOPT_POSTFIELDS, $fields_string);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
   "Authorization: Bearer sk_test_372a36a6617f205b000d2dd689dad56267256071",
   "Cache-Control: no-cache",
));

 //So that curl_exec returns the contents of the cURL; rather than echoing it
curl_setopt($ch,CURLOPT_RETURNTRANSFER, true); 

 //execute post
$result = curl_exec($ch);
echo $result;

if ($result==true) {
    //save transaction in order table
  $ino=mt_rand();
  $customer_id= get_id();
  $ostatus='Success';
  $odate=date('Y-m-d');
  $order= order_ctr($customer_id,$ino,$odate,$ostatus);

  if ($order) {
     echo "sucess 1";
  }else {
     echo "fail 1";
  }
 //save payment details
  $order_id= order_id_ctr($ino);
  $order_id=$order_id['order_id'];
  $amt= $_GET['amount'];
  $currency= 'GHS';
  $payment= payment_ctr($amt,$customer_id,$order_id,$currency,$odate);
  if ($payment) {
     echo "sucess 2";
  }else {
     echo "fail 2";
  }
 // delete items from cart
//  $del=remove_all_from_cart_ctr($customer_id);
//  if ($del) {
//     echo "sucess 3";
//    }else {
//     echo "fail 3";
//    }
 //redirect to success page 

 // send details to email

 //redirect to failed page

}


?>