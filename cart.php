<?php

@include 'config.php';

if(isset($_POST['update_update_btn'])){
   $update_value = $_POST['update_quantity'];
   $update_id = $_POST['update_quantity_id'];
   $update_quantity_query = mysqli_query($connfood, "UPDATE `cart` SET quantity = '$update_value' WHERE id = '$update_id'");
   if($update_quantity_query){
      header('location:cart.php');
   };
};

if(isset($_GET['remove'])){
   $remove_id = $_GET['remove'];  
   mysqli_query($connfood, "DELETE FROM `cart` WHERE id = '$remove_id'");
   header('location:cart.php');
};

if(isset($_GET['delete_all'])){
   mysqli_query($connfood, "DELETE FROM `cart`");
   header('location:cart.php');
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Food Cart</title>
   <link rel="stylesheet" href="style.css">


</head>
<body>

<?php include 'header.php'; ?>

<div class="container">

<section class="food-cart">

   <h1 class="heading">Food <span>Cart</span></h1>

   <table>

      <thead>
         <th>Image</th>
         <th>Name</th>
         <th>Price</th>
         <th>Quantity</th>
         <th>Total Price</th>
         <th>Action</th>
      </thead>

      <tbody>

         <?php 
         
         $select_cart = mysqli_query($connfood, "SELECT * FROM `cart`");
         $grand_total = 0;
         if(mysqli_num_rows($select_cart) > 0){
            while($fetch_cart = mysqli_fetch_assoc($select_cart)){
         ?>

         <tr>
            <td>
                <img src="uploaded_img/<?php echo $fetch_cart['image']; ?>" height="100" alt="">
            </td>

            <td>
                <?php echo $fetch_cart['name']; ?>
            </td>

            <td>LKR <?php echo number_format($fetch_cart['price']); ?></td>

            <td>
               <form action="" method="post">
                  <input type="hidden" name="update_quantity_id"  value="<?php echo $fetch_cart['id']; ?>" >
                  <input type="number" name="update_quantity" min="1"  value="<?php echo $fetch_cart['quantity']; ?>" >
                  <input type="submit" value="update" name="update_update_btn">
               </form> 
            </td>

            <td>LKR<?php echo $sub_total = number_format($fetch_cart['price'] * $fetch_cart['quantity']); ?></td>

            <td>
                <a href="cart.php?remove=<?php echo $fetch_cart['id']; ?>" onclick="return confirm('Remove item from cart?')" class="delete-btn"> 
                <i class="trash_icon">
                    <img src="images/trash_icon.png" width="28px"> 
                </i> Remove</a></td>
         </tr>

         <?php
           $grand_total += $sub_total;  
            };
         };
         ?>

    
         <tr class="table-bottom">
            <td>
                <a href="menu.php" class="shop-btn">Continue Shopping</a>
            </td>

            <td colspan="3">Grand Total</td>
            <td>LKR <?php echo $grand_total; ?></td>
            <td>
                <a href="cart.php?delete_all" onclick="return confirm('Are you sure you want to delete all?');" class="delete-btn"> 
                <i class="trash_icon">
                    <img src="images/trash_icon.png" width="28px">
                 </i> Delete All</a>
            </td>
         </tr>

      </tbody>

   </table>

   <div class="checkout-btn">
      <a href="checkout.php" class="btnn <?= ($grand_total > 1)?'':'disabled'; ?>">Proceed to Checkout</a>
   </div>

</section>

</div>
   


</body>
</html>