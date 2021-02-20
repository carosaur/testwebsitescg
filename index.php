<?php
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSS Includes -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
    <link href="css/style.css">
    <title>SCG Test Project</title>
</head>
<body>
<?php
    show_login();


function show_login(){

    //if user is not logged in, this navbar and login box is shown
    ?>

    <!-- nav bar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="#">SCG</a>
    </div>
    <form action = "signup.php" class="d-flex justify-content-end px-2">
        <button class="btn btn-outline-success " type="submit">Register</button>
    </form>
    <form class="d-flex justify-content-end px-2">
        <button class="btn btn-outline-success " type="submit">Login</button>
    </form>
</nav>
<br>
    <br>
<div class="container">
    <div class="row">
        <div class="col-4"></div>
        <div class="col-12 col-md-6 col-lg-4">
            <div class="card">
                <div class="card-header bg-success text-white">
                    Login
                </div>
                <div class="card-body">
                    <span class="card-title text-center"> <h4> Welcome back! </h4> <br>Please sign into your account. </span>
                    <br>
                    <br>
                    <form>
                        <label for="email" class="form-label">Email</label>
                        <input type="text" class="form-control" id="email">
                        <label for="password" class="form-label">Password</label>
                        <input type="password" class="form-control" id="password">
                        <br>
                        <button type="submit" class="btn btn-success form-control">Login</button>
                    </form>
                    <hr>
                    <span>Need an account? <a href="signup.php">Click here.</a> </span>

                </div>
            </div>
        </div>
        <div class="col-4"></div>
    </div>
</div>
<?php
}