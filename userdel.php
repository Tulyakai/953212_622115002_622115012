<?php 
    session_start();
    
    $con = mysqli_connect('localhost','root','','yuzu pizza');
    $sql = "DELETE FROM accounts WHERE Account_ID = '" .$_GET["Account_ID"]. "'";
    if (mysqli_query($con, $sql)){
        $_SESSION['success'] = "Deleted successfully";
        header('location:admin_page.php');
    } else{

        echo "Error deleting record". mysqli_error($con);
        header('location:admin_page.php');

    }




    $sql1 = "DELETE FROM orders WHERE Order_ID = '" .$_GET["Order_ID"]. "'";
    if (mysqli_query($con, $sql1)){
        $_SESSION['success'] = "Deleted successfully";
        header('location:admin_page.php');
    } else{
        echo "Error deleting record". mysqli_error($con);
        header('location:admin_page.php');
    }
?>