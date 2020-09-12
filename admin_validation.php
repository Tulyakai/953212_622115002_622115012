<?php
    session_start();
    
    $con = mysqli_connect('localhost','root','','yuzu pizza');


    $name = $_POST['user'];
    $pass = $_POST['password'];

    $s = "select * from employees where Firstname = '$name' AND password = '$pass'" ; 

    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    if($num == 0){
        $_SESSION['error1'] = "Username or password went wrong";

        
    }
    else{
        mysqli_query($con, $reg);
        $_SESSION['name'] = $name;
        $_SESSION['success'] = "Your are now logged in";
        header("location: admin_page.php");

    }

?>