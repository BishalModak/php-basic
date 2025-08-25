<?php
include 'connect.php';

$r_name = $_POST['name'];
$r_email = $_POST['email'];
$r_phone = $_POST['phone'];                 
$r_pass = $_POST['pass'];
$r_cpass = $_POST['cpass'];

$emailpattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
$phonepattern = "/(\+88)?01[3-9]\d{8}/";

$insertquery = "INSERT INTO `user`(`name`, `email`, `phone`, `password`) VALUES ('$r_name','$r_email','$r_phone','$r_pass')";

$duplicate=mysqli_query($connect,"SELECT * FROM `user` WHERE email='$r_email'");

if (strlen($r_name) < 2 || strlen($r_name) > 20) {
    echo "<script> alert('name must be in between 2-20 character')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($emailpattern, $r_email)) {
    echo "<script> alert('email is invalid')</script>";
    echo "<script>location.href='register.php'</script>";
} else if (!preg_match($phonepattern, $r_phone)) {
    echo "<script> alert('number is invalid')</script>";
    echo "<script>location.href='register.php'</script>";
} else if ($r_pass !== $r_cpass) {
    echo "<script> alert('not matching')</script>";
    echo "<script>location.href='register.php'</script>";
}  else if (mysqli_num_rows($duplicate)>0) {
    echo "<script> alert('email already exists')</script>";
    echo "<script>location.href='register.php'</script>";
}
else {
    if(!mysqli_query($connect,$insertquery)){
        die('not inserted');
    }else{
        echo "<script> alert('inserted')</script>";
        echo "<script>location.href='login.php'</script>";
    }
}
