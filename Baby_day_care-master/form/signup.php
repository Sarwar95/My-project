<?php
include '../config/dbconfig.php';
$username = $_POST['username'];
$password = $_POST['password'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$address = $_POST['address'];
$query = "INSERT INTO signup ( name, email , contact, address, password) VALUES('$username', '$email', '$phone', '$address', '$password');";
mysqli_query($con, $query);
header("Location: ../signup.html");
?>