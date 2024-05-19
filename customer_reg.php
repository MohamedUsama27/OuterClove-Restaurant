<?php
require 'config.php';

if (isset($_POST['submit'])) {
    $name = mysqli_real_escape_string($conn, $_POST['name']);
    $email = mysqli_real_escape_string($conn, $_POST['email']);
    $password = md5($_POST['password']);

    $select = "SELECT * FROM customer WHERE email = '$email'";
    $result = mysqli_query($conn, $select);

    if (mysqli_num_rows($result) > 0) {
        $error[] = 'User already exists! Please login.';
    } else {
        $cnfpassword = md5($_POST['cnfpassword']);
        if ($password != $cnfpassword) {
            $error[] = 'Password not matched!';
        } else {
            $insert = "INSERT INTO customer (name, email, password) VALUES ('$name','$email','$password')";
            mysqli_query($conn, $insert);
            $message[] = 'User Registered Successfully';
            header('location: customer_login.php');
            exit();
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
    <title>login form</title>
    <link rel="stylesheet" href="Style.css">

</head>
<body>

<div class="login-container">
    <form action="" method="post">
        <h3>Register Now</h3>

        <?php
        if (isset($error)) {
            foreach ($error as $error) {
                echo '<span class="error_msg">' . $error . '</span>';
            }
        }
        ?>

        <?php
        if (isset($message)) {
            foreach ($message as $message) {
                echo '<span class="success_msg">' . $message . '</span>';
            }
        }
        ?>

        <input type="text" name="name" required placeholder="Username">
        <input type="email" name="email" required placeholder="Email Address">
        <input type="password" name="password" required placeholder="Password">
        <input type="password" name="cnfpassword" required placeholder="Confirm Password">

        <input type="submit" name="submit" value="Register Now" class="form-btn">

        <p>Already have an account? <a href="customer_login.php">Login Now</a></p>
    </form>
</div>

</body>
</html>
