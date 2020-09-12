<?php 
    session_start();
    
    $con = mysqli_connect('localhost','root','','yuzu pizza');
    $sql = "DELETE FROM employees WHERE Employee_ID = '" .$_GET["Employee_ID"]. "'";


    



        if (mysqli_query($con, $sql)){
            $_SESSION['success'] = "Deleted successfully";
            header('location:admin_del.php');
        } else{
            echo "Error deleting record". mysqli_error($con);
        }
?>