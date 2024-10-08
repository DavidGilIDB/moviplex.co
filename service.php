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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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
  ?>

  <main class="profile">
    <div class="title-bar d-flex justify-content-center align-items-center">
      <div class="breadcrumb d-flex gap-2">
        <span>
          < </span>
            <a href="index.php" title="Back">Back</a>
      </div>
      <h1>Service</h1>
    </div>
    <div class="container">
      <div class="active-subs">
        <h3>Service Name</h3>
        <p>mobile2go</p>
        <h3>Support Email</h3>
        <a href="mailto:support@mobile2go.net">support@mobile2go.net</a>
        <h3>Tariff</h3>
        <p>39.99 €/£ per month</p>
        <h3>Subscribed Email</h3>
        <a href="mailto:<?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?>"><?= isset($_SESSION['email']) ? $_SESSION['email'] : "" ?></a>
        <h3>Subscriptions Details</h3>
        <p>Your subscription is presently active and will renew automatically unless you choose to <a href="unsub.php">unsusbscribe</a>.</p>
      </div>
    </div>
  </main>

  <?php
  include("pages/footer.php");
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL" crossorigin="anonymous"></script>
  <script src="assets/js/app.js"></script>
</body>

</html>