<?php
//var_dump($_SESSION['login']);
//var_dump($_SESSION['pay_status']);

if (isset($_GET['logout']) == 'true') {
    session_unset();
    session_destroy();
    $error='BYE';
    header('Location:index.php');
}

/** check username and password in login */
/*
if (isset($_POST['username']) && $_POST['username']!='') {


    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, LOGINURL . "?email=&username=" . $_POST['username'] . "&password=" . $_POST['password'] . "&msisdn=&productId=" . $_POST['productId']);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    if ($buffer == 'OK') {
        $page='home';
        $_SESSION['login']=true;
        $_SESSION['pay_status']=true;
    }else if($buffer == 'PENDING'){
        $page='home';
        $_SESSION['login']=true;
        $_SESSION['pay_status']=false;
    } else {
        $error = 'Usuario no registrado';
    }
}*/

if(isset($_POST['emailSignup']) || isset($_GET['emailSignup'])){
    if(isset($_POST['emailSignup'])){
    $_SESSION['email']=$_POST['emailSignup'];
    }else{
    $_SESSION['email']=$_GET['emailSignup'];
    }
    $_SESSION['login'] = true;
    $_SESSION['pay_status'] = true; 
    header('Location: index.php');
}

/** check email in login */

if (isset($_POST['email']) && $_POST['email'] != '' || isset($_GET['email']) && $_GET['email'] != '') {

    if(isset($_POST['email'])){
        $first=false;
        $email=$_POST['email'];
    }else{
        $first=true;
        $email=$_GET['email'];
    }

    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, LOGINURLEMAIL . "service=MOVIPLEX&email=" . $email);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);


    if ($buffer == 'OK') {
        if($first==true){ // || $email=='compliance@solidgate.com'
            $_SESSION['email']= $email;
            $_SESSION['login'] = true;
            $_SESSION['pay_status'] = true;
            header('Location: index.php');
        }else{
        $page = 'otp-page';
        }
    } else if ($buffer == 'PENDING') {
        $_SESSION['email']= $email;
        $_SESSION['login'] = true;
        $_SESSION['pay_status'] = false;
        header('Location: index.php');
    }else {
        header('Location: index.php?page=error');
        
    }
}
/* REGISTRAR
$curl_handle = curl_init();
        curl_setopt($curl_handle, CURLOPT_URL, LOGINURLEMAIL . "?email=" . $_POST['email'] . "&username=&password=&msisdn=&productId=" . $_POST['productId']);
        curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
        $buffer = curl_exec($curl_handle);
        curl_close($curl_handle);

        if ($buffer == 'OK') {
            $page = 'home';
            $_SESSION['login'] = true;
            $_SESSION['pay_status'] = true;
        } else if ($buffer == 'PENDING') {
            $page = 'home';
            $_SESSION['login'] = true;
            $_SESSION['pay_status'] = false;
        }else {
            $error = 'Usuario no registrado';
        } */

/** check email */
if (isset($_POST['verificationEmail'])) {

    $result = emailVerificaction($_POST['verificationEmail'], $_POST['otp']);
    if ($result == 'OK') {
        $_SESSION['login'] = true;
        $_SESSION['pay_status'] = true;
        $_SESSION['email']= $_POST['verificationEmail'];
        header('Location: index.php');
    } else if ($result == 'PENDING') {
        $_SESSION['login'] = true;
        $_SESSION['pay_status'] = false;
        $_SESSION['email']= $_POST['verificationEmail'];
        header('Location: index.php');
    } else {
        $error = '<p>OTP Incorrecto</p>';
    }
}


/** function check email */
function emailVerificaction($email, $otp)
{
    $curl_handle = curl_init();
    curl_setopt($curl_handle, CURLOPT_URL, VERIFICATIONURL . "?email=" . $email . "&otp=" . $otp);
    curl_setopt($curl_handle, CURLOPT_CONNECTTIMEOUT, 60);
    curl_setopt($curl_handle, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($curl_handle, CURLOPT_SSL_VERIFYPEER, FALSE);
    $buffer = curl_exec($curl_handle);
    curl_close($curl_handle);

    return $buffer;
}

//var_dump($userAgent);
//die;
