<?php include('includes/header.php');
include('includes/navber.php'); ?>
<div class="container">
    <div class="row justify-content-center mt-5"> 
        <div class="col-sm-10 col-md-8 col-lg-5 col-xl-4"> 
            
            <form action="insert.php" method="post" class="p-4 bg-white shadow rounded">
                
                <div class="mb-4">
                    <h4 class="text-center text-primary">Create Account</h4> </div>
                
                <div class="mb-3">
                    <input type="text" class="form-control form-control-lg" placeholder="Username" name="name" required>
                </div>
                <div class="mb-3">
                    <input type="email" class="form-control form-control-lg" placeholder="E-mail" name="email" required>
                </div>
                <div class="mb-3">
                    <input type="tel" class="form-control form-control-lg" placeholder="Phone" name="phone">
                </div>
                <div class="mb-3">
                    <input type="password" class="form-control form-control-lg" placeholder="Password" name="pass" required>
                </div>
                <div class="mb-4"> <input type="password" class="form-control form-control-lg" placeholder="Confirm Password" name="cpass" required>
                </div>
                
                <button type="submit" class="btn btn-primary btn-lg col-12 mb-4" name="register">Register</button>
                
                <div class="text-center border-top pt-3">
                    <p class="mb-2">Already have an account?</p>
                    <a href="login.php" class="btn btn-outline-secondary col-12">Login</a>
                </div>
                
            </form>
        </div>
    </div>
</div>
<?php include('includes/footer.php') ?>