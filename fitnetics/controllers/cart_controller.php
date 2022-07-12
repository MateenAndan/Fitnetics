<?php
//connect to the user account class
include("../classes/cart_class.php");

//sanitize data
function cleanText($data) {
  $data = trim($data);
  //$data = stripslashes($data);
  //$data = htmlspecialchars($data);
  return $data;
}



//--INSERT--//
// add to cart
function add_to_cart_ctr($p_id,$ip_add,$c_id,$qty){
    $insert= new cart_class();
    return $insert->add_to_cart_cls($p_id,$ip_add,$c_id,$qty);
}

//add to order
function order_ctr($customer_id,$ino,$odate,$ostatus){
    $insert = new cart_class();
    return $insert->order_cls($customer_id,$ino,$odate,$ostatus);
}


//add to order details
function order_details_ctr($p_id,$qty){
    $insert = new cart_class();
    return $insert->order_details_cls($p_id,$qty);
}

//add to payment
function payment_ctr($amt,$customer_id,$order_id,$currency,$payment_date){
    $insert = new cart_class();
    return $insert->payment_cls($amt,$customer_id,$order_id,$currency,$payment_date);
}


//--SELECT--//
function view_cart_ctr($c_id){
    $view= new cart_class();
    return $view->view_cart_cls($c_id);
}

function evaluate_ctr($p_id,$c_id){
    $evaluate= new cart_class();
    return $evaluate->evaluate_cls($p_id,$c_id);
}

function select_total_qty_from_cart_ctr($c_id){
    $qty= new cart_class();
    return $qty->select_total_qty_from_cart_cls($c_id);
}

function select_one_from_cart_ctr($p_id,$c_id){
    $view= new cart_class();
    return $view->select_one_from_cart_cls($p_id,$c_id);
}

function select_total_price_ctr($c_id){
    $qty= new cart_class;
    return $qty -> select_total_price_cls($c_id);
}

function email_ctr($c_id){
  $email= new cart_class;
  return $email -> email_cls($c_id);
}

function order_id_ctr($invoice_no){
  $email= new cart_class;
  return $email -> order_id_cls($invoice_no);
}

// selecting the qty added to a cart by a customer


//--UPDATE--//
function increase_cart_ctr($p_id,$c_id,$qty){
    $view= new cart_class();
    return $view->increase_cart_cls($p_id,$c_id,$qty);
}

function decrease_cart_ctr($p_id,$c_id,$qty){
    $view= new cart_class();
    return $view->decrease_cart_cls($p_id,$c_id,$qty);
}


//--DELETE--//
// remove from cart
function delete_from_cart_ctr($p_id,$c_id){
    $remove= new cart_class();
    return $remove->delete_from_cart_cls($p_id,$c_id);
}


?>