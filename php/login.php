<?php


if (isset($_POST['submit'])) {

    include 'connection.php';

    $username = $_POST["username"];
    $password = $_POST["password"];

    $sql = "SELECT * FROM users WHERE username='" . $username . "' AND password = '" . $password . "' ";

    $result = mysqli_query($connect, $sql);

    $row = mysqli_fetch_array($result);

    if (is_array($row)) {
        header("Location:../index.html");
        exit();
    } else {
        echo "<script> if(confirm('Looks like you dont have an account') ){ document.location.href='login.php'} else{document.location.href='login.php'}</script>";
        exit();
    }
}
