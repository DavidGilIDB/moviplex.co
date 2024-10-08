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
    <div class="title-header mb-0">
      <a href="" class="back-btn">Back</a>
      <h2>Profile</h2>
      <div class="profile-btn">
        <img class="profile-img" src="assets/images/profile.jpg" alt="Profile" />
      </div>
    </div>
    <div class="container">
      <div class="info">
        <h1>Name Lastname</h1>
        <p>
          Lorem ipsum dolor sit, amet consectetur adipisicing elit. Veniam tempore perspiciatis possimus, vero corporis
          modi. Facilis, amet quo ducimus voluptatem id accusantium omnis rem eaque vel blanditiis odio, minus corrupti
          provident voluptate maxime commodi vitae animi fuga distinctio quaerat illo!
        </p>
        <div class="info-links">
          <a class="d-flex my-3" href="edit-profile.php"><img src="assets/images/edit-icon.svg" alt="" /> Edit Profile</a>
          <a class="d-flex my-3" href="manage-account.php"><img src="assets/images/dots.svg" alt="" /> Manage Account</a>
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