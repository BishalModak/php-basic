<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css">
    <title>Register</title>
</head>
<body class="bg-light">
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-sm-10 col-md-6 col-lg-5">

                <form action="insert.php" method="post" class="border p-4 bg-white rounded">
                    <h4 class="text-center mb-4">Create Account</h4>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Username" name="name" required>
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" placeholder="E-mail" name="email" required>
                    </div>
                    <div class="form-group">
                        <input type="tel" class="form-control" placeholder="Phone" name="phone">
                    </div>

                    <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="pass" required>
                    </div>
                    <button type="submit" class="btn btn-primary btn-block" name="register">Register</button>
                    <div class="text-center mt-3">
                        <small>Already have an account?</small><br>
                        <a href="login.php" class="btn btn-outline-secondary btn-block">Login</a>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js"></script>
</body>

</html>