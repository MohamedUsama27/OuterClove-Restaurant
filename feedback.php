<?php

@include 'config.php';

session_start(); 


/* send feedback*/

if(isset($_POST['add_feedback'])){
    $f_name = $_POST['f_name'];
    $f_email = $_POST['f_email'];
    $f_number = $_POST['f_number'];
    $f_msg = $_POST['f_msg'];

    $insert_query = mysqli_query($connfood, "INSERT INTO `feedback`(name, email, number, msg) VALUES('$f_name', '$f_email', '$f_number', '$f_msg')") or die('query failed');


    if($insert_query){
        $message[] ='Feedback message Sent';
     }else{
        $message[] ='Feedback message sending fail';
     };
  };




?>






<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Feedback</title>
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



<section id="Feedback">

        <nav>

            <div class="logo1">
                <img src="images/logo.jpg">
                
            </div>


            <div class="logo">
                <img src="images/logo_name.png">
            </div>

            <ul>
                <li> <a href="outerclove.php">Home</a> </li>
                <li> <a href="outerclove.php#About">About</a> </li>
                <li> <a href="outerclove.php#Promotion">Promotion</a> </li>
                <li> <a href="outerclove.php#Menu">Menu</a> </li>
                <li> <a href="outerclove.php#Facilities">Facilities</a> </li>
                <li> <a href="outerclove.php#Review">Review</a> </li>
                <li> <a href="outerclove.php">Logout</a> </li>
                
            </ul>

            <div class="icon">
                <img src="images/searchicon.jpg" width="18px">
                <img src="images/love.png" width="18px">
                <img src="images/carticon.png" width="18px">
            </div>

        </nav>





<!-- create form for submit feedback-->

<div class="container">

<div class="flex">

    <form action="" method="post" class="add-feedback-form" enctype="multipart/form-data">
        
        <div class="feedback">
            <h2>FEEDBACK</h2>
        </div>

        <div class="Box">
                <span>Full Name</span>
                <input type="text" placeholder="Name" name="f_name" required>
        </div>

        <div class="Box">
                <span>Email</span>
                <input type="text" placeholder="Your Email" name="f_email" required>
        </div>

        <div class="Box">
                <span>Phone Number</span>
                <input type="text" placeholder="Your Phone Number" name="f_number" required>
        </div>

        <div class="Box">
                <span>Message</span>
                <input type="text" placeholder="Message" name="f_msg" required>
        </div>
</flex>

        <input type="submit" value="Send" name="add_feedback" class="send-btn">


        </div>
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

