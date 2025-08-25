<?php
session_start();

// Registered values
$r_name = "admin";
$r_pass = "123"; // make it string, not int

// Get input safely
$l_name = $_POST['name'] ?? '';
$l_pass = $_POST['password'] ?? '';

// Check if already logged in
if (isset($_SESSION['username'])) {
    echo "Welcome " . $_SESSION['username'] . "<br>";
    echo "<a href='product.php'><button>Product</button></a>";
    echo "<a href='logout.php'><button>logout</button></a>";
} else {
    // Check login attempt
    if (isset($_POST['login'])) {
        if ($l_name === $r_name && $l_pass === $r_pass) {
            $_SESSION['username'] = $l_name;
            header("Location: home_form.php"); // PHP redirect
            exit();
        } else {
            echo "<script>alert('Invalid input'); window.location.href='form_bootstrap.php';</script>";
        }
    } else {
        echo "<script>alert('Do not access from URL'); window.location.href='form_bootstrap.php';</script>";
    }
}
?>
