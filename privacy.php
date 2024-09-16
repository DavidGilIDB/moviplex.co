<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");

/**
 * if there is a page, shows the page but not the home page
 * Session --> controls the user's session
 * This is the main page where all the php are inserted
 */

$page = isset($_GET['page']) ? $_GET['page'] : "";

include("session.php");

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
  <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800;900&display=swap"
    rel="stylesheet">

</head>

<body>

  <?php include "pages/header.php";
  include "pages/login.php";
  include "pages/subscription.php"; ?>
  <main>
    <div class="title-bar d-flex justify-content-center align-center">
      <div class="breadcrumb d-flex gap-2">
        <span>
          < </span>
            <a href="index.php" title="Back">Back</a>
      </div>

      <h1>Privacy Policy</h1>
    </div>

    <div class="container">
      <div class="row justify-content-center">
        <div class="col-md-10 col-lg-6">
          <div class="text-content pt-5 pb-5">
            <h2>1. General</h2>
            <p>
            Mediteran Union Investment, S.L. (referred to as "Company," "we," "us," or "our") offers this Privacy Policy to
              outline our procedures for gathering, utilizing, and sharing information from individuals who visit our
              website at https://mobile2go.net/ (referred to as the "website") and utilize any associated services.
            </p>

            <p>We understand your concern regarding the usage and sharing of your information and are dedicated to
              maintaining its security and handling it with care.</p>

            <p>
              Here, you will find a brief overview of why and how we collect and utilize your data, who we share it
              with, and the measures we take to ensure the safety and confidentiality of your data.
            </p>

            <h2>2. Collect information</h2>
            <ul>
              <li>
                Data gathered by our servers: To ensure operational efficiency and maintain service quality, we monitor
                your utilization of our information and services, including how you utilize them when applicable.
              </li>

              <li>
                As an illustration, we maintain records of service traffic patterns and retain user access details, such
                as IP addresses, mobile device specifications, operating systems, browsers, and more, in on-site log
                files. Our company's servers autonomously collect specific non-identifiable data, such as the pages
                visited by each user and the domain names of our visitors. This information serves various purposes,
                including internal assessments, traffic analysis, and customization of content for individual visitors.
                Additionally, we may aggregate this non-identifiable information into statistical reports, which may be
                shared with third parties for marketing, advertising, or research purposes.
              </li>

              <li>
                Kindly be aware that either we or third parties might gather Personal Information regarding your online
                activities across various devices and online attributes while utilizing the Services.
              </li>

              <li>
                It's important to understand that we lack control over how other parties handle their opt-out
                procedures.
              </li>

              <li>
                Use of cookies: Every user visiting the website might receive a single cookie. A cookie is a small file
                that websites write to the hard disk drive of your computer when you visit them. A cookie file can
                contain information such as the ID that the site uses to track the pages you've visited. A cookie cannot
                read data from the hard disk drive of your computer or read cookie files created by other sites. We use
                cookies to keep an account of the traffic patterns of users. When you register, we use a cookie to store
                a unique ID. We use this ID to anonymously identify you in our database and to track the pages that you
                visit on the service, determine initial usage versus repeat usage, and help target advertisements based
                on user interests. Cookies can also help us make adjustments to fit your interests and preferences. Some
                of our business partners may use cookies on the service (for example, advertisers). However, we have no
                access or control over these cookies. If you have installed your browser so that you receive a warning
                before accepting cookies, you will receive a warning for each cookie. You may refuse cookies in your
                browser leaving them inactive. However, The Company requires cookies for access.
              </li>
            </ul>

            <h2>3. Parental consent</h2>
            <p>Protecting the privacy of children is especially important. For that reason, the Company does not
              knowingly collect or solicit personal information from anyone under the age of 18. If you are under 18,
              please do not send any personal information, including your name, address, telephone, or e-mail address.
              It is not allowed for anyone under the age of 18 to provide any personal information to the Company. In
              the event that we learn that we have the personal information of someone under 18 without parental
              consent, we will terminate the account and delete all the personal information as quickly as possible. If
              you believe that we might have any information from anyone under 18, please contact Customer Support:
              <a href="mailto:support@mobile2go.net" title="support@mobile2go.net">support@mobile2go.net</a>.
            </p>

            <h2>4. Notifications/Copyright</h2>
            <p>
              The Company places a high value on respecting third-party copyrights, and we have established a policy to
              respond to all copyright infringement notifications in accordance with relevant regulations. Upon
              receiving a notification that adheres to these guidelines, The Company may take action, including but not
              limited to removing or disabling access to the content believed to be infringing. In some cases, this may
              also involve disabling a user's account. During these actions, The Company will make efforts to reach out
              to the party responsible for posting the content, providing them with an opportunity to make any
              statements they deem necessary in accordance with applicable regulations.
            </p>

            <h2>5. Contact US</h2>
            <p>
              Please note that cancelling the service stops future charges, but it won't refund any past charges. There
              are no hidden fees or minimum product purchases required. For full terms and details, please refer to
              Terms and Privacy Policy. This offer is for users aged 18 and above. Please contact our support team
              <a href="mailto:support@mobile2go.net" title="support@mobile2go.net">support@mobile2go.net</a>.
            </p>
          </div>
        </div>
      </div>
    </div>
  </main>
  <?php include "pages/footer.php"; ?>

  <script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-C6RzsynM9kWDrMNeT87bh95OGNyZPhcTNXj1NW7RuBCsyN/o0jlpcV8Qyq46cDfL"
    crossorigin="anonymous"></script>

  <script src="assets/js/app.js"></script>
</body>

</html>
