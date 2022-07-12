<?php 
include ("navbar.php");
include("../functions/product_functions.php");

?>

<!DOCTYPE html>
<html>

<head>
  <!-- Basic -->
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <!-- Mobile Metas -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <!-- Site Metas -->
  <meta name="keywords" content="" />
  <meta name="description" content="" />
  <meta name="author" content="" />

  <title>Fitnetics Products</title>

</head>

<body class="sub_page">

  <!-- product section -->

      <section class='product_section layout_padding'>
      
      <div class='heading_container heading_center'>
      <h2>
      New products
      </h2>
      </div>
        <?php 
    $productlist = get_all_product_ctr();
    foreach ($productlist as $aproduct) {
      $product_id = $aproduct['product_id'];
      $product_title = $aproduct['product_title'];
      $product_price = $aproduct['product_price'];
      $product_image = $aproduct['product_image'];
      echo "
      <div class='container'>
        <div class='product_container'>
        <div class='row'>
        <div class='col-sm-6 col-md-4'>
        <div class='box'>
        <a href='../functions/add_to_cart.php?pid=$product_id' class='p_cart'>
        <i class='fa fa-cart-plus' aria-hidden='true'></i>
        </a>
        <div class='img-box'>
        <img src='../images/$product_image' alt=''>
        </div>
        <div class='detail-box'>
        <a href='single_product.php?vid=$product_id' class='p_name'>
        $product_title
        </a>
        <h6 class='p_price'>
        <span class='new_price'>
        GHS $product_price
        </span>
        </h6>
        </div>
        </div>
        </div>
        </div>
              </div>
        </div>
         ";
    }
     ?>



      <div class='btn-box'>
      <a href=''>
      See More
      </a>
      </div>

      </section>


   
 <!-- 
  <div class="btn-box">
    <a href="">
      See More
    </a>
  </div>
</div>
</section> -->


<!-- end product section -->

<!-- info section -->

<section class="info_section layout_padding2">
  <div class="container">
    <div class="row">
      <div class="col-lg-9 mx-auto">
        <h4>
          Contact Us
        </h4>
        <div class="contact_items">
          <a href="">
            <div class="img-box">
              <i class="fa fa-map-marker" aria-hidden="true"></i>
            </div>
            <h6>
              Location
            </h6>
          </a>
          <a href="">
            <div class="img-box">
              <i class="fa fa-envelope" aria-hidden="true"></i>
            </div>
            <h6>
              demo@gmail.com
            </h6>
          </a>
          <a href="">
            <div class="img-box">
              <i class="fa fa-phone" aria-hidden="true"></i>
            </div>
            <h6>
              (+12 1234456789)
            </h6>
          </a>
        </div>
      </div>
    </div>

    <div class="box">
      <div class="info_social">
        <div>
          <a href="">
            <i class="fa fa-facebook" aria-hidden="true"></i>
          </a>
        </div>
        <div>
          <a href="">
            <i class="fa fa-twitter" aria-hidden="true"></i>
          </a>
        </div>
        <div>
          <a href="">
            <i class="fa fa-linkedin" aria-hidden="true"></i>
          </a>
        </div>
        <div>
          <a href="">
            <i class="fa fa-instagram" aria-hidden="true"></i>
          </a>
        </div>
      </div>
    </div>
  </div>
</section>

<!-- end info section -->
<!-- footer section -->
<section class="footer_section">
  <div class="container">
    <div class="row">
      <div class="col-lg-7 col-md-9 mx-auto">
        <p>
          &copy; <span id="displayYear"></span> All Rights Reserved By
          <a href="https://html.design/">Free Html Templates</a>
        </p>
      </div>
    </div>
  </div>
</section>
<!-- footer section -->


<!-- jQery -->
<!-- Google Map -->
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCh39n5U-4IoWpsVGUHWdqB6puEkhRLdmI&callback=myMap">
</script>
<!-- End Google Map -->
</body>

</html>