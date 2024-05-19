<?php

@include 'config.php';

if(isset($_POST['order_btn'])){

   $name = $_POST['name'];
   $number = $_POST['number'];
   $email = $_POST['email'];
   $method = $_POST['method'];
   $flat = $_POST['flat'];
   $street = $_POST['street'];
   $city = $_POST['city'];

   $cart_query = mysqli_query($connfood, "SELECT * FROM `cart`");
   $price_total = 0;
   if(mysqli_num_rows($cart_query) > 0){
      while($product_item = mysqli_fetch_assoc($cart_query)){
         $product_name[] = $product_item['name'] .' ('. $product_item['quantity'] .') ';

         $product_price = number_format($product_item['price'] * $product_item['quantity']);
         $price_total += $product_price;
      };
   };

   $total_product = implode(', ',$product_name);
   $detail_query = mysqli_query($connfood, "INSERT INTO `order`(name, number, email, method, flat, street, city, total_products, total_price) VALUES('$name','$number','$email','$method','$flat','$street','$city','$total_product','$price_total')") or die('query failed');

   if($cart_query && $detail_query){
      echo "
      <div class='order-message-container'>
      <div class='message-container'>

         <h3>Your Order Is Placed Successfully</h3>

         <div class='order-detail'>

            <span>".$total_product."</span>
            <span class='total'> Total : LKR ".$price_total."  </span>
         </div>

         <div class='customer-details'>
            <p> Name : <span>".$name."</span> </p>
            <p> Phone Number : <span>".$number."</span> </p>
            <p> Email : <span>".$email."</span> </p>
            <p> Address : <span>".$flat.", ".$street.", ".$city."</span> </p>
            <p> Payment Mode : <span>".$method."</span> </p>
            <h4>(Cash On Delivery)</h4>

         </div>
            <a href='menu.php' class='shop-btn'>Continue Shopping</a>
         </div>

      </div>
      ";
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Checkout</title>
   <link rel="stylesheet" href="style.css">
 

</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="checkout-form">

   <h1 class="heading">Complete Your <span>Order</span></h1>

   <form action="" method="post">

   <div class="display-order">
      <?php
         $select_cart = mysqli_query($connfood, "SELECT * FROM `cart`");
         $total = 0;
         $grand_total = 0;

         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){

            $total_price = number_format($fetch_cart['price'] * $fetch_cart['quantity']);

            $grand_total = $total += $total_price;
      ?>
      <span><?= $fetch_cart['name']; ?>(<?= $fetch_cart['quantity']; ?>)
      </span>


      <?php
         }
      }else{
         echo "<div class='display-order'><span>your cart is empty!</span></div>";
      }
      ?>
      <span class="grand-total"> Grand Total : LKR <?= $grand_total; ?> 
      </span>
   </div>

      <div class="flex">

         <div class="inputBox">
            <span>Full Name</span>
            <input type="text" placeholder="eg: Mohamed Usama" name="name" required>
         </div>

         <div class="inputBox">
            <span>Number</span>
            <input type="number" placeholder="eg: 0717878014" name="number" required>
         </div>

         <div class="inputBox">
            <span>Email</span>
            <input type="email" placeholder="eg: Usama.net@gmail.com" name="email" required>
         </div>

         <div class="inputBox">
            <span>Payment Method</span>
            <select name="method">
               <option value="Cash on Delivery" selected>Cash On Devlivery</option>
            </select>
         </div>

         <div class="inputBox">
            <span>Address Line 1</span>
            <input type="text" placeholder="eg: Flat no." name="flat" required>
         </div>

         <div class="inputBox">
            <span>Address Line 2</span>
            <input type="text" placeholder="eg: Street Name" name="street" required>
         </div>

         <div class="inputBox">
            <span>City</span>
            <input type="text" placeholder="eg: Dehivala" name="city" required>
         </div>

         
      </div>
      <input type="submit" value="Order Now" name="order_btn" class="btn">
   </form>

</section>

</div>

   
</body>
</html>