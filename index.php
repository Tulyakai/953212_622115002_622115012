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
    <link rel="stylesheet" href="stylesheet.css">
    <script src='https://kit.fontawesome.com/a076d05399.js'></script>

    <title>Yuzu's pizza</title>
</head>

<body data-spy="scroll" data-target=".navbar" data-offset="20">
    <!-- navbar -->
    <nav class="navbar navbar-expand-lg sticky-top">
        <a class="navbar-brand" href="#">
            <?php 
                $imgUrl = "assets/pizza.png"; 
            ?>
            <img src="<?= $imgUrl; ?>" />
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a class="nav-link" href="#about">About</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu">Menu</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#footer">Contact us</a>
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

            <div class="nav-item dropdown" style="margin-right: 10%; width:8%; height:auto;">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false" style="color:red;">
                    <p style="color: #5243d6;">Hi <strong>
                            <?php echo $_SESSION['name']; ?></strong>
                    </p>
                </a>
                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="update_info.php">Edit information</a>
                    <a class="dropdown-item" href="order_history.php">Order history</a>

                    <div class="dropdown-divider"></div>
                    <a href="index.php?logout='1'" style="color: red; margin-left:13%">Logout</a>
                </div>
            </div>



        </div>
    </nav>


    <section id="video">
        <!-- <script>alert('Login Successful!')</script> -->
        <div class="container-flex" id="banner">
            <video autoplay muted loop id="myVideo">
                <source src="assets/Pizza.mp4" type="video/mp4">
            </video>
            <div class="centered">Yuzu's homemade pizza</div>
            <div class="bottom-right">Credit : Pizza HD from agency channel </div>
        </div>
    </section>
    <div class="parallax1"></div>
    </br>
    <section class="container-flex" id="about">
        <center>
            <h1>About us</h1>
            <?php $imgUrl = "assets/owner.jpg";?>
            <img src="<?= $imgUrl; ?>" />
        </center>

        <p style="text-indent: 50px;">Welcome to Yuzu Craft Pizza. Our pizza restaurant is inspired by our love for
            pizza so we think that if we
            will use seasonal produce from domestic farmers for topping our pizza.
    
            <ul style=" text-indent: 100px; font-size:20px;"><strong>If you looking for</strong> 
                <li>Homemade cheese homemade pizza.</li>
                <li>Topping pizza with the seasonal produce.</li>
                <li>Enjoy delicious pizza with your family.</li>
            </ul>
        </p>
        <p style="text-indent: 50px;">Our restaurant uses seasonal produce from domestic farmers, to get the best flavor
            of the ingredient, testy
            pizza, and can support farmers too. Our food tastes and atmosphere make our customers feel like they eat the
            pizza that the familiar made. Our pizza has 2 types of topping the first one is vegetarian and the second is
            meat. The main point of our restaurant is high-quality food and happiness in customers.
    </section>
    <div class="parallax2"></div>
    <section class="container-flex" id="menu">
        <h1>Menu Selection</h1>

        <div class="row">
            <div class="col-md-6">
                <div class="thumbnail">
                    <?php $imgUrl = "assets/pizza1.png";?>
                    <img src="<?= $imgUrl; ?>" id="pizza1" />
                    <div class="caption">
                        <h3>Mushroom and pepperoni pizza</h3>
                        <p>A good combination of american’s salami and mushroom. Taste a little bit salty from pepperoni
                            and fresh from mushroom.
                        </p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <?php $imgUrl = "assets/pizza2.png";?>
                    <img src="<?= $imgUrl; ?>" id="pizza2" />
                    <div class="caption">
                        <h3>Mixed pizza</h3>
                        <p>Don't know you want to eat right? So we’ve created a mixed pizza. You going to have many
                            flavors and feelings. We put every ingredient that we have.
                        </p>
                    </div>

                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <?php $imgUrl = "assets/pizza3.png";?>
                    <img src="<?= $imgUrl; ?>" id="pizza3" />
                    <div class="caption">
                        <h3>Veggie pizza</h3>
                        <p>Any vegetable makes a healthier topping than meat. Most marry well with pizza, so mix and
                            match your favorites. At the chains, vegetable pizzas tend to have fewer calories and less
                            fat—and there are a surprising number of decent choices.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6">
                <div class="thumbnail">
                    <?php $imgUrl = "assets/pizza4.png";?>
                    <img src="<?= $imgUrl; ?>" id="pizza4" />
                    <div class="caption">
                        <h3>Pepperoni pizza</h3>
                        <p>Pepperoni is an American variety of salami, made from a cured mixture of pork and beef
                            seasoned with paprika or other chili pepper.
                            Pepperoni is characteristically soft, slightly smoky, and bright red in color. Thinly sliced
                            pepperoni is a popular pizza topping in American pizzerias.</p>
                    </div>
                </div>
            </div>
        </div>


        <form action="order.php" method="post">
            <div class="form-group">
                <label for="exampleFormControlSelect1">Select your pizza</label>
                <select class="form-control" name="food">
                    <option selected>Choose your pizza...</option>
                    <option value='1'>Mushroom and pepperoni pizza</option>
                    <option value='2'>Mixed pizza</option>
                    <option value='3'>Veggie pizza</option>
                    <option value='4'>Pepperoni pizza</option>
                </select>
            </div>
            <div class="form-group">
                <label for="exampleFormControlTextarea2">Description</label>
                <textarea class="form-control" id="exampleFormControlTextarea2" rows="3" name="description"></textarea>
            </div>



            <div class="form-group row">
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Order in</button>
                </div>
            </div>
        </form>
    </section>
    <!-- <section class="container-flex" id="contact">
        <h1>Contact us</h1>
        <?php $imgUrl = "assets/merlin_162561834_f6d87b94-769c-410a-b10f-b845a66826f6-superJumbo.jpg";?> 
            <img src="<?= $imgUrl; ?>"/>        
        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Molestias quos repudiandae ipsam odio. Corporis
        iure dignissimos quidem itaque? In minima earum atque harum neque aut eaque officia. Culpa, eaque iste.</p>

    </section> -->


    <!-- footer -->
    <div class="footer" id="footer">
        <!-- Footer -->
        <footer class="page-footer font-small special-color-dark pt-4">

            <!-- Footer Elements -->
            <div class="container">

                <!-- Social buttons -->
                <ul class="list-unstyled list-inline text-center">
                    <li class="list-inline-item">
                        <a class="btn-floating btn-fb mx-1">
                            <i class="fab fa-facebook-f" style='font-size:36px'> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-tw mx-1">
                            <i class="fab fa-twitter" style='font-size:36px'> </i>
                        </a>
                    </li>
                    <li class="list-inline-item">
                        <a class="btn-floating btn-gplus mx-1">
                            <i class="fab fa-google-plus-g" style='font-size:36px'> </i>
                        </a>
                    </li>

                    <li class="list-inline-item">
                        <a class="btn-floating btn-dribbble mx-1">
                            <i class="fab fa-instagram" style='font-size:36px'> </i>
                        </a>
                    </li>
                </ul>
                <!-- Social buttons -->

            </div>
            <!-- Footer Elements -->

            <!-- Copyright -->
            <div class="footer-copyright text-center py-3">© 2020 Copyright:
                <a href="#">Yuzu hommade pizza</a>
            </div>
            <!-- Copyright -->

        </footer>
        <!-- Footer -->
    </div>

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous">
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous">
    </script>
</body>

</html>