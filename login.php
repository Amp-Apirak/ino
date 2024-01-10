<?php session_start(); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="description" content="">
        <meta name="author" content="">
        <meta name="keywords" content="">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <!--Meta Responsive tag-->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!--Bootstrap CSS-->
        <link rel="stylesheet" href="assets/css/bootstrap.min.css">
    <!--Custom style.css-->
        <link rel="stylesheet" href="assets/css/quicksand.css">
        <link rel="stylesheet" href="assets/css/style.css">
    <!--Font Awesome-->
        <link rel="stylesheet" href="assets/css/fontawesome-all.min.css">
        <link rel="stylesheet" href="assets/css/fontawesome.css">

    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

<title>Login</title>
</head>

<body class="login-body">

    <!--Login Wrapper-->
    <div class="container-fluid login-wrapper">
        <div class="login-box">
            <h1 class="text-center mb-5"><i class="fas fa-handshake text-primary"></i> Point IT Sales Management</h1>
            <div class="row">
                <div class="col-md-6 col-sm-6 col-12 login-box-info align-center">
                    <h3 class="mb-4">Sign up</h3>
                    <p class="text-center"><a href="regis.php" class="btn btn-light">Register here</a></p>
                </div>
                <div class="col-md-6 col-sm-6 col-12 login-box-form p-4">
                    <h3 class="mb-2">Login</h3>
                    <small class="text-muted bc-description"></small>
                    <form action="checklog.php" method="post" class="mt-2">
                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-user"></i></span>
                            </div>
                            <input type="text" class="form-control mt-0" name="username" placeholder="username"
                                aria-label="username" required aria-describedby="basic-addon1">
                        </div>

                        <div class="input-group mb-3">
                            <div class="input-group-prepend">
                                <span class="input-group-text" id="basic-addon1"><i class="fa fa-lock"></i></span>
                            </div>
                            <input type="text" class="form-control mt-0" name="password" placeholder="password"
                                aria-label="password" required aria-describedby="basic-addon1">
                        </div>



                        <div class="form-group">
                            <button class="btn btn-theme btn-block p-2 mb-1">Login</button>
                            <a href="#">
                                <small class="text-theme"><strong>Forgot password?</strong></small>
                            </a>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <!--Login Wrapper-->

    <!-- Page JavaScript Files-->
    <script src="assets/js/jquery.min.js"></script>
    <script src="assets/js/jquery-1.12.4.min.js"></script>
    <!--Popper JS-->
    <script src="assets/js/popper.min.js"></script>
    <!--Bootstrap-->
    <script src="assets/js/bootstrap.min.js"></script>

    <!--Custom Js Script-->
    <script src="assets/js/custom.js"></script>
    <!--Custom Js Script-->
</body>

</html>