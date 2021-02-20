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

<!-- nav bar -->
<nav class="navbar navbar-expand-lg sticky-top navbar-dark bg-dark">
    <div class="container-fluid">
        <a class="navbar-brand" href="index.php">SCG</a>
    </div>
    <form action = "signup.php" class="d-flex justify-content-end px-2">
        <button class="btn btn-outline-success " type="submit">Register</button>
    </form>
    <form action ="index.php" class="d-flex justify-content-end px-2">
        <button class="btn btn-outline-success " type="submit">Login</button>
    </form>
</nav>
<br>
<br>
<div class="container">
    <div class="row">
        <div class="col-3"></div>
        <div class="col-12 col-md-6">
            <div class="card">
                <div class="card-body">
                    <span class="card-title text-center"> <h2>Welcome, register below to get started.</h2> </span>
                    <br>
                    <br>
                    <form>
                        <div class="row">
                            <div class="col-6">
                                <label for="firstname" class="form-label">First Name</label>
                                <input type="text" class="form-control" id="fname">
                            </div>
                            <div class="col-6">
                                <label for="lastname" class="form-label">Last Name</label>
                                <input type="text" class="form-control" id="lastname">
                            </div>
                            <div class="col-12">
                                <label for="email" class="form-label">Email</label>
                                <input type="email" class="form-control" id="email">
                            </div>
                            <div class="col-12">
                                <label for="emailverify" class="form-label">Verify Email</label>
                                <input type="email" class="form-control" id="emailverify">
                            </div>
                            <div class="col">
                                <label for="password" class="form-label">Password</label>
                                <input type="password" class="form-control" id="password">
                            </div>
                        </div>
                        <br>
                        <button type="submit" class="btn btn-success form-control">Register</button>
                    </form>
                    <hr>
                    <span>Already a member? <a href="index.php">Login here.</a> </span>

                </div>
            </div>
        </div>
        <div class="col-3"></div>
    </div>
</div>

