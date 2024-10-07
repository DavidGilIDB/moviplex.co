<main>
	<div class="modal" id="otpModal" style="display: block;">
		<div class="modal-dialog modal-dialog-centered modal-dialog-scrollable">
			<div class="modal-content">
				<a href='' class="close-modal"><img src="assets/images/close-mark.svg" alt="Close"></a>
				<div class="modal-header flex-column">
					<h4 class="modal-title" id="otpModal">Login</h4>
					<span>Enter your username and password to Login or Register</span>
				</div>
				<div class="modal-body pt-0">
					<form method="POST" name='verificationForm' action="">
						<div class="form-group input-icon-left">
							<i class="fa fa-user"></i>
							<input type="otp" class="form-control" id="otp" name="otp" placeholder="OTP Number">
						</div>
						<input type="hidden" name="verificationEmail" id='verificationEmail' value="<?= (isset($_POST['email'])) ? $_POST['email'] : "" ?>">
						<button type="submit" class="btn btn-primary btn-block mt-4">Login</button>
					</form>
					<!-- Cuadro de error si el login Falla -->
					<br />

					<?php
					if (isset($error) && $error) {
					?>

						<div class="alert alert-danger" style="text-align: center">
							<strong>Error!</strong>
							<br>
							The mobile number you've provided is not valid.<br> Please try again.
						</div>

					<?php
					}
					?>

				</div>
			</div>
		</div>
	</div>
</main>