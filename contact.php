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
                        <a class="nav-link" href="rooms.php">Room Reservation
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="contact.php">Contact</a>
                        <span class="sr-only">(current)</span>
                    </li>
                    <li class="nav-item redz">
                        <a class="nav-link" href="adminpanel.php">Admin Panel </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Contact -->
    <div class="container">
        <div class="text-center mt-5">
            <h1>Contact Us</h1>
            <p>Have some questions? , Feel free to contact us!</p>
        </div>
        <form action="contact-submit.php" method="POST">
            <div class="form-group">
                <label>Full Name</label>
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
                <label>Message</label>
                <textarea class="form-control" rows="5" name="message" placeholder="Your message"></textarea>
            </div>
            <div class="text-center">
                <button type="submit" class="btn btn-primary">Send</button>
            </div>
        </form>
    </div>

    <!-- Google Maps -->
    <div class="container mt-5">
        <h3 class="text-center mb-5">Find Us</h13
        <div style="width: 100%"><iframe width="100%" height="600" src="https://maps.google.com/maps?width=100%&amp;height=600&amp;hl=en&amp;q=kronhusgatan%209%20+(My%20Business%20Name)&amp;ie=UTF8&amp;t=k&amp;z=14&amp;iwloc=B&amp;output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"><a href="https://www.maps.ie/draw-radius-circle-map/">Google Maps radius calculator</a></iframe></div><br />
    </div>

    <br>
    <br>
    <br>

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