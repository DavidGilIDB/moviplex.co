<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");


$page = $_GET['page'] ?? "home";

if (isset($page) && !isset($_GET['section']) && ($page != "home")) {
  $page = "main";
}

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

if (isset($_POST["btnSubmitEmail"])) {

  $email = $_POST["email"];

  $curl_handle = curl_init();
  //curl_setopt($curl_handle, CURLOPT_URL, LOGINURLEMAIL . "service=" . SERVICE . "&email=" . $email);
  curl_setopt($curl_handle, CURLOPT_URL, LOGINURLEMAIL . "?service=FLEXCAST&email=" . $email);
  curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($curl_handle);
  curl_close($curl_handle);

  if ($response == "OK") {

    $showOpt = true;
    $_SESSION["email"] = $email;
  } else {
    $showOpt = false;
    $error_email = 'Failed to send OTP. Please try again.';
  }
} elseif (isset($_POST["btnSubmitOtp"])) {

  $otp = $_POST["otp"];

  $curl_handle = curl_init();
  curl_setopt($curl_handle, CURLOPT_URL, VERIFICATIONURL . "?email=" .  $_SESSION["email"] . '&otp=' . $otp);
  curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
  curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
  $response = curl_exec($curl_handle);
  curl_close($curl_handle);

  if ($response == 'OK') {

    $_SESSION['login'] = true;
    $_SESSION['pay_status'] = true;
    $showOpt = false;
  } elseif ($response == 'PENDING') {

    $_SESSION['login'] = true;
    $_SESSION['pay_status'] = false;
    $showOpt = false;
  } else {
    $error_otp = '<p>OTP Incorrecto</p>';
  }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="description" content="">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>Moviplex</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="assets/css/style.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap" rel="stylesheet">

  <!-- ICONS -->
   
  <link rel="stylesheet" href="//cdn.flowplayer.com/releases/native/3/stable/style/flowplayer.css">
  <script src="//cdn.flowplayer.com/releases/native/3/stable/flowplayer.min.js"></script>
  <!-- Optional plugins -->
  <script src="//cdn.flowplayer.com/releases/native/3/stable/plugins/hls.min.js"></script>

  <!-- Google Tag Manager -->
  <script>
    (function(w, d, s, l, i) {
      w[l] = w[l] || [];
      w[l].push(

        {
          'gtm.start': new Date().getTime(),
          event: 'gtm.js'
        }
      );
      var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s),
        dl = l != 'dataLayer' ? '&l=' + l : '';
      j.async = true;
      j.src =
        'https://www.googletagmanager.com/gtm.js?id=' + i + dl;
      f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KH2RMCGW');
  </script>
  <!-- End Google Tag Manager -->

  <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/f32c25ee4abf3104420f7e329b961ccf.js"></script>

</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH2RMCGW" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->

  <style>
    .modal-background {
      display: none;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      background-color: #1e1e1ee6;
      width: 100%;
      height: 100vh;
      position: fixed;
      z-index: 2;
    }

    /*------------------EMAIL Div--------------------- */

    .modal-container-email {
      display: none;
      flex-direction: column;
      background-color: #0c0c0c;
      width: 800px;
      height: 338px;
      align-items: center;
      border-radius: 30px;
    }

    .close-modal-email {
      display: flex;
      flex-direction: row;
      width: 100%;
      margin-top: .5rem;
      justify-content: end;

    }

    .close-modal-email>button {
      background: none;
      border: none;
      margin-right: 5px;
    }

    .form-modal-email {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      margin-top: 2rem;
    }

    .form-modal-email>form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 70%;
      text-align: center;
      margin-top: 1rem;
    }

    .form-modal-email>h4 {
      font-size: 1.5rem;
    }

    .form-modal-email>form input {
      background-color: #232323;
      border: 3px solid #232323;
      width: 100%;
      height: 2.3rem;
      border-radius: 8px;
      padding-left: 10px
    }

    .form-modal-email>form input:focus {
      outline: none;
      color: white;
      border: 3px solid #052c65;
      padding-left: 10px
    }

    .form-modal-email>form input::placeholder {
      color: white;
    }

    .form-modal-email>form button {
      color: white;
      border: none;
      background-color: #b70a33;
      padding: .8rem;
      margin-top: 2.2rem;
      width: 100%;
      border-radius: 10px;
    }

    .form-modal-email>p {
      color: #808286;
      margin-top: 1.3rem;
    }

    .form-modal-email>p>span,
    a {
      text-decoration: underline;
    }

    .form-modal-email>p>a {
      color: #b70a33;
    }

    .form-modal-email>span {
      color: red;
    }


    /*------------------OTP Div--------------------- */




    .modal-container-otp {
      display: none;
      flex-direction: column;
      background-color: #0c0c0c;
      width: 800px;
      height: 338px;
      align-items: center;
      border-radius: 30px;
    }

    .close-modal-otp {
      display: flex;
      flex-direction: row;
      width: 100%;
      margin-top: .5rem;
      justify-content: end;

    }

    .close-modal-otp>button {
      background: none;
      border: none;
      margin-right: 5px;
    }

    .form-modal-otp {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 100%;
      margin-top: 2rem;
    }

    .form-modal-otp>form {
      display: flex;
      flex-direction: column;
      align-items: center;
      width: 70%;
      text-align: center;
      margin-top: 1rem;
    }

    .form-modal-otp>h4 {
      font-size: 1.5rem;
    }

    .form-modal-otp>form input {
      background-color: #232323;
      border: 3px solid #232323;
      width: 100%;
      height: 2.3rem;
      border-radius: 8px;
      padding-left: 10px
    }

    .form-modal-otp>form button {
      color: white;
      border: none;
      background-color: #b70a33;
      padding: .8rem;
      margin-top: 2.2rem;
      width: 100%;
      border-radius: 10px;
    }

    .form-modal-otp>p {
      color: #808286;
      margin-top: 1.3rem;
    }

    .form-modal-otp>p>span,
    a {
      text-decoration: underline;
    }

    .form-modal-otp>p>a {
      color: #b70a33;
    }

    .form-modal-otp>span {
      color: red;
    }

    .close {
      display: none;
    }

    .open {
      display: flex;
    }
  </style>

  <script>
    $(document).ready(function() {

      $(".noLogin").on("click", function(e) {


        $(".modal-background").css("display", "flex")
        $(".modal-container-email").css("display", "flex")


      })


      $(".modal-background").on("click", function(e) {

        if (e.target === this) {

          $(this).css("display", "none");

        }

      })

      $(".closeIcon").on("click", function(e) {

        $(this).parents('.modal-background').css("display", "none");


      })

    });
  </script>

  <div class="modal-background <?= (isset($_SESSION["login"]) && $_SESSION["login"]) ? "close" : "" ?>">
    <div class="modal-container-email">
      <div class="close-modal-email <?= (isset($showOpt) && $showOpt) ? "close" : "" ?>">
        <button><img src="./assets/close.svg" alt="Close icon" class="closeIcon"></button>
      </div>
      <div class="form-modal-email">
        <h4>Email</h4>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
          <input type="email" name="email" id="email" aria-label="email" placeholder="Email" required>
          <button type="submit" name="btnSubmitEmail">Submit</button>
        </form>
        <p><span>Continue without login</span> or <a href="https://premium.moviplex.co/en/index.php">Register</a></p>
        <span><?= (isset($error_email)) ? $error_email : "" ?></span>
      </div>
    </div>
    <div class="modal-container-otp">
      <div class="close-modal-otp">
        <button><img src="./assets/close.svg" alt="Close icon" class="closeIcon"></button>
      </div>
      <div class="form-modal-otp <?= (isset($showOpt) && $showOpt) ? "open" : "close" ?>">
        <h4>OTP</h4>
        <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
          <input type="text" name="otp" id="otp" aria-label="otp" required>
          <button type="submit" name="btnSubmitOtp">Sign In</button>
        </form>
        <p><span>Continue without login</span> or <a href="https://premium.moviplex.co/en/index.php">Register</a></p>
        <span><?= (isset($error_email)) ? $error_email : "" ?></span>
      </div>
    </div>
  </div>

  <?php
  if (isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'de') {
    include "pages/de/header.php";
    echo "<main>";
    include "pages/de/$page.php";
    echo "</main>";
    include "pages/de/footer.php";
  } elseif (isset($_COOKIE['lang']) && $_COOKIE['lang'] === 'es') {
    include "pages/es/header.php";
    echo "<main>";
    include "pages/es/$page.php";
    echo "</main>";
    include "pages/es/footer.php";
  } else {
    if (isset($error)) {
      $page = 'error';
    }
    include "pages/header.php";
    include "pages/login.php";
    // include "pages/login-mobile.php";
    // include "pages/login-user.php";
    include "pages/subscription.php";
    include "pages/$page.php";
    include "pages/footer.php";
  }
  ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <?php
  if (isset($result)) {
  ?>
    <script>
      var player;

      function playVideo(url) {

        var playerElement = document.querySelector('#player > [data-player]');
        var trailer = document.querySelector('#trailer > [data-player] video ');
        if (trailer != null) {
          trailer.pause();
        }
        if (!playerElement) {
          player = new Clappr.Player({
            source: url,
            parentId: "#player"
          });
        }
      }

      function stopVideo(url) {

        player.pause();
      }
    </script>

    <script>
      var url = <?php echo json_encode($result[0]); ?>;
      // Define la configuración del reproductor
      var playerTrailer = new Clappr.Player({
        source: url['urlTrailer'], // Reemplaza con la URL de tu video
        parentId: '#trailer',
        autoPlay: true,
        mute: true
      });
    </script>

  <?php
  }
  ?>

  <script src="assets/js/app.js"></script>
</body>

</html>