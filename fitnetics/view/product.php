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

<body>
  <!-- Section-->
  <section class="py-5">
    <h2 style="text-align: center;">New products</h2>
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
          echo "
          <div class='col mb-5'>
          <div class='card h-100'>
          <!-- Product image-->
          <img class='card-img-top' src='../images/$product_image' alt='product image'/>
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
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='../functions/add_to_cart.php?pid=$product_id''>Add to cart</a></div>
          </div>

          <div class='card-footer p-4 pt-0 border-top-0 bg-transparent'>
          <div class='text-center'><a class='btn btn-outline-dark mt-auto' href='single_product.php?vid=$product_id''>View Product</a></div>
          </div>
          </div>
          </div>
          ";
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