<?php

session_start();
header("X-Frame-Options: sameorigin");

include ("Global.php");

/**
 * if there is a page, shows the page but not the home page
 * Session --> controls the user's session
 * This is the main page where all the php are inserted
 */

$page = isset($_GET['page']) ? $_GET['page'] : "";

if(isset($_GET['page']) && !isset($_GET['section'])){
  $page = "main";
}

include ("session.php");

if ($page == '' || $page == ' ' || $page == null) {
  $page = 'home';
}


/*if (($page != 'terms' && $page != 'contact'  && $page != 'otp-page') && (isset($_SESSION['login']) === false || $_SESSION['login'] != true)){
        $page = 'login';
}*/

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

  <title>Moviplex</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet"
    integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous" />
  <link rel="icon" href="assets/images/favicon.png">
  <link rel="stylesheet" href="./assets/css/style.css">
  <script type="text/javascript" src="https://cdn.jsdelivr.net/npm/clappr@latest/dist/clappr.min.js">
  </script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.css" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">
  <!-- Google Tag Manager -->
  <script>(function (w, d, s, l, i) {
      w[l] = w[l] || []; w[l].push(

        { 'gtm.start': new Date().getTime(), event: 'gtm.js' }
      ); var f = d.getElementsByTagName(s)[0],
        j = d.createElement(s), dl = l != 'dataLayer' ? '&l=' + l : ''; j.async = true; j.src =
          'https://www.googletagmanager.com/gtm.js?id=' + i + dl; f.parentNode.insertBefore(j, f);
    })(window, document, 'script', 'dataLayer', 'GTM-KH2RMCGW');</script>
  <!-- End Google Tag Manager -->

  <script type="text/javascript" charset="UTF-8" src="//cdn.cookie-script.com/s/f32c25ee4abf3104420f7e329b961ccf.js"></script>
</head>

<body>
  <!-- Google Tag Manager (noscript) -->
  <noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-KH2RMCGW" height="0" width="0"
      style="display:none;visibility:hidden"></iframe></noscript>
  <!-- End Google Tag Manager (noscript) -->
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

  <?php if (isset($result)) {

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