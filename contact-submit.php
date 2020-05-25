<?php

if( isset($_POST['fullname']) && isset($_POST['email']) && isset($_POST['phone']) && isset($_POST['message'])){

    $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se");

    $fullname = $_POST['fullname'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $message = $_POST['message'];

    $query = "INSERT INTO contact (fullname,email,phone,message) VALUES ('$fullname','$email','$phone','$message');";

    if(mysqli_query($connect,$query)){
       echo '<script>alert("Your message was sent to the LilTruck Managment!") </script>' ;
       echo '<meta http-equiv="refresh" content="1; URL=contact.php" />';
    }
  }
?>