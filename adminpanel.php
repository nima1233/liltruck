<?php session_start(); ?>

<!doctype html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="stylesheet" href="style.css">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css" integrity="sha384-9aIt2nRpC12Uk9gS9baDl411NQApFmC26EwAOH8WgZl5MYYxFfc+NcPb1dKGj7Sk" crossorigin="anonymous">

    <title>Admin Panel</title>
</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <a class="navbar-brand" href="#">LilTruck Hotel - Admin Panel</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav">
                <li class="nav-item ">
                    <a class="nav-link" href="index.php">Home <span class="sr-only">(current)</span></a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="adminpanel.php">Admin Panel</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="contact.php">Contact</a>
                </li>
            </ul>
        </div>
    </nav>

    <?php
    // ANVÄNDS FÖR ATT VISA FORMULÄREN I SLUTET ELLER INTE
    $show_form = true;

    // OM DET FINNS ERROR MESSAGE
    if (isset($_SESSION['error_msg'])) {
        // Skriv ut error_msg
        echo $_SESSION['error_msg'] . "<br>";

        // TA BORT ERROR_MSG
        unset($_SESSION['error_msg']);
    }

    // KOLLA OM MAN HAR BESÖKT SIDAN FÖRUT
    if (isset($_SESSION['login'])) {
        // har besökt sidan

        // OM MAN ÄR INLOGGAD
        if ($_SESSION['login'] == "INLOGGAD") {
            $show_form = false; // VISA INTE FORMULÄREN
    ?>

            <!-- Admin Panel -->
            <div class="container">
                <h2 class="text-center mt-5">Admin Panel</h2>
                <div class="row text-center mt-5">
                    <div class="col">
                        <h3>Your Profile</h3>
                        <hr>
                        <h4>Welcome to the Dashboard</h4>
                        <p>Your name is <strong><?php echo $_SESSION["name"]; ?></strong></p>
                        <p>Your email is <strong><?php echo $_SESSION["email"]; ?></strong></p>
                        <hr>
                        <br>
                        <form action="logout.php">
                            <input type="submit" class="btn btn-danger" value="Logout">
                        </form>
                    </div>
                    <div class="col">
                        <h4>Rooms</h4>
                        <table class="table">
                            <thead>
                                <tr>
                                    <th scope="col">#</th>
                                    <th scope="col">Room Name</th>
                                    <th scope="col">Room Image</th>
                                    <th scope="col">Room Type</th>
                                    <th scope="col">Room Price</th>
                                </tr>
                            </thead>
                            <tbody>
                                <?php
                                $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se"); // Connection to Database

                                $query = "SELECT * FROM rooms"; // The question to select all the products from the table
                                mysqli_query($connect, "SET NAMES utf8");

                                $result = mysqli_query($connect, $query); // Asking the question

                                while ($row = mysqli_fetch_array($result)) { // Loop to show all the products in the table

                                ?>
                                    <tr>
                                        <th scope="row"><?php echo $row["id"]; ?></th>
                                        <td><?php echo $row["roomname"]; ?></td>
                                        <td><img src="<?php echo $row["roomimg"]; ?>" width="50" height="50" /></td>
                                        <td><?php echo $row["roomtype"]; ?></td>
                                        <td>$<?php echo $row["roomprice"]; ?></td>
                                    </tr>
                                <?php } ?>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="container">
                    <h2 class="text-center">Reservation Panel</h2>
                    <table class="table">
                        <thead>
                            <tr>
                                <th scope="col">#</th>
                                <th scope="col">Fullname</th>
                                <th scope="col">Email</th>
                                <th scope="col">Phone</th>
                                <th scope="col">Check In</th>
                                <th scope="col">Check Out</th>
                                <th scope="col">Room</th>
                                <th scope="col">Booked at</th>
                                <th scope="col">Cancel</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se"); // Connection to Database

                            $query = "SELECT * FROM reservations"; // The question to select all the products from the table
                            mysqli_query($connect, "SET NAMES utf8");

                            $result = mysqli_query($connect, $query); // Asking the question

                            while ($row = mysqli_fetch_array($result)) { // Loop to show all the products in the table

                            ?>
                                <tr>
                                    <th scope="row"><?php echo $row["id"]; ?></th>
                                    <td><?php echo $row["fullname"]; ?></td>
                                    <td><?php echo $row["email"]; ?></td>
                                    <td><?php echo $row["phone"]; ?></td>
                                    <td><?php echo $row["checkin"]; ?></td>
                                    <td><?php echo $row["checkout"]; ?></td>
                                    <td><?php echo $row["room"]; ?></td>
                                    <td><?php echo $row["booked_at"]; ?></td>
                                    <td><a href='roomcancel.php?id=<?php echo $row['id']; ?>'>Decline</a></td>
                                </tr>
                            <?php } ?>
                        </tbody>
                    </table>
                </div>
                <hr>
                <div class="container"></div>
                <h2 class="text-center">Contact Panel</h2>
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">#</th>
                            <th scope="col">Fullname</th>
                            <th scope="col">Email</th>
                            <th scope="col">Phone</th>
                            <th scope="col">Message</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se"); // Connection to Database

                        $query = "SELECT * FROM contact"; // The question to select all the products from the table
                        mysqli_query($connect, "SET NAMES utf8");

                        $result = mysqli_query($connect, $query); // Asking the question

                        while ($row = mysqli_fetch_array($result)) { // Loop to show all the products in the table

                        ?>
                            <tr>
                                <th scope="row"><?php echo $row["id"]; ?></th>
                                <td><?php echo $row["fullname"]; ?></td>
                                <td><?php echo $row["email"]; ?></td>
                                <td><?php echo $row["phone"]; ?></td>
                                <td><?php echo $row["message"]; ?></td>
                            </tr>
                        <?php } ?>
                    </tbody>
                </table>
            </div>

        <?php
        }
    }

    // OM VI SKA VISA FORMULÄREN
    if ($show_form) {
        // Visa formulären
        ?>

        <!-- Login -->
        <div class="container mt-5">
            <h1>Admin Panel</h1>
            <form action="login.php" method="POST">
                <div class="form-group">
                    <label>Email address</label>
                    <input type="email" class="form-control" name="email" placeholder="Enter email">
                </div>
                <div class="form-group">
                    <label>Password</label>
                    <input type="password" class="form-control" name="password" placeholder="Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
            </form>
        </div>

    <?php } ?>

    <!-- Footer -->
    <footer class="page-footer font-small blue mt-5">
        <div class="footer-copyright text-center py-3">© 2020 Copyright - LilTruck Hotel</div>
    </footer>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.0/js/bootstrap.min.js" integrity="sha384-OgVRvuATP1z7JjHLkuOU7Xw704+h835Lr+6QL9UvYjZE3Ipu6Tp75j7Bh/kR0JKI" crossorigin="anonymous"></script>
</body>

</html>