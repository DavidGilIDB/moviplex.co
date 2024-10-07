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
} else if (empty($_COOKIE['lang'])) {
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
  include("pages/header.php");
  include("pages/login.php");
  include("pages/subscription.php");
  ?>

  <main class="profile">
    <div class="title-header mb-0">
      <div class="breadcrumb d-flex gap-2">
        <span>
          < </span>
            <a href="index.php" title="Back">Back</a>
      </div>
      <h1>Edit Profile</h1>
      <button class="profile-btn">
        <img class="profile-img" src="assets/images/profile.jpg" alt="Profile" />
      </button>
    </div>
    <div class="container">
      <div class="info">
        <form action="">
          <div class="row my-4">
            <div class="col-6">
              <label for="name">First Name</label>
              <input name="name" id="name" type="text" placeholder="" />
            </div>
            <div class="col-6">
              <label for="lastname">Last Name</label>
              <input name="lastname" id="lastname" type="text" />
            </div>
          </div>
          <div class="row my-4">
            <label for="email">Email Address</label>
            <div class="col-12">
              <input name="email" id="email" type="email" />
            </div>
          </div>
          <div class="row my-4">
            <h3 for="about">About</h3>
            <p>Write a few sentences about yourself.</p>
            <div class="col">
              <textarea name="about" id="about" cols="30" rows="10"></textarea>
            </div>
          </div>
          <div class="row my-4">
            <h3>Country</h3>
            <div class="col">
              <select name="Select" id="">
                <option value="england">England</option>
                <option value="england">Germany</option>
                <option value="england">Spain</option>
                <option value="england">Croatia</option>
              </select>
            </div>
          </div>
          <div class="row my-4">
            <h3>Language</h3>
            <div class="col">
              <select name="Select Language" id="">
                <option value="england">English</option>
                <option value="england">German</option>
                <option value="england">Spanish</option>
                <option value="england">Croatian</option>
              </select>
            </div>
          </div>
          <div class="row mt-5">
            <h3>Social Profiles</h3>
            <p>Share the URLs of your social profile links.</p>
          </div>
          <div class="row my-4 justify-content-center align-items-center">
            <div class="col-2  p-0 ps-2 p-lg-3">
              <img src="assets/images/facebook.png" alt="" />
            </div>
            <div class="col-10">
              <input type="text" />
            </div>
          </div>
          <div class="row my-4 justify-content-center align-items-center">
            <div class="col-2  p-0 ps-2 p-lg-3">
              <img src="assets/images/instagram.png" alt="" />
            </div>
            <div class="col-10">
              <input type="text" />
            </div>
          </div>
          <div class="row my-4 justify-content-center align-items-center">
            <div class="col-2  p-0 ps-2 p-lg-3">
              <img src="assets/images/youtube.png" alt="" />
            </div>
            <div class="col-10">
              <input type="text" />
            </div>
          </div>
          <div class="row ">
            <div class="col-12 justify-content-end d-flex">
              <button>Save</button>
            </div>
          </div>
        </form>
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