<?php

if( isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['checkin']) && isset($_POST['checkout']) && isset($_POST['room'])){

    $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $checkin = $_POST['checkin'];
    $checkout = $_POST['checkout'];
    $room = $_POST['room'];

    $query = "INSERT INTO reservations (fullname,email,phone,checkin,checkout,room) VALUES ('$fullname','$email','$phone','$checkin','$checkout','$room');";

    if(mysqli_query($connect,$query)){
       echo '<script>alert("Your room at LilTruck Hotel was booked!!") </script>' ;
       echo '<meta http-equiv="refresh" content="1; URL=rooms.php" />';
    }
  }
?>