

<html>
    <head>
        <title>Admin Login</title>
        <link rel="stylesheet" type="text/css" href="form.css">
        <link rel="stylesheet" type="text/css"
        href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    </head>
    <body>
            <div class="login-box">
                <div class="row">
                    <div class="col-md-12">
                        <h2> Admin login </h2>
                        <form action="admin_validation.php" method="post">
                            <div class="form-group">
                                <label>Username</label>
                                <input type="text" name="user" class="form-control" required>
                            </div>
                            <div class="form-group">
                                <label>Password</label>
                                <input type="password" name="password" class="form-control" required>
                            </div>
                            <button type="submit" class="btn btn-primary">Login</button>
                        </form>
                        
                    </div>

                </div>
            </div>
        </div>


    </body>
</html>