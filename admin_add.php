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
    $result=mysqli_fetch_array($query,MYSQLI_ASSOC);

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
        <a class="navbar-brand" href="admin_page.php">
            <?php 
                $imgUrl = "assets/pizza.png"; 
            ?>
            <img src="<?= $imgUrl; ?>" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"
            href="index.php">
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
            <?php if (isset($_SESSION['error'])) : ?>
            <div class="error">
                <a style="color:red; margin-right:450px;">
                    <?php 
                        echo $_SESSION['error'];
                        unset($_SESSION['error']);
                    ?>
                </a>
            </div>
            <?php endif ?>

            <div class="nav-item dropdown" style="margin-right: 8%; width:8%; height:auto;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="color:red;">
                    <p style="color: #5243d6;">Hi Admin <strong>
                            <?php echo $_SESSION['name']; ?></strong>
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="admin_add.php">Add employee</a>
                    <a class="dropdown-item" href="admin_del.php">Delete employee</a>
                    <div class="dropdown-divider"></div>
                    <a href="admin_form.php" style="color: red; margin-left:13%">Logout</a>
                </div>
            </div>
        </div>
    </nav>
    
    <section class="container" >
        <center>
            <h1 style="font-size: 70px; font-weight:bold;">Add employee</h1>
            </br>
        
                
        <form action="empadd.php" method="post">
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Firstname</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="firstname" required>
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Lastname</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="lastname" required>
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Password</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="password" class="form-control" name="password" required>
                </div>               
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Select your position</label>
                </div>
                <div class="form-group col-md-10">
                    <select class="form-control" name="position">
                        <option selected>Choose your position...</option>
                        <option value='1'>Owner</option>
                        <option value='2'>Chef</option>
                        <option value='3'>Sous chef</option>
                        <option value='4'>Deliver</option>
                    </select>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-4">
                    <label>Date of birth(YYYY-MM-DD)</label>
                </div>
                <div class="form-group col-md-8">
                    <input type="text" class="form-control" name="dob" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Address</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="address" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Age</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="age" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Telephone number</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="tel_num" required>
                </div>
            </div>
            <div class="form-group row">
                <div class="form-group col-md-2">
                    <label>Email</label>
                </div>
                <div class="form-group col-md-10">
                    <input type="text" class="form-control" name="email" required>
                </div>
            </div>
            <button type="submit" class="btn btn-primary">Add</button>

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