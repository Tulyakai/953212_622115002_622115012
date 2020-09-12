<?php

session_start();


$con = mysqli_connect('localhost','root','','yuzu pizza');


$name = $_POST['user1'];
$pass = $_POST['password1'];

$s = "select * from accounts where username = '$name' AND password = '$pass'" ; 

$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 0){
    $_SESSION['error1'] = "Username or password went wrong";
    header('location: form.php');
}
else{
    mysqli_query($con, $reg);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "Your are now logged in";
    header("location: index.php");
    
}


?>  