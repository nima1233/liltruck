<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <title>Home - Hotel LilTruck</title>
</head>

<body class="bg-lightwhite">

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-darkblue stick-top">
        <div class="container">
            <a class="navbar-brand" href="#">
                <img src="images/LOGO.png" alt="LilTruck Hotel Logo">
            </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="index.php">Home
                            <span class="sr-only">(current)</span>
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="rooms.php">Room Reservation</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#services">Services</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="contact.php">Contact</a>
                    </li>
                    <li class="nav-item redz">
                        <a class="nav-link" href="adminpanel.php">Admin Panel </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Slideshow -->
    <div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
            <li data-target="#carouselExampleIndicators" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="d-block w-100" src="images/1.jpg" alt="First slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Welcome to Hotel LilTruck!</h5>
                    <p>ahhaahahhaah asdasdashjk haskd jkasdkjashdkajs</p>
                    <button type="button" class="btn btn-primary">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/2.jpg" alt="Second slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Welcome to Hotel LilTruck!</h5>
                    <p>ahhaahahhaah asdasdashjk haskd jkasdkjashdkajs</p>
                    <button type="button" class="btn btn-primary">Learn More</button>
                </div>
            </div>
            <div class="carousel-item">
                <img class="d-block w-100" src="images/1.jpg" alt="Third slide">
                <div class="carousel-caption d-none d-md-block">
                    <h5 class="text-warning">Welcome to Hotel LilTruck!</h5>
                    <p>ahhaahahhaah asdasdashjk haskd jkasdkjashdkajs</p>
                    <button type="button" class="btn btn-primary">Learn More</button>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Next</span>
        </a>
    </div>

    <!-- Room Reservation -->
    <div class="roomlink">
        <a href="rooms.php">
            <div class="roomreservation">
                <h1 class="text-center rsp">Room Reservation</h1>
            </div>
        </a>
    </div>

    <!-- About -->
    <div class="container mt-5 mb-5" id="about">
        <h1 class="text-center text-color-db">About Us</h1>
        <p class="text-center">Our culture is to provide individuals with continua growth and prosperity, while encouraging entrepreneurship and creativity.</p>
        <p class="text-center">We are always looking for self - motivated, dynamic thinkers who would partner with us in our</p>
        <p class="text-center">ambitious endeavours.</p>
        <div class="text-center">
            <img src="images/3.jpg" class="img-fluid" alt="Responsive image">
        </div>
    </div>

    <!-- Our Service -->
    <div class="bg-overlay" id="services">
        <h3 class="text-center">Our Service</h3>
        <div class="mx-auto linez"></div>
        <div class="row">
            <div class="col">
                <h3 class="text-center"><i class="fa fa-credit-card" style="font-size:48px; color: orange;"></i></h3>
                <h3 class="text-center">Enjoy First, Pay After!</h3>
                <p class="text-center">We offer a variety of food and services that our customer expects from us</p>
                <div class="text-center">
                    <p><i class="fa fa-check" style="color: orange;"></i> Fully air conditioned</p>
                    <p><i class="fa fa-check" style="color: orange;"></i> Accompanied with all types of music</p>
                    <p><i class="fa fa-check" style="color: orange;"></i> High speed WiFi</p>
                </div>
            </div>
            <div class="col">
                <h3 class="text-center"><i class="fa fa-clock-o" style="font-size:48px; color: orange;"></i></h3>
                <h3 class="text-center">Enjoy First, Pay After!</h3>
                <p class="text-center">We offer a variety of food and services that our customer expects from us</p>
                <div class="text-center">
                    <p><i class="fa fa-check" style="color: orange;"></i> Fully air conditioned</p>
                    <p><i class="fa fa-check" style="color: orange;"></i> Accompanied with all types of music</p>
                    <p><i class="fa fa-check" style="color: orange;"></i> High speed WiFi</p>
                </div>
            </div>
            <!-- <button type="button" class="btn btn-primary btn-lg">Get Started</button> -->
        </div>
    </div>

    <!-- Rooms -->
    <div class="container mt-5 mb-5" id="about">
        <h1 class="text-center text-color-db">Our Rooms</h1>
        <p class="text-center">Our culture is to provide individuals with continua growth and prosperity, while encouraging entrepreneurship and creativity.</p>
        <div class="text-center">
            <div class="container">
                <div class="row">
                    <?php
                    $dbc = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se"); // Connection to Database

                    $query = "SELECT * FROM rooms"; // The question to select all the products from the table
                    mysqli_query($dbc, "SET NAMES utf8");

                    $result = mysqli_query($dbc, $query); // Asking the question

                    while ($row = mysqli_fetch_array($result)) { // Loop to show all the products in the table

                    ?>
                    <div class="col-md-3">
                    <img src="<?php echo $row["roomimg"]; ?>" width="250" height="150" />
                        <hr>
                        <h5><?php echo $row["roomname"]; ?></h5>
                        <p>Room Type: <strong><?php echo $row["roomtype"]; ?></strong></p>
                        <p>From <strong>$<?php echo $row["roomprice"]; ?></strong> per night!</p>
                    </div>
                    <?php } ?>
                </div>
                <br>
                <hr>
                <div class="container text-center">
                    <a href="rooms.php" class="btn btn-primary">Reserve Now!</a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <!-- Footer -->
    <footer class="page-footer font-small blue">

        <!-- Copyright -->
        <div class="footer-copyright text-center py-3">© 2020 Copyright:
            <a href="index.php"> LilTruck Hotel</a>
        </div>
        <!-- Copyright -->

    </footer>
    <!-- Footer -->

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>