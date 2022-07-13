<?php
include("../controllers/product_controller.php");

$productlist=get_all_product_ctr();
if (isset($_GET['vid'])) {
    //getting the id and product list
    $pidd= $_GET['vid'];
    $product_list=get_one_product_ctr($pidd);
    
    $product_cat= $product_list['product_cat'];
    $cname=get_one_category_ctr($product_cat);
    $product_title= $product_list['product_title'];
    $product_price= $product_list['product_price'];
    $product_desc= $product_list['product_desc'];
    $product_image= $product_list['product_image'];
    $product_keywords= $product_list['product_keywords'];
    # code...
}

function cart_count(){
    $c_id= get_id();
    $total= select_total_qty_from_cart_ctr($c_id);
    $total=$total[0];
    $total1=$total['SUM(qty)'];
    return $total1;
}

?>