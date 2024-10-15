<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");

/**
 * if there is a page, shows the page but not the home page
 * Session --> controls the user's session
 * This is the main page where all the php are inserted
 */

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
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
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

  <main>
    <div class="title-bar d-flex justify-content-center align-center">
      <div class="breadcrumb d-flex gap-2">
        <span> < </span>
        <a href="index.php" title="Back">Back</a>
      </div>
      <h1>Cookies</h1>
    </div>
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
          <div class="text-content pt-5 pb-5">
            <p>A cookie is a small file that seeks your permission to be placed on your computer's hard drive. Once you
              agree, the file is added, and the cookie aids in analyzing web traffic or notifying you when you visit a
              specific website. </p>
            <p>Cookies enable web applications to respond to you as an individual. These web applications can customize
              their operations based on your preferences, gathering and remembering information about your likes and
              dislikes. We utilize traffic log cookies to identify which pages are being visited. This helps us analyze
              data related to web page traffic and enhance our website to better suit customer needs. We exclusively use
              this information for statistical analysis, and subsequently, the data is removed from the system. In
              summary, cookies assist us in providing you with an improved website by allowing us to monitor which pages
              are useful to you and which are not. It's important to note that a cookie does not grant us access to your
              computer or any information about you, apart from the data you choose to share with us. </p>
            <p>You have the option to accept or decline cookies. Most web browsers automatically accept cookies, but you
              can typically adjust your browser settings to decline cookies if you prefer. However, this choice may
              restrict your ability to fully utilize the website.</p>
          </div>
        </div>
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