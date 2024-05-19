<?php

@include 'config.php';

if(isset($_POST['add_to_cart'])){

   $product_name = $_POST['product_name'];
   $product_price = $_POST['product_price'];
   $product_image = $_POST['product_image'];
   $product_quantity = 1;

   $select_cart = mysqli_query($connfood, "SELECT * FROM `cart` WHERE name = '$product_name'");

   if(mysqli_num_rows($select_cart) > 0){
      $message[] = 'product already added to cart';
   }else{
      $insert_product = mysqli_query($connfood, "INSERT INTO `cart`(name, price, image, quantity) VALUES('$product_name', '$product_price', '$product_image', '$product_quantity')");
      $message[] = 'Product Added to Cart Successfully';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Menu</title>
   <link rel="stylesheet" href="Style.css">


</head>
<body>
   
<?php

if(isset($message)){
   foreach($message as $message){
      echo '<div class="message"><span>'.$message.'</span> 
        <i class="x_icon" onclick="this.parentElement.style.display = `none`;"> 
            <img src="images/x_icon.png" width="18px">
        </i>
  </div>';
   };
};

?>

<section id="Home">

        <nav>

            <div class="logo1">
                <img src="images/logo.jpg">
                
            </div>


            <div class="logo">
                <img src="images/logo_name.png">
            </div>
      <?php
      
      $select_rows = mysqli_query($connfood, "SELECT * FROM `cart`") or die('query failed');
      $row_count = mysqli_num_rows($select_rows);

      ?>

            <ul>
                <li> <a href="outerclove.php">Home</a> </li>
                <li> <a href="#Menu">Menu</a> </li>
                <li> <a href="cart.php" class="cart"> Cart <span><?php echo $row_count; ?></span></a></li>
                
            </ul>

            

            <div class="icon">
                <img src="images/searchicon.jpg" width="18px">
                <img src="images/love.png" width="18px">
            </div>

        </nav>


<div class="container">

<section class="products">

<div class="menu" id="Menu">
     <h1>Our<span>Menu</span></h1>
</div>

   <div class="box-container">

      <?php
      
      $select_products = mysqli_query($connfood, "SELECT * FROM `products`");
      if(mysqli_num_rows($select_products) > 0){
         while($fetch_product = mysqli_fetch_assoc($select_products)){
      ?>

      <form action="" method="post">
         <div class="box">

         <div class="menu_image">
            <img src="uploaded_img/<?php echo $fetch_product['image']; ?>" alt="">
         </div>
            <h3><?php echo $fetch_product['name']; ?></h3>

            <div class="price">LKR <?php echo $fetch_product['price']; ?></div>

            <input type="hidden" name="product_name" value="<?php echo $fetch_product['name']; ?>">
            <input type="hidden" name="product_price" value="<?php echo $fetch_product['price']; ?>">
            <input type="hidden" name="product_image" value="<?php echo $fetch_product['image']; ?>">

            <input type="submit" class="btn" value="Add to Cart" name="add_to_cart">
         </div>
      </form>

      <?php
         };
      };
      ?>

   </div>

</section>

</div>


</body>
</html>