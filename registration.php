<?php

session_start();


$con = mysqli_connect('localhost','root','','yuzu pizza');

$email = $_POST['email'];
$name = $_POST['user'];
$pass = $_POST['password'];
$address = $_POST['address'];
$tel_num = $_POST['tel_num'];

$s = "SELECT * FROM accounts WHERE username = '$name' || email = '$email'" ; 
$result = mysqli_query($con, $s);
$num = mysqli_num_rows($result);


if($num == 0){
    $reg = "INSERT INTO accounts(email,username, password, address, tel_num) 
    VALUES ('$email', '$name', '$pass', '$address', '$tel_num')";
    mysqli_query($con, $reg);
    $_SESSION['name'] = $name;
    $_SESSION['success'] = "Your are now logged in";
    header("location: index.php");
}


else{
    $_SESSION['error'] = "Username or Email already exists";
    header('location: form.php');
}

?>

    
