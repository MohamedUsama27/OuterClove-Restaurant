<?php

$conn = mysqli_connect ('localhost','root','','user_db');


$connfood = mysqli_connect ('localhost','root','','shop_db');

$connfood = mysqli_connect ('localhost','root','','shop_db');


$db_name = 'mysql:host=localhost;dbname=shop_db';
   $db_user_name = 'root';
   $db_user_pass = '';

$connfood1 = new PDO($db_name, $db_user_name, $db_user_pass);

function create_unique_id(){
    $str = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ1234567890';
    $rand = array();
    $length = strlen($str) - 1;

    for($i = 0; $i < 20; $i++){
       $n = mt_rand(0, $length);
       $rand[] = $str[$n];
    }
    return implode($rand);
 }


?>