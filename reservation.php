<?php


if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   setcookie('user_id', create_unique_id(), time() + 60*60*24*30, '/');
   header('reservation:index.php');
}

@include 'config.php';

session_start(); 



if(isset($_POST['book'])){
   $booking_id = create_unique_id();

   $name = $_POST['name'];
   $name = filter_var($name, FILTER_SANITIZE_STRING);

   $email = $_POST['email'];
   $email = filter_var($email, FILTER_SANITIZE_STRING);

   $number = $_POST['number'];
   $number = filter_var($number, FILTER_SANITIZE_STRING);

   $tables = $_POST['rooms'];
   $tables = filter_var($tables, FILTER_SANITIZE_STRING);

   $check_in_date = $_POST['check_in_date'];
   $check_in_date = filter_var($check_in_date, FILTER_SANITIZE_STRING);

   $check_in_time = $_POST['check_in_time'];
   $check_in_time = filter_var($check_in_time, FILTER_SANITIZE_STRING);

   $adults = $_POST['adults'];
   $adults = filter_var($adults, FILTER_SANITIZE_STRING);

   $childs = $_POST['childs'];
   $childs = filter_var($childs, FILTER_SANITIZE_STRING);

   $total_tables = 0;
   $table_taken = false;

   $check_bookings = $connfood1->prepare("SELECT * FROM `bookings` WHERE check_in_date = ?");
   $check_bookings->execute([$check_in_date]);

   while($fetch_bookings = $check_bookings->fetch(PDO::FETCH_ASSOC)){
      $total_tables += $fetch_bookings['tables'];

      /*    checking the the table is available    */
      if ($fetch_bookings['tables'] == $tables) {
         $table_taken = true;
         break;
      }
   }

   if($total_tables >= 10){
      $message[] = 'Tables not available';

   } elseif ($table_taken) {
      $message[] = 'Table already taken!';

   } else {
      $verify_bookings = $connfood1->prepare("SELECT * FROM `bookings` WHERE user_id = ? AND name = ? AND email = ? AND number = ? AND tables = ? AND check_in_date = ? AND check_in_time = ? AND adults = ? AND childs = ?");
      $verify_bookings->execute([$user_id, $name, $email, $number, $tables, $check_in_date, $check_in_time, $adults, $childs]);

      if($verify_bookings->rowCount() > 0){
         $message[] = 'Table already booked!';
      } else {
         $book_tables = $connfood1->prepare("INSERT INTO `bookings`(booking_id, user_id, name, email, number, tables, check_in_date, check_in_time, adults, childs) VALUES(?,?,?,?,?,?,?,?,?,?)");
         $book_tables->execute([$booking_id, $user_id, $name, $email, $number, $tables, $check_in_date, $check_in_time, $adults, $childs]);
         $message[] = 'Tables Reserved Successfully!';
      }
   }
}

?>







<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Reservation</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>


<?php
if(isset($message)){
    foreach($message as $message){
       echo '<div class="message"> <span>'.$message.'</span> 
       <i class="x_icon" onclick="this.parentElement.style.display = `none`;">
            <img src="images/x_icon.png" width="18px">
       </i> 
       </div>';
    };
 };
?>



<!----------------------Reservation----------------------->

<section class="reservation" id="reservation">

   <form action="" method="post">
      <h3>Make a Reservation</h3>

      <div class="flex">

         <div class="box">
            <p1>Your Name <span>*</span></p1>
            <input type="text" name="name" maxlength="50" required placeholder="enter your name" class="input">
         </div>

         <div class="box">
            <p1>Your Email <span>*</span></p1>
            <input type="email" name="email" maxlength="50" required placeholder="enter your email" class="input">
         </div>

         <div class="box">
            <p1>Your Number <span>*</span></p1>
            <input type="number" name="number" maxlength="10" min="0" max="9999999999" required placeholder="enter your number" class="input">
         </div>

         <div class="box">
            <p1>Table No <span>*</span></p1>
            <select name="rooms" class="input" required>
               <option value="1" selected>Table 1</option>
               <option value="2">Table 2</option>
               <option value="3">Table 3</option>
               <option value="4">Table 4</option>
               <option value="5">Table 5</option>
               <option value="6">Table 6</option>
            </select>
         </div>

         <div class="box">
            <p1>Check-In Date <span>*</span></p1>
            <input type="date" name="check_in_date" class="input" required>
         </div>

         <div class="box">
            <p1>Check-In Time <span>*</span></p1>
            <input type="time" name="check_in_time" class="input" required>
         </div>

         <div class="box">
            <p1>Adults <span>*</span></p1>
            <select name="adults" class="input" required>
               <option value="1" selected>1 adult</option>
               <option value="2">2 adults</option>
               <option value="3">3 adults</option>
               <option value="4">4 adults</option>
               <option value="5">5 adults</option>
               <option value="6">6 adults</option>
            </select>
         </div>

         <div class="box">
            <p1>Childs <span>*</span></p1>
            <select name="childs" class="input" required>
               <option value="0" selected>0 child</option>
               <option value="1">1 child</option>
               <option value="2">2 childs</option>
               <option value="3">3 childs</option>
               <option value="4">4 childs</option>
               <option value="5">5 childs</option>
               <option value="6">6 childs</option>
            </select>
         </div>
      </div>

      <input type="submit" value="Book Now" name="book" class="bookbtn">


   </form>
</section>



<!----------------------Footer----------------------->

<footer>
    <div class="footer_main">

        <div class="footer_tag">
            <h2>Location</h2>
            <p>Colombo</p>
            <p>Ratnapura</p>
            <p>Dehivala</p>
        </div>

        <div class="footer_tag">
            <h2>Quick Link</h2>
            <p>Home</p>
            <p>About</p>
            <p>Promotion</p>
            <p>Menu</p>
            <p>Facilities</p>
            <p>Review</p>
        </div>

        <div class="footer_tag">
            <h2>Contact</h2>
            <p>+94 71 7878 014</p>
            <p>+94 75 7878 014</p>
            <p>outerclove@gmail.com</p>
            <p>outerclove.business@gmail.com</p>
        </div>

        <div class="footer_tag">
            <h2>Our Service</h2>
            <p>Take Away</p>
            <p>Dining</p>
            <p>Fast Delivery</p>
            
        </div>


    </div>

    <p class="end">Designed by<span>☻ MR Usama 2023©️</span></p>

    </footer>


</body>
</html>