<?php
    session_start();

?>

<html>
    <head>
        <title>User Login And Registration</title>
        <link rel="stylesheet" type="text/css" href="form.css">
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
            <div class="login-box">
                <div class="row">
                    <div class="col-md-6 login-left">
                        <h2> Login Here</h2>
                        </br></br></br></br></br>
                        <form action="validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user1" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password1" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        <?php if (isset($_SESSION['error1'])) : ?>
                            <div class="success">
                                <a style="color:red; margin-right:450px;">
                                    <?php 
                                        echo $_SESSION['error1'];
                                        unset($_SESSION['error1']);
                                    ?>
                                </a>
                            </div>
                        <?php endif ?>
                    </div>

                    <div class="col-md-6 login-right">
                        <h2> Registration Here</h2>
                        <form action="registration.php" method="post">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="text" name="email" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Account name</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Address</label>
                                <input type="text" name="address" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Telephone number</label>
                                <input type="text" name="tel_num" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Register</button>
                        </form>
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
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </body>
</html>