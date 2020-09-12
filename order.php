<?php

session_start();
if (!isset($_SESSION['name'])){
    header("location: form.php");
}

$con = mysqli_connect('localhost','root','','yuzu pizza');

$des = $_POST['description'];
$food = $_POST['food'];

$reg = "INSERT INTO orders(Order_description, Food_ID) VALUES ('$des', '$food')";
mysqli_query($con, $reg);
$_SESSION['success'] = "Your are now logged in";

$s1 = "SELECT * FROM accounts WHERE username = '".$_SESSION['name']."' " ; 
$result1 = mysqli_query($con, $s1);
$num1 = mysqli_num_rows($result1);

if($num1 == 1){
    $row = mysqli_fetch_row($result1);
    $reg1 = " UPDATE orders SET Account_ID = $row[0] WHERE Order_time = now()";
    mysqli_query($con, $reg1);
    header("location: order_history.php");
}



