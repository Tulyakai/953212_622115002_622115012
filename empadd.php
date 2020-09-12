<?php 
    session_start();
    
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $password = $_POST['password'];
    $position = $_POST['position'];
    $dob = $_POST['dob'];
    $address = $_POST['address'];
    $age = $_POST['age'];
    $tel_num = $_POST['tel_num'];
    $email = $_POST['email'];

    $con = mysqli_connect('localhost','root','','yuzu pizza');
    
    $s = "SELECT * FROM employees WHERE Firstname = '$firstname' || Lastname = '$lastname' " ; 
    $result = mysqli_query($con, $s);
    $num = mysqli_num_rows($result);

    
    if($num == 0){
        $sql = "INSERT INTO `employees`(`Firstname`, `Lastname`, `password`, `Position_ID`, `Date of Birth`, `address`, `Age`, `Phone`, `Email`) 
        VALUES ('$firstname','$lastname',' $password','$position','$dob','$address','$age','$tel_num','$email')";
        mysqli_query($con, $sql);
        $_SESSION['success'] = "Added successfully";
        header('location:admin_add.php');
    }
    else{
        $_SESSION['error'] = "This person already exists";
        header('location:admin_add.php');
    }
        
?>