<?php

$connect = mysqli_connect("webwow.se.mysql","webwow_se","tmjnkNVB8ZZwzACKjTPYddXz","webwow_se");

$id = intval($_GET['id']);
$query = "DELETE FROM reservations WHERE id=$id";

$result = mysqli_query($connect, $query);

if($result)  
{  
    header("refresh:1; url=adminpanel.php");
    echo "<script>alert('The reservation has been canceled!');</script>";  
}  

?>