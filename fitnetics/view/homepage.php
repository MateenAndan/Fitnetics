<?php 
include ("navbar.php");
include("../functions/product_functions.php");


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Homepage</title>
</head>
<body>
  <!-- Header-->
  <header class="bg-dark py-5 bg-image" style="background-image: url('../images/slider-bg.jpg');
      height: 400px;">
    <div class="container px-4 px-lg-5 my-5">
      <div class="text-center text-white">
        <h1 class="display-4 fw-bolder">GET IN SHAPE</h1>
        <p class="lead fw-normal text-white-50 mb-0">Get all your Gym Equipments</p>
      </div>
    </div>
  </header>
  <!-- Section-->
  <section class="py-5">
    <div class="container px-4 px-lg-5 mt-5">
      <div class="row gx-4 gx-lg-5 row-cols-2 row-cols-md-3 row-cols-xl-4 justify-content-center">
        <?php

        $productlist = get_all_product_ctr();
        foreach ($productlist as $aproduct) {
          $product_id = $aproduct['product_id'];
          $product_title = $aproduct['product_title'];
          $product_price = $aproduct['product_price'];
          $product_image = $aproduct['product_image'];
          $product_desc = $aproduct['product_desc'];
          if (logged_in()==true) {
            // code...
            echo "
          <div class='col mb-5'>
          <div class='card h-100'>
          <!-- Product image-->
          <img class='card-img-top' src='../images/$product_image' alt='product image' />
          <!-- Product details-->
          <div class='card-body p-4'>
          <div class='text-center'>
          <!-- Product name-->
          <h5 class='fw-bolder'>$product_title</h5>
          <!-- Product price-->
          GHS $product_price
          </div>
          </div>
          <!-- Product actions-->
          <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='../functions/add_to_cart.php?pid=$product_id''>Add to cart</a></div>
          </div>

          <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='single_product.php?vid=$product_id''>View Product</a></div>
          </div>
          </div>
          </div>
          ";
          }

          else{
            echo "
            <div class='col mb-5'>
          <div class='card h-100'>
          <!-- Product image-->
          <img class='card-img-top' src='../images/$product_image' alt='product image' />
          <!-- Product details-->
          <div class='card-body p-4'>
          <div class='text-center'>
          <!-- Product name-->
          <h5 class='fw-bolder'>$product_title</h5>
          <!-- Product product desc-->
          Description :$product_desc
          <br>
          <!-- Product price-->
          GHS $product_price
          </div>
          </div>
          <!-- Product actions-->
          <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='login.php'>Add to cart</a></div>
          </div>

          <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='single_product.php?vid=$product_id''>View Product</a></div>
          </div>
          </div>
          </div>

            ";
          }
          
        }

        ?>

      </div>
    </div>
  </section>
  <!-- Footer-->
  <footer class="py-5 bg-dark">
    <div class="container"><p class="m-0 text-center text-white">Copyright &copy; Fitnetics 2022</p></div>
  </footer>
  <!-- Bootstrap core JS-->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
  <!-- Core theme JS-->
  <script src="../js/scripts.js"></script>
</body>
</html>
