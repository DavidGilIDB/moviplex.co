<?php



$sent = false;
$error_msg = false;

// hCaptcha Checking
if (isset($_POST['h-captcha-response']) && !empty($_POST['h-captcha-response'])) {
    $data = array(
        'secret' => "0xE4318d58C894FdDb88c5B7d8Dc5ba141b11A7d64",
        'response' => $_POST['h-captcha-response']
    );

    $verify = curl_init();
    curl_setopt($verify, CURLOPT_URL, "https://hcaptcha.com/siteverify");
    curl_setopt($verify, CURLOPT_POST, true);
    curl_setopt($verify, CURLOPT_POSTFIELDS, http_build_query($data));
    curl_setopt($verify, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($verify);
    $responseData = json_decode($response);
    if ($responseData->success) {

        $dataPost = array(
            'emailTo'       => $_SESSION['site_email'],
            'emailSubject'  => "Message sent from website",
            'domain'        => $_SESSION['site_domain'],
            'country'       => "-",
            'prefix'        => "-",
            'name'          => $_POST['name'],
            'email'         => $_POST['email'],
            'subject'       => $_POST['subject'],
            'message'       => $_POST['message'],
            'phone'         => 'not set',
            'type'          => 'captcha'
        );

        $sender = curl_init();
        curl_setopt($sender, CURLOPT_URL, CONTACTURL);
        curl_setopt($sender, CURLOPT_POST, true);
        curl_setopt($sender, CURLOPT_POSTFIELDS, http_build_query($dataPost));
        curl_setopt($sender, CURLOPT_RETURNTRANSFER, true);
        $result = curl_exec($sender);
        $res = json_decode($result);

        if ($res->code == 200) {
            $sent = true;
        } else {
            $sent = false;
            $error_msg = true;
        }
    } else {
        $sent = false;
        $error_msg = true;
    }
}


?>
<script src='https://www.hCaptcha.com/1/api.js' async defer></script>
<div class="login-popup contact-popup" style="position: relative; background: transparent; z-index: 0; display: revert">
    <div class="tab">
        <button class="tablinks active"><?php echo $trSupport; ?></button>
    </div>
    <div id="Sign-up" class="tabcontent">
        <div>
            <h3><?php echo $trContactUs; ?></h3>
            <p><?php echo $messageContact; ?></p>

            <h3><?php echo $trPhone; ?></h3>

            <p>+21 8139958</p>
            <h3><?php echo $trEmail; ?></h3>
            <p><?php echo $trContactByEmail; ?></p>

            <p>support@mytopfun.me.</p>
        </div>

        <div class="form">
            <form method="POST" action="">
                <input type="text" placeholder="<?php echo $trName; ?>" name="name">
                <input type="email" placeholder="<?php echo $trEmail; ?>" name="email">
                <input type="text" placeholder="<?php echo $trSubject; ?>" name="subject">
                <textarea style="font-family: sans-serif; font-size: 13px;" 
                name="message" placeholder="<?php echo $trMessage; ?>"></textarea>
                <br>
                <div class="h-captcha" style="text-align:center" 
                data-sitekey="ad837be1-2815-41d2-afd5-bff95e563963"></div>
                <br>
                <button class="btn btn-login"><?php echo $trSendMessage; ?></button>         
                <?php if ($error_msg == true) { ?><sub style="color: red; text-align:center;display:block">
                        <?php echo $trMessageError; ?></sub><?php } ?>
                <?php if ($sent == true) { ?><sub style="color: green; text-align:center;display:block">
                        <?php echo $trMessageSent; ?></sub><?php } ?>
            </form>
        </div>
    </div>
</div>