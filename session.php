<?php
if (isset($_GET['logout']) == 'true') {
    session_unset();
    session_destroy();
    $error = 'BYE';
    header("Location:".$_SERVER["PHP_SELF"]);
}


if (isset($_POST["btnSubmitEmail"])) {

    $email = $_POST["email"];

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, SEND_OTP . "?email=" . $email);
    //curl_setopt($curl_handle, CURLOPT_URL, LOGINURLEMAIL . "?service=FLEXCAST&email=" . $email);
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
        $error_email = true;
    }
} elseif (isset($_POST["btnSubmitOtp"])) {

    $otp = $_POST["otp"];

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, LOGIN . "?email=" .  $_SESSION["email"] . '&otp=' . $otp);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, false);
    $response = curl_exec($curl_handle);
    curl_close($curl_handle);

    if ($response == 'OK') {

        $_SESSION['login'] = true;
        $_SESSION['pay_status'] = true;
    } elseif ($response == 'PENDING') {

        $_SESSION['login'] = true;
        $_SESSION['pay_status'] = false;
    } else {
        $showOpt = true;
        $error_otp = '<p></p>';
    }
}
