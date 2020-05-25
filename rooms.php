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
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="rooms.php">Room Reservation
                            <span class="sr-only">(current)</span>
                        </a>
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

    <!-- Reserve a Room Form -->
    <div class="container">
        <div class="text-center mt-5">
            <h1>Reserve a Room</h1>
        </div>
        <form action="reservearoom.php" method="POST">
            <div class="form-group">
                <label>Name & Lastname</label>
                <input type="text" class="form-control" name="fullname" placeholder="Enter fullname">
            </div>
            <div class="form-group">
                <label>Email</label>
                <input type="email" class="form-control" name="email" placeholder="Enter email">
            </div>
            <div class="form-group">
                <label>Phone</label>
                <input type="text" class="form-control" name="phone" placeholder="Enter phone">
            </div>
            <div class="form-group">
                <label>Check In</label>
                <input type="date" name="checkin" class="form-control">
            </div>
            <div class="form-group">
                <label>Check Out</label>
                <input type="date" name="checkout" class="form-control">
            </div>
            <div class="form-group">
                <label>Select Room</label>
                <select class="form-control" name="room">
                    <option>- -</option>
                    <option value="Room 330">Room 330</option>
                    <option value="Room 335">Room 335</option>
                    <option value="Room 340">Room 340</option>
                    <option value="Room 345">Room 345</option>
                    <option value="Room 350">Room 350</option>
                </select>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Reserve</button>
            </div>
        </form>
    </div>

    <br>
    <br>
    <hr>

    <!-- Rooms -->
    <div class="container mt-5 mb-5" id="about">
        <h1 class="text-center text-color-db">Our Rooms</h1>
        <p class="text-center">Our culture is to provide individuals with continua growth and prosperity, while encouraging entrepreneurship and creativity.</p>
        <div class="text-center">
            <div class="container">
                <div class="row">
                <?php
                    $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se"); // Connection to Database

                    $query = "SELECT * FROM rooms"; // The question to select all the products from the table
                    mysqli_query($connect, "SET NAMES utf8");

                    $result = mysqli_query($connect, $query); // Asking the question

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
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="page-footer font-small blue">
        <div class="footer-copyright text-center py-3">© 2020 Copyright - LilTruck Hotel</div>
    </footer>

    <!-- JavaScript -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>

</body>

</html>