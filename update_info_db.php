<?php
    session_start();
    
    $con = mysqli_connect('localhost','root','','yuzu pizza');
        
    // $email = $_POST['email'];
    // $username = $_POST['username'];
    $password = $_POST['password'];
    $address = $_POST['address'];
    $tel = $_POST['tel_num'];


    $sql = "UPDATE accounts SET
        -- email = '$email' ,
        -- username = '$username' ,
        password = '$password' ,
        address = '$address' ,
        tel_num = '$tel'
        WHERE username = '".$_SESSION["name"]."' ";
    mysqli_query($con, $sql);
    $_SESSION['name'];
    $_SESSION['success'] = "Change success";

    header('location: update_info.php');

    






?>