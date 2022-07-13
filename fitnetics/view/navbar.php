<?php
include("../settings/core.php");
if (logged_in()==true) {
  // code...
  $adminn = check_admin();
  if ($adminn == 1) {
    header('location:../admin/admin.php');
  }else{
  // echo "no access";
  }
}

?>

<!DOCTYPE html>
<html>

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <!-- Favicon-->
  <link rel="icon" type="image/x-icon" href="../assets/favicon.ico" />
  <!-- Bootstrap icons-->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.5.0/font/bootstrap-icons.css" rel="stylesheet" />
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- Latest compiled JavaScript -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"></script>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container px-4 px-lg-5">
      <a class="navbar-brand" href="homepage.php">Fitnetics</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0 ms-lg-4">
          <li class="nav-item"><a class="nav-link" href="homepage.php">Home</a></li>
          <li class="nav-item"><a class="nav-link" href="product.php">Product</a></li>
        </ul>
        <form  role="search" action="../view/search_result.php" method="POST" class="d-flex">
          <input class="form-control me-2" type="search" placeholder="Search"  name="find">
          <button class="btn btn-outline-dark mt-auto" type="submit" name="submit22">Search</button>
        </form>
        <form class="d-flex">

          <?php 
          if (logged_in() == true) {
            echo "
            <a class='btn btn-outline-dark' href='cart.php'>
            <i class='bi-cart-fill me-1'></i>
            Cart
            </a>

            <a class='btn btn-outline-dark' href='../login/logout.php'>
            <i class='bi bi-box-arrow-right'></i>
            Logout
            </a>
            ";
          }
          else{
            echo "
            <a class='btn btn-outline-dark' href='../view/login.php'>
            <i class='bi-people-fill me-1'></i>
            Login
            </a>



            ";
          }


          ?>
          <!-- <a class="btn btn-outline-dark" href="../login/logout.php">
            <i class="bi bi-box-arrow-right"></i>
            Logout
          </a> -->
        </form>
      </div>
    </div>
  </nav>
</body>
</html>


<script type="text/javascript">
  $(document).ready(function () {
    var url = window.location;
    $('ul.navbar a[href="'+ url +'"]').parent().addClass('active');
    $('ul.navbar a').filter(function() {
      return this.href == url;
    }).parent().addClass('active');
  });
</script> 