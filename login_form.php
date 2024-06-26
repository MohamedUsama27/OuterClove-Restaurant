<?php
@include 'config.php';

error_reporting(E_ALL);
ini_set('display_errors', 1);


session_start();

if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cnfpass = md5($_POST['cnfpassword']);
$user_type = $_POST['user_type'];

$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){

    $row = mysqli_fetch_array($result);

    if($row['user_type'] == 'admin'){
        $_SESSION['admin_name'] = $row['name'];
        header('location:admin_page.php');

    } elseif($row['user_type'] == 'staff'){
        $_SESSION['staff_name'] = $row['name'];
        header('location:staff_page.php');
    }
}else{
    $error[] = 'Incorrect email or password';
}

};
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login form</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>

<div class="form-container">
    
    <form action="" method="post">
        
        <h3>Login</h3>

        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error_msg">'.$error.'</span>';
         };
      };
      ?>

        <input type="email" name="email" required placeholder="Email Address">
        <input type="password" name="password" required placeholder="Password">

        <select name="user_type">
            <option value="user">STAFF</option>
            <option value="admin">ADMIN</option>   
        </select>

        <input type="submit" name="submit" value="Login" class="form-btn"> 

       <p>Don't have an account? <a href="register_form.php">Register Now</a></p>  

    </form>

</div>

</body>