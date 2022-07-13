<?php 
include"../controllers/product_controller.php";
include("anavbar.php");
?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="../css/index.css">
  <title>Update Category</title>
</head>
<body>
  <?php 
  $get_id = $_GET['cid']; 

  $one_category = get_one_category_ctr($get_id);
          // print_r($one_brand);
  ?>
  <form action="../functions/update_category.php" method="post">
    <div class="container">
      <h1>Update a Category</h1>
      <p>Please fill this to update a Category</p>
      <hr>
      <label for="cidd"><b>Category Id</b></label>
      <input  value = "<?php echo $one_category['cat_id']; ?>" type="hidden" name="cidd" >

      <label for="cnamee"><b>Category Name</b></label>
      <input type="text" value = "<?php echo $one_category['cat_name']; ?>" placeholder="Enter New Category Name" name="cnamee" required>
      <hr>

      <button type="submit" value="Update a Category" name="update_category" class="registerbtn">Update Category</button>
    </div>
  </form>
</body>
</html>
