<?php
include 'connection.php';

$username = $_POST["username"];
$email = $_POST["email"];
$password = $_POST["password"];
$confirmPassword = $_POST["confirm-password"];

if (isset($_POST['submit'])) {

    $sql = "INSERT INTO users (username, email, password) VALUES ('$username', '$email', '$password')";

    mysqli_query($connect, $sql);
    header("Location:../index.html");
    exit();
}
