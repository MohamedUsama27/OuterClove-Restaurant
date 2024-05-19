<?php
@include 'config.php';


if(isset($_POST['submit'])){

$name = mysqli_real_escape_string($conn, $_POST['name']);
$email = mysqli_real_escape_string($conn, $_POST['email']);
$pass = md5($_POST['password']);
$cnfpass = md5($_POST['cnfpassword']);
$user_type = $_POST['user_type'];

$select = "SELECT * FROM user_form WHERE email = '$email' && password = '$pass' ";

$result = mysqli_query($conn, $select);

if(mysqli_num_rows($result) > 0){
    $error[] = 'User already exist!';
}
else {
    if($pass != $cnfpass){
        $error[] = 'Passsword not matched!';
    }
    else{
        $insert = "INSERT INTO user_form(name, email, password, user_type) VALUES ('$name','$email','$pass','$user_type')";
        $message[] = 'User Registered Successfully';

        mysqli_query($conn , $insert);
        $message[] = 'User Registered Successfully';
        header('location:login_form.php');
    }
}

};
?>



<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>register form</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>

<div class="form-container">
    
    <form action="" method="post">
        
        <h3>Register Now</h3>

        <?php
      if(isset($error)){
         foreach($error as $error){
            echo '<span class="error_msg">'.$error.'</span>';
         };
      };
      ?>

        <input type="text" name="name" required placeholder="Username">
        <input type="email" name="email" required placeholder="Email Address">
        <input type="password" name="password" required placeholder="Password">
        <input type="password" name="cnfpassword" required placeholder="Confirm Password">

        <select name="user_type">
            <option value="staff">STAFF</option>
            <option value="admin">ADMIN</option>   
        </select>

        <input type="submit" name="submit" value="Register Now" class="form-btn"> 

       <p>Already have an account? <a href="login_form.php">Login Now</a></p>  

    </form>

</div>

</body>