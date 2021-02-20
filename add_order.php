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
                <a class="nav-link" href="#">Add Order</a>
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
<!--main body -->
<!-- first card is displayed on load and others are added programmatically -->
<div class="container">
    <div class="row align-items-center">
        <div class="col-12">
            <div class="card">
                <div class="card-header">
                    <h4>Place Order</h4>
                </div>
                <div class="card-body">
                    <h5 class="card-title">Describe Items for Appraisal</h5>
                    <p class="text-muted">Please fill in the form below for each card to be appraised. All fields required.</p>
                    <div id="cards">
                        <div id="card0">
                            <hr>
                            <div class="row px-5-xl my-2-xl">
                                <div class="col-12 col-md-1 col-xl-1">
                                    <button type="button" id ="delete0" class="btn-close" aria-label="Remove Card" onclick="remove_card(this.id)" hidden></button>
                                </div>
                                <div class="col-12 col-md-3 col-xl-3">
                                    <label for="manu" class="form-label">Manufacturer</label>
                                    <input type="text" class="form-control" id="manu0">
                                </div>
                                <div class="col-12 col-md-2 col-xl-1">
                                    <label for="year" class="form-label">Year</label>
                                    <input type="text" class="form-control"  id="year0">
                                </div>
                                <div class="col-12 col-md-3 col-xl-3">
                                    <label for="set" class="form-label">Set Name</label>
                                    <input type="text" class="form-control" id="set0">
                                </div>
                                <div class="col-12 col-md-3 col-xl-4">
                                    <label for="player" class="form-label">Player</label>
                                    <input type="text" class="form-control" id="player0">
                                </div>
                                <div class="col-12 col-md-1 col-xl-1 "></div>
                                <div class="col-12 col-md-3 col-xl-4">
                                    <label for="cardnum" class="form-label">Card Number</label>
                                    <input type="text" class="form-control" id="cardnum0"">
                                </div>
                                <div class="col-12 col-md-4 col-xl-5">
                                    <label for="var" class="form-label">Variation</label>
                                    <input type="text" class="form-control"  id="var0">
                                </div>
                                <div class="col-12 col-md-3 col-xl-2">
                                    <label for="value" class="form-label">Declared Value</label>
                                    <input type="text" class="form-control"  id="value0">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer my-3">
                        <div class="d-grid gap-2 d-md-flex justify-content-end">
                            <button class="btn btn-secondary" type="submit" onclick="add_card()">Add Card</button>
                            <button class="btn btn-success" type="submit">Submit Order</button>
                        </div>
                    </div>
            </div>
        </div>
    </div>
</div>

<!-- JS Includes -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/js/bootstrap.bundle.min.js" integrity="sha384-b5kHyXgcpbZJO/tY9Ul7kGkf1S0CWuKcCD38l8YkeH8z8QjE0GmW1gYU5S9FOnJ0" crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.5.1.js" integrity="sha256-QWo7LDvxbWT2tbbQ97B53yJnYU3WhH/C8ycbRAkjPDc=" crossorigin="anonymous"></script>
<script src="js/add_order.js">

</script>
</body>

</html>
