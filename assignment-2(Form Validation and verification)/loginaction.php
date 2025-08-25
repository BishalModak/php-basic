<?php

if (isset($_POST['login'])) {
    include 'connect.php';

    $l_email = $_POST['email'];
    $l_pass = $_POST['pass'];

    $check = mysqli_query($connect, "SELECT * FROM `user` WHERE email='$l_email' AND password='$l_pass'");

    if(mysqli_num_rows($check)>0){
        session_start();
        $_SESSION['uname']=  $l_email;
        echo "<script>location.href='index.php'</script>";

    }else{
        echo "<script>alert('wrong username or password')</script>";
    echo "<script>location.href='login.php'</script>";
    }
} else {
    echo "<script>alert('donot access from url')</script>";
    echo "<script>location.href='login.php'</script>";
}
