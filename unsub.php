<?php

session_start();
header("X-Frame-Options: sameorigin");

include("Global.php");

if (isset($_SESSION['email'])) {
    $email = $_SESSION['email'];
} else {
    $email = null;
}

$curl_handle = curl_init();
curl_setopt($curl_handle, CURLOPT_URL, UNSUB . "?email=" . $email);
curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
$buffer = curl_exec($curl_handle);
curl_close($curl_handle);

if ($buffer == 'OK') {
    header('Location:index.php?page=unsub-confirm');
} else {
    header('Location:index.php?page=error');
}
