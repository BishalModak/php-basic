<?php 
include('includes/header.php');
include('includes/navber.php');

session_start();
if(isset($_SESSION['uname'])){
    echo "<div class='container py-3'>";
    echo "<div class='alert alert-success'>";
    echo "Welcome to our site, " . $_SESSION['uname'];
    echo " <a href='logout.php'><input type='button' value='Logout' class='btn btn-secondary'></a>";
    echo "</div>";
    echo "</div>";
}
?>

<div class="py-5">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h4>Login and Registration System in PHP</h4>
                <h5>With Email Verification</h5>
            </div>
        </div>
    </div>
</div>

<?php include('includes/footer.php')?>
