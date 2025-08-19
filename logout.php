<?php
session_start();

// If session exists, destroy it
if (isset($_SESSION['username'])) {
    session_unset();    // remove all session variables
    session_destroy();  // destroy the session
    echo "<script>
            alert('You have been logged out successfully');
            window.location.href='form_bootstrap.php';
          </script>";
} else {
    echo "<script>
            alert('No active session found');
            window.location.href='form_bootstrap.php';
          </script>";
}
