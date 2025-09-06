<?php
include 'connect.php';

$r_name = $_POST['name'];
$r_email = $_POST['email'];
$r_phone = $_POST['phone'];                 
$r_pass = $_POST['pass'];

$insertquery = "INSERT INTO `reg_data`(`name`, `email`, `phone`, `pasword`) VALUES ('$r_name','$r_email','$r_phone','$r_pass')";

if (!mysqli_query($connect, $insertquery)) {
    die('Not inserted');
} 
else {
    echo "<script>alert('Registered successfully');</script>";
    echo "<script>location.href='login.php';</script>";
}
?>