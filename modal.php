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

    .form-modal-otp>form input:focus {
        outline: none;
        color: white;
        border: 3px solid #052c65;
        padding-left: 10px
    }

    .form-modal-otp>form input::placeholder {
        color: white;
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

        let showOpt = '<?php echo (isset($showOpt) && $showOpt) ? "true" : "false" ?>'
        let errorEmail = '<?php echo (isset($error_email) && $error_email) ? "true" : "false" ?>'
        let errorOtp = '<?php echo (isset($error_otp) && $error_otp) ? "true" : "false" ?>'

        let login = '<?php echo (isset($_SESSION["login"]) && $_SESSION["login"]) ? "true" : "false" ?>'

        if (login == "true") {

            var padre = $('.modal-background');

            padre.css("display", "none");
            padre.find(".modal-container-email").css("display", "none");
            padre.find(".modal-container-email").find(".errorEmail").text("");

            padre.find(".modal-container-otp").css("display", "none");
            padre.find(".modal-container-otp").find(".errorOtp").text("");

        }

        if (showOpt == "true") {
            $(".modal-background").css("display", "flex")
            $(".modal-container-email").css("display", "none")
            $(".modal-container-otp").css("display", "flex")
        }
        // Failed to send OTP. Please try again.

        if (errorEmail == "true") {
            $(".modal-background").css("display", "flex")
            $(".modal-container-email").css("display", "flex")
            $(".modal-container-email").find(".errorEmail").text("Failed to send OTP. Please try again.");
        }
        if (errorEmail == "true") {
            $(".modal-container-opt").find(".errorOtp").text("OTP Incorrect");
        }

        $(".noLogin").on("click", function(e) {

            $(".modal-background").css("display", "flex")
            $(".modal-container-email").css("display", "flex")
        })


        $(".modal-background").on("click", function(e) {

            if (e.target === this) {

                $(this).css("display", "none");

                $(this).find(".modal-container-email").css("display", "none");
                $(this).find(".modal-container-email").find(".errorEmail").text("");

                $(this).find(".modal-container-otp").css("display", "none");
                $(this).find(".modal-container-otp").find(".errorOtp").text("");
            }

        })

        $(".closeIcon").on("click", function(e) {

            var padre = $(this).parents('.modal-background');
            padre.css("display", "none");
            padre.find(".modal-container-email").css("display", "none");
            padre.find(".modal-container-email").find(".errorEmail").text("");

            padre.find(".modal-container-otp").css("display", "none");
            padre.find(".modal-container-otp").find(".errorOtp").text("");
        })

    });
</script>

<div class="modal-background">
    <div class="modal-container-email">
        <div class="close-modal-email">
            <button><img src="./assets/close.svg" alt="Close icon" class="closeIcon"></button>
        </div>
        <div class="form-modal-email">
            <h4>Email</h4>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="email" name="email" id="email" aria-label="email" placeholder="Email" required>
                <button type="submit" name="btnSubmitEmail">Submit</button>
            </form>
            <p><span>Continue without login</span> or <a href="https://premium.moviplex.co/en/index.php">Register</a></p>
            <span class="errorEmail"></span>
        </div>
    </div>
    <div class="modal-container-otp">
        <div class="close-modal-otp">
            <button><img src="./assets/close.svg" alt="Close icon" class="closeIcon"></button>
        </div>
        <div class="form-modal-otp">
            <h4>OTP</h4>
            <form action="<?= $_SERVER["PHP_SELF"] ?>" method="post">
                <input type="text" name="otp" id="otp" aria-label="otp" required>
                <button type="submit" name="btnSubmitOtp">Sign In</button>
            </form>
            <p><span>Continue without login</span> or <a href="https://premium.moviplex.co/en/index.php">Register</a></p>
            <span class="errorOtp"></span>
        </div>
    </div>
</div>