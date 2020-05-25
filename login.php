<?php
// ALLTID STARTA SESSION I BÖRJAN
session_start();

// KOLLA OM MAN VILL LOGGA IN
if(isset($_POST['email']) && isset($_POST['password'])){

    // CONNECTA TILL DATABASEN
    $connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se");

    // HÄMTA DATA FROM POST
    $email = $_POST['email'];
    $password = $_POST['password'];

    // FORMULERA SELECT FRÅGA
    $query = "SELECT * FROM adminpanel WHERE email='$email' AND password='$password'";

    // STÄLL FRÅGA
    $result = mysqli_query($connect,$query);

    // OM ANTAL RADER ÄR LIKA MED 1
    if(mysqli_num_rows($result) == 1){
        // BLI INLOGGAD
        $row = mysqli_fetch_array($result);
        $_SESSION['email'] = $row['email'];
        $_SESSION['name'] = $row['name'];
        $_SESSION['login'] = "INLOGGAD";
        header("Location: adminpanel.php");
    }
    else{
        // BLI INTE INLOGGAD
        $_SESSION['error_msg'] = "Felaktiga uppgifter!";
        $_SESSION['login'] = "UTLOGGAD";
        header("Location: index.php");
    }
}
else{ // FELAKTIG DATA FRÅN $_POST
    $_SESSION['error_msg'] = "Felaktig information";
    header("Location: index.php");
}

?>