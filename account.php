<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");



$page = $_GET['page'] ??  'home';

include("session.php");


if (!empty($_GET['lang'])) {
    if ($_GET['lang'] == 'de' || $_GET['lang'] == 'es') {
        $_COOKIE['lang'] = $_GET['lang'];
    } else {
        $_COOKIE['lang'] = 'en';
    }
} elseif (empty($_COOKIE['lang'])) {
    $_COOKIE['lang'] = 'en';
}

setcookie('lang', $_COOKIE['lang']);

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Mobile2Go</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
    <link rel="icon" href="assets/images/favicon.png">
    <link rel="stylesheet" href="assets/css/style.css">
    <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

</head>

<body>

    <?php
    include("modal.php");
    include("pages/header.php");
    ?>

    <main class="profile">
        <div class="title-bar d-flex justify-content-center align-items-center">
            <div class="breadcrumb d-flex gap-2">
                <span>
                    < </span>
                        <a href="index.php" title="Back">Back</a>
            </div>
            <h1>Account</h1>
        </div>
        <div class="container">
            <div class="active-subs">
                <h3>Active</h3>
                <p>Here you can both view and supervise your currently active subscriptions.</p>
                <div class="row justify-content-between my-5">
                    <div class="col-6">
                        <img src="assets/images/logo.png" alt="mobile2go" />
                    </div>
                    <div class="col-4 link">
                        <a class="manage" href="service.php">Manage</a>
                    </div>
                </div>
                <div class="row justify-content-between my-5">
                    <div class="col-6">
                        <div class="d-flex justify-content-start">
                            <img class="google-icon" src="assets/images/google-logo.svg" alt="mobile2go" />
                            <p>support@mobile2go.net</p>
                        </div>
                    </div>
                    <div class="col-4 link">
                        <a class="manage" href="service.php">Manage</a>
                    </div>
                </div>
                <h3>Available Service</h3>
                <p>Subscribe to our fantastic service and experience ad-free, unlimited access.</p>
            </div>
        </div>
    </main>

    <?php
    include("pages/footer.php")
    ?>

    <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
    <script src="assets/js/app.js"></script>
</body>

</html>