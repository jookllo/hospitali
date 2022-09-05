<?php
include "dbconnection.php";
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];


    $sql = "SELECT * FROM users where username = '$username' and password = '$password'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
    $count = mysqli_num_rows($result);

    if ($count == 1) {
        header("Location: reception.php");
    } else {
        echo '<script type= "text/Javascript">
        alert("Wrong password");
        window.location = "login.php";
        </script>';
    }
} else {

    echo "wrong request";
}
