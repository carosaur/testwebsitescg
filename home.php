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
        <a class="navbar-brand" href="#">SCG</a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarLinks" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarLinks">
            <div class="navbar-nav">
                <a class="nav-link" href="index.php">Home</a>
                <a class="nav-link" href="add_order.php">Add Order</a>
                <a class="nav-link" href="#">My Profile</a>
            </div>
        </div>
        <form class="d-flex justify-content-end">
            <button class="btn btn-outline-success " type="submit">Logout</button>
        </form>
    </div>
</nav>
<br>
<br>
<div class="container">
    <div class="row text-center">
        <h1>Welcome Back, User!</h1>
        <span> Begin grading your cards now or view/edit your profile.</span>
    </div>
    <br>
    <br>
    <div class="row text-center d-flex">
        <div class="" role="group">
            <form>
                <button type="submit" class="btn btn-success" formaction="add_order.php">Begin Order!</button>
                <button type="submit" class="btn btn-success">View/Edit Profile</button>
            </form>
        </div>
    </div>
</div>