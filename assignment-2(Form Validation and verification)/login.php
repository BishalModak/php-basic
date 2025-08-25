<?php 
include('includes/header.php');
include('includes/navber.php');

?>

<div class="container">
    <div class="row justify-content-center mt-5"> 
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4"> 
            
            <form action="loginaction.php" method="post" class="p-4 bg-white shadow rounded">
                
                <div class="mb-4">
                    <h4 class="text-center text-primary">Login Here</h4> </div>
                <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="E-mail" name="email" required>
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="pass" required>
                </div>
                <button type="submit" class="btn btn-primary btn-lg col-12 mb-4" name="login">Login</button>
                
                <div class="text-center border-top pt-3">
                    <p class="mb-2">Don't have an account?</p>
                    <a href="register.php" class="btn btn-outline-secondary col-12">Register</a>
                </div>
            </form>
        </div>
    </div>
</div>
<?php include('includes/footer.php')?>