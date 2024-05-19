<?php

@include 'config.php';

session_start(); 


/* Display login user name 
if(!isset($_SESSION['staff_name'])){
    header('location:login_form.php');
} 
*/



/* add foods to table */

if(isset($_POST['add_product'])){
    $p_name = $_POST['p_name'];
    $p_price = $_POST['p_price'];
    $p_image = $_FILES['p_image']['name'];
    $p_image_tmp_name = $_FILES['p_image']['tmp_name'];
    $p_image_folder = 'uploaded_img/'.$p_image;

    $insert_query = mysqli_query($connfood, "INSERT INTO `products`(name, price, image) VALUES('$p_name', '$p_price', '$p_image')") or die('query failed');


    if($insert_query){
        move_uploaded_file($p_image_tmp_name, $p_image_folder);
        $message[] = 'Product Added Succesfully';
     }else{
        $message[] = 'Could not add the product'; 
     }
  };

  /*  Delete added food from table */

  if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($connfood, "DELETE FROM `products` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
       $message[] ='Product has been deleted';
    }else{
       $message[] ='Product could not be delete';
    };
 };


 /*  Delete Reservstions food from table */

 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($connfood, "DELETE FROM `bookings` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
       $message[] ='Reservation has been deleted';
    }else{
       $message[] ='Reservation could not be delete';
    };
 };


 /*  Delete Orders table */

 if(isset($_GET['delete'])){
    $delete_id = $_GET['delete'];
    $delete_query = mysqli_query($connfood, "DELETE FROM `order` WHERE id = $delete_id") or die('query failed');
    if($delete_query){
       $message[] ='Reservation has been deleted';
    }else{
       $message[] ='Reservation could not be delete';
    };
 };




?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Staff</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

<div class="content">
        <h1>
            Welcome Staff <span><?php echo $_SESSION['staff_name'] ?></span>
        </h1>
</div>

<section>
<!-- create form for add food-->
<section>

<form action="" method="post" class="add-product-form" enctype="multipart/form-data">

    <h3>Add a New Food</h3>

    <input type="text" name="p_name" placeholder="enter the product name" class="box" required>
    <input type="number" name="p_price" min="0" placeholder="enter the product price" class="box" required>
    <input type="file" name="p_image" accept="image/png, image/jpg, image/jpeg" class="box" required>

    <input type="submit" value="Add the Product" name="add_product" class="add-btn">

</form>
</section>

<!-- Table for show added menu items -->

<section class="display-menu-table">
    <table>
        <thead>
            <th>Foood Image</th>
            <th>Food Name</th>
            <th>Food Price</th>
            <th>Action</th>
        </thead>

        <tbody>
            <?php
            $select_products = mysqli_query($connfood, "SELECT * FROM `products`");
            if(mysqli_num_rows($select_products) > 0){
                while($row = mysqli_fetch_assoc($select_products)){
            ?>

            <tr>
                <td><img src = "uploaded_img/<?php echo $row['image']; ?>" height="100" alt=""></td>
                <td><?php echo $row['name']; ?></td>
                <td>LKR <?php echo $row['price']; ?></td>
                <td>
                <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are your sure you want to delete this?');">

                <i class="trash_icon">
                    <img src="images/trash_icon.png" width="28px">
                </i> Delete </a>

              </td>
         </tr>

        <?php
            };    
            }else{
               echo "<div class='Empty'> No Menu Added </div>";
            };
         ?>
        </tbody>
    </table>
</section>




<!-- Table for show reservation -->

<section class="display-reservation-table">

<div class="content">
        <h2>
            RESERVATIONS
        </h2>
    </div>
    <table>
        <thead>
            <th>Booking ID </th>
            <th>Customer Name </th>
            <th>Customer Email</th>
            <th>Customer Phone Number</th>
            <th>Table No.</th>
            <th>Check-in Date</th>
            <th>Check-in Time</th>
            <th>Adults</th>
            <th>Child</th>
            <th>Action</th>

        </thead>

        <tbody>
            <?php
            $select_reservation = mysqli_query($connfood, "SELECT * FROM `bookings`");
            if(mysqli_num_rows($select_reservation) > 0){
                while($row = mysqli_fetch_assoc($select_reservation)){
            ?>

            <tr>
                <td><?php echo $row['booking_id']; ?></td>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['tables']; ?></td>
                <td><?php echo $row['check_in_date']; ?></td>
                <td><?php echo $row['check_in_time']; ?></td>
                <td><?php echo $row['adults']; ?></td>
                <td><?php echo $row['childs']; ?></td>
                <td>
                <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are your sure you want to delete this?');">

                <i class="trash_icon">
                    <img src="images/trash_icon.png" width="28px">
                </i> Delete </a>

              </td>
            </tr>

        <?php
            };    
            }else{
               echo "<div class='Empty'> No Reservations </div>";
            };
         ?>
        </tbody>
    </table>
</section>




<!-- Table for show orders -->

<section class="display-orders-table">

<div class="content">
        <h2>
            New Orders
        </h2>
    </div>
    <table>
        <thead>
            <th>Customer Name </th>
            <th>Customer Phone Number</th>
            <th>Customer Email</th>
            <th>Payment Method</th>
            <th>House No.</th>
            <th>Street Name </th>
            <th>City </th>
            <th>Ordered Foods</th>
            <th>Total Price</th>
            <th>Action</th>

        </thead>

        <tbody>
            <?php
            $select_order = mysqli_query($connfood, "SELECT * FROM `order`");
            if(mysqli_num_rows($select_order) > 0){
                while($row = mysqli_fetch_assoc($select_order)){
            ?>

            <tr>
                <td><?php echo $row['name']; ?></td>
                <td><?php echo $row['number']; ?></td>
                <td><?php echo $row['email']; ?></td>
                <td><?php echo $row['method']; ?></td>
                <td><?php echo $row['flat']; ?></td>
                <td><?php echo $row['street']; ?></td>
                <td><?php echo $row['city']; ?></td>
                <td><?php echo $row['total_products']; ?></td>
                <td><?php echo $row['total_price']; ?></td>
                <td>
                <a href="admin_page.php?delete=<?php echo $row['id']; ?>" class="delete-btn" onclick="return confirm('Are your sure you want to delete this?');">

                <i class="trash_icon">
                    <img src="images/trash_icon.png" width="28px">
                </i> Delete </a>

              </td>
            </tr>

        <?php
            };    
            }else{
               echo "<div class='Empty'> No Reservations </div>";
            };
         ?>
        </tbody>
    </table>
</section>
        </section>




</div>







</body>
</html>