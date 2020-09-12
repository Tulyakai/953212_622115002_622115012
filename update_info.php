<?php 
    session_start();
    if (!isset($_SESSION['name'])) {
        $_SESSION['msg'] = "You must log in first";
        header('location: form.php');
    }

    if (isset($_GET['logout'])) {
        session_destroy();
        unset($_SESSION[ 'name']);
        header('location: form.php');
    }
    
    $conn = mysqli_connect('localhost','root','','yuzu pizza');
    $sql = "SELECT * FROM accounts WHERE username = '".$_SESSION['name']."' ";
    $query = mysqli_query($conn,$sql);
    $result = mysqli_fetch_array($query,MYSQLI_ASSOC);

?>


<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
        integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="history_and_update.css">
    <title>Edit information</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="index.php">
            <?php 
                $imgUrl = "assets/pizza.png"; 
            ?> 
            <img src="<?= $imgUrl; ?>"/>
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation" href="index.php">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>
                <li class="nav-item">
                </li>   
                
            </ul>
            <!--  notification message -->
            <?php if (isset($_SESSION['success'])) : ?>
                <div class="success">
                    <a style="color:red; margin-right:450px;">
                        <?php 
                            echo $_SESSION['success'];
                            unset($_SESSION['success']);
                        ?>
                    </a>
                </div>
            <?php endif ?>
            <div class="nav-item dropdown" style="margin-right: 8%; width:8%; height:auto;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" style="color:red;">
                <p style="color: #5243d6;">Hi <strong>
                        <?php echo $_SESSION['name']; ?></strong>
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown" >
                    <a class="dropdown-item" href="#">Edit information</a>
                    <a class="dropdown-item" href="order_history.php">Order history</a>
                <div class="dropdown-divider"></div>
                    <a href="index.php?logout='1'" style="color: red; margin-left:13%">Logout</a>
                </div>
            </div>            
        </div>
    </nav>
    
    
    <section class="container" >
        <center>
            <h1 style="font-size: 70px; font-weight:bold;">Edit information</h1>
            </br>
        
                
        <form action="update_info_db.php" method="post">
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Email</label>
                </div>
                <div class="form-group col-md-10">
                    <?php echo $result["email"];?>
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Account name</label>
                </div>
                <div class="form-group col-md-10">
                    <?php echo $result["username"];?>
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Password</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="password" class="form-control" name="password" value="<?php echo $result["password"];?>">
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Address</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="address" value="<?php echo $result["address"];?>">
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Telephone number</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="tel_num" value="<?php echo $result["tel_num"];?>">
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Edit</button>

        </form> 
        
        </center>  
         
    </section>
    

    

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
</body>

</html>