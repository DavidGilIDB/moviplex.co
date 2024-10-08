<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");

$page = $_GET['page'] ?? "home";

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">
</head>

<body>

  <?php
  include("modal.php");
  include("pages/header.php");
  include("pages/login.php");
  include("pages/subscription.php");
  ?>

  <main>
    <div class="title-bar d-flex justify-content-center align-center">
      <div class="breadcrumb d-flex gap-2">
        <span>
          < </span>
            <a href="index.php" title="Back">Back</a>
      </div>
      <h1>Support</h1>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-6 col-lg-3">
          <div class="text-content pt-3 pb-5 pe-lg-4">
            <h2>Contact</h2>
            <p>
              Contact us for assistance in optimizing your experience with our services. You're welcome to reach out via
              your preferred communication method. Our customer support is available from Monday to Friday, 8 am to 4 pm
              (GMT+2).
            </p>
            <h3>Phone Number</h3>
            <a href="tel:+442036954973" class="xl">+442 036 954 973</a>
            <h3>Email</h3>
            <a href="mailto:support@mobile2go.net" class="xl">support@mobile2go.net</a>
          </div>
        </div>
        <div class="col-md-6 col-lg-3">
          <div class="text-content pt-3 pb-5 ps-lg-4">
            <h2>Useful Links</h2>
            <p>Here are some helpful links to learn more about our services and terms:</p>
            <ul>

              <?php
              if (isset($_SESSION['login']) && $_SESSION["login"]) {
              ?>

                <li><a class="xl" href="account.php" title="Account">Account</a></li>

              <?php
              }
              ?>

              <li><a class="xl" href="terms.php" title="Terms">Terms</a></li>
              <li><a class="xl" href="privacy.php" title="Privacy">Privacy</a></li>
              <li><a class="xl" href="cookies.php" title="Cookies">Cookies</a></li>
            </ul>
          </div>
        </div>
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